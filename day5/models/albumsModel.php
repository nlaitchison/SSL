<?

	class albumsModel{

		public function getAlbums(){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$st = $db->prepare("select * from albums");
			$st->execute();
			$obj = $st->fetchAll();
			return $obj;
		}

		public function getAlbumInfo($albumId){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "select * from albums where albumId = :albumId";
			$st = $db->prepare($sql);
			$st->execute(array(":albumId"=>$albumId));
			$obj = $st->fetchAll();
			return $obj;
		}

		public function updateAlbum($albumId, $fieldsetOne, $fieldsetTwo, $fieldsetThree, $fieldsetFour){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "update albums set albumName = :albumName, albumArtist = :albumArtist, albumImage = :albumImage, albumDescription = :albumDescription, albumReleaseDate = :albumReleaseDate where albumId = :albumId";
			$st = $db->prepare($sql);
			$st->execute(array(":albumId"=>$albumId, ':albumName'=>$fieldsetOne['albumName'], ':albumArtist'=>$fieldsetOne['albumArtist'], ':albumImage'=>$fieldsetTwo['albumImage'], ':albumDescription'=>$fieldsetTwo['albumDescription'], ':albumReleaseDate'=>$fieldsetTwo['albumRelease']));
		}

		public function deleteAlbum($albumId){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "delete from albums where albumId = :albumId";
			$st = $db->prepare($sql);
			$st->execute(array(":albumId"=>$albumId));
		}

		public function createAlbum($formInputs, $twelve, $seven, $cd, $cassette){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "insert into albums (albumName, albumArtist, albumPreorder, albumImage, albumDescription, albumReleaseDate, albumCondition, albumWebsite)";
			$sqlTwo = " values (:albumName, :albumArtist, :albumPreorder, :albumImage, :albumDescription, :albumReleaseDate, :albumCondition,:albumWebsite)";
			$st = $db->prepare($sql.$sqlTwo);
			$st->execute(array(':albumName'=>$formInputs['albumName'], ':albumArtist'=>$formInputs['albumArtist'], ':albumPreorder'=>$formInputs['albumPreorder'],
			 ':albumImage'=>$formInputs['albumImage'], ':albumDescription'=>$formInputs['albumDescription'], ':albumReleaseDate'=>$formInputs['albumRelease'], 
			 ':albumCondition'=>$formInputs['albumCondition'], ':albumWebsite'=>$formInputs['albumWebsite']));
			
			echo mysql_insert_id();
			
			if(isset($twelve['twelve'])){
				$sqlThree = "insert into album_formats (albumId, formatType, formatStock, formatPrice)";
				$sqlFour = "values ((select MAX(albumId) from albums), :formatType, :formatStock, :formatPrice)";
				$stTwo = $db->prepare($sqlThree.$sqlFour);
				$stTwo->execute(array(':formatType'=>$twelve['twelve'], ':formatStock'=>$twelve['twelve_stock'], ':formatPrice'=>$twelve['twelve_price']));
			}

			if(isset($seven['seven'])){
				$sqlThree = "insert into album_formats (albumId, formatType, formatStock, formatPrice)";
				$sqlFour = "values ((select MAX(albumId) from albums), :formatType, :formatStock, :formatPrice)";
				$stTwo = $db->prepare($sqlThree.$sqlFour);
				$stTwo->execute(array(':formatType'=>$seven['seven'], ':formatStock'=>$seven['seven_stock'], ':formatPrice'=>$seven['seven_price']));
			}

			if(isset($cd['cd'])){
				$sqlThree = "insert into album_formats (albumId, formatType, formatStock, formatPrice)";
				$sqlFour = "values ((select MAX(albumId) from albums), :formatType, :formatStock, :formatPrice)";
				$stTwo = $db->prepare($sqlThree.$sqlFour);
				$stTwo->execute(array(':formatType'=>$cd['cd'], ':formatStock'=>$cd['cd_stock'], ':formatPrice'=>$cd['cd_price']));
			}

			if(isset($cassette['cassette'])){
				$sqlThree = "insert into album_formats (albumId, formatType, formatStock, formatPrice)";
				$sqlFour = "values ((select MAX(albumId) from albums), :formatType, :formatStock, :formatPrice)";
				$stTwo = $db->prepare($sqlThree.$sqlFour);
				$stTwo->execute(array(':formatType'=>$cassette['cassette'], ':formatStock'=>$cassette['cassette_stock'], ':formatPrice'=>$cassette['cassette_price']));
			}
		}

		// public function createAlbum($fieldsetOne, $fieldsetTwo, $fieldsetThree, $fieldsetFour){
		// 	$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
		// 	$sql = "insert into albums (albumName, albumArtist, albumPreorder, albumImage, albumDescription, albumReleaseDate, albumCondition, albumWebsite)";
		// 	$sqlTwo = " values (:albumName, :albumArtist, :albumPreorder, :albumImage, :albumDescription, :albumReleaseDate, :albumCondition,:albumWebsite)";
		// 	$st = $db->prepare($sql.$sqlTwo);
		// 	$st->execute(array(':albumName'=>$fieldsetOne['albumName'], ':albumArtist'=>$fieldsetOne['albumArtist'], ':albumPreorder'=>$fieldsetOne['albumPreorder'], ':albumImage'=>$fieldsetTwo['albumImage'], ':albumDescription'=>$fieldsetTwo['albumDescription'], ':albumReleaseDate'=>$fieldsetTwo['albumRelease'], ':albumCondition'=>$fieldsetThree, ':albumWebsite'=>$fieldsetFour));
		
		// 	echo mysql_insert_id();
		// }

		public function createAlbumFormat(){

		}
	}
?>