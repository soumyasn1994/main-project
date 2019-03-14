<?php session_start(); 
include('components/top.php'); ?>
<?php include('components/navs/head.php'); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mansion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tb_service";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?><form action="book.php" method="post">
<table align="center" border="1">
<tr>
	<td>Service Provider</td>
	<td><select name="wp">
<?php while($row = $result->fetch_assoc()) {
        ?> <option value="<?php echo $row['service_id']; ?>"><?php echo $row['service_name']; ?> </option>
    <?php }?></select><?php 
} 
$conn->close();
?>

<input type="hidden" name="uid" value="<?php echo $_SESSION["Log_id"];?>">
</td>
</tr>
<tr>
	<td>
		Service Details
	</td>
	<td><input type="date" name="details"></td>
</tr>
<tr>
	<td>
		<input type="submit" value="Submit request">
	</td>
	<td><input type="Reset" value="Reset"></td>
</tr></form>
</table>