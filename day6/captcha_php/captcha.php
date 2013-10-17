<?php
session_start();

class captcha {

	var $font = 'hero-webfont.ttf';

	function captcha($width,$height,$characters) {

		$possible = '23456789bcdfghjkmnpqrstvwxyz';
		$code = '';
		$i = 0;
		while ($i < $characters) { 
			$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$i++;
		}

		$font_size = $height * 0.55;
		$image = @imagecreate($width, $height);

		$background_color = imagecolorallocate($image, 58, 58, 58);
		$text_color = imagecolorallocate($image, 255, 255, 255);
		$noise_color = imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
		$line_color = imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));

		for( $i=0; $i<($width*$height)/3; $i++ ) {
			imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
		}

		for( $i=0; $i<($width*$height)/150; $i++ ) {
			imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $line_color);
		}
		for( $i=0; $i<strlen($code); $i++ ) {
			imagettftext($image, $font_size,  mt_rand(0,28), (40*$i) + 40, (2*$i) + 45, $text_color, $this->font , $code[$i]);
		}

		header('Content-Type: image/jpeg');
		imagejpeg($image);
		imagedestroy($image);
		$_SESSION['security_code'] = $code;
	}

}

$width = isset($_GET['width']) ? $_GET['width'] : '250';
$height = isset($_GET['height']) ? $_GET['height'] : '70';
$characters = isset($_GET['characters']) && $_GET['characters'] > 1 ? $_GET['characters'] : '5';

$captcha = new captcha($width,$height,$characters);

?>