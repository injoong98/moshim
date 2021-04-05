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
	<link href="<?php echo moshim_url('momo') ?>/assets/moshim/css/style.css" rel="stylesheet">
	<link href="<?php echo moshim_url('momo') ?>/assets/moshim/css/responsive.css" rel="stylesheet">
	<link href="<?php echo moshim_url('momo') ?>/assets/moshim/css/style-custom.css" rel="stylesheet">
	<link rel="icon" href="<?php echo moshim_url('momo') ?>/assets/moshim/images/favicon.ico" type="image/x-icon">

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

<body class="boxed_wrapper">


	<!-- .preloader -->
	<div class="preloader"></div>
	<!-- /.preloader -->


	<!-- search-box-layout -->
	<div class="wraper_flyout_search">
		<div class="table">
			<div class="table-cell">
				<div class="flyout-search-layer"></div>
				<div class="flyout-search-layer"></div>
				<div class="flyout-search-layer"></div>
				<div class="flyout-search-close">
					<span class="flyout-search-close-line"></span>
					<span class="flyout-search-close-line"></span>
				</div>
				<div class="flyout_search">
					<div class="flyout-search-title">
						<h4>검색</h4>
					</div>
					<div class="flyout-search-bar">
						<form role="search" method="get" action="#">
							<div class="form-row">
								<input type="search" placeholder="Type to search..." value="" name="s" required="">
								<button type="submit"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- search-box-layout end -->


	<!-- Main Header -->
	<header class="main-header">

		<!-- <div class="header-top">
			<div class="container">
				<div class="inner-container clearfix">
					<div class="header-info pull-left">
						<ul class="info-list">
							<li>
								<i class="fas fa-phone"></i>
								<a href="tel:12345615523">123 4561 5523</a>
							</li>
							<li>
								<i class="fas fa-envelope"></i>
								<a href="mailto:info@example.com">info@example.com</a>
							</li>
						</ul>
					</div>
					<div class="outer-content pull-right">
						<div class="login-box">
							<i class="fas fa-user"></i>
							<a href="#">Log in or Register</a>
						</div>
						<ul class="clearfix">
							<li class="header-flyout-searchbar">
								<i class="fa fa-search"></i>
							</li>
							<li><a href="shop.html"><i class="fas fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
		<div class="header-bottom">
			<div class="container">
				<div class="clearfix main-custom-img ">
					<figure style="position: relative; display: inline-block;"><a href="/"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/logo_1.jpg" alt="" style="height:125px"></a></figure>
					<div class="nav-outer pull-right clearfix">
						<div class="menu-area">
							<nav class="main-menu navbar-expand-lg">
								<div class="navbar-header">
									<!-- Toggle Button -->
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="navbar-collapse collapse clearfix">
									<ul class="navigation clearfix">
										<li <?php echo (element('menu_name', $layout) === 'main') ? 'class="current"' : ''; ?>><a href="http://moshim.co.kr/#intro">
												<?php echo (element('menu_name', $layout) === 'main') ? '' : '메인/'; ?><?php echo $this->lang->line('nav_1') ?></a>
											<!-- <ul>
												<li><a href="index.html">Home Page 01</a></li>
												<li><a href="index-2.html">Home Page 02</a></li>
												<li><a href="index-3.html">Home Page 03</a></li>
												<li class="dropdown"><a href="#">Header Styles</a>
													<ul>
														<li><a href="index.html">Header Style 01</a></li>
														<li><a href="index-2.html">Header Style 02</a></li>
														<li><a href="index-3.html">Header Style 03</a></li>
													</ul>
												</li>
											</ul> -->
										</li>
										<!-- <li <?php echo (element('menu_name', $layout) === 'youtube') ? 'class="current"' : ''; ?>><a href="/pages/youtube">유튜브</a>
											<ul>
												<li><a href="about.html">About Us</a></li>
												<li><a href="faq.html">Faq Page</a></li>
												<li><a href="testimonial.html">Testimonials</a></li>
												<li><a href="error.html">Error Page</a></li>
											</ul>
										</li> -->
										<li <?php echo (element('menu_name', $layout) === 'books') ? 'class="current"' : ''; ?>><a href="<?php echo moshim_url('momo') ?>/pages/books"><?php echo $this->lang->line('nav_2') ?></a>
											<!-- <li <?php echo (element('menu_name', $layout) === 'books') ? 'class="current"' : ''; ?>><a href="/pages/books">동화책</a> -->
											<!-- <ul>
												<li><a href="class.html">Our Classes</a></li>
												<li><a href="class-details.html">Class Details</a></li>
											</ul> -->
										</li>
										<li <?php echo (element('menu_name', $layout) === 'soundbooks') ? 'class="current"' : ''; ?>><a href="<?php echo moshim_url('momo') ?>/pages/soundbooks"><?php echo $this->lang->line('nav_3') ?></a>
											<!-- <li <?php echo (element('menu_name', $layout) === 'books') ? 'class="current"' : ''; ?>><a href="/pages/books">동화책</a> -->
											<!-- <ul>
												<li><a href="class.html">Our Classes</a></li>
												<li><a href="class-details.html">Class Details</a></li>
											</ul> -->
										</li>
										<li <?php echo (element('menu_name', $layout) === 'cd') ? 'class="current"' : ''; ?>><a href="<?php echo moshim_url('momo') ?>/pages/cd">CD</a>
											<!-- <ul>
												<li><a href="gallery.html">Our Gallery</a></li>
												<li><a href="teachers.html">Our Teachers</a></li>
												<li><a href="pricing.html">Pricing Table</a></li>
												<li><a href="event.html">Our Events</a></li>
												<li><a href="event-details.html">Event Details</a></li>
												<li><a href="shop.html">Shop Page</a></li>
												<li><a href="shop-details.html">Shop Details</a></li>
												<li><a href="cart.html">Cart Page</a></li>
												<li><a href="checkout.html">Checkout Page</a></li>
											</ul> -->
										</li>
										<!-- <li <?php echo (element('menu_name', $layout) === 'shop') ? 'class="current"' : ''; ?>><a href="/pages/shop">SHOP</a>
											<ul>
												<li><a href="blog.html">Blog Page</a></li>
												<li><a href="blog-details.html">Blog Details</a></li>
											</ul>
										</li> -->
										<!-- <li><a href="/pages/login">로그인</a></li> -->
									</ul>
								</div>
							</nav>
						</div>
						<!-- <div class="outer-box">
                            <ul class="outer-content">
                                <li class="header-flyout-searchbar">
                                    <i class="fa fa-search"></i>
                                </li>
                                <li><a href="shop.html"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div> -->
					</div>
				</div>
			</div>
		</div>

		<!--Sticky Header-->
		<div class="sticky-header">
			<div class="container clearfix">
				<figure style="position: relative; display: inline-block;"><a href="/"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/logo_1.jpg" alt="" style="height:125px"></a></figure>
				<div class="menu-area">
					<nav class="main-menu navbar-expand-lg">
						<div class="navbar-header">
							<!-- Toggle Button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse clearfix">
							<ul class="navigation clearfix">
								<!-- <li class="current dropdown"><a href="/">Home</a> -->
								<!-- <ul>
										<li><a href="index.html">Home Page 01</a></li>
										<li><a href="index-2.html">Home Page 02</a></li>
										<li><a href="index-3.html">Home Page 03</a></li>
										<li class="dropdown"><a href="#">Header Styles</a>
											<ul>
												<li><a href="index.html">Header Style 01</a></li>
												<li><a href="index-2.html">Header Style 02</a></li>
												<li><a href="index-3.html">Header Style 03</a></li>
											</ul>
										</li>
									</ul> -->
								</li>
								<li class="dropdown <?php echo (element('menu_name', $layout) == 'main') ? 'current' : ''; ?>"><a href="http://moshim.co.kr/#intro"><?php echo (element('menu_name', $layout) == 'main') ? '' : '메인/'; ?><?php echo $this->lang->line('nav_1') ?></a>
									<!-- <li class="dropdown"><a href="/pages/vision">비전</a> -->
									<!-- 	<ul>
										<li><a href="about.html">About Us</a></li>
										<li><a href="faq.html">Faq Page</a></li>
										<li><a href="testimonial.html">Testimonials</a></li>
										<li><a href="error.html">Error Page</a></li>
									</ul> -->
								</li>
								<!-- <li class="dropdown"><a href="/pages/youtube">유튜브</a>
										<ul>
										<li><a href="class.html">Our Classes</a></li>
										<li><a href="class-details.html">Class Details</a></li>
									</ul>
								</li> -->
								<li class="dropdown
								<?php echo (element('menu_name', $layout) === 'books') ? 'current' : ''; ?>
								"><a href="/pages/books"><?php echo $this->lang->line('nav_2') ?></a>
									<!-- <ul>
										<li><a href="gallery.html">Our Gallery</a></li>
										<li><a href="teachers.html">Our Teachers</a></li>
										<li><a href="pricing.html">Pricing Table</a></li>
										<li><a href="event.html">Our Events</a></li>
										<li><a href="event-details.html">Event Details</a></li>
										<li><a href="shop.html">Shop Page</a></li>
										<li><a href="shop-details.html">Shop Details</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
									</ul> -->
								</li>
								<li class="
								<?php echo (element('menu_name', $layout) === 'soundbooks') ? 'current' : ''; ?>
								dropdown"><a href="/pages/soundbooks"><?php echo $this->lang->line('nav_3') ?></a>
									<!-- <ul>
										<li><a href="gallery.html">Our Gallery</a></li>
										<li><a href="teachers.html">Our Teachers</a></li>
										<li><a href="pricing.html">Pricing Table</a></li>
										<li><a href="event.html">Our Events</a></li>
										<li><a href="event-details.html">Event Details</a></li>
										<li><a href="shop.html">Shop Page</a></li>
										<li><a href="shop-details.html">Shop Details</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
									</ul> -->
								</li>
								<li class="
								<?php echo (element('menu_name', $layout) === 'cd') ? 'current' : ''; ?>
								dropdown"><a href="/pages/cd">CD</a>
									<!-- <ul>
										<li><a href="blog.html">Blog Page</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul> -->
								</li>
								<!-- <li><a href="/pages/shop">SHOP</a></li> -->
								<!-- <li><a href="/pages/login">로그인</a></li> -->
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- sticky-header end -->
	</header>
	<!-- End Main Header -->

	<!-- 본문 시작 -->
	<?php if (isset($yield)) echo $yield; ?>
	<!-- 본문 끝 -->

	<!-- main-footer -->
	<footer class="main-footer">
		<!-- <div class="footer-top">
			<div class="parallax-scene parallax-scene-4 parallax-icon">
				<span data-depth="0.40" class="parallax-layer icon icon-1"></span>
				<span data-depth="0.50" class="parallax-layer icon icon-2"></span>
				<span data-depth="0.30" class="parallax-layer icon icon-3"></span>
				<span data-depth="0.40" class="parallax-layer icon icon-4"></span>
				<span data-depth="0.50" class="parallax-layer icon icon-5"></span>
				<span data-depth="0.30" class="parallax-layer icon icon-6"></span>
				<span data-depth="0.40" class="parallax-layer icon icon-7"></span>
			</div>
			<div class="container">
				<div class="widget-section">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
							<div class="about-widget footer-widget">
								<h3 class="widget-title">About Kidko</h3>
								<div class="widget-content">
									<div class="text">
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis.</p>
										<p>iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
							<div class="link-widget footer-widget">
								<h3 class="widget-title">Useful Link</h3>
								<div class="widget-content">
									<ul>
										<li><a href="#">About us</a></li>
										<li><a href="#">Class Schedule</a></li>
										<li><a href="#">Teacher & Staff</a></li>
										<li><a href="#">Contact us</a></li>
										<li><a href="#">Our Gallery</a></li>
										<li><a href="#">Privacy policy</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
							<div class="contact-widget footer-widget">
								<h3 class="widget-title">Get in Touch</h3>
								<div class="widget-content">
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod.</div>
									<ul class="info-list">
										<li><i class="fas fa-home"></i>1201 park street, Fifth Avenue, Dhanmondy, Dhaka</li>
										<li><i class="fas fa-phone"></i><a href="tel:88657524332">[88] 657 524 332</a></li>
										<li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
							<div class="subscribe-widget footer-widget">
								<h3 class="widget-title">Subscribe Now</h3>
								<div class="widget-content">
									<div class="text">Lorem ipsum dolor sit amet, consecte- tur adipisicing elit sed do eiusmod.</div>
									<div class="subscribe-inner">
										<form action="#" method="post" class="subscribe-form">
											<div class="form-group">
												<input type="email" name="email" placeholder="Enter Your Email" required="">
												<button type="submit" class="theme-btn">Subscribe</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="footer-bottom">
			<div class="container">
				<div class="inner-container clearfix d-flex justify-content-center">
					<div class="">
						<figure>
							<a href="/" class="d-flex justify-content-center"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/logo_4.png" alt="" style="height:55px"></a>
						</figure>
						<!-- <ul class="social-style-one footer-social clearfix" style="visibility:hidden;">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul> -->

						<div class="copyright">Copyright &copy; HJSmartEdu 2021. All Rights Reserved</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<!-- main-footer end -->



	<!--Scroll to top-->
	<button class="scroll-top scroll-to-target" data-target="html">
		<i class="fa fa-arrow-up"></i>
	</button>

	<!-- jequery plugins -->
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/jquery.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/jquery.fancybox.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/jquery-ui.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/popper.min.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/bootstrap.min.js"></script>

	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/owl.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/wow.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/validation.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/appear.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/parallax.min.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/isotope.js"></script>

	<!-- map script -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/gmaps.js"></script>
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/map-helper.js"></script>

	<!-- main-js -->
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/script.js"></script>

	<!-- js custom uny  -->
	<script src="<?php echo moshim_url('momo') ?>/assets/moshim/js/custom.js"></script>

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


</body><!-- End of .page_wrapper -->

</html>