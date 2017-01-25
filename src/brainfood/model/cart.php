<?php

	namespace brainfood\model;
	use Illuminate\Database\Eloquent\Model as Eloquent;
	//use Illuminate\Support\Facades\DB;
	use Illuminate\Database\Capsule\Manager as DB;

	
	class Cart extends Eloquent {
		public $timestamps = FALSE;
		protected $table = 'cart';
		protected $primaryKey = 'cart_id';

		public static function getAllCart(){
			$cart = Cart::all();
			return $cart;
		}

		public static function getcartByid($id){
			$cartid = Cart::where('user_id', $id)->get();
			
			return $cartid;
		}

		public static function cartTable($user_id) {
			$cart = DB::table('cart')
			->join('products', function($join){
				$join->on('cart.product_id', '=', 'products.product_id');})
				->where('user_id', '=', $user_id)
			->get();

			return $cart;
		}

		public function deleteCart($id) {
			$deletecart = Cart::where('user_id', $id)->get();
			return $deletecart;
		}

		// public static function deleteitem($uid, $id) {
		// 	$item = Cart::where('user_id', '=', $uid  AND 'product_id', '=', $id)->get();
		// 	return $item;
		// }

		// public static function UpdateCartItem($id, $uid) {
			
		// 	$cartitem = Cart::where("user_id", '=', $uid  AND "product_id", '=', $id);

		// 	return $cartitem;
		// }
		public static function countCartItems($id) {
			$cartitems = DB::table('cart')->where('user_id', '=', $id)->get()->count();
			return $cartitems;
			
		}

		public static function checkProduct($id) {
			$result = FALSE;
			$chkprdts = DB::table('cart')->where('user_id', '=', $_SESSION['user_id'])
			 ->where('product_id', '=', $id)->count();
				if ($chkprdts > 0) {
				$result = TRUE;
				}

			return $result;
		}

		public static function getTotal($id) {
			$cartlist = Cart::cartTable($id);
			$total = 0;

			foreach ($cartlist as $cartitem) {
				$total += $cartitem->quantity * $cartitem->price;
			}
			return $total;
		}

	}
