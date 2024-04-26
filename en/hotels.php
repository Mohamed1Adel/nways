<?php 
include("includes/header.php")
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
include("includes/nav.php")
?>
        

        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="hotel-listing" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">            
                        
                        <div class="col-12 col-md-12 col-lg-3 side-bar left-side-bar">
                                        
                            <div class="side-bar-block filter-block">
                                <p>Find your dream hotel today</p>
                                
                                <div class="panels-group">
                                    

                                    <div class="card">
                                        <div class="card-header">                 
                                            <a href="#panel-3" data-bs-toggle="collapse" >Rating <span><i class="fa fa-angle-down"></i></span></a>
                                        </div><!-- end card-header -->
                                        
                                        <div id="panel-3" class="panel-collapse collapse">
                                            <div class="card-body text-start">
                                                <ul class="list-unstyled">
                                                    <li class="custom-check"><input type="checkbox" id="check14" name="checkbox"/>
                                                    <label for="check14"><span><i class="fa fa-check"></i></span>1 Star</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check15" name="checkbox"/>
                                                    <label for="check15"><span><i class="fa fa-check"></i></span>2 Star</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check16" name="checkbox"/>
                                                    <label for="check16"><span><i class="fa fa-check"></i></span>3 Star</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check17" name="checkbox"/>
                                                    <label for="check17"><span><i class="fa fa-check"></i></span>4 Star</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check18" name="checkbox"/>
                                                    <label for="check18"><span><i class="fa fa-check"></i></span>5 Star</label></li>
                                                </ul>
                                            </div><!-- end card-body -->
                                        </div><!-- end panel-collapse -->
                                    </div><!-- end panel-default -->
                                    
                                </div><!-- end panel-group -->
                                
                                <div class="price-slider">
                                    <p><input type="text" id="amount" readonly></p>
                                    <div id="slider-range"></div>
                                </div><!-- end price-slider -->
                            </div><!-- end side-bar-block -->
                            
                            <div class="row">
                            
                                
                                <div class="col-12 col-md-6 col-lg-12">    
                                    <div class="side-bar-block support-block">
                                        <h3>Contact Us</h3>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+201006171066</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end columns --> 
                        
                        <div class="col-12 col-md-12 col-lg-9 col-xl-9 content-side">
                                    

                        <?php
// Pagination variables
$limit = 3; // Number of items per page
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number

// Calculate offset for SQL query
$offset = ($page - 1) * $limit;

$sql = "SELECT * From hotels WHERE status = 1 LIMIT $limit OFFSET $offset";
$result = $conectDB->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $hotel_images = explode(',', $row['imgs']);

        echo '
        <div class="list-block main-block h-list-block">
        <div class="list-content" >
            <div class="main-img list-img h-list-img">
                <a href="hotel-detail-left-sidebar.html">
                   ';
                   if (!empty($hotel_images)) {
                    echo '<img src="../Admin/back/uploads/' . $hotel_images['0'] . '" class="img-fluid offer-card-img " alt="hotel-img" style="max-height:280px !important"/>';
                } else {
                    echo '<img src="images/brightplace.png" class="img-fluid offer-card-img " alt="hotel-img" />';
                }
                   
                   echo'
                </a>
                <div class="main-mask">
                    <ul class="list-unstyled list-inline offer-price-1">
                        <li class="list-inline-item price "><span>Starting</span><span class="divider">|</span><span class="pkg">'.$row['price'].'L.E</span></li>
                        <li class="list-inline-item rating">
                        ';
                        for ($i = 1; $i <= $row['stars']; $i++) {
                            echo "<span><i class='fa fa-star orange'></i></span>";
                        }
                        echo'</li>
                    </ul>
                </div><!-- end main-mask -->
            </div><!-- end h-list-img -->
            
            <div class="list-info h-list-info">
                <h3 class="block-title"><a href="hotel-detail.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h3>
                <p class="block-minor">Location: ' . $row['city'] . '</p>
                <p>'.$row['description'].'</p>
                <a href="hotel-detail.php?id=' . $row['id'] . '" class="btn btn-orange btn-lg">View More</a>
             </div><!-- end h-list-info -->
        </div><!-- end list-content -->
    </div><!-- end h-list-block -->
        ';

    }
} else {
    echo "<h1>No Offers Available Now</h1>";
}



?>


                            
                           

                            

                            
                            
                            <?php
                            
                            // Pagination links
$sql = "SELECT COUNT(*) AS total FROM hotels";
$result = $conectDB->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $limit);

// if ($page > 1) {
//     echo "<a href='?page=1'>First</a> ";
//     $prev_page = $page - 1;
//     echo "<a href='?page=$prev_page'>Prev</a> ";
// }

// if ($page < $total_pages) {
//     $next_page = $page + 1;
//     echo "<a href='?page=$next_page'>Next</a> ";
//     echo "<a href='?page=$total_pages'>Last</a> ";
// }
// echo "<br><br>Pagination: ";
// for ($i = 1; $i <= $total_pages; $i++) {
//     echo "<a href='?page=$i'>$i</a> ";
// }

                          echo'  <div class="pages pagination-margin">
                                <ol class="pagination justify-content-center">
                                ';
                                if ($page > 1) {
                                    // echo '<li><a href="?page=1" aria-label="Previous"><span aria-hidden="true">First</a></li>';
                                    $prev_page = $page - 1;
                                    echo '<li><a href="?page='.$prev_page.'" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>';
                                }
                                echo'
                                    
                                    ';
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        echo "<li><a '?page=$i'>$i</a></li>";
                                    }

                                    if ($page < $total_pages) {
                                        $next_page = $page + 1;
                                        echo '<li><a href="?page='.$next_page.'" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>' ;
                                        // echo '<li><a href="?page='.$total_pages.'" aria-label="Next"><span aria-hidden="true">Last</span></a></li>';
                                    }
                                    echo'
                                    
                                    
                                </ol>
                            </div><!-- end pages -->
                        </div><!-- end columns -->';
                        ?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end hotel-listing -->
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
        
        
 <?php 
 include("includes/footer.php")
 ?>