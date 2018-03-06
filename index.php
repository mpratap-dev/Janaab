<!DOCTYPE html>
<html>
<head>
	<title>Janaab Restaurant</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Janaab logo-->
    <link rel="shortcut icon" href="assets/css/img/logo_new.png">
    <!--CSS-->
    
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/animsition/dist/css/animsition.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <style type="text/css">
        @font-face{
            font-family: "ALHAMBRA";
            src: url(assets/fonts/ALHAMBRA.TTF);
        }
        
    </style>
</head>
<body>
	<!--first div start-->
	   <div id="first" data-parallax="scroll" data-image-src="assets/css/img/first-back.jpg">
	       <ul id="nav-bar">
             <a href="javascript:void(0);" class="navLogo"><img src="assets/css/img/menu.svg"></a>
             <ul class="nav-sm-m">
               <img src="assets/css/img/first-back2.jpg" class="navBack">
               <a href="javascript:void(0);" class="closeM"><i class="ti ti-close" aria-hidden="true"></i></a>
               <a class="l0C"></a>
               <li class="l1C menuBtnClk"></li>
               <li class="l2C menuBtnClk"></li>
               <li class="l4C menuBtnClk"></li>
               <li class="l5C menuBtnClk"></li>
               <div class="navFoot">
                 <li class="socMedia"></li>
                 <li class="footNav"></li>
               </div>
               
             </ul>
             <li class="before-logo l1"><a href="index.php">Home</a></li>
             <li class="before-logo l2"><a href="#about">About</a></li>
             <a href="index.php" class="l3"><li id="logo"></li></a>
             <a href="javascript:void(0);" class="userLogo dropdown-toggle" data-toggle="dropdown"><img src="assets/css/img/user.svg"></a>
             <ul class="dropdown-menu">
               <li class="l6C"></li>
               <li class="l7C"></li>
             </ul>
             <li class="after-logo l4"><a href="menu.php">Menu</a></li>
             <li class="after-logo l5"><a href="#contact">Contact</a></li>
             <li class="l6">
               <div class="quick-order call">
                  <div class="call-logo">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                  <div class="order-div">
                    <p>Quick Order</p>
                    <p id="phon">085059 09430</p>
                  </div>
                </div>
             </li>
             <li class="l7">
               <div class="quick-order login">
                  <div class="login-logo">
                    <i class="far fa-user"></i>
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
                          echo "<a id='logout' href='logout.php'><span class='logoutDiv'><i class='fas fa-sign-out-alt'></i></span></a></li>";
                        }
                    ?>
                  </div>
                </div>
             </li>

         </ul>
	       <span id="intro" class="animated slideInRight">
	           <p id="h3">COME IN & TASTE</p>
	           <i class="fas fa-utensils"></i>
	           <p>FINGER LICKING AWADHI AND MUGHALAI!</p>
	       </span>
	   </div>
   <!--end of first div-->

   <!--about div start-->
	   <div id="about">
	       <div>
	           <div id="about-para">
	               <h2>Janaab Food</h2>
	               <img src="assets/css/img/serve.svg">
	               <p class="wow slideInUp">
	               	Home of authentic awadhi and mughali cuisine in Gurugram!<br>Best team of Chefs from the industry getting together to give you the richest of flavours, soothing ambience and the best of taste in market!
	               </p>
	           </div>   
	        </div>   
	   </div>
   <!--end of about div-->
   <!--Gallery div start-->

       <div id="menu" class="container-fluid">
          <h2>Our Speciality</h2>
        
          <div class="carousel" >
            <div class="descDishDiv">
            	<img src="assets/css/img/gallery/menu1.jpg" class="img-rounded" alt="image">
            	<div class="descDish">
            		<h3>Yakhni</h3> 
            		<p>
            			yakhni is simply stock or broth. It is often the base for many foods including pilaf (pulao) and other chorbas or soups
            		</p>
            	</div>
            </div>
            <div class="descDishDiv">
            	<img src="assets/css/img/gallery/menu2.jpg" class="img-rounded" alt="image">
            	<div class="descDish">
            		<h3>Kebabs</h3> 
            		<p>
            			Usually, kebabs. small pieces of meat or seafood seasoned or marinated and broiled, often with tomatoes, green peppers, onions, or other vegetables, usually on a skewer.
            		</p>
            	</div>
            </div>
            <div class="descDishDiv">
            	<img src="assets/css/img/gallery/menu3.jpg" class="img-rounded" alt="image">
            	<div class="descDish">
            		<h3>Egg Roll</h3> 
            		<p>
            			A thin egg-dough casing filled with minced vegetables and often bits of meat (such as shrimp or chicken) and usually deep-fried.
            		</p>
            	</div>
            </div>
            <div class="descDishDiv">
            	<img src="assets/css/img/gallery/menu4.jpg" class="img-rounded" alt="image">
            	<div class="descDish">
            		<h3>Gravy</h3> 
            		<p>
            			ream gravy (sawmill gravy in Southern United States cuisine) is the gravy typically used in biscuits and gravy and chicken fried steak. It is essentially a Béchamel sauce, with the roux being made of meat drippings and flour.
            		</p>
            	</div>
            </div>
            <div class="descDishDiv">
            	<img src="assets/css/img/gallery/menu5.jpg" class="img-rounded" alt="image">
            	<div class="descDish">
            		<h3>Biryani</h3> 
            		<p>
            			an Indian dish of meat, fish, or vegetables cooked with rice flavored especially with saffron or turmeric
            		</p>
            	</div>
            </div>
          </div>
            
       </div>

       <!--end of gallery div-->

	   <!--testimonial div start-->
       <div id="testimonial"  data-parallax="scroll" data-image-src="assets/css/img/cust-back.jpg">
           <h2>Some of our happy customers</h2>
           <div class="customer1 wow slideInUp">
                      <img class="cust-img" src="assets/css/img/customer4.jpg">
                      <div id="inner-cust">
                      <a href="https://www.zomato.com/users/karishma-chandra-39826155" target="_blank">Karishma Chandra</a><span>, Zomato</span>
                      <div id="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="cust-para "> <i class="fas fa-quote-left"></i> Good for some Mughlai food that is authentic and filling. I tried the kababs, and loved the taste and presentation. Prices are also quite decent. <i class="fas fa-quote-right"></i></p></div>
            </div>
            <div class="customer2 wow slideInUp">
                      <img class="cust-img" src="assets/css/img/customer5.jpg">
                      <div id="inner-cust">
                      <a href="https://www.zomato.com/users/the-sandman-33794697" target="_blank">The Sandman</a><span>, Zomato</span>
                      <div id="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star-half"></i>
                    </div>
                      <p class="cust-para "> <i class="fas fa-quote-left"></i> The galouti kebab roll. I had internally scoffed when the owner said its mouth melting. It really does melt in your mouth. Some kitchen magic makes the meat softer than butter like a loose pate of some kind. Excellent dish. <i class="fas fa-quote-right"></i></p></div>
            </div>
       </div>

       <!--end of testnimonial div-->

       <!--start of contact div-->
         <div id="contact">
            <div class="wow slideInLeft left-con">
                
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.3857294159898!2d77.0793973142556!3d28.467927982482994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d18de6f661855%3A0xd2615f3ed911c421!2sJanaab!5e0!3m2!1sen!2sin!4v1500181397151" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
              
            </div>
            <div class="right-con">
                <div id="inner-contact" class="wow slideInRight">
                    <a id="contact-logo" href="index.php"></a>
                    <p id="address"><b> Address:</b><br> 
                           Shop SF-51, 1st Floor,
                           DLF Galleria Market,<br> 
                           DLF Phase 4, Gurgaon</p>
                    <p ><b> Phone Numbers: </b><br>
                        +91 8505909430<br>
                        +91 9643193429</p>
                </div>       
                <div id="soc" >
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
            </div>
                  
           
         </div>
       
		<!-- footer -->

       <div id="footer">
         <p>&copy; Copyright 2017 JANAAB. All Rights Reserved</p>
         <p>Food shown are for illustration purpose only. Actual product may differ from the images shown in this website.</p>
         <!-- <hr> -->
       		Designed with 
       		<i class="fas fa-heart"></i> by 
       		<a class="Myname" href="mailto:mp1995singh@gmail.com?Subject=@Janaab%20Food"  target="_top">FYITS</a>
         <a id="top" class="wow bounceIn" href="#first"><i class="fas fa-chevron-up"></i></a>
       </div>
       
		<!-- loader -->
        <div class="loader">
          <div id="cooking">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
          </div>
        </div> 

       <!-- scripts -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</body>
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    
    <!-- <script type="text/javascript" src="jquery-3.2.1.min.js"></script> -->
    <script type="text/javascript" src="assets/js/jquery.waterwheelCarousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- bootstrap -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/animate.js"></script>
    <!-- animsition.js -->
    <script src="assets/plugins/animsition/dist/js/animsition.min.js"></script>
    <!--parallex.js-->
    <script src="assets/js/parallax.js-1.4.2/parallax.min.js"></script>

    
    <script type="text/javascript">
    	$(function() {
	      	$('.carousel').slick({
				  autoplay:true,
				  autoplaySpeed: 3000,
          arrows:true,
          dots:true,
				  slidesToShow: 1,
				  fade: true,
  				cssEase: 'linear',
          pauseOnHover:false,
          pauseOnFocus:false,
				  responsive: [
				    {
				      breakpoint: 768,
				      settings: {
				        arrows: false,
				        autoplay:true,
				  		  autoplaySpeed: 3000,
                dots:true,
				  		  fade: true,
				  	    cssEase: 'linear',
				        slidesToShow: 1,
                pauseOnHover:false,
                pauseOnFocus:false,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: false,
				        autoplay:true,
				  		  autoplaySpeed: 3000,
				  		  fade: true,
                dots:true,
				  	    cssEase: 'linear',
				        slidesToShow: 1,
                pauseOnHover:false,
                pauseOnFocus:false,
				      }
				    }
				  ]
	      	});
	      });
    	$(window).load(function() {
	      $(".loader").fadeOut("slow");
	      $("#intro").css("right","0px"); 
	    });
    </script>
</html>