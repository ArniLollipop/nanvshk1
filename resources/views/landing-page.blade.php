@extends('layouts.app')
@section('content')    
<div class="boxed_wrapper">



<!-- sidebar cart item -->
<!-- <div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget"><i class="icon-179"></i></a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="/"><img src="../assets/images/logo-3new.png" alt="" /></a>
                        </div>
                        <div class="text-box">
                            <h4>О нас</h4>
                            <p>Коротко о CAAAE </p>
                        </div>
                        <div class="info-inner">
                            <h4>Наш адрес</h4>
                            <ul class="info clearfix">
                                <li><i class="icon-180"></i>629 12th St, Modesto, CA 95354 United States</li>
                                <li><i class="icon-181"></i><a href="mailto:atrixmain@gmail.com">atrixmain@gmail.com</a></li>
                                <li><i class="icon-182"></i><a href="tel:123045615523">+1 (230)-456-155-23</a></li>
                            </ul>
                        </div>
                        <div class="social-inner">
                            <h4>Следуйте за нами в соцсетях</h4>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- END sidebar widget item -->



<!-- banner-section -->
<section class="slider-two centred p_relative">
    <div class="img--change">
    <div class="shape-layer">
        <div class="shape-1 hero-shape-two p_absolute l_0" style="background-image: url(assets/images/shape/shape-34.png);"></div>
        <div class="shape-2 hero-shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-35.png);"></div>
    </div>
    <div class="pattern-layer p_absolute l_0 b_0 z_2" style="background-image: url(assets/images/shape/shape-33.png);"></div>
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none ">
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-4.jpg)"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <!-- <h2 class="p_relative d_iblock fw_bold fs_80 lh_90 mb_15"><span class="slider-text-anim">НАН ВШК </span><br /><span class="slider-text-anim">34 года</span></h2> -->
                    <p class="d_block fs_18 mb_45 text--resize"> <br /></p>
                    <div class="btn-box clearfix">
                    </div>
                </div> 
            </div>
        </div>
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-5.jpg)"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <!-- <h2 class="p_relative d_iblock fw_bold fs_80 lh_90 mb_15"><span class="slider-text-anim">НАН ВШК </span><br /><span class="slider-text-anim">34 года</span></h2> -->
                    <p class="d_block fs_18 mb_45"></p>
                    <div class="btn-box clearfix">
                    </div>
                </div> 
            </div>
        </div>
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-6.jpg)"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <!-- <h2 class="p_relative d_iblock fw_bold fs_80 lh_90 mb_15"><span class="slider-text-anim">НАН ВШК </span><br /><span class="slider-text-anim">34 года</span></h2> -->
                    <p class="d_block fs_18 mb_45"></p>
                    <div class="btn-box clearfix">
                    </div>
                </div> 
            </div>
        </div>
    </div>
    </div>
</section>
<!-- banner-section end -->


<!-- feature-two -->
<!-- <section class="feature-two p_relative">
    <div class="auto-container">
        <div class="inner-container p_relative d_block b_radius_5 b_shadow_6 pt_50 pr_80 pb_50 pl_80">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block pl_100 pr_50 pt_11 pb_9">
                            <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                <div class="icon p_relative d_iblock g_color_2"><i class="icon-6"></i></div>
                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-12.png" alt=""></div>
                            </div>
                            <h4 class="d_block fs_20 lh_30 mb_0">Текст</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block pl_100 pr_50 pt_11 pb_9">
                            <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                <div class="icon p_relative d_iblock g_color_2"><i class="icon-7"></i></div>
                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-13.png" alt=""></div>
                            </div>
                            <h4 class="d_block fs_20 lh_30 mb_0">Текст</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block pl_100 pr_50 pt_11 pb_9">
                            <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                <div class="icon p_relative d_iblock g_color_2"><i class="icon-8"></i></div>
                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-14.png" alt=""></div>
                            </div>
                            <h4 class="d_block fs_20 lh_30 mb_0">Текст</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- feature-two end -->


