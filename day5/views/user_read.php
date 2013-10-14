<br>
<h2> User Info </h2>
<?
	

	//var_dump($data);

	foreach($data as $user){
		echo '<br>';
		echo $user['user_id'].'<br>';
		echo $user['user_name'].'<br>';
		echo $user['user_password'].'<br>';
		echo "<a href='?action=deleteUser&user_id=".$user["user_id"]."'> delete </a>";
		echo "<a href='?action=updateUserForm&user_id=".$user["user_id"]."'> update </a>";
		echo '<br> ----------------------- <br>';
	}

?>