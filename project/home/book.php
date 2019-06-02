<?php 
session_start();
//extract($_POST);
?>
<?php

$uid=$_SESSION['Log_id'];
include 'data/connect.php';
if (isset($_GET['bookdate'])) {

echo $sql = "INSERT INTO tb_booking (Log_id,eid,data,location,status)
VALUES ('$uid', '$wp', '$details','$wl','0')";
$exe=mysqli_query($con,$sql);
if($exe)
//if ($con->query($sql) === TRUE) 
{
  echo"<script> alert('New record created successfully');window.location ='emposearch.php';</script>";
?>
<!-- <script>
alert('New record created successfully');
window.location="webs/bookings.php";</script>  
<//?php } else {
    ?> -->
<script>
alert('Failed , Try again later');
window.location="emposearch.php";
</script> --> 
<?php
}
}
//$con->close();
?>