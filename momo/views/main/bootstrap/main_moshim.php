<!-- 콘텐츠 소개 시작-->
<section class="main-slider style-two main-slider-pc">
    <div class="main-slider-carousel owl-carousel owl-theme nav-style-one">
        <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>main-1.jpg)">
            <!-- <div class="container">
                    <div class="content-box">
                        <h3>Best Choise</h3>
                        <h1>Make Your Children's Life Special</h1>
                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim idest laborum</div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div> -->
        </div>
        <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>main-2.jpg)">
            <!-- <div class="container">
                    <div class="content-box">
                        <h3>Best Choise</h3>
                        <h1>Make Your Children's Life Special</h1>
                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim idest laborum</div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div> -->
        </div>
        <!-- <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/main-3.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h3>Best Choise</h3>
                        <h1>Make Your Children's Life Special</h1>
                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim idest laborum</div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div> 
            </div> -->
        <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>main-4.jpg)">
            <!-- <div class="container">
                    <div class="content-box">
                        <h3>Best Choise</h3>
                        <h1>Make Your Children's Life Special</h1>
                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim idest laborum</div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div> -->
        </div>
        <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>main-5.jpg)">
            <!-- <div class="container">
                    <div class="content-box">
                        <h3>Best Choise</h3>
                        <h1>Make Your Children's Life Special</h1>
                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim idest laborum</div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div> -->
        </div>
    </div>
</section>
<!-- 모바일 버전 -->
<section class="col-md-12 col-sm-12 main-slider style-two main-slider-mobile" style="padding:0">
    <div class="main-slider-carousel owl-carousel owl-theme nav-style-one">
        <!--  -->
        <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>mmain-1.jpg)"></div>
        <!-- 동화 -->
        <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>mmain-2.jpg)"></div>
        <!-- 동요 -->
        <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>mmain-3.jpg)"></div>
        <!-- CD -->
        <div class="slide" style="background-image:url(http://moshim.co.kr/assets/moshim/images/main-slider/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>mmain-5.jpg)"></div>
    </div>
</section>
<!-- 콘텐츠 소개 end -->

