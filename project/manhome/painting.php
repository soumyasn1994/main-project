<h2><a href="adminhome.php">Back to home</a></h2>
<?php

include 'data/connect.php'; 
 $employee ="SELECT * From tb_regsuser as r join tb_empserv  as e on r.Log_id=e.Log_id JOIN tb_place ON r.Pid = tb_place.Pid 
 JOIN tb_district ON tb_district.Did = tb_place.Did JOIN tb_category ON  tb_category.cat_id=e.cat_id where tb_category.cat_id='2'";

	$records= mysqli_query($con,$employee);
?>

<?php// include('components/top.php'); ?>
<?php// include('components/navs/adminhead.php'); ?>

<html>
<head>
<title>Employee Details</title>
</head>
<body>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
	<th></th>
<th>Full Name</th>
<th>Place</th>
<th>District</th>
<th>Mobile</th>
<th>Category</th>
<th>Gender</th>

<tr>
<?php
while($employee=mysqli_fetch_assoc($records)){
echo "<tr>";
?>
 <td><?php echo '<center><img src="'.$employee['Photo'].'" height="20%" width="20%"><center>';?></td>

<?php
echo "<td>".$employee['first_name']."".$employee['last_name']."</td>";
echo "<td>".$employee['Place']."</td>";
echo "<td>".$employee['District']."</td>";
echo "<td>".$employee['Mobile']."</td>";
echo "<td>".$employee['cat_name']."</td>";
echo "<td>".$employee['Gender']."</td>";
//echo "<td>".$employee['Photo']."</td>";

//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$employee['Emp_id']."'>APPROVE</a> | <a href='delete.php?id=".$employee['Emp_id']."'>DELETE</a></td>";
//echo "<td><a href='data/deletes.php?id=".$employee['Emp_id']."' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";


echo "</tr>";



}
?>
</tr>
</tr>
</table>
</body>
</html>


