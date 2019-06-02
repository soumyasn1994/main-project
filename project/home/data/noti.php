<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!-- header -->
   <section class="main-header">
   <div class="header-top text-md-left text-center">
      <div class="container">
         <div class="d-md-flex justify-content-between">
            <!--<p class="text-capitalize">if you have any question? Call Us +12 345 678 </p>
            <ul class="social-iconsv2 agileinfo mt-md-0 mt-2">
               <li class="ml-lg-5">
                  <a href="#">
                     <i class="fab fa-facebook-f"></i>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <i class="fab fa-twitter"></i>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <i class="fab fa-google-plus-g"></i>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <i class="fab fa-linkedin-in"></i>
                  </a>
               </li>
            </ul>!-->
         </div>
      </div>
   </div>

   <!-- /header-top-->
   <header class="main-header">
      <nav class="navbar second navbar-expand-lg navbar-light bg-light pagescrollfix">
         <div class="container">
            <h1>
               <a class="navbar-brand" href="index.html">
                  House Keeping
                  <span>improving lives</span>
               </a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup1"
                aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-toggle" id="navbarNavAltMarkup1">
               <div class="navbar-nav secondfix ml-lg-auto">
                  <ul class="navbar-nav text-left">
                     <li class="nav-item active  mr-3">
                        <a class="nav-link" href="index.php">Home
                           <!--span class="sr-only">(current)</span>-->
                        </a>

                     </li>
                     <li class="nav-item  mr-3">
                        <a class="nav-link" href="#about">About</a>
                     </li>
                              <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                              </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out </a>
                     </li>
                     
                  </ul>
               </div>
            </div>
         </div>
      </nav>
   </header>
</section>
</header>
<?php
session_start();
include 'connect.php'; 
 //$qry ="SELECT * From tb_booking WHERE status=0";

	//$records= mysqli_query($con,$qry);
	
    $r=$_SESSION['Log_id'];
    $qry=$sql="SELECT * From tb_msg WHERE user_id='$r' and status='0'";
	//echo $qry;

    $record= mysqli_query($con,$qry);
   // $records=mysqli_fetch_assoc($record);
    //$id=$record['user_id'];
    //$r=$records['user_id'];
                  
				  $sqls ="SELECT * From tb_booking WHERE Log_id='$r'";
				  //echo $sql;
				  $val=mysqli_query($con,$sqls);
                  $data=mysqli_fetch_assoc($val);
                  $loc=$data['location'];
                  $date=$data['data'];
                  //echo $loc;
	if($record){
		
			//$fn = $row['firstname'];
			//$surname = $row['surname'];
			//$FBID = $row['FBID'];
			//$IMGNU = $row['IMGNU'];

	//$sql="SELECT service_name From tb_services WHERE service_id='$sid'  ";
	//$record= mysqli_query($con,$qry);
?>

<html>
<head>

			<title>Notifications</title>
		
		<t1><b><center>Notification</center></b></t1>
</head>
<body>

<center><table width="50%" border="1" cellpadding="1" cellspacing="1"></center>
	
<tbody>
<tr>
<th>Service Name</th>
<th>Location</th>
<th>Date</th>
<th>Message</th>
<th>Status</th>
<!--<th>Place</th>
<th>District</th>
<th>State</th>
<th>Pincode</th>
<th>DOB</th>
<th>Email</th>
<th>Mobile</th>
<th>Category</th>
<th>Gender</th>
<th>Photo</th>
<th>Aadhar</th>
<th>Cancel</th>-->
<tr>
<?php
while($records=mysqli_fetch_assoc($record)){
	?>
<tr>
    <td>
    <?php
    $ids=$data['service_id'];
    $sql="SELECT * From tb_service where service_id='$ids'";
    $rec=mysqli_query($con,$sql);
    //echo $sql;
	$recs=mysqli_fetch_assoc($rec);
    echo $data=$recs['service_name'];
    ?>
		</td>  
	<td>
		 <?php echo $loc; ?>
    </td>
    <td>
		<?php echo $date; ?>	
	</td>
    <td>
    <?php echo $records['msg'];?>
	</td>
    
<?php
//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$employee['Emp_id']."'>APPROVE</a> | <a href='delete.php?id=".$employee['Emp_id']."'>DELETE</a></td>";-->
echo "<td><a href='view.php?id=".$records['mid']."'>APPROVE</a></td>";
?>
</tr>
</tr>
</tbody>
<?php
}
?>
</table>

</body>
</html>
<?php
}
?>

