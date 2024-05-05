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