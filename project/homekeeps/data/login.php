
<?php
include 'connect.php'; //database connection page
//include('logout.php');
session_start();

if (isset($_POST["submit"])) {
    
//    $url = 'https://www.google.com/recaptcha/api/siteverify';
//    $privatekey = "6LfTwkAUAAAAABv0qaagKeb3f_WpISGvWkTXRsGN";
//    $response = file_get_contents($url . "?secret=" . $privatekey . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
//    $data = json_decode($response);
//
//    if (isset($data->success) AND $data->success == true)
   //  {



	$user = $_POST['user'];//username value from the form

	$pass =md5($_POST['pass']);//password value from the form
	//echo $username;

	
	$sql = "select * from tb_login where Username='$user' and Password ='$pass' and status=1"; //value querried from the table
	//print_r($sql);
	//echo $sql;
	
	 $res = mysqli_query($con, $sql);  //query executing function
	if (mysqli_num_rows($res)>0){
		$fetch = mysqli_fetch_assoc($res);
			if ($fetch['roleid'] == '1') {
//			$_SESSION["name"]=$fetch['name'];
				$_SESSION["Log_id"] = $fetch['Log_id'];
				$_SESSION["Username"] = $user;
				// setting username as session variable 
				 header("location:../adminhome.php");	//home page or the dashboard page to be redirected
	
			} elseif ($fetch['roleid'] == '2') {
				$_SESSION["Username"] = $user;	// setting username as session variable 
				$_SESSION["Log_id"] = $fetch['Log_id'];
				header("location:../form/staff.php");
			} elseif ($fetch['roleid'] == '3') {
				$_SESSION["Username"] = $user;	// setting username as session variable 
				$_SESSION["Log_id"] = $fetch['Log_id'];
				header("location:../form/userhome.php");
			}
	}


   else{
       echo "<script> alert('Unauthorized access!!!');window.location='../index.php';</script>";
   }
}
?>