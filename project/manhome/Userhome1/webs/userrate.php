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


</body>
</html>
<!-- <?php
  //if(isset($_POST['sub']))

  //{
  ?> -->
  <!-- &nbsp;&nbsp;&nbsp;&nbsp; -->
  <div>
<form name="rate" action="userrate.php" method="post">
<h2 style="color:red;">RATE YOUR FAVORATE EMPLOYEE</h2><br/> 
<textarea placeholder="Enter your comments" name="msg" id="msg" value="" style="border-radius:5px; margin-left:70%; height:70%;"></textarea><br/><br>
<select name="rate" class="form-control" style="margin-left:70%; border-radius:5px;"><br>
							<option style="color:red;" value=5>excellent</option>
							<option style="color:red;" value=4>very good</option>
							<option style="color:red;" value=3>good</option>
							<option style="color:red;" value=2>fair</option>						
							<option style="color:red;" value=1[[]]>poor</option>
                </select></br><br>
                <!-- <input class="form-control" type="hidden" name="sid" value="<//?php echo $row['Log_id'] ?>"/>  -->
						<input type="hidden" value="<?php echo $a?>" name="id" >
  <input type='submit' value='Send' name="sub" style="border-radius:5px; margin-left:70%;">
  </form>
</div>
<?php
  //}
  ?>
   
                </div>
            </div>
	</div>
	
	
	
	<!--  <td><input type="button" name="delete" value="Delete"></td> -->
	
	
	
	
	
	
	<?php
		 //}
		 ?>
    </div>
</div>
<?php
session_start();
include '../user/connect.php';
// if(!(isset($_SESSION['username'])))
// {
// header('location:index.php');

// }
  // if(isset($_POST['submit']))
  // {

  // }

//echo $a;
$m=$_SESSION['Log_id'];
//echo $m;
if(isset($_POST['submit']))
{
  $a=$_POST['sid'];
}
if(isset($_POST['sub']))
    {   
      //$a=$_POST['sid'];
$id=$_POST['id'];
$msg=$_POST["msg"];
$rate=$_POST["rate"];
 $sql="INSERT INTO `tb_rating`(`msg`, `rate`, `Log_id`, `eid`) VALUES ('$msg', '$rate', '$m','$id')";
$result=mysqli_query($con,$sql);
if($result)
   {
      echo "<script>window.onload=function(){alert('rating successfully');window.location='userrating.php';}</script>";
   }
   else{
      echo "<script>window.onload=function(){alert('rating failed');window.location='userrating.php';}</script>";
   }
}
?>
<!-- 
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
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
  <!-- DC Tabs CSS -->
<!-- <link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
 <!-- jQuery Library (skip this step if already called on page ) 
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/jquery.min.js"></script> <!-- (do not call twice) -->
 <!-- DC Tabs JS -->
<!--<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/tabs/js/tsc_tabs.js"></script>-
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
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
</head>
<body>

<div>
<form name="rate" action="#" method="post">
<h2 style="color:red;">RATE YOUR FAVORATE EMPLOYEE</h2><br/>
<input type="textarea" placeholder="Enter your comments" name="msg" id="msg" value="" style="border-radius:5px; margin-left:10%; height:10%;"><br/><br>
<select name="rate" class="form-control" style="margin-left:10%; border-radius:5px;"><br>
							<option style="color:red;" value=5>excellent</option>
							<option style="color:red;" value=4>very good</option>
							<option style="color:red;" value=3>good</option>
							<option style="color:red;" value=2>fair</option>						
							<option style="color:red;" value=1>poor</option>
				        </select></br><br>
						<input type="hidden" value="<//?php echo $a?>" name="id" >
  <input type='submit' value='Send' name="sub" style="border-radius:5px; margin-left:10%;">
  </form>
</div>
<div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="user_home.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
</body>
</html> -->