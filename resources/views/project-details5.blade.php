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
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15">@lang('main.project5.title')</h3></br>
                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/project5.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/project5.jpg') }}" alt=""></a></figure>
                                </div>                              
                            </div>
                        </div>
                        <h4 class="d_block  lh_40 fw_sbold mb_15">@lang('main.project5.info1')</h4>
                                <ul class="info-list clearfix">
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">@lang('main.project5.info2')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">@lang('main.project5.info3')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">@lang('main.project5.info4')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">@lang('main.project5.info5')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">@lang('main.project5.info6')</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">@lang('main.project5.info7')</li>
                                    <!-- <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black"></li> -->
                                </ul>   
                        <h4 class="d_block  lh_40 fw_sbold mb_15">@lang('main.project5.info8')</h4>

                                <div data-animation-box class="image-box p_relative d_block mb_70">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/projects5.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/projects5.jpg') }}" alt=""></a></figure>
                                        </div>                              
                                    </div>
                                </div>
    
                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/project5.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/project5.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <h3 class="font_family_poppins mb_25 color_black fs_20">@lang('main.project5.info9')</h3>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr1.jpg') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                <div class="col-lg-6 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/cert1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/cert1.jpg') }}" alt=""></a></figure>
                                </div>                               
                                <div class="col-lg-6">
                                    <p class="font_family_poppins color_black fs_18">@lang('main.project5.info10')</p>   
                                    <p class="font_family_poppins color_black fs_18">@lang('main.project5.info11')</p>  
                                    <p class="font_family_poppins mb_50 color_black fs_18">@lang('main.project5.info12')</p>                                   
                                        <div class="col-lg-12 col-md-6 col-sm-12 image-column mt_20">
                                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr2.jpg') }}" alt=""></a></figure>
                                        </div> 
                                </div>
                            </div>
                        </div>

                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/project5.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/project5.jpg') }}" alt=""></a></figure>
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr1.jpg') }}" alt=""></a></figure>
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr3.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr3.jpg') }}" alt=""></a></figure>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <h3 class="font_family_poppins mb_170 color_black fs_20">@lang('main.project5.info15')</h3>
                                    <h3 class="font_family_poppins mb_25 color_black fs_20">@lang('main.project5.info16')</h3>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/cert4.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/cert4.jpg') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                      

                        <h4 class="d_block  lh_40 fw_sbold mb_15">@lang('main.project5.info13')</h4>
                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                <div class="col-lg-6 image-column ">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10 mb_70" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/project5.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/project5.jpg') }}" alt=""></a></figure>
                                    <h3 class="font_family_poppins mb_170 color_black fs_20">@lang('main.project5.info14')</h3>   
                                </div>                               
                                <div class="col-lg-6">
                                        <div class="col-lg-12 col-md-6 col-sm-12 image-column mt_20">
                                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/cert5.png') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/cert5.png') }}" alt=""></a></figure>
                                        </div> 
                                </div>
                            </div>
                        </div>

                        <h4 class="d_block  lh_40 fw_sbold mb_15">@lang('main.project5.info17')</h4>
                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10 mb_20" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/c1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/c1.jpg') }}" alt=""></a></figure>
                                    <p class="font_family_poppins color_black fs_18 mb_20">@lang('main.project5.info18')</p>  
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/c4.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/c4.jpg') }}" alt=""></a></figure> 
                                    <p class="font_family_poppins color_black fs_18 mb_20">@lang('main.project5.info21')</p>  

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10 mb_20" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/c2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/c2.jpg') }}" alt=""></a></figure>
                                    <p class="font_family_poppins color_black fs_18 mb_20">@lang('main.project5.info19')</p>  
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/c5.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/c5.jpg') }}" alt=""></a></figure> 
                                    <p class="font_family_poppins color_black fs_18 mb_20">@lang('main.project5.info22')</p>  
 
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10 mb_20" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/c3.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/c3.jpg') }}" alt=""></a></figure>
                                    <p class="font_family_poppins color_black fs_18 mb_20">@lang('main.project5.info20')</p>  
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/c6.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/c6.jpg') }}" alt=""></a></figure> 
                                    <p class="font_family_poppins color_black fs_18 mb_20">@lang('main.project5.info23')</p>  
 
                                </div>
                            </div>
                        </div>
                        
                     </div>
                </div>                
            </div>
        </div>
                       
       
       
        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="{{ route('project-details4', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>@lang('main.projects.prev')</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="{{ route('project-details6', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">@lang('main.projects.next')<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- project-details end -->




@endsection
