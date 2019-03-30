<?php
session_start();
if (!isset($_SESSION["Log_id"])){
		header('location:index.php');
}
?>
<?php
//session_start();
include 'data/connect.php';
//getting id from url
//$id = $_GET['Log_id'];
$id = $_SESSION["Log_id"];
 $sq="select * from tb_login where Log_id='$id'";
$re= mysqli_query($con,$sq);
$recs=mysqli_fetch_array($re);
$email=$recs['Username'];
$qry ="SELECT * From tb_regsuser as t,tb_place as p, tb_district as d,tb_category as c WHERE t.Log_id='$id' and t.Pid=p.Pid and p.Did=d.Did and t.cat_id=c.cat_id";
//echo "$qry";
$records= mysqli_query($con,$qry);
	//$records= mysqli_query($con,$qry);
	if(mysqli_num_rows($records)>=1){
		while($row = mysqli_fetch_array($records)) {
			//$fn = $row['firstname'];
			//$surname = $row['surname'];
			//$FBID = $row['FBID'];
			//$IMGNU = $row['IMGNU'];

	$fn =  $row['first_name'];
	$ln =  $row['last_name'];
 $pl =  $row['Place'];
  $mob =  $row['Mobile'];
  $cat =  $row['cat_name'];
  $pin =  $row['Pin'];
  $eho =  $row['hno'];
  $eh =  $row['hname'];
  $gender =  $row['Gender'];
	//$email =  $row['Email'];
	//$gen =  $row['optradio'];
  $dob =  $row['DOB'];
	$pho =  $row['Photo'];
	
  $ed =  $row['District'];
  //$es =  $row['estat'];
   $ahr =  $row['Aadhar'];
		}
	}
?>
<h5><a href="form/staff.php">Back to home</a></h5>
<!-- banner -->
<?php include('components/top.php'); ?>
<!-- //navbar -->
<?php //include('components/navs/emp.php'); ?>

<html>

   
<body>
<h1>Edit My Profile</h1>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!--<h2 class="text-secondary">Apply Now</h2><br><br>-->
            <form id="employee" name="employee" enctype="multipart/form-data" action="data/editse.php" class="form mt-5 mb-5 " method="post" onsubmit="return">
							<div class="form-group">	
									<label for="first name"> First Name:</label><br>
							  	<input id="fn" type="text" value="<?php echo "$fn" ?>" name="fn" class="form-control" onchange="fun()" required="">
							</div>
							<div class="form-group">	
									<label for="first name"> Last Name:</label><br>
							  	<input id="ln" type="text" value="<?php echo "$ln" ?>" name="ln" class="form-control" onchange="fun()" required="">
							</div>
						
                <div class="form-group">
                    <label for="house name">House Name:</label>
                    <br><input type="text" name="eh"  id="eh" value="<?php echo "$eh" ?>" class="form-control" onchange="hn()"></textarea>

                </div>
              
								<div class="form-group">
										<label for="place">Place:</label><br>
										<input id="pl" name="pl" value="<?php echo "$pl" ?>" class="form-control" onchange="pl()" required="">
								</div>
								<div class="form-group">
										<label for="pin">Pincode:</label><br>
										<input type="text" value="<?php echo "$pin" ?>" name="pin" id="pin" class="form-control" onchange="pn()">
								</div>
								<div class="form-group">
				   				 <label for="dist">District:</label>
                    <select class="form-control" id="ed" name="ed">
                    <option value="select" ><?php echo "$ed" ?></option>
                    <option value="Alapuzha">Alapuzha</option>
                    <option value="Ernakulam">Ernakulam</option>
                    <option value="Idukki">Idukki</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Kasargodu">Kasargodu</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Kottayam">Kottayam</option>
                    <option value="Kozhikodu">Kozhikodu</option>
                    <option value="Malapuram">Malapuram</option>
                    <option value="Palakkad">Palakkad</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                    <option value="Thiruvanathapuram">Thiruvanathapuram</option>
                    <option value="Thrissur">Thrissur</option>
                    <option value="Wayanad">Wayanad</option>
                    </select>
                </div>
								<!-- <div class="form-group">
				    				<label for="State">State:</label>
                    <select id="es" class="form-control" name="es">
                    <option value="select" ><?php echo "$es" ?></option>
                    <option value="Kerala">Kerala</option>
                    <option value="America">America</option>
                    <option value="India">India</option>
                    </select>
                </div> -->
								<div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="form-control" onchange="em()" required="">
								</div>
								<div class="form-group">
										<label>Gender:</label><br>




              			<label class="radio-inline">
                		<input type="radio" name="optradio" value="Male" <?php if($gender == "Male") echo 'checked';?> >Male
              			</label>
              			<label class="radio-inline">
                		<input type="radio" name="optradio" value="Female" <?php if($gender == "Female") echo 'checked';?>>Female
              			</label>
              			<label class="radio-inline">
                		<input type="radio" name="optradio" value="Others" <?php if($gender == "Others") echo 'checked';?>>Others
              			</label>
    						</div>
    						<!-- <div class="form-group">
										<label for="dob">Date of Birth:</label>
										<input class="form-control" type="text" value="<?php echo "$dob" ?>" name="dob" required="" id="dob" readonly>
								</div> -->
      					<div class="form-group">
										<label for="photo">Photo:</label>
										<img src="<?php echo "$pho"?>" width="130" height="130">
										<input type="file" id ="fileupload" name="fileupload" class="form-control"  required="">
										
								</div>
      					<!--<div class="form-group">
										<label for="pwd">Password:</label><br>
										<input  id="pass" type="password" value="Enter your Password" name="pass" class="av-password form-control" av-message="Invalid password" required="">
								</div>-->
      					<div class="form-group">
										<label for="category">Category:</label>
        						<select id="cat" name="cat" >
								<option value="<?php echo "$cat" ?>" ><?php echo "$cat" ?></option>
            				<option value="select" >--select--</option>
      							<option value="Cleaning">Cleaning</option>
      							<option value="Carpentory">Carpentory</option>
      							<option value="Repairing">Repairing</option>
      							<option value="Home Maintenance">Home Maintenance</option>
    								</select>
    						</div>
								<div class="form-group">
										<label for="mob">Mobile:</label><br>
										<input id="mob" type="text" value="<?php echo "$mob" ?>" name="mob" class="form-control" onchange="mb()" required="">
								</div>
    						<div class="form-group">
										<label>Aadhar Number:</label><br>
										<input type="text" value="<?php echo "$ahr" ?>" name="ahr" id="ahr" class="form-control"onchange="ah()" required="">
								</div>
								<div class="form-group">
										<button type="submit" class="btn btn-default" name="submit" id="submit" action="data/login.php">Submit</button>
								</div>
 				    </form>
        </div>
		</div>
</div>

</body>


</html>
<?php include('components/end.php'); ?>


