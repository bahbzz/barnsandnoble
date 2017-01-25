<?php

	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Spalsh extends Eloquent {
		protected $table = 'spalsh';
		protected $primaryKey = 'splash_id';

		
		public static function getAllSpalsh(){
			$splash = Spalsh::all();
			return $splash;
		}


		public static function getSpalsh($id) {
			$splash = Spalsh::where("splash_id", '=', $id)->first();
			return $splash;
		}
	}
