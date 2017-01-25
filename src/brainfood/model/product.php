<?php
	
	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Product extends Eloquent {
		protected $table = 'products';
		protected $primaryKey = 'product_id';

		public static function getAllProducts(){
			$prdt = Product::all();
			return $prdt;
		}

		public static function getProduct($id) {
			$prody = Product::where("product_id", '=', $id)->first();
			return $prody;
		}

		public static function getCartProduct($id) {
			$prod = Product::where("product_id", $id);
			return $prod;
		}

		public static function getproductbyCatId($id) {
			$prodt = Product::where("category_id", '=', $id)->get();
			return $prodt;
		}
	}
