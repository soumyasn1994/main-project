<?php
session_start();
    include 'connect.php'; 
	//echo "outside";
if(isset($_POST['submit']))
{
  
$fn = $_POST['fn'];
$fn = $_POST['ln'];
 $pla = $_POST['place'];
  $mob = $_POST['mob'];
  $cat = $_POST['cat'];
  $pin = $_POST['pin'];
  $hno = $_POST['hno'];
  $hname = $_POST['hname'];
  $email = $_POST['email'];
  $gen = $_POST['optradio'];
  $dob = $_POST['dob'];
  $path= "upload/".$_FILES['fileupload']['name'];
		//echo($path);
        copy($_FILES['fileupload']['tmp_name'], "../upload/".$_FILES['fileupload']['name']);
        $paths= "upload/".$_FILES['fileup']['name'];
		//echo($path);
        copy($_FILES['fileup']['tmp_name'], "../upload/".$_FILES['fileup']['name']);
  $distr = $_POST['district'];
  $stat = $_POST['stat'];
  $aadhar = $_POST['aadhar'];
  $pwd = md5($_POST['pass']);
  $_SESSION['fn']=$fn;
  $_SESSION['ln']=$ln;
     $_SESSION['dist']=$fn;
     $_SESSION['hno']=$hno;
     $_SESSION['hname']=$hname;
     //$_SESSION['pla']=$pla;
     $_SESSION['email']=$email;
     //$_SESSION['pwd']=$pwd;
     $_SESSION['mob']=$mob;
     $_SESSION['pin']=$pin;
     //$_SESSION['un']=$un;
     $_SESSION['dob']=$dob;
     $_SESSION['fileupload']=$path;
     $_SESSION['aadhar']=$aadhar;
     $_SESSION['pwd']=($_POST['pass']);
   $sql = "SELECT * FROM `tb_login` WHERE Username='$email'";
    //echo $sql;
    $res = mysqli_query($con, $sql);
    
    $sql1 = "SELECT * FROM `tb_regsuser` WHERE Mobile='$mob'";
    //echo $sqls;
    $res1 = mysqli_query($con, $sql1);
    $sql2 = "SELECT * FROM `tb_regsuser` WHERE Aadhar='$aadhar'";
    //echo $sqls;
    $res2 = mysqli_query($con, $sql2);
    
 
    if(mysqli_num_rows($res)>0 || mysqli_num_rows($res1)>0 || mysqli_num_rows($res2)>0 ){
    //print_r($count);
    //__halt_compiler();
    if(mysqli_num_rows($res)>0 ){
    echo"<script> alert('This Email is already exist!!! Please choose another one');window.location ='../userreg.php';</script>";
    }
    else if(mysqli_num_rows($res1)>0 ){
     echo"<script> alert('This Mobile is already exist!!! Please choose another one');window.location ='../userreg.php';</script>";
 
    }
    if(mysqli_num_rows($res2)>0 ){
        echo"<script> alert('This Aadhar Number is already exist!!! Please choose another one');window.location ='../userreg.php';</script>";
        }
        if(mysqli_num_rows($res3)>0 ){
            echo"<script> alert('This Username  is already exist!!! Please choose another one');window.location ='../userreg.php';</script>";
            }
 }
   else{
  $qry=("SELECT * FROM tb_category where cat_name='$cat'");
$rowk=mysqli_query($con,$qry);
//echo $qry;
$rowp=mysqli_fetch_array($rowk);
$r=$rowp['service_id'];
   $quer=("SELECT * FROM tb_service where service_id='$r'");
$results=mysqli_query($con,$quer);
$rowms=mysqli_fetch_array($results);
$id=$rowms['service_id'];
$cid=$rowms['cat_id'];
$sql1=("select * from tb_role where role='employee'");
    $results1 = mysqli_query($con, $sql1);
    $res=mysqli_fetch_array($results1);
    $role=$res['roleid'];
    $query3 = "select * from `tb_place` where Place='$pla'";
    //echo $query3;
    $result3 = mysqli_query($con, $query3);
    if($row=mysqli_fetch_array($result3)){
        $pid=$row['Pid'];
        //$did=$row['Did'];
    }
    else
    {

    $query2 = "INSERT INTO `tb_place`(`Place`, `Did`) VALUES ('$pla', '$dist')";
    $result2 = mysqli_query($con, $query2);
    $pid = mysqli_insert_id($con);;
    }
    
   $querys = "INSERT INTO `tb_login`(`Username`, `Password`, `roleid`, `status`) VALUES ('$email', '$pwd', '$role' , 0)";

   $result = mysqli_query($con, $querys);
  

   if($result=1){
       $logid = mysqli_insert_id($con);

    $query = "INSERT INTO `tb_regsuser`(`Log_id`, `service_id`,`cat_id`, `first_name`,  `last_name`, `hname`, `Photo`, `Pin`, `Gender`, `DOB`,`Pid`, `Mobile`, `Aadhar`,`Aadhar_pic`) 
   VALUES ('$logid','$id','$cid', '$fn', '$ln', '$hname', '$path', '$pin', '$gen', '$dob','$pid', '$mob', '$aadhar','$paths')";
	 

     $resultm = mysqli_query($con, $query);
     //echo  $query;
   }
   if($resultm)
    {
       
    echo"<script>alert('Registration Successfull Please Login.....');
    
    document.location=('../index.php');
    </script>";
    $msg="Hai $fn -Enjoy our services........... !";
    redirect('index.php');
    send($msg, $mob);
  }
  
}
}
?>
