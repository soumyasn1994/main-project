<?php 
session_start();
extract($_POST);
?>
<?php
$uid=$_SESSION['Log_id'];
include 'data/connect.php';
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "mansion";

// Create connection
//$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($con->connect_error) {
  //  die("Connection failed: " . $con->connect_error);
//} 

echo $sql = "INSERT INTO tb_booking (Log_id,service_id,data,location,status)
VALUES ('$uid', '$wp', '$details','$loc','0')";

if ($con->query($sql) === TRUE) {
?>
<script>
alert('New record created successfully');
window.location.href="webs/bookings.php";</script>  
<//?php } else {
    ?>
<script>
alert('Failed , Try again later');
window.location.href="webs/bookings.php";
</script> --> 
<?php
}

//$con->close();
?>