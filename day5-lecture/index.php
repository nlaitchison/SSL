<?php

	include 'models/viewModel.php';
	include 'models/checklogin.php';

	$views = new viewModel();
	$logins = new ckUser();

	if(isset($_GET['action'])){
			$action = $_GET['action'];
	}else{$views->getView("views/login.php", $data);
		$action = "";
	}

	if($action==""){

		$data = "<a href='?action=userlogin'>LOGIN</a>";
		

	}else if($action=="userLogin"){

		$data = $views->getView("views/login.php");

	}else if($action=="checklogin"){

		$data = array("un"=>$_POST["uname"], "pass"=>$_POST["pass"]);

		// var_dump($data);

		$test = $logins->checkUser($data);
		$msg="Invalid Login";

		if($test == 1){
			$views->getView("views/page.php");
		}else{
			$views->getView("views/login.php", $msg);
		}

	}else if($action=="logout"){
		session_start();
		$_SESSION['loggedin'] = 0;
		$data = "<a href='?action=userlogin'>LOGIN</a>";
		$views->getView("views/login.php", $data);
		session_destroy();
	}
?>