<?php
include ("includes/header.php")
    ?>


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

        <?php
        include ("includes/nav.php")
            ?>



   



        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="hotel-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-12 col-md-9 col-lg-9 content-side">
                        <?php


$id = $_GET['id'];
if (is_numeric($id)) {
    $sql = "SELECT * From hotels WHERE id=$id";
    $result = $conectDB->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hotel_images = explode(',', $row['imgs']);
            echo '
            <div id="carouselExampleAutoplaying'.$id.'" class="carousel slide" data-bs-ride="carousel" style="max-height:450px">
            <div class="carousel-inner" style="max-height:450px">
            ';
            if(!empty($hotel_images)){
                            for( $i = 0; $i < count($hotel_images);$i++){
                                if($i == 0){
                                    echo'
                                    <div class="carousel-item active" data-bs-interval="2000">
                    <img src="../Admin/back/uploads/'.$hotel_images[$i].'" class="d-block w-100"
                        alt="..." style="max-height:450px !important;">
                </div>
                                    ';
                                }else{
                                    echo'
                                    <div class="carousel-item " data-bs-interval="2000">
                    <img src="../Admin/back/uploads/'.$hotel_images[$i].'" class="d-block w-100"
                        alt="..." style="max-height:450px !important;">
                </div>';
                                }
                            }
                            
                        }else{
                            echo '<img src="images/brightplace.png" class="img-fluid offer-card-img" alt="hotel-img" />';
                        }
            echo'
               
            </div>
            <button class="carousel-control-prev" type="button"
                data-bs-target="#carouselExampleAutoplaying'.$id.'" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"
                data-bs-target="#carouselExampleAutoplaying'.$id.'" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
            ';


       echo'<div class="detail-tabs">
           <ul class="nav nav-tabs nav-justified ">
               <li class="nav-item"><a class="nav-link active" href="#hotel-overview"
                       data-bs-toggle="tab" style="color:#444 !important">Hotel Overview</a></li>
              
           </ul>

           <div class="tab-content">

               <div id="hotel-overview" class="tab-pane in active">
                   <div class="row" style="min-height: 210px">
                       <div class="col-md-6 col-md-6 tab-img">
                           <!-- <img src="images/hotel-detail-tab-1.jpg" class="img-responsive" alt="flight-detail-img" /> -->
                           '.$row['video_link'].'
                       </div><!-- end columns -->

                       <div class="col-md-6 col-md-6 tab-text">
                           <h3 class="m-0">'.$row['title'].'</h3>
                           <div class="rating">';
                           for ($i = 1; $i <= $row['stars']; $i++) {
                            echo "<span><i class='fa fa-star orange'></i></span>";
                        }

                           echo'</div>
                           <p>'.$row['description'].'</p>
                       </div><!-- end columns -->
                   </div><!-- end row -->
               </div><!-- end hotel-overview -->

           </div><!-- end tab-content -->
       </div><!-- end detail-tabs -->

           ';

        }
    } else {
        echo "<h1>No Offers Available Now</h1>";
    }
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         $hotel_images = explode(',', $row['imgs']);
    //        echo'
    //        <div class="detail-slider" style="height:400px !important">
    //        <div class="feature-slider" style="height:400px !important">

               
    //            ';
    //            if(!empty($hotel_images)){
    //             for( $i = 0; $i < count($hotel_images);$i++){
    //                 echo'<img src="Admin/back/uploads/'.$hotel_images[$i].'" class="img-fluid offer-card-img" alt="hotel-img" style="height:400px !important"/>';
    //             }
                
    //         }else{
    //             echo '<img src="images/brightplace.png" class="img-fluid offer-card-img" alt="hotel-img" />';
    //         }
    //            echo'
    //        </div><!-- end feature-slider -->

    //        <div class="feature-slider-nav">

    //        ';
    //        if(!empty($hotel_images)){
    //         for( $i = 0; $i < count($hotel_images);$i++){
    //             echo'<div><img src="Admin/back/uploads/'.$hotel_images[$i].'" class="img-responsive"
    //             alt="feature-thumb" /></div>';
    //         }
            
    //     }else{
    //         echo '<img src="images/brightplace.png" class="img-fluid offer-card-img" alt="hotel-img" />';
    //     }
    //        echo'
               
               
    //        </div><!-- end feature-slider-nav -->
    //    </div> <!-- end detail-slider -->

    //    <div class="detail-tabs">
    //        <ul class="nav nav-tabs nav-justified ">
    //            <li class="nav-item"><a class="nav-link active" href="#hotel-overview"
    //                    data-bs-toggle="tab" style="color:#444 !important">Hotel Overview</a></li>
              
    //        </ul>

    //        <div class="tab-content">

    //            <div id="hotel-overview" class="tab-pane in active">
    //                <div class="row" style="min-height: 210px">
    //                    <div class="col-md-6 col-md-6 tab-img">
    //                        <!-- <img src="images/hotel-detail-tab-1.jpg" class="img-responsive" alt="flight-detail-img" /> -->
    //                        '.$row['video_link'].'
    //                    </div><!-- end columns -->

    //                    <div class="col-md-6 col-md-6 tab-text">
    //                        <h3 class="m-0">'.$row['title'].'</h3>
    //                        <div class="rating">';
    //                        for ($i = 1; $i <= $row['stars']; $i++) {
    //                         echo "<span><i class='fa fa-star orange'></i></span>";
    //                     }

    //                        echo'</div>
    //                        <p>'.$row['description'].'</p>
    //                    </div><!-- end columns -->
    //                </div><!-- end row -->
    //            </div><!-- end hotel-overview -->

    //        </div><!-- end tab-content -->
    //    </div><!-- end detail-tabs -->

    //        ';

    //     }
    // } else {
    //     echo "<h1>No Offers Available Now</h1>";
    // }


} else {

}



