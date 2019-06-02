<?php
session_start();
include '../user/connect.php';
include '../../mail.php';
// if(!(isset($_SESSION['Log_id'])))
// {
// header('location:../../index.php');
// }
//$_SESSION['cnt']=array();
$uid=$_SESSION['Log_id'];
if (isset($_POST['pay'])) {
  
 $eid=$_POST['emid'];
 //$a=$_GET['empid'];
  $s=$_POST['sid'];
  $sc=$_POST['scid'];
 $bid=$_POST['bid'];
     $price=$_POST['amt'];
   $cname=$_POST['cname'];
    $cvv=$_POST['cvv'];
     $cno=$_POST['num'];
    //return;
   $cardno=$_POST['cpid'];
   $cdate=date("Y-m-d");
    $seq="select * from tb_bank where acc_num='$cno'";
   $esx=mysqli_query($con,$seq);
   
   
  //return;
   if(!empty($cardno))
{
  $seq1="select * from tb_coupon where card_num='$cardno' and status='0'";
   $eq1=mysqli_query($con,$seq1);
 //$num= mysqli_num_rows($eq1);
 //echo $num;
 
  if(mysqli_num_rows($eq1)==0)
  {
    echo "<script>if(confirm('invalid coupon number!!!!')){document.location.href=\"userpayment.php?empid= $eid &&sid=$s&&scid=$sc&&bid=$bid\"}else{document.location.href='userpayment.php?empid= $eid &&sid=$s&&scid=$sc&&bid=$bid'};</script>";
  }

  else
  {
    
    $fq1=mysqli_fetch_array($eq1);
     $camt=$fq1['amount'];
   $price=$price-$camt;
   

  }
  
  
 }
//  if(mysqli_num_rows($esx)>0)
//  {
 $fesx=mysqli_fetch_array($esx);
    $acc=$fesx['acc_num'];
  $cvv1=$fesx['cvv'];
 //}
// echo $cno;
// echo $cvv;
   if($acc!=$cno && $cvv!=$cvv1)
   {
    
     //echo "hi";
  // return;
   echo "<script>if(confirm('invalid Account number or CVV!!!!')){document.location.href=\"userpayment.php?empid= $eid &&sid=$s&&scid=$sc&&bid=$bid\"}else{document.location.href='userpayment.php?empid= $eid &&sid=$s&&scid=$sc&&bid=$bid'};</script>";
  //break; 
  //}
}
  else
 {
  
   


 
// return;
  $sql1="SELECT * FROM `wallet` WHERE `Log_id`='1'";
  $result11=mysqli_query($con,$sql1);
  $row11=mysqli_fetch_array($result11);
   $rr=$row11['balance'];$npsb;


    $sql4="SELECT * FROM `tb_bank` WHERE `acc_num`='$cno'";
  $result4=mysqli_query($con,$sql4);
  $row4=mysqli_fetch_array($result4);
     $r1=$row4['balance'];
   //return;
  
  $sql8="SELECT * FROM `wallet` WHERE `Log_id`='$eid'";
  $result8=mysqli_query($con,$sql8);
  $row8=mysqli_fetch_array($result8);
   $r2=$row8['balance'];
   $r2;
  
  $user=$r1-$price;
  
  $pro=$price*10/100;
  $admin=$rr+$pro;
  $emp=$r2+$price-$pro;
  if($price>$r1)
  {
    echo "<script>if(confirm('no balance!!!!')){document.location.href='userpayment.php?empid= $eid &&sid=$s&&scid=$sc&&bid=$bid'}else{document.location.href='userpayment.php?empid= $eid &&sid=$s&&scid=$sc&&bid=$bid'};</script>";

  }
  else
  {
  $sql6="UPDATE `tb_bank` SET `balance`='$user' WHERE `acc_num`='$cno'";
      $result6=mysqli_query($con,$sql6);
  $sql7="UPDATE `wallet` SET `balance`='$emp' WHERE `Log_id`='$eid'";
      $result7=mysqli_query($con,$sql7);
      $sql88="UPDATE `wallet` SET `balance`='$admin' WHERE `Log_id`='1'";
      $result88=mysqli_query($con,$sql88);
       $sql80="UPDATE `tb_payment` SET `status`='1' WHERE `Log_id`='$uid' and cu_date='$cdate'";
      
      $result86=mysqli_query($con,$sql80);

  
//}//echo $sql;
}    
 }               
if ($result6 && $result88 && $result86) {
  $csql="update tb_coupon set status='1' where card_num='$cardno'";
  $cexec=mysqli_query($con,$csql);
  //return;
  $digits = 5;
   
  $no="CRK".rand(pow(10, $digits-1), pow(10, $digits)-1);
  $amt=mt_rand(ceil(20/10) , floor(250/10))*10;
  $sq="insert into tb_coupon(amount,card_num,expi)values('$amt','$no','10-19')";
  $ex=mysqli_query($con,$sq);
  $cid= mysqli_insert_id($con);
  $qq="select card_num from tb_coupon where coid='$cid'";
$qq1=mysqli_query($con,$qq);
  $qq2=mysqli_fetch_array($qq1);
   $card=$qq2["card_num"];
   $qsl="select Username from tb_login where Log_id='$uid'";
  $qss=mysqli_query($con,$qsl);
  $fe=mysqli_fetch_array($qss);
  $email=$fe['Username'];
  $sqlq="SELECT * FROM  tb_regsuser Join tb_empserv on tb_empserv.Log_id = tb_regsuser.Log_id JOIN tb_category 
   ON tb_empserv.cat_id = tb_category.cat_id JOIN tb_place ON tb_regsuser.Pid = tb_place.Pid 
   JOIN tb_district ON tb_district.Did = tb_place.Did  
    join tb_login on tb_login.Log_id=tb_regsuser.Log_id WHERE tb_regsuser.Log_id= '$uid' ";
  $qryq=mysqli_query($con,$sqlq);
  $user=mysqli_fetch_array($qryq);
  $ufn=$user['first_name'];
  $uln=$user['last_name'];
  $umo=$user["Mobile"];
  $upl=$user["Place"];
  $udis=$user["District"];
 
  //return;
   $sql="SELECT * FROM  tb_regsuser Join tb_empserv on tb_empserv.Log_id = tb_regsuser.Log_id JOIN tb_category 
   ON tb_empserv.cat_id = tb_category.cat_id JOIN tb_place ON tb_regsuser.Pid = tb_place.Pid 
   JOIN tb_district ON tb_district.Did = tb_place.Did  
    join tb_login on tb_login.Log_id=tb_regsuser.Log_id WHERE tb_regsuser.Log_id= '$eid' ";
  $qry=mysqli_query($con,$sql);
  $employ=mysqli_fetch_array($qry);
  $fn=$employ['first_name'];
  $ln=$employ['last_name'];
  $mo=$employ["Mobile"];
  $pl=$employ["Place"];
  $dis=$employ["District"];
   $ememail=$employ['Username'];
    $message ="<main>
 <h1>Hello $email</h1><br>
 <p>Your payment successfull.
 Payment details:
 you are booked on : $cdate<br>
  EMPLOYEE DETAILS:<br>
                  $fn  $ln <br>
                   $mo  <br>
                   $pl <br>
                   $dis <br>
                You get a free coupon : <b> $no </b> of amount <b>$amt</b>. Remember to use it in future bookings..

 </p>
</main>";
$message1 ="<main>
 <h1>Hello $ememail</h1><br>
 <p>Your are booked for a service by,
 you are booked on : $cdate<br>
  CUSTOMER DETAILS:<br>
                  $ufn  $uln <br>
                   $umo  <br>
                   $upl <br>
                   $udis <br>

 </p>
</main>";
//return;
  sendMail($email,$email,"YOUR BOOKING DETAILS", $message);
  sendMail($ememail,$ememail,"YOUR BOOKING DETAILS", $message1);
  
  //return;
  ?>
 
    <script>
    
  alert('Payment  successfully done');
  window.location.href='../../user_home.php'</script>  
  <?php
   } 
   else
   {
   // sendMail($email,$email,"Employee Login Approval", $message1);
      ?>
  <script>
  alert('Failed , Try again later');
  window.location.href='../../user_home.php';
  </script>   
    <?php
  // }
}
}
// include '../user/footer.php';
?>