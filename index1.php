<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/mui/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/mui/css/materialize.min.css">
    <script type="text/javascript" src="assets/semanticui/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/semanticui/semantic.min.css">
    <link rel="icon" type="image/png" href="assets/img/logo.png"/>
</head>

<body>

	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper" style="background-color: #04e3ef">
				<a href="#" class="brand-logo center"><strong>Pulse</strong>Flare</a>
			</div>
		</nav>
	</div>

	<div class="parallax-container" style="height: 400px;">
		<div class="parallax">
			<img src="assets/img/bg1.jpeg">
		</div>
		<div class="row" style="padding-top: 150px;">
			<center>
				<h1 class="header" style="color: #ffffff;">Let's get you started!</h1>
				<br>
				<button class="ui primary button large" style="background-color: #04e3ef" onclick="window.location.href='login.php'">Get Started</button>
			</center>
		</div>
	</div>

	<div class="section white" style="padding-top: 30px; padding-bottom: 30px;">
		<div class="ui centered grid stackable">
			<div class="five wide column" style="text-align: center;">
				<i class="huge lightning icon" style="color: #04e3ef;"></i>
				<h3 class="ui header">Get Started Quickly</h3>
				<p style="font-size: 16px;">Join us and start storing your files without any boundaries. Create groups, invite your colleagues, partners or classmates and start collaborating. </p>
			</div>
			<div class="five wide column" style="text-align: center;">
				<i class="huge tablet icon" style="color: #04e3ef;"></i>
				<h3 class="ui header">Access anywhere from any device</h3>
				<p style="font-size: 16px;">Our responsive and simple user interface lets you access your files from any device. Use your desktop, phone or tablet to access your files, wherever you happen to be. Make changes in one, and the update will be reflected in all other devices.</p>
			</div>
			<div class="five wide column" style="text-align: center;">
				<i class="huge users icon" style="color: #04e3ef;"></i>
				<h3 class="ui header">Sharing and Collaboration</h3>
				<p style="font-size: 16px;">Share your files with others through groups, view public files and download them. Collaborate with others and form groups. Manage your groups and invite new members.</p>
			</div>
		</div>
	</div>

	<div class="parallax-container" style="height: 330px;">
		<div class="parallax">
			<img src="assets/img/bg2.jpeg">
		</div>
		<div class="row" style="padding-top: 150px;">
			<center>
				<h1 class="header" style="color: #ffffff;">Stay tuned! More features coming soon!</h1>
			</center>
		</div>
	</div>

	<div class="section white" style="padding-top: 30px; padding-bottom: 30px;">
		<div class="ui centered grid stackable">
			<div class="five wide column" style="text-align: center;">
				<i class="huge rocket icon" style="color: #04e3ef;"></i>
				<h3 class="ui header">Kernels</h3>
				<p style="font-size: 16px;">Kernels launching soon with IPython inteface. Use Jupyter notebooks to code in Python or R and save your notebooks in cloud. Access them from anywhere, anytime.</p>
			</div>
			<div class="five wide column" style="text-align: center;">
				<i class="huge cubes icon" style="color: #04e3ef;"></i>
				<h3 class="ui header">Data Analysis</h3>
				<p style="font-size: 16px;">Perform data analytics using Python or R. Upload your own datasets and use Jupyter Notebooks to analyse it. No limitations in data science tools, simplify your work with pre-installed headers and libraries.</p>
			</div>
			<div class="five wide column" style="text-align: center;">
				<i class="huge line chart icon" style="color: #04e3ef;"></i>
				<h3 class="ui header">Competitions</h3>
				<p style="font-size: 16px;">Compete with others and prove your talent. Analyse and test your model and compare with others. Share your notebooks or kernels, view public kernels and acquire new skills.</p>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){$('.parallax').parallax();});
	</script>

	<footer class="page-footer" style="background-color: #1d1d1e; padding-top: 30px;">
		<div class="container">
			<div class="ui centered grid stackable">
				<div class="ten wide column">
					<h3 class="ui header inverted">The PulseFlare Project</h3>
					<p style="color: #9398a0; font-weight: lighter;">Thanks for visiting this page. This service along with all its components is a part of The PulseFlare Project. We hope to bring cloud computing to our user's fingertips. We aim to provide data analytics tools with server side computing, so our users can perform various operations on their datasets without any limitations of hardware.</p>
				</div>
				<div class="six wide column left aligned">
					<h3>Links</h3>
					<div class="ui inverted link list">
						<a class="item" href="#">About Us</a>
						<a class="item" href="#">Contact Us</a>
						<a class="item" href="#">Follow us on Facebook</a>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="footer-copyright" style="">
			<div class="container" style="text-align: center;">
				© 2018 The PulseFlare Project
			</div>
		</div>
	</footer>

</body>

</html>