<?php 
if (!isset($_SESSION)) {session_start();}
include 'models/protector.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">

		<!-- Main -->
		<link rel="stylesheet" type="text/css" href="css/main.css">

	</head>
	<body>
		<div id="wrapper">

			<header>
				<div id="header_container">
					<div id="logo"><a href="#"><img src="images/logo.png" alt="Logo Here"></a></div>

					<div id="user_logout">
						<p> username | <a class="custom_button" href="?action=logout"> Logout </a> </p>
					</div>

					<div class="clear_fix"></div>
				</div>
				<nav>
					<div id="nav_container">
						<ul>
							<li><a href="#">Manage Homepage</a></li>
							<li><a href='?action=adminAlbumInfo'>Manage Albums</a></li>
							<li><a href="#">View Orders</a></li>
						</ul>
						<div class="clear_fix"></div>
					</div>
				</nav>
			</header>