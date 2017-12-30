<html>
    <head>
    <title>Janaab Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="assets/css/img/logo_new.png">  
    <link rel="stylesheet" href="assets/css/special.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
           <div id="nav-bar" >
               <nav>
                   <ul>
                       <li class="before-logo"><a href="index.php">Home</a></li>
                       <li class="before-logo"><a href="#about">About</a></li>
                       <li id="logo"><a href="index.php"> </a></li>
                       <li class="after-logo"><a href="menu.php">Menu</a></li>
                       <li class="after-logo"><a href="#contact">Contact</a></li>
                       <div class="header">
                          <div class="quick-order call">
                            <div class="call-logo">
                              <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                            <div class="order-div">
                              <p>Quick Order</p>
                              <p id="phon">085059 09430</p>
                            </div>
                          </div>
                          <div class="quick-order login">
                            <div class="login-logo">
                              <i class="fa fa-user-o" aria-hidden="true"></i>
                            </div>
                            <div class="login-div">
                              <p>Quick Order</p>
                              <?php
                                  session_start();
                                 if(!isset($_SESSION['logged']))
                                  {
                                    echo "<a id='login-register' href='login.php'><span>Login/Register</span></a></li>";
                                  }
                                 else if($_SESSION['logged'])
                                  { echo "<span id='uname'>";
                                    echo 'Hi '.$_SESSION['username'];
                                    echo "</span>";
                                    echo "<a id='logout' href='logout.php'><span > (Logout)</span></a></li>";
                                  }
                              ?>
                            </div>
                          </div>
                        </div>
                   </ul>
               </nav>
           </div>
           
              <div id="addmenu">
               <form method="post" action="dashboard.php" > 
                 <input type="hidden" name="submitted" value="TRUE">
                 <p id="add-title"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Add an item to menu</p><br>
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

                       <div class="content-div">
                   <p class="content"> 
                            <input id="Veg" class="contentLabel" type="radio" name="content" value="1" required checked="true">
                            <label for="Veg"><img src="assets/css/img/leaf.svg" height="50px" >Veg</label>
                        </p>
                        <p class="content">
                            <input id="Non-Veg" type="radio" class="contentLabel" name="content" value="0" required>
                           <label for="Non-Veg"><img src="assets/css/img/chicken.svg" height="50px"> Non-Veg</label>
                        </p><br>
                   </div>

                 <input type="text" name="cost" id="cost" class="input" placeholder="₹ cost"><br><br>
                 <input type="submit" name="submit" value="Add Item" id="submit"><a id="show_menu" href="menu.php" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i><span class="tooltip_menu animated fadeIn">Show Menu</span></a>
               </form>
             </div>
           
    </body>
</html>