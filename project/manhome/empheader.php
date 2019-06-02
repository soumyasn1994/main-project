<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Panel</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="web1/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="web1/css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="web1/css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="web1/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="web1/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="web1/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <?php 
                $id=$_SESSION['Log_id'];
                include 'data/connect.php';
                $sql="Select * from tb_regsuser where Log_id='$id'";
                $sqle=mysqli_query($con,$sql);
                $sqlf=mysqli_fetch_array($sqle);
                ?>
                <h1>
                    <a href="staff.php">Welcome <?php echo $sqlf['first_name']; ?></a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg">
            <img src="<?php echo $sqlf['Photo'];?>" width="250px" height="170px" >
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        HOME
                    </a>
                </li>
                <li class="active">
                    <a href="profile.php">
                        <i class="fas fa-th-large"></i>
                        Profile
                    </a>
                </li>
                <li class="active">
                    <a href="empleav.php">
                        <i class="fas fa-th-large"></i>
                        Apply For leave
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Bank
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="ewal.php">Add Bank</a>
                        </li>
                        <li>
                            <a href="emywallet.php">View My Wallet</a>
                        </li>
                        <!-- <li>
                            <a href="plumbing.php">Plumbing</a>
                        </li>
                        <li>
                            <a href="maintainempo.php">Home Maintainence</a>
                        </li>
                        <li>
                            <a href="repair.php">Repairing</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                
                    <a href="jobaprov.php">
                        <i class="fas fa-chart-pie"></i>
                        Job Requests
                    </a>
                </li>
                <li>
                
                    <a href="empsersearch.php">
                        <i class="fas fa-chart-pie"></i>
                        Book for a service
                    </a>
                </li>
                <!-- <li>
                    <a href="viewuser.php">
                        <i class="fas fa-th"></i>
                        Users
                    </a>
                </li> -->
                <li>
                    <a href="logout.php">
                        <i class="fas fa-th"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
