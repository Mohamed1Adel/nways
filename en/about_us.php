<?php 
include("includes/header.php");
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
              <input class="float-left" type="text" placeholder="Search.." name="search">
              <button class="float-left" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div><!-- End overlay-content -->
        </div><!-- End myOverlay -->
        
        

<?php 
include("includes/nav.php")
?>
        
        
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="about-content-2" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 col-sm-12 col-lg-5 col-xl-4">
                            <div id="abt-cnt-2-img">
                                <img src="images/about-content-2.png" class="img-fluid" alt="about-img" />
                            </div><!-- end abt-cnt-2-img -->
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-sm-12 col-lg-7 col-xl-8">
                            <div id="abt-cnt-2-text">
                                <h2>Welcome to<span><span><i class="fa-regular fa-globe"></i> Bright Ways</span> Travel</span></h2>
                                <p>Bright ways offers you all kinds of tourism & travels ,We will help you to know & discover more about the most beautiful places you had never been before in & outside Egypt as well interesting activities with a high level of service and affordable rates.</p>
                                <div class="row">
                                    <div class="col-4 col-sm-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-diamond"></i></span>
                                            <h4>Best Service</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-4 col-sm-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-clock-o"></i></span>
                                            <h4>24/7 Availability</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-4 col-sm-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-star"></i></span>
                                            <h4>5 Star Rating</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end abt-cnt-2-text -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end about-content-2 -->
            
            
            
        </section><!-- end innerpage-wrapper -->
        
        

        

        
        
<?php
include("includes/footer.php");
?>