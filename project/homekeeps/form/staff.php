<?php
session_start();
if (!isset($_SESSION["Log_id"])){
   header('location:../index.php');
     echo $_SESSION['Full_Name'];
}
?>
  <?php 
  // session_start();
   include '../data/connect.php';
  $id=$_SESSION['Log_id'];
  ?>
  <!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->

   <html >
      <head>
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
                  margin-left: 600px;
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
                              <a class="nav-link" href="staff.php">Home <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                              <a href="../jobaprov.php" class="nav-link ">Job Request</a>
                           </li>
                           <li class="nav-item">
                              <a href="../profile.php" class="nav-link ">Profile</a>
                           </li>
                           
                           
                           <!--<li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pages
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="../webserror.html">Error</a>
                                 <a class="dropdown-item" href="../webs/typography.html">Typography</a>
                              </div>
                           </li>-->
                           
                           <li class="nav-item">
                                 <a class="nav-link" href="../logout.php">Log Out </a>
                              </li>
                              
                              <?php 
$tid=$_SESSION['Log_id'];
$sql="SELECT * FROM tb_regsuser WHERE Log_id=$tid";
$result=mysqli_query($con,$sql);
$i=0;
$row=mysqli_fetch_array($result);
//echo $img=$row['Photo'];
	?>
	
	

	<li class="nav-item">
	<img src="../<?php echo $row['Photo']?>" class="avatar" /> 
                                     
                                  </li>
   
                        </ul>
                     </div>
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
                            
                                 <div class="outs_more-buttn">
                                    
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br>tempor incididunt ut labore et</p>
               </div>
               <div class="row">
                  <div class="col-lg-7 col-md-7 ser-grid-wthree">
                     <div class="sub-ser-matter-agile">
                        <h4>Professional Services</h4>
                     </div >
                     <div class="ser-service-mid mb-3">
                        <h5>Good Maintain</h5>
                     </div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                        Lorem ipsum dolor sit amet        
                     </p>
                     
                  </div>
                  <div class="col-lg-5 col-md-5 ser-left-img">
                     <img src="../webs/images/ss1.jpg" class="img-fluid" alt="">
                  </div>
               </div>
               <div class="row mt-lg-4 mt-md-4 mt-sm-4 mt-3">
                  
                  <div class="col-lg-7 col-md-7 ser-grid-wthree">
                     <div class="sub-ser-matter-agile">
                        <h4>Quality Services</h4>
                     </div >
                     <div class="ser-service-mid mb-3">
                        <h5>Good Maintain</h5>
                     </div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                        Lorem ipsum dolor sit amet         
                     </p>
                     
                  </div>
               </div>
            </div>
            <div class="copy-agile-right text-center py-3">
            <h2 class="my-3"><a href="../userhome.html">Mansion Care</a></h2>
            <p> 
               © 2019 Mansion Care. All Rights Reserved 
            </p>
         </div>
         </section>
         <!--//services -->

         <!-- Team-->
         
         
</div>
</div>
</body>
</html>
