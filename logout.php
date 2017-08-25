<?php session_start();
unset($_SESSION["username"]); 
unset($_SESSION["adminname"]); 
unset($_SESSION['logged']); 
unset($_SESSION["adminlogged"]); 
header("Location: index.php");
?>