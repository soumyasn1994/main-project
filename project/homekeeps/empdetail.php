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
$qry ="SELECT * From tb_regsuser WHERE Reg_id='$id'";
echo "$qry";
$records= mysqli_query($con,$qry);
	$records= mysqli_query($con,$qry);
	if(mysqli_num_rows($records)>=1){
		while($row = mysqli_fetch_array($records)) {
			//$fn = $row['firstname'];
			//$surname = $row['surname'];
			//$FBID = $row['FBID'];
			//$IMGNU = $row['IMGNU'];

	$fn =  $row['Full_Name'];
 $pl =  $row['Place'];
  $mob =  $row['Mobile'];
  $cat =  $row['Category'];
  $pin =  $row['Pincode'];
  $eho =  $row['ehno'];
  $eh =  $row['ehname'];
	$email =  $row['Email_id'];
	//$gen =  $row['optradio'];
  $dob =  $row['DOB'];
  $pho =  $row['Photo'];
  $ed =  $row['edist'];
  $es =  $row['estat'];
  $ahr =  $row['Aadhar'];
		}
	}
?>

<!-- banner -->
<?php include('components/top.php'); ?>
<!-- //navbar -->
<?php include('components/navs/emp.php'); ?>

<html>
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
   
<body>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!--<h2 class="text-secondary">Apply Now</h2><br><br>-->
            <form id="employee" name="employee" action="data/editse.php" class="oh-autoval-form mt-5 mb-5 " method="post" onsubmit="return">
							<div class="form-group">	
									<label for="first name"> Full Name:</label><br>
							  	<input id="fn" type="text" value="<?php echo "$fn" ?>" name="fn" class="av-name form-control" av-message="Invalid Name" required="">
							</div>
							
							<div class="form-group">
                    <label for="hno" >House No:</label>
                    <br><input type="text" name="eho" id="eho" id="hno" value="<?php echo "$eho" ?>" class="av-posnumber form-control" av-message="Invalid House Number"></textarea>

                 </div>
                <div class="form-group">
                    <label for="house name">House Name:</label>
                    <br><input type="text" name="eh"  id="eh" value="<?php echo "$eh" ?>" class="av-name form-control" av-message="Invalid House Name"></textarea>

                </div>
              
								<div class="form-group">
										<label for="place">Place:</label><br>
										<input id="pl" name="pl" value="<?php echo "$pl" ?>" class="av-name form-control" av-message="Invalid Place" required="">
								</div>
								<div class="form-group">
										<label for="pin">Pincode:</label><br>
										<input type="text" value="<?php echo "$pin" ?>" name="pin" id="pin" class="av-pincode form-control" av-message="Invalid pincode">
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
								<div class="form-group">
				    				<label for="State">State:</label>
                    <select id="es" class="form-control" name="es">
                    <option value="select" ><?php echo "$es" ?></option>
                    <option value="Kerala">Kerala</option>
                    <!--<option value="America">America</option>
                    <option value="India">India</option>-->
                    </select>
                </div>
								<div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="av-email form-control" av-message="Invalid email address" required="">
								</div>
								<div class="form-group">
										<label>Gender:</label><br>
										
              			<label class="radio-inline">
                		<input type="radio" name="optradio" value="Male" >Male
              			</label>
              			<label class="radio-inline">
                		<input type="radio" name="optradio" value="Female">Female
              			</label>
              			<label class="radio-inline">
                		<input type="radio" name="optradio" value="Others">Others
              			</label>
    						</div>
    						<div class="form-group">
										<label for="dob">Date of Birth:</label>
										<input class="form-control" type="text" value="<?php echo "$dob" ?>" name="dob" required="" id="dob" readonly>
								</div>
      					<div class="form-group">
										<label for="photo">Photo:</label>
										<input type="file" value="<?php echo "$pho" ?>" id ="pho" name="pho" class="av-image form-control" av-message="Invalid Image Format" required="">
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
										<input id="mob" type="text" value="<?php echo "$mob" ?>" name="mob" class="av-mobile form-control" av-message="Invalid mobile" required="">
								</div>
    						<div class="form-group">
										<label>Aadhar Number:</label><br>
										<input type="text" value="<?php echo "$ahr" ?>" name="ahr" id="ahr" class="av-aadhaar form-control" av-message="Invalid mobile" required="">
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


