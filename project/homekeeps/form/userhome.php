<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php 
   session_start();
   include '../data/connect.php';
   if (!isset($_SESSION["Log_id"])){
      header('location:../index.php');
        echo $_SESSION['Full_Name'];
   }
   //include '../data/connect.php';
  // $id=$_SESSION['Log_id'];
   ?>

   <html >
      <head>
      <script src="validation.js"></script>
         <title>Mansion Care a services Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
         <!--meta tags -->
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="keywords" content="Mansion Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
            SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
         <script>
            addEventListener("load", function () {
               setTimeout(hideURLbar, 0);
            }, false);
            
            function hideURLbar() {
               window.scrollTo(0, 1);
            }
         </script>
         <style>
               .avatar {
                  vertical-align: middle;
                  margin-left: 500px;
                  width: 70px;
                  height: 70px;
                  border-radius: 50%;
                }
               </style>
         <!--//meta tags ends here-->
         <!--booststrap-->
         <link href="../webs/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
         <!--//booststrap end-->
         <!-- font-awesome icons -->
         <link href="../webs/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
         <!-- //font-awesome icons -->
         <link href="../webs/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
         <!-- //pop-ups-->
         <link href="../webs/css/style.css" rel='stylesheet' type='text/css' media="all">
         <!--//stylesheets-->
         <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
         <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
      </head>
      <body>
         <div class="header-outs" id="header">
            <div class="header-w3layouts">
               <div class="container-fluid">
                  <div class="row headder-contact">
                     <div class="hedder-up col-lg-6 col-md-6 col-sm-6">
                        <h1><a class="navbar-brand" href="../userhome.html">Mansion Care</a></h1>
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
                           <li class="nav-item active">
                              <a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                              <a href="../webs/about.php" class="nav-link ">About</a>
                           </li>
                           <li class="nav-item">
                              <a href="../userprofile.php" class="nav-link ">Profile</a>
                           </li>
                           <li class="nav-item">
                              <a href="../webs/service.php" class="nav-link ">Service</a>
                           </li>
                           <li class="nav-item">
                              <a href="../emposearch.php" class="nav-link ">Service Search</a>
                           </li>
                           <li class="nav-item">
                              <a href="../webs/gallery.php" class="nav-link">Gallery</a>
                           </li>
                           
                           <!--<li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pages
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="webserror.html">Error</a>
                                 <a class="dropdown-item" href="webs/typography.html">Typography</a>
                              </div>
                           </li>-->
                           <li class="nav-item">
                              <a href="../webs/contact.php" class="nav-link">Contact</a>
                           </li>
                           <li class="nav-item">
                                 <a class="nav-link" href="../logout.php">LogOut</a>
                              </li>
                              
                              <?php 
