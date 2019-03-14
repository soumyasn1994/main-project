<!-- banner -->
<?php include('components/top.php'); ?>
<!-- //navbar -->
<?php include('components/navs/emp.php'); ?>

<form>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-secondary">Apply Now</h2>
            <form action="data/registration.php"  method="post" class="mt-5 mb-5">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fn" class="form-control" id="fname" placeholder="Enter Firstname"><br>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" name="ln" class="form-control" id="lname" width="50" placeholder="Enter Last Name"><br>
                </div>      
                <div class="form-group">
                    <label for="address">Address:</label>
                    <br><textarea name="add" id="address"></textarea>

                 </div>
                <div class="form-group">
                    <label for="place">Place:</label>
                    <br><input type="text" name="pla" class="form-control" id="place" placeholder="Enter Place">
                </div>
                <div class="form-group">
                    <br><label for="pincode">Pincode:</label>
                         
                    <br><input type="text" name="pin" class="form-control" id="pin" placeholder="Enter Pincode">
                </div>
                <div class="form-group">
                    <br><label for="email">Email:</label>
                    <br><input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <br><label for="username">Username:</label>
                    <br><input type="text" name="un" class="form-control" id="uname" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <br><label for="pwd">Password:</label>
                    <br><input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <br><label for="mobile">Mobile:</label>
                    <input type="text" name="mob" class="form-control" id="mob" placeholder="Enter Mobile number">
                </div>
                <div class="form-group">
                                              <br><button type="submit" name="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

  
  
  
            
            <div class="row">
                <div class="col-sm-3 col-md-6">
                  <br> 
    </div>
    </div>
    </div>
                
  </form>
</div>
    </div>

<?php include('components/end.php'); ?>