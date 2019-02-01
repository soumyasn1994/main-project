<?php

	include 'dbcon.php'
?>



<?php
if (isset($_POST['signup'])) {
    $cname = $_POST['cname'];
    $sql4="select * from country where cname='$cname'";
      $result1 = mysqli_query($con,$sql4);
    $row8 = mysqli_fetch_array($result1);
    if(count($row8)==0)
        {
        $sql1=mysqli_query($con,"INSERT INTO `country`(`cname`,`status`) VALUES ('$cname',1)");
       $p = mysqli_query($con,"select max(cid) as lgid from country");
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
        <center><font face="Comic Sans MS" size="5"><b>ADD COUNTRY</b></font></center><br>
        <center><form name="form1"  method="post" action="" onSubmit="return">
    
        
                <div class="col-md-4" style="margin-left: 300px;">
                    <input id="cname"   name="cname" type="text" placeholder="Enter country name">
                    <input type="submit" name="signup" value="ADD" id="signup">
                </div>  
        </form></center>
		<form ><br><br><br>
                <font face="Comic Sans MS" size="5"><b style="margin-left: 350px;">ADDED COUNTRIES</b></font>
                    <?php
                        $qry="select * from country order by cname";
                        $result=mysqli_query($con,$qry);
?>
 <?php
while($row=mysqli_fetch_array($result)){
?>
                                                <table style="margin-left: 450px;margin-top:20px;">
       <tr></tr>     <tr>
          <td></td>
          <td style="font-size: 20px;font-family:Georgia;"><?php echo $row['cname'];?></td>
     
        
      </tr>
      <?php
}
?>
    </table></form>
       
    </div>
     
   
</body>
</html>
