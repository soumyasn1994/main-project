<?php
require('connect.php');
if(isset($_POST['submit']))
{
	$user = $_POST['user'];
    $pass = $_POST['pass'];
      

    $uid = $_SESSION['Log_id'];
	//, '$uid')"
    //, u_id
   $query = "INSERT INTO `tb_login`(`Username`, `Password`) VALUES ('$user', '$pass')";
     echo  $query;

$result = mysqli_query($con, $query);
 if($result){
     print_r($result);
 }
    
}
     
?>