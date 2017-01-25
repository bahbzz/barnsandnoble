<?php

	namespace brainfood\controllers;
	//use brainfood\model\category as Category;
	use brainfood\model\product as Product;

	class ViewProduct extends BaseController {

		protected $blade;



		public function showViewProductpage() {
			//echo $this->blade->render('viewcategory', ['cat'=>Category::getAllCategories()]);
			echo $this->blade->render('viewproduct', ['prdt'=> Product::getAllProducts()]);
		}

	}
