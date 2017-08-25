<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Janaab Restaurant</title>
	<link rel="shortcut icon" href="assets/css/img/logo_new.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
    echo "<div>
          <header id='header'>
               <nav>
                   <ul>
                       <li class='before-logo'><a href='index.php'>Home</a></li>
                       <li class='before-logo'><a href='index.php#about'>About</a></li>
                       <li id='logo'><a href='index.php'></a></li>
                       <li class='after-logo'><a href='menu.php'>Menu</a></li>
                       <li class='after-logo'><a href='index.php#contact'>Contact</a></li>
                       <div class='header'>
                          <div class='quick-order call'>
                            <div class='call-logo'>
                              <i class='fa fa-mobile' aria-hidden='true'></i>
                            </div>
                            <div class='order-div'>
                              <p>Quick Order</p>
                              <p id='phon'>085059 09530</p>
                            </div>
                          </div>
                          <div class='quick-order login'>
                            <div class='login-logo'>
                              <i class='fa fa-user-o' aria-hidden='true'></i>
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
                                    echo "<a id='logout' href='logout.php'><span > (Logout)</span></a></li>";
                                  }
                           echo "
                            </div>
                          </div>
                        </div>
                   </ul>
               </nav>
           </header>
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
                        }else  echo "<img class='veg' src='assets/css/img/veg.png'>";
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
             <ul>
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

  <a id="show-cart">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <span id="item_count"></span>
  </a>

  <div id="cart">
    <div class="table-responsive animated slideInRight" id="your-cart">
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
   </div>
           
</body>
</html>