<!-- about-two -->
<section class="about-two p_relative sec-pad">
    <div class="shape parallax-scene parallax-scene-1 dissapear--block">
        <div data-depth="0.40" class="shape-1 p_absolute"></div>
        <div data-depth="0.50" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-36.png);"></div>
        <div data-depth="0.30" class="shape-3 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-36.png);"></div>
        <div data-depth="0.40" class="shape-4 p_absolute"></div>
    </div>
    <div class="auto-container">
        <div class="upper-box p_relative d_block mb_70">
            <div class="row clearfix">

                <div class="col-lg-8 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-two p_relative d_block mr_150 mb_30">
                        <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17 text--resize color--change">@lang('main.about.about')</span>
                                <div data-animation-box class="image-box p_relative d_block mb_70">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 image-column">
                                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/l1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/l1.jpg') }}" alt=""></a></figure>
                                        </div>
                                        <div class="col-lg-6 image-column">
                                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/l2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/l2.jpg') }}" alt=""></a></figure>
                                        </div>                           
                                    </div>
                                </div>

                        <!-- <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_25">Национальная академия наук Высшей школы Казахстана</h2> -->
                        <p class="fs_20 color_black font_family_oxygen mb_0 text--resize">@lang('main.about.info1')</p>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 text">
                            <p class="fs_20 color_black font_family_oxygen mb_25 text--resize">@lang('main.about.info2')</p>
                            <!-- <p class="fs_16 font_family_oxygen"></p> -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text">
                            <p class="fs_20 color_black font_family_oxygen mb_25 text--resize">@lang('main.about.info3')</p>
                            <p class="fs_16 font_family_oxygen"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar p_relative d_block ml_20">                           
                            <div class="sidebar-widget post-widget p_relative d_block pt_35 pr_40 pb_20 pl_40 b_radius_10 mb_70">
                                <div class="widget-title p_relative d_block mb_10">
                                    <h3 class="d_block fs_24 lh_30">@lang('main.about.anons')</h3>
                                </div>
                                <div class="post-inner">
                                @foreach($anons as $info)
                                    <div class="image-box p_relative d_block">
                                        <div class="post-date p_absolute l_30 t_30 b_shadow_6 pt_1 pr_19 pb_1 pl_19 z_1">
                                            <h6 class="p_relative d_iblock fs_15 fw_medium g_color">{{ $info->created_at->format('d')}}.{{ $info->created_at->format('m') }}.{{ $info->created_at->format('Y') }}</h6>
                                        </div><br><br>
                                        <div class="lower-content p_relative d_block pt_20 pr_30 pb_20 pl_40">  
                                                @if(app()->getLocale() == 'ru')
                                                    <p class="d_block mb_20 color_black ">{{ $info->title }}</p>                                   
                                                 @elseif(app()->getLocale() == 'kz')
                                                    <p class="d_block mb_20 color_black ">{{ $info->title_kz }}</p>                                   
                                                @else
                                                    <p class="d_block mb_20 color_black ">{{ $info->title_en }}</p>                                                                               
                                                @endif    
                                                <div class="btn-box">
                                                    <a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}" class="theme-btn theme-btn-two"><span data-text="@lang('main.about.more')">@lang('main.about.more')</span></a>
                                                </div>                     
                                        </div> 
                                    </div>
                                  
                                @endforeach                   
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="video-inner p_relative d_block pt_200 pb_200 b_radius_5 centred wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url(assets/images/background/video-bg-2.png);">
            <div class="video-btn">
                <a href="https://youtu.be/Qm0xPE6bzTE" class="lightbox-image video-btn p_relative d_iblock w_100 h_100 lh_100 text-center b_radius_50 fs_30" data-caption=""><i class="icon-10"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- about-two end -->


