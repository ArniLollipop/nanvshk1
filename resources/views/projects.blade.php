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
        <!-- <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Project Grid 3</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Grid 3</li>
            </ul>
        </div> -->
    </div>
</section>
<!-- End Page Title -->


<!-- project-nine -->
<section class="project-nine project-page-3 p_relative pt_15 pb_100">
    <div class="outer-container pl_40 pr_40">
        <div class="sortable-masonry">
            <div class="filters mb_70">
                <!-- <ul class="filter-tabs filter-btns clearfix centred">
                    <li class="active filter" data-role="button" data-filter=".all">All</li>
                    <li class="filter" data-role="button" data-filter=".analytis">Analytis</li>
                    <li class="filter" data-role="button" data-filter=".finance">Finance</li>
                    <li class="filter" data-role="button" data-filter=".business">Business</li>
                    <li class="filter" data-role="button" data-filter=".corporate">Corporate</li>
                </ul> -->
            </div>
            <div class="items-container row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product finance business">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="assets/images/project/project-56.jpg" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details') }}">Корпоративная информационная система «univer»</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details') }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all analytis business corporate">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="assets/images/project/project-57.jpg" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details') }}">Национальная платформа открытого образования казахстана moocs.kz</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details') }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product finance corporate">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="assets/images/project/project-58.jpg" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details') }}">Информационная система мониторинга мнений OMS (opinion monitor system)</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details') }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all analytis finance business">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="assets/images/project/project-59.jpg" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details') }}">«AKADEM KITAP» / Издательство «Өнегелі өмір»</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details') }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all business finance corporate">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="assets/images/project/project-60.jpg" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details') }}">Заслуженный деятель высшей школы</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details') }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all analytis business corporate">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="assets/images/project/project-61.jpg" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details') }}">Центрально-Азиатская Ассоциация по аккредитации образования (CAAAE).</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details') }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<!-- project-nine end -->


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
                        <figure class="footer-logo p_relative d_block mb_35"><a href="index-3.html"><img src="assets/images/footer-logo-8.png" alt=""></a></figure>
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