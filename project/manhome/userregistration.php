<?php
include 'validate.js';
?>
<!DOCTYPE html>

<html lang="zxx">
   
   <head>
      <title>Mansion a services Category Flat Bootstrap Responsive Web Template |Service :: w3layouts</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Renovate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
      <link href="webs/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="webs/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <link href="webs/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
   </head>
   
   <body>
   
      <div class="header-outs">
         <div class="header-w3layouts">
            <div class="container-fluid">
               <div class="row headder-contact">
                  <div class="hedder-up col-lg-6 col-md-6 col-sm-6">
                     <h1><a class="navbar-brand" href="index.html">Mansion Care</a></h1>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 search-right">
                     <form  class="form-inline my-lg-0">
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
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        

                        <li class="nav-item">
                            <a href="gallery.html" class="nav-link">Contact</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="gallery.html" class="nav-link">About</a>
                        </li>
                        
                        
                      
                     </ul>
                  </div>
               </nav>
               <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-secondary">Register Now</h2>
            <!--<form action="data/registration.php" class="oh-autoval-form" method="post" onsubmit="return">-->
            <form action="data/registrations.php" id="registrations" name="registrations" method="post" id="registration" enctype="multipart/form-data" class="oh-autoval-form mt-5 mb-5" onsubmit="return">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fn" value="<?php if(isset($_SESSION['fn'])) { 
                        echo $_SESSION['fn'];
                        } ?>"   placeholder="Enter your Fullname" class="av-name form-control validate" data_type="name" av-message="Invalid Name">
                </div>
            
                <div class="form-group">
                    <label for="address">Last Name:</label>
                    <input type="text" name="hno" id="hno" value="<?php if(isset($_SESSION['ln'])) { 
                        echo $_SESSION['hno'];
                        } ?>" id="fn" placeholder="Enter your House Number" class=" form-control  validate"  data_type="name" av-message="Invalid House Number"> 

                </div> 
                <div class="form-group">
                    <label for="address">House Name:</label>
                    <input type="text" name="hname" value="<?php if(isset($_SESSION['hname'])) { 
                        echo $_SESSION['hname'];
                        } ?>"  id="hname" placeholder="Enter your House Name" class="av-name form-control validate" data_type="name"  av-message="Invalid House Name">

                </div>
                
                <div class="form-group">
                    <label for="place">Place:</label>
                    <input type="text" name="pla" value="<?php if(isset($_SESSION['pla'])) {echo $_SESSION['pla'];} ?>" id="pla" placeholder="Enter your Place" class="av-name form-control" av-message="Invalid Place">
                </div>
                <div class="form-group">
                    <label for="pincode">Pincode:</label>
                    <input type="text" name="pin"  id="pin" placeholder="Enter your Pincode" class="av-pincode form-control validate" data_type="name"  av-message="Invalid pincode">
                </div>
                <div class="form-group">
									<label class="form-group"><b>District:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
               <select  name="district" id="district" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT * FROM tb_district where Status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['Did'] . '>' . $row['District'] . '</option>';
            }
            ?>
              </select>
                <div class="form-group">
				    <label>State</label>
                    <select id="stat" class="form-control" name="stat">
                    <option value="select" >--Select--</option>
                    <option value="Kerala">Kerala</option>
                   <!-- <option value="America">America</option>
                    <option value="India">India</option>-->
                    
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php if(isset($_SESSION['email'])) { 
                        echo $_SESSION['email'];
                        } ?>" placeholder="example@email.com" class="av-email form-control validate"   av-message="Enter valid email address">
                </div>
                <!-- <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="un" id="un"  placeholder="Enter your Username" class="av-username form-control validate" av-message="Invalid Username(Contain a-z,A-Z,0-9,.and _ (3-32 chars))">
                </div> -->
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pwd"  id="pwd" placeholder="Enter your Password" class="av-password form-control validate" av-message="Invalid password(Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars.)">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mob"  id="mob" placeholder="Enter your Mobile Number" class="av-mobile form-control" av-message="Invalid mobile(10 numbers)">
                </div>
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" class="av-image form-control validate" name="fileupload" accept="image/*" size="70" id="fileupload" />
                </div>
                <div class="form-group">
										<label>Aadhar Number:</label><br>
										<input type="text" placeholder="Enter your Aadhar Number validate" value="<?php if(isset($_SESSION['aadhar'])) { 
                        echo $_SESSION['aadhar'];
                        } ?>" name="aadhar" id="aadhar" class="av-aadhaar form-control" av-message="Invalid adhar" required="">
								</div>
                <div class="form-group">
                                              <br><button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">submit</button>
                </div>
            </form>
          
        </div>
    </div>
</div>
               <!--//navigation section -->
               <div class="clearfix"> </div>
            </div>
         </div>
         <!--//headder-->
         <!-- banner -->
         
         <!--//banner -->
         <!-- short -->
         
      </div>
      <!-- //short-->
      <!--Services -->
      <table width="100%" border="20" cellpadding="20" cellspacing="20">
      

        
         
         
      <!--//service -->
      <!-- subscribe -->
      <section class="subscribe py-lg-4 py-md-3 py-sm-3 py-3" >
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 clr mb-sm-3 mb-3">Subscribe Us</h3>
               <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br>tempor incididunt ut labore et</p>
            </div>
            <div class="subscribe-footer ">
               <form action="#" method="post">
                  <div class="row subscribe-form ">
                     <div class="col-md-8 col-lg-8 col-sm-8 pr-sm-0 contact-forms">
                        <input type="email" class="form-control" placeholder="Your Email" required="">
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 click-subscribe pl-sm-0">
                        <button type="submit" class="btn click-me">Subscribe</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
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
                           <p>Lorem ipsum dolor sit amet, eiusmod tempor incididunt ut labore et</p>
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
                                 <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                 <a href="about.html" class="nav-link">About</a>
                              </li>
                              <li class="nav-item">
                                 <a href="service.html" class="nav-link">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a href="gallery.html" class="nav-link">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a href="contact.html" class="nav-link">Contact</a>
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
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                        <div class="footer-buttom">
                           <h6>eiusmod<br>Lorem</h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <div class="copy-agile-right text-center py-3">
         <h2 class="my-3"><a href="index.html">RENOVATE</a></h2>
         <p> 
            © 2018 Renovate. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
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
      <script src="validate.js"></script>
      <!-- //bootstrap working-->
   </body>
   
</html>


