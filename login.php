<?php
	session_start();
	if (isset($_SESSION['u_email']))
  	{
    	header("Location: home1.php") ;
  	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/semanticui/semantic.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/semanticui/semantic.min.css">
	<style type="text/css">
		body
		{
			background: url('assets/img/bg3.jpeg');
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
</head>

<body>

	<div class="ui inverted segment" style="border-radius:0px;">
		<div class="ui inverted secondary pointing menu">
			<a class="item" href="index.php">
				<strong>XLR8 Hub</strong>
			</a>
			<div class="right menu">
				<a class="active item">
					Sign In
				</a>
				<a class="item" href="signup.php">
					Sign Up
				</a>
			</div>
		</div>
	</div>
	
	<br><br><br>

	<div class="ui two column grid stackable center aligned" style="padding: 10px;">
		
		<div class="eight wide column ui segment" style="margin: 20px; background: transparent; color: #ffffff; text-align: left; ">
			<h1>Login to access your account</h1>
			<p style="font-size: 18px;">
				Login and access your dashboard. View and modify your contents and control your files.
				Experiance our reinvented dashboard, perfected for usability. We provide the best in class user experiance!
			</p>
			<br>
			<h1>A subsidiary of PulseFlare</h1>
			<p style="font-size: 18px;">
				Thank you for using our services. This website, including any and all of its contents belongs to PulseFlare.com
			</p>
			<br><br>
		</div>
		<div class="five wide column ui segment" style="max-width: 450px; min-width: 350px; background: rgba(0,0,0,0.8); ">
			<div class="ui">
				<h2 style="color: #ffffff;">Sign In</h2>
			</div>
			<div class="ui divider"></div>
			<br>
			<div class="ui form" style="opacity: 0.8;">
				<form action="includes/login.inc.php" method="POST">
					<div class="field">
						<label style="text-align: left; color: #ffffff;">Username</label>
						<input type="email" name="email" placeholder="E-Mail / Username">
					</div>
					<br>
					<div class="field">
						<label style="text-align: left; color: #ffffff;">Password</label>
						<input type="password" name="pwd" placeholder="Password">
					</div>
					<br>
					<div class="column center aligned">
						<button class="ui primary basic button" type="submit" name="submit">Sign In</button>
					</div>
				</form>
			</div>
			<br>
			<!-- Status Message -->
			<?php
                if (isset($_SESSION['loginmsg']))
                {
                    $temp=$_SESSION['loginmsg'];
                    if ($temp=='Success!')
                    {
                    	echo '
	                    	<div class="ui positive message">
				                <i class="close icon"></i>
				                    <div class="header" style="text-align: left;">Success!</div>
				                <p style="text-align: left;">Your account has been created successfully. Please sign in to your account to use our services.</p>
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
                    $_SESSION['loginmsg']=NULL ;
                }
            ?>
		</div>
	</div>

</body>
</html>
