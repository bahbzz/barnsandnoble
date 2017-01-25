<?php 

	namespace brainfood\controllers;
	use brainfood\model\admin as Admin;
	
	class AdminLogin extends BaseController{
		protected $blade;
		protected $_validation_rules = [
			"email"=>"empty:|email:",
			"password"=>"empty:"
			];
		
		public function showLogin() {
			echo $this->blade->render('login');
		}

		function doLogin() {
			$error = $this->validator->isValid($this->_validation_rules);
			$hashed = "";
			$admin_id = "";
			if(empty($error)){

				$admin = new Admin();
				$admin = Admin::where('email', '=', $_REQUEST['email'])->get();
				foreach($admin as $adm) {
					$hashed = $adm->hash;
					$admin_id = $adm->admin_id;
				}

				$chk = $this->validatePassword($_REQUEST['password'], $hashed);
				$msg = "Username or password incorrect";
				if(!$chk) {
					echo $this->blade->render('login', ['msg'=>$msg]);
				} else {
				$_SESSION['admin_id'] = $admin_id;
				header("Location: /addproducts");
				}

			} else {
				echo $this->blade->render('login', ["errors"=>$error]);
			}
		}

		private function validatePassword($pass, $hash) {
			return password_verify($pass, $hash);
		}

		
	}
