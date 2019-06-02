<?php
session_start();
include 'connect.php';

$ud_ID =$_SESSION["Log_id"];
if(isset($_POST['submit'])){


$fn =$_POST['fn'];
$pl =$_POST['pl'];
$mob =$_POST['mob'];
$cat =    $_POST['cat'];
$pin =    $_POST['pin'];
$eho =    $_POST['eho'];
$eh =    $_POST['eh'];
$email =    $_POST['email'];
$gen =    $_POST['optradio' ];
$dob =    $_POST['dob'];
$pho =    $_POST['pho' ];
$ed =    $_POST['ed' ];
$es =    $_POST['es' ];
$ahr =    $_POST['ahr' ];
 
 //if($x==''){
	//  $image_name=$hid_image;
	
	
 
  
   
    $query="UPDATE  tb_regemployee SET  Full_Name='$fn' ,  ehno='$eho' ,  ehname='$eh' ,  
    Place='$pl' ,  Category='$cat' ,  Photo='$pho' ,  Pincode='$pin' ,  edist='$ed' ,  estat='$es' , DOB='$dob' ,  Mobile='$mob' ,  Email_id='$email' ,  Aadhar='$ahr'
    WHERE Emp_id ='$ud_ID'";
   //echo $query;
	 mysqli_query($con,$query);
   //mysqli_close($con);
   $querys="UPDATE  tb_login SET Username='$email'
    WHERE Log_id ='$ud_ID'";
   //echo $query;
	 mysqli_query($con,$querys);
   mysqli_close($con);
	echo "<script>window.onload=function(){alert('update successfully');window.location='empdetail.php';}</script>";
 }	 
?>