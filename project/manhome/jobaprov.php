


<?php
session_start();
//include_once("config.php");
if(!isset($_SESSION['Log_id']) )
{
	header("Location: index.php");
}
// $utype=$_SESSION["usertype"];
// if($utype != 1 )
// {
// 	header("Location: index.php");
// }
$id=$_SESSION['Log_id'];
include('data/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content=" Mansion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
       </head>
   <body>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<!-- <link rel="icon" href="res/logo.png" sizes="16x16"> -->
<title>Employee Details</title>

<style>
#employee {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#employee td, #employee th {
  border: 1px solid #ddd;
  padding: 8px;
}

#employee tr:nth-child(even){background-color: #f2f2f2;}

#employee tr:hover {background-color: #ddd;}

#employee th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<!-- <div id="logo">
	<a href="got.php">
		<img src="res/up-arrow.png" width="30%">
	</a>
</div> -->
<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <b> <a style="color:blue;" class="navbar-brand" href="staff.php">MANSION CARE</a></b>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="margin-top:1%;">
            <li><b><button><a href="staff.php" class="page-scroll">Home</a></button></b></li>
			<!-- <li><a href="#tf-admin" class="page-scroll">Admin P2evilages</a></li>
			<li><a href="#tf-about" class="page-scroll">About</a></li>
			<li><a href="#tf-services" class="page-scroll">Services</a> -->
			<li>&nbsp;&nbsp;<b><button><a href="logout.php" class="page-scroll">Logout</a></button></b></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
		</nav>
		<br>
		<br>
		<h1 align="center" style="color:red;">Job Requests</h1>
<div>


<table width="100%"  cellpadding="6" cellspacing="0" id="employee"><thead><tr><th>Name</th><th>House Name</th><th>Place</th><th>District</th><th>Postalcode</th><th>Booking Date</th><th>Mobile</th><th>Action</th></tr></thead>
  <tbody>
	 <?php
	 
			 // $approvel=$row['status']; 

 $s="select * from tb_bookings join tb_payment on tb_payment.bid=tb_bookings.bid where tb_bookings.eid='$id' and tb_payment.status='1'";
$ss=mysqli_query($con,$s);
if(mysqli_num_rows($ss))
{

while($users = mysqli_fetch_array($ss))
{
  $role=$users['Log_id'];
	 $amt=$users['Amount'];
	 $bid=$users['bid'];
	 $eid=$users['eid'];
	 echo $sql="select * from tb_bookings where Log_id='$role'";
	 $res=mysqli_query($con,$sql);
	 while($row=mysqli_fetch_array($res)){
	 if($row['status']=='1')
	 {
			$btn='Approved';
	 $up = "Approved";
	 }
	 else if($row['status']=='2')
	 {
		 $btn='Rejected';
 
 
	 $up = "Rejected";
 }
 else{
	 $btn='Action';
 
 
	 $up = "Action";
	 
 }
}

$qry ="SELECT * From tb_regsuser as r,tb_login as l, tb_district as d,tb_place as p  WHERE  r.Log_id='$role' and r.Log_id=l.Log_id and r.Pid=p.Pid and p.Did=d.Did";
	// //echo $qry;
		$records= mysqli_query($con,$qry);
	
 
if(mysqli_num_rows($records))
{

while($user=mysqli_fetch_assoc($records)){

    //echo  $rowk['Photo'] 

//}
//}
$loid=$user['Log_id'];
?>
 

      <tr>
<td> <?php echo $user['first_name'].$user['last_name']?></td>
<td> <?php echo $user['hname'] ?></td>
<td><?php echo $user['Place'] ?></td>
<td><?php echo $user['District'] ?></td>
<td><?php echo $user['Pin'] ?></td>
<td> From:<?php echo $users['fdate']."<br>To:".$users['todate'] ?></td>

<td><?php echo $user['Mobile'] ?></td>




 <td><a href="data/joaprov.php?id=<?php echo $loid ?>&&amt=<?php echo $amt ?>&&bid=<?php echo $bid ?>&&eid=<?php echo $eid ?>"><button> <?php echo $up; ?> </button></a></td> 


</tr>
	
            <?php              
						  //}
						  }
                          }
                        }
                    }
						  ?>
    <!-- <tr><td colspan="7">&nbsp;</td></tr>
    <tr><td colspan="6"><span style="float:right;text-align: right;">  </span></td></tr> -->

    


  </tbody>
</table>


</div>

</body>
</html>