<!--  소개 & 효정지도 시작 -->
<section class="about-section" id="intro">
    <div class="anim-icon">
        <div class="icon icon-1 float-bob-x"></div>
        <div class="icon icon-2 wow zoomIn" data-wow-delay="00ms" data-wow-duration="1500ms"></div>
        <div class="icon icon-3" style="bottom:-100px; right:200px"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <video class="col-lg-12 col-md-12 col-sm-12" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" style="padding-top:25px">
                    <source src="http://moshim.co.kr/assets/moshim/videos/logo_video.mp4">
                </video>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title style-two">
                        <h5 style="font-size:1.625rem"><?php echo $this->lang->line('main_title_1') ?></h5>
                        <h1 style="color: #2b3c6b;"><?php echo $this->lang->line('main_subtitle_1') ?></h1>
                    </div>
                    <div class="text font-size-custom-1_5em">
                        <p style="line-height:1.4em; word-spacing:0.1em; ">
                            <?php echo $this->lang->line('main_content_1') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--시작: 효정지도, 모바일에서만 -->
            <div class="col-md-12 col-sm-12 main-slider-mobile">
                <video class="col-lg-12 col-md-12 col-sm-12" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" id="hyojeongVideoMobile" style="padding:0">
                    <source src="http://moshim.co.kr/assets/moshim/videos/hyojeongmap_video.mp4">
                </video>
            </div>
            <!-- 끝 : 효정지도, 모바일에서만 -->
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title style-two" style="padding-top: 35px; margin-bottom:0px">
                        <h5 style="font-size:1.625rem"> <?php echo $this->lang->line('main_title_2') ?></h5>
                        <div class="custom-title">
                            <?php if ($_GET['lang'] == 'jp') { ?>
                                <h1><?php echo $this->lang->line('main_subtitle_2') ?></h1>
                            <?php } else { ?>
                                <h1><?php echo $this->lang->line('main_subtitle_2-1') ?></h1>
                                <p style="color:#2b3c6b">孝情之道</p>
                                <h1><?php echo $this->lang->line('main_subtitle_2-2') ?></h1>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="custom-paragraph text" style="font-size:1.2em ; font-family: Nanum Gothic !important;">
                        <?php if ($_GET['lang'] == 'jp') { ?>
                            <?php echo $this->lang->line('main_content_2') ?>
                        <?php } else { ?>
                            <?php echo $this->lang->line('main_content_2-1') ?>
                            <p style=" font-size:0.6em">孝情之道</p>
                            <?php echo $this->lang->line('main_content_2-2') ?>
                            <!-- <p style=" font-size:0.6em">孝情之道</p> -->
                            <?php echo $this->lang->line('main_content_2-3') ?>
                        <?php } ?>
                    </div>
                    <!-- <div class="btn-box"><a href="#intro_further" class="theme-btn">더알아보기</a></div> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 main-slider-pc">
                <video class="col-lg-12 col-md-12 col-sm-12" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" style="padding-top:110px" id="hyojeongVideo">
                    <source src="http://moshim.co.kr/assets/moshim/videos/hyojeongmap_video.mp4">
                </video>
            </div>
        </div>
    </div>
</section>
<!--  소개 끝 -->

<!-- 쇼핑몰 시작 -->
<!-- <section class="service-section sec-pad" style="background-image: url(http://moshim.co.kr/assets/moshim/images/background/service-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="sec-title style-two">
                            <h5 class="text-center"> 쇼핑몰</h5>
                            <h1>Best Services for Kids</h1>
                        </div>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam.</div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                    <div class="carousel-content">
                        <div class="services-carousel owl-carousel owl-theme">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-bus-1"></i></div>
                                    <h3><a href="#">참어머님 생애동화책</a></h3>
                                    <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-running"></i></div>
                                    <h3><a href="#">참어머님 생애동요</a></h3>
                                    <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-drum"></i></div>
                                    <h3><a href="#">참어머님 생애동요 사운드북</a></h3>
                                    <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- 쇼핑몰 끝 -->

<!-- 동화책 시작 -->
<section class="news-section" style="background: #ffcde4 ;">
    <div class="anim-icon">
        <div class="icon icon-1 wow zoomIn" data-wow-delay="00ms" data-wow-duration="1500ms"></div>
        <div class="icon icon-3 float-bob-x" style="right:80px"></div>
    </div>
    <div class="container">
        <div class="sec-title text-center books_title">
            <h5 style="font-size:1.625rem"><?php echo $this->lang->line('main_title_3') ?></h5>
            <h3><?php echo $this->lang->line('main_subtitle_3') ?></h3>
        </div>
        <div class="sec-title text-center books_title_mobile">
            <h5 class="line-three" style="font-size:1.625rem"><?php echo $this->lang->line('main_title_mobile_3') ?></h5>
            <h3><?php echo $this->lang->line('main_subtitle_mobile_3') ?></h3>
        </div>
        <div class="row" style="padding-bottom:15px">
            <div class="col-lg-12 col-md-12 col-sm-12  block-column">
                <div class="range-slider clearfix pull-right wow fadeInUp">
                    <a href="
                    <?php if ($_GET['lang'] == 'jp') { ?>
                    http://moshim.co.kr/pages/books/?lang=jp
                    <?php } else { ?>
                    http://moshim.co.kr/pages/books
                    <?php } ?>
                    " class="filter-btn cursor" style="background-color:#2B3C6B; font-size:18px; color:white">
                        <?php echo $this->lang->line('main_btn1_3') ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box cursor"><a target="_blank" onclick="javascript:openWin_books(1);"><img src="http://moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>01.jpg" alt=""></a></figure>
                        <div class="lower-content" style="background: white; border-radius: 0px 0px 25px 25px;">
                            <h3 class="font-size-custom-1_4em"><a target="_blank" onclick="javascript:openWin_books(1);">
                                    <?php echo $this->lang->line('book_title_1') ?></a></h3>
                            <!-- <ul class="info-box">
                                    <li>20 July, 2019</li>
                                    <li>5 Comments</li>
                                </ul> -->
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                            <div class="link-btn wow zoomIn cursor" data-wow-delay="00ms" data-wow-duration="1500ms"><a target="_blank" onclick="javascript:openWin_books(1);" style="font-size:0.8em">
                                    <?php echo $this->lang->line('main_btn2_3') ?>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box cursor"><a target="_blank" onclick="javascript:openWin_books(2);"><img src="http://moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>02.jpg" alt=""></a></figure>
                        <div class="lower-content" style="background: white; border-radius: 0px 0px 25px 25px;">
                            <h3 class="font-size-custom-1_4em"><a target="_blank" onclick="javascript:openWin_books(2);"><?php echo $this->lang->line('book_title_2') ?></a></h3>
                            <!-- <ul class="info-box">
                                    <li>19 July, 2019</li>
                                    <li>7 Comments</li>
                                </ul> -->
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                            <div class="link-btn wow zoomIn cursor" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <a target="_blank" onclick="javascript:openWin_books(2);" style="font-size:0.8em"><?php echo $this->lang->line('main_btn2_3') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box cursor"><a target="_blank" onclick="javascript:openWin_books(3);"><img src="http://moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>03.jpg" alt=""></a></figure>
                        <div class="lower-content" style="background: white; border-radius: 0px 0px 25px 25px;">
                            <h3 class="font-size-custom-1_4em">
                                <a target="_blank" onclick="javascript:openWin_books(3);"><?php echo $this->lang->line('book_title_3') ?></a>
                            </h3>
                            <!-- <ul class="info-box">
                                    <li>18 July, 2019</li>
                                    <li>4 Comments</li>
                                </ul> -->
                            <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                            <div class="link-btn wow zoomIn cursor" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <a target="_blank" onclick="javascript:openWin_books(3);" style="font-size:0.8em"><?php echo $this->lang->line('main_btn2_3') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 동화책 끝 -->

<!-- 회원/뉴스레터 가입 시작-->
<!-- <section class="cta-section centred">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
            <div class="icon icon-2 rotate-me"></div>
        </div>
        <div class="parallax-scene parallax-scene-1 parallax-icon">
            <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
        </div>
        <div class="container">
            <div class="content-box">
                <h3>회원/뉴스레터가입</h3>
                <h1>모심의 최신 소식을<br />발 빠르게 알 수 있어요</h1>
                <div class="text">Cupidatat non proident sunt culpa qui officia<br />deserunt mollit anim idest laborum </div>
                <div class="btn-box"><a href="#" class="theme-btn">구독하기</a></div>
            </div>
        </div>
    </section> -->
<!-- 회원/뉴스레터 가입 끝 -->

<!-- 생애동요 시작 -->
<section class="our-teachers sec-pad centred">
    <div class="anim-icon">
        <div class="icon icon-custom-1 float-bob-x"></div>
        <div class="icon icon-custom-2 float-bob-x"></div>
        <div class="icon icon-custom-3 float-bob-x"></div>
        <div class="icon icon-custom-4 float-bob-x"></div>
        <div class="icon icon-custom-5 float-bob-y"></div>
    </div>
    <div class="container">
        <div class="sec-title soundbook_title">
            <h5><?php echo $this->lang->line('main_title_4') ?></h5>
            <h3><?php echo $this->lang->line('main_subtitle_4') ?></h3>
        </div>
        <div class="sec-title soundbook_title_mobile">
            <h5 class="line-three"><?php echo $this->lang->line('main_title_mobile_4') ?></h5>
            <h3><?php echo $this->lang->line('main_subtitle_mobile_4') ?></h3>
        </div>
        <div class="row" style="padding-bottom:15px">
            <div class="col-lg-12 col-md-12 col-sm-12  block-column">
                <div class="range-slider clearfix pull-right wow fadeInUp">
                    <a href="http://moshim.co.kr/pages/soundbooks<?php echo $_GET['lang'] == 'jp' ? '/?lang=jp' : '' ?>" target="_blank" class="filter-btn cursor" style="background-color:#2B3C6B; font-size:18px; color:white"><?php echo $this->lang->line('main_btn1_3') ?></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                <div class="teachers-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-holder cursor">
                            <figure class="image-box"><a onclick="openWin_soundbooks('01')" target="_blank">
                                    <img src="http://moshim.co.kr/assets/moshim/images/soundbook/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>07.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <?php if ($_GET['lang'] == 'jp') { ?>
                                <h3 style="font-size:1em"><a onclick="openWin_soundbooks('01')" target="_blank"><?php echo $this->lang->line('cd_song_1') ?></a></h3>
                            <?php } else { ?>
                                <h3><a onclick="openWin_soundbooks('01')" target="_blank"><?php echo $this->lang->line('cd_song_1') ?></a></h3>
                            <?php } ?>
                            <!-- <span class="designation">Teacher</span> -->
                            <div class="range-slider clearfix">
                                <a onclick="openWin_soundbooks('01')" target="_blank" class="filter-btn cursor" style="background-color:#bf9000ff; font-size:18px; color:white"><?php echo $this->lang->line('main_btn1_4') ?></a>
                            </div>
                            <!-- <div class="btn-box"><a href="" class="theme-btn">더보기</a></div> -->
                            <ul class="social-list">
                                <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                <div class="teachers-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-holder cursor">
                            <figure class="image-box">
                                <a onclick="openWin_soundbooks('02')" target="_blank">
                                    <img src="http://moshim.co.kr/assets/moshim/images/soundbook/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>09.jpg" alt=""></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <?php if ($_GET['lang'] == 'jp') { ?>
                                <h3 style="font-size:1em"><a onclick="openWin_soundbooks('02')" target="_blank"><?php echo $this->lang->line('main_cd_song_2') ?></a></h3>
                            <?php } else { ?>
                                <h3><a onclick="openWin_soundbooks('02')" target="_blank"><?php echo $this->lang->line('cd_song_2') ?></a></h3>
                            <?php } ?>
                            <div class="range-slider clearfix">
                                <a onclick="openWin_soundbooks('02')" target="_blank" class="filter-btn cursor" style="background-color:#0b6494ff; font-size:18px; color:white"><?php echo $this->lang->line('main_btn1_4') ?></a>
                            </div>
                            <!-- <div class="btn-box"><a href="http://moshim.co.kr/pages/soundbooks" class="theme-btn">더보기</a></div> -->
                            <!-- <span class="designation">Teacher</span> -->
                            <ul class="social-list">
                                <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                <div class="teachers-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-holder cursor">
                            <figure class="image-box"><a onclick="openWin_soundbooks('03')" target="_blank"><img src="http://moshim.co.kr/assets/moshim/images/soundbook/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>11.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <?php if ($_GET['lang'] == 'jp') { ?>
                                <h3 style="font-size:1em"><a onclick="openWin_soundbooks('03')" target="_blank"><?php echo $this->lang->line('main_cd_song_3') ?></a></h3>
                            <?php } else { ?>
                                <h3><a onclick="openWin_soundbooks('03')" target="_blank"><?php echo $this->lang->line('cd_song_3') ?></a></h3>
                            <?php } ?>
                            <div class="range-slider clearfix">
                                <a onclick="openWin_soundbooks('03')" target="_blank" class="filter-btn cursor" style="background-color:#a61c00ff; font-size:18px; color:white"><?php echo $this->lang->line('main_btn1_4') ?></a>
                            </div>
                            <!-- <div class="btn-box"><a href="http://moshim.co.kr/pages/soundbooks" class="theme-btn">더보기</a></div> -->
                            <!-- <span class="designation">Teacher</span> -->
                            <ul class="social-list">
                                <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-6 col-md-12 ">
                    <div class="" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="range-slider clearfix">
                            <a href="/pages/cd" target="_blank" class="filter-btn" style="background-color:#0b6494ff; font-size:18px; color:white">더보기</a>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</section>
