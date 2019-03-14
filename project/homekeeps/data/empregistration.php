<?php
session_start();
    include 'connect.php'; 
	//echo "outside";
if(isset($_POST['submit']))
{
    //echo "inside";
    
	
  $fn = $_POST['fn'];
  $un = $_POST['un'];
//$ln = $_POST['ln'];
  $pla = $_POST['place'];
  $mob = $_POST['mob'];
  $cat = $_POST['cat'];
  $pin = $_POST['pin'];
  $hno = $_POST['hno'];
  $hname = $_POST['hname'];
  $email = $_POST['email'];
  $gen = $_POST['optradio'];
  $dob = $_POST['dob'];
  $photo = $_POST['photo'];
  $distr = $_POST['district'];
  $stat = $_POST['stat'];
  $aadhar = $_POST['aadhar'];
  $pwd = md5($_POST['pass']);
  $_SESSION['fn']=$fn;
     $_SESSION['dist']=$fn;
     $_SESSION['hno']=$hno;
     $_SESSION['hname']=$hname;
     $_SESSION['pla']=$pla;
     $_SESSION['email']=$email;
     //$_SESSION['pwd']=$pwd;
     $_SESSION['mob']=$mob;
     $_SESSION['pin']=$pin;
     $_SESSION['un']=$un;
     $_SESSION['dob']=$dob;
     $_SESSION['photo']=$photo;
     $_SESSION['aadhar']=$un;
     $_SESSION['pwd']=($_POST['pass']);





	
//	$uid = $_SESSION['uid'];
	//, '$uid')"
   //, u_id
   $sql = "SELECT * FROM `tb_login` WHERE Username='$email'";
    //echo $sql;
    $res = mysqli_query($con, $sql);
    
    $sql1 = "SELECT * FROM `tb_regsuser` WHERE Mobile='$mob'";
    //echo $sqls;
    $res1 = mysqli_query($con, $sql1);
    $sql2 = "SELECT * FROM `tb_regsuser` WHERE Aadhar='$aadhar'";
    //echo $sqls;
    $res2 = mysqli_query($con, $sql2);
    $sql3 = "SELECT * FROM `tb_regsuser` WHERE Username='$un'";
    //echo $sqls;
    $res3 = mysqli_query($con, $sql3);
    //$ress = mysqli_query($con, $sqls);
 
    if(mysqli_num_rows($res)>0 || mysqli_num_rows($res1)>0 || mysqli_num_rows($res2)>0 || mysqli_num_rows($res3)>0){
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
$sql1="select * from tb_role where role='employee'";
    $results1 = mysqli_query($con, $sql1);
    $res=mysqli_fetch_array($results1);
    $role=$res['roleid'];

//echo $r;
   $querys = "INSERT INTO `tb_login`(`Username`, `Password`, `role`, `status`) VALUES ('$email', '$pwd', '$role' , 0)";

   $result = mysqli_query($con, $querys);
  // echo $query;
   if($result){
       $logid = mysqli_insert_id($con);
      //  $sDirPath = 'upload/'.$logid.'/'; //Specified Pathname
      //   mkdir($sDirPath,0777,true);
      //   $path=$_FILES['photo']['name'];
      //   $path = 'upload/'.$logid.'/'.$path;
      //   $img=$_FILES['photo']['name'];
      //   move_uploaded_file($_FILES['photo']['tmp_name'],'upload/'.$logid.'/'. $_FILES['photo']['name']);

   echo $query = "INSERT INTO `tb_regsuser`(`Reg_id`,`Username`, `service_id`,`cat_id`, `Full_Name`, `Password`, `hno`, `hname`, `Photo`, `Pin`, `Gender`, `DOB`,`State`,`Did`,`Place`, `Mobile`, `Email_id`, `Aadhar`) 
   VALUES ('$logid','$un','$id','$cid', '$fn', '$pwd', '$hno', '$hname', '$photo', '$pin', '$gen', '$dob','$stat','$distr','$pla', '$mob', '$email', '$aadhar')";
	 

     $resultm = mysqli_query($con, $query);
     //echo  $query;
     //echo"<script> alert('Registration Successful');window.location ='../index.php';</script>";
   }
}
    

 
        //if($result=1)
 //{
    
 //echo"<script>alert('Registration Successfull Please Login.....');
 
 //document.location=('../index.php');
 //</script>";
 //$msg="Hai $fn -Enjoy our services........... !";
 //redirect('index.php');
 //send($msg, $mob);
 //header("location:../index.php");
//}
//header("location:../index.php");
  // else{
    //   echo"<script>alert('Sorry email or username is already in use........Please choose a different one...!');</script>";
   

   //else{
     //  echo '<script language="javascript">';
      // echo 'alert("Your Password does not match")';
       //echo '</script>';
   //}
}
?>
