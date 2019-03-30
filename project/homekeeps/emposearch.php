<?php
session_start();
if (!isset($_SESSION["Log_id"])){
    header('location:index.php');
}

include 'data/connect.php'; 
//getting id from url
//$id = $_GET['Log_id'];
$id = $_SESSION["Log_id"];

 $qry ="SELECT * from tb_regsuser where Log_id=$id";


$records= mysqli_query($con,$qry);
$rec=mysqli_fetch_array($records);
$pid=$rec['Pid'];
 //$did=$rec['Did'];
  $qs="SELECT * From tb_regsuser as t,tb_login as l,tb_place as p, tb_district as d,tb_category as c where t.Pid=$pid and t.pid=p.pid and p.did=d.did and l.roleid='2' and t.cat_id=c.cat_id and l.Log_id=t.Log_id";

$record= mysqli_query($con,$qs);

?>
<?php// include('components/top.php'); ?>
<?php// include('components/navs/emp.php'); ?>

<html>
<head>
<h2><a href="form/userhome.php">Back to home</a></h2>
<title>Find an Employee</title>
</head>
<body><b><h1>Find an Employee<b></h1>
<table width="50%" cellpadding="1" cellspacing="1">
<tr>


</tr>
<?php

while($employee=mysqli_fetch_assoc($record)){

 ?>


<tr>

<td><?php echo '<center><img src="'.$employee['Photo'].'" height="8%" width="20%"><center>';?></td>
<td>

<?php echo $employee['Full_Name'] ?>
</br>
<?php echo $employee['Place'] ?>
</br>
<?php echo $employee['District'] ?>
</br><?php echo $employee['Mobile'] ?>
</br><?php echo $employee['cat_name'] ?>
<form action="webs/bookings.php" method="get">
<input type="hidden" name="empid" value="<?php echo $employee['Log_id'] ?>">

<input type="submit" id="submit" name="submit" value="Book Now">
</form>
</td>
<?php
$dist=$employee['District'];
$dist_id=$employee['Did'];
?>
</tr>
<hr>

<?php



}
?>

</table>
</body>
<body>
<table width="50%" cellpadding="1" cellspacing="1">
<tr>
<b><h1><p><?php echo $dist;?> Region Employess..</p><b></h1>
</tr>
<?php
 $qs2="SELECT * From tb_regsuser as t,tb_place as p,tb_login as l, tb_district as d,tb_category as c where t.pid!=$pid and d.did='$dist_id' and p.did='$dist_id' and t.pid=p.pid  and t.cat_id=c.cat_id and l.roleid='2' and l.Log_id=t.Log_id
";
$records= mysqli_query($con,$qs2);
while($employ=mysqli_fetch_assoc($records)){

 ?>


<tr>

<td><?php echo '<center><img src="'.$employ['Photo'].'" height="8%" width="20%"><center>';?></td>
<td>

<?php echo $employ['Full_Name'] ?>
</br>
<?php echo $employ['Place'] ?>
</br>
<?php echo $employ['District'] ?>
</br><?php echo $employ['Mobile'] ?>
</br><?php echo $employ['cat_name'] ?>
<form action="webs/bookings.php" method="get">
<input type="hidden" name="empid" value="<?php echo $employee['Log_id'] ?>">

<input type="submit" id="submit" name="submit" value="Book Now">
</td>

</tr>



<?php



}
?>
</tr>
</tr>
</table>
</body>
</html>


