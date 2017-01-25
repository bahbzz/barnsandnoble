<?php

	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;

	

	class User extends Eloquent {
		protected $table = 'user';
		protected $primarykey = 'user_id';

		public static function getAllUser(){
			$user = User::all();
			return $user;
		}

		public static function getUser($id) {
			$usr = User::where("user_id", $id)->first();
		
			return $usr;
		}
	}
