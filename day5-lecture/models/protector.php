<?php

	// include this php at the top of the html page <?php include 'models/protector.php'; 
	if(isset($_SESSION["loggedin"])){

		// echo $_session["loggedin"];

	}else{
		header("location: /SSL/day5/index.php");
	}
?>