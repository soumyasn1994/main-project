<?php 
session_start();
//print_r($_POST);
  $uid=$_SESSION['Log_id'];
 $id=$_GET['empid'];
$fdate=$_GET['fdate'];
$tdate=$_GET['tdate'];
//$sche=$_GET['tod'];
 $seid=$_GET['sid'];
//echo $amt=$_GET['en'];
//echo $amt=$_GET['amt'];
$cdate=date("Y-m-d");
extract($_POST);

?>
<?php
include 'data/connect.php';

if (isset($_GET['submit'])) {

    //$details=$_POST['details'];
    $sqlp="select * from tb_service where service_id='$seid'";
$exep=mysqli_query($con,$sqlp);
$fetp=mysqli_fetch_array($exep);

   $sql = "INSERT INTO tb_bookings (Log_id,fdate,todate,eid,status,cu_date)
VALUES ('$uid', '$fdate','$tdate', '$id','0','$cdate')";
$exeb=mysqli_query($con,$sql);
//$fetb=mysqli_fetch_array($exeb);
$bid= mysqli_insert_id($con);


if ($exeb) {
?>
<script>

window.location.href="Userhome1/user/payment.php?empid=<?php echo $id;?>&&sid=<?php echo $seid;?>&&bid=<?php echo $bid;?>"</script>  
<?php
 } 
 else
 {
    ?>
<script>
//alert('Failed , Try again later');
window.location.href="Userhome1/user/payment.php?empid=<?php echo $id;?>&&sid=<?php echo $seid;?>&&bid=<?php echo $bid;?>";
</script> 
<?php
 }
}
$con->close();
?>