<!-- clients-one -->
<section class="clients-one p_relative pb_70">
    <div class="auto-container">
    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-two p_relative d_block mr_100">
                        <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_50 text--resize color--change">@lang('main.about.partners')</span><br />
                        <!-- <h2 class="d_block fs_40 fw_bold font_family_oxygen">The Best Solutions for Best Business</h2> -->
                    </div>
                </div>
        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl1.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl1.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl2.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl2.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl3.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl3.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl4.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl4.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl5.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl5.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl6.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl6.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl7.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl7.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl8.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl8.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl9.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl9.jpg" alt=""></div></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl10.jpg" alt=""></div></a></figure>
                <figure class="overlay-image"><a href="index.html"><div class="img--change"><img src="assets/images/clients/cl10.jpg" alt=""></div></a></figure>
            </div>
        </div>
    </div>
</section>
<!-- clients-one end -->


<!-- service-two -->
<!-- <section class="service-two p_relative sec-pad centred">
    <div class="pattern-layer">
        <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-39.png);"></div>
        <div class="pattern-2 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-40.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title-two p_relative d_block mb_50">
            <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">УСЛУГИ</span><br />
            <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_35">Great Business Solutions <br />System</h2><br />
            <p class="fs_18 font_family_oxygen mb_0">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore magna aliquaenim ad minim veniam.</p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pl_40 pt_70 pr_30 pb_45 b_radius_10 tran_5">
                        <div class="icon-box p_relative d_iblock mb_40">
                            <div class="icon p_relative d_iblock fs_45 g_color_2 tran_5 z_1"><i class="icon-11"></i></div>
                            <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-15.png" alt=""></div>
                            <div class="icon-shape hero-shape-four p_absolute tran_5"></div>
                            <div class="overlay-icon p_absolute tran_5" style="background-image: url(assets/images/shape/shape-38.png);"></div>
                        </div>
                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_16 font_family_oxygen"><a href="service-details.html">Strategic Consulting <br />Services</a></h4>
                        <p class="p_relative d_block mb_14 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed eiusmod tempor labore aliquat.</p>
                        <div class="link">
                            <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold font_family_oxygen">Learn more<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow slideInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pl_40 pt_70 pr_30 pb_45 b_radius_10 tran_5">
                        <div class="icon-box p_relative d_iblock mb_40">
                            <div class="icon p_relative d_iblock fs_45 g_color_2 tran_5 z_1"><i class="icon-12"></i></div>
                            <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-16.png" alt=""></div>
                            <div class="icon-shape hero-shape-four p_absolute tran_5"></div>
                            <div class="overlay-icon p_absolute tran_5" style="background-image: url(assets/images/shape/shape-38.png);"></div>
                        </div>
                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_16 font_family_oxygen"><a href="service-details.html">Best Financial <br />Advice</a></h4>
                        <p class="p_relative d_block mb_14 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed eiusmod tempor labore aliquat.</p>
                        <div class="link">
                            <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold font_family_oxygen">Learn more<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow slideInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pl_40 pt_70 pr_30 pb_45 b_radius_10 tran_5">
                        <div class="icon-box p_relative d_iblock mb_40">
                            <div class="icon p_relative d_iblock fs_45 g_color_2 tran_5 z_1"><i class="icon-13"></i></div>
                            <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-17.png" alt=""></div>
                            <div class="icon-shape hero-shape-four p_absolute tran_5"></div>
                            <div class="overlay-icon p_absolute tran_5" style="background-image: url(assets/images/shape/shape-38.png);"></div>
                        </div>
                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_16 font_family_oxygen"><a href="service-details.html">Investment <br />& Management</a></h4>
                        <p class="p_relative d_block mb_14 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed eiusmod tempor labore aliquat.</p>
                        <div class="link">
                            <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold font_family_oxygen">Learn more<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- service-two end -->


