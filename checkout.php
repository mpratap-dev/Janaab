<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:menu_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Janaab Restaurant</title>
  <link rel="shortcut icon" href="assets/css/img/logo_new.png">
  <link rel="stylesheet" type="text/css" href="assets/css/checkout.css">
  <script src="assets/js/parallax.js-1.4.2/parallax.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body>
    <div id="nav-bar" >
       <nav>
           <ul>
               <li class="before-logo"><a href="index.php">Home</a></li>
               <li class="before-logo"><a href="index.php/#about">About</a></li>
               <li id="logo"><a href="index.php"> </a></li>
               <li class="after-logo"><a href="menu.php">Menu</a></li>
               <li class="after-logo"><a href="index.php/#contact">Contact</a></li>
           </ul>
       </nav>
   </div>
   <div class="title">
    <div id="inner-title">
     Checkout
     <p>We aim to serve you the best food.</p>
     </div>
   </div>
</body>
</html>