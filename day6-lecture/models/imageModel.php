<?php
	class img{
		
		public function getGD(){
			return gd_info();
		}

		public function imageCopy($orgfile, $newfile){

			$n = imagecreatefrompng($orgfile);
			imagepng($n, $newfile);
			imagedestroy($n);

		}

		public function imageResize($orgfile, $newfile, $h, $w){

			$n = imagecreatefrompng($orgfile);
			$ar = getimagesize($orgfile);
			$orgw = $ar[0];
			$orgh = $ar[1];

			$scalew = $orgw * ( 20 / 100 );
			$scaleh = $orgh * ( 20 / 100 );

			$cont = imagecreatetruecolor($scalew, $scaleh);
			imagecopyresampled($cont, $n, 0, 0, 0, 0, $scalew, $scaleh, $orgw, $orgh);
			imagejpeg($cont, $newfile, 100);
			imagedestroy($n);
		}

		public function msg($msg){

			$container = imagecreate(300,200);
			$black = imagecolorallocate($container,0,0,0);
			$white = imagecolorallocate($container,255,255,255);
			$font = 'fonts/hero-webfont.ttf';
			imagefilledrectangle($container,0,0,250,150,$black);
			imagerectangle($container, 0, 0, 50, 60, $white);
			imagefttext($container, 12, 0, 0, 12, $white, $font, $msg);
			header('Content-Type: image/png');
			imagepng($container, null);
			imagedestroy($container);

		}

		public function fileUpload($file){
			$tempfile = $file["tmp_name"];

			//copy($file, $file);
			move_uploaded_file($tempfile,$file["name"]);
		}
	}
?>