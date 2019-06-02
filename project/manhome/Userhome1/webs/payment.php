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
    margin: -5px -50px 0px -10px;
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
  <a class="active" href="../../staff.php">Home</a>
  
</div>
<br><br><br>


<?php
session_start();

 $id=$_SESSION['Log_id'];
include '../user/connect.php';
 $a=$_GET['empid'];
  $s=$_GET['sid'];
  //$sc=$_GET['scid'];
 $bid=$_GET['bid'];
 $cdate=date("Y-m-d");
 if($sc = "1"){
  $sql11="select full_day from tb_service where service_id='$s' ";
  $ryxq=mysqli_query($con,$sql11);
$fet=mysqli_fetch_array($ryxq);
$amt=$fet['full_day'];
}elseif($sc = "2" || $sc = "3" ){ 
	$sql11="select half_day from tb_service where service_id='$s'";

$ryxq=mysqli_query($con,$sql11);
$fet=mysqli_fetch_array($ryxq);
$amt=$fet['half_day'];
}
//$admin=$amt*10/100;
//$empo=$amt-$admin;
//echo $amt;
 $sqll = "INSERT INTO tb_payment (Log_id,bid,status,Amount,cu_date)
VALUES ('$id', '$bid','0','$amt','$cdate')";
$exepa=mysqli_query($con,$sqll);
 $qs="select Amount from tb_payment where Log_id='$id' and cu_date='$cdate' and status='0'";

$exea=mysqli_query($con,$qs);
// if($row=mysqli_num_rows($exea)>0)
//  {
$tamounts=0;
while($fetc=mysqli_fetch_array($exea)){
    $amount=$fetc['Amount'];

 
}
	 $sdif="SELECT DATEDIFF(todate, fdate) as diff from tb_bookings where bid='$bid'";
	 $qdif=mysqli_query($con,$sdif);
	 $fdif=mysqli_fetch_array($qdif);
	  $differ=$fdif['diff'];
	 //return;
$tamounts=$tamounts+$amount;
$tamount=$tamounts*$differ;
//echo $tamount=$tamount+$amt;
 
//}

                   ?>
                   



                  
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<script>

function fun1(){
	cid=$("#cpid").val();
	data={
		id:cid
	}
	$.ajax({
        url: "couponCheck.php",
        type: "post",
        data: data ,
        success: function (response) {
					amt=$("#amt").html()
					if(response!="invalid"){
						amt=parseInt(amt);
						response=parseInt(response);
						$("#amt").html(amt-response);
					}
					
        }
  });
}
</script>

<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/stylep.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		<h1>Make Your Payment</h1>
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
					 <div class="sap_tabs"> 
							 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;"> 
								 <!-- <div class="pay-tabs"> -->
									<!-- <h2>Select Payment Method</h2>  -->
									  <ul class="resp-tabs-list">
										 <!-- <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li>   -->
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab">
												<!-- <span><label class="pic2"> -->

											<!-- </label>Debit Card</span></li> -->
										  <div class="clear"></div>
									  </ul>	
								
								 <div class="resp-tabs-container">
								
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											<form action="userpay.php" method="post" >
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" name="cname" id="cname" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" name="num" id="num" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="2020" min="1" />	
																</li>
																
															</ul>
													</div>
												<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" name="cvv" id="cvv" required="">
                          </div>
                          <div class="tab-form-left user-form">
                          <br><h5>COUPON CARD NUMBER</h5>													
														<input type="text" name="cpid" id="cpid"><input type=button value="Apply" onclick=fun1()><br>
                          <br><h3>TOTAL AMOUNT												
														<div id="amt" name="amt"> <?php echo $tamount ?></div><br></h3>	
                          </div>
													<div class="clear"></div>
                          <input type="hidden" name="sid" id="sid" value="<?php echo $s ?>">
                          <input type="hidden" name="emid" id="emid" value="<?php echo $a ?>">
                          <input type="hidden" name="bid" id="bid" value="<?php echo $bid ?>">
													<input type="hidden" name="scid" id="scid" value="<?php echo $sc ?>">
													<input type="hidden" name="amt" id="amt" value="<?php echo $tamount ?>">
                          <br>	<input type="submit" name="pay" id="pay" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>	
									</div>
								</div>	
							</div>
						</div>	

		</div>
		<!-- <p class="footer">Copyright © 2016 Payment Form Widget. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p> -->
	</div>
</body>
</html>
		<div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="staff.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
    </body>

   <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
