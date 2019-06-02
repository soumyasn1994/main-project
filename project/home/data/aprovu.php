<?php
session_start();
 include 'connect.php'; 
 //$id=$_SESSION['Log_id'];
$query=("SELECT * FROM tb_login where status='0' and roleid='2'");
echo $query;
$result=mysqli_query($con,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['Log_id'];
$qry=("SELECT * FROM tb_login where Log_id='$id'");
$rows=mysqli_query($con,$qry);
//echo $qry;


//echo $r;
$sql="UPDATE tb_login set status=1 where `Log_id` = '$id'";
//echo $sql;
$res=mysqli_query($con, $sql);
$row=mysqli_fetch_array($rows);
$r=$row['Log_id'];
$sqls="UPDATE tb_regsuser set Status=1 where `Log_id` = '$id'";
//echo $sqls;
$ress=mysqli_query($con, $sqls);

 //$sql="update table tb_login set status=1 where `Log_id` = '$id'";
 //$res=mysqli_query($con, $sql);

if($res=1)
{
 if($ress=1)

      {
         
        echo"<script>alert('Approved.........');
 
        document.location=('../empaprov.php');
        </script>";
      }
    }   
?>
