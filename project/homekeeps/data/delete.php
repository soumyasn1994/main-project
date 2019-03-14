<?php
include connect.php;
 
//getting id of the data from url
$id = $_GET['uid'];
echo $id;
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM tb_regemployee WHERE `Emp_id`=$id");
 echo $result;
//redirecting to the display page (index.php in our case)
header("Location:empdetail.php");
?>