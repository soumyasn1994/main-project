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
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="agile-info-para">
            <center> <form action="#" method="post">
                  <div class="row agile-wls-contact-mid">
                     
                     <div class="col-md-6 form-group contact-forms">
                        
									<b><label class="form-control"><b>Category:</b></label><br>
									
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
              </select>
         </div>
         
         <div class="col-md-6 form-group contact-forms">
                        <br><input type="text" class="form-control" placeholder="Service Name" name="sname" id="sname" required="">
                     </div>
                     <div class="col-md-6 form-group contact-forms">
                     <b><label class="form-control"><b>Service Charge:</b></label><br>
                        <br><input type="text" class="form-control" placeholder="Service Charge" name="schrg" id="schrg" required="">
                     </div>
                     
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
                     <h1><button type="submit" name="submit" id="submit" class="btn contact-btn">ADD</button><h3>
                  </div>
               </form></center>
            </div>
         </div>
      </section>
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