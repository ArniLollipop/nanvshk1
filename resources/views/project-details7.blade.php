@extends('layouts.app')
@section('content') 

<div class="boxed_wrapper">

<!-- Page Title -->
<section class="page-title style-two p_relative centred">
    <div class="pattern-layer">
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
        <div class="project-info p_relative d_block mb_70">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_40">
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15">@lang('main.project7.title')</h3>
                        <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info1')</p>
                        <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info2')</p>
                        <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info3')</p>
                        <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info4')</p>
                    </div>
                </div>

                <h4 class="d_block fs_30 lh_40 fw_sbold mt_50">@lang('main.project7.info5')</h4>

                <!-- <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info p_relative d_block pl_100 pt_20 pb_20 mt_15">
                        <ul class="info-list clearfix">
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Client:</span>Robertson</li>
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Date:</span>November, 2021</li>
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Client:</span><a href="project-details.html">Business</a>, <a href="project-details.html">Invest</a></li>
                            <li class="social-links p_relative d_block fs_18 font_family_inter"><span class="d_iblock fw_medium color_black">Social:</span><a href="project-details.html"><i class="fab fa-facebook-f"></i></a><a href="project-details.html"><i class="fab fa-twitter"></i></a><a href="project-details.html"><i class="fab fa-pinterest-p"></i></a><a href="project-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr71.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr71.jpg') }}" alt=""></a></figure>
                </div>
                <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info6')</p> 
                <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info7') </p>              
             
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr72.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr72.jpg') }}" alt=""></a></figure>
                </div>
                <p class="font_family_poppins mb_25 color_black fs_18"> @lang('main.project7.info8')</p>              
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr73.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr73.jpg') }}" alt=""></a></figure>
                </div>
                <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info9') </p>   
                <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info10')</p>              
           
            </div>
        </div>
        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="{{ route('project-details6', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>@lang('main.projects.prev')</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="{{ route('project-details8', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">@lang('main.projects.next')<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- project-details end -->





@endsection
