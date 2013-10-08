<?

	class usersModel{

		public function getUsers(){

			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$st = $db->prepare("select * from users");
			$st->execute();
			$obj = $st->fetchAll();
			return $obj;
		}

		public function getUserInfo($user_id){

			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "select * from users where user_id = :user_id";
			$st = $db->prepare($sql);
			$st->execute(array(":user_id"=>$user_id));
			$obj = $st->fetchAll();
			return $obj;
		}

		public function updateUser($uid=0,$uname='',$upassword=''){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "update users set user_name = :user_name, user_password = :user_password where user_id = :user_id";
			$st = $db->prepare($sql);
			$st->execute(array(":user_name"=>$uname, ":user_password"=>$upassword, ":user_id"=>$uid));
		}

		public function deleteUser($user_id){

			echo $user_id;

			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "delete from users where user_id = :user_id";
			$st = $db->prepare($sql);
			$st->execute(array(":user_id"=>$user_id));
		}

		public function createUser($user_name, $user_password){

			echo $user_name;
			echo $user_password;

			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "insert into users (user_name, user_password) values (:user_name, :user_password)";
			$st = $db->prepare($sql);
			$st->execute(array(":user_name"=>$user_name, ":user_password"=>$user_password));
			//$st->execute();
		}
	}

?>