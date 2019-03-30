s<?php
session_start();
include 'data/connect.php';

?>
<!-- banner -->
<?php include('components/top.php'); ?>
<!-- //navbar -->
<?php include('components/navs/regemp.php'); ?>
<html>
<head>
<script type="text/javascript" src="validate.js"></script>


</head>
<body>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-secondary">Register Now</h2>
            <!--<form action="data/registration.php" class="oh-autoval-form" method="post" onsubmit="return">-->
            <form action="data/registrations.php" id="registrations" name="registrations" method="post" id="registration" enctype="multipart/form-data" class=" mt-5 mb-5" onsubmit="return">
            <fieldset>
  <table>

  <script>




  </script>
    <!-- <tr><th style="align:center;"><h2 class="fs-title">Create Theater owner account</h2></th></tr>     -->
            <div class="form-group" >
                    <label for="fname">First Name:</label>
                    <input type="text" name="fn"  id="fn" placeholder="Enter your First name" class=" form-control" onchange="fun()">
                </div>
                <div class="form-group" >
                    <label for="fname">Last Name:</label>
                    <input type="text" name="ln"  id="ln" placeholder="Enter your Last name" class=" form-control" onchange="fun()">
                </div>
                <div class="form-group">
                    <label for="address">House Name:</label>
                    <input type="text" name="hname"  id="hname" placeholder="Enter your House Name" class="form-control" onchange="hn()" >

                </div>
                
                <div class="form-group">
                    <label for="place">Place:</label>
                    <input type="text" name="pla"  id="pla" placeholder="Enter your Place" class=" form-control"  >
                </div>
                <div class="form-group">
                    <label for="pincode">Pincode:</label>
                    <input type="text" name="pin"  id="pin" placeholder="Enter your Pincode" class="form-control" onchange="pn()">
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
                    <input type="email" name="email" id="email" placeholder="example@email.com" class="form-control" onchange="em()" >
                </div>
                
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pwd"  id="pwd" placeholder="Enter your Password" class="form-control" onchange="pwd()">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mob"  id="mob" placeholder="Enter your Mobile Number" class="form-control" onchange="ph()" >
                </div>
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" class="form-control"   name="fileupload" accept="image/*" size="70" id="fileupload" />
                </div>
                <div class="form-group">
										<label>Aadhar Number:</label><br>
										<input type="text" placeholder="Enter your Aadhar Number"  name="aadhar" id="aadhar" class="form-control" onchange="ah()" required="">
								</div>
                <div class="form-group">
                                              <br><button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">submit</button>
                </div>
                </table>
	</fieldset>
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