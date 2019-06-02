<html>
<link href="web1/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

</html>
<?php
session_start();
if (!isset($_SESSION["Log_id"])) {
	header('location:index.php');
}

// print_r($_POST);
include 'data/connect.php';
//getting id from url
//$id = $_GET['Log_id'];
$idus = $_SESSION["Log_id"];
// $sid=$_POST['sid'];
//$id=$_POST['empid'];
$sid = $_POST['wp'];
$date = $_POST['sdate'];
$schid = $_POST['tod'];
$gen = $_POST['toe'];
//$en=$_POST['fd'];
//fetch category id
$sqlFindCategory = "SELECT * FROM `tb_service` WHERE `service_id` = '$sid'";
$category = mysqli_query($con, $sqlFindCategory);
$categoryIds = mysqli_fetch_array($category);
$categoryId = $categoryIds['cat_id'];
//echo $amts=mysqli_fetch_array($category);
// $amts=$categoryIds['service_charge'];
// $tamts=$amts+$amts*10/100;

//get employees based on category id AND join registration table
$sqlFindEmployees = "SELECT * FROM  tb_regsuser WHERE  tb_regsuser.Log_id='$idus'";
$employees = mysqli_query($con, $sqlFindEmployees);
$empList = mysqli_fetch_array($employees);
// $sqlsche="SELECT * FROM  tb_schedule WHERE  schtype='$schid'";
// $she = mysqli_query($con, $sqlsche);
// $scid = mysqli_fetch_array($she);
//  $schid=$scid['schid'];
$pid = $empList['Pid'];
 $ry = "select * from `tb_place` JOIN tb_district ON tb_place.Did = tb_district.Did  where Pid='$pid'";
$ryx = mysqli_query($con, $ry);
$ryf = mysqli_fetch_array($ryx);
$dist_id = $ryf['Did'];
$dist = $ryf['District'];

?>
<html>

<head>
	<h2><a href="staff.php">Back to home</a></h2>
	<title>Find an Employee</title>
</head>

<body><b>
		<h1>Find an Employee in your Locality<b></h1>
		<table width="50%" cellpadding="1" cellspacing="1">
		</table>
		<div class="row">
			<?php
			if ($schid = "1") {
				 $sql11 = "select DISTINCT(eid) from tb_bookings where date ='$date' and schid='1'  or date ='$date' and schid='2'  or date ='$date' and schid='3' ";
			} elseif ($schid = "2") {
				$sql11 = "select DISTINCT(eid) from tb_bookings where date ='$date' and schid='1'  or date ='$date' and schid='2' ";
			} elseif ($schid = "3") {
				$sql11 = "select DISTINCT(eid) from tb_bookings where date ='$date' and schid='1'  or date ='$date' and schid='3' ";
			}

			//echo $sql11;
			//return;
			$ryxq = mysqli_query($con, $sql11);
			$data = mysqli_fetch_all($ryxq);

			$empko = "select * from tb_regsuser as r join tb_empserv as e on r.Log_id=e.Log_id where r.Gender='$gen' and e.cat_id='$categoryId' and r.Log_id!='$idus'";
			$exemko = mysqli_query($con, $empko);
			
			while ($row = mysqli_fetch_assoc($exemko)) {
				echo $lid = $row['Log_id'];
				// print_r($row);
				$flag = false;
				foreach ($data as $d) {
					if ($d[0] == $row['Log_id']) {
						$flag = true;
					}
				}

				if (!$flag) {
					$res[] = $row;
					$lids = $row['Log_id'];




					$qs = "SELECT * FROM  tb_regsuser Join tb_empserv on tb_empserv.Log_id = tb_regsuser.Log_id JOIN tb_category 
 ON tb_empserv.cat_id = tb_category.cat_id JOIN tb_place ON tb_regsuser.Pid = tb_place.Pid 
 JOIN tb_district ON tb_district.Did = tb_place.Did  
  join tb_login on tb_login.Log_id=tb_regsuser.Log_id WHERE tb_empserv.cat_id AND tb_regsuser.Pid = '$pid'
   AND tb_regsuser.Log_id= '$lids' ";

					$record = mysqli_query($con, $qs);
					//echo $ro = mysqli_num_rows($record);

					if (mysqli_num_rows($record) <= 0) {
						?>
							<table width="100%" border="10" cellpadding="10" cellspacing="10">
								<div style="opacity:0.7;background-color:red;no-repeat;">
									<tr>
										<th>No Employes here!!!!!!!!!!!!!!!!!!</th>
					</tr>
					</table>
						
									<?php

								}

								//return;
								else if (mysqli_num_rows($record) > 0) {
									//$record= mysqli_query($con,$qs);
									?>
									</tr>
									<?php
									//$record= mysqli_query($con,$qs);

									while ($employee = mysqli_fetch_array($record)) {
										?>



<div class="col-md-3 pb-5" style="border:0px solid; padding:20px; background: #f5f5f5;margin: 10px; box-shadow: 0px 3px 5px rgba(100,100,100,.3)">

												

													<?php echo '<center><img src="' . $employee['Photo'] . '" height="10%" width="20%"><center>'; ?></td>


													<?php echo $employee['first_name'] ?>

													<?php echo $employee['last_name'] ?>
													</br>
													<?php echo $employee['Place'] ?>
													</br>
													<?php echo $employee['District'] ?>
													</br><?php echo $employee['Mobile'] ?>
													</br><?php echo $employee['cat_name'] ?>
													<!-- </br><?php echo $tamts ?> -->
													<form action="books.php" method="get">
														<input type="hidden" name="empid" value="<?php echo $employee['Log_id'] ?>">
														<input type="hidden" name="sdate" value="<?php echo $date ?>">
														<input type="hidden" name="tod" value="<?php echo $schid ?>">
														<input type="hidden" name="sid" value="<?php echo $sid ?>">
														<input type="hidden" name="en" value="<?php echo $en ?>">
													<?php
												}
												//}
												?>
													<input type="submit" id="submit" name="submit" value="Book Now">
												</form>
												</div>
											<?php
										}
										?>
									
								<?php
								}
					}
					?>
