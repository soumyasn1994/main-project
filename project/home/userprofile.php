<?php
session_start();
if (!isset($_SESSION["Log_id"])){
	header('location:index.php');
}
include 'data/connect.php'; 
$id=$_SESSION['Log_id'];
// $qrey ="SELECT Log_id  From tb_login WHERE roleid='3'";
// $reco= mysqli_query($con,$qrey);
// $rowm=mysqli_fetch_array($reco);
// 	$uid=$rowm['Log_id'];
 $qry ="SELECT * From tb_regsuser as r,tb_login as l, tb_district as d,tb_place as p WHERE r.Log_id='$id' and d.Did=p.Did and r.Pid=p.Pid and l.Log_id=r.Log_id";
 //echo $qry;
    $records= mysqli_query($con,$qry);
    $user=mysqli_fetch_assoc($records);
?>
<!-- <//?php include('components/top.php'); ?>
<//?php include('components/navs/adminhead.php'); ?> -->

<html>
<head>
<title>User Details</title>
</head>
<body>

<body>
<h2><a href="form/userhome.php">Back to home</a></h2>
<center><b><h1>MY PROFILE<b></h1></center>
<center><table widtr="100%" >
<tr>
<img src="<?php echo $user['Photo'] ?>" width="150px" height="150px">
<th>Name</th><th><?php echo $user['Full_Name'] ?></th></tr>
<tr><th>House Name</th><th><?php echo $user['hname'] ?></th></tr>
<tr><th>Place</th><th><?php echo $user['Place'] ?></th></tr>
<tr><th>District</th><th><?php echo $user['District'] ?></th></tr>
<tr><th>Pincode</th><th><?php echo $user['Pin'] ?></th></tr>
<tr><th>Mobile</th><th><?php echo $user['Mobile'] ?></th></tr>
<tr><th>Aadhar</th><th><?php echo $user['Aadhar'] ?></th></tr>
<td>
<form action="userdetail.php" method="get">
<input type="hidden" name="id" value="<?php echo $user['Log_id'] ?>">

<input type="submit" id="submit" name="submit" value="UPDATE">
</form>
</td>
</tr>

</tr>
</table></center>

</body>
</html>