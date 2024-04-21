<!doctype html>
<html lang="en">
    <head>
        <title>Travel Agency</title>
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
    </head>
    
    
    <body id="tour-homepage" data-spy="scroll">
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
    
    
    	<!--======== SEARCH-OVERLAY =========-->       
        <div id="myOverlay" class="overlay">
          <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form>
              <input class="float-left" type="text" placeholder="Search.." name="search">
              <button class="float-left" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div><!-- End overlay-content -->
        </div><!-- End myOverlay -->
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">          
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
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


		<!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-6">
        	
            <div class="header-absolute">
                <nav class="navbar navbar-expand-xl main-navbar navbar-custom navbar-transparent bg-transparent nav-links-active" id="mynavbar">
                    <div class="container">
                    
                        <a href="#" class="navbar-brand py-1 my-auto"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
                        <div class="header-search d-xl-none my-auto ms-auto py-1">
                            <a href="#" class="search-button" onclick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                        </div>
                        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                            <i class="fa fa-navicon py-1"></i>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="myNavbar1">
                            <ul class="navbar-nav ms-auto navbar-search-link">
                                <li class="nav-item active"><a class="nav-link px-4" href="#tour-homepage">Home</a></li>
                                <li class="nav-item"><a class="nav-link px-4" href="#tour-offers">Tours</a></li>
                                <li class="nav-item"><a class="nav-link px-4" href="#hot-tour">Offers</a></li>
                                <li class="nav-item"><a class="nav-link px-4" href="#tour-packages">Packages</a></li>
                                <li class="nav-item"><a class="nav-link px-4" href="#testimonials">Testimonials</a></li>
                                <li class="nav-item"><a class="nav-link px-4" href="#contact-form">Contact Us</a></li>
                                <li><a href="#" class="search-button" onclick="openSearch()"><span><i class="fa fa-search"></i></span></a></li>
                            </ul>
                        </div><!-- end navbar collapse -->
                    </div><!-- End container -->
                 </nav><!-- end navbar -->
            </div><!-- end header-absolute -->
            
            <div class="sidenav-content">
                <!-- Sidebar  -->
                <nav id="sidebar" class="sidenav">
                    <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>
            
                    <div id="main-menu">
                        <div id="dismiss">
                            <button class="btn" id="closebtn">&times;</button>
                        </div>
                        <div class="list-group panel">
                                    <a class="items-list active" href="#tour-homepage">
                                    <span><i class="fa fa-home link-icon"></i></span>Home</a>
            
                                    <a class="items-list" href="#tour-offers"><span><i class="fa fa-plane link-icon"></i></span>Tours</a>
            
                                    <a class="items-list" href="#hot-tour"><span><i class="fa fa-building link-icon"></i></span>Offers</a>
            
                                    <a class="items-list" href="#tour-packages" class="il"><span><i class="fa fa-globe link-icon"></i></span>Packages</a>
            
                                    <a class="items-list" href="#testimonials" href="#cruise-links"><span><i class="fa fa-ship link-icon"></i></span>Testimonials</a>
            
                                    <a class="items-list" href="#contact-form" href="#cars-links"><span><i class="fa fa-car link-icon"></i></span>Contact Us</a>
            
                        </div><!-- End list-group panel -->
                    </div><!-- End main-menu -->
                </nav>
            </div><!-- End sidenav-content -->
        
            <div class="flexslider slider tour-slider" id="slider-6">
                <ul class="slides">
                    
                    <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/landing-slider-1.jpg) 50% 65%; background-size:cover; height:100%;">
    					<div class="meta">         
                            <div class="container">
                            	<span class="highlight-price highlight-2">STARTING FROM 1200$ ONLY</span>
                                <h2>Switzerland</h2>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/landing-slider-2.jpg) 50% 65%; background-size:cover; height:100%;">
                        <div class="meta">         
                            <div class="container">
                                <span class="highlight-price highlight-2">STARTING FROM 1200$ ONLY</span>
                                <h2>Switzerland</h2>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->
                   
                </ul>
            </div><!-- end slider -->
		</section><!-- end flexslider-container -->


        <!--=============== TOUR OFFERS ===============-->
        <section id="tour-offers" class="section-padding">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
                    	<div class="page-heading">
                        	<h2>Tour Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                         <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                    	<a href="tour-detail-right-sidebar.html">
                                        	<img src="images/tour-1.jpg" class="img-fluid" alt="tour-img" />
                                    	</a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$568.00<a href="tour-detail-right-sidebar.html" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                    	<div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">China Temple Tour</a>
                                            <p>From: China</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                        	<img src="images/tour-2.jpg" class="img-fluid" alt="tour-img" />
                                    	</a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="tour-detail-right-sidebar.html" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                    	<div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">African Safari Tour</a>
                                            <p>From: Africa</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                        	<img src="images/tour-3.jpg" class="img-fluid" alt="tour-img" />
                                    	</a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$459.00<a href="tour-detail-right-sidebar.html" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                    	<div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">Paris City Tour</a>
                                            <p>From: Paris</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <a href="tour-detail-right-sidebar.html">
                                        	<img src="images/tour-4.jpg" class="img-fluid" alt="tour-img" />
                                    	</a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="tour-detail-right-sidebar.html" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                    	<div class="main-title tour-title">
                                            <a href="tour-detail-right-sidebar.html">China Temple Tour</a>
                                            <p>From: China</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            
                        </div><!-- end owl-tour-offers -->
                        
                        <div class="view-all text-center">
                        	<a href="tour-grid-right-sidebar.html" class="btn btn-black">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end tour-offers -->
        
        
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
		
        
        <!--================ HOT-TOUR ==============-->
        <section id="hot-tour" class="section-padding">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12 col-lg-12 col-xl-7 hot-tour-carousel">
                    	<div id="hot-tour-carousel" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                	<img src="images/hot-tour-1.jpg" alt="Los Angeles">
                                </div>
                                
                                <div class="carousel-item">
                                	<img src="images/hot-tour-2.jpg" alt="Chicago">
                                </div>
                            </div><!-- end carousel-inner -->
                            
                            <a class="left arrow-icons carousel-control-prev" href="#hot-tour-carousel" data-bs-slide="prev">
                                <span class="glyphicon carousel-control-prev-icon fa fa-arrow-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right arrow-icons carousel-control-next" href="#hot-tour-carousel" data-bs-slide="next">
                                <span class="glyphicon carousel-control-next-icon fa fa-arrow-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div><!-- end hot-tour-carousel -->
                    </div><!-- end columns -->
                    
                    <div class="col-md-12 col-lg-12 col-xl-5 hot-tour-text">
                    	<h3>Hot Offer</h3>
                        <h2 class="hot-tour-title">Playa Paraiso, Cuba</h2>
                        <p>2300$ / 2 Persons / 7 Nights</p>
                        <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book Now</a>
                        <a href="tour-detail-right-sidebar.html" class="btn btn-details">See Details</a>
                    </div><!-- end columns -->
                    
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end hot-tour -->
                
		
        <!--=================== PACKAGES ================-->
        <section id="tour-packages" class="section-padding"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">         	
                        <div class="page-heading">
                        	<h2>Top Tour Packages</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row" id="tour-package-tables">

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 text-center">
                                <div class="package tour-package">        
                                    <div class="t-pkg-heading">
                                        <h2 class="t-pkg-title">Single</h2>
                                        <h2 class="t-pkg-price">$199 / Night</h2>
                                    </div><!-- end t-pkg-heading -->
                                    
                                    <div class="pkg-features">
                                        <ul class="list-unstyled text-center">
                                            <li>Breakfast</li>
                                            <li>Private Balcony</li>
                                            <li>Sea View</li>
                                            <li>Free Wifi</li>
                                            <li>Bathroom</li>
                                            <li>Water Heated pool</li>
                                        </ul>
                                        <button class="btn">Select Package</button> 
                                    </div><!-- end features --> 
                                </div><!-- end tour-package -->
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 text-center">
                                <div class="package tour-package  best-package">        
                                    <div class="t-pkg-heading">
                                        <h2 class="t-pkg-title">Double</h2>
                                        <h2 class="t-pkg-price">$199 / Night</h2>
                                    </div><!-- end t-pkg-heading -->
                                    
                                    <div class="pkg-features">
                                        <ul class="list-unstyled text-center">
                                            <li>Breakfast</li>
                                            <li>Private Balcony</li>
                                            <li>Sea View</li>
                                            <li>Free Wifi</li>
                                            <li>Bathroom</li>
                                            <li>Water Heated pool</li>
                                        </ul>
                                        <button class="btn">Select Package</button> 
                                    </div><!-- end features --> 
                                </div><!-- end tour-package -->
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 text-center">
                                <div class="package tour-package">        
                                    <div class="t-pkg-heading">
                                        <h2 class="t-pkg-title">Family</h2>
                                        <h2 class="t-pkg-price">$199 / Night</h2>
                                    </div><!-- end t-pkg-heading -->
                                    
                                    <div class="pkg-features">
                                        <ul class="list-unstyled text-center">
                                            <li>Breakfast</li>
                                            <li>Private Balcony</li>
                                            <li>Sea View</li>
                                            <li>Free Wifi</li>
                                            <li>Bathroom</li>
                                            <li>Water Heated pool</li>
                                        </ul>
                                        <button class="btn">Select Package</button> 
                                    </div><!-- end features --> 
                                </div><!-- end tour-package -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end tour-packages -->
        
        
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
        
        
        <!--=============== CONTACT-FORM ===============-->
        <section id="contact-form" class="section-padding"> 
            <div class="container">
                <div class="row">
                	<div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
						<div class="page-heading white-heading">
                        	<h2>Contact Us</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row">
                        	<div class="col-12 col-md-12 col-lg-7">
                        		<form>
                                	<div class="row"> 
                                    	<div class="col-12 col-md-6"> 
                                            <div class="form-group">
                                                 <input type="text" class="form-control" placeholder="First Name"  required/>
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>
        								</div>
                                       
                                        <div class="col-12 col-md-6"> 
                                            <div class="form-group">
                                                 <input type="text" class="form-control" placeholder="Last Name"  required/>
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>
        								</div>
                                    </div>
                                    
                                    <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Email"  required/>
                                         <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                        
                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Subject"  required/>
                                         <span><i class="fa fa-info-circle"></i></span>
                                    </div>
    
                                    <div class="form-group">
                                        <textarea class="form-control" rows="7" placeholder="Your Message"></textarea>
                                        <span><i class="fa fa-pencil"></i></span>
                                    </div>
    								
                                    <button class="btn btn-orange btn-block">Send</button>
                                </form>
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-12 col-lg-5">
                            	<div class="contact-block">
                            		<span><i class="fa fa-map-marker"></i></span>
                                    <p>Street 345, Lorem Ipsum, California.</p>   
                                    <span class="border-shape"></span>                            
                                </div><!-- end address-block -->
                                
                                <div class="contact-block">
                            		<span><i class="fa fa-phone"></i></span>
                                    <p>+123 1234 123456</p>               
                                    <span class="border-shape"></span>                 
                                </div><!-- end address-block -->
                                
                                <div class="contact-block">
                            		<span><i class="fa fa-envelope"></i></span>
                                    <p>info@loremipsum.com</p>       
                                    <span class="border-shape"></span>                          
                                </div><!-- end address-block -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end contact-form -->
        
        
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
                                <iframe src=		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
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
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-5.3.2.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-flex.js"></script>
        <script src="js/custom-owl.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>