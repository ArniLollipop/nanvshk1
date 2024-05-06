@extends('layouts.app')
@section('content')    

<div class="boxed_wrapper">





<!-- Page Title -->
<!-- <section class="page-title style-two p_relative centred">
    <div class="pattern-layer">
        <div class="shape-1 p_absolute l_120 t_60 rotate-me" style="background-image: url(assets/images/shape/shape-176.png);"></div>
        <div class="shape-2 p_absolute t_120 r_170 float-bob-y" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    </div>
    <div class="auto-container"> -->
        <!-- <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Project Grid 3</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Grid 3</li>
            </ul>
        </div> -->
    <!-- </div>
</section> -->
<!-- End Page Title -->

<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-details-2 blog-details p_relative pt_140 pb_150">
    <div class="auto-container">
        <div class="blog-details-content p_relative d_block mr_20">
            <div class="blog-post p_relative d_block mb_30">
                <div class="content-one p_relative d_block mb_30">
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                            <div class="text">
                                <h3 class="d_block fs_30 lh_30 mb_30">@lang('main.projects.title')</h3>
                               
                                    <ul class="clearfix p_relative d_block">
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details1', app()->getLocale()) }}">1. @lang('main.projects.prtitle')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details2', app()->getLocale()) }}">2. @lang('main.project2.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details3', app()->getLocale()) }}">3. @lang('main.project3.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details4', app()->getLocale()) }}">4. @lang('main.project3.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details5', app()->getLocale()) }}">5. @lang('main.project5.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details6', app()->getLocale()) }}">6. @lang('main.project6.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details7', app()->getLocale()) }}">7. @lang('main.project7.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details7', app()->getLocale()) }}">8. @lang('main.project8.title')</a></h4> </li>

                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                   
            </div>
          

        </div>
        
    </div>
    
</section>
<!-- sidebar-page-container end -->

<!-- footer-two -->
<footer class="footer-two">
    <div class="auto-container">
       
        <div class="footer-widget-section">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <figure class="footer-logo p_relative d_block mb_35"><a href="/"><img src="assets/images/logo-3new.png" alt=""></a></figure>

                        <div class="text">
                            <!-- <p>Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incididunt labore dolore magna aliqua enim ad minim.</p> -->
                        </div>
                        <ul class="footer-social-two clearfix">
                                <li ><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-whatsapp"></i></a></li>
                               
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml_80 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4>@lang('main.links')</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                                <li><a href="{{ route('about', app()->getLocale()) }}">@lang('main.about2')</a></li>
                                                <li><a href="{{ route('about-2', app()->getLocale()) }}">@lang('main.about3')</a></li>
                                                <li><a href="{{ route('about-3', app()->getLocale()) }}">@lang('main.about4')</a></li>  
                                                <li><a href="{{ route('about-4', app()->getLocale()) }}">@lang('main.about6')</a></li>                                                                                 
                                                <li><a href="{{ route('about-5', app()->getLocale()) }}">@lang('main.about8')</a></li> 
                                                <li><a href="{{ route('projects', app()->getLocale()) }}">@lang('main.about10')</a></li>   
                                                <li><a href="{{ route('news', app()->getLocale()) }}">@lang('main.about.news')</a> </li> 
                                              

                                               
                              
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4>@lang('main.about.contacts')</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>@lang('main.about.contactinfo')</li>
                                <li><a href="tel:77770565527">+7 (777)- 056-55-27</a></li>
                                <li><a href="mailto:nanvshk@gmail.com">nanvshk@gmail.com</a></li>
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
                    <p><a href="/">@lang('main.about.nanvshk') &copy; {{ date('Y') }} @lang('main.about.reserved')</a></p>
                </div>
                <ul class="footer-nav clearfix pull-right">
                    <!-- <li><a href="index.html">Terms of Service</a></li>
                    <li><a href="index.html">Privacy Policy</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer-two end -->



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


@endsection