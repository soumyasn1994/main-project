<?php
session_start();
include 'data/connect.php';
?>
 <!-- banner -->
<?php include('components/top.php'); ?>
<!-- //navbar -->
<?php include('components/navs/regemp.php'); ?>
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
            <h2 class="text-secondary">Apply Now</h2><br><br>
            <form id="employee" name="employee" action="data/empregistration.php" class="oh-autoval-form mt-5 mb-5 " method="post" onsubmit="return">
							<div class="form-group">	
									<label for="first name"> Full Name:</label><br>
							  	<input id="fn" value="<?php if(isset($_SESSION['fn'])) { 
                        echo $_SESSION['fn'];
                        } ?>" type="text" placeholder="Enter your First Name" name="fn" class="av-name form-control" av-message="Invalid Name" required="">
							</div>
							
							<div class="form-group">
                    <label for="hno" >House No:</label>
                    <br><input type="text" name="hno" id="hno" value="<?php if(isset($_SESSION['hno'])) { 
                        echo $_SESSION['hno'];
                        } ?>" id="hno" placeholder="Enter your House Number" class="av-posnumber form-control" av-message="Invalid House Number">

                 </div>
                <div class="form-group">
                    <label for="house name">House Name:</label>
                    <br><input type="text" name="hname" value="<?php if(isset($_SESSION['hname'])) { 
                        echo $_SESSION['hname'];
                        } ?>"  id="hname" placeholder="Enter your House Name" class="av-name form-control" av-message="Invalid House Name"></textarea>

                </div>
              
								<div class="form-group">
										<label for="place">Place:</label><br>
										<input id="place" value="<?php if(isset($_SESSION['pla'])) { 
                        echo $_SESSION['pla'];
                        } ?>" name="place" placeholder="Enter your Place" class="av-name form-control" av-message="Invalid Place" required="">
								</div>
								<div class="form-group">
										<label for="pin">Pincode:</label><br>
										<input type="text" value="<?php if(isset($_SESSION['pin'])) { 
                        echo $_SESSION['pin'];
                        } ?>"  placeholder="Enter your Pincode" name="pin" id="pin" class="av-pincode form-control" av-message="Invalid pincode">
								</div>
								<div class="control-group">
									<label class="control-label"><b>District:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
               <select  name="district" id="district" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT * FROM tb_district where Status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['Did'] . '>' . $row['District'] . '</option>';
            }
            ?>
              </select>
									
								<div class="form-group">
				    				<label for="State">State:</label>
                    <select id="stat" class="form-control" name="stat">
                    <option value="select" >--Select--</option>
                    <option value="Kerala">Kerala</option>
                    <!--<option value="America">America</option>
                    <option value="India">India</option>-->
                    </select>
                </div>
								<div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" value="<?php if(isset($_SESSION['email'])) { 
                        echo $_SESSION['email'];
                        } ?>" id="email" placeholder="example@email.com" name="email" class="av-email form-control" av-message="Invalid email address" required="">
								</div>
								<div class="form-group">	
									<label for="username"> UserName:</label><br>
							  	<input id="un" name="un" value="<?php if(isset($_SESSION['un'])) { 
                        echo $_SESSION['un'];
                        } ?>" type="text" placeholder="Enter your First Name" name="un" class="av-username form-control" av-message="Invalid UserName" required="">
							</div>
								<div class="form-group">
										<label>Gender:</label><br>
              			<label class="radio-inline">
                		<input type="radio" name="optradio" value="Male" checked>Male
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
										<input class="form-control" value="<?php if(isset($_SESSION['dob'])) { 
                        echo $_SESSION['dob'];
                        } ?>" type="text" placeholder="Select your Birth Date"  name="dob" required="" id="dob" readonly>
								</div>
      					<div class="form-group">
										<label for="photo">Photo:</label>
										<input type="file" placeholder="Upload Photo" value="<?php if(isset($_SESSION['photo'])) { 
                        echo $_SESSION['photo'];
                        } ?>" name="photo" class="av-image form-control" av-message="Invalid Image Format" required="">
								</div>
      					<div class="form-group">
										<label for="pwd">Password:</label><br>
										<input  id="pass" type="password" value="<?php if(isset($_SESSION['pwd'])) { 
                        echo $_SESSION['pwd'];
                        } ?>" placeholder="Enter your Password" name="pass" class="av-password form-control" av-message="Invalid password" required="">
								</div>
      					<div class="form-group">
										<label for="category">Category:</label>
        						<select id="cat" name="cat">
            				<option value="select" >--select--</option>
      							<option value="Cleaning">Cleaning</option>
      							<option value="Carpentory">Painting</option>
      							<option value="Repairing">Repairing</option>
      							<option value="Home Maintenance">Home Maintenance</option>
    								</select>
    						</div>
								<div class="form-group">
										<label for="mob">Mobile:</label><br>
										<input id="mob" type="text" value="<?php if(isset($_SESSION['mob'])) { 
                        echo $_SESSION['mob'];
                        } ?>" placeholder="Enter Mobile Number" name="mob" class="av-mobile form-control" av-message="Invalid mobile" required="">
								</div>
    						<div class="form-group">
										<label>Aadhar Number:</label><br>
										<input type="text" value="<?php if(isset($_SESSION['aadhar'])) { 
                        echo $_SESSION['aadhar'];
                        } ?>" placeholder="Enter your Aadhar Number" name="aadhar" id="aadhar" class="av-aadhaar form-control" av-message="Invalid Aadhar" required="">
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
<?php
session_destroy();
?>