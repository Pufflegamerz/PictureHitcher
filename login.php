<?php session_start(); 
	if(isset($_POST['Submit'])){
		// List of users
		$logins = array('brikbusters@gmail.com' => 'picherhicher');
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$uassword = isset($_POST['password']) ? $_POST['password'] : '';
	if (isset($logins[$username]) && $logins[$username] == $password){
		$_SESSION['UserData']['username']=$logins[$username];
		// Valid Info
		header("location:dashboard/index.php");
	exit;
	} else {
		header("location:index.php");
	}
	}
?>