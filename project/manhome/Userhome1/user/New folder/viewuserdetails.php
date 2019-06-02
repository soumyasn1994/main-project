
<?php
include '../../dbcon.php';
// $results=mysqli_query($con,"SELECT * FROM  userreg as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid ");
session_start();
$id = $_SESSION['login_id'];
  
?>
<?php
include 'header.php';
?>
<?php

 $qry="select * from `userrregistration` where Userid='$id'";
 
//echo $qry;

      $a = mysqli_query($con, $qry) or die(mysqli_error($con));
     while( $rest=mysqli_fetch_array($a))
     {
     $Name=$rest['Name'];
      $DOB=$rest['DOB'];
      $Gender=$rest['Gender'];
     $Photo=$rest['Photo'];
      $Phoneno=$rest['Phoneno'];
	  $Place=$rest['Place'];
    //   $Place=$rest['Place'];
    //   $District=$rest['districtname'];
     
    //   $Talukname=$rest['talukname'];
    //   $postname=$rest['postname'];
    //   $disability=$rest['disid'];
     $Housename=$rest['Housename'];
       $Acco=$rest['Accno'];
      $Regdate=$rest['Regdate'];
    //  $Caste=$rest['Caste'];
    //   $Religion=$rest['Religionname'];
      // $IDProof=$rest['IDProof'];
     
    


?>

  </header>
  <style>
.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #000000;
  background-color: #CCCCCC;
  border: 1px solid #000000;
  border-radius: 10px;
 
}

.button:hover {background-color:#FF3333; color:white;}

.button:active {
  background-color: #FF3333;
  
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<form action="edituserprofile.php" method="post" style="margin-top:10px;">
<center> 

      

          
           <img src="../../reg/<?php echo $Photo;?>" />
      
<div style="align">

      <label style="display:inline-block;"><font color="#000000">Name</font></label>
	  <input type="text" disabled value="<?php echo $rest['Name'] ?>"></center>
    </tr>
</div>
  <tr>
       <th><center>DOB</center></th>
      <th><center><input type="text" style="background-color:WHITE;color:#333;border:none;" disabled value="<?php echo $rest['DOB'] ?>"></center></th>
  </tr>
  <tr>
       <th><center>Gender</center></th>
      <th><center><input type="text" style="background-color:WHITE;color:#333;border:none;" disabled value="<?php echo $rest['Gender'] ?>"></center></th>
  </tr>

  <tr>
  <tr>
           
           <th><center>Phone No:</center></th>
           <th><center><input type="text" style="background-color:WHITE;color:#333;border:none;" disabled value="<?php echo $rest['Phoneno'] ?>"></center></th>
       </tr>
       <tr>
        <th><center>Place</center></th>
      <th><center><input type="text" style="background-color:WHITE;color:#333;border:none;"disabled value="<?php echo $rest['Place'] ?>"></center></th>
  </tr>
  <!-- <tr>
       <th><center>District</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['districtname'] ?>"></center></th>
  </tr>
  
  <tr>
       <th><center>talukname</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['talukname'] ?>"></center></th>
  </tr> -->
  <!-- <tr>
       <th><center>postname</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['postname'] ?>"></center></th>
  </tr> -->
 
  <!-- <tr>
       <th><center>Disability</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['disid'] ?>"></center></th>
  </tr> -->
  <tr>
       <th><center>Housename</center></th>
      <th><center><input type="text" style="background-color:WHITE;color:#333;border:none;"disabled value="<?php echo $rest['Housename'] ?>"></center></th>
  </tr>
  <tr>
       <th><center>Accno</center></th>
      <th><center><input type="text" style="background-color:WHITE;color:#333;border:none;"disabled value="<?php echo $rest['Accno'] ?>"></center></th>
  </tr>
  <tr>
       <th><center>Regdate</center></th>
      <th><center><input type="text" style="background-color:WHITE;color:#333;border:none;"disabled value="<?php echo $rest['Regdate'] ?>"></center></th>
  </tr><br><br>
  <center>
   <td> <a href="../edituserprofile.php?id=<?php echo $rest[0]?>"><input type="submit" name="submit" value="EDIT"></a></td>
            </center>
</form>
       
        <?php
     }
     ?>
	<?php
include 'footer.php';
?>
	
  <!-- <tr>
       <th><center>Caste</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Caste'] ?>"></center></th>
  </tr>
  <tr>
       <th><center>Religion</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Religionname'] ?>"></center></th>
  </tr> -->
  
</div>
<!--            
      <th>Email</th>
      <th><?php echo $Email;?></th>
  </tr>
   <tr>
       <th>District</th>
      <th><?php echo $districtname;?></th>
  </tr>   
  <tr>
       <th>Taluk</th>
      <th><?php echo $talukname;?></th>
  </tr>

  <tr>
       <th>Postoffice</th>
      <th><?php echo $postname;?></th>
  </tr>  -->
  
  

 
        <br>
        <br>    

	