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
            <h2 class="text-secondary">Register Now</h2>
            <!--<form action="data/registration.php" class="oh-autoval-form" method="post" onsubmit="return">-->
            <form action="data/registration.php" id="registrations" name="registrations" method="post" id="registration"  class="oh-autoval-form mt-5 mb-5" onsubmit="return">
                <div class="form-group">
                    <label for="fname">Full Name:</label>
                    <input type="text" name="fn" value="<?php if(isset($_SESSION['fn'])) { 
                        echo $_SESSION['fn'];
                        } ?>"   placeholder="Enter your Fullname" class="av-name form-control" av-message="Invalid Name">
                </div>
            
                <div class="form-group">
                    <label for="address">House No:</label>
                    <input type="text" name="hno" id="hno" value="<?php if(isset($_SESSION['hno'])) { 
                        echo $_SESSION['hno'];
                        } ?>" id="fn" placeholder="Enter your House Number" class="av-posnumber form-control" av-message="Invalid House Number"> 

                </div> 
                <div class="form-group">
                    <label for="address">House Name:</label>
                    <input type="text" name="hname" value="<?php if(isset($_SESSION['hname'])) { 
                        echo $_SESSION['hname'];
                        } ?>"  id="hname" placeholder="Enter your House Name" class="av-name form-control" av-message="Invalid House Name">

                </div>
                
                <div class="form-group">
                    <label for="place">Place:</label>
                    <input type="text" name="pla" value="<?php if(isset($_SESSION['pla'])) {echo $_SESSION['pla'];} ?>" id="pla" placeholder="Enter your Place" class="av-name form-control" av-message="Invalid Place">
                </div>
                <div class="form-group">
                    <label for="pincode">Pincode:</label>
                    <input type="text" name="pin"  id="pin" placeholder="Enter your Pincode" class="av-pincode form-control" av-message="Invalid pincode">
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
				    <label>State</label>
                    <select id="stat" class="form-control" name="stat">
                    <option value="select" >--Select--</option>
                    <option value="Kerala">Kerala</option>
                   <!-- <option value="America">America</option>
                    <option value="India">India</option>-->
                    
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php if(isset($_SESSION['email'])) { 
                        echo $_SESSION['email'];
                        } ?>" placeholder="example@email.com" class="av-email form-control" av-message="Invalid email address">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="un" id="un" value="<?php if(isset($_SESSION['un'])) { 
                        echo $_SESSION['un'];
                        } ?>" placeholder="Enter your Username" class="av-username form-control" av-message="Invalid Username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pwd" value="<?php if(isset($_SESSION['pwd'])) { 
                        echo $_SESSION['pwd'];
                        } ?>" id="pwd" placeholder="Enter your Password" class="av-password form-control" av-message="Invalid password">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mob" value="<?php if(isset($_SESSION['mob'])) { 
                        echo $_SESSION['mob'];
                        } ?>" id="mob" placeholder="Enter your Mobile Number" class="av-mobile form-control" av-message="Invalid mobile">
                </div>
                <div class="form-group">
										<label>Aadhar Number:</label><br>
										<input type="text" placeholder="Enter your Aadhar Number" value="<?php if(isset($_SESSION['aadhar'])) { 
                        echo $_SESSION['aadhar'];
                        } ?>" name="aadhar" id="aadhar" class="av-aadhaar form-control" av-message="Invalid adhar" required="">
								</div>
                <div class="form-group">
                                              <br><button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button>
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