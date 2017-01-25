<?php
	namespace brainfood\controllers;
	use duncan3dc\Laravel\BladeInstance;
	use brainfood\libs\validator as valid;
	use brainfood\model\cart as Cart;

	class BaseController {
		protected $blade;
		protected $_validator;
		protected $_countCartItems;

		public function __construct() {
			$this->validator = new Valid();
			$this->blade = new BladeInstance($_ENV['APP_PATH'] ."/views", $_ENV['HOUSE']."/cache/views");
			if(isset($_SESSION['user_id'])) {
				$getTotal = Cart::countCartItems($_SESSION['user_id']);
				$this->_countCartItems = ( $getTotal > 0) ? $getTotal : 0;
			}
		}
	}
