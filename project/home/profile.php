<?php
session_start();
if (!isset($_SESSION["Log_id"])){
    header('location:index.php');
}

include 'data/connect.php'; 
//getting id from url
//$id = $_GET['Log_id'];
$id = $_SESSION["Log_id"];
$qry ="SELECT * From tb_regsuser as t,tb_place as p,tb_login as l, tb_district as d,tb_category as c where  t.Log_id=l.Log_id and t.Log_id='$id' and t.Pid=p.Pid and p.Did=d.Did and t.cat_id=c.cat_id";
//echo "$qry";
$records= mysqli_query($con,$qry);

?>
<?php //include('components/top.php'); ?>
<?php //include('components/navs/emp.php'); ?>
<h2><a href="form/staff.php">Back to home</a></h2>


<?php
while($employee=mysqli_fetch_assoc($records)){
 echo '<center><img src="'.$employee['Photo'].'" height="100px" width="100px"><center>';
 ?>
 <html>
<head>

<title>My Profile</title>
</head>
<body><b><h1>MY PROFILE<b></h1>
<table widtr="100%" >
<tr>
<th>Name</th><th><?php echo $employee['Full_Name'] ?></th></tr>
<tr><th>House Name</th><th><?php echo $employee['hname'] ?></th></tr>
<tr><th>Place</th><th><?php echo $employee['Place'] ?></th></tr>
<tr><th>District</th><th><?php echo $employee['District'] ?></th></tr>
<tr><th>Pincode</th><th><?php echo $employee['Pin'] ?></th></tr>
<tr><th>DOB</th><th><?php echo $employee['DOB'] ?></th></tr>
<tr><th>Email</th><th><?php echo $employee['Username'] ?></th></tr>
<tr><th>Mobile</th><th><?php echo $employee['Mobile'] ?></th></tr>
<tr><th>Category</th><th><?php echo $employee['cat_name'] ?></th></tr>
<tr><th>Aadhar</th><th><?php echo $employee['Aadhar'] ?></th></tr>



<center><td>
<form action="empdetail.php" method="get">
<input type="hidden" name="id" value="<?php echo $employee['Log_id'] ?>">

<input type="submit" id="submit" name="submit" value="UPDATE">
</form></center>
<!-- //echo "<td><a onclick='SAVE'  href='aprov.php?id=".$employee['Emp_id']."'>APPROVE</a> | <a href='delete.php?id=".$employee['Emp_id']."'>DELETE</a></td>";
echo "<center><td><a name='' href='empdetail.php?id=".$employee['Log_id']."'>UPDATE</a> </td><center>";

echo "</tr>";
echo "</tr>"; -->
</td></center>
</tr>
<?php

}
?>
</tr>
</tr>
</table>
</body>
</html>


