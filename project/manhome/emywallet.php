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
<!-- <!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<title>Universal Cinemas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/jquery.min.js"></script> <!-- (do not call twice) 
 <!-- DC Tabs JS -->
<!--<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/tabs/js/tsc_tabs.js"></script>
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="validation.js"></script> -->
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
  <a class="active" href="staff.php">Home</a>
  
</div>



<div style="width:35%; float:right; position:absolute;margin-left:52%;margin-top:6%;z-index:100;">
<img src="images1/b1.jpg" alt="Icon" style="width:90%;height:50%;">
</div>
</body>
</html>
<?php 
$sql="select * from wallet,tb_login where wallet.Log_id=$lid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result)
	?>
	<form action="#" method="post" enctype="multipart/form-data" name="form2" id="form2">
			<div style="width:35%; height:150%; margin-top:0%;  z-index:100; margin-left:10%;">
      
			<h2 style="color:pink;margin-left:90%; margin-top:4%;">WALLET</h2><br />								
			
			<span style="color:pink;"><b>Bank Name</b></span><span style="color:red;"></span>:<input type="text" name="bname" value="<?php echo $row['bank_name']?>"   style="z-index:50px; width:120%; height:50px; background-color: white; color:#F59024;" readonly >
			<span style="color:pink;"><b>cvv</b></span><span style="color:red;">*</span>:<input type="text" name="cvv"  value="<?php echo $row['cvv']?>"  style="z-index:50px; width:120%; height:50px;  color:red; background-color: white; color:#F59024;" readonly>
		<span style="color:pink;"><b>Card no</b></span><span style="color:red;">*</span>:<input type="text" name="cardno" value="<?php echo $row['w_acc_no']?>"   style="z-index:50px; width:120%; height:50px;  color:red; background-color: white; color:#F59024;" readonly>
			<span style="color:pink;">Balance</span><span style="color:red;">*</span>:<input type="text" name="psw" value="<?php echo $row['balance']?>"  style="z-index:50px; width:120%; height:50px;  color:red; background-color: white; color:#F59024;" readonly >

<div style="margin-top:2%; margin-left:10%">
<form action="#" method="post" enctype="multipart/form-data" name="form1" id="form1">
<span style="color:pink;"><b>udpate balance</b></span><span style="color:red;"></span>:</br><input type="text" name="bal" style="z-index:50px; width:47%; height:50px; background-color: white; color:#F59024;" >
<table style="width:-5%; margin-left:15%;	28%;margin-top:1%;"><tr><td><button type="submit"name="submit3" style="background: rgb(28, 184, 65);;">Update</button></td></tr></table>	
</div>
</div>
<div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="user_home.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
</body>
</html>