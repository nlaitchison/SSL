<html>
	<head>
		<link media="all" href="css/main.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<form name="myform" id="myform" method="post" action="?action=checklogin">
			<span class="message">Username:</span>
			<input id="uname" name="uname" type="text" class="textbox" />
			<span class="message">Password</span>
			<input id="pass" name="pass" type="password" class="textbox" />
			<Input type="submit" value="submit" class="button"/>
			<?php echo $data; ?>
		</form>
	</body>
</html>