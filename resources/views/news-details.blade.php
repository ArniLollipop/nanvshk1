@extends('layouts.app')
@section('content') 
<body>
<div class="boxed_wrapper">


<!-- Page Title -->
<section class="page-title blog-details p_relative centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/page-title-6.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <!-- <div class="post-title p_relative d_block mb_60">
                <div class="category p_relative d_block mb_7"><a href="blog-details.html" class="d_iblock fs_16 font_family_poppins uppercase">Business</a></div>
                <h2 class="d_block fs_40 lh_50 fw_bold mb_7">The Best Remote UX and UI Design <br />Conferences</h2>
                <ul class="post-info clearfix p_relative d_block">
                    <li class="p_relative d_iblock mr_30 fs_16">Oct 20, 2021</li>
                </ul>
            </div> -->
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-details-2 blog-details p_relative pt_140 pb_150">
    <div class="auto-container">
        <div class="blog-details-content p_relative d_block mr_20">
            <div class="blog-post p_relative d_block mb_60">
                <!-- <div class="content-one p_relative d_block mb_60">
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                            <div class="text">
                                <p class="font_family_poppins mb_25">Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor incidunt labore desk dolore magna aliqua enim ad minim veniam quis nostrud exercitation lamco laboris nisi ut aliq uip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse  sint cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p class="font_family_poppins mb_60">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <h3 class="d_block fs_30 lh_30 mb_30">Ready to Maximizing Products</h3>
                                <p class="font_family_poppins">Aliqua enim ad minim veniam quis nostrud exercitation lamco laboris nisi ut aliquip ex ea com modo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eufu giat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deser unt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="image-box p_relative d_block b_radius_5 mb_65"><img src="assets/images/news/news-58.jpg" alt=""></figure> -->
                <div class="content-two p_relative d_block mb_60">
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                            <div class="text">
                                                @if(app()->getLocale() == 'ru')
                                                <h3 class="d_block fs_30 lh_30 mb_30">{{ $info->title }}</h3>                                            
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <h3 class="d_block fs_30 lh_30 mb_30">{{ $info->title_kz}}</h3>
                                                @else
                                                <h3 class="d_block fs_30 lh_30 mb_30">{{ $info->title_en }}</h3>
                                                @endif
                                <div class="image-box p_relative d_block mb_60">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                            <figure class="image p_relative d_block b_radius_5"><img src="{{ asset('storage/'.$info->image2) }}" alt=""></figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                            <figure class="image p_relative d_block b_radius_5"><img src="{{ asset('storage/'.$info->image3) }}" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- <figure class="author-thumb p_absolute l_40 t_40 w_100 h_100 b_radius_50"><img src="{{ asset('storage/'.$info->image) }}" alt=""></figure> -->
                                                @if(app()->getLocale() == 'ru')
                                                <p class="font_family_poppins mb_25 color_black fs_18">{!! $info->body !!}</p>
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <p class="font_family_poppins mb_25 color_black fs_18">{!! $info->body_kz !!}</p>
                                                @else
                                                <p class="font_family_poppins mb_25 color_black fs_18">{!! $info->body_en !!}</p>
                                                @endif
                                <!-- <p class="font_family_poppins mb_60">Nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipis elit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p> -->
                                <!-- <blockquote class="p_relative d_block pt_30 pr_150 pb_30 pl_40 b_radius_5 b_shadow_6 mb_65">
                                    <div class="icon-box p_absolute t_45 r_45 fs_60"><i class="icon-176"></i></div>
                                    <h5 class="d_block fs_18 fw_normal lh_28 mb_5">Lorem ipsum dolor amet con sectur elitadicing elit sed do usmod tempor uincididunt enim minim veniam nostrud.</h5>
                                    <h5 class="name p_relative d_iblock fs_18 fw_sbold pl_25">Kevin Spacey</h5>
                                </blockquote> -->
                                <!-- <p class="font_family_poppins mb_25">Omnis iste natus error sit voluptatem accusantium doloremque laudant totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicab nemo enim ipsam voluptatem quia volupta sit aspernatur aut odit aut fugit sed quia consequnt magni dolores eos qui ratione.</p> -->
                                <!-- <ul class="list clearfix p_relative d_block">
                                    <li class="p_relative d_block fs_16 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">Financial Marketing</li>
                                    <li class="p_relative d_block fs_16 lh_25 fw_medium font_family_inter pl_25 mb_12 color_black">Leadership</li>
                                    <li class="p_relative d_block fs_16 lh_25 fw_medium font_family_inter pl_25 color_black">Digital Marketing</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="image-box p_relative d_block mb_60">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                            <figure class="image p_relative d_block b_radius_5"><img src="{{ asset('storage/'.$info->image) }}" alt=""></figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                            <figure class="image p_relative d_block b_radius_5"><img src="{{ asset('storage/'.$info->image2) }}" alt=""></figure>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="content-three">
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                            <div class="text">
                                <h3 class="d_block fs_30 lh_40 fw_sbold mb_25">The New Rules for Marketing</h3>
                                <p class="font_family_poppins mb_25">Aliqua enim ad minim veniam quis nostrud exercitation lamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p class="font_family_poppins">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            @if($images)
                <div class="inner-content p_relative d_block">
                    <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-two">
                        
                        @foreach($images as $image)
                            <div class="project-block-one">
                                <div class="inner-box p_relative d_block b_radius_5">
                                    <figure class="image-box"><img src="{{ asset('storage/'.$image) }}" alt=""></figure>
                                    <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                        <!-- <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div> -->
                                        <!-- <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="project-details.html">Artboard Studio</a></h4> -->
                                        <!-- <div class="link p_absolute b_20 r_30"><a href="project-details.html" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div> -->
                                    </div>
                                </div>
                            </div>   
                        @endforeach 
                                        
                    </div>
                </div>
            @endif 
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                    <!-- <div class="post-share-option clearfix p_relative d_block pt_35 pb_35 mb_70">
                        <ul class="tags-list clearfix pull-left">
                            <li class="p_relative pull-left mr_20"><h6 class="fs_16 fw_medium lh_40">Tags:</h6></li>
                            <li class="p_relative pull-left mr_10"><a href="blog-details.html" class="p_relative d_iblock fs_14 lh_20 font_family_poppins color_black b_radius_5">Creative</a></li>
                            <li class="p_relative pull-left mr_10"><a href="blog-details.html" class="p_relative d_iblock fs_14 lh_20 font_family_poppins color_black b_radius_5">Marketing</a></li>
                            <li class="p_relative pull-left"><a href="blog-details.html" class="p_relative d_iblock fs_14 lh_20 font_family_poppins color_black b_radius_5">Idea</a></li>
                        </ul>
                        <ul class="social-list clearfix pull-right">
                            <li class="p_relative pull-left mr_20"><h6 class="fs_16 fw_medium lh_40">Share on:</h6></li>
                            <li class="p_relative pull-left mr_10"><a href="blog-details.html" class="p_relative d_iblock fs_14 lh_20 font_family_poppins b_radius_50 w_40 h_40 lh_40 centred"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="p_relative pull-left mr_10"><a href="blog-details.html" class="p_relative d_iblock fs_14 lh_20 font_family_poppins b_radius_50 w_40 h_40 lh_40 centred"><i class="fab fa-twitter"></i></a></li>
                            <li class="p_relative pull-left"><a href="blog-details.html" class="p_relative d_iblock fs_14 lh_20 font_family_poppins b_radius_50 w_40 h_40 lh_40 centred"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div> -->
                    <div class="nav-btn p_relative d_block mb_70">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 btn-column">
                                <div class="single-btn prev-btn p_relative d_block b_radius_5 pt_25 pr_30 pb_25 pl_30 tran_5">
                                    <h6 class="d_block fs_15 fw_sbold mb_11"><a href="{{ route('news-details', ['info' => $info_prev->slug, app()->getLocale()] ) }}" class="d_iblock color_black"><i class="far fa-long-arrow-left"></i>@lang('about.prevnews')</a></h6>
                                                @if(app()->getLocale() == 'ru')
                                                <h5 class="d_block fs_17 lh_24 fw_sbold">{{ $info_prev->title }}</h5>
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <h5 class="d_block fs_17 lh_24 fw_sbold">{{ $info_prev->title_kz }}</h5>
                                                @else
                                                <h5 class="d_block fs_17 lh_24 fw_sbold">{{ $info_prev->title_en }}</h5>
                                                @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 btn-column">
                                <div class="single-btn next-btn text-right p_relative d_block b_radius_5 pt_25 pr_30 pb_25 pl_30 tran_5">
                                    <h6 class="d_block fs_15 fw_sbold mb_11"><a href="{{ route('news-details', ['info' => $info_next->slug, app()->getLocale()] ) }}" class="d_iblock color_black">@lang('about.nextnews')<i class="far fa-long-arrow-right"></i></a></h6>
                                                @if(app()->getLocale() == 'ru')
                                                <h5 class="d_block fs_17 lh_24 fw_sbold">{{ $info_next->title }}</h5>
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <h5 class="d_block fs_17 lh_24 fw_sbold">{{ $info_next->title_kz }}</h5>
                                                @else
                                                <h5 class="d_block fs_17 lh_24 fw_sbold">{{ $info_next->title_en }}</h5>
                                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="author-box p_relative d_block pt_45 pr_30 pb_40 pl_170 mb_60">
                        <figure class="author-thumb p_absolute l_40 t_40 w_100 h_100 b_radius_50"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_11">Charlton Heston</h4>
                        <p class="font_family_poppins">Enim ad minim veniam quis nostrud exercitation lamco laboris nisi ex ea commodo consequat aute irure.</p>
                    </div> -->
                    <div class="comments-form-area">
                        <div class="group-title p_relative d_block mb_15">
                            <h3 class="fs_30 lh_40">Оставьте комментарий</h3>
                        </div>
                        <div class="form-inner">
                            <form method="post" action="sendemail.php" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="ФИО" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Еmail" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Телефон">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Сообщение"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="check-box">
                                            <input class="check" type="checkbox" id="checkbox">
                                            <label for="checkbox">Согласен на сбор данных *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                        <button class="theme-btn theme-btn-five" type="submit" name="submit-form">Отправить <i class="icon-4"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container end -->


