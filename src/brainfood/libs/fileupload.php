<?php
	
	namespace brainfood\libs;

	class FileUpload {
		protected $ext;
		protected $max_file_size;
		protected $location;
		protected $file;
		protected $uploadDir;

		public function __construct($extension, $max_size, $location, $file, $pathToupload) {
			$this->ext = $extension;
			$this->max_file_size = $max_size;
			$this->location = $location;
			$this->file = $file;
			$this->uploadDir = $pathToupload;
		}

		public function doUpload() {
			$result = [];
			$state = TRUE;

			$rnd = uniqid(rand(0000, 9999), true); //generate unique random numbers.
			$filename = $this->file['name'];
			$loc = $this->location.$rnd.$filename;
			$pathToupload = $this->uploadDir.$rnd.$filename;
			//$error = [];
			
			if($this->file['size'] > $this->max_file_size) {
				$state = FALSE;
				$result[] = $state;
				$result[] = 'file size too large, See instructions';
				
			}

			//be sure file extension is allowed
			if (!in_array($this->file['type'], $this->ext)) {
				$state= FALSE;
				$result[] = $state;
				$result[] = 'File format not accepted, See instructions';
				
			}

			if(!move_uploaded_file($this->file['tmp_name'], $loc)) {
				$state = FALSE;
				$result[] = $state;
				$result[] = 'file upload failed, Please contact administrator';
				
			}

			if ($state == FALSE) {
				return $result;
			} else {
				$result[] = $state;
				$result[] = $pathToupload; 

				return $result;
			}


		}

	}
