<?php
session_start();

 include 'connect.php'; 
$id=$_SESSION['Log_id'];
$querys=("SELECT * FROM tb_msg where status='0'");
$result=mysqli_query($con,$querys);
$sqls="update tb_msg set status=1 where `user_id` = '$id'";
//echo $sqls;
$res=mysqli_query($con, $sqls);
?>