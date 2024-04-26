<?php
include ("includes/header.php")
    ?>


<body id="main-homepage">

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>


        <!--======== SEARCH-OVERLAY =========-->
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onClick="closeSearch()" title="Close Overlay">×</span>
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




        <?php
        include ("includes/nav.php")
            ?>


        <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-1">

            <div class="flexslider slider" id="slider-1">
                <ul class="slides">

                    <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/slide1.jpg) 50% 0%;background-size:cover;
                        height:100%;">

                    </li><!-- end item-1 -->

                    <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/slide2.jpg) 50% 0%;background-size:cover;
                        height:100%;">

                    </li><!-- end item-2 -->

                    <li class="item-3" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/slide3.jpg) 50% 0%;background-size:cover;
                        height:100%;">

                    </li><!-- end item-2 -->

                    <li class="item-4" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/slide4.jpg) 50% 0%;background-size:cover;
                        height:100%;">

                    </li><!-- end item-2 -->

                </ul>
            </div><!-- end slider -->

            <div class="search-tabs" id="search-tabs-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <ul class="nav nav-tabs justify-content-center">
                                <!-- <li class="nav-item"><a class="nav-link active" href="#flights" data-bs-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="d-md-inline-flex d-none st-text">Flights</span></a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="#hotels" data-bs-toggle="tab"><span><i class="fa fa-building"></i></span><span class="d-md-inline-flex d-none st-text">Hotels</span></a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="#tours" data-bs-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="d-md-inline-flex d-none st-text">Tours</span></a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="#cruise" data-bs-toggle="tab"><span><i class="fa fa-ship"></i></span><span class="d-md-inline-flex d-none st-text">Cruise</span></a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="#cars" data-bs-toggle="tab"><span><i class="fa fa-car"></i></span><span class="d-md-inline-flex d-none st-text">Cars</span></a></li> -->
                            </ul>

                            <div class="tab-content">


                                <div id="hotels" class="tab-pane in active">
                                    <form>
                                        <div class="row">

                                            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                                                <div class="row">

                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group left-icon m-0">
                                                            <input type="text" class="form-control" placeholder="City">
                                                            <i class="fa fa-sharp fa-regular fa-location-dot"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group left-icon m-0">
                                                            <input type="text" class="form-control "
                                                                placeholder="Hotel">
                                                            <i class="fa fa-building"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->


                                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end hotels -->
                            </div><!-- end tab-content -->

                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->

        </section><!-- end flexslider-container -->


        <!--=============== HOTEL OFFERS ===============-->
        <section id="hotel-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Hotels Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">


                            <?php


                            $sql = "SELECT * From hotels WHERE offer = 1 AND status = 1";
                            $result = $conectDB->query($sql);


                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $hotel_images = explode(',', $row['imgs']);

                                    echo '                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                        <a href="hotel-detail.php?id=' . $row['id'] . '">';
                                    if (!empty($hotel_images)) {
                                        echo '<img src="../Admin/back/uploads/' . $hotel_images['0'] . '" class="img-fluid offer-card-img n-card-img" alt="hotel-img" />';
                                    } else {
                                        echo '<img src="images/brightplace.png" class="img-fluid offer-card-img n-card-img" alt="hotel-img" />';
                                    }

                                    echo '</a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">Starting<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                                <li class="list-inline-item rating">
