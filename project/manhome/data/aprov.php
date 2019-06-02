<?php
	include('connect.php');
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		echo $sql="select * from tb_leave where Log_id=$id";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
        echo $approvel=$row['status']; 
		//return;
		$message = "<main>
                <h1>Hello User</h1>
                <p>Your registration has verified. You can now have full access to all features of the application
                <br>
                Login Details:<br>
                Username: $email<br>
                Password: $pass <br>
                </p>
              </main>";
		if($approvel== '0'){

			$sql="update tb_leave set status = '1' where  Log_id=$id";
			if(mysqli_query($con,$sql)){
			sendMail($email,$email,"Employee Login Approval", $message);
				header("refresh:0; url=http://localhost/manhome/leaveapprov.php");
			}
				else{
				echo "<script>alert(User Approved)</script>";
		}
	}
		if($approvel== '1'){
			$sql="update tb_leave set status = '0' where Log_id=$id";
			if(mysqli_query($con,$sql))
				header("refresh:0; url=http://localhost/manhome/leaveapprov.php");
			else
				echo "<script>alert(Leave  Rejected)</script>";
		}
	}
?>