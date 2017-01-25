<?php

	namespace brainfood\controllers;
	use brainfood\model\user as User;


	class UserLogin extends BaseController{
		protected $blade;
		protected $_validation_rules = [
			"email"=>"empty:|email:",
			"password"=>"empty:"
			];
		
		public function showUserLogin() {
			echo $this->blade->render('userlogin');
		}


		function doUserLogin() {
			$error = $this->validator->isValid($this->_validation_rules);
			$hashed = "";
			$user_id = "";
			if(empty($error)){

				$user = new User();
				$user = User::where('email', '=', $_REQUEST['email'])->get();
				foreach($user as $usr) {
					$hashed = $usr->hash;
					$user_id = $usr->user_id;
				}

				$chk = $this->validatePassword($_REQUEST['password'], $hashed);
				$msg = "Username or password incorrect";
				if(!$chk) {
					echo $this->blade->render('userlogin', ['msg'=>$msg]);
				} else {
				$_SESSION['user_id'] = $user_id;
				header("Location: /catalogue");
				}

			} else {
				echo $this->blade->render('userlogin', ["errors"=>$error]);
			}
		}

		private function validatePassword($pass, $hash) {
			return password_verify($pass, $hash);
		}	

	}
