<?php

	namespace brainfood\controllers;
	use brainfood\model\category as Category;

	class Editcategory extends BaseController {
		protected $blade;
		protected $_validation_rules = [
			"cname"=>"empty:|!numeric:",

		];


		public function showEditCategorypage($id) {
			echo $this->blade->render('editcategory', ['cat'=>Category::getCategory($id), 'id'=>$id]);
		}

		public function doEditCategory($id) {
			//echo $this->blade->render('editcategory', ['cat'=>Category::getAllCategories(), 'id'=>$id]);

			$error = $this->validator->isValid($this->_validation_rules);
			
			if(empty($error)){
				$cat = Category::getCategory($id);
				$cat->category_name = $_REQUEST['cname'];
				$cat->save();
				header("Location: /viewcategory");
			
			} else {
				echo $this->blade->render('editcategory', ['cat'=>Category::getCategory($id)(), 'id'=>$id, "errors"=>$error]);
			}



			
		}
	}
