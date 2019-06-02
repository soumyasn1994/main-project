<?php
session_start();
if(!(isset($_SESSION['Log_id'])))
{
header('location:index.php');
}
?>
<?php
include 'data/connect.php';
$lid1=$_SESSION['Log_id'];
$sql1="select * from wallet where wallet.Log_id='$lid1'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$ds=$row1['w_id'];
//echo $ds;
if($ds!='')
{
	echo "<script>if(confirm('account already exists!!!!')){document.location.href='staff.php'}else{document.location.href='staff.php'};</script>";
   
}
//SELECT `w_id`, `logid`, `w_acc_no`, `cvv`, `bank_name`, `balance`, `w_passwd`, `status` FROM `wallet` WHERE 1

if(isset($_POST['submit']))
{
	$lid=$_SESSION['Log_id'];
$amount=$_POST['amount'];
$cvv=$_POST['cvv'];
$cardno=$_POST['cardno'];
$bank=$_POST['bank'];
$psw=$_POST['psw'];
//INSERT INTO `wallet`(`w_id`, `logid`, `w_acc_no`, `cvv`, `bank_name`, `balance`, `status`) 
//VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
echo $sql="INSERT INTO `wallet`(`Log_id`, `w_acc_no`, `cvv`, `bank_name`, `balance`, `w_passwd`, `status`) VALUES ('$lid', '$cardno', '$cvv', '$bank', '$amount', '$psw','0')";
$result=mysqli_query($con,$sql);
header("location:staff.php");
}
?>
<!--  -->
<style>
	body{
		background-color: black;
	}
.dropdown {
    position: relative;
    display: inline-block;
	color: white;
	margin-top:1.2%;
	
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ddd;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 50;
	color:red;
}

.dropdown:hover .dropdown-content {
	color:black;
    display: block;
}
#bgVideo{ 
    position: absolute;
    top: 0;
    left: 0px;
    border: 0;
	width:120%;
	
    z-index: -2;
    background-size: cover;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
	border-radius: 15px;
	box-shadow: 0 9px #999;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
} 
</style>
	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    margin: -10px -50px 0px -10px;
  overflow: hidden;
  background-color: blue;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:green;
  color: white;
}
.right {
  background-color: #4AF50;
  color: white;
  padding-left:1190px
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="staff.php">Home</a>
  
</div>
<div style="width:35%; float:right; position:absolute;margin-left:52%;margin-top:6%;z-index:100;">
<img src="images1/b1.jpg" alt="Icon" style="width:90%;height:50%;">
</div>

</body>
</html>

<?php
$lid=$_SESSION['Log_id'];
//INSERT INTO `wallet`(`w_id`, `logid`, `w_acc_no`, `cvv`, `bank_name`, `balance`, `status`) VALUES
$sql1="SELECT * FROM `wallet` WHERE `Log_id`='$lid'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$r=$row1['Log_id'];
	?>
<div style="width:35%; float:right; position:absolute;margin-left:52%;margin-top:6%;z-index:100;">
<img src="images1/b1.jpg" alt="Icon" style="width:90%;height:50%;">
</div>
      
			<div style="width:35%; height:100%; margin-top:0%;  z-index:100; margin-left:10%;">
			<h2 style="color:pink;margin-left:90%; margin-top:4%;">WALLET</h2><br />								
			<form action="#" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<span style="color:pink;"><b>Amount</b></span><span style="color:red;">*</span>:<input type="text" name="amount" id="am" onchange="naa()" required style="z-index:50px; width:120%; height:50px; background-color: white; color:#F59024;" >
			<span style="color:pink;"><b>cvv</b></span><span style="color:red;">*</span>:<input type="text" name="cvv" id="cv" onchange="na2()" required style="z-index:50px; width:120%; height:50px;  color:red; background-color: white; color:#F59024;" >
		<span style="color:pink;"><b>Card no</b></span><span style="color:red;">*</span>:<input type="text" name="cardno" id="cd" onchange="na3()"required style="z-index:50px; width:120%; height:50px;  color:red; background-color: white; color:#F59024;" >
		<span style="color:pink;"><b>Bank</b></span><span style="color:red;">*</span>:<select name="bank"  required style="z-index:50px; width:120%; height:50px; color:red; background-color: white; color:#F59024;">
		<option>select</option>
		<option>SBI</option>
		<option>Canara Bank</option>
		<option>Vijaya Bank</option>
		<option>Axis Bank</option>
		<option>Federal Bank</option>
		</select>
			<span style="color:pink;">Password</span><span style="color:red;">*</span>:<input type="password" name="psw" id="loc" required style="z-index:50px; width:120%; height:50px;  color:red; background-color: white; color:#F59024;" >
		
			
			<table style="width:30%; size:0cm; margin-left:50%; text-color:blue;	28%;margin-top:10%;"><tr><td><button style ="background-color:blue; color:aliceblue;" class="btn btn-primary btn-block" name="submit">ADD</button></td></tr></table>	
			</form>			
			</div>
			

		<?php
?>
</div>
</body>
</html>