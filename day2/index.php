<? 

// controller index

include 'models/viewModel.php';
include 'models/validationModel.php';

$viewModel = new viewModel();
$validationModel = new validationModel();

$data = array("name"=>"nicole");
$viewModel->getView("views/header.php", $data);
$viewModel->getView("views/nav.php", $data);
$viewModel->getView("views/body.php", $data);
$viewModel->getView("views/footer.php", $data);

if(!empty($_GET["action"])){
	
	if($_GET["action"] == "login"){



	}
}

//<cfdump var="">

?>


<!--  if(!empty($_GET["action"])){
	
	if($_GET["action"] == "form"){

		$viewModel->getView("views/form.php", $data);

	}else if($_GET["action"] == "process"){

		//var_dump($_POST);
		// echo $_POST["username"];

		$email = $_POST["username"];
		$p = "/^[^@]*@[^@]*\.[^@]*$/";

		if (preg_match($p, $email)){
       		echo "valid email"; 
        }else{
        	echo "invalid email";
        }     

	}

}else{

	$viewModel->getView("views/form.php", $data);

}  -->