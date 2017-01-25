<?php 

	namespace brainfood\controllers;
	use brainfood\model\admin as Admin;
		
	class AdminRegister extends BaseController{
		protected $blade;
		protected $_validation_rules = [
			"fname"=>"empty:|len:5:20|!numeric:",
			"lname"=>"empty:|len:5:20|!numeric:",
			"email"=>"empty:|email:",
			"password"=>"empty:|len:8:20",
			"pword"=>"equal:password"
			];


		public function showRegister() {
			echo $this->blade->render('register');
		}

		public function doRegister() {
			
			$error = $this->validator->isValid($this->_validation_rules);
			
			if(empty($error)){
				$admin = new Admin();
				$admin->firstname = $_REQUEST['fname'];
				$admin->lastname = $_REQUEST['lname'];
				$admin->email = $_REQUEST['email'];
				$admin->hash = $this->hashpassword($_REQUEST['password']);
				$admin->save();
				header("Location: /userlogin");
			} else {
				echo $this->blade->render('register', ["errors"=>$error]);
			}
		}
	
		private function hashPassword($password){
			return password_hash($password, PASSWORD_BCRYPT);
		}

	}
