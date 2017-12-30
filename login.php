<?php
session_start();
 if(isset($_POST['submit'])){
	require 'connect.php';
    $username=$_POST['username'];
    $getpass=$_POST['pass'];
	$pass=sha1($getpass);
	$mysql=mysql_query("SELECT * FROM users WHERE uname='$username' AND pass='$pass'") or die("The query can't runn");
	$count=mysql_num_rows($mysql);
    if($count==1){
    	$_SESSION['logged']=true;
    	$_SESSION['username']=$username;
    	header("Location: index.php");
    	exit();
    } 
    else
    {
    	$_SESSION['logged']=false;
    	echo "<script>alert('wrong')</script>";
	    header("Location: login.php");
	    exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Janaab Restaurant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="assets/css/img/logo_new.png" type="image/x-icon" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
	<style type="text/css">
    @font-face{
	  font-family: "ALHAMBRA";
	  src: url(assets/fonts/ALHAMBRA.TTF);
	}
  </style>
</head>
<body>
   <div id="login-outer" class="animated zoomIn">
	 	<div id="login">
	 	  <p id="title">janaab</p>
		  <form action="login.php" method="post">
			  	<input type="text" name="username" class="txt" placeholder="Username"><br>
			  	<input type="password" name="pass" class="txt" placeholder="Password"><br>
			  	<input type="submit" id="submit" name="submit" value="LOGIN"><br>
			  	<a id="newuser" href="signup.php">New User ? Be a member now</a>
                <a href="#" id="forget">Forgot Password ?</a>
		  </form>
	 	</div>
	 	<div id="login-side">
	 		<img src="assets/css/img/login-side.jpg">
	 	</div>
   </div>
   
   <!--forget password modal-->
   <div class="forget-outer">
   	<div class="forget">
   	    <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></a>
   	    <p>Find Your Account</p><hr>
   		<form action="">
   			<input type="text" placeholder="Enter Email"><br>
   			<input type="submit" name="search" value="Search">
		</form>
   	</div>
   </div>
</body>
<script type="text/javascript">
	$('#close').click(function(){
        $('.forget-outer').fadeOut();
	});
</script>
</html>