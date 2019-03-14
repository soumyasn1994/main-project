<?php
session_start();
 include 'connect.php'; 
 $id=$_SESSION['Log_id'];
 $name=$_SESSION['Username'];
$query=("SELECT * FROM tb_booking where status='0'");
$result=mysqli_query($con,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['Log_id'];
$qry=("SELECT * FROM tb_login where Log_id='$id'");
$rows=mysqli_query($con,$qry);
echo $qry;
$row=mysqli_fetch_array($rows);
$r=$row['Log_id'];

//echo $r;
//$sql="update tb_login set status=1 where `Log_id` = '$r'";
//echo $sql;
//$res=mysqli_query($con, $sql);
$sqls="update tb_booking set status=1 where `Log_id` = '$id'";
$res=mysqli_query($con, $sqls);
$sqlr="INSERT INTO `tb_msg`(`user_id`, `status`, `msg`) VALUES ('$r', '0','Your Booking is Confirmed' )";
$ress=mysqli_query($con, $sqlr);
echo $ress;
 //$sql="update table tb_login set status=1 where `Log_id` = '$id'";
 //$res=mysqli_query($con, $sql);

if($res=1)
{
 if($ress=1)

      {
         
        echo"<script>alert('Approved.........');
 
        document.location=('../bookdetail.php');
        </script>";
      }
   }   
?>