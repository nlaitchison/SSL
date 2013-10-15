<?php
	class ckUser{
		public function checkUser($data){
			session_start();
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");

			$q = "select user_name, user_password
				  from users
				  where user_name = :un and user_password = :pass";

			$st = $db->prepare($q);

			$st->execute(array(":un"=>$data["un"], ":pass"=>md5($data["pass"])));

			$st->fetchAll();
			$isgood = $st->rowCount();

			if($isgood > 0){

				$_SESSION["loggedin"] = 1;
				$_SESSION["username"] = $data["un"];
				return 1;

			}else{

				$_session["logggedin"] = 0;
				return 0;

			}
		}
	}
?>