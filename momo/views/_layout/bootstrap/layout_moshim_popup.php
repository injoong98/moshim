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

	<!-- moshim css -->
	<link href="http://moshim.co.kr/assets/moshim/css/style-custom.css" rel="stylesheet">
	<!-- Stylesheets -->
	<link href="http://moshim.co.kr/assets/moshim/css/style.css" rel="stylesheet">
	<link href="http://moshim.co.kr/assets/moshim/css/responsive.css" rel="stylesheet">
	<link rel="icon" href="http://moshim.co.kr/assets/moshim/images/favicon.ico" type="image/x-icon">
	<link href="http://moshim.co.kr/assets/moshim/css/style.css" rel="stylesheet">
	<link href="http://moshim.co.kr/assets/moshim/css/responsive.css" rel="stylesheet">
	<link rel="icon" href="http://moshim.co.kr/assets/moshim/images/favicon.ico" type="image/x-icon">
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