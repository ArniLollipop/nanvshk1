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



        <!-- team-details -->
        <section class="team-details-three p_relative pt_130">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        <div class="image-box p_relative d_block centred mr_20">
                            <figure class="image p_relative d_block b_radius_50 mb_25"><img src="{{ asset('assets/images/team/team-60.jpg') }}" alt=""></figure>
                            <div class="team-info">
                                <h4 class="d_block fs_20 lh_30 mb_2">@lang('main.president.info1')</h4>
                                <p class="font_family_poppins">@lang('main.president.info2')</p>
                                <p class="font_family_poppins mb_30">@lang('main.president.info3')</p>
                                <ul class="social-links clearfix">
                                    <li class="p_relative d_iblock"><a href="team-details.html" class="p_relative d_iblock w_40 h_40 lh_40 centred b_radius_50 fs_15"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="p_relative d_iblock"><a href="team-details.html" class="p_relative d_iblock w_40 h_40 lh_40 centred b_radius_50 fs_15"><i class="fab fa-twitter"></i></a></li>
                                    <li class="p_relative d_iblock"><a href="team-details.html" class="p_relative d_iblock w_40 h_40 lh_40 centred b_radius_50 fs_15"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="team-details-content">
                            
                            <div class="content-two p_relative d_block mb_55">
                                <div class="text">
                                    <h3 class="d_block fs_27 lh_30 mb_16">@lang('main.president.info4')</h3>
                                    <p class="font_family_poppins mb_25 fs_20 color_black">@lang('main.president.info5')</p>
                                    <p class="font_family_poppins mb_25 fs_20 color_black">@lang('main.president.info6')</p>
                                    <p class="font_family_poppins fs_20 color_black">@lang('main.president.info7')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-details end -->


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