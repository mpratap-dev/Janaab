<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Janaab Restaurant</title>
	<link rel="shortcut icon" href="assets/css/img/logo_new.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>

  <style type="text/css">
    @font-face{
      font-family: "ALHAMBRA";
      src: url(assets/fonts/ALHAMBRA.TTF);
    }

  </style>
</head>
<body class="animated fadeIn">
  <?php
   
   include('connect.php');
   echo "<div class='head'>
          <ul id='nav-bar'>
             <a href='javascript:void(0);' class='navLogo'><img src=assets/css/img/menu.svg></a>
             <ul class='nav-sm-m'>
               <img src='assets/css/img/first-back2.jpg' class='navBack'>
               <a href='javascript:void(0);' class='closeM'><i class='ti ti-close' aria-hidden='true'></i></a>
               <a class='l0C'></a>
               <li class='l1C menuBtnClk'></li>
               <li class='l2C menuBtnClk'></li>
               <li class='l4C menuBtnClk'></li>
               <li class='l5C menuBtnClk'></li>
               <div class='navFoot'>
                 <li class='socMedia'></li>
                 <li class='footNav'></li>
               </div>
               
             </ul>
             <li class='before-logo l1'><a href='index.php'>Home</a></li>
             <li class='before-logo l2'><a href='index.php#about'>About</a></li>
             <a href='index.php' class='l3'><li id='logo'></li></a>
             <a href='javascript:void(0);' class='userLogo dropdown-toggle' data-toggle='dropdown'><img src='assets/css/img/user.svg'></a>
             <ul class='dropdown-menu'>
               <li class='l6C'></li>
               <li class='l7C'></li>
             </ul>
             <li class='after-logo l4'><a href='menu.php'>Menu</a></li>
             <li class='after-logo l5'><a href='index.php#contact'>Contact</a></li>
             <li class='l6'>
               <div class='quick-order call'>
                  <div class='call-logo'>
                    <i class='fas fa-mobile-alt'></i>
                  </div>
                  <div class='order-div'>
                    <p>Quick Order</p>
                    <p id='phon'>085059 09430</p>
                  </div>
                </div>
             </li>
             <li class='l7'>
               <div class='quick-order login'>
                  <div class='login-logo'>
                    <i class='far fa-user'></i>
                  </div>
                  <div class='login-div'>
                    <p>Quick Order</p>";
                       if(!isset($_SESSION['logged']))
                          {
                            echo "<a id='login-register' href='login.php'><span>Login/Register</span></a></li>";
                          }
                         else if($_SESSION['logged'])
                          {
                            echo "<span id='uname'>";
                            echo 'Hi '.$_SESSION["username"];
                            echo "</span>";
                            echo "<a id='logout' href='logout.php'><span class='logoutDiv'><i class='fas fa-sign-out-alt'></i></span></a></li>";
                          }
                   echo "
                    </div>
                </div>
             </li>
         </ul>
           </div>
          ";

     #kebabs div

    echo"<div id='menu' class='animated fadeIn'>
          <div id='kebabs' class='blurred-bg'>
          <p id='title'> menu </p>

          <div id='kebab-div'>
          <p id='category'>Kebabs</p>
          </div>";
          $sql = "SELECT * FROM products where category='kebabs'";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
              echo "<div id='inner' class='inner'>

                        <span class='clas'>";
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>

                    </div>
                    <hr>";}
    echo "</div>";

        #rolls div
      echo "<div id='rolls' class='blurred-bg'>
            <div id='roll-div'>
            <p id='category'>Rolls</p>
            </div>";
            $sql = "SELECT * FROM products where category='rolls'";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result)){
                echo "<div id='inner' class='inner'>
                      <span class='clas'>";
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        } else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>
                    </div>
                    <hr>";}
      echo "</div>";

       echo "<div id='biryani' class='blurred-bg'>
          <div id='biryani-div'>
          <p id='category'>Biryani</p>
          </div>";
          $sql = "SELECT * FROM products where category='biryani'";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
              echo "<div id='inner' class='inner'>
                      <span class='clas'>";
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>
                    </div>
                    <hr>";}
        echo "</div>";

        echo "<div id='gravy' class='blurred-bg'>
          <div id='gravy-div'>
          <p id='category'>Gravy Delight</p>
          </div>";
          $sql = "SELECT * FROM products where category='gravy'";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
              echo "<div id='inner' class='inner'>
                      <span class='clas'>";
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>
                    </div>
                    <hr>";}
        echo "</div>";

        echo "<div id='dal' class='blurred-bg'>
          <div id='dal-div'>
          <p id='category'>Dal</p>
          </div>";
          $sql = "SELECT * FROM products where category='dal'";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
              echo "<div id='inner' class='inner'>
                    <span class='clas'>" ;
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>
                    </div>
                    <hr>";}
        echo "</div>";

        echo "<div id='bread' class='blurred-bg'>
          <div id='bread-div'>
          <p id='category'>Breads</p>
          </div>";
          $sql = "SELECT * FROM products where category='bread'";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
              echo "<div id='inner' class='inner'>
                      <span class='clas'>";
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>
                    </div>
                    <hr>";}
        echo "</div>";

        echo "<div id='beverages' class='blurred-bg'>
          <div id='beverages-div'>
          <p id='category'>Beverages (Cold)</p>
          </div>";
          $sql = "SELECT * FROM products where category='beverages'";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
              echo "<div id='inner' class='inner'>
                     <span> class='clas'";
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>
                    </div>
                    <hr>";}
        echo "</div>";

        echo "<div id='curd' class='blurred-bg'>
          <div id='curd-div'>
          <p id='category'>Curd/Raita/Salad</p>
          </div>";
          $sql = "SELECT * FROM products where category='dahi'";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
               echo "<div id='inner' class='inner'>
                      <span class='clas'>";
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>
                    </div>
                    <hr>";}
        echo "</div>";

        echo "<div id='desserts' class='blurred-bg'>
          <div id='desserts-div'>
          <p id='category'>Desserts</p>
          </div>";
          $sql = "SELECT * FROM products where category='desserts'";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
              echo "<div id='inner' class='inner'>
                      <span class='clas'>";
                        if ($row[1]==0) {
                          echo "<img class='veg' src='assets/css/img/nonveg.png'>";
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
                   echo"</span><h3 id='name' class='name left-cart'>$row[3]<span id='pieces' >( $row[5] Pcs )</span></h3><p id='desc'>$row[4]</p>
                      <span id='price' class='right-cart price'>from ₹ <mark> $row[6]</mark></span>

                        <a name='add_to_cart' id='buy' class='buy-btn right-cart'>ADD TO CART</a>

                    </div>
                    <hr>";}
        echo "</div>";

      echo "</div>";
      echo "<div id='side-nav' class='animated fadeIn'>
             <ul class='catUl'>
                <li><a href='#kebabs'>KEBABS</a></li>
                <li><a href='#rolls'>ROLLS</a></li>
                <li><a href='#biryani'>BIRYANI</a></li>
                <li><a href='#gravy'>GRAVY DELIGHT</a></li>
                <li><a href='#dal'>DAL</a></li>
                <li><a href='#bread'>BREAD</a></li>
                <li><a href='#beverages'>BEVERAGES</a></li>
                <li><a href='#curd'>CURD/RAITA/SALAD</a></li>
                <li><a href='#desserts'>DESSERTS</a></li>
             </ul>
             </div>

             ";
?>

  <!--choose quantity div-->

   <div id="desc-dish">
     <div id="innner-desc-dish" class="animated zoomIn">
       <div id="quantity-top"><span>Select Quantity</span><span id="close-quantity"><i class="ti ti-close" aria-hidden="true"></i></span></div>
       <div id="outer-dish">
          <div id="dish-name"></div>
          <div class="dishCost"><span>₹</span><span id="dish-cost"></span></div>
          <div id="dish-desc"></div>
       </div>
       <div id="button-group">
          <button id="subtract"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
          <span id="counter"></span>
          <button id="add"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
       <a id="add-cart" href="#">ADD TO CART</a>
     </div>
   </div>

  <!--show/hide cart-item-->
  <div class="floatingBtn dropup">
    <a href="javascript:void(0)" class="dropdown-toggle" type="button" data-toggle="dropdown">
      <img src="assets/css/img/category.svg">
    </a>
    <ul class="dropdown-menu catNew">
      
    </ul>
  </div>

  <a id="show-cart">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <span id="item_count"></span>
  </a>

  
    <div class=" your-cart" id="your-cart">
       <div id="cart-top">
          <p>Your Cart<span id="close-cart"><i class="ti ti-close" aria-hidden="true"></i></span></p>
       </div>
       <div class="table" id="cart-table" method="post">
       </div>
       <div class="lower-cart">
          <div id="total">Total: ₹ <span id="tot"></span></div>

          <a href="checkout.php" id="checkout">CHECKOUT</a>
       </div>
     </div>
     <div id="soc" class="hidden">
       <h2>Find us on</h2>
        <div>
        <a  href="https://www.facebook.com/janaabRestaurant/" target="_blank"><img id="fb" class="social-img wow bounceInLeft" data-wow-delay="0.2s" src="assets/css/img/fb.png"></a>
        <a href="https://twitter.com/JanaabFood" target="_blank"><img id="tweet" class="social-img wow bounceInLeft" data-wow-delay="0.4s" src="assets/css/img/tweet.png"></a>
        <a href="https://www.instagram.com/janaab.food/" target="_blank"><img id="insta" class="social-img wow bounceInLeft" data-wow-delay="0.6s" src="assets/css/img/insta.png"></a>
        <a href="https://www.swiggy.com/gurgaon/janaab-dlf-phase-4-dlf-phase-4" target="_blank"><img id="swiggy" class="social-img wow bounceInLeft" data-wow-delay="0.8s" src="assets/css/img/swiggy.png"></a>
        
        <a href="https://www.zomato.com/ncr/janaab-dlf-phase-4-gurgaon" target="_blank"><img id="zomato" class="social-img wow bounceInLeft" data-wow-delay="1.0s" src="assets/css/img/zomato.png" alt="Zomato"></a>
        
        <a href="mailto:janaab.restaurant@gmail.com" target="_top"><img id="swiggy" class="social-img wow bounceInLeft" data-wow-delay="1.2s" src="assets/css/img/mail.png"></a>
       </div>
      </div> 
      <div id="footer" class="hidden">
         <p>&copy; Copyright 2017 JANAAB. All Rights Reserved</p>
         <p>Food shown are for illustration purpose only. Actual product may differ from the images shown in this website.</p>
         <!-- <hr> -->
          Designed with 
          <i class="fas fa-heart"></i> by 
          <a class="Myname" href="mailto:mp1995singh@gmail.com?Subject=@Janaab%20Food"  target="_top">Mahesh Pratap</a>
         <a id="top" class="wow bounceIn" href="#first"><i class="fas fa-chevron-up"></i></a>
      </div>
</body>
</html>
