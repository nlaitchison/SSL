<?php
	if(isset($_SESSION["loggedin"])){
	}else{
		header("location: /SSL/day5/index.php");
	}
?>