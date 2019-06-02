
<?php
session_start();
include 'data/connect.php'; ?>
<?php include('components/top.php'); ?>
<?php include('components/navs/adminhead.php'); ?>
<?php
 //$qry ="SELECT * From tb_booking WHERE status=0";

	//$records= mysqli_query($con,$qry);
	
    //$r=$_SESSION['Log_id'];
    $qry=$sql="SELECT * From tb_msg";
	//echo $qry;

    $record= mysqli_query($con,$qry);
   // $records=mysqli_fetch_assoc($record);
    //$id=$record['user_id'];
    //$r=$records['user_id'];
                  
				  $sqls ="SELECT * From tb_booking";
				  //echo $sql;
				  $val=mysqli_query($con,$sqls);
                  $data=mysqli_fetch_assoc($val);
                  $loc=$data['location'];
                  $date=$data['data'];
                  $ids=$data['service_id'];
                  //echo $loc;
	if($record){
		
			//$fn = $row['firstname'];
			//$surname = $row['surname'];
			//$FBID = $row['FBID'];
			//$IMGNU = $row['IMGNU'];

	//$sql="SELECT service_name From tb_services WHERE service_id='$sid'  ";
	//$record= mysqli_query($con,$qry);
?>

<html>
<?php include('components/top.php'); ?>
<!--?php include('components/navs/adminhead.php'); ?-->
<head>

			<title>Notifications</title>
		
		<t1><b><center>Notification</center></b></t1>
</head>
<body>

<center><table width="50%" border="1" cellpadding="1" cellspacing="1"></center>
	
<tbody>
<tr>
<th>Service Name</th>
<th>Location</th>
<th>Date</th>
<th>Message</th>
<!--<th>Status</th>-->
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
<th>Aadhar</th>
<th>Cancel</th>-->
<tr>
<?php
while($records=mysqli_fetch_assoc($record)){
	?>
<tr>
    <td>
    <?php
    
    $sql="SELECT * From tb_service where service_id='$ids'";
    $rec=mysqli_query($con,$sql);
    //echo $sql;
	$recs=mysqli_fetch_assoc($rec);
    echo $data=$recs['service_name'];
    ?>
		</td>  
	<td>
		 <?php echo $loc; ?>
    </td>
    <td>
		<?php echo $date; ?>	
	</td>
    <td>
    <?php echo $records['msg'];?>
	</td>
    
<?php
//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$employee['Emp_id']."'>APPROVE</a> | <a href='delete.php?id=".$employee['Emp_id']."'>DELETE</a></td>";-->
//echo "<td><a href='view.php?id=".$records['mid']."'>APPROVE</a></td>";
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

