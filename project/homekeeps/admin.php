<?php
session_start();
if (!isset($_SESSION['Log_id'])){
    header('location:index.php');

}
?>

<?php include('components/top.php'); ?>
<?php include('components/navs/adminhead.php'); ?>
haiii.its me.........
<?php include('components/end.php'); ?>
