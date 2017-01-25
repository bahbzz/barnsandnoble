<?php

	namespace brainfood\libs;
	use Respect\Validation\Validator as v;

	class Validator {


		public function isValid($rules) {
			$error = [];
			foreach ($rules as $name => $rule){
				$explodeat = explode('|', $rule);

				foreach($explodeat as $method) {
					$realrules = explode(':', $method);


					switch($realrules[0]) {
						case "min":
							if(v::min($realrules[1])->validate($_REQUEST[$name]) == FALSE) {
								$error[$name] = "minimum number of characters needed is ".$realrules[1]; 
							}
						break;

						case "max":
							if(v::max($realrules[1])->validate($_REQUEST[$name]) == FALSE) {
								$error[$name] = "maximum number of characters exceeded, it has to be 20";
							}
						break;

						case "empty":
							if (v::notEmpty()->validate($_REQUEST[$name]) == FALSE) {
								$error[$name] = "Name field cannot be empty";
							}
						break;

						case "!numeric":
							if(V::numeric()->validate($_REQUEST[$name]) == TRUE) {
								$error[$name] = "field cannot be numeric";
							}
						break;

						case "len":
							if(V::length($realrules[1], $realrules[2])->validate($_REQUEST[$name]) == FALSE) {
								$error[$name] = "minimum character length is ".$realrules[1]. " and maximum character length is ".$realrules[2];
							}
						break;

						case "email":
							if(v::email()->validate($_REQUEST[$name]) == FALSE) {
								$error[$name] = "Please enter a valid email address";
							}
						break;

						case "alnum":
							if(v::alnum()->validate((string)$_REQUEST[$name]) == FALSE) {
								$error[$name] = "Your password must contain both alphabets and numbers";
							}
							break;

						case "equal":
							if(v::equals($_REQUEST[$name])->validate($_REQUEST[$realrules[1]]) == FALSE) {
								$error[$name] = "Please use matching passwords";
							}
							break;

						case "numeric":
							if(v::numeric()->validate($_REQUEST[$name]) == FALSE) {
								$error[$name] = "Please enter a numeric value for price";
							}
						break;

						case "nulltype":
							if(v::nullType()->validate($name) == TRUE) {
								$error[$name] = "Field cannot be null";
							}

					}		
				}
			}


			return $error;
		}


	}	
