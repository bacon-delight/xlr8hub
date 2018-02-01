<?php
	session_start();
	if (!isset($_SESSION['u_email']))
    {
    	header("Location: signup.php") ;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/semanticui/semantic.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/semanticui/semantic.min.css">
	<style type="text/css">
	</style>
</head>

<body>

	<div class="ui top fixed secondary pointing hidden menu" style="background: #ffffff;">
        <a class="item">
            <i class="lightning icon"></i>
            <strong>XLR8 Hub</strong>
        </a>
        <div class="right menu">
            <a class="active item" href="home.php">
                <i class="home icon"></i>
                Home
            </a>
            <a class="ui item">
                <i class="user icon"></i>
                <?php
                    if (isset($_SESSION['u_email']))
                    {
                        $temp = $_SESSION['u_fname'] ;
                        echo "Hello $temp";
                    }
                    else
                    {
                        echo "You're not logged in";
                    }
                ?>
            </a>
            <a class="ui item">
                <i class="settings icon"></i>
                Settings
            </a>
            <a class="ui item" href="includes/logout.inc.php">
                <i class="caret right icon"></i>
                <?php
                    if (isset($_SESSION['u_email']))
                    {
                        echo "Logout";
                    }
                    else
                    {
                        echo "Login";
                        exit();
                    }
                ?>
            </a>
        </div>
    </div>
    <br><br><br>
    <div class="ui two column grid stackable center aligned" style="padding: 10px;">
    	<div class="four wide column" style="min-width: 300px;">
    		<div class="ui vertical menu" style="width: 100%;">
				<a class="item" href="home1.php">
					<h4 class="ui header">Global Files</h4>
					<p>Check out the Public Files</p>
					</a>
				<a class="item" href="home2.php">
					<h4 class="ui header">Personal Files</h4>
					<p>Check and manage your Personal Files</p>
				</a>
				<a class="active item">
					<h4 class="ui header">File Upload</h4>
					<p>Upload your Files here</p>
				</a>
			</div>
			<?php
                if (isset($_SESSION['upmsg']))
                {
                    $temp=$_SESSION['upmsg'];
                    if ($temp=='Success!')
                    {
                    	echo '
	                    	<div class="ui positive message">
				                <i class="close icon"></i>
				                    <div class="header" style="text-align: left;">Success!</div>
				                <p style="text-align: left;">Your file has been uploaded successfully. Thank you for using our services.</p>
				            </div>
				            <script type="text/javascript">
				            	$(".message .close").on("click", function()
							    {
							    	$(this).closest(".message").transition("fade");
							    });
				            </script>
	                    ';
                    }
                    else
                    {
                    	echo '
	                    	<div class="ui negative message">
				                <i class="close icon"></i>
				                    <div class="header" style="text-align: left;">Error!</div>
				                <p style="text-align: left;">'.$temp.'</p>
				            </div>
				            <script type="text/javascript">
				            	$(".message .close").on("click", function()
							    {
							    	$(this).closest(".message").transition("fade");
							    });
				            </script>
	                    ';
                    }
                    $_SESSION['upmsg']=NULL ;
                }
            ?>
            <div class="ui message">
				<div class="header">Note</div>
				<p>For Support, contact dipanjan131@gmail.com</p>
				<p>This website is completely open sourced and is not necessarily a permanent service. Please do not keep important files for backup purposes. However, you will be informed in prior before any server updates, so that you can download and secure your files and prevent losses.</p>
				<p>Thank you for trying out this service!</p>
			</div>
    	</div>
    	<div class="eleven wide column ui segment">
    		<div class="ui">
				<h2>File Upload</h2>
			</div>
			<div class="ui divider"></div>
			<br>
	    	<div class="ui form">
	    		<form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
	    			<div class="field">
						<label style="text-align: left;">File Name</label>
						<input type="text" name="filename" placeholder="Enter Filename">
					</div>
					<br>
					<div class="field">
						<label style="text-align: left;">Browse File from Local System</label>
						<input type="file" name="file">
					</div>
					<br>
					<div class="ui equal width grid	">
						<div class="column left aligned">
							<div class="ui slider checkbox">
								<input type="checkbox" name="pcheck" value="true">
								<label>Make this file Public</label>
							</div>
						</div>
						<div class="column center aligned">
							<button class="ui basic green button" type="submit" name="submit">
							<i class="caret up icon"></i>
							Upload File
							</button>
						</div>
					</div>
	    		</form>
	    	</div>
	    	<div class="ui icon message">
				<i class="warning sign icon"></i>
				<div class="content">
					<div class="header">
						File Extensions
					</div>
					<p>We currently support .jpg/.png and .pdf/.txt/.doc/.docx/.rar extensions only</p>
				</div>
			</div>
    	</div>

	</div>
	
</body>
</html>
