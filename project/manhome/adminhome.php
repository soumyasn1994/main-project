<?php
session_start();
if (!isset($_SESSION['Log_id'])){
    header('location:index.php');

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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Mansion Care</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
			<li><a href="#tf-admin" class="page-scroll">Admin Previlages</a></li>
			<li><a href="#tf-about" class="page-scroll">About</a></li>
			<li><a href="#tf-services" class="page-scroll">Services</a>
			<li><a href="logout.php" class="page-scroll">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
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
					provides you with all the services your require for your<strong>HOME</strong>
				</p>
				<a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
			</div>
		</div>
	</div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-admin" class="text-center">
        <div class="overlay">
									<h4>Welcome Admin</h4>
							<h2>
								<strong>Admin Previlages</strong>
							</h2>
            <div class="container">
             <!-- <a href="viewempo.php"  class="btn btn-xlarge" /><i class="fa fa-check-square fa-5x" ></i><br>Staffs</a> -->
              <a href="leaveapprov.php"  class="btn btn-xlarge" /><i class="fa fa-chevron-up fa-5x" ></i><br>Leave<br>Approvals</a>
               <a href="eaprov.php"  class="btn btn-xlarge" /><i class="fa fa-clock-o fa-5x" ></i><br>Approvals</a>
			  <a href="viewuser.php"  class="btn btn-xlarge" /><i class="fa fa-chevron-up fa-5x" ></i><br>Users</a>
             <a href="addservice.php"  class="btn btn-xlarge" /><i class="fa fa-check-square fa-5x" ></i><br>Add Services</a>
              <a href="addcategory.php"  class="btn btn-xlarge" /><i class="fa fa-chevron-up fa-5x" ></i><br>Add Category</a>
                    </div>
                </div>	
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
							<h4>Welcome Admin</h4>
							<h2>
								<strong>Mansion Care</strong>
							</h2>
							<hr>
							<div class="clearfix"></div>
						</div>
						<p class="intro">Welcome to the control centre. You can control your total business from here. Please make sure that every pending request are approved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	    <!-- Services
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="overlay">
				<h2><strong>Services</strong></h2>
            <div class="container">
             <a href="cleanempo.php"  class="btn btn-xlarge" /><i class="fa fa-check-square fa-5x" ></i><br>Cleaning</a>
             <a href="painting.php"  class="btn btn-xlarge" /><i class="fa fa-chevron-up fa-5x" ></i><br>Painting</a>
             <a href="plumbing.php"  class="btn btn-xlarge" /><i class="fa fa-clock-o fa-5x" ></i><br>Plumbing</a>
			 <a href="maintainempo.php"  class="btn btn-xlarge" /><i class="fa fa-chevron-up fa-5x" ></i><br>Home<br>Maintainance</a>
             <a href="repair.php"  class="btn btn-xlarge" /><i class="fa fa-check-square fa-5x" ></i><br>Repairs</a>
                    </div>
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