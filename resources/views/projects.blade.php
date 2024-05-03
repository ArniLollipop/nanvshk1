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
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Project Grid 3</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Grid 3</li>
            </ul>
        </div> -->
    </div>
</section>
<!-- End Page Title -->


<!-- project-nine -->
<section class="project-nine project-page-3 p_relative pt_15 pb_100">
    <div class="outer-container pl_40 pr_40">
        <div class="sortable-masonry">
            <div class="filters mb_70">
                <!-- <ul class="filter-tabs filter-btns clearfix centred">
                    <li class="active filter" data-role="button" data-filter=".all">All</li>
                    <li class="filter" data-role="button" data-filter=".analytis">Analytis</li>
                    <li class="filter" data-role="button" data-filter=".finance">Finance</li>
                    <li class="filter" data-role="button" data-filter=".business">Business</li>
                    <li class="filter" data-role="button" data-filter=".corporate">Corporate</li>
                </ul> -->
            </div>
            <div class="items-container row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product finance business">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="{{ asset('assets/images/project/univer.jpg') }}" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details1', app()->getLocale()) }}">Корпоративная информационная система «univer»</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details1', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all analytis business corporate">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="{{ asset('assets/images/project/logop3.jpg') }}" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details2', app()->getLocale()) }}">Национальная платформа открытого образования казахстана moocs.kz</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details2', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product finance corporate">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="{{ asset('assets/images/project/pr42.jpg') }}" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details3', app()->getLocale()) }}">Информационная система мониторинга мнений OMS (opinion monitor system)</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details3', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all analytis finance business">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="{{ asset('assets/images/project/color-logo.jpg') }}" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details4', app()->getLocale()) }}">«AKADEM KITAP» / Издательство «Өнегелі өмір»</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details4', app()->getLocale()), app()->getLocale() }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all business finance corporate">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="{{ asset('assets/images/project/project8.jpg') }}" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details5', app()->getLocale()) }}">Заслуженный деятель высшей школы</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details5', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all analytis business corporate">
                    <div class="project-block-one">
                        <div class="inner-box p_relative d_block b_radius_5 mb_50">
                            <figure class="image-box"><img src="{{ asset('assets/images/project/project-61.jpg') }}" alt=""></figure>
                            <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                                <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details6', app()->getLocale()) }}">Центрально-Азиатская Ассоциация по аккредитации образования (CAAAE).</a></h4>
                                <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details6', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<!-- project-nine end -->



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
                                                <li><a href="{{ route('about', app()->getLocale()) }}">Об академии</a></li>
                                                <li><a href="{{ route('about-2', app()->getLocale()) }}">Президент НАН ВШК</a></li>
                                                <li><a href="{{ route('about-3', app()->getLocale()) }}">Члены академии</a></li>  
                                                <li><a href="{{ route('about-4', app()->getLocale()) }}">Состав Президиума</a></li>                                                                                 
                                                <li><a href="{{ route('about-5', app()->getLocale()) }}">Структура НАН ВШК</a></li> 
                                                <li><a href="{{ route('projects', app()->getLocale()) }}">Проекты НАН ВШК</a></li>   
                                                <li><a href="{{ route('news', app()->getLocale()) }}">НОВОСТИ</a> 
                                              

                                               
                              
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4>Контакты</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>РК, индекс 050040, г. Алматы, Бостандыкский район, микрорайон Коктем-3, дом 24, н.п. №379.</li>
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
                    <p><a href="/">НАН ВШК</a> &copy; {{ date('Y') }} Все права защищены</p>
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