<?php
session_start();
 $id=$_SESSION['Log_id'];

$date=date("Y-m-d");

$mdate=date_create("$date");
date_add($mdate,date_interval_create_from_date_string("14 days"));
 $maxdate=date_format($mdate,"Y-m-d");
?>

    <!DOCTYPE html>
<html>
<!--<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>-->
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
  height:30px;
  margin-top:10px;

}

.next {
  background-color: #4CAF50;
  color: white;
  margin-top:10px;
}

.round {
  border-radius: 50%;
}
</style>

   



<style>
body {
  margin: 0px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    margin: -1px -50px 0px -20px;
  overflow: hidden;
  background-color: #333;
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
  background-color:#9e9e9e;
  color: white;
}
.right {
  background-color: #4AF50;
  color: white;
  padding-left:1190px
}
</style>
<meta charset="utf-8">
		<title>Mansion Care Services</title>
		

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<!-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS 
		<link rel="stylesheet" href="css/style.css"> -->
	</head>

<body>

<div class="topnav">
   <a class="active" href="staff.php">Home</a> 
  <div class="right">
  <a style="background-color: green;" href="logout.php">Logout</a>
</div>
</div>


<center>
           
           <br><br> <form id="employee" name="employee"  style=" border:solid 3px #000;width:500px;" action="#" class="oh-autoval-form mt-5 mb-5 " method="post" onsubmit="return">
						
            <table>
		
      <br><center><h2>Apply For Leave</h2></center>
      <div class="controls">
<tr><td><label class="control-label"><b>Date:</b></label>
		
		<td><input type="date" id="date"  name="date" class="form-control" style="width:250px;" min="<?php echo $date ?>" max="<?php echo $maxdate ?>"></td></td></tr>

 
    </div> 
		<div class="controls">
	<tr><td>	<label class="control-label"><b>Reason:</b></label>
		
																															<!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                  <td> <textarea id="reason" name="reason"></textarea>
                
</td></td></tr> 
        
        </div>
          

            <div class="controls">
<br>	<tr><td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
  <td><br><br>
			
     </center><input type="submit" name="submit" id="submit" value="APPLY" ></center></td></td></tr><br><br><br><br> <br>
 

</div>



   <!--<tr><td>   <a href="#" class="previous">&laquo;Previous</a></td>
<td><a href="#" class="next">Next &raquo;</a></td></tr>-->
	</table><br><br><br>
			
	</form></center>

<script src="js/jquery-3.3.1.min.js"></script>


<script src="js/jquery-ui.js"></script>
	<script>
		$( function() {
    		$( "#date" ).datepicker({
				dateFormat: 'yy-mm-dd',
				yearRange: "2019:2019",
                defaultDate:new Date('Y','m','d'),
                startDate:"1d",
                minDate: "0d", 
				//maxDate: "200d"
				changeMonth:true,
				changeYear:true
			});
  		} );
    </script>
    
<?php
include 'data/connect.php';
if (isset($_POST['submit'])) {

  $ldate=$_POST['date'];
  $reason=$_POST['reason'];
//  echo $sqlp="select * from tb_service where service_id='$seid'";
// $exep=mysqli_query($con,$sqlp);
// $fetp=mysqli_fetch_array($exep);
 $sql = "INSERT INTO tb_leave (Log_id,ldate,reason,status)
VALUES ('$id', '$ldate','$reason','0')";
$exeb=mysqli_query($con,$sql);
//$fetb=mysqli_fetch_array($exeb);
//$bid= mysqli_insert_id($con);


if ($exeb) {
?>
<script>
alert('Leave request successfully send');
window.location.href="staff.php?"</script>  
<?php
} 
else
{
  ?>
<script>
alert('Failed , Try again later');
window.location.href='staff.php';
</script> 
<?php
}
}
$con->close();
?>
<div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="#">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>

</body>
</html>
