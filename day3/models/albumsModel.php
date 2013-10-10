<?

	class albumsModel{

		public function getAlbums(){

		}

		public function getAlbumInfo($user_id){

		}

		public function updateAlbum($uid=0,$uname='',$upassword=''){

		}

		public function deleteAlbum($user_id){

		}

		public function createAlbum($fieldsetOne, $fieldsetTwo, $fieldsetThree, $fieldsetFour, $twelve, $seven, $cd, $cassette){
			echo $fieldsetOne['albumName'].'<br>';
			echo $fieldsetOne['albumArtist'].'<br>';
			echo $fieldsetOne['albumPreorder'].'<br>';
			echo $fieldsetTwo['albumImage'].'<br>';
			echo $fieldsetTwo['albumDescription'].'<br>';
			echo $fieldsetTwo['albumRelease'].'<br>';

			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "insert into albums (albumName, albumArtist, albumPreorder, albumImage, albumDescription, albumReleaseDate, albumCondition, albumWebsite)";
			$sqlTwo = " values (:albumName, :albumArtist, :albumPreorder, :albumImage, :albumDescription, :albumReleaseDate, :albumCondition,:albumWebsite)";
			$st = $db->prepare($sql.$sqlTwo);
			$st->execute(array(':albumName'=>$fieldsetOne['albumName'], ':albumArtist'=>$fieldsetOne['albumArtist'], ':albumPreorder'=>$fieldsetOne['albumPreorder'], ':albumImage'=>$fieldsetTwo['albumImage'], ':albumDescription'=>$fieldsetTwo['albumDescription'], ':albumReleaseDate'=>$fieldsetTwo['albumRelease'], ':albumCondition'=>$fieldsetThree, ':albumWebsite'=>$fieldsetFour));
		}
	}

?>