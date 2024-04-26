        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">Contact Us</h3>
                            <ul class="list-unstyled">
                                <li><span><i class="fa fa-map-marker"></i></span>4 El Galaa St., Abdel Moneim Riad Square, Doha Maspero Tower, residential entrance, sixth floor, above the air bus, Cairo, Egypt</li>
                                <li><span><i class="fa fa-phone"></i></span>+201006171066</li>
                                <li><span><i class="fa fa-envelope"></i></span>Info@brightwaystravel-egy.com</li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-2 col-xl-2 footer-widget ftr-links">
                            <h3 class="footer-heading">Useful Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div><!-- end columns -->

                        <!-- <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-links ftr-pad-left">
                            <h3 class="footer-heading">RESOURCES</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div> -->

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 footer-widget ftr-about">
                            <h3 class="footer-heading">ABOUT US</h3>
                            <p>Bright ways offers you all kinds of tourism & travels ,We will help you to know & discover more about the most beautiful places you had never been before in & outside Egypt as well interesting activities with a high level of service and affordable rates.</p>
                            <ul class="social-links list-inline list-unstyled">
                                <li class="list-inline-item"><a href="#"><span><i class="fa-brands fa-facebook"></i></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a>
                                </li>
                                
                               
                                <li class="list-inline-item"><a href="#"><span><i
                                                class="fa-brands fa-instagram"></i></span></a></li>
                               
                                <li class="list-inline-item"><a href="#"><span><i
                                                class="fa-brands fa-youtube-play"></i></span></a></li>
                            </ul>
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="copyright">
                            <p>© 2024 <a href="#">Ramo Development</a>. All rights reserved.</p>
                        </div><!-- end columns -->

                       
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->

        </section><!-- end footer -->


        <div id="popup-ad" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn close" data-bs-dismiss="modal">&times;</button>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="popup-ad-text">
                                    <h4>Get</h4>
                                    <h2><span>20%</span> off</h2>
                                    <h4>on all flights booking</h4>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset
                                        pri.</p>
                                    <a href="#" class="btn btn-orange">Book Now</a>
                                </div><!-- end popup-ad-text -->
                            </div><!-- end columns -->

                            <div class="col-12 col-md-6">
                                <div class="popup-ad-img">
                                    <img src="images/about-content-2.png" class="img-fluid" />
                                </div><!-- end popup-ad-img -->
                            </div><!-- end columns -->
                        </div><!-- end row -->

                    </div><!-- end modal-bpdy -->
                </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
        </div><!-- end popup-ad -->
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
    <script src="js/custom-video.js"></script>
    <!-- <script src="js/popup-ad.js"></script> -->
    <!-- Page Scripts Ends -->
    <script>
function GoEng(){
    var url = window.location.href;
    var new_url = url.replace('/ar/','/en/');
    localStorage.setItem('user_lang', 'en');
    window.location = new_url;
}
function GoAr(){
    var url = window.location.href;
    var new_url = url.replace('/en/','/ar/');
    localStorage.setItem('user_lang', 'ar');
    window.location = new_url;
}
localStorage.setItem('user_lang', 'ar');
</script>
</body>

</html>