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
        <div class="project-info p_relative d_block mb_70">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_40">
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15">@lang('main.project6.title')</h3></br>

                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                     <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr61.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr61.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10 mb_20" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr66.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr66.jpg') }}" alt=""></a></figure>
                                </div>                               
                            </div>
                        </div>

                        <h4 class="d_block  lh_40 fw_sbold mb_15">@lang('main.project6.info1')</h4>   
                        <h4 class="d_block  lh_40 fw_sbold mb_50">@lang('main.project6.info2')</h4>  

                        <div data-animation-box class="image-box p_relative d_block mb_50">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10 mb_20" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/cert2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/cert2.jpg') }}" alt=""></a></figure>
                                 </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10 mb_20" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/photo1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/photo1.jpg') }}" alt=""></a></figure>
                                 </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10 mb_20" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/cert3.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/cert3.jpg') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>                        

                        <div data-animation-box class="image-box p_relative d_block mb_70">
                            <div class="row clearfix">
                                                @if(app()->getLocale() == 'ru')
                                                <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/project6.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/project6.jpg') }}" alt=""></a></figure>
                                                </div>                                                
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/project6kz.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/project6kz.jpg') }}" alt=""></a></figure>
                                                </div>    
                                                @else
                                                <div class="col-lg-12 col-md-6 col-sm-12 image-column">
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/project6en.png') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/project6en.png') }}" alt=""></a></figure>
                                                </div>                                                
                                                @endif
                                                           
                            </div>
                        </div>
                      
                        <h4 class="d_block  lh_40 fw_sbold mb_50">@lang('main.project6.info3')</h4>  

                           
                                <div data-animation-box class="image-box p_relative d_block mb_70">
                                    <div class="row clearfix">                                       
                                                @if(app()->getLocale() == 'ru')
                                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr62.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr62.jpg') }}" alt=""></a></figure>
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr61.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr61.jpg') }}" alt=""></a></figure>
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/photo2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/photo2.jpg') }}" alt=""></a></figure>


                                                </div>                                                
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr62kz.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr62kz.jpg') }}" alt=""></a></figure>
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr61.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr61.jpg') }}" alt=""></a></figure>
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/photo2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/photo2.jpg') }}" alt=""></a></figure>


                                                </div>     
                                                @else
                                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr62en.png') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr62en.png') }}" alt=""></a></figure>
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr61.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr61.jpg') }}" alt=""></a></figure>
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/photo2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/photo2.jpg') }}" alt=""></a></figure>

                                                </div>                                                
                                                @endif

                                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/cert6.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/cert6.jpg') }}" alt=""></a></figure>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/cert7.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/cert7.jpg') }}" alt=""></a></figure>
                                                </div>
                                                                   
                                    </div>
                                </div>                    
    
                      
   
                     </div>
                </div>                
            </div>
        </div>
                       
       
       
        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="{{ route('project-details5', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>@lang('main.projects.prev')</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="{{ route('project-details7', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">@lang('main.projects.next')<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- project-details end -->





@endsection
