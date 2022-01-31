<?php
session_start();
include("conn.php");

if(!isset($_SESSION['id'])){
	header("location: index.php");
	die();
}

$name=$_SESSION['name'];
$id=$_SESSION['id'];

$sql="select * from tyfyt_user where id='".$id."'";

$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
if($num>0){
    if($row = mysqli_fetch_array($result)){
        $name=$row['name'];
        $email=$row['email'];
        $kyc_status=$row['kyc_status'];
        $user_name=$row['user_name'];
        $join_date=$row['join_date'];  
    }
}


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

            <div class="container mt-5">
                <div class="row flex-lg-nowrap">
                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <div class="row">
                                                <div class="col-12 col-sm-auto mb-3">
                                                    <div class="mx-auto" style="width: 140px;">
                                                        <div class="d-flex justify-content-center align-items-center rounded"
                                                            style="height: 140px; background-color: rgb(233, 236, 239);">
                                                            <span
                                                                style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo strtoupper($name);?></h4>
                                                        
                                                        <div class="text-muted"><small>Last seen 2 hours ago</small>
                                                        </div>
                                                        <div class="mt-2">
                                                            <button class="btn btn-primary" type="button">
                                                                <i class="fa fa-fw fa-camera"></i>
                                                                <span>Change Photo</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="text-center text-sm-right">
                                                        <?php if($kyc_status==1){
                                                            ?>
                                                            <span class="badge badge-primary">Verified</span>
                                                            <?php
                                                        }
                                                        if($kyc_status==0){
                                                            ?>
                                                            <span class="badge badge-danger">Not Verified</span>
                                                            <?php
                                                        }

                                                        ?>
                                                        <div class="text-muted"><small>Joined <?php echo $join_date; ?></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="" class="active nav-link">Settings</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active">
                                                    <form class="form" novalidate="">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Full Name</label>
                                                                            <input class="form-control" type="text"
                                                                                name="name"
                                                                                value="<?php echo $name; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Username</label>
                                                                            <input class="form-control" type="text"
                                                                                name="username"
                                                                                value="<?php echo $user_name; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input class="form-control" type="text"
                                                                            value="<?php echo $email; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                              
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6 mb-3">
                                                                <div class="mb-2"><b>Change Password</b></div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Current Password</label>
                                                                            <input class="form-control" type="password"
                                                                                placeholder="••••••">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>New Password</label>
                                                                            <input class="form-control" type="password"
                                                                                placeholder="••••••">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Confirm <span
                                                                                    class="d-none d-xl-inline">Password</span></label>
                                                                            <input class="form-control" type="password"
                                                                                placeholder="••••••">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col d-flex justify-content-end">
                                                                <button class="btn btn-primary" type="submit">Save
                                                                    Changes</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 mb-3">
                                
                                <?php if($kyc_status==0){
                                    ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title font-weight-bold">KYC Your Account </h6>
                                            <p class="card-text">You have to verified your account to certified user.</p>
                                            <a href="#" class="btn btn-info">Complete eKYC Now</a>
                                        </div>
                                    </div>
                                    <?php
                                }else{
                                    ?>      
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title font-weight-bold">KYC Detail </h6>
                                            <div class="mx-auto" style="width: 140px;">
                                                <div class="d-flex justify-content-center align-items-center rounded"
                                                    style="height: 140px; background-color: rgb(233, 236, 239);">
                                                    <span
                                                        style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                                </div>
                                            </div>
                                            <br>
                                            <p class="card-text"><label>Adhaar Number :</label></p>
                                            <p class="card-text"><label>Full Name :</label></p>
                                            <p class="card-text"><label>Date of Birth :</label></p>
                                            <p class="card-text"><label>Address :</label></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                 
                            </div>
                        </div>

                    </div>
                </div>
            </div>

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