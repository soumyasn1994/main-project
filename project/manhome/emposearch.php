<?php
 session_start();
// if (!isset($_SESSION["Log_id"])) {
// 	header('location:../../index.php');
// }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    margin: -10px -50px 0px -10px;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:green;
  color: white;
}
.right {
  background-color: #4AF50;
  color: white;
  padding-left:1190px
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="staff.php">Home</a>
  
</div>


</body>
</html>
<?php
include 'data/connect.php';

$idus = $_SESSION["Log_id"];
$sid = $_POST['wp'];
$fdate = $_POST['fdate'];
$tdate = $_POST['tdate'];
//$schid = $_POST['tod'];
$gen = $_POST['toe'];
//find category id based on service selected
$sqlFindCategory = "SELECT * FROM `tb_service` WHERE `service_id` = '$sid'";
$category = mysqli_query($con, $sqlFindCategory);
$categoryIds = mysqli_fetch_array($category);
//category id
$categoryId = $categoryIds['cat_id'];

//get current user place id
$sqlFindEmployees = "SELECT * FROM  tb_regsuser WHERE  tb_regsuser.Log_id='$idus'";
$employees = mysqli_query($con, $sqlFindEmployees);
$empList = mysqli_fetch_array($employees);

// print_r($empList);

//place id
$pid = $empList['Pid'];
$ry = "select * from `tb_place` JOIN tb_district ON tb_place.Did = tb_district.Did  where Pid='$pid'";
$ryx = mysqli_query($con, $ry);
$ryf = mysqli_fetch_array($ryx);
//district name and district id
$dist_id = $ryf['Did'];
$dist = $ryf['District'];


//queries based on full day or half day
// if ($schid = "1") {
// 	 $sql11 = "select DISTINCT(eid) from tb_bookings where fdate between '".$fdate."' and '".$tdate."' or todate between '".$fdate."' and '".$tdate."' and schid='1'  or fdate between '".$fdate."' and '".$tdate."' or todate between '".$fdate."' and '".$tdate."' and schid='2'  or fdate between '".$fdate."' and '".$tdate."' or todate between '".$fdate."' and '".$tdate."' and schid='3' ";
	
// 		} elseif ($schid = "2")
// 		 { 
// 		$sql11 = "select DISTINCT(eid) from tb_bookings where fdate between '".$fdate."' and '".$tdate."' or todate between '".$fdate."' and '".$tdate."' and schid='1'  or fdate between '".$fdate."' and '".$tdate."' or todate between '".$fdate."' and '".$tdate."' and schid='2' ";
//  } elseif 
// ($schid = "3") 
// {
//  	$sql11 = "select DISTINCT(eid) from tb_bookings where fdate between '".$fdate."' and '".$tdate."' or todate between '".$fdate."' and '".$tdate."' and schid='1'  or fdate between '".$fdate."' and '".$tdate."' or todate between '".$fdate."' and '".$tdate."' and schid='3' ";
//  }
//return;
//booked employee ids on that day
$sql11 = "select DISTINCT(eid) from tb_bookings where fdate between '".$fdate."' and '".$tdate."' or todate between '".$fdate."' and '".$tdate."'";
$ryxq = mysqli_query($con, $sql11);
$bookedEmps = mysqli_fetch_all($ryxq);

///employees on leave
$qeu="select Log_id from tb_leave where ldate between '".$fdate."' and '".$tdate."'";
$eque=mysqli_query($con,$qeu);
$empOnLeave = mysqli_fetch_all($eque);


//all employees under the cartegory and same place
 $empko = "select * from tb_regsuser as r join tb_empserv as e on r.Log_id=e.Log_id left join tb_place on r.Pid = tb_place.Pid left join tb_category on tb_category.cat_id = e.cat_id where r.Gender='$gen' and e.cat_id='$categoryId' and r.Log_id!='$idus' and r.Pid = '$pid'";
$exemko = mysqli_query($con, $empko);

// $allEmployees = mysqli_fetch_all($exemko);

// print_r($allEmployees);

$searchResult = [];

while ($row = mysqli_fetch_assoc($exemko)) {
	 $lid = $row['Log_id'];
	// print_r($row);
	$flag = false;
	foreach ($bookedEmps as $d) {
		if ($d[0] == $row['Log_id']) {
			$flag = true;
		}
	}
	foreach ($empOnLeave as $l) {
		if ($l[0] == $row['Log_id']) {
			$flag = true;
		}
	}

	if (!$flag) {
		$searchResult[] = $row;
	}
}


//all employees under the cartegory same district
$empko = "select * from tb_regsuser as r join tb_empserv as e on r.Log_id=e.Log_id left join tb_place on r.Pid = tb_place.Pid left join tb_category on tb_category.cat_id = e.cat_id where r.Gender='$gen' and e.cat_id='$categoryId' and r.Log_id!='$idus' and tb_place.Did = '$dist_id' and tb_place.Pid!='$pid'";
$exemko = mysqli_query($con, $empko);

$searchResult2 = [];
while ($row = mysqli_fetch_assoc($exemko)) {
	$lid = $row['Log_id'];
	// print_r($row);
	$flag = false;
	foreach ($bookedEmps as $d) {
		if ($d[0] == $row['Log_id']) {
			$flag = true;
		}
	}

	if (!$flag) {
		$searchResult2[] = $row;
	}
}

//
?>



<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Employee Search</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<style>
		h3::after {
			content: '';
			position: absolute;
			width: 10px;
			height: 55px;
			background: #ff1d12;
			/* bottom: 0; */
			left: 180px;
		}

		.card {
			height: 370px;
		}

		.card img {
			height: 120px;
			width: auto;
		}
		.chrg{
    background-color: pink;
}

td{
  text-align: center;
}


	</style>
</head>

<body>

<!-- <div class="topnav">
  <a class="active" href="../user/user_home.php">Home</a></div> -->

  <!-- <a href="viewempo.php">Back</a> -->
  <!-- <a href="empaprov.php">Approvals</a>
  <a href="viewuser.php">Users</a></div>  -->



	<div class="container">
	<!-- <h5><a href="../user/user_home.php">Back to home</a></h5> -->
		<h3 class="py-5">Find an Employee in your Locality</h3>
		<div class="row">
			<?php
			if (sizeof($searchResult)  <= 0) {
				echo '<div class="col">
					<div class="alert alert-danger">
						No Employees Here
					</div>
				</div>';
			}
			//start foreach
			foreach ($searchResult as $employee) {
				?>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body text-center">
							<?php echo '<img src="' . $employee['Photo'] . '" height="10%" width="20%">'; ?>
							<br />
							<?php echo $employee['first_name'] ?>
							<?php echo $employee['last_name'] ?>
							<br />
							<?php echo $employee['Place'] ?>
							<br />
							<?php echo $dist ?>
							<br /><?php echo $employee['Mobile'] ?>
							<br /><?php echo $employee['cat_name'] ?>
							<!-- </br><?php echo $tamts ?> -->
							<form action="books.php" method="get">
								<input type="hidden" name="empid" value="<?php echo $employee['Log_id'] ?>">
								<input type="hidden" name="fdate" value="<?php echo $fdate ?>">
								<input type="hidden" name="tdate" value="<?php echo $tdate ?>">
								<!-- <input type="hidden" name="tod" value="<//?php echo $schid ?>"> -->
								<input type="hidden" name="sid" value="<?php echo $sid ?>">
								<input type="hidden" name="en" value="<?php echo $en ?>">
								<input type="submit" id="submit" name="submit" value="Book Now" class="btn btn-primary">
							</form>
						</div>
					</div>
				</div>
				<!-- //end foreach -->
			<?php
		}
		?>
		</div>


		<h3 class="py-5"><?php echo $dist; ?> Region Employess....</h3>
		<div class="row">
			<?php

			if (sizeof($searchResult2) <= 0) {
				echo '<div class="col">
					<div class="alert alert-danger">
						No Employees Here
					</div>
				</div>';
			}
			//start foreach
			foreach ($searchResult2 as $employee) {
				?>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body text-center">
							<?php echo '<img src="' . $employee['Photo'] . '" height="10%" width="20%">'; ?>
							<br />
							<?php echo $employee['first_name'] ?>
							<?php echo $employee['last_name'] ?>
							<br />
							<?php echo $employee['Place'] ?>
							<br />
							<?php echo $dist ?>
							<br /><?php echo $employee['Mobile'] ?>
							<br /><?php echo $employee['cat_name'] ?>
							<!-- </br><?php echo $tamts ?> -->
							<form action="books.php" method="get">
								<input type="hidden" name="empid" value="<?php echo $employee['Log_id'] ?>">
								<input type="hidden" name="fdate" value="<?php echo $fdate ?>">
								<input type="hidden" name="tdate" value="<?php echo $tdate ?>">
								<!-- <input type="hidden" name="tod" value="<//?php echo $schid ?>"> -->
								<input type="hidden" name="sid" value="<?php echo $sid ?>">
								<input type="hidden" name="en" value="<?php echo $en ?>">
								<input type="submit" id="submit" name="submit" value="Book Now" class="btn btn-primary">
							</form>
						</div>
					</div>
				</div>
				<!-- //end foreach -->
			<?php
		}
		?>
		</div>
	</div>
	<div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="staff.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
</body>

</html>