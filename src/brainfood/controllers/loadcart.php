<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\category as Category;
	use brainfood\model\user as User;
	use brainfood\model\cart as Cart;


	class LoadCart extends BaseController {
		protected $blade;

		public function showCart($id) {
			
			$cartlist = Cart::cartTable($id);

			echo $this->blade->render('cart', [ 'cartlist'=>Cart::cartTable($id), 'cartid'=>Cart::getcartByid($id), 'usr'=>User::getUser($id), 'id'=>$id,'totalItems'=>$this->_countCartItems]);
			
		}	
	}
