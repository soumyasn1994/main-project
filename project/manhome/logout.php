<?php
session_start();
 unset($_SESSION["Log_id"]);
 unset($_SESSION["Username"]);
 session_destroy();
 header("location:index.php");
 
 ?>