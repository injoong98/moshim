<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 
	<?php if ($this->cbconfig->get_device_view_type() === 'desktop' && $this->cbconfig->get_device_type() === 'mobile') { ?>
	<meta name="viewport" content="width=1000">
	<?php } else { ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php } ?>
	-->

	<title><?php echo html_escape(element('page_title', $layout)); ?></title>
	<?php if (element('meta_description', $layout)) { ?>
		<meta name="description" content="<?php echo html_escape(element('meta_description', $layout)); ?>"><?php } ?>
	<?php if (element('meta_keywords', $layout)) { ?>
		<meta name="keywords" content="<?php echo html_escape(element('meta_keywords', $layout)); ?>"><?php } ?>
	<?php if (element('meta_author', $layout)) { ?>
		<meta name="author" content="<?php echo html_escape(element('meta_author', $layout)); ?>"><?php } ?>
	<?php if (element('favicon', $layout)) { ?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo element('favicon', $layout); ?>" /><?php } ?>
	<?php if (element('canonical', $view)) { ?>
		<link rel="canonical" href="<?php echo element('canonical', $view); ?>" /><?php } ?>


	<!-- 기존 CIBOARD  -->
	<!-- <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo element('layout_skin_url', $layout); ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/earlyaccess/nanumgothic.css" />
	<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" />
	<?php //echo $this->managelayout->display_css(); 
	?>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


	<!-- moshim css -->

	<!-- Stylesheets -->
	<link href="http://moshim.co.kr/assets/moshim/css/style.css" rel="stylesheet">
	<link href="http://moshim.co.kr/assets/moshim/css/responsive.css" rel="stylesheet">
	<link rel="icon" href="http://moshim.co.kr/assets/moshim/images/favicon.ico" type="image/x-icon">

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
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo base_url('assets/js/html5shiv.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
	<![endif]-->


	<!-- 기존 CIBOARD  -->
	<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.extension.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/sideview.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/js.cookie.js'); ?>"></script>
	<?php //echo $this->managelayout->display_js(); 
	?> -->

</head>
<!-- page wrapper -->


	<!-- 본문 시작 -->
	<?php if (isset($yield)) echo $yield; ?>
	<!-- 본문 끝 -->

	<!-- jequery plugins -->
	<script src="http://moshim.co.kr/assets/moshim/js/jquery.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/popper.min.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/bootstrap.min.js"></script>
	
	<script src="http://moshim.co.kr/assets/moshim/js/owl.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/wow.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/validation.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/jquery.fancybox.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/appear.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/parallax.min.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/isotope.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/jquery-ui.js"></script>

	<!-- map script -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/gmaps.js"></script>
	<script src="http://moshim.co.kr/assets/moshim/js/map-helper.js"></script>

	<!-- main-js -->
	<script src="http://moshim.co.kr/assets/moshim/js/script.js"></script>

	<!-- js ours  -->
	<script type="text/javascript">
		$(document).on('click', '.viewpcversion', function() {
			Cookies.set('device_view_type', 'desktop', {
				expires: 1
			});
		});
		$(document).on('click', '.viewmobileversion', function() {
			Cookies.set('device_view_type', 'mobile', {
				expires: 1
			});
		});

		$(window).on('load', function() {
			console.info('session', <?php echo json_encode($_SESSION); ?>);
			console.info('view', <?php echo json_encode($view); ?>);
			console.info('layout', <?php echo json_encode($layout); ?>);
			console.info('controller', <?php echo json_encode($this->router->fetch_class() . '/' . $this->router->fetch_method()); ?>);
		});
	</script>
	<?php echo element('popup', $layout); ?>
	<?php echo $this->cbconfig->item('footer_script'); ?>
	<!--
		Layout Directory : <?php echo element('layout_skin_path', $layout); ?>,
		Layout URL : <?php echo element('layout_skin_url', $layout); ?>,
		Skin Directory : <?php echo element('view_skin_path', $layout); ?>,
		Skin URL : <?php echo element('view_skin_url', $layout); ?>,
	-->


<!-- End of .page_wrapper -->

</html>