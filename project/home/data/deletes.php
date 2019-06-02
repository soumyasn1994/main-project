<?php

 include 'connect.php'; 
 //$id=$_SESSION['Log_id'];
$query=("SELECT * FROM tb_regsuser where status='1'");
$result=mysqli_query($con,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['Log_id'];
$qry=("SELECT Log_id FROM tb_login where Log_id='$id' and Status='1'");
$rows=mysqli_query($con,$qry);
//echo $qry;
$row=mysqli_fetch_array($rows);
$ids=$row['Log_id'];
//echo $ids;


$sql="update tb_login set Status='1' where `Log_id` = '$ids'";
//echo $sql;
$res=mysqli_query($con, $sql);
$sqls="update tb_regsuser set status='1' where `Log_id` = '$id'";
$ress=mysqli_query($con, $sqls);
if($res=1)
{
if($ress=1)

      {
         
        echo"<script>alert('Canceled.........');
 
        document.location=('../useraprov.php');
        </script>";
      }
    }
?>