$tid=$_SESSION['Log_id'];
$sql="SELECT * FROM tb_regsuser WHERE Log_id=$tid";
//echo $sql;
$result=mysqli_query($con,$sql);
$i=0;
$row=mysqli_fetch_array($result);
//$img=$row['Photo'];
	?>
	
	
   
	<li class="nav-item">
   <div class="dropdown">
   <!-- <img src="../<//?php echo $row['Photo']?>" class="avatar"/> -->
   <img src="../<?php echo $row['Photo']?>" class="avatar" /> 
                     </nav>
                  <!--//navigation section -->
                  <div class="clearfix"> </div>
               </div>
            </div>
            <!--banner -->
            <!-- Slideshow 4 -->
            <div class="slider">
               <div class="callbacks_container">
                  <ul class="rslides" id="slider4">
                     <li>
                        <div class="slider-img one-img">
                           <div class="container">
                              <div class="slider-info">
                                 <h4>Welcome To Mansion Care<br>We Offer <span>75%</span> Cleaning</h4>
                                 <div class="outs_more-buttn">
                                    <a href="../webs/bookings.php">Book Now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="slider-img two-img">
                           <div class="container">
                              <div class="slider-info ">
                                 <h4>Simple And Best<br>Get Off <span>75%</span> Cleaning </h4>
                                 <div class="outs_more-buttn">
                                    <a href="../webs/bookings.php">Book Now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="slider-img three-img">
                           <div class="container">
                              <div class="slider-info">
                                 <h4>Clean Your Home<br>Get Off <span>75%</span> Cleaning</h4>
                                 <div class="outs_more-buttn">
                                    <a href="../webs/bookings.php">Book Now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <!-- This is here just to demonstrate the callbacks -->
               <!-- <ul class="events">
                  <li>Example 4 callback events</li>
                  </ul>-->
            </div>
            <div class="clearfix"></div>
         </div>
         <!-- //banner -->
         <!-- About-one -->
         <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
               <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                  <h3 class="title mb-md-4 mb-sm-3 mb-3">What We Can</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br>tempor incididunt ut labore et</p>
               </div>
               <div class="row abt-colm pb-lg-4 pb-md-3 pb-3 text-center">
                  <div class="col-lg-4 col-md-4 ile-abt-info">
                     <div class="about-w3layouts-icons">
                        <span class="fas fa-gavel"></span>
                     </div>
                     <h4 class="my-md-3 my-2">Improve</h4>
                     <div class="info-sub-w3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 ile-abt-info">
                     <div class="about-w3layouts-icons">
                        <span class="fas fa-cogs"></span>
                     </div>
                     <h4 class="my-md-3 my-2">Repair</h4>
                     <div class="info-sub-w3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 ile-abt-info">
                     <div class="about-w3layouts-icons">
                        <span class="fab fa-accusoft"></span>
                     </div>
                     <h4 class="my-md-3 my-2">Maintain</h4>
                     <div class="info-sub-w3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                        </p>
                     </div>
                  </div>
               </div>
               <!-- //About-one -->
            </div>
         </section>
         <!--states -->
        
         <!--//states -->
         <!-- services -->
         <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
               <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                  <h3 class="title mb-md-4 mb-sm-3 mb-3">What We Provide</h3>
                 
               </div>
               <div class="row">
                  <div class="col-lg-7 col-md-7 ser-grid-wthree">
                     <div class="sub-ser-matter-agile">
                        <h4>Professional Services</h4>
                     </div >
                     <div class="ser-service-mid mb-3">
                        <h5>Good Maintain</h5>
                     </div>
                     
                     <div class="outs_more-buttn">
                        <a href="../webs/bookings.php">Book Now</a>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-5 ser-left-img">
                     <img src="webs/images/ss1.jpg" class="img-fluid" alt="">
                  </div>
               </div>
               <div class="row mt-lg-4 mt-md-4 mt-sm-4 mt-3">
                  <div class="col-lg-5 col-md-5 ser-left-img">
                     <img src="webs/images/ss2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-7 col-md-7 ser-grid-wthree">
                     <div class="sub-ser-matter-agile">
                        <h4>Quality Services</h4>
                     </div >
                     <div class="ser-service-mid mb-3">
                        <h5>Good Maintain</h5>
                     </div>
                     <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                        Lorem ipsum dolor sit amet         
                     </p> -->
                     <div class="outs_more-buttn">
                        <a href="">Book Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--//services -->
         <!-- Video -->
        
         <!--//Video -->
         <!-- Team-->
         <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="testimonials">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
               <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                  <h3 class="title mb-md-4 mb-sm-3 mb-3">Professional Team</h3>
                  
               </div>
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t1.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3">Diyana Deo </h4>
                                    <span> Team Leader</span>
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t2.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3">Sam Willson</h4>
                                    <span> Team Leader</span>
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t3.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3"> Lilly Kent</h4>
                                    <span> Team Leader</span>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t2.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3">Sam Willson</h4>
                                    <span> Team Leader</span>
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t3.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3">Lilly Kent</h4>
                                    <span> Team Leader</span>
                                   
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t1.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3">Diyana Deo</h4>
                                    <span> Team Leader</span>
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t3.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3">Lilly Kent</h4>
                                    <span> Team Leader</span>
                                   
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t1.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3">Diyana Deo</h4>
                                    <span> Team Leader</span>
                                   
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                              <div class="img-up-txt">
                                 <img src="webs/images/t2.jpg" alt="" class="img-fluid">
                                 <div class=" team-syas-text ">
                                    <h4 class="mt-3">Sam Willson</h4>
                                    <span> Team Leader</span>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </section>
        
         <div class="copy-agile-right text-center py-3">
            <h2 class="my-3"><a href="../userhome.html">Mansion Care</a></h2>
            <p> 
               © 2018 Mansion Care. All Rights Reserved 
            </p>
         </div>
</div>
</div>
</body>
</html>
