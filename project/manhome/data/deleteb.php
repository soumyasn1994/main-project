<?php
include 'connect.php';
 include '../mail.php';
//getting id of the data from url
$id = $_GET['id'];
$amt=$_GET['amt'];
$eid=$_GET['eid'];
 $bid=$_GET['bid'];
$ql1="SELECT * FROM `tb_login` WHERE `Log_id`='$id'";
  $res=mysqli_query($con,$ql1);
  $rows11=mysqli_fetch_array($res);
   $uemail=$rows11['Username'];$npsb;
   $q="SELECT * FROM `tb_login` WHERE `Log_id`='$eid'";
  $re=mysqli_query($con,$q);
  $rm=mysqli_fetch_array($re);
   $email=$rm['Username'];$npsb;
$message ="<main>
 <h1>Hello $uemail</h1><br>
 <p>
 Your Booking Cancelled by $email<br>
 Amount refund to ur account<br>


 </p>
</main>";
$sql1="SELECT * FROM `wallet` WHERE `Log_id`='1'";
  $result11=mysqli_query($con,$sql1);
  $row11=mysqli_fetch_array($result11);
   $rr=$row11['balance'];$npsb;


  $sql4="SELECT * FROM `wallet` WHERE `Log_id`='$id'";
  $result4=mysqli_query($con,$sql4);
  $row4=mysqli_fetch_array($result4);
   $r1=$row4['balance'];
  
  $sql8="SELECT * FROM `wallet` WHERE `Log_id`='$eid'";
  $result8=mysqli_query($con,$sql8);
  $row8=mysqli_fetch_array($result8);
   $r2=$row8['balance'];
  //echo $r2;
  $e=$amt*90/100;
  $e2=$amt-$e;
  $emp=$r2-$e;
  
  //$pro=$price*10/100;
  $admin=$rr-$e2;
  $user=$r1+$amt;
  if($amt>$r2)
  {
    echo "<script>if(confirm('no balance!!!!')){document.location.href='../user/user_home.php'}else{document.location.href='../user/user_home.php'};</script>";

  }
  else
  {
  $sql6="UPDATE `wallet` SET `balance`='$user' WHERE `Log_id`='$id'";
      $result6=mysqli_query($con,$sql6);
  $sql7="UPDATE `wallet` SET `balance`='$emp' WHERE `Log_id`='$eid'";
     echo $result7=mysqli_query($con,$sql7);
      $sql88="UPDATE `wallet` SET `balance`='$admin' WHERE `Log_id`='1'";
      $result88=mysqli_query($con,$sql88);
      echo $sql80="UPDATE `tb_payment` SET `status`='0' WHERE `bid`='$bid'";
      
      $result86=mysqli_query($con,$sql80);

  
}
if ($result6 && $result88 && $result86) {
    sendMail($uemail,$uemail,"YOUR BOOKING CANCELLED", $message);

 
//deleting the row from table
 $sql="update tb_bookings set status='0' where `Log_id` = '$id'";
$result = mysqli_query($con,$sql);
// $pql="update tb_payment set status='0' where `id` = '$bid'";
// $presult = mysqli_query($con,$sql);
 //echo $result;
//redirecting to the display page (index.php in our case)
header("Location:../jobaprov.php");
}
?>
