<?php
 session_start(); 
 
// session_start();
// if (!isset($_SESSION['Log_id'])){
//     header('location:../../index.php');

//}
 $uid=$_SESSION['Log_id'];
// $sid=$_GET['wp'];
 $cdate=date("Y-m-d");
 include '../user/connect.php'; 
include('../../components/top.php'); ?>
<?php// include('components/navs/head.php'); ?>
<!-- <//?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mansion";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}  -->

 <script>
	function dateChek() 
		{														
			if(((document.getElementById("fdate").value) - (document.getElementById("tdate").value))<0)
			{	
				alert("***Date Mismatch*** Date choose After ToDate");
                        .value="";
                                cpass.focus();
			  
					return false;
                										
			}
			else
			{
                return true;	
			}
		}
	</script> 
    <script src="../../js/jquery.min.js"></script>
<html>
    <body>
    <div class="topnav">
  <a class="active" href="../../user_home.php">Home</a></div>

  <!-- <a href="viewempo.php">Staffs</a>
  <a href="empaprov.php">Approvals</a>
  <a href="viewuser.php">Users</a></div> -->
<style>
.card {
-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
border: 0;
}
.card {
position: relative;
display: flex;
-ms-flex-direction: column;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #ffffffb0;
background-clip: border-box;
border: 1px solid rgba(0,0,0,.125);
border-radius: .25rem;
}
.card-body {
-ms-flex: 1 1 auto;
flex: 1 1 auto;
padding: 1.25rem;
}

.card, .navbar-nav {
display: -ms-flexbox;
}
*, ::after, ::before {
box-sizing: border-box;
}

.mb-4, .my-4 {
margin-bottom: 1.5rem!important;
}
/* @media (min-width: 768px) */
.col-md-4 {
-ms-flex: 0 0 33.333333%;
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.offset-4 {
margin-left: 33.333333%;
}
.input[type=text], select{
width:100%;
padding:12px 20px;
margin:8px 0;
display:inline-block;
border:1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
.chrg{
    background-color: pink;
}
.topnav {

background-color: #333;
height:50px;
}
td{
  text-align: center;
}
.topnav a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 12px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #ddd;
color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
}
</style>
    <div><br><br><br></div>
    
    <?php
 $sql1 = "SELECT * FROM tb_service";
$result1 = $con->query($sql1);
$row1 = $result1->fetch_array();
$sql = "SELECT * FROM tb_service";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    ?><form id="emp" action="useremposearch.php" method="post">
    <div class ="col-md-4 offset-4">
    <div class="card">
    <div class="card-body">
    <label for ="service provider"><b>Service provider: </b></label>
	<td><select id="wp" name="wp">
    
       
              <?php while($row = $result->fetch_assoc()) {   
                    ?>  
            
         <option value="<?php echo $row1['service_id']; ?>"><?php echo $row1['service_name']; ?> </option>
        <?php while($row = $result->fetch_assoc()) {
            ?>
        <option value="<?php echo $row['service_id']; ?>" required><?php echo $row['service_name']; ?> </option>
    <?php }?></select><?php 
} 
}
$con->close();
?>
<div class="chrg"><b>Service Charge<b></div>
<span id="fd" name="fd"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<!-- <span id="hd" name="hd"></span> -->

</div>
<div class="card-body">
        <h4> Booking Date: </h4>
        <br><label for ="service provider">From Date: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <label for ="service provider">To Date: </label>
        <br> <input type="text" id="fdate" name="fdate" placeholder="<?php echo $cdate ?>" required>
           
        &nbsp;&nbsp;<input type="text" id="tdate" name="tdate" placeholder="<?php echo $cdate ?>" required onchange="dateCheck()">
        </div>
                <!-- <div class="card-body">
                <label for ="schdeule"> Schedule:</label>
	<td><select name="tod" id="tod">
     <option value="1">Full Day</option>
     <option value="2">Fore Noon</option>
     <option value="3">After Noon</option>
     </select>
</div> -->
	
<div class="card-body">
<label for ="service provider">Prefered Employee type:</label>
	<td><select name="toe">
     <option value="Male">Male</option>
     <option value="Female">Female</option>
     <option value="Others">Others</option>
     </select>
</div>
<div class="card-body">
<!-- <input type="hidden" name="empid" value="> -->
                  <left><input type="submit" value="Submit request" id="book" name="bookdate"></left>
                 <!-- <div class="card-body"> -->
        <right><input type="Reset" name="reset" id="reset" value="Reset"></right></div>
    </div>
    </div>
</div>
</form>

<script>
			$(document).ready(function() {
                            $("#wp").on("change", function(){
                                 $wp = $('#wp').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$wp},
                                     url:'../../getpay.php',
                                     success:function(data){
                                         data = JSON.parse(data);                                          
                                         $("#fd").html("<b>For One Hour: </b>"+data[0][0]);
                                        //  $("#hd").html("<b>Half Day: </b>"+data[0][1]);                                      
                                       
                                     }
                                 });
                            });
                            
                            
                            
                            
			}); 

    </script>
    <script src="../user/js/jquery-ui.js"></script>
	<script>
//         $(document).ready(function(){
// $.datepicker.setDefaults({
//     dateFormat:'yy-mm-dd',
//     startDate:"1d",
//    // minDate: "1d",
//     yearRange: "2019:2019",
//     changeMonth:true,
// 	changeYear:true
// });
//         });
// 		$( function() {
//             $("#fdate").datepicker();
//             $("#tdate").datepicker();
				
//             });
//             $("#bookdate").click(function({
//                 var fdate = $("#fdate").val();
//                 var tdate = $("#fdate").val();
//                 if(fdate != '' && tdate != '')
//                 {
//                     $.ajax({
//                         url:"useremposearch.php",
//                         method:"POST",
//                         // data:{fdate:fdate,tdate:tdate},
//                         // success:function(data)
//                         // {
//                         //     $('#emp').html(data);
//                         // }
//                     });
//                 }
//                 else{
//                         alert("please enter a date");
//                 }
//             });
$( function() {
    		$( "#fdate" ).datepicker({
                // $( "#tdate" ).datepicker({
				dateFormat: 'yy-mm-dd',
				yearRange: "2019:2019",
                defaultDate:new Date('Y','m','d'),
                //startDate:"1d",
                minDate: "0d", 
				//maxDate: "200d"
				changeMonth:true,
				changeYear:true
            });
             
            $( "#tdate" ).datepicker({
                dateFormat: 'yy-mm-dd',
				yearRange: "2019:2019",
                defaultDate:new Date('Y','m','d'),
                //startDate:"1d"
                minDate: "0d",
				//maxDate: defaultDate + "3m",
				changeMonth:true,
                changeYear:true
            });
        });
            $( '#book' ).on("change", function(){
                var fdate=$('#fdate').val();
                var tdate = $('#fdate').val();
                if(fdate != '' && tdate != '')
                {
                    $.ajax({
                        url:"useremposearch.php",
                        method:"POST",
                        // data:{fdate:fdate,tdate:tdate},
                        // success:function(data)
                        // {
                        //     $('#emp').html(data);
                        // }
                    });
                }
                else{
                        alert("please enter a date");
                }
            });
  	
  		
	</script>
   <div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="../../user_home.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
</body>
</html>