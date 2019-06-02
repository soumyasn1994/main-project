<?php
	include('connect.php');
	
	if(isset($_GET['lid'])){
		$id=$_GET['lid'];
		$sql="select * from tb_login where Log_id=$id";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
        echo $approvel=$row['status']; 
        //return;
		if($approvel== '0'){

			$sql="update tb_login set status = '1' where  Log_id=$id";
			if(mysqli_query($con,$sql))
				header("refresh:0; url=http://localhost/manhome/viewuser.php");
			else
				echo "<script>alert(User Approved)</script>";
		}
		if($approvel== '1'){
			$sql="update tb_login set status = '0' where Log_id=$id";
			if(mysqli_query($con,$sql))
				header("refresh:0; url=http://localhost/manhome/viewuser.php");
			else
				echo "<script>alert(User  Blocked)</script>";
		}
	}
?>