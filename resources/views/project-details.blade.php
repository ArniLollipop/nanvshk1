@extends('layouts.app')
@section('content') 

<div class="boxed_wrapper">


<!-- mouse-pointer -->
<div class="mouse-pointer display_none" id="mouse-pointer">
    <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
</div>
<!-- mouse-pointer end -->


<!-- preloader -->
<div class="loader-wrap">
    <div class="preloader">
        <div class="preloader-close">x</div>
        <div id="handle-preloader" class="handle-preloader home-11">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="t" class="letters-loading">
                        t
                    </span>
                    <span data-text-preloader="r" class="letters-loading">
                        r
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="x" class="letters-loading">
                        x
                    </span>
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- Page Title -->
<section class="page-title style-two p_relative centred">
    <div class="pattern-layer">
        <div class="shape-1 p_absolute l_120 t_60 rotate-me" style="background-image: url(assets/images/shape/shape-176.png);"></div>
        <div class="shape-2 p_absolute t_120 r_170 float-bob-y" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Artboard Studio</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Details 2</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- project-details -->
<section class="project-details p_relative pb_110">
    <div class="auto-container">
        <div class="project-info p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_40">
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15">Project Info</h3>
                        <p class="font_family_poppins">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. excepteur sint occae cat cupidatat non proident sunt in culpa qui officia deseunt molit anim est laborum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archit ecto beatae vitae dicta sunt explicabo ipsam voluptatem quia.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info p_relative d_block pl_100 pt_20 pb_20 mt_15">
                        <ul class="info-list clearfix">
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Client:</span>Robertson</li>
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Date:</span>November, 2021</li>
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Client:</span><a href="project-details.html">Business</a>, <a href="project-details.html">Invest</a></li>
                            <li class="social-links p_relative d_block fs_18 font_family_inter"><span class="d_iblock fw_medium color_black">Social:</span><a href="project-details.html"><i class="fab fa-facebook-f"></i></a><a href="project-details.html"><i class="fab fa-twitter"></i></a><a href="project-details.html"><i class="fab fa-pinterest-p"></i></a><a href="project-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/project-94.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/project/project-94.jpg" alt=""></a></figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/project-95.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/project/project-95.jpg" alt=""></a></figure>
                </div>
            </div>
        </div>
        <div class="lower-box p_relative d_block mb_100">
            <div class="text">
                <p class="font_family_poppins mb_25">Exercitation ullamco laboris nisi ut aliquip ex commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. excepteur sint occae cat cupidatat non proident sunt in culpa officia deseunt molit anim est laborum Sed perspiciatis unde omnis iste natus error sit voluptatem acusantium dolore mque laudantium, totam rem aperiam eaque ipsa quae illo inventore veritatis et quasi archit ecto beatae vitae dicta sunt explic.</p>
                <p class="font_family_poppins">Abodit ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
            </div>
        </div>
        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="project-details.html" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>Prev Project</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="project-details.html" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">Next Project<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- project-details end -->


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

<!-- main-js -->
<script src="assets/js/script.js"></script>


@endsection
