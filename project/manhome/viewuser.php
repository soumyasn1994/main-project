


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
<!-- <link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<style type="text/css">
	#logo{
			padding-top: 0.7%;						
			width: 14%;
			height: 9.65%;
			float: left;
			position: fixed;
			margin-left: 2px;
		}
</style> -->

<!-- <script type="text/javascript">
	function checkoutFunction(){
		
		
		alert("Your Order Has Been Placed!");
		window.location.assign("fandom.php");

	}
</script> -->
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
         <b> <a style="color:blue;" class="navbar-brand" href="adminhome.php">MANSION CARE</a></b>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="margin-top:1%;">
            <li><b><button><a href="adminhome.php" class="page-scroll">Home</a></button></b></li>
			<!-- <li><a href="#tf-admin" class="page-scroll">Admin P2evilages</a></li>
			<li><a href="#tf-about" class="page-scroll">About</a></li>
			<li><a href="#tf-services" class="page-scroll">Services</a> -->
			<li>&nbsp;&nbsp;<b><button><a href="logout.php" class="page-scroll">Logout</a></button></b></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<h1 align="center" style="color:white;">Employees</h1>
<div>


<table width="100%"  cellpadding="6" cellspacing="0" id="employee"><thead><tr><th>Name</th><th>Place</th><th>District</th><th>Postalcode</th><th>Gender</th><th>Mobile</th><th>Username</th><th>Photo</th><th>Action</th></tr></thead>
  <tbody>
 	<?php

$res1 = mysqli_query($con,"select * from tb_login where roleid='3'");
if(mysqli_num_rows($res1))
{

while($row = mysqli_fetch_array($res1))
{
 $s=$row['Log_id'];

$res = mysqli_query($con,"select * from tb_regsuser as r, tb_district as d,tb_place as p  WHERE  r.Log_id='$s' and r.Pid=p.Pid and p.Did=d.Did");
if(mysqli_num_rows($res))
{

while($rowk = mysqli_fetch_array($res))
{
    //echo  $rowk['Photo'] 
	if($row['status']==1)
	{
 		$btn='UnBlock';
	$up = "UnBlock";
	}
	else
	{
		$btn='Block';


	$up = "Block";
}
//}
//}
?>
 <?php if($row['Username']!="admin@gmail.com")
 {
    //echo  $rowk["first_name"];
     ?>
						  <tr>
                         
							
							
                         <td> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<?php  echo  $rowk["first_name"]." ".$rowk["last_name"] ?></td>
                            <td><?php echo  $rowk["Place"] ?></td>
							<td><?php echo  $rowk["District"] ?></td>
                            <td><?php echo  $rowk["Pin"] ?></td>
							<td><?php echo  $rowk["Gender"] ?></td>                       
                            <td><?php echo  $rowk["Mobile"] ?></td>
                            <td><?php echo  $row["Username"] ?></td>
                            <td><img width="60px" src="<?php echo  $rowk['Photo'] ?>"/></td>
                            <td><a href="data/aprovb.php?lid='<?php echo $rowk['Log_id']; ?>'"><button><?php echo $up; ?></button></a></td>
                        </tr>
                          <?php
						  }
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
