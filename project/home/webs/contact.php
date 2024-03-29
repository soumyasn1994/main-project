<?php
session_start();
if (!isset($_SESSION["Log_id"])){
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title> Mansion Care Services </title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content=" Mansion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
   </head>
   <body>
      <div class="header-outs" >
         <div class="header-w3layouts">
            <div class="container-fluid">
               <div class="row headder-contact">
                  <div class="hedder-up col-lg-6 col-md-6 col-sm-6">
                     <h1><a class="navbar-brand" href="index.html"> Mansion</a></h1>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 search-right">
                     <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
               </div>
               <!--//navigation section -->
               <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                     <ul class="navbar-nav nav-pills nav-fill">
                        <li class="nav-item">
                           <a class="nav-link" href="../form/userhome.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a href="about.php" class="nav-link ">About</a>
                        </li>
                        <li class="nav-item">
                           <a href="service.php" class="nav-link ">Service</a>
                        </li>
                        <li class="nav-item">
                           <a href="gallery.php" class="nav-link">Gallery</a>
                        </li>
                       <!-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Pages
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="error.html">Error</a>
                              <a class="dropdown-item" href="typography.html">Typography</a>
                           </div>
                        </li>-->
                        <li class="nav-item active">
                           <a href="" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
										<a class="nav-link" href="../logout.php">Log Out </a>
									</li>
                     </ul>
                  </div>
               </nav>
               <!--//navigation section -->
               <div class="clearfix"> </div>
            </div>
         </div>
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         <!--//banner -->
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="../form/userhome.php">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>Contact</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
      </div>
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Get In Touch</h3>
              
            </div>
            <!--contact-form-->
            <div class="row contact-right mt-lg-5 mt-md-4 mt-3">
            <div class="col-lg-4 col-md-5 footer_grid_left text-center">
            <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-map-marker-alt"></span>
                  </div>
                  <p>Kottayam, Kerala</p>
               </div>
               <div class="col-lg-4 col-md-3 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-phone-volume"></span>
                  </div>
                  <p>+(91)9526323489<br>+(91)9947346631</p>
               </div>
               <div class="col-lg-4 col-md-4 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-at"></span>
                  </div>
                     <p><a href="mailto:soumyassjnair@gmail.com">soumyassjnair@gmail.com</a> 
                     <!-- <br><a href="mailto:infomansion@gmail.com">infomansion@gmail.com</a> -->
                  </p>
               </div>
            </div>
         </div>
      </section>
      <!--contact-map -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="agile-info-para">
               <form action="#" method="post">
                  <div class="row agile-wls-contact-mid">
                     <div class="col-md-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Name" required="">
                     </div>
                     <div class="col-md-6 form-group contact-forms">
                        <input type="email" class="form-control" placeholder="Email" required="">
                     </div>
                     <div class="col-md-6 form-group contact-forms">
                           <input type="email"  class="form-control" placeholder="Message" required="">
                        </div>
                  </div>
                  <div class="form-group contact-forms">
                     <textarea class="form-control" rows="3" placeholder="Message.." required=""></textarea>
                  </div>
                  <div class="text-left click-subscribe">
                     <button type="submit" class="btn contact-btn">Send</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--//contact-form-->
      <!-- subscribe -->
      
      <!--//subscribe -->
      <!--footer-->
      <footer class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
         <section>
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <div class="">
                  <div class="row footer-agile-grids ">
                     <div class="col-lg-3 col-md-6 col-sm-6 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">About Us</h4>
                        <div class="footer-info">
                           <!--<p>Lorem ipsum dolor sit amet, eiusmod tempor incididunt ut labore et</p>-->
                        </div>
                        <div class="icons mt-lg-4 mt-3 text-left">
                           <ul>
                              <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                              <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                              <li><a href="#"><span class="fas fa-rss"></span></a></li>
                              <li><a href="#"><span class="fab fa-vk"></span></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Nav Links</h4>
                        <nav class="border-line">
                           <ul class="nav flex-column">
                              <li class="nav-item active">
                                 <a class="nav-link" href="../form/userhome.php">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                 <a href="" class="nav-link">About</a>
                              </li>
                              <li class="nav-item">
                                 <a href="service.php" class="nav-link">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a href="gallery.php" class="nav-link">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a href="" class="nav-link">Contact</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Our Posts</h4>
                        <div class="footer-post d-flex mb-2">
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.html" >
                              <img src="images/f1.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1 mr-2">

      <!--//contact-map -->
      <!--contact-form -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="agile-info-para">
               <form action="#" method="post">
                  <div class="row agile-wls-contact-mid">
                     <div class="col-md-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Name" required="">
                                            <a href="about.html" >
                              <img src="images/f2.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1">
                              <a href="about.html ">
                              <img src="images/f3.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                        </div>
                        <div class="footer-post d-flex mb-2">
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.html">
                              <img src="images/f3.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.html">
                              <img src="images/f2.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1">
                              <a href="about.html">
                              <img src="images/f1.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                        </div>
                        <div class="footer-post d-flex">
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.html">
                              <img src="images/f2.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.html">
                              <img src="images/f3.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1">
                              <a href="about.html">
                              <img src="images/f1.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 wthree-left-right text-right">
                        <div class="bottom-para">
                          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>-->
                        </div>
                        <!--<div class="footer-buttom">
                           <h6>eiusmod<br>Lorem</h6>
                        </div>-->
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <div class="copy-agile-right text-center py-3">
         <h2 class="my-3"><a href="../userhome.html"> Mansion</a></h2>
         <p> 
            © 2018  Mansion. All Rights Reserved 
         </p>
      </div>
      <!--//footer-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working--> 
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>