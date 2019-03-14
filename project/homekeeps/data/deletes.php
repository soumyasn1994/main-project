<?php

 include 'connect.php'; 
 //$id=$_SESSION['Log_id'];
$query=("SELECT * FROM tb_regemployee where status='0'");
$result=mysqli_query($con,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['Emp_id'];
$qry=("SELECT Log_id FROM tb_login where Log_id='$id'");
$rows=mysqli_query($con,$qry);
//echo $qry;
$row=mysqli_fetch_array($rows);
$ids=$row['Log_id'];
//echo $ids;


$sql="delete from tb_login where `Log_id` = '$ids'";
//echo $sql;
$res=mysqli_query($con, $sql);
$sqls="delete from tb_regemployee where `Emp_id` = '$id'";
$ress=mysqli_query($con, $sqls);
if($res=1)
{
if($ress=1)

      {
         
        echo"<script>alert('Approved.........');
 
        document.location=('../jobview.php');
        </script>";
      }
    }
?>
