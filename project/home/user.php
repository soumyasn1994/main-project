<?php
session_start();
if (!isset($_SESSION["Log_id"])){
    header('location:index.php');

}
?>
<?php include('userhome.html');?>

<?php include('components/navs/head.php');?>
<html>
WELCOME <?php echo $_SESSION['Full_Name'];?>
<a href="user.html"></a>
</html>
<?php include('components/end.php'); ?>
