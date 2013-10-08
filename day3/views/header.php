<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Record Store Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">

		<!-- Main -->
		<link rel="stylesheet" type="text/css" href="css/main.css">

	</head>
	<body>
		<div id="wrapper">

			<header>
				<div id="logo"><a href="#"><img src="images/logo.png" alt="Logo Here"></a></div>

				<form id="form_login" method="post" action="?action=login">
					<p> Don't have an account? <a href="#"> Register Now! </a></p>
					<fieldset>
						<input type="text" id="login_email" name="login_email" placeholder="email address" required="required" />
						<input type="password" id="login_password" name="login_password" placeholder="password" required="required" />
						<input type="submit" id="login_submit" value="LOGIN"/>
					</fieldset>
				</form>

				<div class="clear_fix"></div>
