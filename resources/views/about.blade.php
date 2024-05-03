@extends('layouts.app')
@section('content')    

<div class="boxed_wrapper">



<!-- Page Title -->
<section class="page-title p_relative centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/page-title.jpg);"></div>
    <div class="auto-container">
        <!-- <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10">About Us Classic</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20">Pages</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter">About Us Classic</li>
            </ul>
        </div> -->
    </div>
</section>
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
                                <h3 class="d_block fs_30 lh_30 mb_30">@lang('main.academy.info1')</h3>
                                <p class="font_family_poppins fs_20  mb_25 color_black"> @lang('main.academy.info2')</p>
                                <p class="font_family_poppins fs_20  mb_25 color_black">@lang('main.academy.info3')</p>                               
                                <p class="font_family_poppins fs_20  mb_25 color_black">@lang('main.academy.info4')</p>
                                <p class="font_family_poppins fs_20  mb_25 color_black">@lang('main.academy.info5')</p>
                                <p class="font_family_poppins fs_20  mb_25 color_black">@lang('main.academy.info6')</p>
                                <h3 class="d_block fs_30 lh_30 mb_30">@lang('main.academy.info7')</h3>
                                    <ul class="list clearfix p_relative d_block">
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info8')</li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info9')</li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25  mb_12 color_black">@lang('main.academy.info10')</li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info11') </li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info12')</li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info13') </li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info14')</li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info15')</li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info16') </li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info17')</li>
                                        <li class="p_relative d_block fs_20 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">@lang('main.academy.info18') </li>


                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- funfact-two -->
                    <section class="funfact-two pt_140 text-center p_relative">
                        <div class="auto-container">
                            <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="inner-box p_relative d_block">
                                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19">
                                                <span class="count-text" data-speed="2500" data-stop="32">0</span>
                                            </div>
                                            <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">@lang('main.about.inform1')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box p_relative d_block">
                                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19">
                                                <span class="count-text" data-speed="2500" data-stop="43">0</span>
                                            </div>
                                            <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">@lang('main.about.inform2')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="inner-box p_relative d_block">
                                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19">
                                                <span class="count-text" data-speed="2500" data-stop="136">0</span>
                                            </div>
                                            <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">@lang('main.about.inform3')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="inner-box p_relative d_block">
                                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19">
                                                <span class="count-text" data-speed="2500" data-stop="1.2">0</span><span>M</span>
                                            </div>
                                            <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">@lang('main.about.inform4')</p>
                                        </div>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                    </section>
                    <!-- funfact-two end -->
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
                        <figure class="footer-logo p_relative d_block mb_35"><a href="index-3.html"><img src="{{ asset('assets/images/logo-3new.png') }}" alt=""></a></figure>

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
                            <h4>Ссылки</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                                <li><a href="{{ route('about', app()->getLocale()) }}">@lang('main.about2')</a></li>
                                                <li><a href="{{ route('about-2', app()->getLocale()) }}">@lang('main.about3')</a></li>
                                                <li><a href="{{ route('about-3', app()->getLocale()) }}">@lang('main.about4')</a></li>  
                                                <li><a href="{{ route('about-4', app()->getLocale()) }}">@lang('main.about6')</a></li>                                                                                 
                                                <li><a href="{{ route('about-5', app()->getLocale()) }}">@lang('main.about8')</a></li> 
                                                <li><a href="{{ route('projects', app()->getLocale()) }}">@lang('main.about10')</a></li>   
                                                <li><a href="{{ route('news', app()->getLocale()) }}">@lang('main.about11')</a> </li> 
                                              

                                               
                              
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
                    <p><a href="/">@lang('main.about.nanvshk')</a> &copy; {{ date('Y') }} @lang('main.about.reserved')</p>
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