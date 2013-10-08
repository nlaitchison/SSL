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

		public function validateCreateItem($fieldsetOne, $fieldsetTwo, $fieldsetThree, $fieldsetFour, $twelve, $seven, $cd, $cassette){

			$pDate = "/^(([1-9])|(0[1-9])|(1[0-2]))\/(([0-9])|([0-2][0-9])|(3[0-1]))\/(([0-9][0-9])|([1-2][0,9][0-9][0-9]))$/";
			$pPrice = "/^[$][0-9]*(\.)[0-9][0-9]$/";
			$pWebsite = "/^(http|https|ftp)\://[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(:[a-zA-Z0-9]*)?/?([a-zA-Z0-9\-\._\?\,\'/\\\+&amp;%\$#\=~])*$/";

			// $fieldsetOne
			if($fieldsetOne['albumName'] == null || $fieldsetOne['albumName'] == ""){

				echo ', albumName is invalid (required)';

			}else{

				echo ', albumName: ';
				echo $fieldsetOne['albumName'];

			}

			if(isset($fieldsetOne['albumPreorder'])){

				echo ', preorder: yes';

			}else{

				echo ', preorder: no (optional)';

			}

			// $fieldsetTwo
			if($fieldsetTwo['albumImage'] == null || $fieldsetTwo['albumImage'] == ""){

				echo ', Album Image: invalid (optional)';

			}else{

				echo ', albumImage: ';
				echo $fieldsetTwo['albumImage'];

			}

			if($fieldsetTwo['albumDescription'] == null || $fieldsetTwo['albumDescription'] == ""){

				echo ', Album Description: invalid (required)';

			}else{

				echo ', albumDescription: ';
				echo $fieldsetTwo['albumDescription'];

			}

			if($fieldsetTwo['albumRelease'] != null || $fieldsetTwo['albumRelease'] != ""){

				if(!preg_match($pDate, $fieldsetTwo['albumRelease'])){

					echo ', date: invalid ';

				}else if(preg_match($pDate, $fieldsetTwo['albumRelease'])){

					echo ', date: valid';

				}

			}else{

				echo ', date: --- (optional)';

			}

			// $fieldsetThree
			if($fieldsetThree == "new"){

				echo ', condition: new';

			}else{

				echo ', condition: used';

			}

			// $twelve
			if(isset($twelve['twelve'])){

				if($twelve['twelve_stock'] == null || $twelve['twelve_stock'] == ""){

					echo ', Twelve Stock: invalid (required)';

				}else{

					echo ', twelve_stock: ';
					echo $twelve['twelve_stock'];

				}

				if($twelve['twelve_price'] != null || $twelve['twelve_price'] != ""){

					if(!preg_match($pPrice, $twelve['twelve_price'])){

						echo ', Twelve Price: invalid ';

					}else if(preg_match($pPrice, $twelve['twelve_price'])){

						echo ', Twelve Price: valid';

					}	

				}else{

					echo ', Twelve Price: invalid (required)';

				}

				if($_POST['twelve_color'] != null){

					echo ', colors: ';

					foreach($_POST['twelve_color'] as $color){

				        echo $color;

					}

				}else{

					echo ', twelve colors: invalid (required)';

				}
			}

			// $seven
			if(isset($seven['seven'])){

				if($seven['seven_stock'] == null || $seven['seven_stock'] == ""){

					echo ', seven Stock: invalid (required)';
				}else{

					echo ', seven_stock: ';
					echo $seven['seven_stock'];

				}

				if($seven['seven_price'] != null || $seven['seven_price'] != ""){

					if(!preg_match($pPrice, $seven['seven_price'])){

						echo ', seven Price: invalid ';

					}else if(preg_match($pPrice, $seven['seven_price'])){

						echo ', seven Price: valid';

					}

				}else{

					echo ', seven Price: invalid (required)';

				}

				if($_POST['seven_color'] != null){

					echo ', colors: ';

					foreach($_POST['seven_color'] as $color){

				        echo $color;

					}

				}else{

					echo ', seven colors: invalid (required)';

				}
			}

			// $cd
			if(isset($cd['cd'])){

				if($cd['cd_stock'] == null || $cd['cd_stock'] == ""){

					echo ', cd Stock: invalid (required)';

				}else{

					echo ', cd_stock: ';

					echo $cd['cd_stock'];

				}

				if($seven['cd_price'] != null || $seven['cd_price'] != ""){
					
					if(!preg_match($pPrice, $cd['cd_price'])){
						
						echo ', cd Price: invalid ';
					
					}else if(preg_match($pPrice, $cd['cd_price'])){
						
						echo ', cd Price: valid';
					}		
				
				}else{
					
					echo ', cd Price: invalid (required)';
				
				}
			}

			// $cassette
			if(isset($cassette['cassette'])){
				
				if($cassette['cassette_stock'] == null || $cassette['cassette_stock'] == ""){
				
					echo ', cassette Stock: invalid (required)';
				
				}else{
					
					echo ', cassette_stock: ';
					echo $cassette['cassette_stock'];
				
				}

				if($cassette['cassette_price'] != null || $cassette['cassette_price'] != ""){
					
					if(!preg_match($pPrice, $cassette['cassette_price'])){
						
						echo ', cassette Price: invalid ';
					
					}else if(preg_match($pPrice, $cassette['cassette_price'])){
						
						echo ', ccassette Price: valid';
					
					}		
				
				}else{
					
					echo ', cassette Price: invalid (required)';
				
				}
			}

		}
	}

?>