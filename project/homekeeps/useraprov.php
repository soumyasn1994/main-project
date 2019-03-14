<?php
session_start();
if (!isset($_SESSION["Log_id"])){
	header('location:index.php');
}
	?>
<?php
include 'data/connect.php'; 
$id=$_SESSION['Log_id'];
 $qry ="SELECT * From tb_regsuser WHERE Status='0'";

	$records= mysqli_query($con,$qry);
?>
<?php include('components/top.php'); ?>
<?php include('components/navs/adminhead.php'); ?>
<html>
<head>
<title>User Details</title>
</head>
<body>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Name</th>
<th>House No</th>
<th>House Name</th>
<th>Place</th>
<th>District</th>
<th>State</th>
<th>Pincode</th>
<th>Email</th>
<th>Mobile</th>
<th>Aadhar</th>
<th>Cancel</th>
<tr>
<?php


while($user=mysqli_fetch_assoc($records)){
	$did=$user['Did'];
	$dist="select * from tb_district where Did='$did'";
	$record= mysqli_query($con,$dist);
	$dis=mysqli_fetch_assoc($record);

echo "<tr>";
echo "<td>".$user['Full_Name']."</td>";
echo "<td>".$user['hno']."</td>";
echo "<td>".$user['hname']."</td>";
echo "<td>".$user['Place']."</td>";
echo "<td>".$dis['District']."</td>";
echo "<td>".$user['State']."</td>";
echo "<td>".$user['Pin']."</td>";
echo "<td>".$user['Email_id']."</td>";
echo "<td>".$user['Mobile']."</td>";
echo "<td>".$user['Aadhar']."</td>";


//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$user['Reg_id']."'>APPROVE</a> | <a href='delete.php?id=".$user['Reg_id']."'>DELETE</a></td>";
echo "<td><a href='aprovu.php?id=".$user['Reg_id']."' onClick=\"return confirm('Are you sure you want to Approve?')\"  >APPROVE</a> |<a href='deletes.php?id=".$user['Reg_id']."' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";


echo "</tr>";



}
?>
</tr>
</tr>
</table>
</body>
</html>


