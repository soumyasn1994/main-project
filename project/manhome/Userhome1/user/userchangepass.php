<!doctype html>
<?php
session_start();
include 'connect.php';
$id=$_SESSION['Log_id'];
if(!isset($_SESSION['Log_id']))
{
	
header('location:../../index.php');
}

	if(isset($_POST['submit']))
    {   

$c=md5($_POST['cupass']);
    $a=$_POST["npass"];
    $b=$_POST["cpass"];
    ($a);
    ($b);
    $sql="select * from tb_login where Log_id='$id'";
    $eql=mysqli_query($con,$sql);
    $fql=mysqli_fetch_array($eql);
    $pass=$fql['Password'];
	// function encryptIt($q){
    // $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    // $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    // return( $qEncoded );

//$encrypted = encryptIt($b);
if($pass==$c)
{
	if($a==$b)
	{
        $pass=md5($a);
	//$id=$_SESSION['Log_id'];
    $sql12="UPDATE `tb_login` SET `Password`='$pass' WHERE `Log_id`='$id'";	
	$result12=mysqli_query($con,$sql12);
	}
	else
	{
		echo("enter correct password");
	}
    }
    }
?>

<html>
<head>
<!-- <link rel="stylesheet" href="assets/css/loginstyle.css" />-->
<link rel="stylesheet" href="style/public/css/bootstrap.min.css"> 
<title>Mansion Care</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="js/modernizr.js"></script>
<script src='js/jquery.min.js'></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
          
<script async="async" src="https://www.google.com/adsense/search/ads.js"></script>

<!-- other head elements from your page -->
        
<!-- jQuery -->
<!-- FlexSlider -->
  <!-- DC Tabs CSS 
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
 <!-- jQuery Library (skip this step if already called on page ) 
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/jquery.min.js"></script> <!-- (do not call twice) -->
 <!-- DC Tabs JS -->
<!--<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/tabs/js/tsc_tabs.js"></script>
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="validation.js"></script>
<style>
.dropdown {
    position: relative;
    display: inline-block;
	color: white;
	margin-top:1.2%;
	
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ddd;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 50;
	color:red;
}

.dropdown:hover .dropdown-content {
	color:black;
    display: block;
}
#bgVideo{ 
    position: absolute;
    top: 0;
    left: 0px;
    border: 0;
	width:120%;
	
    z-index: -2;
    background-size: cover;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
	border-radius: 15px;
	box-shadow: 0 9px #999;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
} 
</style>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    margin: -10px -50px 0px -10px;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:green;
  color: white;
}
.right {
  background-color: #4AF50;
  color: white;
  padding-left:1190px
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="../../user_home.php">Home</a>
  
</div>
<div class="container">
	<section id="content">
		<form action="userchangepass.php" method="post" name="mform">
            <h1>Set Password</h1><br>
            <div>
				<input type="password" placeholder="Current Password" required="" id="password" name="cupass" />
			</div><br>
			<div>
				<input type="password" placeholder="New Password" required="" id="password" name="npass" />
			</div><br>
			<div>
				<input type="password" placeholder="Confirm Password" required="" id="password" name="cpass" />
			</div><br>
			<div>
				<input type="submit" value="Reset" name="submit" />
				<a href="../../mails/forgotpassword.php">Lost your password?</a>
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->

  
    <!-- <script src="js/login.js"></script>
	<div class="foot">
	<p
	style="color: #fff;
						font-size: 1em;
						font-weight: 70;
						font-family: 'Passion One', cursive;" 
						align="center";
						><marquee>all the rights belongs to @ anands </marquee></p>
</div> -->
<div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="../../user_home.php">MANSION</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
      </body>
</html>
