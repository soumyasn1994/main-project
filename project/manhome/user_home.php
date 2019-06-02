<?php
session_start();
if (!isset($_SESSION["Log_id"])){
    header('location:index.php');
}

include 'data/connect.php';
$tid=$_SESSION['Log_id'];
$sql="SELECT * FROM tb_regsuser WHERE Log_id=$tid";
//echo $sql;
$result=mysqli_query($con,$sql);
$i=0;
$row=mysqli_fetch_array($result);
include 'mail.php';
   //include 'data/connect.php';
   if (isset($_POST['submit'])) {
      $n = $_POST['username'];
      $e = $_POST['email'];
      $m = $_POST['msg'];
      $email="soumyasnair@mca.ajce.in";
      $message ="<main>
 <h1>You have a  Message</h1><br>
 <p>You have a  Message from $e
 <br>
  Message Details:<br>
                Name:  $n <br>
               Message: $m <br>
               
 </p>
</main>";
sendMail($email,$email,"YOU HAVE A MESSAGE", $message);
header('location:user_home.php');
   }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mansion Care</title>
   
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>
	<style type="text/css">
        /* Blue Flat Button
==================================================*/
.btn-xlarge{
  position: relative;
  vertical-align: center;
  margin: 30px;
  /*width: 100%;*/
  height: 100x;
  padding: 48px 48px;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #62b1d0;
  border: 0;
  border-bottom: 3px solid #9FE8EF;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -3px #9FE8EF;
  box-shadow: inset 0 -3px #9FE8EF;
}
.btn-xlarge:active {
  top: 2px;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.avatar {
                  vertical-align: middle;
                  margin-left: 0px;
                  width: 70px;
                  height: 70px;
                  border-radius: 50%;
                }
.btn-xlarge:hover {
  background: #45E1E8;
}

    </style>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
	<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="user_home.php">Mansion Care</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
						<li><a href="user_home.php" class="page-scroll">Home</a></li>
						<li><a href="#tf-about" class="page-scroll">About</a></li>
                        <li><a href="#tf-services" class="page-scroll">Services</a></li>
                        <li><a href="Userhome1/user/userchangepass.php">ChangePassword</a></li>
						<li><a href="#tf-contact" class="page-scroll">Contact</a></li>
                        <li><a href="Userhome1/webs/usersersearch.php">Search</a></li>
                        <li><a href="userrating.php">Employee Rating</a></li>
                        <li><a href="Userhome1/user/userprofile.php">My Profile</a></li>
                        <li><a href="Userhome1/logout.php">Logout</a></li>
                        <li>
  
   <!-- <img src="../<//?php echo $row['Photo']?>" class="avatar"/> -->
   <img src="<?php echo $row['Photo']?>" class="avatar" /> 
   <br><label style="color:beige; margin-left:30%">Hai...<br><?php echo $row['first_name']." ".$row['last_name'] ?></label>

                  <!--//navigation section -->
                  <!-- <div class="clearfix"> </div>
               </div> -->
               <!-- <//?php echo $row['first_name']." ".$row['last_name'] ?> -->
</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

    <!-- Home Page
    ==========================================-->
	<div id="tf-home" class="text-center">
		<div class="overlay">
			<div class="content">
				<h1>
					Welcome To <strong><span class="color">Mansion Care</span></strong>
				</h1>
				<p class="lead">
					Help us to help you.<strong>Mansion Care</strong>
					provides you with all the services your require for your<strong> HOME</strong>
				</p>
				<a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
			</div>
		</div>
	</div>
    <!-- About Us Page
    ==========================================-->
	<div id="tf-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="img/02.jpg" class="img-responsive">
				</div>
				<div class="col-md-6">
					<div class="about-text">
						<div class="section-title">
							<h4>About us</h4>
							<h2>
								<strong>Mansion Care</strong>
							</h2>
							<hr>
							<div class="clearfix"></div>
						</div>
						<p class="intro">We provide you with the best home care services at affordable rates at the date and time of your choice. Select among a wide range of customer rated service providers and make your house hold chores easier and efficient. Help us to help you better.</p>
						<ul class="about-list">
							<li><span class="fa fa-dot-circle-o"></span> <strong>Services Offered</strong>
								- <em>Floor Cleaning</em>
								- <em>Home Maintenance</em>
								- <em>Painting</em>
								- <em>House Cleaning</em>
								- <em>Washing</em>
								- <em>Renovation</em>
								</li>					
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Services Page
    ==========================================-->
	<form method="get" action="#">
	
    <div id="tf-services" class="text-center">
        <div class="overlay">
            <div class="container">
             <button href="#"  class="btn btn-xlarge" /><i class="fa fa-check-square fa-5x" ></i><br>Apartment<br>Cleaning</button>
             <button href="#"  class="btn btn-xlarge" /><i class="fa fa-chevron-up fa-5x" ></i><br>Furniture<br>Rearrangement</button>
             <button href="#"  class="btn btn-xlarge" /><i class="fa fa-chevron-up fa-5x" ></i><br>Carpentory<br>Works</button>
             <button href="#"  class="btn btn-xlarge" /><i class="fa fa-clock-o fa-5x" ></i><br>Machine<br>Washing</button>
			 <button href="#"  class="btn btn-xlarge" /><i class="fa fa-check-square fa-5x" ></i><br>Room<br>Cleaning</button>
             <button href="#"  class="btn btn-xlarge" /><i class="fa fa-chevron-up fa-5x" ></i><br>Cleaning</button>
             <button href="#"  class="btn btn-xlarge" /><i class="fa fa-clock-o fa-5x" ></i><br>Floor<br>Cleaning</button>
            </div>
        </div>	
    </div>
	</form>
    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>            
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2019. Mansion Care</p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>