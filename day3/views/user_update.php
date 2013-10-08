<? foreach($data as $user){ ?>
	
	<form action="?action=updateUser" method="post">
		<!-- User Id: -->
		<input type="text" name="uid" readonly="readonly" value='<?=$user["user_id"]?>'/>
		<!-- Username: -->
		<input type="text" name="uname" value='<?=$user["user_name"]?>'/>
		<!-- Password: -->
		<input type="text" name="upassword" value='<?=$user["user_password"]?>'/>

		<input type="submit" value="update"/>
	</form>

<? } ?>