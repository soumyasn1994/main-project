<?php
include 'header.php';
?>
          
        <!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 5px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h4></h4>

<table>
  
  <tr>
    <th>Employment Name</th>
    <th>Postoffice</th>
    <th>Taluk</th>
    <th>District</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Main Branch</th>
    
  </tr>
                     
                     <?php
include "../../dbcon.php";
$results=mysqli_query($con,"SELECT * FROM  addexchange as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid ");
?>
<body>

	<tr>
		<!-- <td>Employment name </td>
		<td>postname</td>
		<td>Taluk Name</td>
		<td>District</td>
		<td>Phoneno</td>
		<td>Email</td>
		<td>Mainbranch </td> -->
		<!--<td>Officer</td>-->
		
	
	</tr>
<?php
while($row=mysqli_fetch_array($results))
{
?>
<tr>
	<td><?php echo $row["Employmentname"]; ?></td>
	<td><?php echo $row["postname"]; ?></td>
	<td><?php echo $row["talukname"]; ?></td>
	<td><?php echo $row["districtname"]; ?></td>
	<td><?php echo $row["Phoneno"]; ?></td>
	<td><?php echo $row["Email"]; ?></td>
	<td><?php echo $row["Mainbranch"]; ?></td>
	<!--<td><?php echo $row["Officer"]; ?></td>-->
	
	
</tr>
<?php
}
?>
</table>

</body>
<?php
include 'footer.php';
?>
</html>
