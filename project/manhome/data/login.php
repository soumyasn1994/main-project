
<?php
include 'connect.php'; //database connection page
session_start();
if (isset($_POST["submit"])) {
	$user = $_POST['user']; //username value from the form
	$pass = md5($_POST['pass']); //password value from the form
	$sql = "select * from tb_login where Username='$user' and Password ='$pass' and status=1"; //value querried from the table
	$res = mysqli_query($con, $sql);  //query executing function
	if (mysqli_num_rows($res) > 0) {
		$fetch = mysqli_fetch_assoc($res);
		if ($fetch['roleid'] == '1') {
			$_SESSION["Log_id"] = $fetch['Log_id'];
			$_SESSION["Username"] = $user;			// setting username as session variable 
			header("location:../adminhome.php");	//home page or the dashboard page to be redirected
		} elseif ($fetch['roleid'] == '2') {
			$_SESSION["Username"] = $user;	// setting username as session variable 
			$_SESSION["Log_id"] = $fetch['Log_id'];
			header("location:../staff.php");
		} elseif ($fetch['roleid'] == '3') {
			$_SESSION["Username"] = $user;	// setting username as session variable 
			$_SESSION["Log_id"] = $fetch['Log_id'];
			header("location:../user_home.php");
		}
	} else {
		echo "<script> alert('Unauthorized access!!!');window.location='../index.php';</script>";
	}
}
?>