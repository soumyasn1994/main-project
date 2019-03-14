<?php
session_start();
include 'data/connect.php'; 
$id=$_SESSION['Log_id'];
$qrey ="SELECT Log_id  From tb_login WHERE role='user'";
$reco= mysqli_query($con,$qrey);
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

<th>Cancel</th>
<tr>
<?php
while ($rowm=mysqli_fetch_array($reco)){
	$uid=$rowm['Log_id'];
 $qry ="SELECT * From tb_regsuser WHERE Reg_id='$uid'";
// echo $qry;
	$records= mysqli_query($con,$qry);
	// while ($row=mysqli_fetch_assoc($records)){
	// 	print_r($row);
	// }
	// }

while($user=mysqli_fetch_assoc($records)){
	$did=$user['Did'];
	echo $did;
	$q="select * from tb_district where Did='$did'";
	//echo $q;
	$qs=mysqli_query($con,$q);
	$qf=mysqli_fetch_assoc($qs);
	$dis=$qf['District'];
echo "<tr>";
echo "<td>".$user['Full_Name']."</td>";
echo "<td>".$user['hname']."</td>";
echo "<td>".$user['hno']."</td>";
echo "<td>".$user['Place']."</td>";
echo "<td>".$qf['District']."</td>";
echo "<td>".$user['State']."</td>";
echo "<td>".$user['Pin']."</td>";
echo "<td>".$user['Email_id']."</td>";
echo "<td>".$user['Mobile']."</td>";


//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$user['Emp_id']."'>APPROVE</a> | <a href='delete.php?id=".$user['Emp_id']."'>DELETE</a></td>";
echo "<td><a href='data/deletes.php?id=".$user['Reg_id']."' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";


echo "</tr>";



}}

?>
</tr>
</tr>
</table>
</body>
</html>