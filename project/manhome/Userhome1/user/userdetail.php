<?php
session_start();
if (!isset($_SESSION["Log_id"])){
		header('location:index.php');
}
?>
<?//php include('components/top.php'); ?>
<?php

//session_start();
include 'connect.php';
//getting id from url
//$id = $_GET['Log_id'];
$id = $_SESSION["Log_id"];
 $sq="select * from tb_login where Log_id='$id'";
$re= mysqli_query($con,$sq);
$recs=mysqli_fetch_array($re);
$email=$recs['Username'];
$qry ="SELECT * From tb_regsuser as t,tb_place as p, tb_district as d,tb_category as c WHERE t.Log_id='$id' and t.Pid=p.Pid and p.Did=d.Did";
//echo "$qry";
$records= mysqli_query($con,$qry);
	//$records= mysqli_query($con,$qry);
	if(mysqli_num_rows($records)>=1){
		while($row = mysqli_fetch_array($records)) {
			//$fn = $row['firstname'];
			//$surname = $row['surname'];
			//$FBID = $row['FBID'];
			//$IMGNU = $row['IMGNU'];

	 $fn = $row['first_name'];
	$ln =  $row['last_name'];
 $pl =  $row['Place'];
  $mob =  $row['Mobile'];
  $pin =  $row['Pin'];
	$eh =  $row['hname'];
	//$gender=$row['Gender'];
	//echo $row['Photo'];
	$pho =  $row['Photo'];
  $ed =  $row['District'];
   $ahr =  $row['Aadhar'];
		}
	}
?>

<!-- banner -->

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

   

<h5><a href="user_home.php">Back to home</a></h5>
<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

    <body style="background-repeat:no-repeat;">
    <!--<h2>Previous and Next Buttons</h2>-->



<!--<a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>-->
  


		<!--<div class="background-wrap" >-->
			<div class="inner">
            <div class="image-holder">
        <div class="item active" style="background-image: url(images/im2.jpg);">

               <!-- <img src="images\edit.jpg" alt="" style="height:600px;">-->

<center>
            <!--<h2 class="text-secondary">Apply Now</h2><br><br>-->
            <form id="employee" name="employee" enctype="multipart/form-data" style=" border:solid 3px #000;width:700px;" action="../../data/editu.php" class="oh-autoval-form mt-5 mb-5 " method="post" onsubmit="return">
						<div class="table-repsonsive">
            <table id="item_table" >
				<div style="display:inline-block;vertical-align:center;width:400px;background:;">
				<center><h2>Edit My Profile</h2></center>
<div class="control-group" id="addqual">

<tr><td>		<label class="control-label"><b>First Name:</b></label>
		<div class="controls">
		<td><input type="text" id="fn" value="<?php echo "$fn" ?>" name="fn" class="form-control" style="width:250px;" onchange="fn()"  ></td></tr>

		</div>
	</div>

																							<div class="control-group">
	<tr><td><br>	<label class="control-label"><b>Last Name:</b></label>
		<div class="controls">
																															<!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
				 <td><br>  <input type="text" id="ln"  value="<?php echo "$ln" ?>" name="ln" class="form-control" style="width:150px;" onchange="fn()"  >
<!-- <i class="zmdi zmdi-lock"></i>-->
</td></tr> 
		</div>




<div class="control-group">
	<tr><td><br> 	<label class="control-label"><b>House Name:</b></label>
		<td><div class="controls">
																															<!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
																															<br> 	<input type="text" name="eh"  id="eh" value="<?php echo "$eh" ?>" style="width:250px;" class="form-control" onchange="hn()"></td></tr>
		</div>
	</div>

											<div class="control-group">
	<tr><td><br> 	<label class="control-label"><b>Place:</b></label></b></td>
		<div class="controls">
							<!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
										 <td> <br> 	<input type="text" id="pl" name="pl" value="<?php echo "$pl" ?>" style="width:250px;" class="form-control" onchange="pl()" readonly></td></tr>
		</div>
											<div class="control-group">
			<tr><td><br> <label class="control-label"><b>Pincode:</b></td>
<td>
<br> <input type="text" value="<?php echo "$pin" ?>" name="pin" id="pin" class="form-control" onchange="pn()" style="width:250px;" ></td></tr></br>
<i class="zmdi zmdi-lock"></i>
</div>
<!-- <div class="form-wrapper">
			<tr><td>Certificate:</td>
<td>
<input type="file"  name="certificate" class="form-control"style="width:250px;"></td></tr>
<i class="zmdi zmdi-lock"></i>
			</div> -->
			<div class="control-group">
	<tr><td><br> 	<label class="control-label"><b>District:</b></label>
		<td><div class="controls">
																															<!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
																															<br> 	 <select  name="ed" id="ed" style="width:150px;height:50px;" required/>
		<option value="select"><?php echo "$ed" ?></option>

<?php
$q = mysqli_query($con, "SELECT * FROM tb_district");
//var_dump($q);

while ($row = mysqli_fetch_array($q)) {
echo '<option value=' . $row['Did'] . '>' . $row['District'] . '</option>';
}
?>
</select></td></tr>
		</div>
	</div>
									<div class="control-group">
			<tr><td><br> <label class="control-label"><b>Email:</b></td>
<td>
<br> 	<input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="form-control" onchange="em()"   ></td></tr>
<i class="zmdi zmdi-lock"></i></td></tr>
			</div>
			<div class="control-group">
			<tr><td><br> <label class="control-label"><b>Photo:</b></label><br>
		<td>	<br> <img src="<?php echo "../../$pho" ?>" width="150" height="150">
			<input type="file"  id ="fileupload" name="fileupload" class="form-control" ></td></tr>
									</div>
									<div class="control-group">
			<tr><td><br> <label class="control-label"><b>Mobile:</b></td>
<td>
<br> 	<input id="mob" type="text" value="<?php echo "$mob" ?>" name="mob" class="form-control" onchange="mb()"   style="width:250px;"></td></tr>
<i class="zmdi zmdi-lock"></i></td></tr>
			</div>
			<!-- <div class="form-wrapper">
			<tr><td><label class="control-label">Aadhar Number:</td>
<td>
			<input type="text" value="<?php echo "$ahr" ?>" name="ahr" id="ahr" class="form-control"onchange="ah()"   style="width:250px;"></td></tr>
<i class="zmdi zmdi-lock"></i></td></tr>
			</div> -->

<tr>
<div style="margin-right:0px;margin-center:300px;width:700px;">
<tr><td><br> <center>	<input type="submit" name="submit" value="SUBMIT"></center><br> </td></tr><br> 
 <td>
</div>
</div>
			</div> 
	 <!--<tr><td>   <a href="#" class="previous">&laquo;Previous</a></td>
<td><a href="#" class="next">Next &raquo;</a></td></tr>-->
			</table>
			
	</form>
</div>
</div>
</div>

<script src="asset/js/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function() {

							$("#courses").on("change", function(){
									 $courses = $('#courses').val();

									 $html = "";
									 $.ajax({
											 type:'post',
											 data:{'index':$courses},
											 url:'../../getcourse.php',
											 success:function(data){
													 $data = JSON.parse(data);
													 $html = '<option value="">--SELECT COURSE--</option>';
													 for(var index=0; index<$data.length; index++){
															$html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
													 }

													 $("#course").html($html);
											 }
									 });
							});
});

</script>
<div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="user_home.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
</body>
<?php
include 'footer.php';
?>


