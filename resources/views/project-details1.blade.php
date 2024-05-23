@extends('layouts.app')
@section('content') 

<div class="boxed_wrapper">


<!-- Page Title -->
<section class="page-title style-two p_relative centred">
    <div class="pattern-layer img--change">
        <div class="shape-1 p_absolute l_120 t_60 rotate-me" style="background-image: url({{ asset('assets/images/shape/shape-176.png') }});"></div>
        <div class="shape-2 p_absolute t_120 r_170 float-bob-y" style="background-image: url({{ asset('assets/images/shape/shape-56.png') }});"></div>
        <div class="shape-3 p_absolute l_0 b_0" style="background-image: url({{ asset('assets/images/shape/shape-189.png') }});"></div>

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
        <div class="project-info p_relative d_block mb_30">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_40">
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15 text--resize">@lang('main.projects.prtitle')</h3></br>
                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/univer1.jpg') }}" class="lightbox-image img--change" data-fancybox="gallery"><img src="{{ asset('assets/images/project/univer1.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/univer.jpg') }}" class="lightbox-image img--change" data-fancybox="gallery"><img src="{{ asset('assets/images/project/univer.jpg') }}" alt=""></a></figure>
                                </div>                            
                            </div>
                        </div>


                        <h4 class="d_block  lh_40 fw_sbold mb_15 text--resize">@lang('main.projects.info1')</h4>
                        <h4 class="d_block  lh_40 fw_sbold mb_15 text--resize">@lang('main.projects.info2')</h4>
                        <!-- <div class="col-lg-4 col-md-12 col-sm-12 info-column"> -->
                            <!-- <div class="info p_relative d_block pl_100 pt_20 pb_20 mt_15"> -->
                                <ul class="info-list clearfix">
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info3')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info4')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info5')</li>
                                </ul>
                            <!-- </div> -->
                        <!-- </div> -->
                        <h4 class="d_block  lh_40 fw_sbold mb_15 text--resize">@lang('main.projects.info6')</h4>
                                <ul class="info-list clearfix">
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info7')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info8')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info9')</li>
                                </ul>

                         <!-- clients-one -->
        <section class="clients-one p_relative pb_70 pt_40">
            <div class="auto-container">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title-two p_relative d_block mr_100">
                                <!-- <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_50">@lang('main.project2.partners')</span><br /> -->
                                <!-- <h2 class="d_block fs_40 fw_bold font_family_oxygen">The Best Solutions for Best Business</h2> -->
                            </div>
                        </div>
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p1.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p1.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p2.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p2.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p3.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p3.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p4.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p4.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p5.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p5.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p6.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p6.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p7.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p7.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p8.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p8.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p9.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p9.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p10.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p10.jpg') }}" alt=""></a></figure>
                            </div>
                            <div class="clients-logo-box">
                                <figure class="image img--change"><a href="index.html"><img src="{{ asset('assets/images/clients/p11.jpg') }}" alt=""></a></figure>
                                <figure class="overlay-image"><a href="index.html"><img src="{{ asset('assets/images/clients/p11.jpg') }}" alt=""></a></figure>
                            </div>
                        </div>
            </div>
        </section>
        <!-- clients-one end -->
                                <div data-animation-box class="image-box p_relative d_block mb_70">
                                    <div class="row clearfix">
                                        
                                                                        @if(app()->getLocale() == 'ru')
                                                                        <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                                                                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/univer2.jpg') }}" class="lightbox-image img--change" data-fancybox="gallery"><img src="{{ asset('assets/images/project/univer2.jpg') }}" alt=""></a></figure>
                                                                        </div>                                              
                                                                        @elseif(app()->getLocale() == 'kz')
                                                                        <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                                                                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/univer2kz.jpg') }}" class="lightbox-image img--change" data-fancybox="gallery"><img src="{{ asset('assets/images/project/univer2kz.jpg') }}" alt=""></a></figure>
                                                                        </div>
                                                                        @else
                                                                        <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                                                                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/univer2en.jpg') }}" class="lightbox-image img--change" data-fancybox="gallery"><img src="{{ asset('assets/images/project/univer2en.png') }}" alt=""></a></figure>
                                                                        </div>                                               
                                                                        @endif
                                    
                                    </div>
                                </div>
                        <h4 class="d_block  lh_40 fw_sbold mb_15 text--resize">@lang('main.projects.info10')</h4> 
    
                        <p class="font_family_poppins mb_25 color_black fs_18 text--resize">@lang('main.projects.info11')</p>
                        <p class="font_family_poppins mb_25 color_black fs_18 text--resize">@lang('main.projects.info12')</p>
                        <p class="font_family_poppins mb_25 color_black fs_18 text--resize"> @lang('main.projects.info13')</p>
                        <p class="font_family_poppins mb_25 color_black fs_18 text--resize">@lang('main.projects.info14')</p>
                        <p class="font_family_poppins  color_black fs_18 text--resize">@lang('main.projects.info15')</p>

                    </div>
                </div>
                
            </div>
        </div>
        
        <h4 class="d_block  lh_40 fw_sbold mb_15 text--resize">@lang('main.projects.info16')</h4>

        <div class="lower-box p_relative d_block">
            <div class="text">
                <ul class="info-list clearfix">
                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info17')</li>
                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info18')</li>
                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black text--resize">@lang('main.projects.info19')</li>
                </ul>
            </div>
        </div>
        <h4 class="d_block  lh_40 fw_sbold mb_15 text--resize">@lang('main.projects.info20')</h4>
        <p class="font_family_poppins mb_25 color_black fs_18 text--resize">@lang('main.projects.info21')</p>

        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="{{ route('project-details8', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black text--resize" aria-label="Предыдущий проект"><i class="far fa-long-arrow-left"></i>@lang('main.projects.prev')</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="{{ route('project-details2', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black text--resize" aria-label="Следующий проект">@lang('main.projects.next')<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- project-details end -->







@endsection
