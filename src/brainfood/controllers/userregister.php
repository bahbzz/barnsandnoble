<?php

	namespace brainfood\controllers;
	use brainfood\model\user as User;
		
	class UserRegister extends BaseController{
		protected $blade;
		protected $_validation_rules = [
			"fname"=>"empty:|len:5:20|!numeric:",
			"lname"=>"empty:|len:5:20|!numeric:",
			"email"=>"empty:|email:",
			"uname"=>"empty:|",
			"password"=>"empty:|len:8:20",
			"pword"=>"equal:password"
			];


		public function showUserRegister() {
			echo $this->blade->render('userregister');
		}


		public function doUserRegister() {
			
			$error = $this->validator->isValid($this->_validation_rules);
			
			if(empty($error)){
				$user = new User();
				$user->firstname = $_REQUEST['fname'];
				$user->lastname = $_REQUEST['lname'];
				$user->email = $_REQUEST['email'];
				$user->username = $_REQUEST['uname'];
				$user->hash = $this->hashpassword($_REQUEST['password']);
				$user->save();
				header("Location: /login");
			} else {
				echo $this->blade->render('userregister', ["errors"=>$error]);
			}
		}
	
		private function hashPassword($password){
			return password_hash($password, PASSWORD_BCRYPT);
		}

	}



	
