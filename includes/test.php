<?php
	session_start();
	
	if (isset($_POST['submit']))
	{
		$file = $_FILES['file'] ;
		
		//print_r($file) ;

		$fileName = $_FILES['file']['name'] ; //$fileName = $file['name'] ; 
		$fileTmpName = $_FILES['file']['tmp_name'] ;
		$fileSize = $_FILES['file']['size'] ;
		$fileError = $_FILES['file']['error'] ;
		$fileType = $_FILES['file']['type'] ;

		$fileExt = explode('.', $fileName) ;
		$fileActualExt = strtolower(end($fileExt)) ;

		$allowed = array('doc','pdf','docx','png','txt','rar','zip','jpg','jpeg') ;

		if (in_array($fileActualExt, $allowed))
		{
			if ($fileError === 0)
			{
				if ($fileSize < 20000000)
				{
					$fileNameNew = uniqid('',true).".".$fileActualExt ;
					$fileDestination = 'uploads/'.$fileNameNew ;
					move_uploaded_file($fileTmpName, $fileDestination) ;
					
					include_once 'dbh.inc.php' ;
					$email=$_SESSION['u_email'];
					$fname = mysqli_real_escape_string($conn,$_POST['filename']) ;
					$pcheck = mysqli_real_escape_string($conn,$_POST['pcheck']) ;
					if ($pcheck=='true')
					{
						$pcheckval=1 ;
					}
					else
					{
						$pcheckval=0 ;
					}

					$sql = "INSERT INTO files (file_name,file_id,file_uploader,file_global) VALUES ('$fname','$fileNameNew','$email','$pcheckval') ;" ;
					mysqli_query($conn,$sql) ;
					$_SESSION['upmsg'] = 'Success!' ;

					header("Location: ../home3.php?uploadsuccess") ;
				}
				else
				{
					$_SESSION['upmsg'] = 'File size is too large';
					header("Location: ../home3.php?uploadfail") ;
				}
			}
			else
			{
				$_SESSION['upmsg'] = 'There was an unexpected error';
				header("Location: ../home3.php?uploadfail") ;
			}
		}
		else
		{
			$_SESSION['upmsg'] = 'File type not allowed';
			header("Location: ../home3.php?uploadfail") ;
		}
	}

?>
