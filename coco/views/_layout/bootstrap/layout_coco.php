<!DOCTYPE html>
<html lang="ko">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>맑은물</title>
    <link rel="icon" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/css/animate.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/fontawesome/css/all.min.css" />
    <!-- elegent icon CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/themefy_icon/themify-icons.css" />
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/owl_carousel/css/owl.carousel.css" />
    <!-- magnify popup CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/magnify_popup/magnific-popup.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/css/style.css" />

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
                            <a class="navbar-brand" href="index.html"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/logo.png"
                                    srcset="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/ratina_logo.png 2x" alt="Kidzo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/coco/pages/aboutus">회사소개</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/coco/pages/youtube">YOUTUBE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/coco/pages/music">MUSIC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/coco/pages/books">동화책</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/coco/pages/workbooks">학습지</a>
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
    <footer class="footer_section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".3s">
                    <div class="single_footer_widget">
                        <a href="index.html" class="footer_logo"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/footer_logo.png" alt="#"></a>
                        <p>Lorem ipsum dolor sit consectetur sicing elit, sed do eitempor idunt ut labor omagn aliqua
                            sed do
                        </p>
                        <div class="social_icon">
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/icon/fb.png" alt="#"></a>
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/icon/inst.png" alt="#"></a>
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/icon/feed.png" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <div class="single_footer_widget footer_nav">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Service and Prices</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Get In Touch Wirh Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInDown" data-wow-delay=".7s">
                    <div class="single_footer_widget footer_nav">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="about_us.php">News</a></li>
                            <li><a href="blog.php">Prices</a></li>
                            <li><a href="#">Rules of Play</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInDown" data-wow-delay=".9s">
                    <div class="single_footer_widget instagram_feed">
                        <h4>Instagram Feed</h4>
                        <div class="instagram_img">
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/ins/ins_1.png" alt="#" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/ins/ins_2.png" alt="#" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/ins/ins_3.png" alt="#" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/ins/ins_4.png" alt="#" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/ins/ins_5.png" alt="#" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/ins/ins_6.png" alt="#" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInDown" data-wow-delay=".3s">
                    <div class="copyright_part text-center">
                        <p>© Copyright 2021 Design by <a href="http://droitthemes.com">Droit Themes </a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_animation_1">
            <div data-parallax='{"x": 2, "y": 50, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/footer_icon_1.png" alt="#"></div>
        </div>
        <div class="footer_animation_2">
            <div data-parallax='{"x": 10, "y": 40, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/footer_icon_2.png" alt="#"></div>
        </div>
        <div class="footer_animation_3">
            <div data-parallax='{"x": 30, "y": 70, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/img/footer_icon_3.png" alt="#"></div>
        </div>
    </footer>

    <!-- jquery slim -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/js/jquery-3.5.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/js/bootstrap.min.js"></script>
    <!-- nice select -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/niceselect/js/jquery.nice-select.min.js"></script>
    <!-- owl carousel js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/owl_carousel/js/owl.carousel.min.js"></script>
    <!-- parallax js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/parallax/jquery.parallax-scroll.js"></script>
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/parallax/parallax.js"></script>
    <!-- wow js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/wow/wow.min.js"></script>
    <!-- isotop js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/isotop/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/isotop/isotope.pkgd.js"></script>
    <!-- magnify popup js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/vendors/magnify_popup/jquery.magnific-popup.js"></script>
    <!-- custom js -->
    <script src="<?php echo trim(site_url(), '/'); ?>/coco/assets/malgeunmul/js/custom.js"></script>
</body>

</html>