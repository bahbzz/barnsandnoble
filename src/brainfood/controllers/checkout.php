<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\cart as Cart;
	use brainfood\model\orders as Orders;
	use brainfood\model\user as User;
	//use Illuminate\Support\Facades\DB;
	use Illuminate\Database\Capsule\Manager as DB;

	class Checkout extends Basecontroller {
		protected $blade;
		protected $_validation_rules = [
		"code"=>"empty:|numeric:",
		"phone"=>"empty:|len:5:20|numeric:",
		"addy"=>"empty:|",
		];

		public function showCheckout() {			
			echo $this->blade->render('checkout',['totalItems'=>$this->_countCartItems, 'totalPrice'=>Cart::getTotal($_SESSION['user_id'])] );
		}

		public function finalCheckout() {
			
			$error = $this->validator->isValid($this->_validation_rules);
			$impdata = Cart::cartTable($_SESSION['user_id']);
						
			if(empty($error)){
				//dump($impdata); 
				foreach ($impdata as $product) {
					$orders = new Orders();
					$orders->phone = $_REQUEST['phone'];
					$orders->address = $_REQUEST['addy'];
					$orders->postcode = $_REQUEST['code'];
					$orders->user_id = $_SESSION['user_id'];
					$orders->cart_id = $product->cart_id;
					$orders->product_id = $product->product_id;
					$orders->quantity = $product->quantity;
					//dump($orders); exit();
					$orders->save();
					DB::table('cart')->where('user_id', '=', $_SESSION['user_id'])->delete();

					}
				
				header("Location: /catalogue");

			} else {
				echo $this->blade->render('checkout', ["errors"=>$error, 'totalPrice'=>Cart::getTotal($_SESSION['user_id']), 'totalItems'=>$this->_countCartItems]);
			}

		  
		}
	}
	
