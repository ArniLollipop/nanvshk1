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
                <!-- <div class="content-box">
                    <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Project Masonry 3</h1>
                    <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Masonry 3</li>
                    </ul>
                </div> -->
            </div>
        </section>
        <!-- End Page Title -->


   <!-- project-nine -->
   <section class="project-nine project-page-6 p_relative pt_15 pb_100">
            <div class="outer-container pl_40 pr_40">
                <div class="sortable-masonry">
                    <div class="filters mb_70">
                        <ul class="filter-tabs filter-btns clearfix centred">
                            <li class="active filter" data-role="button" data-filter=".all">@lang('main.allmembers.all')</li>
                            <li class="filter" data-role="button" data-filter=".analytis">@lang('main.allmembers.a1')</li>
                            <li class="filter" data-role="button" data-filter=".finance">@lang('main.allmembers.a2')</li>
                            <li class="filter" data-role="button" data-filter=".business">@lang('main.allmembers.a3')</li>
                        </ul>
                    </div>
                    <div class="items-container row clearfix">
                        <div class="col-lg col-md-6 col-sm-12 masonry-item small-column all analytis">
                            <!-- sidebar-page-container -->
                            <section class="sidebar-page-container blog-details-2 blog-details p_relative pt_140 pb_150">
                                <div class="auto-container">
                                    <div class="blog-details-content p_relative d_block mr_20">
                                        <div class="blog-post p_relative d_block mb_30">
                                            <div class="content-one p_relative d_block mb_30">
                                                <div class="row clearfix">
                                                    <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                                                        <div class="text">
                                                        <h3 class="d_block fs_30 lh_30 mb_30">@lang('main.allmembers.a1')</h3>
                                                                <ul class="clearfix p_relative d_block">
                                                                    @lang('main.allmembers.a4')
                                                                                                                  
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

                        </div>
                        <div class="col-lg col-md-6 col-sm-12 masonry-item small-column all finance">
                             <!-- sidebar-page-container -->
                             <section class="sidebar-page-container blog-details-2 blog-details p_relative pt_140 pb_150">
                                <div class="auto-container">
                                    <div class="blog-details-content p_relative d_block mr_20">
                                        <div class="blog-post p_relative d_block mb_30">
                                            <div class="content-one p_relative d_block mb_30">
                                                <div class="row clearfix">
                                                    <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                                                        <div class="text">
                                                        <h3 class="d_block fs_30 lh_30 mb_30">@lang('main.allmembers.a2')</h3>
                                                                 <ul class="clearfix p_relative d_block">
                                                                     @lang('main.allmembers.a5')
                                                                    
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
                        </div>
                        <div class="col-lg col-md-6 col-sm-12 masonry-item small-column all business">
                             <!-- sidebar-page-container -->
                             <section class="sidebar-page-container blog-details-2 blog-details p_relative pt_140 pb_150">
                                <div class="auto-container">
                                    <div class="blog-details-content p_relative d_block mr_20">
                                        <div class="blog-post p_relative d_block mb_30">
                                            <div class="content-one p_relative d_block mb_30">
                                                <div class="row clearfix">
                                                    <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                                                        <div class="text">
                                                        <h3 class="d_block fs_30 lh_30 mb_30">@lang('main.allmembers.a3')</h3>
                                                                <ul class="clearfix p_relative d_block">
                                                                    @lang('main.allmembers.a6')
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-nine end -->






@endsection