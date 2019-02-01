<?php

 
	include("dbcon.php");


if (isset($_POST['signup'])) {
    
    $dname = $_POST['dname'];
    $sname = $_POST['sname'];


    
    
  
 $sql4=mysqli_query($con,"select * from district where dname='$dname'");
      $row8 = mysqli_fetch_array($sql4);
    if(count($row8)==0){
      
        $sql1=mysqli_query($con,"INSERT INTO `district`( `dname`,`sid`,`status`) VALUES ('$dname',$sname,1)");
        
        $p = mysqli_query($con,"select max(did) as lgid from district");
        $row = mysqli_fetch_array($p);
        $x = $row['lgid'];
        }
        
    }

?>

<html>
<head>
<title></title>
                 
</head> 
 <body background="download.jpg">
        <h1>AJAX Program </h1>
        <a href="country.php">Add country</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="state.php">Add state</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="district.php">Add district</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="mainprgm.php">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;
    
               
   
    <div>
        <center><font face="Comic Sans MS" size="5"><b>ADD DISTRICT</b></font></center><br>
      

<form name="form1" method="post" action="" onSubmit="return">
   <div>
    <label> State</label>  
            <div>
                 
                        <select name="sname" id="sname">
                        <option value="-1">select</option> 
                     <?php
            $q = mysqli_query($con, "SELECT sid,sname FROM state where status=1");
            

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['sid'] . '>' . $row['sname'] . '</option>';
            }
            ?></select>

            </div>
        </div>
               <div>
            <label for="name" style="color:black">State</label>  
            <div class="col-md-4">
                <input id="dname" name="dname" type="text" placeholder="Enter State Name">
<input type="submit" name="signup" value="ADD" >
            </div>
        </div>
       
</form>
                                            
         <center> <font face="Comic Sans MS" size="5"><b>ADDED DISTRICT</b></font></center>
         <form >
                                                
                                                 <?php

      $qry="select * from district";
$result=mysqli_query($con,$qry);

?>
 <?php
while($row=mysqli_fetch_array($result)){
?>
                                                <table style="margin-left: 450px;margin-top:20px;" ><form action="#" method="post">
       <tr></tr>     <tr>
          <td></td>
          <td style="font-size: 20px;font-family:Georgia;"><?php echo $row['dname'];?></td>
     
        
      </tr>
      <?php
}
?>
    </table></form>
    </div>
        
     
  
</body>
</html>
