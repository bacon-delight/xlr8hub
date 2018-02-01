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
	<title>Personal Files</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/semanticui/semantic.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/semanticui/semantic.min.css">
	<style type="text/css">
    div.ui.card:hover
    {
      background: rgba(0,70,150,0.1);
      transition: 2s ;
    }
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
				<a class="active item">
					<h4 class="ui header">Personal Files</h4>
					<p>Check and manage your Personal Files</p>
				</a>
				<a class="item" href="home3.php">
					<h4 class="ui header" href="home3.php">File Upload</h4>
					<p>Upload your Files here</p>
				</a>
			</div>
      <div class="ui message">
        <div class="header">Note</div>
        <p>For Support, contact dipanjan131@gmail.com</p>
        <p>This website is completely open sourced and is not necessarily a permanent service. Please do not keep important files for backup purposes. However, you will be informed in prior before any server updates, so that you can download and secure your files and prevent losses.</p>
        <p>Thank you for trying out this service!</p>
      </div>
    </div>
    	<div class="eleven wide column ui segment">
    		<div class="ui">
				<h2>Personal Files</h2>
        <p>Showing Newest Files First</p>
			</div>
      <div class="ui divider"></div>
			<br>
			<div class="ui four stackable cards centered">
				<?php
                include_once 'includes/dbh.inc.php' ;
                $email=$_SESSION['u_email'] ;
                $sql = "SELECT * FROM files WHERE file_uploader='$email' ORDER BY file_id DESC;;" ;
                $result = mysqli_query($conn,$sql) ;
                $resultCheck = mysqli_num_rows($result) ;
                if ($resultCheck>0)
                {
                    while ($row=mysqli_fetch_row($result))
                    {
                        echo '
                        <div class="ui card" style="min-width:200px;">
                          <div class="content">
                            <div class="header">'.$row[0].'</div>
                          </div>
                          <div class="content">
                            <h4 class="ui sub header">Uploaded By:</h4>
                            <div class="ui small feed">
                              <div class="event">
                                <div class="content">
                                  <div class="summary" style="text-align: center ;">
                                     '.$row[2].'
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="extra content">
                            <a href="includes/uploads/'.$row[1].'">View/Download</a>
                          </div>
                        </div> ';
                        $resultCheck=$resultCheck-1 ;
                    }
                }
                else
                {
                    echo '
                        <div class="ui card">
                          <div class="content">
                            <div class="header">No Existing Files</div>
                          </div>
                          <div class="content">
                            <h4 class="ui sub header">You can create one today!</h4>
                            <div class="ui small feed">
                              <div class="event">
                                <div class="content">
                                  <div class="summary">
                                     If you create a file, your name will appear here
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="extra content">
                            <button class="ui button">Create File</button>
                          </div>
                        </div> ';
                }
                ?> 
			</div>
    	</div>
	</div>
	
</body>
</html>