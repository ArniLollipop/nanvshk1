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





@endsection