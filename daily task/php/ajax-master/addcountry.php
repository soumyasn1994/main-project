<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
    $cname=$_POST['country'];
  
    $sql1=mysqli_query($con,"INSERT INTO `country`(`cname`,`status`) VALUES ('$cname',1)");
  
}
?>
<html>
    <head>
        
    </head>
    <body>
        <form action="#" method="POST">
            <table>
                <tr>
                    <td>Country Name</td>
                  <td> <input type="text" name="country" placeholder="Enter Country"></td>
                   </tr>
                   <tr>
                       <td><input type="submit" name="submit" value="ADD"</td>
                   </tr>
                   
        </form>
        </table>
    </body>
</html>

