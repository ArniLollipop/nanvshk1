@extends('layouts.app')
@section('content') 

    <div class="boxed_wrapper">

  
 
        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
                <div 
                    class="google-map p_relative d_block" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="assets/images/icons/map-marker-2.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section end -->


        <!-- contact-four -->
        <section class="contact-four p_relative sec-pad">
            <div class="shape">
                <div class="shape-1 p_absolute l_0 t_0" style="background-image: url(assets/images/shape/shape-210.png);"></div>
                <div class="shape-2 p_absolute b_0 r_150" style="background-image: url(assets/images/shape/shape-211.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                        <div class="info-inner">
                            <div class="sec-title p_relative d_block mb_40">
                                <h5 class="d_block fs_17 lh_20 fw_sbold uppercase mb_17">Будьте на связи</h5>
                                <h3 class="d_block fs_30 lh_40 fw_bold">Есть вопросы, предложения? <br>Пишите нам</h3>
                            </div>
                            <ul class="info-list clearfix">
                                <li class="p_relative d_block pl_100 pb_18 mb_25">
                                    <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                        <div class="icon p_relative d_iblock"><i class="icon-180"></i></div>
                                        <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-133.png" alt=""></div>
                                    </div>
                                    <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">Адрес</h4>
                                    <p class="font_family_poppins">Республика Казахстан, индекс 050040, г. Алматы, Бостандыкский район, микрорайон Коктем-3, дом 24, н.п. №379.</p>
                                </li>
                                <li class="p_relative d_block pl_100 pb_18 mb_25">
                                    <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                        <div class="icon p_relative d_iblock"><i class="icon-181"></i></div>
                                        <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-134.png" alt=""></div>
                                    </div>
                                    <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">Email</h4>
                                    <p class="font_family_poppins"><a href="mailto:nanvshk@gmail.com">nanvshk@gmail.com</a><br /></p>
                                </li>
                                <li class="p_relative d_block pl_100 pb_18">
                                    <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                        <div class="icon p_relative d_iblock"><i class="icon-182"></i></div>
                                        <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-135.png" alt=""></div>
                                    </div>
                                    <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">Свяжитесь с нами:</h4>
                                    <p class="font_family_poppins"><a href="tel:11165458856">+(111)65-458-856</a><br /><a href="tel:11165458856">+(111)65-458-856</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner p_relative ml_40 pt_45 pr_50 pb_50 pl_50 b_radius_10 b_shadow_6">
                            <div class="text p_relative d_block mb_35">
                                <h3 class="d_block fs_30 lh_40 fw_bold">Отправить сообщение</h3>
                            </div>
                            <form method="post" action="sendemail.php" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="ФИО" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Номер телефона">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Тема">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Ваш комментарий"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn theme-btn-eight" type="submit" name="submit-form">Отправить<i class="icon-4"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-four end -->


        <!-- footer-three -->
        <footer class="footer-three p_relative service-page">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute l_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-62.png);"></div>
                <div class="pattern-2 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-63.png);"></div>
            </div>
            <div class="auto-container">
                <div class="footer-widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="footer-logo p_relative d_block mb_35"><a href="index-3.html"><img src="assets/images/logo-20.png" alt=""></a></figure>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incididunt labore dolore magna aliqua enim ad minim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_80 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="widget-title">
                                    <h4>Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">Job</a></li>
                                        <li><a href="index.html">opportunities</a></li>
                                        <li><a href="index.html">Location</a></li>
                                        <li><a href="index.html">Article</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="widget-title">
                                    <h4>Services</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">Job</a></li>
                                        <li><a href="index.html">opportunities</a></li>
                                        <li><a href="index.html">Location</a></li>
                                        <li><a href="index.html">Article</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="widget-title">
                                    <h4>Contacts</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                        <li><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                        <li><a href="mailto:sample@example.com">sample@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left">
                            <p><a href="index.html">ATRIX</a> &copy; 2021 All Right Reserved</p>
                        </div>
                        <ul class="footer-nav clearfix pull-right">
                            <li><a href="index.html">Terms of Service</a></li>
                            <li><a href="index.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-three end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text g_color_2">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
    @endsection
