@extends('layouts.app')
@section('content') 

<div class="boxed_wrapper">


<!-- Page Title -->
<section class="page-title about-page-5 style-two p_relative centred">
            <div class="pattern-layer">
                <div class="shape-1 p_absolute l_120 t_120 rotate-me" style="background-image: url({{ asset('assets/images/shape/shape-176.png') }});"></div>
                <div class="shape-2 p_absolute t_180 r_170 float-bob-y" style="background-image: url({{ asset('assets/images/shape/shape-56.png') }});"></div>
                <div class="shape-3 p_absolute l_0 b_0" style="background-image: url({{ asset('assets/images/shape/shape-189.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <!-- <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Shop Details</h1> -->
                    <!-- <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Shop</li>
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Shop Details 1</li>
                    </ul> -->
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- shop-details -->
        <section class="shop-details p_relative pt_140 pb_80">
            <div class="auto-container">
                <div class="product-details-content p_relative d_block mb_100">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box p_relative d_block">
                                <figure class="image"><img src="{{ asset('assets/images/land-about.png') }}" alt=""></figure>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="product-details p_relative d_block ml_20">
                                <h2 class="d_block fs_30 lh_40 fw_sbold font_family_inter mb_5">@lang('main.project7.title')</h2>
                               <div class="text p_relative d_block mb_30">
                                    <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info1')</p>
                                    <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info2')</p>
                                    <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info3')</p>
                                    <p class="font_family_poppins mb_25 color_black fs_18">@lang('main.project7.info4')</p>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-details end -->

         <!-- shop-page-section -->
         <section class="shop-page-section shop-page-2 p_relative sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                 @foreach ($products as $product)
                    <div class="col-lg-2 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one">
                            <div class="inner-box p_relative d_block tran_5 mb_30">
                                <div class="image-box p_relative d_block">
                                    <!-- <span class="category hot p_absolute l_10 t_10 fs_13 fw_medium font_family_poppins z_1">Hot</span> -->
                                    <figure class="image p_relative d_block"><img src="{{ asset('storage/'.$product->image) }}" alt=""></figure>
                                  
                                </div>
                                <div class="lower-content p_relative d_block pt_25 pb_30">
                                                @if(app()->getLocale() == 'ru')
                                                <h6 class="d_block fs_15 lh_20 mb_4"><a href="#" class="d_iblock color_black">{{ $product->name_ru }}</a></h6>
                                              
                                                 @elseif(app()->getLocale() == 'kz')
                                                 <h6 class="d_block fs_15 lh_20 mb_4"><a href="#" class="d_iblock color_black">{{ $product->name_kz }}</a></h6>

                                                @else
                                                <h6 class="d_block fs_15 lh_20 mb_4"><a href="#" class="d_iblock color_black">{{ $product->name_en }}</a></h6>
                                            
                                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                 @endforeach 
                   
                </div>
                <div class="pagination-wrapper centred mt_30">
                    @if(!is_array($products))
                        {{ $products->appends(request()->input())->links('pagination') }}
                    @endif
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->




@endsection
