<!DOCTYPE html>
<html lang="ko">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>맑은물</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    
    <!-- <link rel="shortcut icon" type="image/png" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/android-icon-144x144.png" /> -->
    <link rel="icon" type="image/x-icon" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/favicon.ico">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/favicon.ico" /> -->
    <!-- <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/favicon.ico" /> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/css/animate.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/fontawesome/css/all.min.css" />
    <!-- elegent icon CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/themefy_icon/themify-icons.css" />
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/owl_carousel/css/owl.carousel.css" />
    <!-- magnify popup CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/magnify_popup/magnific-popup.css" />

    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/audio_player/css/audioplayer.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/css/style.css" />

    <script type="text/javascript">
        // 자바스크립트에서 사용하는 전역변수 선언
        var cb_url = "<?php echo trim(site_url(), '/'); ?>";
        var cb_cookie_domain = "<?php echo config_item('cookie_domain'); ?>";
        var cb_charset = "<?php echo config_item('charset'); ?>";
        var cb_time_ymd = "<?php echo cdate('Y-m-d'); ?>";
        var cb_time_ymdhis = "<?php echo cdate('Y-m-d H:i:s'); ?>";
        var layout_skin_path = "<?php echo element('layout_skin_path', $layout); ?>";
        var view_skin_path = "<?php echo element('view_skin_path', $layout); ?>";
        var is_member = "<?php echo $this->member->is_member() ? '1' : ''; ?>";
        var is_admin = "<?php echo $this->member->is_admin(); ?>";
        var cb_admin_url = <?php echo $this->member->is_admin() === 'super' ? 'cb_url + "/' . config_item('uri_segment_admin') . '"' : '""'; ?>;
        var cb_board = "<?php echo isset($view) ? element('board_key', $view) : ''; ?>";
        var cb_board_url = <?php echo (isset($view) && element('board_key', $view)) ? 'cb_url + "/' . config_item('uri_segment_board') . '/' . element('board_key', $view) . '"' : '""'; ?>;
        var cb_device_type = "<?php echo $this->cbconfig->get_device_type() === 'mobile' ? 'mobile' : 'desktop' ?>";
        var cb_csrf_hash = "<?php echo $this->security->get_csrf_hash(); ?>";
        var cookie_prefix = "<?php echo config_item('cookie_prefix'); ?>";
    </script>
</head>
<style>
    @font-face { font-family: 'Cafe24Ssurround'; src: url(/assets/fonts/Cafe24Ssurround.ttf) format('truetype'); }
    .Cafe24Ssurround{ font-family: Cafe24Ssurround; }
    @media (max-width: 767.98px){
    .animation-diaplay-none {
        display: none;
    }
    .word-break{
        word-break: keep-all;
    }
}
</style>
<body>
    <!-- Preloader  -->
    <div class='preloder'>
        <div class='loader'>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--text'></div>
        </div>
    </div>
    <!-- End Preloader  -->

    <!-- hearder part  -->
    <header class="header_part">
        <!-- <div class="sub_header section_bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 col-md-8">
                        <div class="header_contact_info">
                            <a href="mailto:shahadat.dev@gmail.com" target="_blank"><i
                                    class="fas fa-envelope"></i>kidzo@gmail.com</a>
                            <a href="tel:+4641468425"><i class="fas fa-phone"></i>+978 254 658 784</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-4">
                        <div class="header_social_icon">
                            <p>Follow Us:</p>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/">
                                <!-- <a class="navbar-brand" href="/"> -->
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/logo_1.png" srcset="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/logo_1.png" alt="맑은물" style="height:55px">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url(); ?>#about_section">소개</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="/pages/youtube">YOUTUBE</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pages/music">MUSIC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pages/workbooks">학습지</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pages/goods">굿즈</a>
                                    </li>
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle active" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="index.html">Home 1</a>
                                            <a class="dropdown-item" href="index_2.html">Home 2</a>
                                            <a class="dropdown-item" href="index_3.html">Home 3</a>
                                            <a class="dropdown-item" href="index_4.html">Home 4</a>
                                        </div>
                                    </li> -->
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            pages
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="event.html">event</a>
                                            <a class="dropdown-item" href="event_details.html">event details</a>
                                            <a class="dropdown-item" href="teacher_list.html">teacher</a>
                                            <a class="dropdown-item" href="teacher_details.html">teacher details</a>
                                            <a class="dropdown-item" href="program_list.html">program</a>
                                            <a class="dropdown-item" href="program_details.html">program details</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            blog
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="blog.html">blog</a>
                                            <a class="dropdown-item" href="blog_single.html">blog single</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li> -->
                                </ul>
                                <!-- SNS 로고  -->
                                <!-- <p>sns 로고</p> -->
                                <!-- <a href="contact.html" class="cu_btn btn_1">Get Started</a> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="header display-when-scrolled menu_fixed" style="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/">
                                <!-- <a class="navbar-brand" href="/"> -->
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/logo_1.png" srcset="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/logo_1.png" alt="맑은물" style="height:55px">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url(); ?>#about_section">소개</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="/pages/youtube">YOUTUBE</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pages/music">MUSIC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pages/workbooks">학습지</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pages/goods">굿즈</a>
                                    </li>
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle active" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="index.html">Home 1</a>
                                            <a class="dropdown-item" href="index_2.html">Home 2</a>
                                            <a class="dropdown-item" href="index_3.html">Home 3</a>
                                            <a class="dropdown-item" href="index_4.html">Home 4</a>
                                        </div>
                                    </li> -->
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            pages
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="event.html">event</a>
                                            <a class="dropdown-item" href="event_details.html">event details</a>
                                            <a class="dropdown-item" href="teacher_list.html">teacher</a>
                                            <a class="dropdown-item" href="teacher_details.html">teacher details</a>
                                            <a class="dropdown-item" href="program_list.html">program</a>
                                            <a class="dropdown-item" href="program_details.html">program details</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            blog
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="blog.html">blog</a>
                                            <a class="dropdown-item" href="blog_single.html">blog single</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li> -->
                                </ul>
                                <!-- SNS 로고  -->
                                <!-- <p>sns 로고</p> -->
                                <!-- <a href="contact.html" class="cu_btn btn_1">Get Started</a> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header part end -->

    <!-- 본문 시작 -->
    <?php if (isset($yield)) echo $yield; ?>
    <!-- 본문 끝 -->


    <!-- footer part here -->
    <footer class="footer_section" style="padding:33px 0px">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center pb-2">
                        <img src="/assets/malgeunmul/img/logo-footer.png" alt="" style="height:48px">           
                    </div>
                    <div class="text-center mt-0 pt-0" >
                        <p style="color:#fff">Copyright &copy; HJSmartEdu 2021. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jquery slim -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/js/jquery-3.5.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/js/bootstrap.min.js"></script>
    <!-- nice select -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/niceselect/js/jquery.nice-select.min.js"></script>
    <!-- owl carousel js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/owl_carousel/js/owl.carousel.min.js"></script>
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/audio_player/js/audioplayer.js"></script>
    <!-- parallax js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/parallax/jquery.parallax-scroll.js"></script>
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/parallax/parallax.js"></script>
    <!-- wow js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/wow/wow.min.js"></script>
    <!-- isotop js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/isotop/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/isotop/isotope.pkgd.js"></script>
    <!-- magnify popup js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/vendors/magnify_popup/jquery.magnific-popup.js"></script>
    <!-- custom js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/js/custom.js"></script>
</body>

</html>