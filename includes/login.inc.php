<?php

	session_start();

	if (isset($_POST['submit']))
	{
		include_once 'dbh.inc.php' ;
		include_once 'user.class.php';

		$email = mysqli_real_escape_string($conn,$_POST['email']) ;
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']) ;
		
		$user = new User();
		$login=$user->check_login($email, $pwd);

		if($login)
		{
			header("Location: ../home1.php") ;
			exit();
		}
		else
		{
			header("Location: ../login.php") ;
			exit() ;
		}
	}

?>