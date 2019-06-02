<div class="control-group" id="addqual">

							<tr><td>		<label class="control-label"><b>First Name:</b></label>
									<div class="controls">
                                    <input type="text" id="fn" value="<?php echo "$fn" ?>" name="fn" class="form-control" style="width:250px;" onchange="fn()" required=""></td></tr>
						<i class="zmdi zmdi-lock"></i></td></tr> 
									</div>
								</div>

                                                            <div class="control-group">
								<tr><td>	<label class="control-label"><b>Last Name:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                       <td>  <input type="text" id="ln"  value="<?php echo "$ln" ?>" name="ln" class="form-control" style="width:250px;" onchange="fn()" required=""></td></tr>
						<i class="zmdi zmdi-lock"></i></td></tr>
									</div>




					<div class="control-group">
								<tr><td>	<label class="control-label"><b>House Name:</b></label>
									<td><div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                                            <input type="text" name="eh"  id="eh" value="<?php echo "$eh" ?>" style="width:250px;" class="form-control" onchange="hn()"></td></tr>
									</div>
								</div>

                                    <div class="control-group">
								<tr><td>	<label class="control-label"><b>Place:</b></label></td>
									<div class="controls">
                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                   <td> 	<input id="pl" name="pl" value="<?php echo "$pl" ?>" style="width:250px;" class="form-control" onchange="pl()" readonly></td></tr>
									</div>
                                    <div class="form-wrapper">
                    <tr><td><label class="control-label">Pincode:</td>
					<td>
                    <input type="text" value="<?php echo "$pin" ?>" name="pin" id="pin" class="form-control" onchange="pn()" style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<!-- <div class="form-wrapper">
                    <tr><td>Certificate:</td>
					<td>
						<input type="file"  name="certificate" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                    </div> -->
                    <div class="control-group">
								<tr><td>	<label class="control-label"><b>District:</b></label>
									<td><div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                       <select  name="ed" id="ed" style="width:250px;" required/>
                  <option value="select"><?php echo "$ed" ?></option>

            <?php
$q = mysqli_query($con, "SELECT * FROM tbl_district");
//var_dump($q);

while ($row = mysqli_fetch_array($q)) {
    echo '<option value=' . $row['Did'] . '>' . $row['District'] . '</option>';
}
?>
              </select></td></tr>
									</div>
								</div>
                                <div class="form-wrapper">
                    <tr><td><label class="control-label">Email:</td>
					<td>
                    <input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="form-control" onchange="em()" required="" style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i></td></tr>
                    </div>
                    <div class="control-group">
                    <tr><td><label class="control-label">Photo:</label><br>
										<img src="<?php echo "../../$pho" ?>" width="150" height="150">
										<input type="file"  id ="fileupload" name="fileupload" class="form-control" ></td></tr>
                                </div>
                                <div class="form-wrapper">
                    <tr><td><label class="control-label">Mobile:</td>
					<td>
                    <input id="mob" type="text" value="<?php echo "$mob" ?>" name="mob" class="form-control" onchange="mb()" required="" style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i></td></tr>
                    </div>
                    <div class="form-wrapper">
                    <tr><td><label class="control-label">Aadhar Number:</td>
					<td>
                    <input type="text" value="<?php echo "$ahr" ?>" name="ahr" id="ahr" class="form-control"onchange="ah()" required="" style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i></td></tr>
                    </div>


					<div style="margin-top:60px;margin-left:100px;width:300px;">
				<tr><td>	<input type="submit" name="submit" value="SUBMIT" class="form-control"></td></tr>
               
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
		
	</body>
	<?php
include 'footer.php';
?>