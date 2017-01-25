<?php

	namespace brainfood\controllers;
	use brainfood\model\category as Category;

	class ViewCategory extends BaseController {

		protected $blade;

		public function showViewCategorypage() {
			echo $this->blade->render('viewcategory', ['cat'=>Category::getAllCategories()]);
		}

		/*private static function getAllCategories(){
			$cat = Category::all();
			return $cat;
		}*/
	}
