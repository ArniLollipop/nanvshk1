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




@endsection