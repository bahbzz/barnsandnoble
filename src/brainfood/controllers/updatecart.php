<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\cart as Cart;

	class Updatecart extends BaseController {
		protected $blade;
		protected $_validation_rules = [
		"quantity"=>"empty:|numeric:"
		];


		public function updateCart($id) {
			$error = $this->validator->isValid($this->_validation_rules);
			$uid = $_SESSION['user_id'];

			if(empty($error)){
				$item = Cart::find($_REQUEST['c_id']);
				$item->quantity = $_REQUEST['quantity'];
				$item->save();
				//dump($item);

				//exit();
				header("Location: /loadcart/$uid/");

			}
				

			
								

			

		}
	}	