<!-- chooseus-two -->
<!-- <section class="chooseus-two p_relative">
    <div class="outer-container clearfix">
        <div class="bg-layer p_absolute l_0 t_0" style="background-image: url(assets/images/background/chooseus-bg.jpg);"></div>
        <div class="content-inner p_relative d_block pt_150 pr_100 pb_150 pl_100">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-41.png);"></div>
                <div class="pattern-2 p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-42.png);"></div>
            </div>
            <div class="content-box p_relative d_block pl_15 pr_15">
                <div class="sec-title-two p_relative d_block mb_30 light">
                    <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Выберайте САААЕ</span>
                    <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_20">Причиные почему нужно<br /> выбрать нас</h2><br />
                    <p class="fs_18 font_family_oxygen mb_0">Fruit is their fill meat, hath abundantly place meat don't stars so & which<br /> signs third second after seasons under.</p>
                </div>
                <div class="inner-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item p_relative d_block pl_80 mb_19">
                                <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50">
                                    <div class="icon p_relative d_iblock g_color_2"><i class="icon-15"></i></div>
                                    <div class="icon-img hidden-icon d_iblock"><img src="assets/images/icons/hid-icon-18.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_6 font_family_oxygen">Innovative Business</h4>
                                <p class="mb_0 fs_16 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed tempor..</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item p_relative d_block pl_80 mb_19">
                                <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50">
                                    <div class="icon p_relative d_iblock g_color_2"><i class="icon-15"></i></div>
                                    <div class="icon-img hidden-icon d_iblock"><img src="assets/images/icons/hid-icon-18.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_6 font_family_oxygen">Audiance Analysis</h4>
                                <p class="mb_0 fs_16 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed tempor..</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item p_relative d_block pl_80">
                                <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50">
                                    <div class="icon p_relative d_iblock g_color_2"><i class="icon-15"></i></div>
                                    <div class="icon-img hidden-icon d_iblock"><img src="assets/images/icons/hid-icon-18.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_6 font_family_oxygen">Expert Marketing</h4>
                                <p class="mb_0 fs_16 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed tempor..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- chooseus-two end -->


  <!-- team-three -->
  <section class="team-three team-page-3 p_relative centred pt_130 pb_150">
            <div class="auto-container">
                 <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-two p_relative d_block mr_100">
                        <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_50 text--resize color--change">@lang('main.about.team')</span><br />
                        <!-- <h2 class="d_block fs_40 fw_bold font_family_oxygen">The Best Solutions for Best Business</h2> -->
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block mb_50">
                                <div class="image-box p_relative d_block b_radius_10">
                                    <figure class="image p_relative d_block"><div class="img--change"><img src="assets/images/team/cm1.png" alt=""></div></figure>
                                    <ul class="social-links-two">
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-facebook-f text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-twitter text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-linkedin-in text--resize"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content p_relative d_block ml_40 mr_40">
                                    <div class="inner p_relative d_block b_radius_10 pt_20 pr_30 pb_25 pl_30 b_shadow_6 color--change">
                                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold text--resize"><a href="team-details.html" class="text--resize">@lang('main.about.team1')</a></h4>
                                        <span class="designation fs_16 p_relative d_block font_family_poppins text--resize">@lang('main.about.team11')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block mb_50">
                                <div class="image-box p_relative d_block b_radius_10">
                                    <figure class="image p_relative d_block"><div class="img--change"><img src="assets/images/team/cm2.jpg" alt=""></div></figure>
                                    <ul class="social-links-two">
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-facebook-f text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-twitter text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-linkedin-in text--resize"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content p_relative d_block ml_40 mr_40">
                                    <div class="inner p_relative d_block b_radius_10 pt_20 pr_30 pb_25 pl_30 b_shadow_6 color--change">
                                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold"><a href="team-details.html" class=" text--resize">@lang('main.about.team2')</a></h4>
                                        <span class="designation fs_16 p_relative d_block font_family_poppins text--resize">@lang('main.about.team22')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block mb_50">
                                <div class="image-box p_relative d_block b_radius_10">
                                    <figure class="image p_relative d_block"><div class="img--change"><img src="assets/images/team/cm3.jpg" alt=""></div></figure>
                                    <ul class="social-links-two">
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-facebook-f text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-twitter text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-linkedin-in text--resize"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content p_relative d_block ml_40 mr_40">
                                    <div class="inner p_relative d_block b_radius_10 pt_20 pr_30 pb_25 pl_30 b_shadow_6 color--change">
                                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold"><a href="team-details.html" class=" text--resize">@lang('main.about.team3')</a></h4>
                                        <span class="designation fs_16 p_relative d_block font_family_poppins text--resize">@lang('main.about.team33')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="image-box p_relative d_block b_radius_10">
                                    <figure class="image p_relative d_block"><div class="img--change"><img src="assets/images/team/cm4.jpg" alt=""></div></figure>
                                    <ul class="social-links-two">
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-facebook-f text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-twitter text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-linkedin-in text--resize"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content p_relative d_block ml_40 mr_40">
                                    <div class="inner p_relative d_block b_radius_10 pt_20 pr_30 pb_25 pl_30 b_shadow_6 color--change">
                                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold"><a href="team-details.html" class=" text--resize">@lang('main.about.team4')</a></h4>
                                        <span class="designation fs_16 p_relative d_block font_family_poppins text--resize">@lang('main.about.team44')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="image-box p_relative d_block b_radius_10">
                                    <figure class="image p_relative d_block"><div class="img--change"><img src="assets/images/team/cm5.jpg" alt=""></div></figure>
                                    <ul class="social-links-two">
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-facebook-f text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-twitter text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-linkedin-in text--resize"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content p_relative d_block ml_40 mr_40">
                                    <div class="inner p_relative d_block b_radius_10 pt_20 pr_30 pb_25 pl_30 b_shadow_6 color--change">
                                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold"><a href="team-details.html" class=" text--resize">@lang('main.about.team5')</a></h4>
                                        <span class="designation fs_16 p_relative d_block font_family_poppins text--resize">@lang('main.about.team55')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="image-box p_relative d_block b_radius_10">
                                    <figure class="image p_relative d_block"><div class="img--change"><img src="assets/images/team/cm6.png" alt=""></div></figure>
                                    <ul class="social-links-two">
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-facebook-f text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-twitter text--resize"></i></a></li>
                                        <li class="p_relative d_iblock"><a href="index-2.html" class="w_40 h_40 lh_40 fs_17 centred b_radius_50 color--change"><i class="fab fa-linkedin-in text--resize"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content p_relative d_block ml_40 mr_40">
                                    <div class="inner p_relative d_block b_radius_10 pt_20 pr_30 pb_25 pl_30 b_shadow_6 color--change">
                                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold"><a href="team-details.html" class=" text--resize">@lang('main.about.team6')</a></h4>
                                        <span class="designation fs_16 p_relative d_block font_family_poppins text--resize">@lang('main.about.team66')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-three end -->


