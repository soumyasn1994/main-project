<?php
session_start();
if (!isset($_SESSION["Log_id"])){
	header('location:index.php');
}
	?>
<?php
include 'data/connect.php'; 
$id=$_SESSION['Log_id'];
 $s="select * from tb_login where roleid='2' and status='0'";
$ss=mysqli_query($con,$s);

?>
 <?php //include('components/top.php'); ?>
<?php //include('components/navs/adminhead.php'); ?>
<html>
<head>
<title>Employee Details</title>
</head>
<body>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Name</th>
<th>House Name</th>
<th>Place</th>
<th>District</th>
<th>Pincode</th>
<th>Email</th>
<th>Mobile</th>
 <th>Aadhar Number</th>
 <th>Aadhar Card</th>
<th>Cancel</th>
<tr>
<?php

while($sr=mysqli_fetch_array($ss)){
	$role=$sr['Log_id'];
	 $qry ="SELECT * From tb_regsuser as r,tb_login as l, tb_district as d,tb_place as p  WHERE  r.Log_id='$role' and r.Log_id=l.Log_id and r.Pid=p.Pid and p.Did=d.Did ";
	//echo $qry;
		$records= mysqli_query($con,$qry);
	
while($user=mysqli_fetch_assoc($records)){
	// $did=$user['Did'];
	// $dist="select * from tb_district where Did='$did'";
	// $record= mysqli_query($con,$dist);
	// $dis=mysqli_fetch_assoc($record);

echo "<tr>";
echo "<td>".$user['Full_Name']."</td>";
echo "<td>".$user['hname']."</td>";
echo "<td>".$user['Place']."</td>";

echo "<td>".$user['District']."</td>";
//echo "<td>".$user['State']."</td>";
echo "<td>".$user['Pin']."</td>";
echo "<td>".$user['Username']."</td>";
echo "<td>".$user['Mobile']."</td>";
echo "<td>".$user['Aadhar']."</td>";?>
<td>
<a href="<?php echo $user['Aadhar_pic'];?>"target="_blank">
<img src="<?php echo $user['Aadhar_pic'];?>" width=50px height=50px></td>
<?php
//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$user['Log_id']."'>APPROVE</a> | <a href='delete.php?id=".$user['Log_id']."'>DELETE</a></td>";
echo "<td><a href='data/aprovu.php?id=".$user['Log_id']."' onClick=\"return confirm('Are you sure you want to Approve?')\"  >APPROVE</a></td>";


echo "</tr>";

}

}
?>
</tr>
<h2><a href="adminhome.php">Back to home</a></h2>
</tr>
</table>
</body>
</html>