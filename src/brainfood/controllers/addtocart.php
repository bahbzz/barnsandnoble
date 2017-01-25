<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\category as Category;
	use brainfood\model\user as User;
	use brainfood\model\cart as Cart;
	use brainfood\model\spalsh as Spalsh;

	class Addtocart extends BaseController {
		protected $blade;
		protected $_validation_rules = [
		"quantity"=>"empty:|numeric:"
		];



		public function addToCart($id) {
			$error = $this->validator->isValid($this->_validation_rules);

				if(isset($_SESSION['user_id'])) {
					$chkprdt = Cart::checkProduct($id);
					if($chkprdt) {
			 			$uid = $_SESSION['user_id'];
			 			header("Location: /loadcart/$uid/");
					}
					else {
						if(empty($error)){
							$cartitem = new Cart();
							
							$cartitem->user_id = $_SESSION['user_id'];
							$cartitem->product_id = $id;
							$cartitem->quantity = $_REQUEST['quantity'];	
							$cartitem->save();
							header("Location: /catalogue");

						} else {
							echo $this->blade->render('addtocart', ["errors"=>$error, 'prody'=>Product::getProduct($id), 'splash'=>Spalsh::getAllSpalsh(), 'usr'=>User::getUser($id)]);
						
						}
					}

				} else {
					header("Location: /userlogin");
				}
			}
		

	}
