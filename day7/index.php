<? 

// controller index

include 'models/viewModel.php';
include 'models/validationModel.php';
include 'models/usersModel.php';
include 'models/albumsModel.php';
include 'models/checklogin.php';

$viewModel = new viewModel();
$validationModel = new validationModel();
$usersModel = new usersModel();
$albumsModel = new albumsModel();
$checkLogin = new ckUser();



if(!empty($_GET["action"])){
	
	if($_GET["action"] == "login"){

		$data = array('un' => $_POST["login_email"], 'pass' => $_POST["login_password"]);
		$loggedIn = $checkLogin->checkUser($data);
		$msg="Invalid Login";

		if($loggedIn == 1){
			$viewModel->getView("views/header_admin.php");
			$data = $albumsModel->getAlbums();
			$viewModel->getView("views/album_read.php", $data);
		}

		//var_dump($_POST);

		// $loginEmail = $_POST["login_email"];
		// $loginPassword = $_POST["login_password"];

		// $validateLogin = $validationModel->validateLogin($loginEmail, $loginPassword);

		// echo 'validateLogin: ';
		// echo $validateLogin;
	}

	// admin album crud actions
	else if($_GET["action"] == "createAlbumForm"){
		$viewModel->getView("views/header_admin.php");
		$viewModel->getView("views/album_create.php");
	}
	else if($_GET["action"] == "createAlbum"){

		$twelve = array('twelve' => $_POST["twelve"], 'twelve_stock' => $_POST["twelve_stock"], 'twelve_price' => $_POST["twelve_price"], 'twelve_color' => $_POST["twelve_color"]);
		$seven = array('seven' => $_POST["seven"], 'seven_stock' => $_POST["seven_stock"], 'seven_price' => $_POST["seven_price"], 'seven_color' => $_POST["seven_color"]);
		$cd = array('cd' => $_POST["cd"], 'cd_stock' => $_POST["cd_stock"], 'cd_price' => $_POST["cd_price"]);
		$cassette = array('cassette' => $_POST["cassette"], 'cassette_stock' => $_POST["cassette_stock"], 'cassette_price' => $_POST["cassette_price"]);

		$formInputs = array('albumName' => $_POST["album_name"], 'albumArtist' => $_POST["album_artist"], 'albumPreorder' => $_POST["album_preorder"],
		'albumImage' => $_POST["album_image"], 'albumDescription' => $_POST["album_description"], 'albumRelease' =>$_POST["album_release_date"],
		'albumCondition' =>$_POST["album_condition"], 'albumWebsite'=>$_POST["artist_site"]);

		$allFormInputs = array('formInputs'=>$formInputs, 'twelveInputs'=>$twelve, 'sevenInputs'=>$seven, 'cdInputs'=>$cd, 'cassetteInputs'=>$cassette);

		//$validateCreateItem = $validationModel->validateCreateItem($fieldsetOne, $fieldsetTwo, $fieldsetThree, $fieldsetFour, $twelve, $seven, $cd, $cassette);
		$validateCreateItem = $validationModel->validateCreateItem($formInputs, $twelve, $seven, $cd, $cassette);	
		//var_dump($twelve['twelve']);
		if($validateCreateItem['valid'] == false){
			$viewModel->getView("views/header_admin.php");
			$viewModel->getView("views/album_create_invalid.php", $allFormInputs, $validateCreateItem);	
			// var_dump($formInputs);

		}
		else{
			$albumsModel->createAlbum($formInputs, $twelve, $seven, $cd, $cassette);

			$viewModel->getView("views/header_admin.php");
			$data = $albumsModel->getAlbums();
			$viewModel->getView("views/album_read.php", $data);
		}

	}
	else if($_GET["action"] == "adminAlbumInfo"){
		$viewModel->getView("views/header_admin.php");
		$data = $albumsModel->getAlbums();
		$viewModel->getView("views/album_read.php", $data);
	}
	else if($_GET["action"] == "deleteAlbum"){
		$albumsModel->deleteAlbum($_GET['albumId']);

		$viewModel->getView("views/header_admin.php");
		$data = $albumsModel->getAlbums();
		$viewModel->getView("views/album_read.php", $data);
	}
	else if($_GET["action"] == "updateAlbumForm"){
		$viewModel->getView("views/header_admin.php");
		$data = $albumsModel->getAlbumInfo($_GET['albumId']);
		$viewModel->getView("views/album_update.php", $data);
	}
	else if($_GET["action"] == "updateAlbum"){
		$fieldsetOne = array('albumName' => $_POST["album_name"], 'albumArtist' => $_POST["album_artist"], 'albumPreorder' => $_POST["album_preorder"]);
		$fieldsetTwo = array('albumImage' => $_POST["album_image"], 'albumDescription' => $_POST["album_description"], 'albumRelease' =>$_POST["album_release_date"]);
		$fieldsetThree = $_POST["album_condition"];
		$fieldsetFour = $_POST["artist_site"];

		//$twelve = array('twelve' => $_POST["twelve"], 'twelve_stock' => $_POST["twelve_stock"], 'twelve_price' => $_POST["twelve_price"], 'twelve_color' => $_POST["twelve_color"]);
		//$seven = array('seven' => $_POST["seven"], 'seven_stock' => $_POST["seven_stock"], 'seven_price' => $_POST["seven_price"], 'seven_color' => $_POST["seven_color"]);
		//$cd = array('cd' => $_POST["cd"], 'cd_stock' => $_POST["cd_stock"], 'cd_price' => $_POST["cd_price"]);
		//$cassette = array('cassette' => $_POST["cassette"], 'cassette_stock' => $_POST["cassette_stock"], 'cd_price' => $_POST["cassette_price"]);

		$albumsModel->updateAlbum($_POST["albumId"], $fieldsetOne, $fieldsetTwo, $fieldsetThree, $fieldsetFour);
		$viewModel->getView("views/header_admin.php");
		$data = $albumsModel->getAlbums();
		$viewModel->getView("views/album_read.php", $data);
	}

	// user crud actions
	else if($_GET["action"] == "userInfo"){
		$viewModel->getView("views/header_admin.php");
		$data = $usersModel->getUsers();
		$viewModel->getView("views/user_read.php", $data);
	}
	else if($_GET["action"] == "updateUserForm"){
		$viewModel->getView("views/header_admin.php");
		$data = $usersModel->getUserInfo($_GET['user_id']);
		$viewModel->getView("views/user_update.php", $data);
	}
	else if($_GET["action"] == "updateUser"){
		$usersModel->updateUser($_POST['uid'], $_POST['uname'], $_POST['upassword']);

		$viewModel->getView("views/header_admin.php");
		$data = $usersModel->getUsers();
		$viewModel->getView("views/user_read.php", $data);
	}
	else if($_GET["action"] == "deleteUser"){
		$usersModel->deleteUser($_GET['user_id']);

		$viewModel->getView("views/header_admin.php");
		$data = $usersModel->getUsers();
		$viewModel->getView("views/user_read.php", $data);
	}
	else if($_GET["action"] == "createUser"){
		$usersModel->createUser($_POST['create_name'], $_POST['create_password']);

		$viewModel->getView("views/header_admin.php");
		$data = $usersModel->getUsers();
		$viewModel->getView("views/user_read.php", $data);
	}

	else if($_GET["action"] == "logout"){
		session_start();
		$_SESSION['loggedin'] = 0;
		$viewModel->getView("views/header.php");
		$data = $albumsModel->getAlbums();
		$viewModel->getView("views/landing_body.php", $data);
		session_destroy();
	}

	else if($_GET["action"] == "musicNews"){
		$viewModel->getView("views/header.php");
		$viewModel->getView("views/musicNews.php");
	}
}
else{
	$viewModel->getView("views/header.php");
	$data = $albumsModel->getAlbums();
	$viewModel->getView("views/landing_body.php", $data);
}

$viewModel->getView("views/footer.php");

?>