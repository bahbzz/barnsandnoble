<?php

	namespace brainfood\controllers;
	use brainfood\model\product as Product;
	use brainfood\model\category as Category;

	class Catalogue extends BaseController {
		protected $blade;


		public function showCatalogue() {
			echo $this->blade->render('catalogue', ['prdt'=>Product::getAllProducts(), 'cat'=>Category::getAllCategories(),
				'totalItems'=> $this->_countCartItems]);
		}


		public function clickCategory($id) {
			echo $this->blade->render('catalogue',['prdt'=>Product::getproductbyCatId($id), 'cat'=>Category::getAllCategories(),
				'totalItems'=> $this->_countCartItems]);
		}



	}

