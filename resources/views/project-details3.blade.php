@extends('layouts.app')
@section('content') 

<div class="boxed_wrapper">


<!-- Page Title -->
<section class="page-title style-two p_relative centred">
    <div class="pattern-layer">
        <div class="shape-1 p_absolute l_120 t_60 rotate-me" style="background-image: url(assets/images/shape/shape-176.png);"></div>
        <div class="shape-2 p_absolute t_120 r_170 float-bob-y" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <!-- <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Artboard Studio</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Details 2</li> -->
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
                <div class="col-lg-12 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_40">
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15">НАЦИОНАЛЬНАЯ ПЛАТФОРМА ОТКРЫТОГО ОБРАЗОВАНИЯ КАЗАХСТАНА    MOOCS.KZ</h3></br>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_70">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/project3.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/project/project3.jpg" alt=""></a></figure>
                </div>
               </div>
        </div>
        <!-- clients-one -->
<section class="clients-one p_relative pb_70">
    <div class="auto-container">
        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl1.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl1.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl2.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl2.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl3.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl3.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl4.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl4.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl5.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl5.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl6.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl6.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl7.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl7.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl8.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl8.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl9.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl9.jpg" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/cl10.jpg" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/cl10.jpg" alt=""></a></figure>
            </div>
        </div>
    </div>
</section>
<!-- clients-one end -->
       
        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="{{ route('project-details2') }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>Предыдущий проект</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="{{ route('project-details4') }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">Следующий проект<i class="far fa-long-arrow-right"></i></a>
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
