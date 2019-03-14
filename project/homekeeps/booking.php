<?php session_start(); 
//include('components/top.php'); ?>

<?php include('components/navs/head.php'); ?>
<?php
include 'data/connect.php';

$sql = "SELECT * FROM tb_service";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?><form action="../book.php" method="post">
<table align="center" border="1">
<center><h1>BOOK NOW</h1></center><br>
<tr>

	<td>Service Provider</td>
	<td><select name="wp">
<?php while($rowm = $result->fetch_assoc()) {
        ?> <option value="<?php echo $rowm['service_id']; ?>"><?php echo $rowm['service_name']; ?> </option>
    <?php }?></select><?php 
} 

?>
