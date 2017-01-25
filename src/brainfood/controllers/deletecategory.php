<?php

	namespace brainfood\controllers;
	use brainfood\model\category as Category;

	class Deletecategory extends BaseController {
		protected $blade;


		public function doDeleteCategory($id){
			//$error = $this->validator->isValid($this->_validation_rules);
			
			//if(empty($error)){
				$cat = Category::getCategory($id);
				dump($cat); exit();
				$cat->delete();

				header("Location: /viewcategory");
		
		}

	}