<!-- footer-two -->
<footer class="footer-two">
    <div class="auto-container">
       
        <div class="footer-widget-section">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <figure class="footer-logo p_relative d_block mb_35"><a href="/"><img src="assets/images/logo-3new.png" alt=""></a></figure>

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
                            <h4>@lang('main.links')</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                                <li><a href="{{ route('about', app()->getLocale()) }}">@lang('main.about2')</a></li>
                                                <li><a href="{{ route('about-2', app()->getLocale()) }}">@lang('main.about3')</a></li>
                                                <li><a href="{{ route('about-3', app()->getLocale()) }}">@lang('main.about4')</a></li>  
                                                <li><a href="{{ route('about-4', app()->getLocale()) }}">@lang('main.about6')</a></li>                                                                                 
                                                <li><a href="{{ route('about-5', app()->getLocale()) }}">@lang('main.about8')</a></li> 
                                                <li><a href="{{ route('projects', app()->getLocale()) }}">@lang('main.about10')</a></li>   
                                                <li><a href="{{ route('news', app()->getLocale()) }}">@lang('main.about.news')</a> </li> 
                                              

                                               
                              
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4>@lang('main.about.contacts')</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>@lang('main.about.contactinfo')</li>
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
                    <p><a href="/">@lang('main.about.nanvshk') &copy; {{ date('Y') }} @lang('main.about.reserved')</a></p>
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