<!-- 생애동요 끝 -->

<!-- 참어머님 생애동요 CD 시작 -->
<section class="service-section sec-pad" style="background-image: url(http://moshim.co.kr/assets/moshim/images/main_cd_cover.jpg); background-attachment: inherit !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                <div class="inner-content" style="margin-right:0px;">
                    <div class="sec-title text-center">
                        <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam.</div> -->
                        <h5 class="line-three" style="font-size:1.625rem"><?php echo $this->lang->line('main_title_5') ?></h5>
                        <h3 style="color:white">
                            <?php echo $this->lang->line('main_subtitle_5') ?>
                        </h3>
                    </div>
                    <!-- <div class="col-lg-2 col-md-6 col-sm-12"> -->
                    <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <!-- <div class="btn-box text-center"><a href="http://moshim.co.kr/pages/cd" class="theme-btn">더보기</a></div> -->
                        <div class="range-slider clearfix text-center wow fadeInUp">
                            <a href="http://moshim.co.kr/pages/cd<?php echo $_GET['lang'] == 'jp' ? '/?lang=jp' : '' ?>" target="_blank" class="filter-btn cursor" style="background-color:#FF7162; font-size:18px; color:white"><?php echo $this->lang->line('main_btn1_3') ?></a>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam.</div> -->
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                <div class="carousel-content">
                    <div class="services-carousel owl-carousel owl-theme">
                        <div class="service-block-one-custom">
                            <div class="inner-box">
                                <figure class="image-box cursor"><a href="http://moshim.co.kr/pages/cd<?php echo $_GET['lang'] == 'jp' ? '/?lang=jp' : '' ?>">
                                        <img src="http://moshim.co.kr/assets/moshim/images/cd/<?php echo $_GET['lang'] == 'jp' ? 'kojp/' : '/' ?>13.jpg" alt=""></a></figure>
                                <!-- <div class="icon-box"><i class="flaticon-bus-1"></i></div> -->
                                <h3 class="cd-title-margin">
                                    <a href="http://moshim.co.kr/pages/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>cd">
                                        <?php if ($_GET['lang'] == 'jp') {
                                            echo $this->lang->line('cd_song_4'); ?>
                                            <br />
                                            <br />
                                        <?php } else {
                                            echo $this->lang->line('cd_song_4');
                                        } ?>
                                    </a>
                                </h3>
                                <div class="range-slider clearfix" onclick="toggleAudio('cd_track_04');">
                                    <audio id="cd_track_04" class="cd_track_04">
                                        <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-04.mp3" type="audio/mpeg">
                                    </audio>
                                    <a class="filter-btn play-button cursor" style="background-color:#FF7162; font-size:18px; color:white"><?php echo $this->lang->line('main_btn1_5') ?></a>
                                </div>
                                <!-- <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div> -->
                            </div>
                        </div>
                        <div class="service-block-one-custom">
                            <div class="inner-box">
                                <figure class="image-box cursor"><a href="http://moshim.co.kr/pages/cd<?php echo $_GET['lang'] == 'jp' ? '/?lang=jp' : '' ?>">
                                        <img src="http://moshim.co.kr/assets/moshim/images/cd/<?php echo $_GET['lang'] == 'jp' ? 'kojp/' : '/' ?>15.jpg" alt=""></a></figure>
                                <!-- <div class="icon-box"><i class="flaticon-running"></i></div> -->
                                <h3 class="cd-title-margin"><a href="http://moshim.co.kr/pages/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>cd">
                                        <?php if ($_GET['lang'] == 'jp') {
                                            echo $this->lang->line('cd_song_5'); ?>
                                            <br />
                                            <br />
                                        <?php } else {
                                            echo $this->lang->line('cd_song_5');
                                        } ?>
                                    </a></h3>
                                <div class="range-slider clearfix" onclick="toggleAudio('cd_track_05');">
                                    <audio id="cd_track_05" class="cd_track_05">
                                        <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-05.mp3" type="audio/mpeg">
                                    </audio>
                                    <a class="filter-btn play-button cursor" style="background-color:#FF7162 ; font-size:18px; color:white"><?php echo $this->lang->line('main_btn1_5') ?></a>
                                </div>
                                <!-- <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div> -->
                            </div>
                        </div>
                        <div class="service-block-one-custom">
                            <div class="inner-box">
                                <figure class="image-box cursor"><a href="http://moshim.co.kr/pages/cd<?php echo $_GET['lang'] == 'jp' ? '/?lang=jp' : '' ?>">
                                        <img src="http://moshim.co.kr/assets/moshim/images/cd/<?php echo $_GET['lang'] == 'jp' ? 'kojp/' : '/' ?>17.jpg" alt=""></a></figure>
                                <!-- <div class="icon-box"><i class="flaticon-drum"></i></div> -->
                                <h3 class="cd-title-margin"><a href="http://moshim.co.kr/pages/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>cd"><?php echo $this->lang->line('cd_song_6') ?></a></h3>
                                <div class="range-slider clearfix" onclick="toggleAudio('cd_track_06');">
                                    <audio id="cd_track_06" class="cd_track_06">
                                        <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-06.mp3" type="audio/mpeg">
                                    </audio>
                                    <a class="filter-btn play-button cursor" style="background-color:#FF7162 ; font-size:18px; color:white"><?php echo $this->lang->line('main_btn1_5') ?></a>
                                </div>
                                <!-- <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 참어머님 생애동요 CD 끝 -->

