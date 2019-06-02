<?php
include 'header.php';
?>
<?php
include '../../dbcon.php';



if (isset($_POST['submit'])) {
   // $k = $_POST["Userid"];
    $c = $_POST["course"];
    $e = $_POST["institution"];
    $f = $_POST["percentage"];
    $j = $_FILES["certificate"]['name'];

    $id = $_SESSION['login_id'];


    echo $sql2 = "INSERT INTO `tbl_qualification`(`Userid`,`course`,`institution`,`percentage`,`certificate`, `status`) VALUES ('$id','$c','$e','$f','$j',1)";

    $res = mysqli_query($con, $sql2);
}
?>

<!DOCTYPE html>
<html>
<!--<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>-->
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
  height:30px;
  margin-top:10px;

}

.next {
  background-color: #4CAF50;
  color: white;
  margin-top:10px;
}

.round {
  border-radius: 50%;
}
</style>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

    <body style="background-repeat:no-repeat;">
    <!--<h2>Previous and Next Buttons</h2>-->



<!--<a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>-->
  


		<!--<div class="background-wrap" >-->
			<div class="inner">
            <div class="image-holder">
        <div class="item active" style="background-image: url(images/im2.jpg);">

               <!-- <img src="images\edit.jpg" alt="" style="height:600px;">-->

<center>
			<form action="#" method="post"  enctype= "multipart/form-data"style=" border:solid 2px #000;width:400px;">
            <div class="table-repsonsive">
            <table id="item_table" >
				<div style="display:inline-block;vertical-align:top;width:400px;background:;">

					<center><h2>Add Qualification</h2></center>


					<div class="control-group" id="addqual">

							<tr><td>		<label class="control-label"><b>Courses:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                 <td>   <select  name="courses" id="courses" style="width:250px;" required/>
                  <option value="-1">select</option>

            <?php
$q = mysqli_query($con, "SELECT couid,couname FROM tbl_courses where status=1");
//var_dump($q);

while ($row = mysqli_fetch_array($q)) {
    echo '<option value=' . $row['couid'] . '>' . $row['couname'] . '</option>';
}
?>
              </select></td></tr> 
									</div>
								</div>

                                                            <div class="control-group">
								<tr><td>	<label class="control-label"><b>Course:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                       <td>  <select name="course" id="course" style="width:250px;" required/>
                       <option value="-1">select</option></select></td></tr>
									</div>




					<div class="control-group">
								<tr><td>	<label class="control-label"><b>University:</b></label>
									<td><div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                       <select  name="university" id="university" style="width:250px;" required/>
                  <option value="-1">select</option>

            <?php
$q = mysqli_query($con, "SELECT uniid,university FROM tbl_university where status=1");
//var_dump($q);

while ($row = mysqli_fetch_array($q)) {
    echo '<option value=' . $row['uniid'] . '>' . $row['university'] . '</option>';
}
?>
              </select></td></tr>
									</div>
								</div>

                                    <div class="control-group">
								<tr><td>	<label class="control-label"><b>Institution:</b></label></td>
									<div class="controls">
                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                   <td> <select name="institution" id="institution" style="width:250px;" required/><option value="-1">select</option></select></td></tr>
									</div>
                                    <div class="form-wrapper">
                    <tr><td>Percentage:</td>
					<td>
						<input type="text"  name="percentage" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
                    <tr><td>Certificate:</td>
					<td>
						<input type="file"  name="certificate" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    


					<div style="margin-top:60px;margin-left:100px;width:300px;">
				<tr><td>	<input type="submit" name="submit" value="ADD" class="form-control"></td></tr>
               
					</div>
					</div>
                    </div> 
                 <!--<tr><td>   <a href="#" class="previous">&laquo;Previous</a></td>
<td><a href="#" class="next">Next &raquo;</a></td></tr>-->
                    </table>
                    
                </form>
</div>
			</div>
		</div>

		<script src="asset/js/jquery-3.3.1.min.js"></script>
		 <script>
			$(document).ready(function() {

                            $("#courses").on("change", function(){
                                 $courses = $('#courses').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$courses},
                                     url:'../../getcourse.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         $html = '<option value="">--SELECT COURSE--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }

                                         $("#course").html($html);
                                     }
                                 });
                            });
            });

		</script>
		<script>
		$(document).ready(function() {

                            $("#university").on("change", function(){
                                 $university = $('#university').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$university},
                                     url:'../../getinstitution.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         $html = '<option value="">--SELECT INSTITUTION--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }

                                         $("#institution").html($html);
                                     }
                                 });
                            });

		});

                            </script>

	</body>
	<?php
include 'footer.php';
?><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
