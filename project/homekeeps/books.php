<?php 
session_start();
print_r($_POST);
echo $uid=$_SESSION['Log_id'];
$id=$_POST['empid'];
extract($_POST);

?>
<?php
include 'data/connect.php';

if (isset($_POST['bookdate'])) {

    $details=$_POST['details'];

echo $sql = "INSERT INTO tb_bookings (Log_id,date,eid,status)
VALUES ('$id', '$details', '$uid','0')";

if ($con->query($sql) === TRUE) {
?>
<script>
alert('Booking request successfully send');
window.location.href='emposearch.php';</script>  
<//?php } else {
    ?>
<script>
alert('Failed , Try again later');
window.location.href='emposearch.php';
</script> --> 
<?php
}
}
//$con->close();
?>