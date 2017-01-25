<?php

	
	namespace brainfood\controllers;
	use brainfood\model\admin as Admin;
	use brainfood\model\category as Category;
	use brainfood\model\product as Product;
	use brainfood\libs\fileupload as Uploader;
		
	class AddProducts extends BaseController{
		protected $blade;
		protected $_validation_rules = [
			"name"=>"empty:|!numeric:",
			"auth"=>"empty:|!numeric:",
			"price"=>"empty:|numeric:",
			"bkcat" => "nulltype:"
			
			];

		public function showProductpg() {
			echo $this->blade->render('addproducts', ['cat'=>Category::getAllCategories()]);
		}

		public function doAddProducts() {
			$error = $this->validator->isValid($this->_validation_rules);

			$fp = new Uploader(['image/jpg','image/jpeg', 'image/png'], 2097152, $_ENV['HOUSE'].'/www/uploads/', $_FILES['pic'], '/uploads/');
				$res = $fp->doUpload();

			if($res[0] == FALSE) {
				$error['pic'] = $res[1];
			}
			//dump($error);
			//exit();

			if(empty($error)){
			
				$n_prodct = new Product();
				$n_prodct->category_id = $_REQUEST['bkcat'];
				$n_prodct->product_name = $_REQUEST['name'];
				$n_prodct->author_name = $_REQUEST['auth'];
				$n_prodct->image = $res[1];
				$n_prodct->price = $_REQUEST['price'];
				$n_prodct->save();
				

				header("Location: /addproducts");

			} else {
				
				echo $this->blade->render('addproducts', ["errors"=>$error, 'cat'=>Category::getAllCategories()]);
			}
		}


		
	}
