<html>
<head>
<h2><a href="adminhome.php">Back to home</a></h2>
<title>Employee Details</title>
</head>
<body>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Name</th>
<th>House Name</th>
<th>House No</th>
<th>Place</th>
<th>District</th>
<th>Pincode</th>
<th>DOB</th>
<th>Email</th>
<th>Mobile</th>
<th>Category</th>
<th>Gender</th>
<th>Photo</th>
<th>Aadhar</th>

<?php
session_start();
if (!isset($_SESSION["Log_id"])){
	header('location:index.php');
 }
include 'data/connect.php'; 
$id=$_SESSION['Log_id'];
$sql="select * from tb_login where roleid='2'";
$rec=mysqli_query($con,$sql);
while($ro=mysqli_fetch_array($rec))
{
	$role=$ro['Log_id'];
 $qry ="SELECT * From tb_regsuser as r, tb_district as d, tb_login as l, tb_place as p, tb_category as c WHERE p.Pid=r.Pid and l.Status='1' and r.Log_id='$role' and l.roleid='2' and p.Did=d.Did and l.Log_id=r.Log_id and r.cat_id=c.cat_id";
//echo $qry;
	$records= mysqli_query($con,$qry);
?>
<!--  -->



<tr>
<?php
while($employee=mysqli_fetch_assoc($records)){
// $p=$employee['Place'];
// $q="select * from tb_place where Place='$p'";
// echo $q;
// $qs=mysqli_query($con,$q);
// $qr=mysqli_fetch_array($qs);
// $place=$qr['Place'];
echo "<tr>";
echo "<td>".$employee['Full_Name']."</td>";
echo "<td>".$employee['hname']."</td>";
echo "<td>".$employee['hno']."</td>";
echo "<td>".$employee['Place']."</td>";
echo "<td>".$employee['District']."</td>";
//echo "<td>".$employee['State']."</td>";
echo "<td>".$employee['Pin']."</td>";
echo "<td>".$employee['DOB']."</td>";
echo "<td>".$employee['Username']."</td>";
echo "<td>".$employee['Mobile']."</td>";
echo "<td>".$employee['cat_name']."</td>";
echo "<td>".$employee['Gender']."</td>";
echo '<td><img src="'.$employee['Photo'].'" height="150px" width="150px"></td>';
echo "<td>".$employee['Aadhar']."</td>";

//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$employee['Log_id']."'>APPROVE</a> | <a href='delete.php?id=".$employee['Log_id']."'>DELETE</a></td>";
//echo "<td><a href='data/deletes.php?id=".$employee['Log_id']."' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";


echo "</tr>";



}
}
?>
</tr>

</tr>
</table>
</body>
</html>


