 <!--Search Popup-->
 <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="/"><img src="{{ asset('assets/images/logo-3new.png') }}" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="icon-179"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form action="{{ route('search',app()->getLocale()) }}" method="GET">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="query" value="{{ request()->input('query') }}" placeholder="@lang('main.search')" required >
                                    <button type="submit" class="text--resize--fa"  aria-label="Поиск"><i class="icon-1 color--change"></i></button>
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
            <div class="header-top-one p_relative d_block color--change">
                <div class="auto-container">
                    <div class="top-inner clearfix p_relative">
                        <div class="shape p_absolute t_0" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                        <div class="top-left pull-right">
                            
                            <ul class="social-links clearfix">
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">
                                    <div class="wcag--icon">
                                        
                                        <img src="{{ asset('assets/images/blind-glasses-icon-simple.jpg') }}" alt="">
                                    </div>
                                </li>
                                
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"></li>

                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16 text--resize--fa"><i class="fab fa-facebook-f text--resize"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16 text--resize--fa"><i class="fab fa-instagram text--resize"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="https://wa.me/77717091125?text=urlencodedtext" class="p_relative d_iblock fs_16 text--resize--fa"><i class="fab fa-whatsapp text--resize"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16 text--resize--fa"><i class='fab fa-telegram-plane text--resize'></i> </a></li>

                                <!-- <li class="p_relative d_iblock float_left  lh_55">
                                    <a href="{{ route('settinglocale', ['lang' => 'ru']) }}"><img src="{{ asset('assets/images/russia.png') }}" alt="язык"></a>                                   
                                </li>
                                <li class="p_relative d_iblock float_left lh_55"> 
                                    <a href="{{ route('settinglocale', ['lang' => 'kz']) }}"><img src="{{ asset('assets/images/world.png') }}" alt="язык"></a>
                                </li>
                                <li class="p_relative d_iblock float_left lh_55">
                                    <a href="{{route('settinglocale', ['lang' => 'en']) }}"><img src="{{ asset('assets/images/en.png') }}" alt="язык" ></a>
                                </li> -->
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="{{ route('settinglocale', ['lang' => 'kz']) }}" class="p_relative d_iblock fs_16 text--resize" aria-label="казахский язык"><div class="img--change"><img src="{{ asset('assets/images/world.png') }}" alt=""></div></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="{{ route('settinglocale', ['lang' => 'ru']) }}" class="p_relative d_iblock fs_16 text--resize" aria-label="русский язык"><div class="img--change"><img src="{{ asset('assets/images/russia.png') }}" alt=""></div></a></li>
                                <li class="p_relative d_iblock fs_16 float_left lh_55"><a href="{{ route('settinglocale', ['lang' => 'en']) }}" class="p_relative d_iblock fs_16 text--resize" aria-label="английский язык"><div class="img--change"><img src="{{ asset('assets/images/en.png') }}" alt=""></div></a></li>
                               
                                
                                
                            </ul>
                            
                        </div>
                        <div class="top-right pull-left">
                            <ul class="info clearfix">
                                <li class="search-box-outer search-toggler p_relative d_iblock float_left mr_60 lh_55">
                                    <i class="icon-1 text--resize--fa"></i>
                                </li>
                                <li class="p_relative d_iblock float_left mr_60 lh_55 pl_25 fs_16">
                                    <i class="icon-2 text--resize--fa"></i>
                                    <p class="text--resize"><a href="tel:77717091125" class="text--resize--fa" aria-label="Позвонить на +7 (771) 709-11-25">+7 (771) 709-11-25</a></p>
                                </li>
                                <li class="p_relative d_iblock float_left mr_60 pl_25 fs_16">
                                    <i class="icon-3 text--resize--fa"></i>
                                    <p class="text--resize">Email: <a href="mailto:nanvshk@gmail.com" class="text--resize--fa" aria-label="Написать на почту nanvshk@gmail.com">nanvshk@gmail.com</a></p>
                                </li>
                               
                            </ul>
                            
                        </div>
                        
                            
                      
                        
                        
                    </div>
                </div>
            </div>
            <div class="wcag--wrap">
                <table>
                  <tr>
                    <th>Размер Шрифта:</th>
                    <th>Цветовая Схема:</th>
                    <th>Изображения:</th>
                    <th>Дополнительно:</th>
                  </tr>
                  <tr class="wcag--action">
                    <td class="wcag--size--wrap"><button class="minus--size">-</button><button class="plus--size">+</button></td>
                    <td class="wcag--color--wrap">
                        <div class="wcag--color--item wcag--color--item--1">A</div>
                        <div class="wcag--color--item wcag--color--item--2">A</div>
                        <div class="wcag--color--item wcag--color--item--3">A</div>
                        <div class="wcag--color--item wcag--color--item--4">A</div>
                        <div class="wcag--color--item wcag--color--item--5">A</div>
                    </td>
                    <td>
                        <div class="wcag--img--wrap"><div class="wcag--img--on">Вкл.</div> | <div class="wcag--img--off" id="image--set--1">Выкл.</div> | <div class="wcag--img--bw" id="image--set--2">ЧБ</div></div>
                    </td>
                    <td>
                        <div class="wcag--more"><div class="wsag--settings--wrap"><img src="{{ asset('assets/images/settings-icon-14963.png') }}" alt=""> Настройки</div></div>
                    </td>
                  </tr>
                </table>
                <div class="wcag--settings--slide">
                    <div class="wcag--settings--window">
                        <div class="wcag--kerning">Кернинг
                            <div class="wcag--settings--item--wrap">
                                <div class="wcag--settings--item kerning--standart" id="kerning--set--0">Стандартный</div>
                                <div class="wcag--settings--item kerning--middle" id="kerning--set--1">Средний</div>
                                <div class="wcag--settings--item kerning--big" id="kerning--set--2">Большой</div>
                            </div>
                        </div>
                        <div class="wcag--interval">Интервал
                            <div class="wcag--settings--item--wrap">
                                <div class="wcag--settings--item interval--1" id="interval--set--1">Одинарный</div>
                                <div class="wcag--settings--item interval--15" id="interval--set--0">Полуторный</div>
                                <div class="wcag--settings--item interval--2" id="interval--set--2">Двойной</div>
                            </div>
                        </div>
                        <!-- <div class="wcag--serif">Гарнитура
                            <div class="wcag--settings--item--wrap">
                                <div class="wcag--settings--item san-serif">Без засечек</div>
                                <div class="wcag--settings--item serif">С засечками</div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="wcag--normal">
                    Обычная версия <img src="{{ asset('assets/images/eye-icon-1481.png') }}" alt="">
                </div>
                <!-- <div class="wcag--col">
                    <div class="wcag--title">
                        Шрифт
                    </div>
                    <div class="wcag--action">
                        +
                    </div>
                </div> -->
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><div class="img--change"><img src="{{ asset('assets/images/logo-3new.png') }}" alt=""></div></a></figure>
                        </div>
                        <div class="mr_50"> <h4 class="fs_19 mb_5 color_black text--resize">@lang('main.name')</h4></div>
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
                                        <li class="current dropdown"><a href="" class="text--resize" aria-label="Переход на @lang('main.about1')">@lang('main.about1')</a>
                                             <ul class="color--change">
                                                <li><a href="{{ route('about', app()->getLocale()) }}" class="text--resize" aria-label="Переход на @lang('main.about2')">@lang('main.about2')</a></li>
                                                <li><a href="{{ route('about-2', app()->getLocale()) }}" class="text--resize" aria-label="Переход на @lang('main.about3')">@lang('main.about3')</a></li>
                                                <li><a href="{{ route('about-3', app()->getLocale()) }}" class="text--resize" aria-label="Переход на @lang('main.about4')">@lang('main.about4')</a></li>
                                            </ul>
                                        </li>
                                        <li class="current dropdown"><a href="" class="text--resize" aria-label="Переход на @lang('main.about5')">@lang('main.about5')</a>
                                             <ul class="color--change">
                                                <li><a href="{{ route('about-4', app()->getLocale()) }}" class="text--resize" aria-label="Переход на @lang('main.about6')">@lang('main.about6')</a></li>                                                
                                            </ul>
                                        </li>
                                        <li class="current dropdown"><a href="" class="text--resize" aria-label="Переход на @lang('main.about7')">@lang('main.about7')</a>
                                             <ul class="color--change">
                                                <li><a href="{{ route('about-5', app()->getLocale()) }}" class="text--resize" aria-label="Переход на @lang('main.about8')">@lang('main.about8')</a></li>                                                
                                            </ul>
                                        </li>
                                        <li class="current dropdown"><a href="" class="text--resize" aria-label="Переход на @lang('main.about9')">@lang('main.about9')</a>
                                             <ul class="color--change">
                                                <li><a href="{{ route('projects', app()->getLocale()) }}" class="text--resize" aria-label="Переход на @lang('main.about10')">@lang('main.about10')</a></li>                                                
                                            </ul>
                                        </li>

                                        <li class="current dropdown"><a href="{{ route('project-details77', app()->getLocale()) }}" class="text--resize" aria-label="Переход на  ACADEM KITAP">ACADEM KITAP</a>

                                            
                                        </li>
                                        <li class="current dropdown"><a href="{{ route('news', app()->getLocale()) }}" class="text--resize" aria-label="Переход на @lang('main.about11')">@lang('main.about11')</a>
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
                                        <li class="current dropdown"><a href="{{ route('contacts', app()->getLocale()) }}" class="text--resize" aria-label="Переход на @lang('main.about12')">@lang('main.about12')</a>
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
            <div class="sticky-header color--change">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><div class="img--change"><img src="assets/images/logo-3new.png" alt=""></div></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('contacts', app()->getLocale()) }}" class="theme-btn theme-btn-one color--change" aria-label="@lang('main.write')" aria-label="Переход на @lang('main.write')">@lang('main.write')<i class="icon-4"></i></a>
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
        <div class="nav-logo"><a href="index.html"><div class="img--change"><img src="assets/images/logo-3new.png" alt="" title=""></div></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li class=" text--resize">Казахстан, г. Алматы, мкрн Коктем-3,24</li>
                <li><a href="tel:+8801682648101" class=" text--resize"aria-label="@lang('main.write')" aria-label="Позвонить на +88 01682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com" class=" text--resize" aria-label="Написать на info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html" class=" text--resize" aria-label="Ссылка на твиттер"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html" class=" text--resize" aria-label="Ссылка на фейсбук"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html" class=" text--resize" aria-label="Ссылка на пинтерест"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html" class=" text--resize" aria-label="Ссылка на инстаграм"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html" class=" text--resize" aria-label="Ссылка на ютуб"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->

<script>


</script>