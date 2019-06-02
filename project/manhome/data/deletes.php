<?php
include 'connect.php';
if (isset($_POST['delete'])) {
//getting id of the data from url
 $id = $_POST['id'];
 $amt=$_GET['amt'];
 
 
//deleting the row from table
 $sql="update tb_login set Status='0' where `Log_id` = '$id'";
$result = mysqli_query($con,$sql);

}
 //echo $result;
//redirecting to the display page (index.php in our case)
header("Location:../viewuser.php");
?>
