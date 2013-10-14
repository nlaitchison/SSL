<?

	$str = 'apple';
	$salt = 'mysecretpassword';

	// without salting
	if(md5($str) === ''){
		echo 'valid user';
	}

	// without salting
	if(md5($salt.$str) === ''){
		echo 'valid user';
	}

// before you use a session, you have to start it first.
// there can only be one session start on a page
// new sessions

	session_start();
	echo 'Welcome to page #1';
	// session variables
	// saving info, for example you can set your theme on gmail 
	// so thats saved in the session
	// if you want servers to remember things, save them to the session
	// this info is on the server, just saved there
	$_SESSION['favcolor'] = 'green';
	$_SESSION['animal'] = 'cat';
	$_SESSION['time'] = time()';

?>