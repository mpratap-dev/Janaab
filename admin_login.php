<?php
session_start();
 if(isset($_POST['submit'])){
	require 'connect.php';
    $username=$_POST['username'];
    $getpass=$_POST['pass'];
	$pass=sha1($getpass);
	$mysql=mysql_query("SELECT * FROM admin WHERE admin_name='$username' AND password='$pass'") or die("The query can't runn");
	$count=mysql_num_rows($mysql);
    if($count==1){
    	$_SESSION['adminlogged']=true;
    	$_SESSION['adminname']=$username;
    	header("Location: dashboard.php");
    	exit();
    } 
    else
    {
    	$_SESSION['adminlogged']=false;
    	echo "<script>alert('wrong');</script>";
	    header("Location: admin_login.php");
	    exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Janaab Restaurant</title>
	<link rel="shortcut icon" href="assets/css/img/logo_new.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="assets/css/admin_login.css">
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
		  <form action="admin_login.php" method="post">
			  	<input type="text" name="username" class="txt" placeholder="Admin_name"><br>
			  	<input type="password" name="pass" class="txt" placeholder="Password"><br>
			  	<input type="submit" id="submit" name="submit" value="LOGIN"><br>
			  	<a id="newuser" href="#">Contact owner if you need admin's access.</a>
		  </form>
		  <div></div>
	 	</div>
	 	<div id="login-side">
	 		<img src="assets/css/img/admin_side.jpg">
	 	</div>
   </div>
</body>
</html>