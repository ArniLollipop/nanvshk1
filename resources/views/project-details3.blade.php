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
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15">@lang('main.project3.title')</h3></br>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_70">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="{{ asset('assets/images/project/pr88.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/project/pr88.jpg') }}" alt=""></a></figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <h4 class="d_block  lh_40 fw_sbold mb_15">Ұйым қызметінің мәні:</h4>
                    <ul class="info-list clearfix">
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">ҚР ұлттық сертификаттау жүйесін дамыту;</li>
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">экономиканың түрлі салаларындағы мамандардың кәсіби дағдылары мен құзыреттерін арттыруға жәрдемдесу;</li>
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">сертификаттау саласындағы халықаралық ынтымақтастықты дамыту;</li>
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">инженерлік білім беру мен инженерлік қызмет сапасының кепілдіктерін қамтамасыз етуге жәрдемдесу;</li>
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">ҚР заңнамасында тыйым салынбаған және коммерциялық емес ұйымның құрылтай құжаттарында көзделген қызметінің мақсаттарына сәйкес келетін қызметтің бір немесе бірнеше түрін жүзеге асыру;</li>
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">аккредиттеу немесе лицензиялау рәсімінен өтуді талап ететін қызмет түрлерін іске асыру ҚР заңнамасының тиісті талаптары орындалғаннан кейін іске асырылуы мүмкін.</li>
                    
                    </ul>
                    <h4 class="d_block  lh_40 fw_sbold mb_15">Ұйым қызметінің мақсаттары:</h4>
                    <ul class="info-list clearfix">
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">ҚР экономикасының түрлі салаларындағы мамандарды сертификаттауды ұйымдастыру;</li>
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">мамандарды сертификаттау рәсіміне даярлауды ұйымдастыру;</li>
                        <li class="p_relative d_block fs_18 font_family_inter mb_12 color_black">Қазақстан Республикасының және Орталық Азия өңірі елдерінің мамандарын сертификаттау жөніндегі халықаралық қызметті дамыту.</li>
                       
                    </ul>
                </div>
            </div>
        </div>
       
        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="{{ route('project-details8', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>@lang('main.projects.prev')</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="{{ route('project-details1', app()->getLocale()) }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">@lang('main.projects.next')<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- project-details end -->




@endsection
