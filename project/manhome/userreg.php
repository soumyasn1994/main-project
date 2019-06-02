<?php
session_start();
include 'data/connect.php';

	echo $_SESSION['fn'];

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
			</div>	
				<div class="container">
			<div class="row">
					<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Please sign in</h3>
					</div>
					<div class="panel-body">
					<form action="data/registrations.php" id="registrations" name="registrations" method="post" id="registration" enctype="multipart/form-data" class=" mt-5 mb-5" onsubmit="return">
            <fieldset>
  <table>
    <!-- <tr><th style="align:center;"><h2 class="fs-title">Create Theater owner account</h2></th></tr>     -->
            <div class="form-group" >
                    <label for="fname">First Name:</label>
                    <input type="text" name="fn"  id="fn" placeholder="Enter your First name"  class=" form-control validate" onchange="fun()">
                </div>
                <div class="form-group" >
                    <label for="fname">Last Name:</label>
                    <input type="text" name="ln"  id="ln" placeholder="Enter your Last name"   class=" form-control validate" onchange="fun()">
                </div>
                <div class="form-group">
                    <label for="address">House Name:</label>
                    <input type="text" name="hname"  id="hname" placeholder="Enter your House Name"   class="form-control validate" onchange="hn()" >

                </div>
                
                <div class="form-group">
                    <label for="place">Place:</label>
                    <input type="text" name="pla"  id="pla" placeholder="Enter your Place"  class=" form-control validate" onchange="pl()" required >
                </div>
                <div class="form-group">
                    <label for="pincode">Pincode:</label>
                    <input type="text" name="pin"  id="pin" placeholder="Enter your Pincode"   class="form-control validate" onchange="pn()">
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
				<br> <br> <br><label style="margin-top:-10%" for="email">Email:</label>
                    <input type="email"   name="email" id="email" placeholder="example@email.com"  class="form-control validate" onchange="em()" >
                </div>
                
				<div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password"   name="pass" id="pass" placeholder="Password" class="form-control validate" onchange="pwd()" >
				</div>
				<div class="form-group">
                    <label for="password">Confirm Password:</label>
                    <input type="password"   name="cpass" id="cpass" placeholder="ConfirmPassword" class="form-control validate" onchange="pwdChek()" >
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mob"  id="mob"   placeholder="Enter your Mobile Number" class="form-control validate" onchange="ph()" >
                </div>
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" class="form-control validate"    name="fileupload" accept="image/*" size="70" id="fileupload" />
                </div>
                <!-- <div class="form-group">
										<label>Aadhar Number:</label><br>
										<input type="text" placeholder="Enter your Aadhar Number"  name="aadhar" id="aadhar" class="form-control" onchange="ah()" required="">
								</div> -->
                <div class="form-group">
                                              <br><button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">submit</button>
                </div>
                </table>
	</fieldset>
            </form>
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
	<script type="text/javascript" src="js/main.js"> </script>
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
  function pl(){
     //alert();
   var val_username= /^[A-Za-z][A-Za-z0-9]{3,20}$/;
   $place= document.getElementById('pla').value;
 
 
   if(!val_username.test($username)){
      alert("Enter valid Place");
      document.getElementById('pla').value='';
      $("#name").focus();
      return false;
    }
 }
  </script>
</body>
</html>
<?php
session_destroy();
?>
