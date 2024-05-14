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
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details4', app()->getLocale()) }}">3. @lang('main.project4.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details5', app()->getLocale()) }}">4. @lang('main.project5.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details6', app()->getLocale()) }}">5. @lang('main.project6.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details7', app()->getLocale()) }}">6. @lang('main.project7.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details8', app()->getLocale()) }}">7. @lang('main.project8.title')</a></h4> </li>
                                        <li class="p_relative d_block fs_18 color_black lh_25 fw_medium font_family_inter pl_25 mb_12"><h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details3', app()->getLocale()) }}">8. @lang('main.project3.title')</a></h4> </li>

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



@endsection