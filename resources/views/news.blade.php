@extends('layouts.app')
@section('content')  

<div class="boxed_wrapper">
<!-- Page Title -->
<section class="page-title p_relative centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/page-title-5.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <!-- <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Blog Grid</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20">Blog</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter">Blog 3</li> -->
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- blog-grid-one -->
<section class="blog-grid-one p_relative sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
        @forelse ($news as $info)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block mb_70">
                        <div class="image-box p_relative d_block">
                       
                            <figure class="image p_relative d_block"><a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}"><img src="{{ asset('storage/'.$info->image) }}" alt=""></a></figure>
                            <div class="post-date-two p_absolute l_30 t_30 w_60 centred pt_10 pb_10 b_shadow_6"><h4 class="fs_20 font_family_oxygen fw_bold lh_20">{{ $info->created_at->format('d') }}<span class="d_block fs_14">{{ $info->created_at->format('M') }}</span></h4></div>
                        </div>
                        <div class="lower-content p_relative d_block pt_25">
                                                @if(app()->getLocale() == 'ru')
                                                <h4 class="d_block fs_20 lh_30 mb_6"><a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}">{{ $info->title }}</a></h4>
                                            
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <h4 class="d_block fs_20 lh_30 mb_6"><a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}">{{ $info->title_kz }}</a></h4>

                                                @else
                                                <h4 class="d_block fs_20 lh_30 mb_6"><a href="{{ route('news-details', ['info' => $info->slug, app()->getLocale()] ) }}">{{ $info->title_en }}</a></h4>
                                            
                                                @endif
                          
                        </div>
                    </div>
                </div>
            </div>
        @empty
		<div style="text-align: left">Пока нет новостей</div>
		@endforelse 
        </div>
        @if(!is_array($news))
		{{ $news->appends(request()->input())->links('pagination') }}
		@endif
         
    </div>
</section>
<!-- blog-grid-one end -->

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