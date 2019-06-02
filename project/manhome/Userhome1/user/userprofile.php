<?php
session_start();
if (!isset($_SESSION["Log_id"])){
	header('location:.././../index.php');
}
include 'connect.php'; 
$id=$_SESSION['Log_id'];
// $qrey ="SELECT Log_id  From tb_login WHERE roleid='3'";
// $reco= mysqli_query($con,$qrey);
// $rowm=mysqli_fetch_array($reco);
// 	$uid=$rowm['Log_id'];
 $qry ="SELECT * From tb_regsuser as r,tb_login as l, tb_district as d,tb_place as p WHERE r.Log_id='$id' and d.Did=p.Did and r.Pid=p.Pid and l.Log_id=r.Log_id";
 //echo $qry;
    $records= mysqli_query($con,$qry);
    $user=mysqli_fetch_assoc($records);
    $img=$user['Photo'];
?>
<!-- <//?php include('components/top.php'); ?>
<//?php include('components/navs/adminhead.php'); ?> -->

<html>
<head>
<title>User Details</title>
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
    margin: -15px -0px 0px -15px;
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
  background-color:#9e9e9e;
  color: white;
}
.right {
  background-color: #4AF50;
  color: white;
  padding-left:1490px
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="../../user_home.php">Home</a>

  <!-- <a style="background-color: #9e9e9e;" href="logout.php">Logout</a> -->

</div>


</body>
</html>
</head>

<body>

<center><b><h1>MY PROFILE<b></h1></center>
<center><table width="20%" >
<tr>
<img src='<?php echo "../../$img"; ?>' width="150px" height="150px">
<th>First Name</th><th><?php echo $user['first_name'] ?></th></tr>
<th>Last Name</th><th><?php echo $user['last_name'] ?></th></tr>
<tr><th>House Name</th><th><?php echo $user['hname'] ?></th></tr>
<tr><th>Place</th><th><?php echo $user['Place'] ?></th></tr>
<tr><th>District</th><th><?php echo $user['District'] ?></th></tr>
<tr><th>Pincode</th><th><?php echo $user['Pin'] ?></th></tr>
<tr><th>Mobile</th><th><?php echo $user['Mobile'] ?></th></tr>

</table>
<div>
<form action="userdetail.php" method="get">
<input type="hidden" name="id" value="<?php echo $user['Log_id'] ?>">

<center><input type="submit" id="submit" name="submit" value="UPDATE"></center>
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
</html>