<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\category as Category;

	class Editproduct extends BaseController {
		protected $blade;
		protected $_validation_rules = [
			"name"=>"empty:|!numeric:",
			"auth"=>"empty:|!numeric:",
			"price"=>"empty:|numeric:",
			"bkcat" => "nulltype:"
			
			];


		public function showEditProductpage($id) {
			echo $this->blade->render('editproduct', ['cat'=>Category::getAllCategories(), 'prdt'=>Product::getProduct($id), 'id'=>$id]);
			//echo $this->blade->render('editproduct', ['cat'=>Category::getAllCategories()]);

		}
		public function doEditProduct($id) {
			//echo $this->blade->render('editcategory', ['cat'=>Category::getAllCategories(), 'id'=>$id]);

			$error = $this->validator->isValid($this->_validation_rules);
			
			if(empty($error)){
				$prdt = Product::getProduct($id);
				$prdt->product_name = $_REQUEST['name'];
				$prdt->author_name = $_REQUEST['auth'];
				$prdt->price = $_REQUEST['price'];
				$prdt->category_id = $_REQUEST['bkcat'];

				$prdt->save();
				header("Location: /viewproduct");
			
			} else {
				echo $this->blade->render('editcategory', ['cat'=>Category::getCategory($id)(), 'id'=>$id, "errors"=>$error]);
			}

		}
	}
