<?php
include 'connect.php';
 
//getting id of the data from url
// $id = $_GET['id'];
//  $id;
 
// //deleting the row from table
//  $sql="update tb_login set Status='0' where `Log_id` = '$id'";
// $result = mysqli_query($con,$sql);
//  //echo $result;
// //redirecting to the display page (index.php in our case)
// header("Location:../viewempo.php");
// ?>
// <?php
// 	include('../dbcon.php');
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		 $sql="select * from tb_login where Log_id=$id";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		echo +$approvel=$row['status']; 
		if($approvel== 0){

			$sql="update tb_login set status = '1' where  Log_id=$id";
			if(mysqli_query($con,$sql))
				header("refresh:0; url=http://localhost/homekeeps/viewempo.php");
			else
				echo "<script>alert(UnBlock)</script>";
		}
		if($approvel== 1){
			$sql="update tb_login set status = '0' where Log_id=$id";
			if(mysqli_query($con,$sql))
				header("refresh:0; url=http://localhost/homekeeps/viewempo.php");
			else
				echo "<script>alert(Blocked)</script>";
		}
	}
?>