?>


                           
                            <div class="available-blocks" id="available-rooms">
                                <h2>Available Rooms</h2>

                                <?php

if (is_numeric($id)) {
    $sql = "SELECT * From rooms WHERE hotel_id=$id";
    $result = $conectDB->query($sql);


    if ($result->num_rows > 0) {
        while ($roww = $result->fetch_assoc()) {
            $room_images = explode(',', $roww['images']);

            echo'
            <div class="list-block main-block room-block">
            <div class="list-content">
                <div class="main-img list-img room-img">
                    <!-- <a href="#">
                        <img src="images/available-room-1.jpg" class="img-responsive" alt="room-img" />
                    </a> -->
                    <div id="carouselExampleInterval'.time() .''.$roww['id'].'" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="../Admin/back/uploads/1713706864room-3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../Admin/back/uploads/1713706864room-3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Admin/back/uploads/1713706864room-3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    ';


                    

                   echo' <div class="main-mask">
                        <ul class="list-unstyled list-inline offer-price-1">
                            <li class="list-inline-item price">Starting</li>
                            <!-- <li class="list-inline-item rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star lightgrey"></i></span>
                            </li> -->
                        </ul>
                    </div><!-- end main-mask -->
                </div><!-- end room-img -->

                <div class="list-info room-info">
                    <h3 class="block-title"><a href="#">'.$roww['title'].'</a></h3>
                    <div class="d-flex align-items-center gap-5">
                        <p class="block-minorr m-0">Peds : '.$roww['pads'].'</p>
                        <p class="block-minorr m-0">Space : '.$roww['space'].'ft</p>
                    </div>

                    <p>'.$roww['description'].'</p>
                    <!-- <a href="#" class="btn btn-orange btn-lg">View More</a> -->
                    <ul class="room-opt">
                    ';
                    if($roww['air'] == 1){
                        echo'<li> <i class="fa-solid fa-snowflake"></i> <span>Air conditioning</span>
                        </li>';
                    }else{
                        echo '';
                    }
                    if($roww['wifi'] == 1){
                        echo'<li> <i class="fa-solid fa-wifi"></i> <span>WIFI</span></li>';
                    }else{
                        echo '';
                    }
                    if($roww['palcon'] == 1){
                        echo'<li> <svg class="bk-icon -streamline-resort" height="16" width="16"
                        viewBox="0 0 24 24" role="presentation" aria-hidden="true"
                        focusable="false">
                        <path
                            d="M.768 11.413l1.5 6.75a.75.75 0 0 0 1.464-.326l-1.5-6.75a.75.75 0 0 0-1.464.326zM2.22 23.456l1.5-5.25L3 18.75h3a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 0 1.5 0V19.5A2.25 2.25 0 0 0 6 17.25H3a.75.75 0 0 0-.721.544l-1.5 5.25a.75.75 0 1 0 1.442.412zm19.547-12.369l-1.5 6.75a.75.75 0 1 0 1.464.326l1.5-6.75a.75.75 0 1 0-1.464-.326zm1.453 11.957l-1.5-5.25A.75.75 0 0 0 21 17.25h-3a2.25 2.25 0 0 0-2.25 2.25v3.75a.75.75 0 0 0 1.5 0V19.5a.75.75 0 0 1 .75-.75h3l-.721-.544 1.5 5.25a.75.75 0 1 0 1.442-.412zM11.25 6.75v16.5a.75.75 0 0 0 1.5 0V6.75a.75.75 0 0 0-1.5 0zm-4.5 7.5h10.5a.75.75 0 0 0 0-1.5H6.75a.75.75 0 0 0 0 1.5zM1.5 6l10.064-4.37c.297-.161.575-.161.803-.033l10.178 4.425L22.5 6H1.5zm0 1.5h21a1.5 1.5 0 0 0 .689-2.832L13.034.255c-.616-.35-1.452-.35-2.136.034L.858 4.646c-.544.28-.856.792-.857 1.352A1.5 1.5 0 0 0 1.499 7.5z">
                        </path>
                    </svg> <span>Balcony</span></li>';
                    }else{
                        echo '';
                    }
                    if($roww['bath'] == 1){
                        echo' <li> <i class="fa-sharp fa-solid fa-shower"></i> <span>Ensuite
                        bathroom</span></li>';
                    }else{
                        echo '';
                    }
                    if($roww['heater'] == 1){
                        echo' <li> <i class="fa-light fa-heat"></i> <span>Eectric kettle</span></li>';
                    }else{
                        echo '';
                    }
                    if($roww['panio'] == 1){
                        echo'<li> <i class="fa-sharp fa-regular fa-bath"></i> <span>Bath tub</span>
                        </li>';
                    }else{
                        echo '';
                    }
    
                    echo '</ul>
                </div><!-- end room-info -->
            </div><!-- end list-content -->
        </div>
            ';


        }
    } else {
        echo "<h1>No Available Rooms Now</h1>";
    }

} else {

}



