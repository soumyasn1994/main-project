<?php
session_start();
 include 'connect.php';  
 include '../mail.php';


 $id=$_GET['Log_id'];
$query=("SELECT * FROM tb_login where status='0' and roleid='2'");
//echo $query;
$result=mysqli_query($con,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['Log_id'];
$qry=("SELECT * FROM tb_login where Log_id='$id'");
$rows=mysqli_query($con,$qry);
$rowk=mysqli_fetch_array($rows);
 $email=$rowk['Username'];
 $pass=md5($row['Password']);
//echo $qry;


//echo $r;
echo $sql="UPDATE tb_login set status='1' where `Log_id` = '$id'";
//echo $sql;
$res=mysqli_query($con, $sql);
//$row=mysqli_fetch_array($rows);
//$r=$row['Log_id'];
echo $email=$row['Username'];
echo $sqls="UPDATE tb_regsuser set Status='1' where `Log_id` = '$id'";
//echo $sqls;
$ress=mysqli_query($con, $sqls);
 //$sql="update table tb_login set status=1 where `Log_id` = '$id'";
 //$res=mysqli_query($con, $sql);
 //html message
 $message = "<main>
                <h1>Hello User</h1>
                <p>Your registration has verified. You can now have full access to all features of the application
                <br>
                Login Details:<br>
                Username: $email<br>
                Password: $pass <br>
                </p>
              </main>";
//print_r($res);
//print_r($ress);
return;
if($res=1)
{
 if($ress=1)

      {
         //return mail('amalchacko789@gmail.com',"Employee Login Approval", $message);
         sendMail($email,$email,"Employee Login Approval", $message);
       echo"<script>alert('Approved.........');
 
       document.location=('../empaprov.php');
        </script>";
      }
    }   
?>
