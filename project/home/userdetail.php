<?php
session_start();
if (!isset($_SESSION["Log_id"])){
		header('location:index.php');
}
?>
<?php include('components/top.php'); ?>
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

	$fn =  $row['Full_Name'];
 $pl =  $row['Place'];
  $mob =  $row['Mobile'];
  $pin =  $row['Pin'];
  $eh =  $row['hname'];
	$pho =  $row['Photo'];
  $ed =  $row['District'];
   $ahr =  $row['Aadhar'];
		}
	}
?>

<!-- banner -->

<html>

   
<body>
<h5><a href="form/userhome.php">Back to home</a></h5>
<center><h2>Edit My Profile</h2></center>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!--<h2 class="text-secondary">Apply Now</h2><br><br>-->
            <form id="employee" name="employee" enctype="multipart/form-data" action="data/editu.php" class="oh-autoval-form mt-5 mb-5 " method="post" onsubmit="return">
							<div class="form-group">	
									<label for="first name"> Full Name:</label><br>
							  	<input id="fn" type="text" value="<?php echo "$fn" ?>" name="fn" class="form-control" onchange="fn()" required="">
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
								<div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="form-control" onchange="em()" required="">
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
    						<!-- <div class="form-group">
										<label for="dob">Date of Birth:</label>
										<input class="form-control" type="text" value="<//?php echo "$dob" ?>" name="dob" required="" id="dob" readonly>
								</div> -->
      					<div class="form-group">
										<label for="photo">Photo:</label>
										<input type="file" value="<?php echo "$pho" ?>" id ="fileupload" name="fileupload" class="form-control"  required="">
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
										<button type="submit" class="btn btn-default" name="submit" id="submit" >Submit</button>
								</div>
 				    </form>
        </div>
		</div>
</div>

</body>


</html>
<?php include('components/end.php'); ?>


