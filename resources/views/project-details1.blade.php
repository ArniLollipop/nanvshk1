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
        <div class="content-box">
            <!-- <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Artboard Studio</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Details 2</li> -->
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- project-details -->
<section class="project-details p_relative pb_110">
    <div class="auto-container">
        <div class="project-info p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_40">
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15">КОМПЛЕКСНАЯ АВТОМАТИЗАЦИЯ ДЕЯТЕЛЬНОСТИ ВЫСШИХ УЧЕБНЫХ ЗАВЕДЕНИЙ, НИИ И ВНЕДРЕНИЯ ЦИФРОВЫХ СЕРВИСОВ</h3></br>
                        <h4 class="d_block  lh_40 fw_sbold mb_15">КРАТКОЕ ОПИСАНИЕ</h4>
                        <h4 class="d_block  lh_40 fw_sbold mb_15">ЦЕЛЬ:</h4>
                        <!-- <div class="col-lg-4 col-md-12 col-sm-12 info-column"> -->
                            <!-- <div class="info p_relative d_block pl_100 pt_20 pb_20 mt_15"> -->
                                <ul class="info-list clearfix">
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">• автоматизация процессов управления образовательных учреждений путем внедрения облачных цифровых сервисов</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">• формирование единого информационного пространства высшего и средне-специального образования</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">• интеграция информационных ресурсов образовательных учреждений в отечественное образовательное пространство</li>
                                </ul>
                            <!-- </div> -->
                        <!-- </div> -->
                        <h4 class="d_block  lh_40 fw_sbold mb_15"> ПОТРЕБИТЕЛИ:</h4>
                                <ul class="info-list clearfix">
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">• Высшие учебные заведения</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">• Колледжи</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">• Научно-исследовательские институты</li>
                                </ul>
                        <h4 class="d_block  lh_40 fw_sbold mb_15">ЗАДАЧИ:</h4> 
    
                        <p class="font_family_poppins mb_25 color_black fs_18">Исследование технологии блокчейн для применения в сфере криптографической защиты и верификации подлинности официальных документов процесса обучения в вузах: проблемы, зарубежный опыт, методы. </p>
                        <p class="font_family_poppins mb_25 color_black fs_18">Разработка процедуры по оцифровке, хранению и защите от фальсификации официальных документов процесса обучения с применением технологии блокчейн. </p>
                        <p class="font_family_poppins mb_25 color_black fs_18"> Проектирование и разработка информационной системы верификации документов вуза, интегрированной в международную платформу с модулями цифрового реестра официальных документов процесса обучения, криптографической защиты данных в децентрализованной системе и интеграции с внешними платформами вузов для синхронизации данных, на примере информационно-программного комплекса «UNIVER 2.0», и международной платформой.</p>
                        <p class="font_family_poppins mb_25 color_black fs_18">Оформление результатов разработки информационной системы верификации официальных документов процесса обучения в вузах Казахстана, интегрированной в международную платформу для получения охранного документа.</p>
                        <p class="font_family_poppins mb_25 color_black fs_18">Опытное тестирование программного продукта верификации подлинности официальных документов процесса обучения на базе КазНУ им. Аль-Фараби, распространение опыта среди вузов с системой «UNIVER 2.0».</p>

                    </div>
                </div>
                
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_70">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/univer1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/univer1.jpg') }}" alt=""></a></figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/univer2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/univer2.jpg') }}" alt=""></a></figure>
                </div>
            </div>
        </div>
        <h4 class="d_block  lh_40 fw_sbold mb_15"> ЭТАПЫ РЕАЛИЗАЦИИ ПРОЕКТА:</h4>

        <div class="lower-box p_relative d_block">
            <div class="text">
                <ul class="info-list clearfix">
                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">1 этап – Исследование технологии блокчейн для применения в сфере криптографической защиты и верификации подлинности документов об образовании: проблемы, методы, модели, алгоритмы. Срок – 3 мес.</li>
                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">2 этап – Проектирование и разработка информационной системы верификации документов в вузах, интегрированной в международную платформу. Срок – 12 мес.</li>
                    <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">3 этап – Разработка научно-методологического обоснования формирования цифрового реестра официальных документов процесса обучения в вузе с применением технологии блокчейн. Срок – 12 мес.</li>
                </ul>
            </div>
        </div>
        <h4 class="d_block  lh_40 fw_sbold mb_15">ПЕРИОД РЕАЛИЗАЦИИ: </h4>
        <p class="font_family_poppins mb_25 color_black fs_18">Октябрь 2020 - декабрь 2022 (27 мес.).</p>

        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="{{ route('project-details6', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>Предыдущий проект</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="{{ route('project-details2', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">Следующий проект<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- project-details end -->


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
