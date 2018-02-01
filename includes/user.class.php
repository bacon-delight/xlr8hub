<?php
	session_start() ;
	class User
	{
		public $user_fname ;
		public $user_lname ;
		public $user_email ;
		protected $user_id ;
		private $user_phone ;
		//public $login ;

		public function reg_user($fname,$lname,$email,$phone,$pwd1,$pwd2)
		{
			include "dbh.inc.php";
			if (empty($fname)||empty($lname))
			{
				$_SESSION['signupmsg'] = 'Please fill the form properly' ;
				return false ;
			}
			elseif (empty($email)) 
			{
				$_SESSION['signupmsg'] = 'Please fill the form properly' ;
				return false ;
			}
			elseif (empty($phone))
			{
				$_SESSION['signupmsg'] = 'Please fill the form properly' ;
				return false ;
			}
			elseif (empty($pwd1))
			{
				$_SESSION['signupmsg'] = 'Please fill the form properly' ;
				return false ;
			}
			elseif (empty($pwd2))
			{
				$_SESSION['signupmsg'] = 'Please fill the form properly' ;
				return false ;
			}
			else
			{
				//Check for valid inputs
				if(!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname))
				{
					$_SESSION['signupmsg'] = 'You have entered an invalid name' ;
					return false ;
				}
				else
				{
					//Check if email is valid
					if(!filter_var($email,FILTER_VALIDATE_EMAIL))
					{
						$_SESSION['signupmsg'] = 'You have entered an invalid email' ;
						return false ;
					}
					else
					{
						if ($pwd1!=$pwd2)
						{
							$_SESSION['signupmsg'] = 'Passwords dont match' ;
							return false ;
						}
						else
						{
							$sql = "SELECT * FROM users WHERE user_email='$email'" ;
							$result = mysqli_query($conn,$sql);
							$resultCheck=mysqli_num_rows($result);

							if ($resultCheck>0)
							{
								header("location: ../signup.php?signup=userexisting");
								$_SESSION['signupmsg'] = 'User already existing' ;
								return false ;
							}
							else
							{
								//Hashing the Password
								$hashedPwd = password_hash($pwd1,PASSWORD_DEFAULT);
								
								//Insert into DB
								$sql = "INSERT INTO users (user_firstname,user_lastname,user_email,user_phone,user_pwd) VALUES ('$fname','$lname','$email',$phone,'$hashedPwd') ;" ;
					
								mysqli_query($conn,$sql) ;

								$_SESSION['signupmsg'] = 'Success!' ;
								return true ;
							}
						}
					}
				}
			}
		}
		
		public function check_login($email, $pwd)
		{
			include "dbh.inc.php";
			//Check for empty inputs
			if (empty($email)||empty($pwd))
			{
				$_SESSION['loginmsg'] = 'Please fill the form properly' ;
				return false;	
			}
			else
			{
				$sql = "SELECT * FROM users WHERE user_email='$email' ; " ;
				$result = mysqli_query($conn,$sql) ;
				$resultCheck = mysqli_num_rows($result) ;
				if ($resultCheck<1)
				{
					$_SESSION['loginmsg'] = 'No Records Found' ;
					return false;
				}
				else
				{
					if ($row=mysqli_fetch_assoc($result))
					{
						//Dehashing the Password
						$hashedPwdCheck = password_verify($pwd, $row['user_pwd']) ;
						if ($hashedPwdCheck == false)
						{
							$_SESSION['loginmsg'] = 'You have entered an incorrect password' ;
							return false;
						}
						elseif($hashedPwdCheck == true)
						{
							//Login the User
							//$login = true ;
							$_SESSION['u_email'] = $row['user_email'] ;
							$_SESSION['u_fname'] = $row['user_firstname'] ;
							return true;
						}
					}
				}
			}
		}

		public function logout()
		{
			$user_fname  = NULL ;
			$user_lname = NULL ;
			$user_email = NULL ;
			$user_id = NULL ;
			$user_phone = NULL ;
			$_SESSION['u_email'] = NULL ;
			$_SESSION['u_fname'] = NULL ;
			session_unset();
			session_destroy();
			header("Location: ../index.php");
			exit();
			//$login = false ;
		}

		public function check_stat()
		{
			if (isset($user_email))
			{
				return $user_email ;
			}
			else
			{
				return false ;
			}
		}

	}

?>