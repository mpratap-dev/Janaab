<?php
session_start();
if(!isset($_SESSION['adminname'])){
   header("Location:admin_login.php");
}
include('connect.php');
if(isset($_POST['submitted'])){
	
	$category=$_POST['category'];
	$name=$_POST['name'];
	$desc=$_POST['desc'];
	$quantity=$_POST['quantity'];
	$content=$_POST['content'];
	$cost=$_POST['cost'];
    $sql = "INSERT INTO products(content,category,name,description,pcs,price) VALUES ('$content','$category','$name','$desc','$quantity','$cost')";
	if (mysql_query($sql)) {
	 	echo "<script>alert('Item Added SUCCESSFULLY')</script>";
	 } 
	 else {
	 	echo "<script>alert('Error while adding item')</script>";}
  
}
if (isset($_POST['addAdmin'])) {
	
	$admin_name=$_POST['admin_name'];
	$email=$_POST['email'];
	$getpassword=$_POST['password'];
	$pass=sha1($getpassword);
	$sql = "INSERT INTO admin(admin_name,email,password) VALUES ('$admin_name','$email','$pass')";
	if (mysql_query($sql)) {
	 	echo "<script>alert('Admin Added SUCCESSFULLY')</script>";
	 } 
	 else {
	 	echo "<script>alert('Error while adding admin')</script>";}
  }
?>
<html>
<head>
	<title>Janaab Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link rel="shortcut icon" href="assets/css/img/logo_new.png">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
        @font-face{
              font-family: "ALHAMBRA";
              src: url(assets/fonts/ALHAMBRA.TTF);
              }
    </style>

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <header>
       <div class="logo">
	           janaab
	    </div>
   	<div class="userporfile">
   	<?php
          
         if(!isset($_SESSION['adminlogged']))
          {
            echo "<a id='login-register' href='admin_login.php'><span>Login/Register</span></a></li>";
          }
         else if($_SESSION['adminlogged'])
          { echo "<span id='uname'>";
            echo 'Hi '.$_SESSION['adminname'];
            echo "</span>";
            echo "<a id='logout' href='logout.php'><span><i class='fa fa-sign-out' aria-hidden='true'></i></span></a></li>";
          }
      ?></div>
   </header>
	<div class="navbar-default sidebar" role="navigation">
	    <div class="sidebar-nav slimscrollsidebar">
	        
	        <ul class="nav" id="side-menu">
	            <li>
	                <a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
	            </li>
	            <li>
	                <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
	            </li>
	            <li>
	                <a href="fontawesome.html" class="waves-effect"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>Add Admin</a>
	            </li>
	            <li>
	                <a href="#add" class="waves-effect"><i class="fa fa-cutlery fa-fw" aria-hidden="true"></i>Add Menu</a>
	            </li>
	            <li>
	                <a href="map-google.html" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Registered Customers</a>
	            </li>
	        </ul>
	    </div>
	</div>
    <div class="main-page">
		    <div class="orders">
		    	<table class="table">
				    <thead>
				      <tr>
				        <th>UserID</th>
				        <th>Product Name</th>
				        <th>Quantity</th>
				        <th>Time</th>
				        <th>Address</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>01</td>
				        <td>Shami Kebab</td>
				        <td>3</td>
				        <td>12:00</td>
				        <td>Sector 17 Gurugram</td>
				      </tr>
				      <tr>
				         <td>65</td>
				        <td>Dal Maharani</td>
				        <td>1</td>
				        <td>12:05</td>
				        <td>Sector 21 Dwarka</td>
				      </tr>
				      
				    </tbody>
				  </table>
		    </div>


          <div class="add">
		   <div id="addmenu">
			   <form method="post" action="dashboard.php" > 
			     <input type="hidden" name="submitted" value="TRUE">
			     <p id="add-title">Add an item to menu</p><br>
			     <select name="category" id="category">
			  		<option id="kebab" value="kebabs">Kebabs</option>
			  		<option value="rolls">Rolls</option>
			  		<option value="gravy">Gravy Delights</option>
			  		<option value="dal">Dal</option>
			  		<option value="bread">Bread</option>
			  		<option value="biryani">Biryani</option>
			  		<option value="beverages">Beverages</option>
			  		<option value="dahi">Dahi/Raita/Salad</option>
			  		<option value="desserts">Desserts</option>
				 </select><br>
				
			     <input type="text" name="name" id="name" class="input" placeholder="Name"><br>
			     <textarea id="desc" name="desc" placeholder="Description"></textarea><br>
			     <select name="quantity" id="quantity">
			        <option selected disabled="">Quantity</option>
			     	<option value="1">1Pc</option>
			     	<option value="2">2Pcs</option>
			     	<option value="3">3Pcs</option>
			     	<option value="4">4Pcs</option>
			     	<option value="5">5Pcs</option>
			     	<option value="6">6Pcs</option>
			     	<option value="7">7Pcs</option>
			     	<option value="8">8Pcs</option>
			     	<option value="9">9Pcs</option>
			     	<option value="10">10Pcs</option>
			     </select><br>
			     <p class="radio"><input type="radio" name="content" value="0" id="nonveg" checked><label for="nonveg">Non-Veg</label></p>
		         <p class="radio"><input type="radio" name="content" id="nonveg" value="1"><label for="veg">Veg</label></p><br>
		         
			     <input type="text" name="cost" id="cost" class="input" placeholder="₹ cost"><br><br>
			   	 <input type="submit" name="submit" value="Add Item" id="submit"><a id="show_menu" href="menu.php" target="_blank"><i class="fa fa-bars" aria-hidden="true"></i><span class="tooltip_menu animated fadeIn">Show Menu</span></a>
			   </form>
		   </div>
		   <div class="addAdmin">
		   	<form action="dashboard.php" method="post">
		   	 <input type="hidden" name="added" value="TRUE">
		   	 <p id="add-title">Add new admin</p><br>
              <input type="text" name="admin_name" placeholder="Name"><br>
              <input type="text" name="email" placeholder="email" ><br>
              <input type="password" name="password" placeholder="password"><br>
              <input type="submit" name="addAdmin" value="Add">		   		
		   	</form>
		   </div>
		 </div>  
		 <div class="users">
		    	<table class="table">
				    <thead>
				      <tr>
				        <th>UserID</th>
				        <th>User Name</th>
				        <th>Email</th>
				        <th>Phon</th>
				        <th>Address</th>
				      </tr>
				    </thead>
				    <tbody>
				      <?php 
			          $sql = "SELECT * FROM users";
			          $result = mysql_query($sql);
			          while($row = mysql_fetch_array($result)){
							  echo "  
							      <tr>
							        <td> $row[0] </td>
							        <td> $row[1] </td>
							        <td> $row[2] </td>
							        <td> $row[3] </td>
							        <td> $row[5] </td>
							      </tr>
							      ";}
							       ?>
				      </tbody>
				  </table>
		    </div>
    </div>  
</body>
</html>
