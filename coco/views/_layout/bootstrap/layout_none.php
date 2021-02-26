<!DOCTYPE html>
<html lang="ko">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>맑은물</title>
    <link rel="icon" href="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/favicon.ico">
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

<body>
    <!-- 본문 시작 -->
    <?php if (isset($yield)) echo $yield; ?>
    <!-- 본문 끝 -->

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