<?php
session_start();
 include 'connect.php'; 
 //$id=$_SESSION['Log_id'];
$query=("SELECT * FROM tb_regsuser where Status='0'");
echo $query;
$result=mysqli_query($con,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['Reg_id'];
$qry=("SELECT Log_id FROM tb_login where Log_id='$id'");
$rows=mysqli_query($con,$qry);
//echo $qry;
$row=mysqli_fetch_array($rows);
$r=$row['Log_id'];

echo $r;
$sql="update tb_login set status=1 where `Log_id` = '$r'";
echo $sql;
$res=mysqli_query($con, $sql);
$sqls="update tb_regsuser set Status=1 where `Reg_id` = '$r'";
$ress=mysqli_query($con, $sqls);

 //$sql="update table tb_login set status=1 where `Log_id` = '$id'";
 //$res=mysqli_query($con, $sql);

// if($res=1)
// {
//  if($ress=1)

//       {
         
//         echo"<script>alert('Approved.........');
 
//         document.location=('../jobview.php');
//         </script>";
//       }
//     }   
?>