<?php
session_start();
include 'data/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mansion Care</title>

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72"
	href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114"
	href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css"
	href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<link
	href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400'
	rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script>
	function pwdChek() 
		{														
			if(document.getElementById("pass").value == document.getElementById("cpass").value)
			{	
				return true;										
			}
			else
			{
				alert("***Password Mismatch***");
                                cpass.value="";
                                cpass.focus();
			  
					return false;
			}
		}
	</script>
</head>
<body>
	<!-- Navigation
    ==========================================-->
	<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top on">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Mansion Care</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="page-scroll">Home</a></li>
					<li><a href="#tf-service" class="page-scroll">Services</a></li>
					<li><a href="index.php" class="page-scroll">Login</a></li>
					<li><a href="userreg.php" >User Sign Up</a></li>
					<li><a href="empreg.php" >Staff Sign Up</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
<script type="text/javascript" src="validatee.js"></script>
<div id="tf-login" class="text-center">
		<div class="overlay">
			<div class="container">
				<div class="section-title center">
					<h2>
						<strong>Please sign up</strong> To book your service
					</h2>
					<div class="line">
						<hr>
					</div>
				</div>
				
				<div class="container">
			<div class="row">
					<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Please sign in</h3>
					</div>
					<div class="panel-body">
			<form id="employee" name="employee" action="data/empregistration.php" enctype="multipart/form-data" method="post">
							<div class="form-group">	
									<label for="first name"> First Name:</label><br>
							  	<input id="fn"  type="text" placeholder="Enter your First Name" name="fn" class="form-control" onchange="fun()" required="">
							</div>
							<div class="form-group">	
									<label for="last name"> Last Name:</label><br>
							  	<input id="ln"  type="text" placeholder="Enter your Last Name" name="ln" class="form-control" onchange="fun()" required="">
							</div>
                <div class="form-group">
                    <label for="house name">House Name:</label>
                    <br><input type="text" name="hname"   id="hname" placeholder="Enter your House Name" class="form-control" onchange="hn()"></textarea>
                </div>
								<div class="form-group">
										<label for="place">Place:</label><br>
										<input id="place"  name="place" placeholder="Enter your Place" class="form-control validate" onchange="pl()" required="">
								</div>
								<div class="form-group">
										<label for="pin">Pincode:</label><br>
										<input type="text"   placeholder="Enter your Pincode" name="pin" id="pin" class="av-pincode form-control validate" onchange="pn()">
								</div>
								<div class="form-group">
									<label>District:</label><br>
									<div class="form-control"> <select  name="district" id="district" required/>
                  <option value="-1"></option>     
            <?php
            $q = mysqli_query($con, "SELECT * FROM tb_district where Status=1");
            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['Did'] . '>' . $row['District'] . '</option>';
            }
            ?>
			  </select>
		</div>
		</div>
								<div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" id="email" placeholder="example@email.com" name="email" class="form-control validate" onchange="em()" required="">
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
							<input class="form-control validate" type="date" placeholder="Select your Birth Date"  name="date" required="" id="date" max=<?php echo date('Y-m-d',strtotime('-25 year'))?>>
								</div>
								<div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" name="fileupload" accept="image/*" size="70" id="fileupload" class="form-control validate" required="">
                </div> 
								
      					<div class="form-group">
										<label for="pwd">Password:</label><br>
										<input  id="pass" type="password"  placeholder="Enter your Password" name="pass" class="form-control validate" onchange="pwd()" required="">
								</div>
								<div class="form-group">
                    <label for="password">Confirm Password:</label>
                    <input type="password"   name="cpass" id="cpass" placeholder="ConfirmPassword" class="form-control validate" onchange="pwdChek()" >
                </div>
							<div class="form-group">
									<label>Category:</label><br>
									<div> 
                                        <select style="margin-left:-69%;" name="cat" id="cat" required/>
                  <!-- <option value="-1"></option> -->
                           
            <?php
            $q = mysqli_query($con, "SELECT * FROM tb_category");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['cat_id'] . '>' . $row['cat_name'] . '</option>';
            }
            ?>
			  </select>
									</div> 
							</div>
								<div class="form-group">
										<label for="mob">Mobile:</label><br>
										<input id="mob" type="text"  placeholder="Enter Mobile Number validate" name="mob" class="form-control" onchange="mb()" required="">
								
    						<div class="form-group">
							<br><label>Aadhar Number:</label><br>
										<input type="text"  placeholder="Enter your Aadhar Number" name="aadhar" id="aadhar" class="form-control validate" onchange="ah()" required="">
										<br><label>Aadhar Photo:</label><br>
										<input type="file" name="fileup" accept="image/*" size="70" id="fileup" class="av-image form-control validate" av-message="Invalid Image Format" required="">
								</div>
								<div class="form-group">
										<button type="submit" class="btn btn-lg btn-success btn-block" name="submit" id="submit" >Submit</button>
								</div>
 				    </form>
						</div>
				</div>
			</div>
		</div>
	</div>
			</div>
		</div>
	</div>
</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/SmoothScroll.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>

	<script src="js/owl.carousel.js"></script>

	<!-- Javascripts
    ================================================== -->
	<script type="text/javascript" src="js/main.js"></script>
	<script>
	function pwd(){
		//alert();
    var val_password=/^(?=.*[0-9])(?=.*[!@#$%^&*.])[a-zA-Z0-9!@#$%^&*.]{6,10}$/;
    $password= document.getElementById('pass').value;
  
  
    if(!val_password.test($password)){
       alert("Enter valid password! first character must be a letter length");
       document.getElementById('pass').value='';
       $("#password").focus();
       return false;
	 }
	 return true;
  }
  </script>
  	 <script src="js/jquery-ui.js"></script> 
	<script>
	$( function() {
    		$( "#date" ).datepicker({
                // $( "#tdate" ).datepicker({
				dateFormat: 'yy-mm-dd',
				yearRange: "1990:2018",
                defaultDate:new Date('Y','m','d'),
                startDate:"1d",
                minDate: "0d", 
				//maxDate: "200d"
				changeMonth:true,
				changeYear:true
            });
  		} );
	</script>
</body>
</html>

<?php
session_destroy();
?>
  