<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
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
      <meta name="keywords" content=" Mansion Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
      <!--gallery-->
      <link rel="stylesheet" href="css/lightbox.css">
      <!--//gallery-->
      <!--gallery hover-->
      <link rel="stylesheet" type="text/css" href="css/set1.css" />
      <!--//gallery hover-->
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
                     <h1><a class="navbar-brand" href="../userhome.php"> Mansion Care</a></h1>
                  </div>
                 <!-- <div class="col-lg-6 col-md-6 col-sm-6 search-right">
                     <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
               </div>-->
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
                        <li class="nav-item active">
                           <a href="gallery.php" class="nav-link">Gallery</a>
                        </li>
                        <!--<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Pages
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="error.php">Error</a>
                              <a class="dropdown-item" href="typography.php">Typography</a>
                           </div>
                        </li>-->
                        <li class="nav-item">
                           <a href="contact.php" class="nav-link">Contact</a>
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
                  <li>Gallery</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
      
      <!--Gallery-->
      
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Our Gallery</h3>
               <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br>tempor incididunt ut labore et</p> -->
            </div>
            <div class="row grid gallery-info">
               <div class="col-lg-8 col-md-8 col-sm-8 gallery-grids">
                  <figure class="effect-apollo">
                     <img src="images/g1.jpg" alt="img15"/>
                     <figcaption>
                        <h6>Mansion <span>care</span></h6>
                         
                        <a href="images/g1.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids">
                  <figure class="effect-apollo">
                     <img src="images/g3.jpg" alt="img15"/>
                     <figcaption>
                        <h6>Mansion <span>care</span></h6>
                         
                        <a href="images/g3.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
            </div>
            <div class="row grid gallery-info">
               <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids">
                  <figure class="effect-apollo">
                     <img src="images/g2.jpg" alt="img15"/>
                     <figcaption>
                        <h6>Mansion <span>care</span></h6>
                         
                        <a href="images/g2.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-8 gallery-grids">
                  <figure class="effect-apollo">
                     <img src="images/g4.jpg" alt="img15"/>
                     <figcaption>
                        <h6>Mansion <span>care</span></h6>
                         
                        <a href="images/g4.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
            </div>
            <div class="row grid gallery-info">
               <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids">
                  <figure class="effect-apollo">
                     <img src="images/g5.jpg" alt="img15"/>
                     <figcaption>
                        <h6>Mansion <span>care</span></h6>
                         
                        <a href="images/g5.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids">
                  <figure class="effect-apollo">
                     <img src="images/g3.jpg" alt="img15"/>
                     <figcaption>
                        <h6>Mansion <span>care</span></h6>
                        <!--   -->
                        <a href="images/g3.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids">
                  <figure class="effect-apollo">
                     <img src="images/g2.jpg" alt="img15"/>
                     <figcaption>
                        <h6>Mansion <span>care</span></h6>
                        <!--   -->
                        <a href="images/g2.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
            </div>
         </div>
      </section>
      
      <!--//Gallery-->	  
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
                           <!-- <p>Lorem ipsum dolor sit amet, eiusmod tempor incididunt ut labore et</p> -->
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
                                 <a href="about.php" class="nav-link">About</a>
                              </li>
                              <li class="nav-item">
                                 <a href="service.php" class="nav-link">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a href="gallery.php" class="nav-link">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a href="contact.php" class="nav-link">Contact</a>
                              </li>
                              <li class="nav-item">
                                    <a href="../logout.php" class="nav-link">Log Out</a>
                                 </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Our Posts</h4>
                        <div class="footer-post d-flex mb-2">
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.php" >
                              <img src="images/f1.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.php" >
                              <img src="images/f2.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1">
                              <a href="about.php">
                              <img src="images/f3.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                        </div>
                        <div class="footer-post d-flex mb-2">
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.php">
                              <img src="images/f3.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.php">
                              <img src="images/f2.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1">
                              <a href="about.php">
                              <img src="images/f1.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                        </div>
                        <div class="footer-post d-flex">
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.php">
                              <img src="images/f2.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1 mr-2">
                              <a href="about.php">
                              <img src="images/f3.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                           <div class="agileinfo_footer_grid1">
                              <a href="about.php">
                              <img src="images/f1.jpg" alt=" " class="img-fluid">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 wthree-left-right text-right">
                        <div class="bottom-para">
                           <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p> -->
                        </div>
                        <div class="footer-buttom">
                           <!-- <h6>eiusmod<br>Lorem</h6> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <div class="copy-agile-right text-center py-3">
         <h2 class="my-3"><a href="../userhome.php"> Mansion</a></h2>
         <p> 
            © 2018  MansionCare. All Rights Reserved </a>
         </p>
      </div>
      <!--//footer-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- gallery -->
      <script src="js/lightbox-plus-jquery.min.js"></script>
      <!-- //gallery -->
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