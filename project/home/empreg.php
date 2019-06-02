<?php
session_start();
include 'data/connect.php';
?>
 <!-- banner -->
<?php include('components/top.php'); ?>
<!-- //navbar -->
<?php include('components/navs/regemp.php'); ?>
<html>
<script type="text/javascript" src="validate.js"></script>
<body>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-secondary">Apply Now</h2><br><br>
            <form id="employee" name="employee" action="data/empregistration.php" enctype="multipart/form-data" class="oh-autoval-form mt-5 mb-5 " method="post">
							<div class="form-group">	
									<label for="first name"> Full Name:</label><br>
							  	<input id="fn"  type="text" placeholder="Enter your First Name" name="fn" class="form-control" onchange="fun()" required="">
							</div>
							<div class="form-group">	
									<label for="last name"> Full Name:</label><br>
							  	<input id="ln"  type="text" placeholder="Enter your Last Name" name="ln" class="form-control" onchange="fun()" required="">
							</div>
                <div class="form-group">
                    <label for="house name">House Name:</label>
                    <br><input type="text" name="hname"   id="hname" placeholder="Enter your House Name" class="form-control" onchange="hn()"></textarea>

                </div>
              
								<div class="form-group">
										<label for="place">Place:</label><br>
										<input id="place"  name="place" placeholder="Enter your Place" class="form-control" onchange="pl()" required="">
								</div>
								<div class="form-group">
										<label for="pin">Pincode:</label><br>
										<input type="text"   placeholder="Enter your Pincode" name="pin" id="pin" class="av-pincode form-control" onchange="pn()">
								</div>
								<div class="control-group">
									<label class="control-label">District:</label>
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
		</div>
		</div>
								
								<div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" id="email" placeholder="example@email.com" name="email" class="form-control" onchange="em()" required="">
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
										<input class="form-control" type="text" placeholder="Select your Birth Date"  name="dob" required="" id="dob" readonly>
								</div>
								<div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" name="fileupload" accept="image/*" size="70" id="fileupload" class="form-control" required="">
                </div> 
								
      					<div class="form-group">
										<label for="pwd">Password:</label><br>
										<input  id="pass" type="password"  placeholder="Enter your Password" name="pass" class="form-control" onchange="pwd()" required="">
								</div>
		                   
							<div class="control-group">
									<label class="control-label">Category:</label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
               <select  name="cat" id="cat" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT * FROM tb_category where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['cat_id'] . '>' . $row['cat_name'] . '</option>';
            }
            ?>
              </select>
								<div class="form-group">
										<label for="mob">Mobile:</label><br>
										<input id="mob" type="text"  placeholder="Enter Mobile Number" name="mob" class="form-control" onchange="mb()" required="">
								</div>
    						<div class="form-group">
										<label>Aadhar Number:</label><br>
										<input type="text"  placeholder="Enter your Aadhar Number" name="aadhar" id="aadhar" class="form-control" onchange="ah()" required="">
										<input type="file" name="fileup" accept="image/*" size="70" id="fileup" class="av-image form-control" av-message="Invalid Image Format" required="">
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
<?php
session_destroy();
?>