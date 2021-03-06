<style>
.single_banner_part{
    background-image: url(../assets/malgeunmul/img/main/main_cover_downsized.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.breadcrumb_part.music{
    background-image: url(../assets/malgeunmul/img/main/main_music.jpg) !important;
    background-position: center !important;
}
.breadcrumb_part.goods{
    background-image: url(../assets/malgeunmul/img/main/main_music.jpg) !important;
    background-position: center !important;
}
.play_btn_container{
    background-color: #fff;
    height: 72px;
    width: 72px;
    border-radius: 50%;
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
}
.play_btn_container .polygon_shape{
    width: 0px;
    height: 0px;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 18px solid #fe4b7b;
    display: block;
    text-align: center;
    margin-left: 6px;
}
h5.kid_title.wow.fadeInLeft {
    font-size: 18px;
    color: #fe4b7b;
    font-weight: 700;
    margin-bottom: 7px;
}
.contents_img_wrapper{
    width: 100%;
    padding-top:100%;
    position: relative;
}
div.contents_img_wrapper > div {
	position: absolute;
    top:0;
    width: 100%;
    height: 100%;
}
.developing{
    position: absolute;
    right: 20px;
}
.developing h5{
    color : #fff;
}
.event_part{
    /* background-color: #ffca18; */
    background-color: #fbbd0a;
}
.event_part .single_event_list:nth-child(4){
    background-color: #379efd;
}
.event_part .single_event_list:nth-child(4) .event_date {
    border: 1px solid #2493fa;
    background-color: #2493fa;
}
.event_part .single_event_list:nth-child(3){
    background-color: #b783b9;
}
.event_part .single_event_list:nth-child(3) .event_date {
    border: 1px solid #b17ab3;
    background-color: #b17ab3;
}
.withi.mobile{
    display:none;
}
.withi.mobile img{
    width : 100%;
}
@media (max-width: 767.98px){
    .animation-diaplay-none {
        display: none;
    }
    .withi.mobile{
        display: block;
        padding: 0px 5% 30px 5%;
    }
    .logo-video{
        margin-left: 0 !important;
    }
    .banner_iner.mobile{display:block}
    .banner_iner.pc{display:none}
    .description.mobile{display:block}
    .description.pc{display:none}
}
@media (min-width: 767.98px){
    .banner_iner.mobile{display:none}
    .banner_iner.pc{display:block}
    .description.mobile{display:none}
    .description.pc{display:block}
    .white-space{white-space: pre };
}

@media (max-width: 992px){
    .developing {
        top: 10px;
    }
}
.s4_about_section .about_page_animation_2 {
    left: 2%;
    bottom: 10%;
}
.about_img_5 {
    position: absolute;
    left: 9px;
    bottom: 2px;
    z-index: -1;
}
.logo-video {
    border-radius: 10px;
}
.about_img_7 {
    position: absolute;
    right: 0px;
    top: 15px;
    z-index: -1;
}
 </style>
 <!-- banner part here -->
    <section class="banner_part">
        <div class="single_banner_part">
            <div class="container custom_container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="banner_iner pc" style="padding-top: 18%;">
                            <h2> ????????? ?????????  ????????????.</h2>
                        </div>
                        <div class="banner_iner mobile" style="padding-bottom: 13%;">
                            <h2> ????????? ?????????</h2>
                            <h2>????????????.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_animation_1">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ":0}'>
                    <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/banner_1.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_2">
                <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>
                    <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/banner_2.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_3">
                <div data-parallax='{"x": 0, "y": 200, "rotateZ":0}'>
                    <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/banner_3.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_4">
                <div data-parallax='{"x": 10, "y": 150, "rotateZ":0}'>
                    <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/banner_4.png" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end -->

    <!-- services part here -->
    <!-- <section class="services_part wave_shape_bg sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 wow fadeInDown" data-wow-delay=".2s">
                    <a class="single_service_part d-block" href="/pages/music">
                        <div class="contents_img_wrapper">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/music/hjsong_cover.jpg" alt="#"  width="80%" class="img-fluid">
                            </div>
                        </div>
                        <h5 class="service_title">MUSIC</h5>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6 wow fadeInDown" data-wow-delay=".4s">
                    <a class="single_service_part d-block bg_color_2" href="/pages/workbooks">
                        <div class="contents_img_wrapper">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-1.jpg" alt="#"  width="80%" class="img-fluid">
                            </div>
                        </div>
                        <h5 class="service_title">?????????</h5>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 wow fadeInDown" data-wow-delay=".2s">
                    <a class="single_service_part d-block" href="/pages/goods">
                        <div class="contents_img_wrapper">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/main/main_goods.png" alt="#"  width="80%" class="img-fluid">
                            </div>
                        </div>
                        <h5 class="service_title">??????</h5>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6 wow fadeInDown" data-wow-delay=".4s">
                    <a class="single_service_part d-block bg_color_2" href="#about_section">
                        <div class="contents_img_wrapper">
                            <div class="d-flex justify-content-center align-items-center"
                                style="background-color: #fff;
                                        padding: 10%;
                                        background-clip: content-box;"
                            >
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/logo_1.png" alt="#" style="background-color:#fff" width="80%" class="img-fluid">
                            </div>
                        </div>
                        <h5 class="service_title">??????</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="services_shape_animation_1">
            <div data-parallax='{"x": 2, "y": 80, "rotateZ":0}'>
                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/animation_shape/feature_shape_01.png" alt="#">
            </div>
        </div>
        <div class="services_shape_animation_2">
            <div data-parallax='{"x": 15, "y": 100, "rotateZ":0}'>
                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/animation_shape/feature_shape_02.png" alt="#">
            </div>
        </div>
        <div class="services_shape_animation_3">
            <div data-parallax='{"x": 0, "y": 90, "rotateZ":0}'>
                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/animation_shape/feature_shape_03.png" alt="#">
            </div>
        </div>
        <div class="services_shape_animation_4">
            <div data-parallax='{"x": 10, "y": 120, "rotateZ":0}'>
                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/animation_shape/feature_shape_04.png" alt="#">
            </div>
        </div>
    </section> -->
    <!-- services part end -->

    <!-- about section part here -->
    <section class="about_section section_padding s4_about_section pb-5" id="about_section">
        <div class="container custom_container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-xl-5 order-2 order-lg-1">
                    <div class="about_section_content mt-5 mt-lg-0">
                        <h5 class="kid_title wow fadeInLeft" data-wow-delay=".3s">Who We Are</h5>
                        <h2 class="kid_title wow fadeInLeft" data-wow-delay=".4s"><span class="Cafe24Ssurround title_overlay_effect">?????????</span></h2><p class="wow fadeInLeft white-space" data-wow-delay=".5s">????????? ????????? ???????????? ????????? ????????????, 
??????????????? ?????? ???????????? ????????? ????????????,
???????????? ?????? ????????? ????????????,</p><p class="wow fadeInLeft mt-2 white-space" data-wow-delay=".5s">???????????? ????????? ????????? ??????????????? ????????? ?????? ????????????
???????????? ????????? ??????.</p><p class="wow fadeInLeft mt-2 white-space" data-wow-delay=".5s">??????????????? ?????????????????? ????????? ??????????????? ????????? ?????? 
???????????? ????????????.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="img_section">
                        <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/about_img_shape_2.png" alt="#" class="about_img_7"
                            data-parallax='{"x": 0, "y": -50, "rotateZ":0}'>
                        <video src='<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/main/malgeunmul_logo_video.mp4' width='541'class="logo-video img-fluid" style="margin-left:30px"autoplay playsinline muted loop>
                            ?????? ??????????????? video ????????? ???????????? ????????????.
                        </video>
                        <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/about_img_shape_1.png" alt="#" class="about_img_5"
                            data-parallax='{"x": 0, "y": 50, "rotateZ":0}'>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_page_animation_1 animation-diaplay-none">
            <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/icon_5.png" alt="#"></div>
        </div>
        <div class="about_page_animation_2 animation-diaplay-none">
            <div data-parallax='{"x": 10, "y": 80, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/icon_6.png" alt="#"></div>
        </div>
        <div class="about_page_animation_3 animation-diaplay-none">
            <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/icon_7.png" alt="#"></div>
        </div>
        <div class="about_page_animation_4 animation-diaplay-none">
            <div data-parallax='{"x": 30, "y": -50, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/icon_8.png" alt="#"></div>
        </div>
    </section>
    <!-- about section part end -->

    <!-- get start part here -->
    <section class="get_start_part section_padding pt-5">
        <div class="container custom_container">
            <div class="row justify-content-even align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/about_img_shape_2.png" alt="#" class="about_img_7"
                        data-parallax='{"x": 0, "y": -50, "rotateZ":0}'> -->
                    <div class="video_section">
                        <video src='<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/main/withi_logo_video_8s.mp4' width='541'class="logo-video img-fluid" autoplay playsinline muted loop>
                            ?????? ??????????????? video ????????? ???????????? ????????????.
                        </video>
                    </div>
                    <!-- <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/about_img_shape_1.png" alt="#" class="about_img_5"
                        data-parallax='{"x": 0, "y": 50, "rotateZ":0}'> -->
                    <!-- <div class="video_section">
                        <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/main/withi_logo.jpg" alt="#" class="img-fluid">
                        <a href="https://www.youtube.com/watch?v=PGIQLgYRyIE&list=OLAK5uy_k0kLuO_sbA5pRPtKtWCvUKpcGxtHJSHeI" class="play_btn_container" target="_blank"><span class="polygon_shape"></span></a>
                    </div> -->
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="get_start_content mt-5 mt-lg-0">
                        <h5 class="kid_title wow fadeInLeft" data-wow-delay=".3s">brand</h5>
                        <h2 class="kid_title"> <span class="Cafe24Ssurround title_overlay_effect"> ???????????? </span></h2>
                        <p>??????????????? ?????????????????? ????????? ??????????????? ?????????????????? ?????????.
                            ???????????? ??? ?????? ??????, ??? ?????? ????????? ??? ??? ?????????
                            ??? ????????? ????????? '???????????? withi' ??? ?????? ???????????????.
                        </p>
                        <p class="mt-2">????????? ????????? ?????? ?????? ???????????? ??????????????? withi' !</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="get_start_animation_1"><div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/feature_1.png" alt="#"></div></div>
        <div class="get_start_animation_3 animation-diaplay-none"><div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/feature_3.png" alt="#"></div></div>
        <div class="get_start_animation_6 animation-diaplay-none"><div data-parallax='{"x": 15, "y": 115, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/feature_6.png" alt="#"></div></div>
        <div class="get_start_animation_9 animation-diaplay-none"><div data-parallax='{"x": 20, "y": 120, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/feature_13.png" alt="#"></div></div>
        <div class="get_start_animation_11 animation-diaplay-none"><div data-parallax='{"x": 15, "y": 115, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/feature_12.png" alt="#"></div></div>
        <div class="get_start_animation_12"><div data-parallax='{"x": 20, "y": 40, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/feature_7.png" alt="#"></div></div>
    </section>
    <!-- get start part end -->

    <!-- services part here -->
    <section class="success_story section_padding" style="border-top: 2px dashed #ebe8f1;background-color: #fff;">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section_tittle_style_02 mb-4">
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="Cafe24Ssurround title_overlay_effect">????????????</span></h2>
                    <p class="description wow fadeInDown" data-wow-delay=".3s">
                        ???????????? ??????, ?????? ?????? ????????? ???, 
                    </p>
                    <p class="description wow fadeInDown pc" data-wow-delay=".3s">
                        ????????? ??????????????? ??????????????? ????????? ???????????? ??????????????? ???????????????.
                    </p>
                    <p class="description wow fadeInDown mobile" data-wow-delay=".3s">
                        ????????? ??????????????? ??????????????? ????????? ???????????? 
                    </p>
                    <p class="description wow fadeInDown mobile" data-wow-delay=".3s">
                        ??????????????? ???????????????.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10 fadeInDown" data-wow-delay=".3s">
                <img src="/assets/malgeunmul/img/main/main_music.jpg" width="100%"/>   
            </div>
        </div>

        <div class="row justify-content-center">
            <a class="pc-button elementor-button button-link cu_btn mt-5" href="/pages/music">
                <div class="button-content-wrapper ">
                    <span class="elementor-button-text">????????????</span>
                    <svg class="pc-dashes inner-dashed-border animated-dashes">
                        <rect x="5px" y="5px" rx="22px" ry="22px" width="0" height="0"></rect>
                    </svg>
                </div>
            </a>    
        </div>
        <div class="story_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_1.png" alt="#">
            </div>
        </div>
        <div class="story_animation_2 animation-diaplay-none">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_2.png" alt="#">
            </div>
        </div>
        <div class="story_animation_3 animation-diaplay-none">
            <div data-parallax='{"x": 30, "y": 50, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_3.png" alt="#">
            </div>
        </div>
        <div class="story_animation_4 animation-diaplay-none">
            <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_4.png" alt="#">
            </div>
        </div>
        <div class="story_animation_5">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_5.png" alt="#">
            </div>
        </div>
        <div class="story_animation_6">
            <div data-parallax='{"x": 15, "y": 50, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_6.png" alt="#">
            </div>
        </div>
    </section>
    <!-- services part end -->

    <!-- services part here -->
    <section class="event_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="Cafe24Ssurround title_overlay_effect" style="background-image: linear-gradient(#fcd484, #fcd484);"> ????????????</span></h2>
                        <p class="description wow fadeInDown" data-wow-delay=".3s" style="color:#12265A">????????? ????????? ?????? ?????? ????????????</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_part_iner">
                        <div class="row justify-content-end">
                            <div class="event_img wow fadeInLeft" data-wow-delay=".5s">
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/main/main_withi_logo.jpg" alt="#" class="img-fluid">
                            </div>
                            <div class="withi mobile">
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/main/main_withi_logo.jpg" alt="#" class="img-fluid">
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <a href="/pages/workbooks">
                                    <div class="single_event_list wow fadeInDown" style="margin-bottom:30px" data-wow-delay=".1s">
                                        <div class="event_date">
                                            <i class="fas fa-palette"></i>
                                        </div>
                                        <div class="event_content">
                                            <h4>???????????? Art</h4>
                                            <p>????????? ????????? ?????? ?????? ???????????? - ART</p>
                                        </div>
                                        <div class="developing">
                                            <i class="ti-arrow-right" style="font-weight: 600;font-size: 24px;color: #fff;"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".2s">
                                    <div class="event_date">
                                        <i class="fas fa-flask"></i>
                                    </div>
                                    <div class="event_content">
                                        <h4>???????????? Science</h4>
                                        <!-- <h4> <a href="/pages/workbooks">???????????? Science</a></h4> -->
                                        <p>????????? ????????? ?????? ?????? ???????????? - SCIENCE</p>
                                    </div>
                                    <div class="developing">
                                        <h5>?????????</h5>
                                    </div>
                                </div>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".3s">
                                    <div class="event_date">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="event_content">
                                        <h4>???????????? Language</h4>
                                        <!-- <h4> <a href="/pages/workbooks">???????????? Language</a></h4> -->
                                        <p>????????? ????????? ?????? ?????? ???????????? - LANGUAGE</p>
                                    </div>
                                    <div class="developing">
                                        <h5>?????????</h5>
                                    </div>
                                </div>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".4s">
                                    <div class="event_date">
                                        <i class="fas fa-running"></i>
                                    </div>
                                    <div class="event_content">
                                        <h4>???????????? Activity</h4>
                                        <!-- <h4> <a href="/pages/workbooks">???????????? Activity</a></h4> -->
                                        <p>????????? ????????? ?????? ?????? ???????????? - ACTIVITY</p>
                                    </div>
                                    <div class="developing">
                                        <h5>?????????</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/event_1.png" alt="#"></div>
        </div>
        <div class="event_animation_2">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/event_2.png" alt="#"></div>
        </div>
        <div class="event_animation_3">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/event_3.png" alt="#"></div>
        </div>
    </section>
    <!-- services part end -->
    <section class="success_story section_padding" style="border-top: 2px dashed #ebe8f1;background-color: #fff;">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section_tittle_style_02 mb-4">
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="Cafe24Ssurround title_overlay_effect">????????? ?????? ??????</span></h2>
                    <p class="description wow fadeInDown" data-wow-delay=".3s">
                        3D ??????????????? '????????? ??????'??? ?????????,
                    </p>
                    <p class="description wow fadeInDown word-break" data-wow-delay=".3s">
                        ??????, ??????, ??????, ???????????? ????????? ????????? ???????????????!
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10 fadeInDown" data-wow-delay=".3s">
                <img src="/assets/malgeunmul/img/main/main_goods.jpg" width="100%"/>   
            </div>
        </div>

        <div class="row justify-content-center">
            <a class="pc-button elementor-button button-link cu_btn mt-5" href="/pages/goods">
                <div class="button-content-wrapper ">
                    <span class="elementor-button-text">????????? ??????</span>
                    <svg class="pc-dashes inner-dashed-border animated-dashes">
                        <rect x="5px" y="5px" rx="22px" ry="22px" width="0" height="0"></rect>
                    </svg>
                </div>
            </a>    
        </div>
        <div class="story_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_1.png" alt="#">
            </div>
        </div>
        <div class="story_animation_2 animation-diaplay-none">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_2.png" alt="#">
            </div>
        </div>
        <div class="story_animation_3 animation-diaplay-none">
            <div data-parallax='{"x": 30, "y": 50, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_3.png" alt="#">
            </div>
        </div>
        <div class="story_animation_4 animation-diaplay-none">
            <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_4.png" alt="#">
            </div>
        </div>
        <div class="story_animation_5">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_5.png" alt="#">
            </div>
        </div>
        <div class="story_animation_6">
            <div data-parallax='{"x": 15, "y": 50, "rotateZ":0}'><img src="/assets/malgeunmul/img/icon/story_animation_6.png" alt="#">
            </div>
        </div>
    </section>