?>


                                

                            </div><!-- end available-rooms -->



                        </div><!-- end columns -->

                        <div class="col-12 col-md-12 col-md-3 col-lg-3 side-bar right-side-bar">

                            <div class="side-bar-block booking-form-block">

                                <div class="booking-form">
                                    <h3>Book Hotel</h3>

                                    <form id="hotel_frm_booking" name="hotel_frm_booking" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name"
                                                id="txt_first_name" name="txt_first_name" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                id="txt_last_name" name="txt_last_name" />
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" id="txt_email"
                                                name="txt_email" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone" id="txt_phone"
                                                name="txt_phone" />
                                        </div>

                                        <!-- <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Adults"  id="txt_adults" name="txt_adults"/>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Child"  id="txt_child" name="txt_child"/>
                                        </div> -->

                                        <div class="form-group">
                                            <input type="text" class="form-control dpd1" placeholder="Arrival Date"
                                                id="txt_arriv_date" name="txt_arriv_date" /> <i
                                                class="fa fa-calendar"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control dpd2" placeholder="Departure Date"
                                                id="txt_dept_date" name="txt_dept_date" /> <i
                                                class="fa fa-calendar"></i>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-md-12 col-lg-6 no-sp-r">
                                                <div class="form-group right-icon">
                                                    <select class="form-control" id="txt_rooms" name="txt_rooms">
                                                        <option selected value="">Rooms</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-md-12 col-lg-6 no-sp-l">
                                                <div class="form-group right-icon">
                                                    <select class="form-control" id="txt_beds" name="txt_beds">
                                                        <option selected value="">Beds</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-md-12 col-lg-6 no-sp-r">
                                                <div class="form-group right-icon">
                                                    <select class="form-control" id="txt_adults" name="txt_adults">
                                                        <option selected value="">Adults</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-md-12 col-lg-6 no-sp-l">
                                                <div class="form-group right-icon">
                                                    <select class="form-control" id="txt_children" name="txt_children">
                                                        <option selected value="">Children</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-md-12 text-center" id="result_msg"></div>
                                        <button class="btn btn-block btn-orange w-100" type="submit" id="submit"
                                            name="submit">Confirm Booking</button>
                                    </form>

                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->


                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end hotel-details -->
        </section><!-- end innerpage-wrapper -->


        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Best Price Guarantee</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>Safe and Secure</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Best Travel Agents</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-md-3">
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


        <?php 
include('includes/footer.php');
?>