';

                                    for ($i = 1; $i <= $row['stars']; $i++) {
                                        echo "<span><i class='fa fa-star orange'></i></span>";
                                    }

                                    echo '
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->
                                    
                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="hotel-detail.php?id=' . $row['id'] . '"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->
                                        
                                        <div class="main-title hotel-title">
                                            <a href="hotel-detail.php?id=' . $row['id'] . '">' . $row['title'] . '</a>
                                            <p>Location: ' . $row['city'] . '</p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->';
                                }
                            } else {
                                echo "<h1>No Offers Available Now</h1>";
                            }



                            ?>


                        </div><!-- end owl-hotel-offers -->

                        <!-- <div class="view-all text-center">
                            <a href="hotel-detail-right-sidebar.php" class="btn btn-orange">View All</a>
                        </div> -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hotel-offers -->


        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Best Price Guarantee</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>Safe and Secure</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Best Travel Agents</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-bars"></i></span>
                            <h3>Travel Guidelines</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end best-features -->


        <!--=============== TOUR OFFERS ===============-->
        <section id="tour-offers" class="section-padding d-none">
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
                                        <a href="#">
                                            <img src="images/tour-1.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$568.00<a href="#"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">China Temple Tour</a>
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
                                        <a href="#">
                                            <img src="images/tour-2.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="#"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">African Safari Tour</a>
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
                                        <a href="#">
                                            <img src="images/tour-3.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$459.00<a href="#"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">Paris City Tour</a>
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
                                        <a href="#">
                                            <img src="images/tour-4.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$745.00<a href="#"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#">China Temple Tour</a>
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
                            <a href="#" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end tour-offers -->


        <!--=============== CRUISE OFFERS ===============-->
        <section id="cruise-offers" class="section-padding d-none ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Cruise Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="main-block cruise-block">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-6 col-lg-pull-6 no-pd-r">
                                            <div class=" main-info cruise-info">
                                                <div class="main-title cruise-title">
                                                    <a href="#">Spain Boat Tour</a>
                                                    <p>From: Italy to Spain</p>
                                                    <div class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star grey"></i></span>
                                                    </div><!-- end rating -->

                                                    <span class="cruise-price">$950.00</span>
                                                </div><!-- end cruise-title -->
                                            </div><!-- end cruise-info -->
                                        </div><!-- end columns -->

                                        <div class="col-md-12 col-lg-6 col-lg-push-6 no-pd-l">
                                            <div class="main-img cruise-img">
                                                <a href="#">
                                                    <img src="images/cruise-1.jpg" class="img-fluid" alt="cruise-img" />
                                                    <div class="cruise-mask">
                                                        <p>7 Nights, 6 Days</p>
                                                    </div><!-- end cruise-mask -->
                                                </a>
                                            </div><!-- end cruise-img -->
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end cruise-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-6">
                                <div class="main-block cruise-block">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-6 col-lg-pull-6 no-pd-r">
                                            <div class=" main-info cruise-info">
                                                <div class="main-title cruise-title">
                                                    <a href="#">Spain Boat Tour</a>
                                                    <p>From: Italy to Spain</p>
                                                    <div class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star grey"></i></span>
                                                    </div><!-- end rating -->

                                                    <span class="cruise-price">$950.00</span>
                                                </div><!-- end cruise-title -->
                                            </div><!-- end cruise-info -->
                                        </div><!-- end columns -->

                                        <div class="col-md-12 col-lg-6 col-lg-push-6 no-pd-l">
                                            <div class="main-img cruise-img">
                                                <a href="#">
                                                    <img src="images/cruise-2.jpg" class="img-fluid" alt="cruise-img" />
                                                    <div class="cruise-mask">
                                                        <p>7 Nights, 6 Days</p>
                                                    </div><!-- end cruise-mask -->
                                                </a>
                                            </div><!-- end cruise-img -->
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end cruise-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-6">
                                <div class="main-block cruise-block">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-6 col-lg-pull-6 no-pd-r">
                                            <div class=" main-info cruise-info">
                                                <div class="main-title cruise-title">
                                                    <a href="#">Spain Boat Tour</a>
                                                    <p>From: Italy to Spain</p>
                                                    <div class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star grey"></i></span>
                                                    </div><!-- end rating -->

                                                    <span class="cruise-price">$950.00</span>
                                                </div><!-- end cruise-title -->
                                            </div><!-- end cruise-info -->
                                        </div><!-- end columns -->

                                        <div class="col-md-12 col-lg-6 col-lg-push-6 no-pd-l">
                                            <div class="main-img cruise-img">
                                                <a href="#">
                                                    <img src="images/cruise-3.jpg" class="img-fluid" alt="cruise-img" />
                                                    <div class="cruise-mask">
                                                        <p>7 Nights, 6 Days</p>
                                                    </div><!-- end cruise-mask -->
                                                </a>
                                            </div><!-- end cruise-img -->
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end cruise-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-6">
                                <div class="main-block cruise-block">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-6 col-lg-pull-6 no-pd-r">
                                            <div class=" main-info cruise-info">
                                                <div class="main-title cruise-title">
                                                    <a href="#">Spain Boat Tour</a>
                                                    <p>From: Italy to Spain</p>
                                                    <div class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star grey"></i></span>
                                                    </div><!-- end rating -->

                                                    <span class="cruise-price">$950.00</span>
                                                </div><!-- end cruise-title -->
                                            </div><!-- end cruise-info -->
                                        </div><!-- end columns -->

                                        <div class="col-md-12 col-lg-6 col-lg-push-6 no-pd-l">
                                            <div class="main-img cruise-img">
                                                <a href="#">
                                                    <img src="images/cruise-4.jpg" class="img-fluid" alt="cruise-img" />
                                                    <div class="cruise-mask">
                                                        <p>7 Nights, 6 Days</p>
                                                    </div><!-- end cruise-mask -->
                                                </a>
                                            </div><!-- end cruise-img -->
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end cruise-block -->
                            </div><!-- end columns -->
                        </div><!-- end row -->

                        <div class="view-all text-center">
                            <a href="#" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end cruise-offers -->


        <!--==================== VIDEO BANNER ===================-->
        <section id="video-banner" class="banner-padding back-size d-none">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h2>Take a Video Tour</h2>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                            delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                        <div class="margin-small py-5 mt-5 m-sm-0 "></div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn video-btn" id="play-button" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/0O2aH4XLbto" data-bs-target="#myModal"><span><i
                                    class="fa fa-play mt-0 m-sm-0"></i></span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">

                                        <button type="button" class="btn close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <!-- 16:9 aspect ratio -->

                                        <div class="ratio ratio-16x9">
                                            <iframe class="embed-responsive-item" src="" id="video"
                                                allowscriptaccess="always">></iframe>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end video-banner -->


        <!--================= FLIGHT OFFERS =============-->
        <section id="flight-offers" class="section-padding d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Flight Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="row">

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/flight-1.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/flight-2.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/flight-3.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/flight-4.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/flight-5.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="#">
                                        <div class="flight-img">
                                            <img src="images/flight-6.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->

                        <div class="view-all text-center">
                            <a href="#" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end flight-offers -->


        <!--==================== HIGHLIGHTS ====================-->
        <section id="highlights" class="section-padding back-size">
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


        <!--================ VEHICLE OFFERS ==============-->
        <section id="vehicle-offers" class="section-padding d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Vehicle Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="row">

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block vehicle-block">
                                    <div class="main-img vehicle-img">
                                        <a href="#">
                                            <img src="images/vehicle-1.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                        <div class="vehicle-time">
                                            <p><span><i class="fa fa-clock-o"></i></span>22/h</p>
                                        </div><!-- end vehicle-time -->
                                    </div><!-- end vehicle-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$89<a href="#"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info vehicle-info">
                                        <div class="main-title vehicle-title">
                                            <a href="#">Mercedes Benz</a>
                                            <p>Per Day</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </div>
                                        </div><!-- end vehicle-title -->
                                    </div><!-- end vehicle-info -->
                                </div><!-- end vehicle-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block vehicle-block">
                                    <div class="main-img vehicle-img">
                                        <a href="#">
                                            <img src="images/vehicle-2.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                        <div class="vehicle-time">
                                            <p><span><i class="fa fa-clock-o"></i></span>22/h</p>
                                        </div><!-- end vehicle-time -->
                                    </div><!-- end vehicle-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$99<a href="#"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info vehicle-info">
                                        <div class="main-title vehicle-title">
                                            <a href="#">Ferrari</a>
                                            <p>Per Day</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </div>
                                        </div><!-- end vehicle-title -->
                                    </div><!-- end vehicle-info -->
                                </div><!-- end vehicle-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block vehicle-block">
                                    <div class="main-img vehicle-img">
                                        <a href="#">
                                            <img src="images/vehicle-3.jpg" class="img-fluid" alt="tour-img" />
                                        </a>
                                        <div class="vehicle-time">
                                            <p><span><i class="fa fa-clock-o"></i></span>22/h</p>
                                        </div><!-- end vehicle-time -->
                                    </div><!-- end vehicle-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">$79<a href="#"><span class="arrow"><i
                                                            class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info vehicle-info">
                                        <div class="main-title vehicle-title">
                                            <a href="#">Range Rover</a>
                                            <p>Per Day</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </div>
                                        </div><!-- end vehicle-title -->
                                    </div><!-- end vehicle-info -->
                                </div><!-- end vehicle-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->

                        <div class="view-all text-center">
                            <a href="#" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end vehicle-offers -->


        <!--==================== TESTIMONIALS ====================-->
        <section id="testimonials" class="section-padding back-size d-none">
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
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius
                                        prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an
                                        eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque
                                        fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam
                                        mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
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
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius
                                        prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an
                                        eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque
                                        fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam
                                        mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
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
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius
                                        prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an
                                        eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque
                                        fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam
                                        mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
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
                                <li data-bs-target="#quote-carousel" data-bs-slide-to="0" class="active"><img
                                        src="images/client-1.jpg" class="img-fluid d-block" alt="client-img">
                                </li>
                                <li data-bs-target="#quote-carousel" data-bs-slide-to="1"><img src="images/client-2.jpg"
                                        class="img-fluid d-block" alt="client-img">
                                </li>
                                <li data-bs-target="#quote-carousel" data-bs-slide-to="2"><img src="images/client-3.jpg"
                                        class="img-fluid d-block" alt="client-img">
                                </li>
                            </ol>

                        </div><!-- end quote-carousel -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials -->


        <!--================ LATEST BLOG ==============-->
        <section id="latest-blog" class="section-padding d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Our Latest Blogs</h2>
                            <hr class="heading-line" />
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block latest-block">
                                    <div class="main-img latest-img">
                                        <a href="#">
                                            <img src="images/latest-blog-1.jpg" class="img-fluid" alt="blog-img" />
                                        </a>
                                    </div><!-- end latest-img -->

                                    <div class="latest-info">
                                        <ul class="list-unstyled">
                                            <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span
                                                    class="author">by: <a href="#">Jhon Smith</a></span></li>
                                        </ul>
                                    </div><!-- end latest-info -->

                                    <div class="main-info latest-desc">
                                        <div class="row">
                                            <div class="col-10 col-md-10 main-title">
                                                <a href="#">Travel Insuranve Benefits</a>
                                                <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros
                                                    perpetua ullamcorper.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->

                                        <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                    </div><!-- end latest-desc -->
                                </div><!-- end latest-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block latest-block">
                                    <div class="main-img latest-img">
                                        <a href="#">
                                            <img src="images/latest-blog-2.jpg" class="img-fluid" alt="blog-img" />
                                        </a>
                                    </div><!-- end latest-img -->

                                    <div class="latest-info">
                                        <ul class="list-unstyled">
                                            <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span
                                                    class="author">by: <a href="#">Jhon Smith</a></span></li>
                                        </ul>
                                    </div><!-- end latest-info -->

                                    <div class="main-info latest-desc">
                                        <div class="row">
                                            <div class="col-10 col-md-10 main-title">
                                                <a href="#">Travel Guideline Agents</a>
                                                <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros
                                                    perpetua ullamcorper.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->

                                        <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                    </div><!-- end latest-desc -->
                                </div><!-- end latest-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block latest-block">
                                    <div class="main-img latest-img">
                                        <a href="#">
                                            <img src="images/latest-blog-3.jpg" class="img-fluid" alt="blog-img" />
                                        </a>
                                    </div><!-- end latest-img -->

                                    <div class="latest-info">
                                        <ul class="list-unstyled">
                                            <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span
                                                    class="author">by: <a href="#">Jhon Smith</a></span></li>
                                        </ul>
                                    </div><!-- end latest-info -->

                                    <div class="main-info latest-desc">
                                        <div class="row">
                                            <div class="col-10 col-md-10 main-title">
                                                <a href="#">Secure Travel Tips</a>
                                                <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros
                                                    perpetua ullamcorper.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->

                                        <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                    </div><!-- end latest-desc -->
                                </div><!-- end latest-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->

                        <div class="view-all text-center">
                            <a href="#" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end latest-blog -->


        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter d-none-brands">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Subscibe to receive our interesting updates</p>
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg"
                                        placeholder="Enter your email address" required />
                                    <span class="input-group-btn"><button class="btn btn-lg"><i
                                                class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->


        <?php
        include ('includes/footer.php');
        ?>