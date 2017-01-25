<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\cart as Cart;
	

	class DeletefromCart extends BaseController {
		
		public function deleteFromcart($id) {
			$uid = $_SESSION['user_id'];
			$item = Cart::find($_REQUEST['c_id']);
			//dump($item); exit();
			$item->delete();

			//header("Location: /loadcart/{!! $_SESSION["user_id"] !!}/");
			header("Location: /loadcart/$uid/");

		}
	}
