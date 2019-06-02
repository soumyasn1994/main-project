<?php
session_start();
include 'connect.php';

$ud_ID =$_SESSION["Log_id"];
if(isset($_POST['submit'])){

$fn =$_POST['fn'];
$ln =$_POST['ln'];
$pl =$_POST['pl'];
$mob =$_POST['mob'];
//$cat =    $_POST['cat'];
$pin =    $_POST['pin'];
//$eho =    $_POST['eho'];
$eh =    $_POST['eh'];
$email =    $_POST['email'];
//$gen =    $_POST['optradio' ];
//$dob =    $_POST['dob'];
//$pho =    $_POST['pho' ];

		//echo($path);
        
$ed =    $_POST['ed' ];
//$es =    $_POST['es' ];
$ahr =    $_POST['ahr' ];
 
 //if($x==''){
	//  $image_name=$hid_image;
	
	//$sql="SELECT * From tb_regsuser as t,tb_place as p, tb_district as d,tb_category as c WHERE t.Log_id='$ud_ID' and t.Pid=p.Pid and p.Did=d.Did and t.cat_id=c.cat_id";
  //   $sql="SELECT * From tb_place where Place='$pl'";
  //   $qsql=mysqli_query($con,$sql);
  //   $row=mysqli_fetch_array($qsql);
  //   $pid=$row['Pid'];
  //   $sql1="SELECT * From tb_district where District='$ed'";
  //   $qsq1=mysqli_query($con,$sql1);
  //   $row1=mysqli_fetch_array($qsq1);
  //  // $pid=$row['Pid'];
  //   $did=$row1['Did'];
    
  //   $sql = "SELECT * FROM `tb_login` WHERE Username='$email'";
  //   //echo $sql;
  //   $res = mysqli_query($con, $sql);
  if($_FILES['fileupload']['size'] == 0) 
  {
    echo $query="UPDATE  tb_regsuser SET  first_name='$fn' , last_name='$ln',  hname='$eh' ,
   Pin='$pin'  ,   Mobile='$mob' ,   Aadhar='$ahr'
WHERE Log_id ='$ud_ID'";
//echo $query;
$ress=mysqli_query($con,$query);
  }
  else
  {
   
    $pho= "upload/".$_FILES['fileupload']['name'];
    copy($_FILES['fileupload']['tmp_name'],"../upload/".$_FILES['fileupload']['name'] );
  echo $queryss="UPDATE  tb_regsuser SET  first_name='$fn' , last_name='$ln',   hname='$eh' ,  
      Photo='$pho' ,  Pin='$pin'  ,   Mobile='$mob' ,   Aadhar='$ahr'
    WHERE Log_id ='$ud_ID'";
  
   $resst=mysqli_query($con,$queryss);
   
  }
   $querys="UPDATE  tb_login SET Username='$email'
    WHERE Log_id ='$ud_ID'";
   //echo $query;
   $rec=mysqli_query($con,$querys);
    }
   //mysqli_close($con);
   if($res=1 || $resst=1 && $rec=1)
     
     {
	echo "<script>window.onload=function(){alert('update successfully');window.location='../Userhome1/user/userprofile.php';}</script>";
 }
 else{
  echo "<script>window.onload=function(){alert('update failed');window.location='../Userhome1/user/userprofile.php';}</script>";
 }	
 
 //} 

?>