<?php
	
	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Category extends Eloquent {
		protected $table = 'category';
		protected $primaryKey = 'category_id';

		public static function getAllCategories(){
			$cat = Category::all();
			return $cat;
		}

		public static function getCategory($id) {
			$caty = Category::where("category_id", '=', $id)->get();
			return $caty;
		}
	}	
