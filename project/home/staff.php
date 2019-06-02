<?php
session_start();
if (!isset($_SESSION["Log_id"])){
    header('location:index.php');
     echo $_SESSION['Full_Name'];
}
?>
<?php include('components/top.php'); ?>
<?php include('components/navs/emp.php'); ?>

<html>

<center><h1>WELCOME</h1></center> <!--<?php echo $_SESSION['Full_Name'];?>-->
</html>         
<?php include('components/end.php'); ?>