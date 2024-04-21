<!doctype html>
<html lang="en">
<head>
    <title>Hotel Homepage</title>
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
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>


<body id="hotel-homepage">

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
        <div id="top-bar" class="tb-text-grey">
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
        
        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>
        
                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                                <a href="#home-links" class="items-list active" data-bs-toggle="collapse" aria-expanded="false">
                                <span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu text-danger" id="home-links">
                                    <a class="items-list" href="index.html">Main Homepage</a>
                                    <a class="items-list" href="flight-homepage.html">Flight Homepage</a>
                                    <a class="items-list active" href="hotel-homepage.html">Hotel Homepage</a>
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
                                        <a class="items-list" href="registration-1.html">Registration 1</a>
                                        <a class="items-list" href="registration-2.html">Registration 2</a>
                                        <a class="items-list" href="forgot-password-1.html">Forgot Password 1</a>
                                        <a class="items-list" href="forgot-password-2.html">Forgot Password 2</a>
                                    </div>
                                </div><!-- end sub-menu -->
        
                                <a class="items-list" href="#pages-links" data-bs-toggle="collapse"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
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
                                    <a class="items-list" href="travel-guide.html">Travel Guide</a>
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
        
        
                <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-3">
            
                <div class="header-absolute">
                    <nav class="navbar navbar-expand-xl main-navbar navbar-custom navbar-transparent bg-transparent" id="mynavbar">
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
                                    <li class="nav-item dropdown active">
                                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<span><i class="fa fa-angle-down "></i></span></a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a href="index.html" class="dropdown-item">Main Homepage</a></li>
                                            <li><a class="dropdown-item" href="flight-homepage.html">Flight Homepage</a></li>
                                            <li class="active"><a class="dropdown-item" href="hotel-homepage.html">Hotel Homepage</a></li>
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
                                    <li class="nav-item dropdown">
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
                                                            <li><a href="travel-guide.html">Travel Guide</a></li>
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
                     </nav><!-- end navbar -->
                </div><!-- end header-absolute -->
        
            <div class="flexslider slider" id="slider-3">
                <ul class="slides">
                    
                    <li class="item-1 back-size" style="background:            linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hotel-slider-1.jpg) 50% 65%;background-size:cover;height:100%;">
                    </li><!-- end item-1 -->
                    
                    <li class="item-2 back-size" style="background:            linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hotel-slider-1.jpg) 50% 65%;background-size:cover;height:100%;">
                    </li><!-- end item-2 -->
                   
                </ul>
            </div><!-- end slider -->
            
            <div class="search-tabs" id="search-tabs-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 p-md-0">
                        
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link" href="#flights" data-bs-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="st-text">Flights</span></a></li>
                                <li class="nav-item"><a class="nav-link active" href="#hotels" data-bs-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Hotels</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#tours" data-bs-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="st-text">Tours</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#cruise" data-bs-toggle="tab"><span><i class="fa fa-ship"></i></span><span class="st-text">Cruise</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#cars" data-bs-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Cars</span></a></li>
                            </ul>
        
                            <div class="tab-content">
        
                                <div id="flights" class="tab-pane">
                                    <form>
                                        <div class="row">
        
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
                                                
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>From</label>
                                                            <input type="text" class="form-control" placeholder="City, Country" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>To</label>
                                                            <input type="text" class="form-control" placeholder="City, Country" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                                
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
                                                
                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check In</label>
                                                            <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check Out</label>
                                                            <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                                
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="form-group right-icon">
                                                    <label>Adults</label>
                                                    <select class="form-control">
                                                        <option selected>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end flights -->
                                
                                <div id="hotels" class="tab-pane in active">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
                                                
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check In</label>
                                                            <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check Out</label>
                                                            <input type="text" class="form-control dpd2" placeholder="Check Out" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                                
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
                                                
                                                    <div class="col-12 col-md-12 col-lg-12">
                                                        <div class="form-group right-icon">
                                                            <label>Rooms</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group right-icon">
                                                            <label>Adults</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group right-icon">
                                                            <label>Kids</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end hotels -->
        
                                <div id="tours" class="tab-pane">
                                    <form>
                                        <div class="row">
                                        
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="form-group left-icon">
                                                    <label>Your Destination</label>
                                                    <input type="text" class="form-control" placeholder="City, Country" />
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="form-group right-icon">
                                                    <label>Month</label>
                                                    <select class="form-control">
                                                        <option selected>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
            
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group right-icon">
                                                            <label>Adults</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group right-icon">
                                                            <label>Kids</label>
                                                            <select class="form-control">
                                                                <option selected>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end tours -->
                                
                                <div id="cruise" class="tab-pane">
                                    <form>
                                        <div class="row">
        
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
                                                
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>From</label>
                                                            <input type="text" class="form-control" placeholder="City, Country" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>To</label>
                                                            <input type="text" class="form-control" placeholder="City, Country" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                                
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
                                                
                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check In</label>
                                                            <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check Out</label>
                                                            <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                                
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="form-group right-icon">
                                                    <label>Adults</label>
                                                    <select class="form-control">
                                                        <option selected>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end cruises -->
        
                                <div id="cars" class="tab-pane">
                                    <form>                    
                                        <div class="row">
                                        
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
                                                
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control" placeholder="Country" />
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" placeholder="City" />
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="form-group left-icon">
                                                            <label>Your Location</label>
                                                            <input type="text" class="form-control" placeholder="Location" />
                                                            <i class="fa fa-street-view"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="row">
                                                
                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check In</label>
                                                            <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <label>Check Out</label>
                                                            <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->                    
                                    </form>
                                </div><!-- end cars -->
                                
                                
                            </div><!-- end tab-content -->
        
                        </div><!-- end columns -->
                        
                        <div class="d-none d-lg-block col-lg-5 p-md-0">
                            <div class="welcome-message">
                                <h2>Find Your Perfect Plan</h2>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper, imeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                                <a href="#" class="btn btn-w-border">Explore More</a>
                            </div>

                        </div><!-- end columns -->
                                 
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->
            
        </section><!-- end flexslider-container -->
                
        
        <!--======================= BEST FEATURES ======================-->
        <section id="best-features" class="banner-padding orange-features">
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
        
                
        <!--=============== HOTEL OFFERS ===============-->
        <section id="hotel-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading white-heading">
                            <h2>Hotels Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                            
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="hotel-detail-right-sidebar.html">
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
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="hotel-detail-right-sidebar.html"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="hotel-detail-right-sidebar.html">Herta Berlin Hotel</a>
                                            <p>From: Scotland</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="hotel-detail-right-sidebar.html">
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
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="hotel-detail-right-sidebar.html"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="hotel-detail-right-sidebar.html">Roosevelt Hotel</a>
                                            <p>From: Germany</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="hotel-detail-right-sidebar.html">
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
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="hotel-detail-right-sidebar.html"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="hotel-detail-right-sidebar.html">Hotel Fort De</a>
                                            <p>From: Austria</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="hotel-detail-right-sidebar.html">
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
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="hotel-detail-right-sidebar.html"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="hotel-detail-right-sidebar.html">Roosevelt Hotel</a>
                                            <p>From: Germany</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            
                        </div><!-- end owl-hotel-offers -->
                        
                        <div class="view-all text-center">
                            <a href="hotel-grid-right-sidebar.html" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hotel-offers -->
        
                
        <!--=============== LUXURY ROOMS ===============-->
        <section id="luxury-rooms" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-6 luxury-img luxury-room-imgs">
                        <div class="row">
                            <div class="col-6 col-md-6 luxury-room-block">
                                <a href="images/luxury-room-1.jpg" title="image-7" class="with-caption gallery image-link">
                                <img class="img-fluid" src="images/luxury-room-1.jpg" alt="luxury-room-img">
                                </a>
                            </div>
                            
                            <div class="col-6 col-md-6 luxury-room-block">
                                <a href="images/luxury-room-2.jpg" title="image-7" class="with-caption gallery image-link">
                                <img class="img-fluid" src="images/luxury-room-2.jpg" alt="luxury-room-img">
                                </a>
                            </div>
                            
                            <div class="col-6 col-md-6 luxury-room-block">
                                <a href="images/luxury-room-3.jpg" title="image-7" class="with-caption gallery image-link">
                                <img class="img-fluid" src="images/luxury-room-3.jpg" alt="luxury-room-img">
                                </a>
                            </div>
                            
                            <div class="col-6 col-md-6 luxury-room-block">
                                <a href="images/luxury-room-4.jpg" title="image-7" class="with-caption gallery image-link">
                                <img class="img-fluid" src="images/luxury-room-4.jpg" alt="luxury-room-img">
                                </a>
                            </div>
                        </div>
                        
                    </div><!-- end columns -->
                    
                    <div class="col-md-12 col-lg-12 col-xl-6 luxury-text luxury-room-text">
                        <h2>Luxurious Rooms</h2>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                        <a href="hotel-detail-right-sidebar.html" class="btn btn-black">From $99/Day</a>
                        <a href="hotel-detail-right-sidebar.html" class="btn btn-o-border">View Details</a>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end luxury-rooms -->
                    
        
        <!--=============== TESTIMONIALS ===============-->
        <section id="testimonials" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading white-heading">
                            <h2>Testimonials</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
        
                        <div class="carousel slide" data-bs-ride="carousel" id="quote-carousel">
                            <div class="carousel-inner text-center">
                            
                                <div class="carousel-item active">
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->
                                    
                                    <small>Jhon Smith</small>
                                </div><!-- end item -->
                                
                                <div class="carousel-item">
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->
                                            
                                    <small>Jhon Smith</small>
                                </div><!-- end item -->
                                
                                <div class="carousel-item">
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->
                                    
                                    <small>Jhon Smith</small>
                                </div><!-- end item -->
                                
                            </div><!-- end carousel-inner -->
                            
                            <ol class="carousel-indicators mx-auto">
                                <li data-bs-target="#quote-carousel" data-bs-slide-to="0" class="active"><img src="images/client-1.jpg" class="img-fluid d-block"  alt="client-img">
                                </li>
                                <li data-bs-target="#quote-carousel" data-bs-slide-to="1"><img src="images/client-2.jpg" class="img-fluid d-block"  alt="client-img">
                                </li>
                                <li data-bs-target="#quote-carousel" data-bs-slide-to="2"><img src="images/client-3.jpg" class="img-fluid d-block"  alt="client-img">
                                </li>
                            </ol>
        
                        </div><!-- end quote-carousel -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials --> 
        
        
        <!--============== HIGHLIGHTS =============-->
        <section id="highlights" class="highlights-2"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text">
                                        <span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-ship"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text cruise">
                                        <span class="numbers">1906</span>
                                        <p>Worldwide Cruise</p> 
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-taxi"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text taxi">
                                        <span class="numbers">2033</span>
                                        <p>Luxury Car Booking</p>   
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                                
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end highlights -->
        
        
        <!--================ PACKAGES ==============-->
        <section id="hotel-packages" class="section-padding"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">             
                        <div class="page-heading">
                            <h2>Our Packages</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row" id="hotel-package-tables">
                                    
                            <div class="col-12 col-md-12"> 
                            
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 text-center no-pd-r">
                                        <div class="package hotel-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Luxury Room</h2>
                                                <h2 class="h-pkg-price">$199<span>night</span></h2>
                                            </div><!-- end h-pkg-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Breakfast</li>
                                                    <li>Private Balcony</li>
                                                    <li>Sea View</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Water Heated pool</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button>  
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 text-center no-pd-r no-pd-l">
                                        <div class="package hotel-package best-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Comfort Room</h2>
                                                <h2 class="h-pkg-price">$199<span>night</span></h2>
                                            </div><!-- end h-pkg-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Breakfast</li>
                                                    <li>Private Balcony</li>
                                                    <li>Sea View</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Water Heated pool</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button> 
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 text-center no-pd-l">
                                        <div class="package hotel-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Deluxe Room</h2>
                                                <h2 class="h-pkg-price">$199<span>night</span></h2>
                                            </div><!-- end h-package-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Breakfast</li>
                                                    <li>Private Balcony</li>
                                                    <li>Sea View</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Water Heated pool</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button> 
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->
        
                                </div><!-- end row -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hotel-packages -->
        
        
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
        <section id="footer" class="ftr-heading-w ftr-heading-mgn-2">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
                <div class="container">
                    <div class="row">
        
                        <div class="col-12 col-md-12 col-lg-5 col-xl-5 footer-widget ftr-about ftr-our-company">
                            <h3 class="footer-heading">OUR COMPANY</h3>
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
                        
                        <div class="col-12 col-md-12 col-lg-7 col-xl-7 footer-widget ftr-map">
                            <div class="map">
                                <iframe src=        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                            </div>
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
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-gallery.js"></script>
    <!-- Page Scripts Ends -->
    
</body>
</html>