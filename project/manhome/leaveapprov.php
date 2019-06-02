<!DOCTYPE html>
<html>
<head>
<style>
#employee {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#employee td, #employee th {
  border: 1px solid #ddd;
  padding: 8px;
}

#employee tr:nth-child(even){background-color: #f2f2f2;}

#employee tr:hover {background-color: #ddd;}

#employee th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content=" Mansion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
       
   

</head>
<body>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <b> <a style="color:blue;" class="navbar-brand" href="adminhome.php">MANSION CARE</a></b>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="margin-top:1%;">
            <li><b><button><a href="adminhome.php" class="page-scroll">Home</a></button></b></li>
			<!-- <li><a href="#tf-admin" class="page-scroll">Admin P2evilages</a></li>
			<li><a href="#tf-about" class="page-scroll">About</a></li>
			<li><a href="#tf-services" class="page-scroll">Services</a> -->
			<li>&nbsp;&nbsp;<b><button><a href="logout.php" class="page-scroll">Logout</a></button></b></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
       
    <br><br><br><b><h1 align="center" style="color:red;">LEAVE APPROVALS</h1></b>
        
    <table id="employee">
<tr>
<th>Full Name</th>
<th>Mobile</th>
<th>Category</th>
<th>Leave Date</th>
<th>Leave Reason</th>
<th>Action</th>
</tr>

<?php
include 'data/connect.php';
$res1 = mysqli_query($con,"select * from tb_leave");
if(mysqli_num_rows($res1))
{

while($row = mysqli_fetch_array($res1))
{
  $s=$row['Log_id'];
 $sql="select * from tb_regsuser join tb_leave on tb_regsuser.Log_id=tb_leave.Log_id join tb_login on  tb_login.Log_id=tb_regsuser.Log_id join tb_empserv on tb_empserv.Log_id=tb_regsuser.Log_id join tb_category on tb_category.cat_id=tb_empserv.cat_id where tb_regsuser.Log_id='$s' ";
$esql=mysqli_query($con,$sql);
while($rowk=mysqli_fetch_array($esql)){
  if($row['status']==1)
	{
 		$btn='UnBlock';
	$up = "Approved";
	}
	else
	{
		$btn='Block';


	$up = "Rejected";
}

    ?>
    
    <?php if($rowk['Username']!="admin@gmail.com")
 {
    //echo  $rowk["first_name"];
     ?>

<td><?php echo $rowk['first_name']." ". $rowk['last_name'] ?></td>
<td><?php echo $rowk['Mobile'] ?></td>
<td><?php echo $rowk['cat_name'] ?></td>
<td><?php echo $rowk['ldate'] ?></td>
<td><?php echo $rowk['reason'] ?></td>

<td>
<form action="data/aprov.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['Log_id'] ?>">
<button><?php echo $up; ?></button></a></td>
<!-- <input type="submit" id="submit" name="submit" value="REJECT"> -->
</form>
</td>
</tr>
<?php
}

}

}
}

?>

</table></center>
<div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="user_home.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
</body>
</html>
