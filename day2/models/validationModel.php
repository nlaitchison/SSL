<?

	class validationModel{

		public function validateLogin($email, $password){

			$pEmail = "/^[^@]*@[^@]*\.[^@]*$/";
			$pPassword = "/^([a-zA-Z0-9@*#]{8,15})$/";
			$emailValid = false;
			$passwordValid = false;

			if (preg_match($pEmail, $email) && preg_match($pPassword, $password)){

				$emailValid = true;
				$passwordValid = true;

				return true;

			}else if (preg_match($pEmail, $email) && !preg_match($pPassword, $password)){

				$emailValid = true;
				$passwordValid = false;

				return false;

			}else if (!preg_match($pEmail, $email) && preg_match($pPassword, $password)){

				$emailValid = false;
				$passwordValid = true;

				return false;

			}else{

				$emailValid = false;
				$passwordValid = false;

				return false;

			}
		}

		public function validateCreateItem(){

			$pDate = "/^(([1-9])|(0[1-9])|(1[0-2]))\/(([0-9])|([0-2][0-9])|(3[0-1]))\/(([0-9][0-9])|([1-2][0,9][0-9][0-9]))$/";
			$pPrice = "/^[$]?[0-9]*(\.)?[0-9]?[0-9]?$/";
			$pWebsite = "/^(http|https|ftp)\://[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(:[a-zA-Z0-9]*)?/?([a-zA-Z0-9\-\._\?\,\'/\\\+&amp;%\$#\=~])*$/";
		}
	}

?>