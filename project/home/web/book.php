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
            <h2 class="text-secondary">Apply Now</h2><br><br>
            <form id="employee" name="employee" action="data/empregistration.php" class="oh-autoval-form mt-5 mb-5 " method="post" onsubmit="return">
			<div class="form-group">
										<label for="dob">Date of Birth:</label>
										<input class="form-control" type="text" placeholder="Select your Birth Date" value="1986-10-01" name="dob" required="" id="dob" readonly>
								</div>
 				    </form>
        </div>
		</div>
</div>

</body>


</html>
<?php include('components/end.php'); ?>
