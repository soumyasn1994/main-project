<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    margin: -10px -50px -50px -10px;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:green;
  color: white;
}
.right {
  background-color: #4AF50;
  color: white;
  padding-left:1190px
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="../../user_home.php">Home</a>
  
</div>


</body>
</html>
<?php
include '../user/connect.php';
// if(!(isset($_SESSION['username'])))
// {
// header('location:index.php');

// }
if (isset($_POST['submit1'])) {
    $a = $_POST['sid'];
    //echo $a;
    //$sql1="select * from tb_rating,tb_regsuser where tb_regsuser.Log_id=tb_rating.Log_id and tb_regsuser.Log_id=$a";
    $sql1 = "select * from tb_regsuser as r join tb_empserv as e on r.Log_id=e.Log_id join tb_login as l on l.Log_id=r.Log_id left join tb_place on r.Pid = tb_place.Pid left join tb_district on tb_place.Did = tb_district.Did left join tb_category on tb_category.cat_id = e.cat_id left join tb_rating on r.Log_id=tb_rating.Log_id where r.Log_id='$a'";
    //return;
    $res = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_array($res);

    $p = $row1['first_name'];
    //echo $p;
    $sql = "select count(`rate`) AS num,sum(`rate`) AS sm from `tb_rating` where `eid`='$a' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $c = $row["num"];
    $s = $row["sm"];
    if ($c == 0) {
        echo "<script>if(confirm('not rated yet!!!!')){document.location.href='rating.php'}else{document.location.href='rating.php'};</script>";
    } else {
        $v = $s / $c;
        //echo $c;
        //echo $s;
        //echo $v;
    }
}
?>
<html>

<head>
    <link href="../../web1/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        .topnav {
            background-color: #333;
            height: 50px;

        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            color: white;
            margin-top: 1.2%;

        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ddd;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 50;
            color: red;
        }

        .disp {
            width: 20%;
            height: 20%;
            border-radius: 5px;
            border-color: black;
            background-color: green;
        }

        .dropdown:hover .dropdown-content {
            color: black;
            display: block;
        }

        #bgVideo {
            position: absolute;
            top: 0;
            left: 0px;
            border: 0;
            width: 120%;
            z-index: -2;
            background-size: cover;
        }
    </style>

</head>

<body>
    <div class="topnav">
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6"><br>
                <div class="card">
                    <div class="card-header">
                    <h1 class="text-center">
                        <b>Employee Details</b>
                    </h1>
                    </div>
                    <div class="card-body">
                   <br> <form name="form2" action="#" method="post">
                    <img src="../../<?php echo $row1['Photo'] ?>" style="width:100px; height:100px; margin-left:20%;"><br>
                    <input style="margin-top:5px;margin-left:15%;border: 2px dashed #D1C7AC;
	width: 230px;" type="text" name="Name" value="<?php echo $row1['first_name'] . " " . $row1['first_name'] ?>"><br>

                    <input style="margin-top:5px;margin-left:15%;border: 2px dashed #D1C7AC;
	width: 230px;" type="text" name="Place" value="<?php echo $row1['Place'] ?>"><br>

                    <input style="margin-top:5px;margin-left:15%;border: 2px dashed #D1C7AC;
	width: 230px;" type="text" name="District" value="<?php echo $row1['District'] ?>"><br>

                    <input style="margin-top:5px;margin-left:15%;border: 2px dashed #D1C7AC;
	width: 230px;" type="text" name="Category" value="<?php echo $row1['cat_name'] ?>"><br>

                    <!-- <input style="margin-top:5px;margin-left:15%;border: 2px dashed #D1C7AC;
	width: 230px;" type="text" name="Cat" value="<?php echo $row1['category'] ?>"><br>
	
	<input style="margin-top:5px;margin-left:15%;border: 2px dashed #D1C7AC;
	width: 230px;" type="text" name="Language" value="<?php echo $row1['language'] ?>"><br> -->
                </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6"><br>
                <div class="card">
                    <div class="card-header">
                    <h1 class="text-center">
                        <b>Rating</b>
                    </h1>
                    </div>
                    <div class="card-body">
                                        <form name="review" action="#" method="post">
                        <?php
                        if ($v == 5) { ?>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <br><br>
                            <input type="text" name="hel" value="9/10" readonly style="background-color:transparent;">

                        <?php
                    } elseif ($v == 4) {
                        ?><img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <br><br>
                            <input type="button" class="btn btn-primary" name="ra" value="7/10" readonly>

                        <?php
                    } elseif ($v == 3) {
                        ?><img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img>
                            <br><br>
                            <input type="text" name="ra" value="6/10" readonly style="background-color:transparent;">
                        <?php
                    } elseif ($v == 2) {
                        ?><img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img></img>
                            <br><br>
                            <input type="text" name="ra" value="5/10" readonly style="background-color:transparent;">
                        <?php
                    } elseif ($v == 1) {
                        ?><img src="../images1/Star.png" style="height:30px;"></img>
                            <img src="../images1/Star.png" style="height:30px;"></img></img>
                            <br><br>
                            <input type="text" name="ra" value="4/10" readonly style="background-color:transparent;">
                        <?php
                    } else {
                        ?><img src="../images1/Star.png" style="height:30px;"></img>
                            <br><br>
                            <input type="" class="form-control" name="ra" value="3/10" readonly>

                        <?php
                    }

                    ?>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="user_home.php">MANSION CARE</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
</body>

</html>