<?php

 	include 'models/imageModel.php';
 	include 'views/form.php';

 	$imageModel = new img();

 	// $image = $imageModel->getGD();

 	// var_dump($image);

 	// $imageModel->imageCopy("/Applications/MAMP/htdocs/SSL/day6-lecture/images/album_art/alesana.png", "/Applications/MAMP/htdocs/SSL/day6-lecture/images/album_art/imageee.png");

 	// $imageModel->imageResize("/Applications/MAMP/htdocs/SSL/day6-lecture/images/album_art/alexisonfire.png", "/Applications/MAMP/htdocs/SSL/day6-lecture/images/album_art/imageeeeee.png", 220, 220);

 	// $imageModel->msg("Hey");

 	if($_GET['action'] == "uploadFile"){
 		$imageModel->fileUpload($_FILES['album_image']);
 	}
?>