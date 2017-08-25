<?php
session_start();
if(isset($_POST['submitted'])){
	include('connect.php');
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$phon=$_POST['phon'];
	$getpass=$_POST['pass'];
	$pass=sha1($getpass);
	$address=$_POST['address'];
	$sql = "INSERT INTO users (uname,email,phone,pass,address) VALUES ('$uname','$email','$phon','$pass','$address')";
	
	if(empty($address)){
		echo "<script>alert('All fields are compulsory')</script>";
	} 
	else if(mysql_query($sql)){
		echo "<script>alert('User Added')</script>";
	}
	else echo "Error: ".mysql_error(); 
}	
?>
<html>
<head>
	<title>Janaab Restaurant</title>
	<link rel="shortcut icon" href="assets/css/img/logo_new.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/signup.css">
		<link rel="stylesheet" href="assets/css/animate.css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<style type="text/css">
	    @font-face{
		  font-family: "ALHAMBRA";
		  src: url(assets/fonts/ALHAMBRA.TTF);
		}
	</style>

</head>
<body>
 <div class="col-sm-6 signup animated zoomIn">
    <div class="inner-signup">
 	<form method="post" action="signup.php">
 	 <h2>janaab</h2>
 	 <input type="hidden" name="submitted" value="TRUE">
 		<input type="text" name="uname" placeholder="Name"><br>
 		<input type="text" name="email" placeholder="Email"><br>
 		<input type="text" name="phon" placeholder="Mobile No."><br>
 		<input type="password" name="pass" placeholder="Passsword"><br>
 		<textarea name="address" placeholder="Address"></textarea><br>
 		<input type="submit" name="submit" value="Signup">
 		<a href="login.php">Already a User? Login here</a>
 	</form>
 	</div>
 	 <div id="signup-side"></div>
 </div>


</body>
</html>