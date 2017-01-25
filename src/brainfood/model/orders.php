<?php

	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;
	use Illuminate\Support\Facades\DB;

	class Orders extends Eloquent {
		protected $table = 'orders';
		protected $primarykey = 'order_id';

		public static function getAllOrders(){
			$order = Orders::all();
			return $order;
		}

		// public static function ordersTable() {
		// 	$order = DB::table('orders')->INSERT INTO orders values(NULL, )
		// }
		
		
	}
