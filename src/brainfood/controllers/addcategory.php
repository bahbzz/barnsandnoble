<?php

	namespace brainfood\controllers;
	use brainfood\model\category as Category;


	class AddCategory extends BaseController{
		protected $blade;

		protected $_validation_rules = [
			"cname"=>"empty:|!numeric:",

		];

		public function addCategory() {
			echo $this->blade->render('addcategory'); #this 'addcategory must always match that of views'
		}


		public function doAdd() {
			
			$error = $this->validator->isValid($this->_validation_rules);
			
			if(empty($error)){
				$cat = new Category();
				$cat->category_name = $_REQUEST['cname'];
				$cat->save();
				header("Location: /addcategory");

			} else {
				echo $this->blade->render('addcategory', ["errors"=>$error]);
			}

		}

	}
