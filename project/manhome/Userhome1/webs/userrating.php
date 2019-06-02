<?php
include '../user/connect.php';
// if(!(isset($_SESSION['username'])))
// {
// header('location:index.php');
// }
$sql = "select * from tb_regsuser as r join tb_empserv as e on r.Log_id=e.Log_id join tb_login as l on l.Log_id=r.Log_id left join tb_place on r.Pid = tb_place.Pid left join tb_district on tb_place.Did = tb_district.Did left join tb_category on tb_category.cat_id = e.cat_id where l.roleid='2' and l.status='1'";
$result = mysqli_query($con, $sql);

// $searchResult2 = [];
// while ($row = mysqli_fetch_assoc($exemko)) {
// $sql="SELECT * from tb_regsuser ";
// 		$result=mysqli_query($con,$sql);
?>
<!DOCTYPE HTML>
<html>
<head>
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
    <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
  <a class="active" href="../../user_home.php">Home</a><br>
  
</div>
<br>

</body>
</html>
<div class="container">
    <div class="row">
    <?php
while($row=mysqli_fetch_array($result))
		 {
             //echo $row['Log_id'];
			 ?>
	
	<div class="col-md-3"> 
            <div class="card">
                <div class="card-body">
                <form name="myform" action="userrate.php" method="post">
	<img src="../../<?php echo $row['Photo']?>" style="width:120px; height:auto; margin-left:10%;" class="p-3"><br>
	
	<input class="form-control" type="text" name="Name" value="<?php echo $row['first_name']." ". $row['last_name']?>"><br>
	
	<input class="form-control" type="text" name="Place" value="<?php echo $row['Place']?>"><br>
	
	<input class="form-control" type="text" name="District" value="<?php echo $row['District']?>"><br>
	
	<input class="form-control" type="text" name="Category" value="<?php echo $row['cat_name']?>">
	<input class="form-control" type="hidden" name="sid" value="<?php echo $row['Log_id'] ?>"/> 
	 <br>
     <!-- <input class="form-control" type="hidden" name="sid" value="<?php echo $row['Log_id'] ?>"/>  -->
  <input class="btn btn-primary" type="submit" name="submit"  value="Rate " onclick="document.getElementById('rate').style.display = 'block'">
  &nbsp;&nbsp;&nbsp;&nbsp;
 
  &nbsp;&nbsp;&nbsp;&nbsp;


    </form> 
    <br/>
	<form name="myform1" action="userreview.php" method="post" class="d-inline">
	<input class="form-control" type="hidden" name="sid" value="<?php echo $row['Log_id'] ?>"/> 
	<input class="btn btn-info" type="submit" name="submit1"  value="Review ">
	</form>
                </div>
            </div>
	</div>
	
	
	
	<!--  <td><input type="button" name="delete" value="Delete"></td> -->
	
	
	
	
	
	
	<?php
		}
		 ?>
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