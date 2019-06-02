<?php
session_start();
include 'data/connect.php';
// if (!isset($_SESSION["Log_id"])){
//    header('location:index.php');
//      //echo $_SESSION['Full_Name'];
// }
        
        
        ?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title> Mansion Care Services </title>
      <!--meta tags -->
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
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <!-- <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons 
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets
      <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> -->
<!-- <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="agile-info-para"> -->
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
               <div>
            <form action="#" method="post" style="margin-left:40%">
                  <div class="row agile-wls-contact-mid">
                     
                     <div class="col-md-6 form-group contact-forms">
                        <h2>ADD SERVICE</h2>
								<br><br>	<b><label class="form-control"><b>Category:</b></label>
									
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
               <br><select class="form-control" name="cat" id="cat" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT * FROM tb_category where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['cat_id'] . '>' . $row['cat_name'] . '</option>';
            }
            ?>
              </select><br>
              <b><label class="form-control"><b>Service Name:</b></label><br>
                        <input type="text" class="form-control" placeholder="Service Name" name="sname" id="sname" required=""><br>
                     <!-- </div>
                     <div class="col-md-6 form-group contact-forms"> -->
                     <b><label class="form-control"><b>Service Charge:</b></label><br>
                        <br><input type="text" class="form-control" placeholder="Service Charge" name="schrg" id="schrg" required="">
                   
                     
                        <!-- <input type="email" class="form-control" placeholder="Email" required="">
                     </div>
                     <div class="col-md-6 form-group contact-forms">
                           <input type="email"  class="form-control" placeholder="Message" required="">
                        </div>
                  </div>--> 
                  <!-- <div class="form-group contact-forms">
                     <textarea class="form-control" rows="3" name="des" id="des" placeholder="Description.."></textarea>
                  </div>  -->
                  <div class="text-left click-subscribe">
                  <center><h1><button type="submit" name="submit" id="submit" class="btn contact-btn">ADD</button></h1></center>
                  </div>
                  </div>
               
               </form>
         </div>
            <!-- </div>
         </div>
      </section> -->
      <div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="user_home.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
        </body>
        </html>
        <?php
        if(isset($_POST['submit']))
        {
             $sname = $_POST['sname'];
             $cat=$_POST['cat'];
             $chrg=$_POST['schrg'];
             $query = "select * from `tb_service` where service_name='$sname'";
             //echo $query;
             $result = mysqli_query($con, $query);
            
                 if(mysqli_num_rows($result)>0 ){
                    echo"<script> alert('This Service is already exist!!! Please choose another one');window.location ='addservice.php';</script>";
                    }
                 
             else
             {
         
             $query1 = "INSERT INTO `tb_service`(`service_name`, `cat_id`,`service_charge`) VALUES ('$sname', '$cat','$chrg')";
            // echo $query1;
             $result2 = mysqli_query($con, $query1);
             $ser = mysqli_insert_id($con);;
        }
    }

        ?>