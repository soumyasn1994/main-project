<?php
include 'dbcon.php';
?>
<html>
    <head>
        
    </head>
    <body background="download.jpg">
        <h1>AJAX Program </h1>
        <a href="country.php">Add country</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="state.php">Add state</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="district.php">Add district</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="mainprgm.php">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <form action="#" method="POST">
            
            <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter Name"></div>
            <div>
                <label> Country</label>
                      <select  name="cname" />
                    <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT cid,cname FROM country where status=1");
            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['cid'] . '>' . $row['cname'] . '</option>';
            }
            ?>
                   
                    </select></div>
            <div>
		<label ><b>State</b></label>
                <select name="sname"/><option value="-1">select</option></select>
								
            </div><div>
									<label><b>District:</b></label>
								
                                                                          
									<select  name="dname"/>
                        <option value="-1">select</option></select>
            </div>   
							
                
           
        </form>
         <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="js/sregistration.js"></script>
    <script>
			$(document).ready(function() {

                            $("#cname").on("change", function(){
                                 $cname= $('#cname').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$cname},
                                     url:'getstate.php',
                                     success:function(data){
                                         $data = JSON.parse(data);                                         
                                         $html = '<option value="">--SELECT STATE--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#sname").html($html);
                                     }
                                 });
                            });
                            
                            
                            $("#sname").on("change", function(){
                                 $state = $('#sname').val();
                                 //alert($taluk);
                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$state},
                                     url:'getdistrict.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         
                                         
                                         $html = '<option value="">--SELECT DISTRICT--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#dname").html($html);
                                     }
                                 });
                            });
                            
			});
                              
                        
                        
		</script>
			
                                          
    </body>
</html>