<!-- graph-one -->
<!-- <section class="graph-one p_relative">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                <div class="sec-title-two p_relative d_block mb_50 mr_70">
                    <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Экспертность</span><br />
                    <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_35">Build Better Business Software a Lot faster and Easier with Atrix.</h2><br />
                    <p class="fs_18 font_family_oxygen mb_0">Fruit is their fill meat, hath abundantly place meat don't stars. so and which signs third second after seasons under.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box p_relative d_block pl_30 wow slideInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="shape parallax-scene parallax-scene-2">
                        <div data-depth="0.50" class="shape-1 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-45.png);"></div>
                        <div data-depth="0.30" class="shape-2 p_absolute w_65 h_65" style="background-image: url(assets/images/shape/shape-46.png);"></div>
                    </div>
                    <figure class="image p_relative d_block"><a href="assets/images/resource/graph-1.png" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/graph-1.png" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- graph-one end -->


                    <!-- funfact-two -->
                    <section class="funfact-two pt_50 text-center p_relative">
                        <div class="auto-container">
                            <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="inner-box p_relative d_block">
                                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19 text--resize--fa color--change">
                                                <span class="count-text text--resize" data-speed="2500" data-stop="32">0</span>
                                            </div>
                                            <p class="p_relative d_block fs_16 lh_20 fw_medium color_white text--resize">@lang('main.about.inform1')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box p_relative d_block">
                                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19 text--resize--fa color--change">
                                                <span class="count-text text--resize" data-speed="2500" data-stop="43">0</span>
                                            </div>
                                            <p class="p_relative d_block fs_16 lh_20 fw_medium color_white text--resize">@lang('main.about.inform2')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="inner-box p_relative d_block">
                                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19 text--resize--fa color--change">
                                                <span class="count-text text--resize" data-speed="2500" data-stop="136">0</span>
                                            </div>
                                            <p class="p_relative d_block fs_16 lh_20 fw_medium color_white text--resize">@lang('main.about.inform3')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="inner-box p_relative d_block">
                                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19 text--resize--fa color--change">
                                                <span class="count-text text--resize" data-speed="2500" data-stop="1.2">0</span><span>M</span>
                                            </div>
                                            <p class="p_relative d_block fs_16 lh_20 fw_medium color_white text--resize">@lang('main.about.inform4')</p>
                                        </div>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                    </section>
                    <!-- funfact-two end -->


