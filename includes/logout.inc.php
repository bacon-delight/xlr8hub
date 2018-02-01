<?php
	
	session_start();
	include_once 'user.class.php';
	$user = new User();
	$user->logout();
	session_unset();
	session_destroy();
	header("Location: ../index.php");
	exit();

?>