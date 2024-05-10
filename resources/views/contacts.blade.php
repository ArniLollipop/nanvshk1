@extends('layouts.app')
@section('content') 

    <div class="boxed_wrapper">

  
 
        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa2fce80e081f32d5116e89d541306fa9af45b9c88616e8e3337300ddc1476a62&amp;source=constructor" width="100%" height="507" frameborder="0"></iframe>                <!-- <div 
                    class="google-map p_relative d_block" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="assets/images/icons/map-marker-2.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div> -->
            </div>
        </section>
        <!-- google-map-section end -->


        <!-- contact-four -->
        <section class="contact-four p_relative sec-pad">
            <div class="shape">
                <div class="shape-1 p_absolute l_0 t_0" style="background-image: url(assets/images/shape/shape-210.png);"></div>
                <div class="shape-2 p_absolute b_0 r_150" style="background-image: url(assets/images/shape/shape-211.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                        <div class="info-inner">
                            <div class="sec-title p_relative d_block mb_40">
                                <h5 class="d_block fs_17 lh_20 fw_sbold uppercase mb_17">@lang('main.contacts.info1')</h5>
                                <h3 class="d_block fs_30 lh_40 fw_bold">@lang('main.contacts.info2')</h3>
                            </div>
                            <ul class="info-list clearfix">
                                <li class="p_relative d_block pl_100 pb_18 mb_25">
                                    <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                        <div class="icon p_relative d_iblock"><i class="icon-180"></i></div>
                                        <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-133.png" alt=""></div>
                                    </div>
                                    <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">@lang('main.contacts.adr')</h4>
                                    <p class="font_family_poppins">@lang('main.about.contactinfo')</p>
                                </li>
                                <li class="p_relative d_block pl_100 pb_18 mb_25">
                                    <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                        <div class="icon p_relative d_iblock"><i class="icon-181"></i></div>
                                        <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-134.png" alt=""></div>
                                    </div>
                                    <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">Email</h4>
                                    <p class="font_family_poppins"><a href="mailto:nanvshk@gmail.com">nanvshk@gmail.com</a><br /></p>
                                </li>
                                <li class="p_relative d_block pl_100 pb_18">
                                    <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                        <div class="icon p_relative d_iblock"><i class="icon-182"></i></div>
                                        <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-135.png" alt=""></div>
                                    </div>
                                    <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">@lang('main.contacts.adr1')</h4>
                                    <p class="font_family_poppins"><a href="tel:77770565527">+7 (777)- 056-55-27</a><br /></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner p_relative ml_40 pt_45 pr_50 pb_50 pl_50 b_radius_10 b_shadow_6">
                            <div class="text p_relative d_block mb_35">
                                <h3 class="d_block fs_30 lh_40 fw_bold">@lang('main.contacts.adr2')</h3>
                            </div>
                            <form method="post" action="sendemail.php" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="@lang('main.contacts.name')" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="@lang('main.contacts.phone')">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="@lang('main.contacts.theme')">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="@lang('main.contacts.comments')"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn theme-btn-eight" type="submit" name="submit-form">@lang('main.contacts.send')<i class="icon-4"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-four end -->




    @endsection
