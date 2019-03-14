<?php
session_start();
include 'data/connect.php'; 
//getting id from url
//$id = $_GET['Log_id'];
$id = $_SESSION["Log_id"];
$qry ="SELECT * From tb_regemployee WHERE Emp_id='$id'";
//echo "$qry";
$records= mysqli_query($con,$qry);

?>
<?php include('components/top.php'); ?>
<?php include('components/navs/emp.php'); ?>

<html>
<head>
<title>Employee Details</title>
</head>
<body><b><h1>MY PROFILE<b></h1>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Name</th>
<th>House Name</th>
<th>House No</th>
<th>Place</th>
<th>District</th>
<th>State</th>
<th>Pincode</th>
<th>DOB</th>
<th>Email</th>
<th>Mobile</th>
<th>Category</th>
<th>Gender</th>
<th>Photo</th>
<th>Aadhar</th>
<th>Action</th>

<tr>
<?php
while($employee=mysqli_fetch_assoc($records)){
echo "<tr>";
echo "<td>".$employee['Full_Name']."</td>";
echo "<td>".$employee['ehname']."</td>";
echo "<td>".$employee['ehno']."</td>";
echo "<td>".$employee['Place']."</td>";
echo "<td>".$employee['edist']."</td>";
echo "<td>".$employee['estat']."</td>";
echo "<td>".$employee['Pincode']."</td>";
echo "<td>".$employee['DOB']."</td>";
echo "<td>".$employee['Email_id']."</td>";
echo "<td>".$employee['Mobile']."</td>";
echo "<td>".$employee['Category']."</td>";
echo "<td>".$employee['Gender']."</td>";
echo "<td>".$employee['Photo']."</td>";
echo "<td>".$employee['Aadhar']."</td>";

//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$employee['Emp_id']."'>APPROVE</a> | <a href='delete.php?id=".$employee['Emp_id']."'>DELETE</a></td>";
echo "<td><a name='' href='data/edit.php?id=".$employee['Emp_id']."'>Update</a> | <a href='deletes.php?id=".$employee['Emp_id']."' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";


echo "</tr>";



}
?>
</tr>
</tr>
</table>
</body>
</html>


