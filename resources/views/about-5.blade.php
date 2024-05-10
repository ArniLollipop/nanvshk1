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
                                <!-- <h3 class="d_block fs_30 lh_30 mb_30">Структура НАН ВШК</h3> -->
                                    <div class="image-box p_relative d_block mb_60">
                                        <div class="row clearfix">
                                            <!-- <div class="col-lg-12 col-md-6 col-sm-12 image-column"> -->
                                                @if(app()->getLocale() == 'ru')
                                                <figure class="image p_relative d_block b_radius_5"><img src="{{ asset('assets/images/structure.png') }}" alt=""></figure>
                                                @elseif(app()->getLocale() == 'kz')
                                                <figure class="image p_relative d_block b_radius_5"><img src="{{ asset('assets/images/structure1.png') }}" alt=""></figure>
                                                @else
                                                <figure class="image p_relative d_block b_radius_5"><img src="{{ asset('assets/images/structure2.png') }}" alt=""></figure>
                                                @endif
                                            <!-- </div> -->
                                            
                                        </div>
                                    </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                   
            </div>
          

        </div>
        
    </div>
    
</section>
<!-- sidebar-page-container end -->




@endsection