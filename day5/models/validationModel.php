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

		public function validateCreateItem($formInputs, $twelve, $seven, $cd, $cassette){

			$errors = array('albumName' => '', 'albumArtist' => '', 'albumPreorder' => '',
			'albumImage' => '', 'albumDescription' => '', 'albumRelease' => '',
			'albumCondition' => '', 'albumWebsite'=> '', 'twelve_stock' => '', 'twelve_price' => '', 'twelve_color' => '',
			'seven_stock' => '', 'seven_price' => '', 'seven_color' => '', 'cd_stock' => '', 'cd_price' => '',
			'cassette_stock' => '', 'cassette_price' => '', 'valid' => true);

			$valid = true;

			$pDate = "/^(([1-9])|(0[1-9])|(1[0-2]))\/(([0-9])|([0-2][0-9])|(3[0-1]))\/(([0-9][0-9])|([1-2][0,9][0-9][0-9]))$/";
			$pPrice = "/^[0-9]*(\.)[0-9][0-9]$/";
			$pWebsite = "/((mailto\:|(news|(ht|f)tp(s?))\://){1}\S+)/";

			if($formInputs['albumName'] == null || $formInputs['albumName'] == ""){
				$errors['albumName'] = "Album name is required.";
				$errors['valid'] = false;
				echo ', albumName is invalid (required)';
			}else{
				echo ', albumName: ';
				echo $formInputs['albumName'];
			}

			if($formInputs['albumArtist'] == null || $formInputs['albumArtist'] == ""){
				$errors['albumArtist'] = "Album Artist is required.";
				$errors['valid'] = false;
				echo ', albumArtist is invalid (required)';
			}else{
				echo ', albumArtist: ';
				echo $formInputs['albumArtist'];
			}

			if(isset($formInputs['albumPreorder'])){
				echo ', preorder: yes';
			}else{
				echo ', preorder: no (optional)';
			}

			if($formInputs['albumImage'] == null || $formInputs['albumImage'] == ""){
				$errors['albumImage'] = "An album image is required.";
				$errors['valid'] = false;
				echo ', Album Image: invalid';
			}else{
				echo ', albumImage: ';
				echo $formInputs['albumImage'];
			}

			if($formInputs['albumDescription'] == null || $formInputs['albumDescription'] == ""){
				$errors['albumDescription'] = "An album description is required.";
				$errors['valid'] = false;
				echo ', Album Description: invalid (required)';
			}else{
				echo ', albumDescription: ';
				echo $formInputs['albumDescription'];
			}

			if($formInputs['albumRelease'] != null || $formInputs['albumRelease'] != ""){
				if(!preg_match($pDate, $formInputs['albumRelease'])){
					$errors['albumRelease'] = "The release date must be written MM/DD/YYYY.";
					$errors['valid'] = false;
					echo ', date: invalid ';
				}else if(preg_match($pDate, $formInputs['albumRelease'])){
					echo ', date: valid';
				}
			}else{
				echo ', date: --- (optional)';
			}

			if($formInputs == "new"){
				echo ', condition: new';
			}else{
				echo ', condition: used';
			}

			// $twelve
			if(isset($twelve['twelve'])){
				if($twelve['twelve_stock'] == null || $twelve['twelve_stock'] == ""){
					$errors['twelve_stock'] = "A value for stock is required.";
					$errors['valid'] = false;
					echo ', Twelve Stock: invalid (required)';
				}else{
					echo ', twelve_stock: ';
					echo $twelve['twelve_stock'];
				}

				if($twelve['twelve_price'] != null || $twelve['twelve_price'] != ""){
					if(!preg_match($pPrice, $twelve['twelve_price'])){
						$errors['twelve_price'] = "The price must be written 0.00.";
						$errors['valid'] = false;
						echo ', Twelve Price: invalid ';
					}else if(preg_match($pPrice, $twelve['twelve_price'])){
						echo ', Twelve Price: valid';
					}	
				}else{
					$errors['twelve_price'] = "Price is required.";
					$errors['valid'] = false;
					echo ', Twelve Price: invalid (required)';
				}

				if($_POST['twelve_color'] != null){
					echo ', colors: ';
					foreach($_POST['twelve_color'] as $color){
				        echo $color;
					}
				}else{
					$errors['twelve_color'] = "A color is required.";
					$errors['valid'] = false;
					echo ', twelve colors: invalid (required)';
				}
			}

			// $seven
			if(isset($seven['seven'])){
				if($seven['seven_stock'] == null || $seven['seven_stock'] == ""){
					$errors['seven_stock'] = "A value for stock is required.";
					$errors['valid'] = false;
					echo ', seven Stock: invalid (required)';
				}else{
					echo ', seven_stock: ';
					echo $seven['seven_stock'];
				}

				if($seven['seven_price'] != null || $seven['seven_price'] != ""){
					if(!preg_match($pPrice, $seven['seven_price'])){
						$errors['seven_price'] = "The price must be written 0.00.";
						$errors['valid'] = false;
						echo ', seven Price: invalid ';
					}else if(preg_match($pPrice, $seven['seven_price'])){
						echo ', seven Price: valid';
					}
				}else{
					$errors['seven_price'] = "Price is required.";
					$errors['valid'] = false;
					echo ', seven Price: invalid (required)';
				}

				if($_POST['seven_color'] != null){
					echo ', colors: ';
					foreach($_POST['seven_color'] as $color){
				        echo $color;
					}
				}else{
					$errors['seven_color'] = "A color is required.";
					$errors['valid'] = false;
					echo ', seven colors: invalid (required)';
				}
			}

			// $cd
			if(isset($cd['cd'])){
				if($cd['cd_stock'] == null || $cd['cd_stock'] == ""){
					$errors['cd_stock'] = "A value for stock is required.";
					$errors['valid'] = false;
					echo ', cd Stock: invalid (required)';
				}else{
					echo ', cd_stock: ';
					echo $cd['cd_stock'];
				}

				if($cd['cd_price'] != null || $cd['cd_price'] != ""){
					if(!preg_match($pPrice, $cd['cd_price'])){
						$errors['cd_price'] = "The price must be written 0.00.";
						$errors['valid'] = false;
						echo ', cd Price: invalid ';
					}else if(preg_match($pPrice, $cd['cd_price'])){
						echo ', cd Price: valid';
					}		
				}else{
					$errors['cd_price'] = "Price is required.";
					$errors['valid'] = false;
					echo ', cd Price: invalid (required)';
				}
			}

			// $cassette
			if(isset($cassette['cassette'])){
				if($cassette['cassette_stock'] == null || $cassette['cassette_stock'] == ""){
					$errors['cassette_stock'] = "A value for stock is required.";
					$errors['valid'] = false;
					echo ', cassette Stock: invalid (required)';
				}else{
					echo ', cassette_stock: ';
					echo $cassette['cassette_stock'];
				}

				if($cassette['cassette_price'] != null || $cassette['cassette_price'] != ""){
					if(!preg_match($pPrice, $cassette['cassette_price'])){
						$errors['cassette_price'] = "The price must be written 0.00.";
						$errors['valid'] = false;
						echo ', cassette Price: invalid ';					
					}else if(preg_match($pPrice, $cassette['cassette_price'])){
						echo ', ccassette Price: valid';	
					}		
				}else{
					$errors['cassette_price'] = "Price is required.";
					$errors['valid'] = false;
					echo ', cassette Price: invalid (required)';
				}
			}

			// $fieldsetFour
			if($formInputs['albumWebsite'] != null || $formInputs['albumWebsite'] != ""){
				// if(!preg_match($pWebsite, $formInputs['albumWebsite'])){
				// 	$errors['album_website'] = "Website is not in the correct format.";
				// 	$valid = false;
				// 	echo ', website: invalid ';
				// }else if(preg_match($pWebsite, $formInputs['albumWebsite'])){
				// 	echo ', website: valid';
				// }
			}else{
				echo ', website: --- (optional)';
			}

			echo '<br><br>';
			// var_dump($errors);

			// echo 'valid: '.$valid;

			// if($errors[]){

			// 	echo '<br><br>  if $valid = false <br>';
			// 	var_dump($errors);
			// 	return $errors;
			// }
			// else{
			// 	return true;
			// }

			return $errors;

		}
	}

?>