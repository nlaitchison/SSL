<? 

// controller index

include 'models/viewModel.php';
include 'models/validationModel.php';
include 'models/usersModel.php';

$viewModel = new viewModel();
$validationModel = new validationModel();
$usersModel = new usersModel();

$data = array("name"=>"nicole");
$viewModel->getView("views/header.php", $data);
$viewModel->getView("views/nav.php", $data);
//$viewModel->getView("views/body.php", $data);
$viewModel->getView("views/add_item.php", $data);
$viewModel->getView("views/create_user.php", $data);

if(!empty($_GET["action"])){
	
	if($_GET["action"] == "login"){

		echo 'login clicked,  ';
		//var_dump($_POST);

		$loginEmail = $_POST["login_email"];
		$loginPassword = $_POST["login_password"];

		$validateLogin = $validationModel->validateLogin($loginEmail, $loginPassword);

		echo 'validateLogin: ';
		echo $validateLogin;
	}
	else if($_GET["action"] == "create_album"){

		echo 'create item clicked';
		
		$fieldsetOne = array('albumName' => $_POST["album_name"], 'albumPreorder' => $_POST["album_preorder"]);
		$fieldsetTwo = array('albumImage' => $_POST["album_image"], 'albumDescription' => $_POST["album_description"], 'albumRelease' =>$_POST["album_release_date"]);
		$fieldsetThree = $_POST["album_condition"];
		$fieldsetFour = $_POST["artist_site"];

		$twelve = array('twelve' => $_POST["twelve"], 'twelve_stock' => $_POST["twelve_stock"], 'twelve_price' => $_POST["twelve_price"], 'twelve_color' => $_POST["twelve_color"]);
		$seven = array('seven' => $_POST["seven"], 'seven_stock' => $_POST["seven_stock"], 'seven_price' => $_POST["seven_price"], 'seven_color' => $_POST["seven_color"]);
		$cd = array('cd' => $_POST["cd"], 'cd_stock' => $_POST["cd_stock"], 'cd_price' => $_POST["cd_price"]);
		$cassette = array('cassette' => $_POST["cassette"], 'cassette_stock' => $_POST["cassette_stock"], 'cd_price' => $_POST["cassette_price"]);


		$validateCreateItem = $validationModel->validateCreateItem($fieldsetOne, $fieldsetTwo, $fieldsetThree, $fieldsetFour, $twelve, $seven, $cd, $cassette);
		
	}
	else if($_GET["action"] == "users"){
		$data = $usersModel->getUsers();
		var_dump($data);
	}
	else if($_GET["action"] == "userInfo"){
		$data = $usersModel->getUsers();
		//var_dump($data);
		$viewModel->getView("views/user_info.php", $data);
	}
	else if($_GET["action"] == "updateUserForm"){
		$data = $usersModel->getUserInfo($_GET['user_id']);
		$viewModel->getView("views/user_update.php", $data);
	}
	else if($_GET["action"] == "updateUser"){
		$usersModel->updateUser($_POST['uid'], $_POST['uname'], $_POST['upassword']);

		$data = $usersModel->getUsers();
		$viewModel->getView("views/user_info.php", $data);
	}
	else if($_GET["action"] == "deleteUser"){
		$usersModel->deleteUser($_GET['user_id']);

		$data = $usersModel->getUsers();
		$viewModel->getView("views/user_info.php", $data);
	}
	else if($_GET["action"] == "createUser"){
		$usersModel->createUser($_POST['create_name'], $_POST['create_password']);

		$data = $usersModel->getUsers();
		$viewModel->getView("views/user_info.php", $data);
	}
}



$viewModel->getView("views/footer.php", $data);

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

}  

//<cfdump var="">

-->