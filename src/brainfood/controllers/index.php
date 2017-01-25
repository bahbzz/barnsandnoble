<?php
	

	namespace brainfood\controllers;
	use brainfood\model\spalsh as Spalsh;
	use brainfood\model\product as Product;
	use brainfood\model\category as Category;
	use brainfood\model\trending as Trending;

	//session_start();


	class Index extends BaseController {
		protected $blade;
		/*protected $_validation_rules = [
		"quantity"=>"empty:|!numeric:"
		];*/


		public function showIndex() {
			//$error = $this->validator->isValid($this->_validation_rules);
			
			echo $this->blade->render('index', ['splash'=>Spalsh::getAllSpalsh(), 'trend'=>Trending::getAllTrending(), 'totalItems'=>$this->_countCartItems]);

			/*if(!empty($error)){

			echo $this->blade->render('index', ["errors"=>$error, 'prody'=>Product::getProduct($id), 'splash'=>Spalsh::getAllSpalsh(), 'usr'=>User::getUser($id)]);
			}*/
			
		}

	}
