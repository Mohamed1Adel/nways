<?php
    include "controller/login.php";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-vertical-style="overlay" data-icon-overlay="open" style="--primary-rgb: 193, 142, 19;">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> تسجيل الدخول </title>
    <meta name="Description" content="Smarts Admin Panel V2.0.0">
    <meta name="Author" content="Smarts ElWady">
	
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">
    <script src="assets/js/authentication-main.js"></script>
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/styles.min.css?t=<?php echo $tm;?>" rel="stylesheet" >
    <link href="assets/css/icons.min.css" rel="stylesheet" >
	<link href="assets/css/custom.css?t=<?php echo $tm;?>" rel="stylesheet" >


</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card">
                    <div class="card-body p-5">
						<a class="d-flex justify-content-center mb-3">
							<img src="assets/images/bright-logo.jpg" alt="logo" width="350px" class="desktop-logo">
							<!-- <img src="assets/images/bright-logo.jpg" alt="logo" width="200px" class="desktop-dark"> -->
						</a>
						<form id="data-form" class="row gy-3" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                            <div class="col-xl-12">
                                <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="اسم المستخدم">
                            </div>
                            <div class="col-xl-12 mb-2">
                                <div class="input-group">
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="كلمة المرور">
                                    <button class="btn btn-light" type="button" onclick="createpassword('password',this)" id="button-addon2" style="border-radius: 0.35rem; border-top-right-radius: 0;border-bottom-right-radius: 0;"><i class="ri-eye-off-line align-middle"></i></button>
                                </div>
                            </div>
                            <div class="col-xl-12 d-grid mt-2">
                                <button type="submit" class="btn btn-lg btn-primary">تسجيل الدخول</button>
                            </div>
                            
                            <div id="alert" class="alert alert-solid-danger justify-content-center" style="text-align:center; display:none">
                                يرجى التأكد من البيانات .. أو الإتصال بمسئول النظام
                            </div>                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/js/custom-switcher.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/show-password.js"></script>

</body>

</html>