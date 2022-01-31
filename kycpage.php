<?php
session_start();
include("conn.php");

if(!isset($_SESSION['id'])){
	header("location: index.php");
	die();
}

$name=$_SESSION['name'];
$id=$_SESSION['id'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mannat Themes">
    <meta name="keyword" content="">

    <title>TYFYT</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/plugins/morris-chart/morris.css" rel="stylesheet">
    <!-- Theme Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/slidebars.min.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="sticky-header" style="background-color: #f3f4f5;">
    <section>
        <!-- body content start-->
        <div class="body-content">
            <!-- header section start-->
            <div class="header-section">
                <!--logo and logo icon start-->
                <div class="logo">
                    <a href="index.html">
                        <span class="logo-img">
                            <!-- <img src="assets/images/logo_sm.png" alt="" height="26"> -->
                        </span>
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">Tyfyt</span>
                    </a>
                </div>

                <!--toggle button start-->
                
                <!--toggle button end-->

                <!--mega menu start-->
                <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                    <ul class="nav navbar-nav">
                        <!-- Classic dropdown -->
                        <li class="dropdown">
                            <a href="javascript:;" data-toggle="dropdown" class=""> English <i
                                    class="mdi mdi-chevron-down"></i> </a>
                            <ul role="menu" class="dropdown-menu language-switch">
                                <li>
                                    <a tabindex="-1" href="javascript:;"> Hindi </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Classic list -->
                       
                    </ul>
                </div>
                <!--mega menu end-->

                <div class="notification-wrap">
                    <!--right notification start-->
                    <div class="right-notification">
                        <ul class="notification-menu">
                            <!-- <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-bell-outline"></i>
                                        <span class="badge badge-success">4</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                          <div class="drop-title">Notifications</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-star"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Jane A. Seward</h6>
                                                        <span class="mail-desc">Iwon meddle and...</span>
                                                    </div>
                                                </a>                                              
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> 
                                                <strong>See all notifications</strong> 
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->

                            <!--  <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-email-outline"></i>
                                        <span class="badge badge-danger">9</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                            <div class="drop-title">New Messages 5</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img">
                                                         <img src="assets/images/users/avatar-2.jpg" alt="user" class="rounded-circle"> 
                                                         <span class="profile-status online pull-right"></span>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Cassie T. Bishop</h6>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                        <span class="time">9:30 AM</span> 
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> <strong>See all notifications</strong> </a>
                                        </li>
                                    </ul>
                                </li> -->

                            <li>
                                <a href="javascript:;" data-toggle="dropdown">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-menu">
                                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-account-circle m-r-5 text-muted"></i> <?php echo $name;?></a>
                                    <a class="dropdown-item" href="logout.php"><i
                                            class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>

                            </li>

                            <li>
                                <div class="sb-toggle-right">
                                    <i class="mdi mdi-apps"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--right notification end-->
                </div>
            </div>
            <!-- header section end-->


            <!--footer section start-->
            <!-- <footer class="footer">
                2022 &copy; TYFYT.
            </footer> -->
            <!--footer section end-->
        </div>
        <!--end body content-->
    </section>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-migrate.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/slidebars.min.js"></script>

    <!--app js-->
    <script src="assets/js/jquery.app.js"></script>
</body>

</html>