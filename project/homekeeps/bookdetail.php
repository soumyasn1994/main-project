<?php

include 'data/connect.php'; 
 //$qry ="SELECT * From tb_booking WHERE status=0";

	//$records= mysqli_query($con,$qry);
	$sql="SELECT * From tb_service";
	$rec=mysqli_query($con,$sql);
	$recs=mysqli_fetch_assoc($rec);
	$data=$recs['service_id'];
	$qry ="SELECT * From tb_booking WHERE service_id='$data' and status=0";
	//echo $qry;

	$records= mysqli_query($con,$qry);
    
	if($records){
		
			//$fn = $row['firstname'];
			//$surname = $row['surname'];
			//$FBID = $row['FBID'];
			//$IMGNU = $row['IMGNU'];

	//$sql="SELECT service_name From tb_services WHERE service_id='$sid'  ";
	//$record= mysqli_query($con,$qry);
?>
<?php include('components/top.php'); ?>
<?php include('components/navs/emp.php'); ?>

<html>
<head>

			<title>Booking Details</title>
		
		<t1><b><center>Booking Details</center></b></t1>
</head>
<body>

<center><table width="50%" border="1" cellpadding="1" cellspacing="1"></center>
	
<tbody>
<tr>
<th>Service Name</th>
<th>Location</th>
<th>Date</th>
<!--<th>Place</th>
<th>District</th>
<th>State</th>
<th>Pincode</th>
<th>DOB</th>
<th>Email</th>
<th>Mobile</th>
<th>Category</th>
<th>Gender</th>
<th>Photo</th>
<th>Aadhar</th>-->
<th>Cancel</th>
<tr>
<?php
while($result=mysqli_fetch_assoc($records)){
	?>
<tr>
	<td>
		  <?php 
				  $r=$result['service_id'];
				  $sql="SELECT service_name From tb_service WHERE service_id='$r'";
				  //echo $sql;
				  $val=mysqli_query($con,$sql);
				  $data=mysqli_fetch_assoc($val);
				  echo $data['service_name']?>
	</td>
	<td>
		 <?php echo $result['location']; ?>
    </td>
    <td>
		<?php echo $result['data']; ?>	
	</td>
    
<?php
//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$employee['Emp_id']."'>APPROVE</a> | <a href='delete.php?id=".$employee['Emp_id']."'>DELETE</a></td>";-->
echo "<td><a href='data/deletes.php?id=".$result['book_id']."' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a> | <a href='data/aprovb.php?id=".$result['book_id']."'>APPROVE</a></td>";
?>


</tr>
</tr>
</tbody>
<?php
}
?>
</table>

</body>
</html>
<?php
}
?>

