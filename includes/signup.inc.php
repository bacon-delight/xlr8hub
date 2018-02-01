<?php
	session_start();
	if (isset($_POST['submit']))
	{
		include_once 'dbh.inc.php' ;
		include_once 'user.class.php';

		$fname = mysqli_real_escape_string($conn,$_POST['fname']) ;
		$lname = mysqli_real_escape_string($conn,$_POST['lname']) ;
		$email = mysqli_real_escape_string($conn,$_POST['email']) ;
		$phone = mysqli_real_escape_string($conn,$_POST['phone']) ;
		$pwd1  = mysqli_real_escape_string($conn,$_POST['pwd1']) ;
		$pwd2  = mysqli_real_escape_string($conn,$_POST['pwd2']) ;

		$user = new User();
		$signup=$user->reg_user($fname,$lname,$email,$phone,$pwd1,$pwd2);
		
		header("Location: ../signup.php") ;
		exit();
	}
?>