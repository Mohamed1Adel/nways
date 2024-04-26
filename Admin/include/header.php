<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-menu-styles="dark" data-toggled="close" style="--primary-rgb: 225, 9, 10;">

<head>
	
<?php

require_once('include/function.php');
session_start();

if (!is_user()) {
   redirect('login');
}

$general = mysqli_fetch_array(mysqli_query($conectDB, "SELECT * FROM general_setting WHERE id='1'"));
$user = mysqli_fetch_array(mysqli_query($conectDB, "SELECT * FROM users WHERE username='".$_SESSION['username']."'"));

?>



    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $general['sitename'];?></title>
    <meta name="Description" content="Smarts Admin Panel V2.0.0">
    <meta name="Author" content="Smarts ElWady">
    
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/js/main.js"></script>
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet" >
    <link href="assets/css/styles.min.css" rel="stylesheet" >
    <link href="assets/css/icons.css" rel="stylesheet" >
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet" > 
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="assets/libs/sweetalert2/sweetalert2.min.css">

	<link href="assets/css/custom.css?t=<?php echo $tm;?>" rel="stylesheet" >
    <script src="assets/libs/jquery/jquery.min.js"></script>

    <style>
    .sidemenu-toggle{
        display:none !important

        }
    </style>
</head>

<body>

    <input type="hidden" id="DB_username" value="<?php echo $user['username']; ?>">
    <input type="hidden" id="DB_sid" value="<?php echo $user['sid']; ?>">   


    <div class="page">
         <!-- app-header -->
         <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <!-- <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index" class="header-logo">
                                <img src="assets/images/brand-logos/desktop-logo.png?t=<?php echo $tm;?>" alt="logo" class="desktop-logo">
                                <img src="assets/images/brand-logos/toggle-logo.png?t=<?php echo $tm;?>" alt="logo" class="toggle-logo">
                                <img src="assets/images/brand-logos/desktop-dark.png?t=<?php echo $tm;?>" alt="logo" class="desktop-dark">
                                <img src="assets/images/brand-logos/toggle-dark.png?t=<?php echo $tm;?>" alt="logo" class="toggle-dark">
                            </a>
                        </div>
                    </div> -->
                    <!-- End::header-element -->


                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                            <i class="bx bx-moon header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                            <i class="bx bx-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->


                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                            <i class="bx bx-bell header-link-icon"></i>
                            <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary" id="notification-icon-badge">0</span>
                        </a> -->
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">الإشعارات</p>
                                    <span class="badge bg-secondary-transparent" id="notifiation-data">0 جديدة</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">

                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">عرض الكل</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">لا توجد إشعارات</h6>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- End::header-element -->


                    <!-- Start::header-element -->
                    <!-- <div class="header-element header-fullscreen">
                        <a onclick="openFullscreen();" href="#" class="header-link">
                            <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                            <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i>
                        </a>
                    </div> -->
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-sm-2 me-0">
                                    <img src="assets/images/users/<?php echo $user['id']; ?>.jpg?t=<?php echo time(); ?>" alt="img" width="62" height="42" class="rounded-circle">
                                </div>
                                <div class="d-sm-block d-none">
                                    <p class="fw-semibold mb-0 lh-1"><? echo $user['fullname']; ?></p>
                                    <span class="op-7 fw-normal d-block fs-11"><? echo $user['jobtitle']; ?></span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                            <!-- <li><a class="dropdown-item d-flex" href="profile"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>الملف الشخصي</a></li> -->
                            <li><a class="dropdown-item d-flex" href="logout"><i class="ti ti-logout fs-18 me-2 op-7"></i>Logout</a></li>
                        </ul>
                    </div>  
                    <!-- End::header-element -->
                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