<script>
    //동화책 미리보기 창

    var lang_now = `<?php echo $_GET['lang'] ?>`;

    function openWin_books(book_num) {
        window.open(`http://moshim.co.kr/assets/moshim/pdfjs-2.6.347-dist/web/viewer.html?file=http://moshim.co.kr/assets/moshim/pdf/<?php echo $_GET['lang'] == 'jp' ? 'jp/[jp]' : '[kr]' ?>0${book_num}_spread.pdf`, '동화 미리보기', 'width=800, height=700, resizable=yes');
        return false
    }


    let printWin = null; // 인쇄용 팝업

    function openWin_soundbooks(num) {
        if (!(!this.printWin || this.printWin.closed)) {
            this.printWin.close();
        }

        if (lang_now == 'jp') {
            //console.log("success")
            this.printWin = window.open(`http://moshim.co.kr/pages/soundbookpage/${num}?lang=jp`, '사운드북 미리보기', 'width=1270, height=780')
        } else {
            this.printWin = window.open(`http://moshim.co.kr/pages/soundbookpage/${num}`, '사운드북 미리보기', 'width=1270, height=780');
        }
    }

    let isPlaying = [];
    var playName = '';
    let word_listen = `<?php echo $this->lang->line('main_btn1_5') ?>`
    let word_pause = `<?php echo $this->lang->line('main_btn2_5') ?>`

    const toggleAudio = (event) => {

        const audio = document.getElementById(event);
        var textChanged = document.getElementsByClassName(event)

        //console.log(audio)
        //console.log(word_listen)
        // if (playName == event){
        if (isPlaying[event]) {
            audio.pause()
            isPlaying[event] = false
            //console.log('isPlayingpause', isPlaying)
            for (var j = 0, len = textChanged.length; j < len; j++) {
                textChanged[j].parentNode.querySelector('.play-button').innerText = word_listen
            }
        } else {
            audio.play()
            isPlaying[event] = true
            //console.log('isPlayingplay', isPlaying)
            for (var j = 0, len = textChanged.length; j < len; j++) {
                textChanged[j].parentNode.querySelector('.play-button').innerText = word_pause
            }
        }
        // }
        playName = event;
        return false
    }

    document.addEventListener('play', function(evn) {
        let audios = document.getElementsByTagName('audio');
        let targetText = evn.target.className;
        let changeSoon = document.getElementsByClassName(`${targetText}`);
        //console.log('changeSoon : ', changeSoon)
        //console.log(targetText)
        for (var i = 0, len = audios.length; i < len; i++) {
            if (audios[i] != evn.target) {
                audios[i].pause();
                audios[i].parentNode.querySelector('.play-button').innerText = word_listen;
            }
        }
        for (var k = 0, len = changeSoon.length; k < len; k++) {
            changeSoon[k].parentNode.querySelector('.play-button').innerText = word_pause
        }
    }, true);

    document.addEventListener('scroll', function() {
        let currentScrollValue = document.documentElement.scrollTop;
        let hyojeongVideo = document.getElementById('hyojeongVideo');
        let hyojeongVideoMobile = document.getElementById('hyojeongVideoMobile');
        let isMobile = device_check();
        //console.log(hyojeongVideo)
        //console.log(isMobile)

        if (isMobile == 'M') {
            if (currentScrollValue > 1300) {
                hyojeongVideoMobile.play();
            } else {
                hyojeongVideoMobile.pause();
            }
        } else {
            if (currentScrollValue > 1100) {
                hyojeongVideo.play();
            } else {
                hyojeongVideo.pause();
            }
        }
    });

    function device_check() {
        // 디바이스 종류 설정
        let pc_device = "win16|win32|win64|mac|macintel";

        // 접속한 디바이스 환경
        let this_device = navigator.platform;

        if (this_device) {
            if (pc_device.indexOf(this_device.toLowerCase()) < 0) {
                return 'M'
            } else {
                return 'P'
            }
        }
    }
</script>