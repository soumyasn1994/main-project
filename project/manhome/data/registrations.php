<?php 
session_start();
    include 'connect.php'; 
    //echo "outside";
    
    if(isset($_POST['submit']))
{
	 $fn = $_POST['fn'];
    $ln = $_POST['ln'];
     $dist= $_POST['district'];
    // $hno = $_POST['hno'];
     $hname = $_POST['hname'];
 	$pla = $_POST['pla'];
 	$pin = $_POST['pin'];
     $email = $_POST['email'];
    // echo $email;
   // $stat = $_POST['stat'];
   //$photo = $_POST['photo'];

   $pwd = md5($_POST['pass']);
      $mob = $_POST['mob'];
      $path= "upload/".$_FILES['fileupload']['name'];
      //$paths= "upload/".$_FILES['fileupload']['name'];
		//echo($path);
        copy($_FILES['fileupload']['tmp_name'], "../upload/".$_FILES['fileupload']['name']);
    //  $aadhar=$_POST['aadhar'];
     $_SESSION['fn']=$fn;
     $_SESSION['ln']=$ln;
     $_SESSION['dist']=$fn;
    //  $_SESSION['hno']=$hno;
     $_SESSION['hname']=$hname;
     $_SESSION['pla']=$pla;
     $_SESSION['email']=$email;
     $_SESSION['pass']=($_POST['pass']);
     $_SESSION['mob']=$mob;
     $_SESSION['pin']=$pin;
    //  $_SESSION['aadhar']=$aadhar;
     $_SESSION['fileupload']=$path;
     
     $sqls1="select * from tb_role where role='user'";
     $results1 = mysqli_query($con, $sqls1);
     $ress1=mysqli_fetch_array($results1);
     $role=$ress1['roleid'];
     //$sqlp="SELECT * FROM `tb_regsuser` WHERE `Mobile`='$mob' ";
    //$count=mysqli_query($con,$sqlp);
    //if(mysqli_num_rows($count)<1){
     
        
//    // $uid = $_SESSION['Log_id'];
// '$uid')"
//  u_id
   
      
	//$user = $_POST['user'];
     //$pass = $_POST['pass'];
      

    //$uid = $_SESSION['Log_id'];
	//, '$uid')"
	//, u_id
    
    $sql = "SELECT * FROM `tb_login` WHERE Username='$email'";
    //echo $sql;
    $res = mysqli_query($con, $sql);
    //$row=mysqli_fetch_array($res);
    //$val=$_row['Log_id'];
    
    $sql1 = "SELECT * FROM `tb_regsuser` WHERE Mobile='$mob'";
    //echo $sqls;
    $res1 = mysqli_query($con, $sql1);
    //$sql2 = "SELECT * FROM `tb_regsuser` WHERE Aadhar='$aadhar'";
    //echo $sqls;
    //$res2 = mysqli_query($con, $sql2);
    $sql3 = "SELECT * FROM `tb_login` WHERE Username='$email'";
    //echo $sqls;
    $res3 = mysqli_query($con, $sql3);
    //$ress = mysqli_query($con, $sqls);
 
    if(mysqli_num_rows($res)>0 || mysqli_num_rows($res1)>0 || mysqli_num_rows($res3)>0){
    //print_r($count);
    //__halt_compiler();
    if(mysqli_num_rows($res)>0 ){
    echo"<script> alert('This Email is already exist!!! Please choose another one');window.location ='../userreg.php';</script>";
    }
    else if(mysqli_num_rows($res1)>0 ){
     echo"<script> alert('This Mobile is already exist!!! Please choose another one');window.location ='../userreg.php';</script>";
 
    }

        if(mysqli_num_rows($res3)>0 ){
            echo"<script> alert('This Username  is already exist!!! Please choose another one');window.location ='../userreg.php';</script>";
            }
 }
    else{
        
   
    $query3 = "select * from `tb_place` where Place='$pla'";
    //echo $query3;
    $result3 = mysqli_query($con, $query3);
    if($row=mysqli_fetch_array($result3)){
        $pid=$row['Pid'];
        //$did=$row['Did'];
    }
    else
    {

    $query2 = "INSERT INTO `tb_place`(`Place`, `Did`,`Status`) VALUES ('$pla', '$dist',1)";
    $result2 = mysqli_query($con, $query2);
    $pid = mysqli_insert_id($con);
    }
    $query1 = "INSERT INTO `tb_login`(`Username`, `Password`, `roleid`,`status`) VALUES ('$email', '$pwd', '$role',1)";

    $result1 = mysqli_query($con, $query1);

    if($result1=1){
        $logid = mysqli_insert_id($con);
        //echo $logid;
        

  //$query = "INSERT INTO `tb_regsuser`(`Username`, `Password`, `First_Name`, `Last_Name`, `hno`, `hname`, `Place`, `Pin`, `dist`, `cont`, `Mobile`, `Email_id`, `Status`) VALUES ('$un','$pwd','$fn','$ln','$add','$pla',$pin,$mob,`$email`)";
   $query = "INSERT INTO `tb_regsuser`(`Log_id`, `Pid`, `first_name`, `last_name`, `hname`, `Pin`, `Mobile`,`Photo`,`Status`) 
   VALUES ('$logid', '$pid', '$fn', '$ln', '$hname', '$pin', '$mob','$path',1)";
     //echo  $query;

 
 $result = mysqli_query($con, $query);
    }
//  if($result)
//  {
//     echo"<script>alert('Registration Successfull Please Login.....');
    
//     document.location=('../index.php');
//     </script>";
//     //header("location:../admin.php");
//  }
    
 
   }
}

?>