<!-- project-one -->
<section class="project-one p_relative sec-pad">
    <div class="auto-container">
        <div class="upper-box p_relative d_block mb_50">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-two p_relative d_block mr_100">
                        <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17 text--resize color--change">@lang('main.about.projects')</span><br />
                        <!-- <h2 class="d_block fs_40 fw_bold font_family_oxygen">The Best Solutions for Best Business</h2> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_80 mt_60">
                        <!-- <p class="fs_18 font_family_oxygen">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore.</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-content p_relative d_block">
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-two">
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/univer1.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen text--resize"><a href="{{ route('project-details1', app()->getLocale()) }}" class=" text--resize">@lang('main.projects.prtitle')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details1', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/univer.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details1', app()->getLocale()) }}" class=" text--resize">@lang('main.projects.prtitle')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details1', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14 text--resize"><i class="icon-4 text--resize"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/univer2.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen text--resize"><a href="{{ route('project-details1', app()->getLocale()) }}" class="text--resize">@lang('main.projects.prtitle')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details1', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14 text--resize"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/project2.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details2', app()->getLocale()) }}" class="text--resize">@lang('main.project2.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details2', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/pr42.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details4', app()->getLocale()) }}" class="text--resize">@lang('main.project4.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details4', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/project4.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details4', app()->getLocale()) }}" class="text--resize">@lang('main.project4.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details4', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/projects4.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details4', app()->getLocale()) }}" class="text--resize">@lang('main.project4.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details4', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14 "><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/project5.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details5', app()->getLocale()) }}" class="text--resize">@lang('main.project5.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details5', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/projects5.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details5', app()->getLocale()) }}" class="text--resize">@lang('main.project5.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details5', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/project6.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details6', app()->getLocale()) }}" class="text--resize">@lang('main.project6.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details6', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/color-logo.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details7', app()->getLocale()) }}" class="text--resize">@lang('main.project7.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details7', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><div class="img--change"><img src="assets/images/project/project8.jpg" alt=""></div></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="{{ route('project-details8', app()->getLocale()) }}" class="text--resize">@lang('main.project8.title')</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="{{ route('project-details8', app()->getLocale()) }}" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-one end -->


<!-- testimonial-two -->
<!-- <section class="testimonial-two p_relative sec-pad">
    <div class="pattern-layer">
        <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-39.png);"></div>
        <div class="pattern-2 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-40.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title-two p_relative d_block mb_50 centred">
            <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Отзывы</span>
            <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_35">Trusted by More Than 3k Clients <br />Around The World</h2>
            <p class="fs_18 font_family_oxygen mb_0">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore magna aliquaenim ad minim veniam.</p>

        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- testimonial-one -->