</div>

				</table>
				<h1>
		<p><?php echo $dist; ?> Region Employess....</h1></p>
		<table width="50%" cellpadding="10" cellspacing="10">
		</table>
				<!-- <h1></h1>
				<table width="150%" cellpadding="10" cellspacing="10"> -->
					
				
				<div class="row">
				<?php
				
				//echo $qs2="SELECT * From tb_regsuser as t,tb_place as p,tb_login as l, tb_district as d,tb_category as c,tb_empserv as e where t.pid!=$pid and d.did=$dist_id and p.did='$dist_id' and t.pid=p.pid  and c.cat_id='$categoryId' and l.roleid='2' and l.Log_id=t.Log_id and e.Log_id=t.Log_id
				//";
				//$sql="select * from";
				if ($schid = "1") {
					$sql11 = "select DISTINCT(eid) from tb_bookings where date ='$date' and schid='1' and eid!='$idus' or date ='$date' and schid='2' and eid!='$idus' or date ='$date' and schid='3' and eid!='$idus'";
				} elseif ($schid = "2") {
					$sql11 = "select DISTINCT(eid) from tb_bookings where date ='$date' and schid='1' and eid!='$idus'or date ='$date' and schid='2' and eid!='$idus'";
				} elseif ($schid = "3") {
					$sql11 = "select DISTINCT(eid) from tb_bookings where date ='$date' and schid='1' and eid!='$idus' or date ='$date' and schid='3' and eid!='$idus'";
				}

				$sql11;
				//return;
				$ryxq = mysqli_query($con, $sql11);
				$data = mysqli_fetch_all($ryxq);

				$empko = "select * from tb_regsuser as r join tb_empserv as e on r.Log_id=e.Log_id where r.Gender='$gen' and e.cat_id='$categoryId'";
				$exemko = mysqli_query($con, $empko);
				while ($row = mysqli_fetch_assoc($exemko)) {
					$lid = $row['Log_id'];
					// print_r($row);
					$flag = false;
					foreach ($data as $d) {
						if ($d[0] == $row['Log_id']) {
							$flag = true;
						}
					}

					if (!$flag) {
						$res[] = $row;
						$lids = $row['Log_id'];


						$qs2 = "SELECT * FROM  tb_regsuser Join tb_empserv on tb_empserv.Log_id = tb_regsuser.Log_id JOIN tb_category 
	ON tb_empserv.cat_id = tb_category.cat_id JOIN tb_place ON tb_regsuser.Pid = tb_place.Pid 
	JOIN tb_district ON tb_district.Did = tb_place.Did  
	 join tb_login on tb_login.Log_id=tb_regsuser.Log_id WHERE tb_empserv.cat_id AND tb_regsuser.Pid != '$pid' and tb_place.Did='$dist_id'
	  AND tb_regsuser.Log_id= '$lids' ";

						//"SELECT * FROM `tb_empserv` JOIN tb_regsuser ON tb_empserv.Log_id = tb_regsuser.Log_id JOIN tb_place ON tb_regsuser.Pid = tb_place.Pid JOIN tb_place ON tb_district.Did = tb_place.Did WHERE tb_empserv.cat_id AND tb_regsuser.Pid != '$pid' AND tb_place.Did ='$dist_id' AND tb_empserv.cat_id = '$categoryId'";
						$records = mysqli_query($con, $qs2);
						//}
						//session_start();
						if (mysqli_num_rows($records) == 0) {
							?>
<body>
							<table width="100%" border="10" cellpadding="10" cellspacing="10">
								<div style="opacity:0.7;background-color:red;">
									<tr>
										<th>No Employes here!!!!!!!!!!!!!!!!!!</th>
						<?php
					} elseif (mysqli_num_rows($records) > 0) {
						?>



							<?php
							while ($employ = mysqli_fetch_assoc($records)) {
								?>
									<div class="col-md-3 pb-5" style="border:0px solid; padding:20px; background: #f5f5f5;margin: 10px; box-shadow: 0px 3px 5px rgba(100,100,100,.3)">
										<?php echo '<center><img src="' . $employ['Photo'] . '" height="10%" width="20%"><center>'; ?></td>


										<?php echo $employ['first_name'] ?>

										<?php echo $employ['last_name'] ?>
										<br />
										<?php echo $employ['Place'] ?>
										<br />
										<?php echo $employ['District'] ?>
										</br><?php echo $employ['Mobile'] ?>
										</br><?php echo $employ['cat_name'] ?>
										<!-- </br><?php echo $tamts ?> -->
										<form action="books.php" method="get">
											<input type="hidden" name="empid" value="<?php echo $employ['Log_id'] ?>">
											<input type="hidden" name="sdate" value="<?php echo $date ?>">
											<input type="hidden" name="tod" value="<?php echo $schid ?>">
											<input type="hidden" name="en" value="<?php echo $en ?>">
											<input type="submit" id="submit" name="submit" value="Book Now">
										</form>
									</div>
								<?php
							}
							?>

						<?php
					}
				}
			}
			?>
			</div>
			</body>

			</html>