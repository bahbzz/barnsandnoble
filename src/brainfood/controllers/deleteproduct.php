<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\category as Category;

	class Deleteproduct extends BaseController {


		public function DoDeleteproduct($id) {

			$prody = Product::getProduct($id);
			$prody->delete();

			header("Location: /viewproduct");
		}
	}