<!-- cta-two -->
<!-- <section class="cta-two p_relative pt_130 pb_140 centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/cta-bg.jpg);"></div>
    <div class="pattern-layer">
        <div class="pattern-1 p_absolute l_0 t_0" style="background-image: url(assets/images/shape/shape-48.png);"></div>
        <div class="pattern-2 p_absolute r_0 b_0" style="background-image: url(assets/images/shape/shape-49.png);"></div>
    </div>
    <div class="auto-container">
        <div class="inner-box p_relative z_1">
            <h2 class="d_block fs_40 fw_bold mb_20">Need Help Finding The Best Solution To Operate Your Business?</h2>
            <p class="fs_17 mb_35">We help our clients succeed by creating brand identities, digital <br />experiences, and print materials that communicate clearly.</p>
            <a href="index-2.html" class="theme-btn theme-btn-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><span data-text="Get Started">Get Started</span></a>
        </div>
    </div>
</section> -->
<!-- cta-two end -->


<!-- news-two -->
<section class="news-two p_relative sec-pad">
    <div class="auto-container">
        <div class="upper-box p_relative d_block z_1 pb_50">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-two p_relative d_block">
                        <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17 text--resize color--change">@lang('main.about.news')</span><br />
                        <h2 class="d_block fs_40 fw_bold font_family_oxygen text--resize">@lang('main.about.news1')</h2><br />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block pl_100">
                        <!-- <p class="fs_18">Our design services starts and ends with a best-in-class experience strategy that builds brands.</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            @foreach($news as $info)
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                            <div class="image-box p_relative d_block">
                                <figure class="image p_relative d_block"><a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}"><div class="img--change"><img src="{{ asset('storage/'.$info->image) }}" alt=""></div></a></figure>
                                <div class="post-date-two p_absolute l_30 t_30 w_60 b_radius_5 centred pt_10 pb_10"><h4 class="fs_20 font_family_oxygen fw_bold lh_20 text--resize">{{ $info->created_at->format('d') }} <span class="d_block text--resize">{{ $info->created_at->format('M') }}</span></h4></div>
                            </div>
                            <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                <ul class="post-info clearfix p_relative d_block mb_5">
                                    <!-- <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                    <li class="p_relative d_iblock float_left fs_16">10 mins Read</li> -->
                                </ul>
                                                 @if(app()->getLocale() == 'ru')
                                                 <h4 class="d_block fs_20 lh_30 mb_15 text--resize"><a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}">{{ $info->title }}</a></h4>
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <h4 class="d_block fs_20 lh_30 mb_15 text--resize"><a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}">{{ $info->title_kz}}</a></h4>
                                                @else
                                                <h4 class="d_block fs_20 lh_30 mb_15 text--resize"><a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}">{{ $info->title_en }}</a></h4>
                                                @endif
                                <!-- <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p> -->
                                <div class="btn-box">
                                    <a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}" class="theme-btn theme-btn-two text--resize"><span data-text="@lang('main.about.more')">@lang('main.about.more')</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- news-two end -->


<!-- subscribe-one -->
<!-- <section class="subscribe-one p_relative">
    <div>
        <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(247,247,247,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(247,247,247,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(247,247,247,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#f7f7f7" />
            </g>
        </svg>
    </div>
    <div class="auto-container">
        <div class="inner-container p_relative d_block pl_100 pt_60 pr_100 pb_60 b_radius_5">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-50.png);"></div>
                <div class="pattern-2 p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-51.png);"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_30">
                        <h2 class="d_block fs_30 lh_40 fw_bold font_family_oxygen">Join Us & Increase Your Business.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="form-inner p_relative d_block mt_18">
                        <form action="contact.html" method="post" class="subscribe-form default-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your email address" required="">
                                <button type="submit" class="theme-btn">Subscribe<span>Subscribe</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- subscribe-one -->






@endsection