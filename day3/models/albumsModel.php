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

		public function createAlbum($fieldsetOne, $fieldsetTwo, $fieldsetThree, $fieldsetFour){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "insert into albums (albumName, albumArtist, albumPreorder, albumImage, albumDescription, albumReleaseDate, albumCondition, albumWebsite)";
			$sqlTwo = " values (:albumName, :albumArtist, :albumPreorder, :albumImage, :albumDescription, :albumReleaseDate, :albumCondition,:albumWebsite)";
			$st = $db->prepare($sql.$sqlTwo);
			$st->execute(array(':albumName'=>$fieldsetOne['albumName'], ':albumArtist'=>$fieldsetOne['albumArtist'], ':albumPreorder'=>$fieldsetOne['albumPreorder'], ':albumImage'=>$fieldsetTwo['albumImage'], ':albumDescription'=>$fieldsetTwo['albumDescription'], ':albumReleaseDate'=>$fieldsetTwo['albumRelease'], ':albumCondition'=>$fieldsetThree, ':albumWebsite'=>$fieldsetFour));
		}

		public function createAlbumFormat(){

		}
	}

	// , ':albumArtist'=>$fieldsetOne['albumArtist'], ':albumPreorder'=>$fieldsetOne['albumPreorder'], ':albumImage'=>$fieldsetTwo['albumImage'], ':albumDescription'=>$fieldsetTwo['albumDescription'], ':albumReleaseDate'=>$fieldsetTwo['albumRelease'], ':albumCondition'=>$fieldsetThree, ':albumWebsite'=>$fieldsetFour
	//, albumArtist = :albumArtist, albumPreorder = :albumPreorder, albumImage = :albumImage, albumDescription = :albumDescription, albumReleaseDate = :albumReleaseDate, albumCondition = :albumCondition, , albumWebsite = :albumWebsite 

?>