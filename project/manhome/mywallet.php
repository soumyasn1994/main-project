<!DOCTYPE html>
<?php
session_start();
include 'data/connect.php';
//include 'headere.php';
if(!(isset($_SESSION['Log_id'])))
{
header('location:index.php');
}
$lid=$_SESSION['Log_id'];
?>
<?php
if(isset($_POST['submit3']))
{
$lid=$_SESSION['Log_id'];
$amount=$_POST['bal'];
$sql4="SELECT * FROM `wallet` WHERE `Log_id`='$lid'";
$result4=mysqli_query($con,$sql4);
$row4=mysqli_fetch_array($result4);
$r1=$row4['balance'];
$ttl=$r1+$amount;
$sql5="UPDATE `wallet` SET `balance`='$ttl' WHERE `Log_id`='$lid'";
$result5=mysqli_query($con,$sql5);
header("location:mywallet.php");
}
?>
<html lang="en">
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mansion Care</title>

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72"
	href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114"
	href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css"
	href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<link
	href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400'
	rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/modernizr.custom.js"></script>

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
				<a class="navbar-brand" href="index.php">Mansion Care</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
						<li><a href="staff.php" class="page-scroll">Home</a></li>
						<li><a href="#tf-about" class="page-scroll">About</a></li>
						<li><a href="#tf-services" class="page-scroll">Services</a></li>
						<li><a href="#tf-contact" class="page-scroll">Contact</a></li>
						<li><a href="mywallet.php">My Wallet</a></li>
						<li><a href="wal.php">Add Account</a></li>
						<li><a href="userrating.php">Employee Rating</a></li>
						<li><a href="../Userhome1/user/userprofile.php">My Profile</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Home Page
    ==========================================-->
	<?php 
$sql="select * from wallet,tb_login where wallet.Log_id=$lid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result)
	?>
	<div id="tf-home" class="text-center">
		<div class="overlay">
							<div class="container">
			<div class="row">
					<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Wallet</h3>
					</div>
				<div class="panel-body">
				<form action="#" method="post" enctype="multipart/form-data" name="form2" id="form2">
				<div class="form-group" >
                    <label for="fname">Bank Name:</label>
                    <input type="text" name="bname"  id="bname" class="form-control validate" value="<?php echo $row['bank_name']?>" onchange="fun()" readonly>
                </div>
				<div class="form-group" >
                    <label for="fname">CVV</label>
                    <input type="text" name="cvv"  id="cvv" class="form-control validate" value="<?php echo $row['cvv']?>" onchange="fun()" readonly>
                </div>
				<div class="form-group" >
                    <label for="fname">Card No</label>
                    <input type="text" name="cardno"  id="cardno" class="form-control validate" value="<?php echo $row['w_acc_no']?>" onchange="fun()" readonly>
                </div>
				<div class="form-group" >
                    <label for="fname">Balance</label>
                    <input type="text" name="psw"  id="psw" class="form-control validate" value="<?php echo $row['balance']?>" onchange="fun()" readonly>
                </div>
			</form>
			<form action="#" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<div class="form-group" >
                    <label for="fname">Update Balance:</label>
                    <input type="text" name="bal"  id="bal" class="form-control validate" value="" onchange="fun()">
            </div>
				<div class="form-group">
                    <br><button type="submit" name="submit" id="submit" value="submit3" class="btn btn-default">submit</button>
                </div>	
</div>
</div>
			</div>
		</div>
	</div>
	<br>
	</br>
	<br>
	</br>
	<br>
	</br>
	<br>
	</br>
	<nav id="footer">
		<div class="container">
			<div class="pull-left fnav">
				<p>
					ALL RIGHTS RESERVED. COPYRIGHT © 2015. 
				</p>
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
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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