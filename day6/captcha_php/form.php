<?php 
session_start();

if( isset($_POST['submit'])) {
   if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) {
		echo 'You typed the correct security code.';
		unset($_SESSION['security_code']);
   } else {
		echo 'Sorry, you typed an invalid security code';
   }
} else {
?>

	<form action="form.php" method="post">
		<img src="captcha.php?width=250&height=70&characters=5" /><br />
		<label for="security_code">Enter Captcha: </label><input id="security_code" name="security_code" type="text" /><br />
		<input type="submit" name="submit" value="Submit" />
	</form>

<?php
	}
?>