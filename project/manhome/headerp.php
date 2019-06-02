<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
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
                <h1>
                    <a href="adminhome.php">Admin panel</a>
                </h1>
                <span>M</span>
            </div>
            <!-- <div class="profile-bg"></div> -->
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="adminhome.php">
                        <i class="fas fa-th-large"></i>
                        HOME
                    </a>
                </li>
                <li class="active">
                    <a href="viewempo.php">
                        <i class="fas fa-th-large"></i>
                        Staffs
                    </a>
                </li>
                <li class="active">
                    <a href="leaveapprov.php">
                        <i class="fas fa-th-large"></i>
                        Leave Approvals
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Services
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="cleanempo.php">Cleaning</a>
                        </li>
                        <li>
                            <a href="painting.php">Painting</a>
                        </li>
                        <li>
                            <a href="plumbing.php">Plumbing</a>
                        </li>
                        <li>
                            <a href="maintainempo.php">Home Maintainence</a>
                        </li>
                        <li>
                            <a href="repair.php">Repairing</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="empaprov.php">
                        <i class="fas fa-chart-pie"></i>
                        Approvals
                    </a>
                </li>
                <li>
                    <a href="viewuser.php">
                        <i class="fas fa-th"></i>
                        Users
                    </a>
                </li>
                <li>
                    <a href="addservice.php">
                        <i class="fas fa-th"></i>
                        Add Service
                    </a>
                </li>
                <li>
                    <a href="addcategory.php">
                        <i class="fas fa-th"></i>
                        Add Category
                    </a>
                </li>
                <!-- <li>
                    <a href="logout.php">
                        <i class="fas fa-th"></i>
                        Logout
                    </a>
                </li> -->
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
