<?php

	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Trending extends Eloquent {
		protected $table = 'trending';
		protected $primaryKey = 'product_id';

		public static function getAllTrending(){
			$trend = Trending::all();
			return $trend;
		}

		public static function getProduct($id) {
			$prody = Trending::where("product_id", '=', $id)->first();
			return $prody;
		}
	}
