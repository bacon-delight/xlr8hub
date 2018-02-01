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
	<title>Signup Page</title>
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
			background-size: cover;
			background-repeat: no-repeat;
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
				<a class="item" href="login.php">
					Sign In
				</a>
				<a class="active item">
					Sign Up
				</a>
			</div>
		</div>
	</div>
	
	<br>

	<div class="ui two column grid stackable center aligned" style="padding: 10px;">
		
		<div class="eight wide column ui segment" style="margin: 20px; background: transparent; color: #ffffff; text-align: left; ">
			<h1>Accelerating You</h1>
			<p style="font-size: 18px;">
				We bring advancements in various fields of science.
				Our work here will blow the doors of science off its hinges.
			</p>
			<br>
			<h1>Semantic Web Experiance</h1>
			<p style="font-size: 18px;">
				Experiance the power and beauty of Semantic Web.
				Our site is build entirely with Semantic UI and provides the best user experiance.
			</p>
			<br>
			<h1>A subsidiary of PulseFlare</h1>
			<p style="font-size: 18px;">
				Thank you for using our services. This website, including any and all of its contents belongs to PulseFlare.com
			</p>
			<br><br>
		</div>

		<!-- Form Segment -->
		<div class="five wide column ui segment" style="max-width: 450px; min-width: 350px; background: rgba(0,0,0,0.7); color: #ffffff;">
			<div class="ui">
				<h2>Create Your Account</h2>
			</div>
			<div class="ui divider"></div>
			
			<!-- Status Message -->
			<?php
                if (isset($_SESSION['signupmsg']))
                {
                    $temp=$_SESSION['signupmsg'];
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
                    $_SESSION['signupmsg']=NULL ;
                }
            ?>		
			
			<!-- Form -->
			<div class="ui form">
				<form action="includes/signup.inc.php" method="POST">
					<div class="field">
						<label style="text-align: left; color: #ffffff;">Enter your First Name</label>
						<input type="text" name="fname" placeholder="First Name">
					</div>
					<div class="field">
						<label style="text-align: left; color: #ffffff;">Enter your Last Name</label>
						<input type="text" name="lname" placeholder="Last Name">
					</div>
					<div class="field">
						<label style="text-align: left; color: #ffffff;">Enter a valid E-Mail</label>
						<input type="email" name="email" placeholder="E-Mail Address">
					</div>
					<div class="field">
						<label style="text-align: left; color: #ffffff;">Enter your Phone Number</label>
						<input type="text" name="phone" placeholder="Phone Number">
					</div>
					<div class="field">
						<label style="text-align: left; color: #ffffff;">Enter your Password</label>
						<input type="password" name="pwd1" placeholder="Password">
					</div>
					<div class="field">
						<label style="text-align: left; color: #ffffff;">Re-enter your Password</label>
						<input type="password" name="pwd2" placeholder="Confirm Password">
					</div>
					<br>
					<div class="column center aligned">
						<button class="ui primary basic button" type="submit" name="submit">Sign Up</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
