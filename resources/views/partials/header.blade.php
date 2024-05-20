 <!--Search Popup-->
 <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo-16.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="icon-179"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="@lang('main.search')" required >
                                    <button type="submit"><i class="icon-1"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- main header -->
<header class="main-header">
            <!-- header-top-one -->
            <div class="header-top-one p_relative d_block">
                <div class="auto-container">
                    <div class="top-inner clearfix p_relative">
                        <div class="shape p_absolute t_0" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                        <div class="top-left pull-right">
                            <ul class="social-links clearfix">
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-instagram"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-whatsapp"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class='fab fa-telegram-plane'></i> </a></li>
                                <!-- <li class="p_relative d_iblock float_left  lh_55">
                                    <a href="{{ route('settinglocale', ['lang' => 'ru']) }}"><img src="{{ asset('assets/images/russia.png') }}" alt="язык"></a>                                   
                                </li>
                                <li class="p_relative d_iblock float_left lh_55"> 
                                    <a href="{{ route('settinglocale', ['lang' => 'kz']) }}"><img src="{{ asset('assets/images/world.png') }}" alt="язык"></a>
                                </li>
                                <li class="p_relative d_iblock float_left lh_55">
                                    <a href="{{route('settinglocale', ['lang' => 'en']) }}"><img src="{{ asset('assets/images/en.png') }}" alt="язык" ></a>
                                </li> -->
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="{{ route('settinglocale', ['lang' => 'kz']) }}" class="p_relative d_iblock fs_16"><img src="{{ asset('assets/images/world.png') }}" alt=""></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="{{ route('settinglocale', ['lang' => 'ru']) }}" class="p_relative d_iblock fs_16"><img src="{{ asset('assets/images/russia.png') }}" alt=""></a></li>
                                <li class="p_relative d_iblock fs_16 float_left lh_55"><a href="{{ route('settinglocale', ['lang' => 'en']) }}" class="p_relative d_iblock fs_16"><img src="{{ asset('assets/images/en.png') }}" alt=""></a></li>
                               
                                
                                
                            </ul>
                            
                        </div>
                        <div class="top-right pull-left">
                            <ul class="info clearfix">
                                <li class="search-box-outer search-toggler p_relative d_iblock float_left mr_60 lh_55">
                                    <i class="icon-1"></i>
                                </li>
                                <li class="p_relative d_iblock float_left mr_60 lh_55 pl_25 fs_16">
                                    <i class="icon-2"></i>
                                    <p><a href="tel:77717091125">+7 (771) 709-11-25</a></p>
                                </li>
                                <li class="p_relative d_iblock float_left mr_60 pl_25 fs_16">
                                    <i class="icon-3"></i>
                                    <p>Email: <a href="mailto:nanvshk@gmail.com">nanvshk@gmail.com</a></p>
                                </li>
                               
                            </ul>
                            
                        </div>
                        
                            
                      
                        
                        
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{ asset('assets/images/logo-3new.png') }}" alt=""></a></figure>
                        </div>
                        <div class="mr_50"> <h4 class="fs_19 mb_5 color_black">@lang('main.name')</h4></div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="">@lang('main.about1')</a>
                                             <ul>
                                                <li><a href="{{ route('about', app()->getLocale()) }}">@lang('main.about2')</a></li>
                                                <li><a href="{{ route('about-2', app()->getLocale()) }}">@lang('main.about3')</a></li>
                                                <li><a href="{{ route('about-3', app()->getLocale()) }}">@lang('main.about4')</a></li>
                                            </ul>
                                        </li>
                                        <li class="current dropdown"><a href="">@lang('main.about5')</a>
                                             <ul>
                                                <li><a href="{{ route('about-4', app()->getLocale()) }}">@lang('main.about6')</a></li>                                                
                                            </ul>
                                        </li>
                                        <li class="current dropdown"><a href="">@lang('main.about7')</a>
                                             <ul>
                                                <li><a href="{{ route('about-5', app()->getLocale()) }}">@lang('main.about8')</a></li>                                                
                                            </ul>
                                        </li>
                                        <li class="current dropdown"><a href="">@lang('main.about9')</a>
                                             <ul>
                                                <li><a href="{{ route('projects', app()->getLocale()) }}">@lang('main.about10')</a></li>                                                
                                            </ul>
                                        </li>
                                        <li class="current dropdown"><a href="{{ route('project-details77', app()->getLocale()) }}">ACADEM KITAP</a>
                                            
                                        </li>
                                        <li class="current dropdown"><a href="{{ route('news', app()->getLocale()) }}">@lang('main.about11')</a>
                                            <!-- <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="feature-element-1.html">Feature Column 01</a></li>
                                                            <li><a href="feature-element-2.html">Feature Column 02</a></li>
                                                            <li><a href="feature-element-3.html">Feature Column 03</a></li>
                                                            <li><a href="feature-element-4.html">Feature Column 04</a></li>
                                                            <li><a href="feature-element-5.html">Feature Column 05</a></li>
                                                            <li><a href="feature-element-6.html">Feature Column 06</a></li>
                                                            <li><a href="feature-element-7.html">Feature Column 07</a></li>
                                                            <li><a href="feature-element-8.html">Feature Column 08</a></li>
                                                            <li><a href="feature-element-9.html">Feature Slider 01</a></li>
                                                            <li><a href="feature-element-10.html">Feature Slider 02</a></li>
                                                            <li><a href="feature-element-11.html">Feature Slider 03</a></li>
                                                            <li><a href="feature-element-12.html">Feature Slider 04</a></li>
                                                            <li><a href="feature-element-13.html">Feature Slider 05</a></li>
                                                            <li><a href="feature-element-14.html">Feature Slider 06</a></li>
                                                            <li><a href="feature-element-15.html">Feature Slider 07</a></li>
                                                            <li><a href="feature-element-16.html">Feature Slider 08</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="service-element-1.html">Service Column 01</a></li>
                                                            <li><a href="service-element-2.html">Service Column 02</a></li>
                                                            <li><a href="service-element-3.html">Service Column 03</a></li>
                                                            <li><a href="service-element-4.html">Service Column 04</a></li>
                                                            <li><a href="service-element-5.html">Service Column 05</a></li>
                                                            <li><a href="service-element-6.html">Service Column 06</a></li>
                                                            <li><a href="service-element-7.html">Service Column 07</a></li>
                                                            <li><a href="service-element-8.html">Service Column 08</a></li>
                                                            <li><a href="service-element-9.html">Service Slider 01</a></li>
                                                            <li><a href="service-element-10.html">Service Slider 02</a></li>
                                                            <li><a href="service-element-11.html">Service Slider 03</a></li>
                                                            <li><a href="service-element-12.html">Service Slider 04</a></li>
                                                            <li><a href="service-element-13.html">Service Slider 05</a></li>
                                                            <li><a href="service-element-14.html">Service Slider 06</a></li>
                                                            <li><a href="service-element-15.html">Service Slider 07</a></li>
                                                            <li><a href="service-element-16.html">Service Slider 08</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="team-element-1.html">Team Column 01</a></li>
                                                            <li><a href="team-element-2.html">Team Column 02</a></li>
                                                            <li><a href="team-element-3.html">Team Column 03</a></li>
                                                            <li><a href="team-element-4.html">Team Column 04</a></li>
                                                            <li><a href="team-element-5.html">Team Slider 01</a></li>
                                                            <li><a href="team-element-6.html">Team Slider 02</a></li>
                                                            <li><a href="team-element-7.html">Team Slider 03</a></li>
                                                            <li><a href="team-element-8.html">Team Slider 04</a></li>
                                                            <li><a href="working-element-9.html">Working Column 01</a></li>
                                                            <li><a href="working-element-10.html">Working Column 02</a></li>
                                                            <li><a href="working-element-11.html">Working Column 03</a></li>
                                                            <li><a href="working-element-12.html">Working Column 04</a></li>
                                                            <li><a href="working-element-13.html">Working Slider 01</a></li>
                                                            <li><a href="working-element-14.html">Working Slider 02</a></li>
                                                            <li><a href="working-element-15.html">Working Slider 03</a></li>
                                                            <li><a href="working-element-16.html">Working Slider 04</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="news-element-1.html">News Column 01</a></li>
                                                            <li><a href="news-element-2.html">News Column 02</a></li>
                                                            <li><a href="news-element-3.html">News Slider 01</a></li>
                                                            <li><a href="news-element-4.html">News Slider 02</a></li>
                                                            <li><a href="funfact-element-1.html">Funfact Column 01</a></li>
                                                            <li><a href="funfact-element-2.html">Funfact Column 02</a></li>
                                                            <li><a href="funfact-element-3.html">Funfact Slider 01</a></li>
                                                            <li><a href="funfact-element-4.html">Funfact Slider 02</a></li>
                                                            <li><a href="pricing-element-1.html">Pricing Column 01</a></li>
                                                            <li><a href="pricing-element-2.html">Pricing Column 02</a></li>
                                                            <li><a href="pricing-element-3.html">Pricing Slider 01</a></li>
                                                            <li><a href="pricing-element-4.html">Pricing Slider 02</a></li>
                                                            <li><a href="progress-element-1.html">Progress Circle</a></li>
                                                            <li><a href="progress-element-2.html">Progress Bar</a></li>
                                                        </ul>
                                                    </div>                                       
                                                </div>                                            
                                            </div> -->
                                        </li>
                                        <li class="current dropdown"><a href="{{ route('contacts', app()->getLocale()) }}">@lang('main.about12')</a>
                                            <!-- <ul>
                                                <li><a href="blog.html">Blog Standard 1</a></li>
                                                <li><a href="blog-2.html">Blog Standard 2</a></li>
                                                <li><a href="blog-3.html">Blog Grid 1</a></li>
                                                <li><a href="blog-4.html">Blog Grid 2</a></li>
                                                <li><a href="blog-5.html">Blog Masonry</a></li>
                                                <li><a href="blog-6.html">Blog List</a></li>
                                                <li class="dropdown"><a href="index.html">Blog Details</a>
                                                    <ul>
                                                        <li><a href="blog-details.html">Blog Details 1</a></li>
                                                        <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                                        <li><a href="blog-details-3.html">Blog Details 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li> 
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- <div class="btn-box">
                            <a href="index.html" class="theme-btn theme-btn-one">Get A Quote<i class="icon-4"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="assets/images/logo-3new.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('contacts', app()->getLocale()) }}" class="theme-btn theme-btn-one">@lang('main.write')<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-3new.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Казахстан, г. Алматы, мкрн Коктем-3,24</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->

<script>


</script>