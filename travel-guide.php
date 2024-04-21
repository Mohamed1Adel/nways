<!doctype html>
<html lang="en">
<head>
    <title>Travel Guide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    
    <!-- Google Fonts -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->	
            <link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">
    

    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
        
    <!-- Custom Stylesheets -->	
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
            
                <!--======== SEARCH-OVERLAY =========-->       
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">
                
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="float-left" type="text" placeholder="Search.." name="search">
                                <button class="float-left" type="submit"><i class="fa fa-search"></i></button>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    <div class="col-12 col-md-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="login-1.html"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                <li class="list-inline-item"><a href="registration-1.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                <li class="list-inline-item">
                                    <form>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">EN</option>
                                                        <option value="">UR</option>
                                                        <option value="">FR</option>
                                                        <option value="">IT</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        
        <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
                <a href="#" class="navbar-brand py-1 m-0"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
                <div class="header-search d-xl-none my-auto ms-auto py-1">
                    <a href="#" class="search-button" onclick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                </div>
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>
        
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="navbar-nav ms-auto navbar-search-link">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<span><i class="fa fa-angle-down "></i></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="index.html" class="dropdown-item">Main Homepage</a></li>
                                <li><a class="dropdown-item" href="flight-homepage.html">Flight Homepage</a></li>
                                <li><a class="dropdown-item" href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li><a class="dropdown-item" href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a class="dropdown-item" href="cruise-homepage.html">Cruise Homepage</a></li>
                                <li><a class="dropdown-item" href="car-homepage.html">Car Homepage</a></li>
                                <li><a class="dropdown-item" href="landing-page.html">Landing Page</a></li>
                                <li><a class="dropdown-item" href="travel-agency-homepage.html">Travel Agency Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">Flight<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="flight-homepage.html">Flight Homepage</a></li>
                                <li><a class="dropdown-item" href="flight-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="flight-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">Hotel<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li><a class="dropdown-item" href="hotel-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="hotel-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">Tour<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a class="dropdown-item" href="tour-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="tour-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">Cruise<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="cruise-homepage.html">Cruise Homepage</a></li>
                                <li><a class="dropdown-item" href="cruise-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="cruise-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">Car<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="car-homepage.html">Car Homepage</a></li>
                                <li><a class="dropdown-item" href="car-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="car-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown">Header</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-header-style-1.html" class="dropdown-item">Header Style 1</a></li>
                                        <li><a href="feature-header-style-2.html" class="dropdown-item">Header Style 2</a></li>
                                        <li><a href="feature-header-style-3.html" class="dropdown-item">Header Style 3</a></li>
                                        <li><a href="feature-header-style-4.html" class="dropdown-item">Header Style 4</a></li>
                                        <li><a href="feature-header-style-5.html" class="dropdown-item">Header Style 5</a></li>
                                        <li><a href="feature-header-style-6.html" class="dropdown-item">Header Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown">Page Title</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-page-title-style-1.html" class="dropdown-item">Page Title Style 1</a></li>
                                        <li><a href="feature-page-title-style-2.html" class="dropdown-item">Page Title Style 2</a></li>
                                        <li><a href="feature-page-title-style-3.html" class="dropdown-item">Page Title Style 3</a></li>
                                        <li><a href="feature-page-title-style-4.html" class="dropdown-item">Page Title Style 4</a></li>
                                        <li><a href="feature-page-title-style-5.html" class="dropdown-item">Page Title Style 5</a></li>
                                        <li><a href="feature-page-title-style-6.html" class="dropdown-item">Page Title Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown">Footer</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-footer-style-1.html" class="dropdown-item">Footer Style 1</a></li>
                                        <li><a href="feature-footer-style-2.html" class="dropdown-item">Footer Style 2</a></li>
                                        <li><a href="feature-footer-style-3.html" class="dropdown-item">Footer Style 3</a></li>
                                        <li><a href="feature-footer-style-4.html" class="dropdown-item">Footer Style 4</a></li>
                                        <li><a href="feature-footer-style-5.html" class="dropdown-item">Footer Style 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown">Blog</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="blog-listing-left-sidebar.html" class="dropdown-item">Blog Listing Left Sidebar</a></li>
                                        <li><a href="blog-listing-right-sidebar.html" class="dropdown-item">Blog Listing Right Sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html" class="dropdown-item">Blog Detail Left Sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html" class="dropdown-item">Blog Detail Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown">Gallery</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="gallery-masonry.html" class="dropdown-item">Gallery Masonry</a></li>
                                        <li><a href="gallery-2-columns.html" class="dropdown-item">Gallery 2 Columns</a></li>
                                        <li><a href="gallery-3-columns.html" class="dropdown-item">Gallery 3 Columns</a></li>
                                        <li><a href="gallery-4-columns.html" class="dropdown-item">Gallery 4 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown">Forms</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="login-1.html" class="dropdown-item">Login 1</a></li>
                                        <li><a href="login-2.html" class="dropdown-item">Login 2</a></li>
                                        <li><a href="registration-1.html" class="dropdown-item">Registration 1</a></li>
                                        <li><a href="registration-2.html" class="dropdown-item">Registration 2</a></li>
                                        <li><a href="forgot-password-1.html" class="dropdown-item">Forgot Password 1</a></li>
                                        <li><a href="forgot-password-2.html" class="dropdown-item">Forgot Password 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu dropdown-menu-right row mega-dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown-item">
                                    <div class="row">
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-item dropdown-header">Standard <span>Pages</span></li>
                                                <li><a href="about-us-1.html">About Us 1</a></li>
                                                <li><a href="about-us-2.html">About Us 2</a></li>
                                                <li><a href="services-1.html">Services 1</a></li>
                                                <li><a href="services-2.html">Services 2</a></li>
                                                <li><a href="team-1.html">Our Team 1</a></li>
                                                <li><a href="team-2.html">Our Team 2</a></li>
                                                <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                                <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">User <span>Dashboard</span></li>
                                                <li><a href="dashboard-1.html">Dashboard 1</a></li>
                                                <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="booking.html">Booking</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cards.html">Cards</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">Special <span>Pages</span></li>
                                                <li><a href="error-page-1.html">404 Page 1</a></li>
                                                <li><a href="error-page-2.html">404 Page 2</a></li>
                                                <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                                <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                                <li><a href="faq-left-sidebar.html">FAQ Left Sidebar</a></li>
                                                <li><a href="faq-right-sidebar.html">FAQ Right Sidebar</a></li>
                                                <li><a href="testimonials-1.html">Testimonials 1</a></li>
                                                <li><a href="testimonials-2.html">Testimonials 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">Extra <span>Pages</span></li>
                                                <li><a href="before-you-fly.html">Before Fly</a></li>
                                                <li><a href="travel-insurance.html">Travel Insurance</a></li>
                                                <li class="active"><a href="travel-guide.html">Travel Guide</a></li>
                                                <li><a href="holidays.html">Holidays</a></li>
                                                <li><a href="thank-you.html">Thank You</a></li>
                                                <li><a href="payment-success.html">Payment Success</a></li>
                                                <li><a href="pricing-table-1.html">Pricing Table 1</a></li>
                                                <li><a href="pricing-table-2.html">Pricing Table 2</a></li>
                                                <li><a href="popup-ad.html">Popup Ad</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-item search-btn">
                            <a href="#" class="search-button" onclick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                        </li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- End container -->
        </nav>
        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>
        
                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                                <a href="#home-links" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
                                <span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu text-danger" id="home-links">
                                    <a class="items-list" href="index.html">Main Homepage</a>
                                    <a class="items-list" href="flight-homepage.html">Flight Homepage</a>
                                    <a class="items-list" href="hotel-homepage.html">Hotel Homepage</a>
                                    <a class="items-list" href="tour-homepage.html">Tour Homepage</a>
                                    <a class="items-list" href="cruise-homepage.html">Cruise Homepage</a>
                                    <a class="items-list" href="car-homepage.html">Car Homepage</a>
                                    <a class="items-list" href="landing-page.html">Landing Page</a>
                                    <a class="items-list" href="travel-agency-homepage.html">Travel Agency Page</a>
                                </div><!-- end sub-menu -->
        
                                <a class="items-list" href="#flights-links" data-bs-toggle="collapse"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="flights-links">
                                    <a class="items-list" href="flight-homepage.html">Flight Homepage</a>
                                    <a class="items-list" href="flight-listing-left-sidebar.html">List View Left Sidebar</a>
                                    <a class="items-list" href="flight-listing-right-sidebar.html">List View Right Sidebar</a>
                                    <a class="items-list" href="flight-grid-left-sidebar.html">Grid View Left Sidebar</a>
                                    <a class="items-list" href="flight-grid-right-sidebar.html">Grid View Right Sidebar</a>
                                    <a class="items-list" href="flight-detail-left-sidebar.html">Detail Left Sidebar</a>
                                    <a class="items-list" href="flight-detail-right-sidebar.html">Detail Right Sidebar</a>
                                    <a class="items-list" href="flight-booking-left-sidebar.html">Booking Left Sidebar</a>
                                    <a class="items-list" href="flight-booking-right-sidebar.html">Booking Right Sidebar</a>
                                    <a class="items-list" href="flight-search-result.html">Search Result</a>
                                    <a class="items-list" href="flight-offers.html">Hot Offers</a>
                                </div><!-- end sub-menu -->
        
                                <a class="items-list" href="#hotels-links" data-bs-toggle="collapse"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="hotels-links">
                                    <a class="items-list" href="hotel-homepage.html">Hotel Homepage</a>
                                    <a class="items-list" href="hotel-listing-left-sidebar.html">List View Left Sidebar</a>
                                    <a class="items-list" href="hotel-listing-right-sidebar.html">List View Right Sidebar</a>
                                    <a class="items-list" href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a>
                                    <a class="items-list" href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a>
                                    <a class="items-list" href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a>
                                    <a class="items-list" href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a>
                                    <a class="items-list" href="hotel-booking-left-sidebar.html">Booking Left Sidebar</a>
                                    <a class="items-list" href="hotel-booking-right-sidebar.html">Booking Right Sidebar</a>
                                    <a class="items-list" href="hotel-search-result.html">Search Result</a>
                                    <a class="items-list" href="hotel-offers.html">Hot Offers</a>
                                </div><!-- end sub-menu -->
        
                                <a class="items-list" href="#tours-links" data-bs-toggle="collapse"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="tours-links">
                                    <a class="items-list" href="tour-homepage.html">Tour Homepage</a>
                                    <a class="items-list" href="tour-listing-left-sidebar.html">List View Left Sidebar</a>
                                    <a class="items-list" href="tour-listing-right-sidebar.html">List View Right Sidebar</a>
                                    <a class="items-list" href="tour-grid-left-sidebar.html">Grid View Left Sidebar</a>
                                    <a class="items-list" href="tour-grid-right-sidebar.html">Grid View Right Sidebar</a>
                                    <a class="items-list" href="tour-detail-left-sidebar.html">Detail Left Sidebar</a>
                                    <a class="items-list" href="tour-detail-right-sidebar.html">Detail Right Sidebar</a>
                                    <a class="items-list" href="tour-booking-left-sidebar.html">Booking Left Sidebar</a>
                                    <a class="items-list" href="tour-booking-right-sidebar.html">Booking Right Sidebar</a>
                                    <a class="items-list" href="tour-search-result.html">Search Result</a>
                                    <a class="items-list" href="tour-offers.html">Hot Offers</a>
                                </div><!-- end sub-menu -->
        
                                <a class="items-list" href="#cruise-links" data-bs-toggle="collapse"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="cruise-links">
                                    <a class="items-list" href="cruise-homepage.html">Cruise Homepage</a>
                                    <a class="items-list" href="cruise-listing-left-sidebar.html">List View Left Sidebar</a>
                                    <a class="items-list" href="cruise-listing-right-sidebar.html">List View Right Sidebar</a>
                                    <a class="items-list" href="cruise-grid-left-sidebar.html">Grid View Left Sidebar</a>
                                    <a class="items-list" href="cruise-grid-right-sidebar.html">Grid View Right Sidebar</a>
                                    <a class="items-list" href="cruise-detail-left-sidebar.html">Detail Left Sidebar</a>
                                    <a class="items-list" href="cruise-detail-right-sidebar.html">Detail Right Sidebar</a>
                                    <a class="items-list" href="cruise-booking-left-sidebar.html">Booking Left Sidebar</a>
                                    <a class="items-list" href="cruise-booking-right-sidebar.html">Booking Right Sidebar</a>
                                    <a class="items-list" href="cruise-search-result.html">Search Result</a>
                                    <a class="items-list" href="cruise-offers.html">Hot Offers</a>
                                </div><!-- end sub-menu -->
        
                                <a class="items-list" href="#cars-links" data-bs-toggle="collapse"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="cars-links">
                                    <a class="items-list" href="car-homepage.html">Car Homepage</a>
                                    <a class="items-list" href="car-listing-left-sidebar.html">List View Left Sidebar</a>
                                    <a class="items-list" href="car-listing-right-sidebar.html">List View Right Sidebar</a>
                                    <a class="items-list" href="car-grid-left-sidebar.html">Grid View Left Sidebar</a>
                                    <a class="items-list" href="car-grid-right-sidebar.html">Grid View Right Sidebar</a>
                                    <a class="items-list" href="car-detail-left-sidebar.html">Detail Left Sidebar</a>
                                    <a class="items-list" href="car-detail-right-sidebar.html">Detail Right Sidebar</a>
                                    <a class="items-list" href="car-booking-left-sidebar.html">Booking Left Sidebar</a>
                                    <a class="items-list" href="car-booking-right-sidebar.html">Booking Right Sidebar</a>
                                    <a class="items-list" href="car-search-result.html">Search Result</a>
                                    <a class="items-list" href="car-offers.html">Hot Offers</a>
                                </div><!-- end sub-menu -->
        
                                <a class="items-list" href="#features-links" data-bs-toggle="collapse"><span><i class="fa fa-puzzle-piece link-icon"></i></span>Features<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu mega-sub-menu" id="features-links">
                                    <a class="items-list" href="#header-style-links" data-bs-toggle="collapse">Header<span><i class="fa fa-caret-down arrow"></i></span></a>
                                    <div class="collapse sub-menu mega-sub-menu-links" id="header-style-links">
                                        <a class="items-list" href="feature-header-style-1.html">Header Style 1</a>
                                        <a class="items-list" href="feature-header-style-2.html">Header Style 2</a>
                                        <a class="items-list" href="feature-header-style-3.html">Header Style 3</a>
                                        <a class="items-list" href="feature-header-style-4.html">Header Style 4</a>
                                        <a class="items-list" href="feature-header-style-5.html">Header Style 5</a>
                                        <a class="items-list" href="feature-header-style-6.html">Header Style 6</a>
                                    </div>
                                    <a class="items-list" href="#page-title-style-links" data-bs-toggle="collapse">Page Title<span><i class="fa fa-caret-down arrow"></i></span></a>
                                    <div class="collapse sub-menu mega-sub-menu-links" id="page-title-style-links">
                                        <a class="items-list" href="feature-page-title-style-1.html">Page Title Style 1</a>
                                        <a class="items-list" href="feature-page-title-style-2.html">Page Title Style 2</a>
                                        <a class="items-list" href="feature-page-title-style-3.html">Page Title Style 3</a>
                                        <a class="items-list" href="feature-page-title-style-4.html">Page Title Style 4</a>
                                        <a class="items-list" href="feature-page-title-style-5.html">Page Title Style 5</a>
                                        <a class="items-list" href="feature-page-title-style-6.html">Page Title Style 6</a>
                                    </div>
                                    <a class="items-list" href="#footer-style-links" data-bs-toggle="collapse">Footer<span><i class="fa fa-caret-down arrow"></i></span></a>
                                    <div class="collapse sub-menu mega-sub-menu-links" id="footer-style-links">
                                        <a class="items-list" href="feature-footer-style-1.html">Footer Style 1</a>
                                        <a class="items-list" href="feature-footer-style-2.html">Footer Style 2</a>
                                        <a class="items-list" href="feature-footer-style-3.html">Footer Style 3</a>
                                        <a class="items-list" href="feature-footer-style-4.html">Footer Style 4</a>
                                        <a class="items-list" href="feature-footer-style-5.html">Footer Style 5</a>
                                    </div>
                                    <a class="items-list" href="#f-blog-links" data-bs-toggle="collapse">Blog<span><i class="fa fa-caret-down arrow"></i></span></a>
                                    <div class="collapse sub-menu mega-sub-menu-links" id="f-blog-links">
                                        <a class="items-list" href="blog-listing-left-sidebar.html">Blog Listing Left Sidebar</a>
                                        <a class="items-list" href="blog-listing-right-sidebar.html">Blog Listing Right Sidebar</a>
                                        <a class="items-list" href="blog-detail-left-sidebar.html">Blog Detail Left Sidebar</a>
                                        <a class="items-list" href="blog-detail-right-sidebar.html">Blog Detail Right Sidebar</a>
                                    </div>
                                    <a class="items-list" href="#f-gallery-links" data-bs-toggle="collapse">Gallery<span><i class="fa fa-caret-down arrow"></i></span></a>
                                    <div class="collapse sub-menu mega-sub-menu-links" id="f-gallery-links">
                                        <a class="items-list" href="gallery-masonry.html">Gallery Masonry</a>
                                        <a class="items-list" href="gallery-2-columns.html">Gallery 2 Columns</a>
                                        <a class="items-list" href="gallery-3-columns.html">Gallery 3 Columns</a>
                                        <a class="items-list" href="gallery-4-columns.html">Gallery 4 Columns</a>
                                    </div>
                                    <a class="items-list" href="#f-forms-links" data-bs-toggle="collapse">Forms<span><i class="fa fa-caret-down arrow"></i></span></a>
                                    <div class="collapse sub-menu mega-sub-menu-links" id="f-forms-links">
                                        <a class="items-list" href="login-1.html">Login 1</a>
                                        <a class="items-list" href="login-2.html">Login 2</a>
                                        <a class="items-list active" href="registration-1.html">Registration 1</a>
                                        <a class="items-list" href="registration-2.html">Registration 2</a>
                                        <a class="items-list" href="forgot-password-1.html">Forgot Password 1</a>
                                        <a class="items-list" href="forgot-password-2.html">Forgot Password 2</a>
                                    </div>
                                </div><!-- end sub-menu -->
        
                                <a class="items-list active" href="#pages-links" data-bs-toggle="collapse"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="pages-links">
                                    <div class="list-group-heading ">Standard <span>Pages</span></div>
                                    <a class="items-list" href="about-us-1.html">About Us 1</a>
                                    <a class="items-list" href="about-us-2.html">About Us 2</a>
                                    <a class="items-list" href="services-1.html">Services 1</a>
                                    <a class="items-list" href="services-2.html">Services 2</a>
                                    <a class="items-list" href="team-1.html">Our Team 1</a>
                                    <a class="items-list" href="team-2.html">Our Team 2</a>
                                    <a class="items-list" href="contact-us-1.html">Contact Us 1</a>
                                    <a class="items-list" href="contact-us-2.html">Contact Us 2</a>
                                    <div class="list-group-heading ">User <span>Dashboard</span></div>
                                    <a class="items-list" href="dashboard-1.html">Dashboard 1</a>
                                    <a class="items-list" href="dashboard-2.html">Dashboard 2</a>
                                    <a class="items-list" href="user-profile.html">User Profile</a>
                                    <a class="items-list" href="booking.html">Booking</a>
                                    <a class="items-list" href="wishlist.html">Wishlist</a>
                                    <a class="items-list" href="cards.html">Cards</a>
                                    <div class="list-group-heading ">Special <span>Pages</span></div>
                                    <a class="items-list" href="error-page-1.html">404 Page 1</a>
                                    <a class="items-list" href="error-page-2.html">404 Page 2</a>
                                    <a class="items-list" href="coming-soon-1.html">Coming Soon 1</a>
                                    <a class="items-list" href="coming-soon-2.html">Coming Soon 2</a>  
                                    <a class="items-list" href="faq-left-sidebar.html">FAQ Left Sidebar</a>
                                    <a class="items-list" href="faq-right-sidebar.html">FAQ Right Sidebar</a> 
                                    <a class="items-list" href="testimonials-1.html">Testimonials 1</a>
                                    <a class="items-list" href="testimonials-2.html">Testimonials 2</a>
                                    <div class="list-group-heading ">Extra <span>Pages</span></div>
                                    <a class="items-list" href="before-you-fly.html">Before Fly</a>
                                    <a class="items-list" href="travel-insurance.html">Travel Insurance</a>
                                    <a class="items-list active" href="travel-guide.html">Travel Guide</a>
                                    <a class="items-list" href="holidays.html">Holidays</a>
                                    <a class="items-list" href="thank-you.html">Thank You</a>
                                    <a class="items-list" href="payment-success.html">Payment Success</a>
                                    <a class="items-list" href="pricing-table-1.html">Pricing Table 1</a> 
                                    <a class="items-list" href="pricing-table-2.html">Pricing Table 2</a>
                                    <a class="items-list" href="popup-ad.html">Popup Ad</a>
                                </div><!-- end sub-menu -->
        
                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->
        
        
        <!--================== PAGE-COVER ===============-->
        <section class="page-cover" id="cover-travel-guide">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Travel Guide</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Travel Guide</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="travel-guide" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-12 col-md-12 col-lg-9 col-xl-9 content-side">
                            <div class="detail-tabs">
                                <ul class="nav nav-tabs nav-justified ">
                                    <li class="nav-item"><a class="nav-link active" href="#tv-guide-overview" data-bs-toggle="tab">Overview</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tv-guide-attractions" data-bs-toggle="tab">Attractions</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tv-guide-hotels" data-bs-toggle="tab">Hotels</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tv-guide-gym" data-bs-toggle="tab">Luxury Gym</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tv-guide-sports" data-bs-toggle="tab">Sports Club</a></li>
                                </ul>
                                
                                <div class="tab-content">
        
                                    <div id="tv-guide-overview" class="tab-pane in active">
                                        <img src="images/tour-guide-tab-overview.jpg" class="img-fluid" alt="tour-guide-img" />
                                            
                                        <div class="tab-text">
                                            <h3>Sydney Overview</h3>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td>Country</td>
                                                            <td>Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>City</td>
                                                            <td>Sydney</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Area</td>
                                                            <td>205.2 KM²</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Local Time</td>
                                                            <td>Thursday 12:34PM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Currency</td>
                                                            <td>Australian Dollar</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- end table-responsive -->
                                            
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                        </div><!-- end tab-text -->
                                    </div><!-- end tv-guide-overview -->
                                    
                                    <div id="tv-guide-attractions" class="tab-pane">
                                        <div class="row">
                                            <div class="owl-carousel owl-theme" id="owl-attractions">
                                                <div class="col-12">
                                                    <div class="item text-center">
                                                        <a href="#"><img src="images/tour-guide-tab-attract-1.jpg" class="img-fluid" alt="attraction-img" /></a>
                                                        <div class="tab-text">
                                                            <a href="#"><h3>Sunrise Waverley</h3></a>
                                                            <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Australia</p>
                                                            <div class="table-responsive">
                                                                <table class="table table-striped">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Country</td>
                                                                            <td>Australia</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>City</td>
                                                                            <td>Sydney</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Area</td>
                                                                            <td>205.2 KM²</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div><!-- end table-responsive -->
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                        </div><!-- end tab-text -->
                                                    </div><!-- end item -->
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12">
                                                    <div class="item text-center">
                                                        <a href="#"><img src="images/tour-guide-tab-attract-2.jpg" class="img-fluid" alt="attraction-img" /></a>
                                                        <div class="tab-text">
                                                            <a href="#"><h3>Sydney Harbor Bridge</h3></a>
                                                            <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Sydney</p>
                                                            <div class="table-responsive">
                                                                <table class="table table-striped">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Country</td>
                                                                            <td>Australia</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>City</td>
                                                                            <td>Sydney</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Area</td>
                                                                            <td>205.2 KM²</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div><!-- end table-responsive -->
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                        </div><!-- end tab-text -->
                                                    </div><!-- end item -->
                                                </div><!-- end columns -->
                                                
                                                <div class="col-12">
                                                    <div class="item text-center">
                                                        <a href="#"><img src="images/tour-guide-tab-attract-3.jpg" class="img-fluid" alt="attraction-img" /></a>
                                                        <div class="tab-text">
                                                            <a href="#"><h3>Sydney Bondibeach</h3></a>
                                                            <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Sydney</p>
                                                            <div class="table-responsive">
                                                                <table class="table table-striped">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Country</td>
                                                                            <td>Australia</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>City</td>
                                                                            <td>Sydney</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Area</td>
                                                                            <td>205.2 KM²</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div><!-- end table-responsive -->
                                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                        </div><!-- end tab-text -->
                                                    </div><!-- end item -->
                                                </div><!-- end columns -->
                                            </div><!-- end owl-attractions -->
                                        </div><!-- end row -->
                                    </div><!-- end tv-guide-attractions -->
                                    
                                    <div id="tv-guide-hotels" class="tab-pane">
                                        <div class="list-block main-block h-list-block">
                                            <div class="list-content">
                                                <div class="main-img list-img h-list-img">
                                                    <a href="hotel-detail-left-sidebar.html">
                                                        <img src="images/hotel-1.jpg" class="img-fluid" alt="hotel-img" />
                                                    </a>
                                                    <div class="main-mask">
                                                        <ul class="list-unstyled list-inline offer-price-1">
                                                            <li class="list-inline-item price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                            <li class="list-inline-item rating">
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star lightgrey"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end main-mask -->
                                                </div><!-- end h-list-img -->
                                                
                                                <div class="list-info h-list-info">
                                                    <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">Herta Berlin Hotel</a></h3>
                                                    <p class="block-minor">From: Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                                    <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                                 </div><!-- end h-list-info -->
                                            </div><!-- end list-content -->
                                        </div><!-- end h-list-block -->
                                        
                                        <div class="list-block main-block h-list-block">
                                            <div class="list-content">
                                                <div class="main-img list-img h-list-img">
                                                    <a href="hotel-detail-left-sidebar.html">
                                                        <img src="images/hotel-2.jpg" class="img-fluid" alt="hotel-img" />
                                                    </a>
                                                    <div class="main-mask">
                                                        <ul class="list-unstyled list-inline offer-price-1">
                                                            <li class="list-inline-item price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                            <li class="list-inline-item rating">
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star lightgrey"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end main-mask -->
                                                </div><!-- end h-list-img -->
                                                
                                                <div class="list-info h-list-info">
                                                    <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">Herta Berlin Hotel</a></h3>
                                                    <p class="block-minor">From: Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                                    <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                                 </div><!-- end h-list-info -->
                                            </div><!-- end list-content -->
                                        </div><!-- end h-list-block -->
                                        
                                        <div class="list-block main-block h-list-block">
                                            <div class="list-content">
                                                <div class="main-img list-img h-list-img">
                                                    <a href="hotel-detail-left-sidebar.html">
                                                        <img src="images/hotel-3.jpg" class="img-fluid" alt="hotel-img" />
                                                    </a>
                                                    <div class="main-mask">
                                                        <ul class="list-unstyled list-inline offer-price-1">
                                                            <li class="list-inline-item price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                            <li class="list-inline-item rating">
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star lightgrey"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end main-mask -->
                                                </div><!-- end h-list-img -->
                                                
                                                <div class="list-info h-list-info">
                                                    <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">Herta Berlin Hotel</a></h3>
                                                    <p class="block-minor">From: Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                                    <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                                 </div><!-- end h-list-info -->
                                            </div><!-- end list-content -->
                                        </div><!-- end h-list-block -->
                                        
                                        <div class="list-block main-block h-list-block">
                                            <div class="list-content">
                                                <div class="main-img list-img h-list-img">
                                                    <a href="hotel-detail-left-sidebar.html">
                                                        <img src="images/hotel-4.jpg" class="img-fluid" alt="hotel-img" />
                                                    </a>
                                                    <div class="main-mask">
                                                        <ul class="list-unstyled list-inline offer-price-1">
                                                            <li class="list-inline-item price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                            <li class="list-inline-item rating">
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star orange"></i></span>
                                                                <span><i class="fa fa-star lightgrey"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end main-mask -->
                                                </div><!-- end h-list-img -->
                                                
                                                <div class="list-info h-list-info">
                                                    <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">Herta Berlin Hotel</a></h3>
                                                    <p class="block-minor">From: Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                                    <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                                 </div><!-- end h-list-info -->
                                            </div><!-- end list-content -->
                                        </div><!-- end h-list-block -->
                                    </div><!-- end tv-guide-hotels -->
                                    
                                    <div id="tv-guide-gym" class="tab-pane">
                                        <div class="tv-guide-block">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3 tab-img">
                                                    <a href="#"><img src="images/tour-guide-tab-gym-1.jpg" class="img-fluid" alt="gym-img" /></a>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-9 col-lg-9 tab-text">
                                                    <h3><a href="#">Lorem Ipsum</a></h3>
                                                    <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                        </div><!-- end tv-guide-block -->
                                        
                                        <div class="tv-guide-block right">
                                            <div class="row">
                                                
                                                <div class="col-md-9 col-md-pull-3 col-lg-9 tab-text">
                                                    <h3><a href="#">Lorem Ipsum</a></h3>
                                                    <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div><!-- end columns -->
        
                                                <div class="col-md-3 col-md-push-9 col-lg-3 tab-img">
                                                    <a href="#"><img src="images/tour-guide-tab-gym-2.jpg" class="img-fluid" alt="gym-img" /></a>
                                                </div><!-- end columns -->
        
                                            </div><!-- end row -->
                                        </div><!-- end tv-guide-block -->
                                        
                                        <div class="tv-guide-block">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3 tab-img">
                                                    <a href="#"><img src="images/tour-guide-tab-gym-3.jpg" class="img-fluid" alt="gym-img" /></a>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-9 col-lg-9 tab-text">
                                                    <h3><a href="#">Lorem Ipsum</a></h3>
                                                    <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                        </div><!-- end tv-guide-block -->
                                    </div><!-- end tv-guide-gym -->
                                    
                                    <div id="tv-guide-sports" class="tab-pane">
                                        <div class="tv-guide-block">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3 tab-img">
                                                    <a href="#"><img src="images/tour-guide-tab-sports-1.jpg" class="img-fluid" alt="sports-img" /></a>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-9 col-lg-9 tab-text">
                                                    <h3><a href="#">Tennis Club</a></h3>
                                                    <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                        </div><!-- end tv-guide-block -->
                                        
                                        <div class="tv-guide-block">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3 tab-img">
                                                    <a href="#"><img src="images/tour-guide-tab-sports-2.jpg" class="img-fluid" alt="sports-img" /></a>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-9 col-lg-9 tab-text">
                                                    <h3><a href="#">Swimming Club</a></h3>
                                                    <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                        </div><!-- end tv-guide-block -->
                                        
                                        <div class="tv-guide-block">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3 tab-img">
                                                    <a href="#"><img src="images/tour-guide-tab-sports-3.jpg" class="img-fluid" alt="sports-img" /></a>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-9 col-lg-9 tab-text">
                                                    <h3><a href="#">Soccer Club</a></h3>
                                                    <p class="attract-loc"><span><i class="fa fa-map-marker"></i></span>Sydney</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                        </div><!-- end tv-guide-block -->
                                    </div><!-- end tv-guide-sports -->
                                    
                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-12 col-lg-3 side-bar right-side-bar">
                            <div class="side-bar-block booking-form-block">
                                <div class="booking-form">
                                    <h3>Search Guide</h3>
                                    <p>Find your dream country guide</p>
                                    
                                    <form>
                                        
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Country</option>
                                                <option>Australia</option>
                                                <option>Turkey</option>
                                                <option>Srilanka</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>City</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="By Name (Optional)" required/>                                       
                                        </div>
                                        
                                        <button class="btn btn-block btn-orange w-100">Search Guide</button>
                                    </form>
        
                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->
                            
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="side-bar-block main-block ad-block">
                                        <div class="main-img ad-img">
                                            <a href="#">
                                                <img src="images/car-ad.jpg" class="img-fluid" alt="car-ad" />
                                                <div class="ad-mask">
                                                    <div class="ad-text">
                                                        <span>Luxury</span>
                                                        <h2>Car</h2>
                                                        <span>Offer</span>
                                                    </div><!-- end ad-text -->
                                                </div><!-- end columns -->
                                            </a>
                                        </div><!-- end ad-img -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-6 col-lg-12">    
                                    <div class="side-bar-block support-block">
                                        <h3>Need Help</h3>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+1 123 1234567</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end travel-guide -->
        </section><!-- end innerpage-wrapper -->
        
        
        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Best Price Guarantee</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>Safe and Secure</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Best Travel Agents</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-bars"></i></span>
                            <h3>Travel Guidelines</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end best-features -->
        
        
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Subscibe to receive our interesting updates</p>    
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                    <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->
        
        
        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
            <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
                <div class="container">
                    <div class="row">
                                
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">CONTACT US</h3>
                            <ul class="list-unstyled">
                                <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                                <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-2 col-xl-2 footer-widget ftr-links">
                            <h3 class="footer-heading">COMPANY</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Flight</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cruise</a></li>
                                <li><a href="#">Cars</a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-links ftr-pad-left">
                            <h3 class="footer-heading">RESOURCES</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div><!-- end columns -->
        
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 footer-widget ftr-about">
                            <h3 class="footer-heading">ABOUT US</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                            <ul class="social-links list-inline list-unstyled">
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->
        
            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="copyright">
                            <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="terms">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Terms & Condition</a></li>
                                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
    </div>
    
    
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-owl.js"></script>
    <!-- Page Scripts Ends -->
</body>
</html>
