<?php 
session_start();
    include 'connect.php'; 
    //echo "outside";
    
    if(isset($_POST['submit']))
{
	 $fn = $_POST['fn'];
    // $ln = $_POST['ln'];
     $dist= $_POST['district'];
     $hno = $_POST['hno'];
     $hname = $_POST['hname'];
 	$pla = $_POST['pla'];
 	$pin = $_POST['pin'];
     $email = $_POST['email'];
    // echo $email;
    $stat = $_POST['stat'];
   //$photo = $_POST['photo'];
     $un = $_POST['un'];
   $pwd = md5($_POST['pwd']);
      $mob = $_POST['mob'];
      $aadhar=$_POST['aadhar'];
     $_SESSION['fn']=$fn;
     $_SESSION['dist']=$fn;
     $_SESSION['hno']=$hno;
     $_SESSION['hname']=$hname;
     $_SESSION['pla']=$pla;
     $_SESSION['email']=$email;
     $_SESSION['pwd']=($_POST['pwd']);
     $_SESSION['mob']=$mob;
     $_SESSION['pin']=$pin;
     $_SESSION['un']=$un;
     $_SESSION['aadhar']=$aadhar;
     $sqls1="select * from tb_role where role='user'";
     $results1 = mysqli_query($con, $sqls1);
     $ress1=mysqli_fetch_array($results1);
     $role=$ress1['roleid'];
     //$sqlp="SELECT * FROM `tb_regsuser` WHERE `Mobile`='$mob' ";
    //$count=mysqli_query($con,$sqlp);
    //if(mysqli_num_rows($count)<1){
     
        
//    // $uid = $_SESSION['Reg_id'];
// '$uid')"
//  u_id
   
      
	//$user = $_POST['user'];
     //$pass = $_POST['pass'];
      

    //$uid = $_SESSION['Reg_id'];
	//, '$uid')"
	//, u_id
    
    $sql = "SELECT * FROM `tb_login` WHERE Username='$email'";
    echo $sql;
    $res = mysqli_query($con, $sql);
    //$row=mysqli_fetch_array($res);
    //$val=$_row['Log_id'];
    
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
        
  echo $query = "INSERT INTO `tb_login`(`Username`, `Password`, `roleid`) VALUES ('$email', '$pwd', '$role')";

    $result = mysqli_query($con, $query);
    
    if($result){
        $logid = mysqli_insert_id($con);
        // $sDirPath = 'upload/'.$logid.'/'; //Specified Pathname
        // mkdir($sDirPath,0777,true);
        // $path=$_FILES['photo']['name'];
        // $path = '/upload/'.$logid.'/'.$path;
        // $img=$_FILES['photo']['name'];
        // move_uploaded_file($_FILES['photo']['tmp_name'],'upload/'.$logid.'/'. $_FILES['photo']['name']);

  //$query = "INSERT INTO `tb_regsuser`(`Username`, `Password`, `First_Name`, `Last_Name`, `hno`, `hname`, `Place`, `Pin`, `dist`, `cont`, `Mobile`, `Email_id`, `Status`) VALUES ('$un','$pwd','$fn','$ln','$add','$pla',$pin,$mob,`$email`)";
   $query = "INSERT INTO `tb_regsuser`(`Reg_id`, `Username`, `Password`,`Did`,`Place`,`State`, `Full_Name`, `hno`, `hname`, `Pin`, `Mobile`, `Email_id`) 
   VALUES ('$logid', '$un', '$pwd','$dist','$pla','$stat', '$fn', '$hno', '$hname', '$pin', '$mob', '$email')";
     echo  $query;

 
  $result = mysqli_query($con, $query);
    }
 
   }
}

?>
