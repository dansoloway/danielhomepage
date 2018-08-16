<?php
define('LOCAL_PATH', '/Users/danielsoloway/Sites/danielsoloway/portfolio/');
define('WEB_PATH', '/danielsoloway/portfolio/');
define('RIP_PATH', '/danielsoloway/portfolio/templateFiles/');

// https://htmlcoder.me/preview/idea/v.1.7/html/


?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title>Daniel IDea</title>
		<meta name="description" content="IDea a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="author">
	    <meta name="robots" content="noimageindex">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="https://htmlcoder.me/preview/idea/v.1.7/html/images/favicon.ico">

		<!-- Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

		<!-- Bootstrap core CSS -->
		<link href="<?php echo RIP_PATH ?>bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="<?php echo RIP_PATH ?>font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="<?php echo RIP_PATH ?>settings.css" rel="stylesheet">
		<link href="<?php echo RIP_PATH ?>layers.css" rel="stylesheet">
		<link href="<?php echo RIP_PATH ?>navigation.css" rel="stylesheet">
		<link href="<?php echo RIP_PATH ?>magnific-popup.css" rel="stylesheet">
		<link href="<?php echo RIP_PATH ?>animations.css" rel="stylesheet">
		<link href="<?php echo RIP_PATH ?>owl.carousel.css" rel="stylesheet">
		<link href="<?php echo RIP_PATH ?>owl.theme.default.min.css" rel="stylesheet">

		<!-- IDea core CSS file -->
		<link href="<?php echo RIP_PATH ?>style.css" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
		<link href="<?php echo RIP_PATH ?>blue.css" data-style="styles-no-cookie" rel="stylesheet">
		<link href="<?php echo RIP_PATH ?>style-switcher.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="<?php echo RIP_PATH ?>custom.css" rel="stylesheet">


	</head>

	<!-- body classes:
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
	-->
	<body class="front wide" style="">
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="myModalLabel">IDea Clean and Unique Design</h4>
											</div>
											<div class="modal-body">
												<p>Consectetur adipisicing elit. Nemo architecto debitis dolorum ullam in ut sint, odit maiores eaque explicabo, repellendus minima soluta sunt! Nisi minima blanditiis voluptate, ut atque.</p>
												<ul class="list-icons">
													<li><i class="fa fa-check"></i> Nisi minima blanditiis voluptate</li>
													<li><i class="fa fa-check"></i> Officiis nisi nam doloribus explicabo</li>
													<li><i class="fa fa-check"></i> Debitis delectus corporis aspernatur</li>
													<li><i class="fa fa-check"></i> Dolore temporibus odio distinctio</li>
													<li><i class="fa fa-check"></i> Reprehenderit optio unde accusantium quia</li>
												</ul>
												<p>Culpa expedita! Quisquam, itaque officiis nisi nam doloribus explicabo possimus, dolorum alias provident maxime temporibus, enim voluptatibus! Molestias, accusantium cum impedit sint velit exercitationem deserunt, corporis magni provident earum, ullam iusto voluptatem iste animi inventore ab cupiditate quod laborum quasi libero doloremque obcaecati eius. Ut, reprehenderit optio unde accusantium quia qui! Debitis delectus corporis aspernatur nemo aut, odio harum ea repellendus quidem, saepe, incidunt? Assumenda deserunt unde minima aspernatur ducimus velit molestiae, minus eius inventore, dolore temporibus odio distinctio optio.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="fa fa-angle-up"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

			<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
			<!-- ================ -->

			<!-- header-top end -->

			<!-- header start classes:
				fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
				 dark: dark header version e.g. <header class="header dark clearfix">
			================ -->
			<header class="header fixed clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">

							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- logo -->
								<div class="logo">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/index.html"><img id="logo" src="<?php echo RIP_PATH ?>logo_red.png" alt="IDea"></a>
								</div>

								<!-- name-and-slogan -->
								<div class="site-slogan">
									Powerful Bootstrap Template
								</div>

							</div>
							<!-- header-left end -->

						</div>
						<div class="col-md-9">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- ================ -->
								<div class="main-navigation animated">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<ul class="nav navbar-nav navbar-right">
													<li class="dropdown active">
														<a href="https://htmlcoder.me/preview/idea/v.1.7/html/index.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
														<ul class="dropdown-menu">
															<li class="active"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index.html">Home - Default</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-2.html">Home - 2</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-3.html">Home - 3</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-4.html">Home - 4</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-5.html">Home - 5</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-6.html">Home - 6 <span class="badge">v1.2</span></a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-7.html">Home - 7 <span class="badge">v1.2</span></a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-landing.html">Home - Landing <span class="badge">v1.3</span></a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-text-rotator.html">Home - Text Rotator <span class="badge">v1.3</span></a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-video-background.html">Home - Video Bg <span class="badge">v1.3</span></a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-shop.html">Home - Shop <span class="badge">v1.2</span></a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-one-page.html">One Page Version</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-boxed-slideshow.html">Home - Boxed Slider</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-no-slideshow.html">Home - Without Slider</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
														<ul class="dropdown-menu">
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Email Templates <span class="default-bg badge">v1.1</span></a>
																<ul class="dropdown-menu">
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_red.html">Email Template Red</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_blue.html">Email Template Blue</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_brown.html">Email Template Brown</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_dark_cyan.html">Email Template Dark Cyan</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_dark_gray.html">Email Template Dark Gray</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_dark_red.html">Email Template Dark Red</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_green.html">Email Template Green</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_light_blue.html">Email Template Light Blue</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_light_green.html">Email Template Light Green</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_orange.html">Email Template Orange</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_pink.html">Email Template Pink</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_purple.html">Email Template Purple</a></li>
																	<li><a target="_blank" href="https://htmlcoder.me/preview/idea/v.1.7/email_templates/email_template_yellow.html">Email Template Yellow</a></li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Headers <span class="default-bg badge">v1.2</span></a>
																<ul class="dropdown-menu">
																	<li class="dropdown">
																		<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Layouts <span class="default-bg badge">v1.1</span></a>
																		<ul class="dropdown-menu">
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-1.html">Light - Layout 1 (Default)</a></li>
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-2.html">Light - Layout 2</a></li>
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-3.html">Light - Layout 3</a></li>
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-1-dark.html">Dark - Layout 1 <span class="default-bg badge">v1.1</span></a></li>
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-2-dark.html">Dark - Layout 2 <span class="default-bg badge">v1.1</span></a></li>
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-3-dark.html">Dark - Layout 3 <span class="default-bg badge">v1.1</span></a></li>
																		</ul>
																	</li>
																	<li class="dropdown">
																		<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Transparent <span class="default-bg badge">v1.2</span></a>
																		<ul class="dropdown-menu">
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-transparent.html">Light Version</a></li>
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-transparent-dark.html">Dark Version</a></li>
																		</ul>
																	</li>
																	<li class="dropdown">
																		<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Left Side Header  <span class="default-bg badge">v1.2</span></a>
																		<ul class="dropdown-menu">
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-offcanvas-left.html">Light Version </a></li>
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-offcanvas-left-dark.html">Dark Version </a></li>
																		</ul>
																	</li>
																	<li class="dropdown">
																		<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Right Side Header <span class="default-bg badge">v1.2</span></a>
																		<ul class="dropdown-menu">
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-offcanvas-right.html">Light Version </a></li>
																			<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-header-offcanvas-right-dark.html">Dark Version </a></li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Footers</a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-footer-1.html#footer">Footer 1 (Default)</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-footer-2.html#footer">Footer 2</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-footer-3.html#footer">Footer 3</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-footer-4.html#footer">Footer 4</a></li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Sliders <span class="default-bg badge">v1.5</span></a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-sliders-fullwidth.html">Full Width</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-sliders-fullscreen-light.html">Full Screen - Light</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-sliders-fullscreen-dark.html">Full Screen - Dark</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-sliders-video-background.html">Video Background</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-sliders-boxedwidth.html">Boxed Width</a></li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Login/Sign Up <span class="default-bg badge">v1.2</span></a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-login.html">Login</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-signup.html">Sign Up</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-login-2.html">Login Fullscreen</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-signup-2.html">Sign Up Fullscreen</a></li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Pricing tables</a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-pricing-tables-1.html">Pricing Tables 1</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-pricing-tables-2.html">Pricing Tables 2</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-pricing-tables-3.html">Pricing Tables 3</a></li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Icons</a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-icons-fontawesome.html">Font Awesome Icons</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-icons-glyphicons.html">Glyphicons Icons</a></li>
																</ul>
															</li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-typography.html">Typography</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-backgrounds.html">Backgrounds</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-background-patterns.html">Patterns <span class="default-bg badge">v1.2</span></a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-testimonials.html">Testimonials</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/features-grid.html">Grid System</a></li>
														</ul>
													</li>
													<!-- mega-menu start -->
													<li class="dropdown mega-menu">
														<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
														<ul class="dropdown-menu">
															<li>
																<div class="row">
																	<div class="col-lg-4 col-md-3 hidden-sm">
																		<h4>Premium HTML5 Template</h4>
																		<p>IDea is perfectly suitable for corporate, business and company webpages.</p>
																		<img src="<?php echo RIP_PATH ?>section-image-3.png" alt="IDea">
																	</div>
																	<div class="col-lg-8 col-md-9">
																		<h4>Pages</h4>
																		<div class="row">
																			<div class="col-sm-4">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-about.html"><i class="fa fa-angle-right"></i>About Us</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-about-2.html"><i class="fa fa-angle-right"></i>About Us 2</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-about-3.html"><i class="fa fa-angle-right"></i>About Us 3</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-about-me.html"><i class="fa fa-angle-right"></i>About Me</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-team.html"><i class="fa fa-angle-right"></i>Our Team - Options</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-services.html"><i class="fa fa-angle-right"></i>Services</a></li>
																				</ul>
																			</div>
																			<div class="col-sm-4">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-contact-2.html"><i class="fa fa-angle-right"></i>Contact 2</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-coming-soon.html"><i class="fa fa-angle-right"></i>Coming Soon Page</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-404.html"><i class="fa fa-angle-right"></i>404 error</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-faq.html"><i class="fa fa-angle-right"></i>FAQ page</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-affix-sidebar.html"><i class="fa fa-angle-right"></i>Sidebar - Affix Menu</a></li>
																				</ul>
																			</div>
																			<div class="col-sm-4">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-left-sidebar.html"><i class="fa fa-angle-right"></i>Left Sidebar</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-right-sidebar.html"><i class="fa fa-angle-right"></i>Right Sidebar</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-two-sidebars.html"><i class="fa fa-angle-right"></i>Two Sidebars</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-no-sidebar.html"><i class="fa fa-angle-right"></i>No Sidebars</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-sitemap.html"><i class="fa fa-angle-right"></i>Sitemap</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-invoice.html"><i class="fa fa-angle-right"></i>Invoice <span class="badge">v1.1</span></a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<!-- mega-menu end -->
													<!-- mega-menu start -->
													<li class="dropdown mega-menu">
														<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#" class="dropdown-toggle" data-toggle="dropdown">Components</a>
														<ul class="dropdown-menu">
															<li>
																<div class="row">
																	<div class="col-sm-4 col-md-6">
																		<h4>IDea - Powerful Bootstrap Template</h4>
																		<p>IDea is a Super Flexible Bootstrap Template with many Features and options.</p>
																		<img src="<?php echo RIP_PATH ?>section-image-1.png" alt="image-1">
																	</div>
																	<div class="col-sm-8 col-md-6">
																		<h4>Components</h4>
																		<div class="row">
																			<div class="col-sm-6">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-tabs-and-pills.html"><i class="fa fa-angle-right"></i>Tabs &amp; Pills</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-accordions.html"><i class="fa fa-angle-right"></i>Accordions</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-social-icons.html"><i class="fa fa-angle-right"></i>Social Icons</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-buttons.html"><i class="fa fa-angle-right"></i>Buttons</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-forms.html"><i class="fa fa-angle-right"></i>Forms</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-progress-bars.html"><i class="fa fa-angle-right"></i>Progress bars</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-alerts-and-callouts.html"><i class="fa fa-angle-right"></i>Alerts &amp; Callouts</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-content-sliders.html"><i class="fa fa-angle-right"></i>Content Sliders</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-text-rotators.html"><i class="fa fa-angle-right"></i>Text Rotators  <span class="badge">v1.3</span></a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-lightbox.html"><i class="fa fa-angle-right"></i>Lightbox</a></li>
																				</ul>
																			</div>
																			<div class="col-sm-6">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-icon-boxes.html"><i class="fa fa-angle-right"></i>Icon Boxes</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-image-boxes.html"><i class="fa fa-angle-right"></i>Image Boxes</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-video-and-audio.html"><i class="fa fa-angle-right"></i>Video</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-modals.html"><i class="fa fa-angle-right"></i>Modals</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-animations.html"><i class="fa fa-angle-right"></i>Animations</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-counters.html"><i class="fa fa-angle-right"></i>Counters</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-tables.html"><i class="fa fa-angle-right"></i>Tables</a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-charts.html"><i class="fa fa-angle-right"></i>Charts <span class="badge">v1.3</span></a></li>
																					<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/components-announcement-default.html"><i class="fa fa-bullhorn pr-10"></i>Announcements <span class="badge">v1.5</span></a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<!-- mega-menu end -->
													<li class="dropdown">
														<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
														<ul class="dropdown-menu">
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Style 1</a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-2col.html">Portfolio - 2 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col.html">Portfolio - 3 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-4col.html">Portfolio - 4 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-sidebar.html">Portfolio - With sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col-2.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Style 2</a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-2col-2.html">Portfolio - 2 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col-2.html">Portfolio - 3 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-4col-2.html">Portfolio - 4 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-sidebar-2.html">Portfolio - With sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col-3.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Style 3</a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-2col-3.html">Portfolio - 2 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col-3.html">Portfolio - 3 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-4col-3.html">Portfolio - 4 columns</a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-sidebar-3.html">Portfolio - With sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown">
																<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-list-sidebar.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio - List <span class="badge">v1.3</span></a>
																<ul class="dropdown-menu">
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-list-1.html">List - Large Image <span class="badge">v1.3</span></a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-list-2.html">List - Small Image <span class="badge">v1.3</span></a></li>
																	<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-list-sidebar.html">List - Sidebar <span class="badge">v1.3</span></a></li>
																</ul>
															</li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-full.html">Portfolio - Full width</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Portfolio single</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item-2.html">Portfolio single 2</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item-3.html">Portfolio single 3</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-listing-3col.html" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
														<ul class="dropdown-menu">
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index-shop.html">Shop - Home <span class="default-bg badge">v1.2</span></a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-listing-3col.html">Shop - 3 Columns</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-listing-4col.html">Shop - 4 Columns</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-listing-sidebar.html">Shop - With Sidebar</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-product.html">Product</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-cart.html">Shopping Cart</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-checkout.html">Checkout Page - Step 1</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-checkout-payment.html">Checkout Page - Step 2</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/shop-checkout-review.html">Checkout Page - Step 3</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-right-sidebar.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
														<ul class="dropdown-menu">
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-right-sidebar.html">Blog Right Sidebar</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-left-sidebar.html">Blog Left Sidebar</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-no-sidebar.html">Blog No Sidebars</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-masonry.html">Blog Masonry</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-masonry-sidebar.html">Blog Masonry - Sidebar</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-timeline.html">Blog Timeline</a></li>
															<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-post.html">Blog post</a></li>
														</ul>
													</li>
												</ul>
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->

							</div>
							<!-- header-right end -->

						</div>
					</div>
				</div>
			</header>
			<!-- header end -->

			<!-- banner start -->
			<!-- slider start -->
			<!-- ================ -->
			<div class="banner">
				<?php  // require_once (LOCAL_PATH . 'templateParts/slider.php')	?>
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
						<div class="col-sm-6">
					    	<h1 class="display-4">Daniel Soloway - Web Productions</h1>
					    	<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
						</div>
						<div class="col-sm-6">
							<img src="<?php echo WEB_PATH ?>images/daniel_shalev.jpg">
			  			</div>
					</div>
				</div>
			</div>
			<!-- banner end -->

			<!-- page-top start-->
			<!-- ================ -->
			<div class="page-top">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="call-to-action">
								<h1 class="title">IDea Clean and Unique Design</h1>
								<p>Sed ut Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit  voluptatem accusan tium </p>
								<a class="btn btn-white more" data-toggle="modal" data-target="#myModal">
								Read more <i class="pl-10 fa fa-info"></i>
								</a>

								<!-- Modal -->

								or
								<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-contact.html" class="btn btn-default contact">Contact us <i class="pl-10 fa fa-phone"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- page-top end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container gray-bg">

				<!-- main start -->
				<!-- ================ -->
				<div class="main">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="text-center title">Features</h1>
								<div class="separator"></div>
								<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<div class="row">
									<div class="col-sm-4">
										<div class="box-style-1 white-bg object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
											<i class="fa fa-leaf"></i>
											<h2>Clean &amp; elegant design</h2>
											<p>Voluptatem ad provident non <a href="https://htmlcoder.me/preview/idea/v.1.7/html/#">repudiandae</a> veritatis beatae cupiditate amet reiciendis.</p>
											<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-services.html" class="btn-default btn">Read More</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="box-style-1 white-bg object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<i class="fa fa-laptop"></i>
											<h2>Very Flexible</h2>
											<p>Iure sequi unde hic. Sapiente quaerat labore sequi inventore veritatis cumque.</p>
											<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-services.html" class="btn-default btn">Read More</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="box-style-1 white-bg object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
											<i class="fa fa-sitemap"></i>
											<h2>Latest Technologies</h2>
											<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>
											<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-services.html" class="btn-default btn">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main end -->

			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center">About Us</h1>
							<div class="separator"></div>
							<p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
							<br>
							<div class="row">
								<div class="col-md-6">
									<h2 class="title">IDea - Responsive Website Theme</h2>
									<div class="row">
										<div class="col-md-6">
											<img src="<?php echo RIP_PATH ?>section-image-2.png" alt="">
										</div>
										<div class="col-md-6">
											<p>Quo soluta provident, quod reiciendis. Dolores nam totam aut illum ex ratione harum molestias maxime minima tempore, possimus, laudantium. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										</div>
									</div>
									<p>Esse sequi veniam, assumenda voluptate necessitatibus ipsa dicta vero, minima natus cum cupiditate magnam et placeat quo adipisci.</p>
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-about.html" class="btn btn-white">Learn More</a>
									<div class="space hidden-md hidden-lg"></div>
								</div>
								<div class="col-md-6">
									<div class="panel-group panel-dark" id="accordion">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="https://htmlcoder.me/preview/idea/v.1.7/html/#collapseOne">
														<i class="fa fa-bold"></i>Bootstrap Based
													</a>
												</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="https://htmlcoder.me/preview/idea/v.1.7/html/#collapseTwo" class="collapsed">
														<i class="fa fa-leaf"></i>Clean &amp; elegant design
													</a>
												</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="https://htmlcoder.me/preview/idea/v.1.7/html/#collapseThree" class="collapsed">
														<i class="fa fa-html5"></i>HTML5/CSS3
													</a>
												</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->


			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<h1 class="text-center">Why Choose IDea</h1>
							<div class="separator"></div>
							<p class="lead text-center">Lorem ipsum dolor sit amet. Maiores, odio ut deleniti doloremque ad at praesentium<br> laudantium molestias similique. Quisquam incidunt ut laboriosam.</p>

							<!-- Tabs start -->
							<!-- ================ -->
							<div class="vertical hc-tabs">

								<!-- Tabs Top -->
								<div class="hc-tabs-top">
									<img data-tab="#tab1" src="<?php echo RIP_PATH ?>section-image-1.png" alt="IDea" data-tab-animation-effect="fadeInRightSmall" class="current-img show fadeInRightSmall animated">
									<img data-tab="#tab2" src="<?php echo RIP_PATH ?>section-image-2.png" alt="IDea" data-tab-animation-effect="fadeInRightSmall">
									<img data-tab="#tab3" src="<?php echo RIP_PATH ?>section-image-3.png" alt="IDea" data-tab-animation-effect="fadeInRightSmall">
									<img data-tab="#tab4" src="<?php echo RIP_PATH ?>section-image-4.png" alt="IDea" data-tab-animation-effect="fadeInRightSmall">
									<div class="space"></div>
								</div>

								<!-- Tabs Arrow -->
								<div class="arrow hidden-sm hidden-xs"><i class="fa fa-caret-up"></i></div>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#tab1" role="tab" data-toggle="tab"><i class="fa fa-magic pr-10"></i> Very Flexible</a></li>
									<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#tab2" role="tab" data-toggle="tab"><i class="fa fa-life-saver pr-10"></i> Duis aute irure dolor</a></li>
									<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#tab3" role="tab" data-toggle="tab"><i class="fa fa-expand pr-10"></i> 100% Responsive</a></li>
									<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#tab4" role="tab" data-toggle="tab"><i class="fa fa-file-o pr-10"></i> Well Documented</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab1">
										<h1 class="text-center title">Very Flexible</h1>
										<div class="space"></div>
										<div class="row">
											<div class="col-md-6">
												<ul class="list-icons">
													<li><i class="fa fa-check pr-10"></i> Lorem ipsum dolor sit amet maiores</li>
													<li><i class="fa fa-check pr-10"></i> Consectetur adipisicing elit</li>
													<li><i class="fa fa-check pr-10"></i> Aut earum numquam hic placeat</li>
													<li><i class="fa fa-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="fa fa-check pr-10"></i> Vitae magnam commodi repellendus</li>
													<li><i class="fa fa-check pr-10"></i> Expedita placeat omnis pariatur</li>
													<li><i class="fa fa-check pr-10"></i> Fugiat rem consequatur neque</li>
												</ul>
											</div>
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
												<p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-services.html" class="btn btn-default">Read more</a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab2">
										<h1 class="text-center title">Duis aute irure dolor</h1>
										<div class="space"></div>
										<div class="row">
											<div class="col-md-6">
												<ul class="list-icons">
													<li><i class="fa fa-check pr-10"></i> Consectetur adipisicing elit</li>
													<li><i class="fa fa-check pr-10"></i> Aut earum numquam hic placeat</li>
													<li><i class="fa fa-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="fa fa-check pr-10"></i> Vitae magnam commodi repellendus</li>
													<li><i class="fa fa-check pr-10"></i> Expedita placeat omnis pariatur</li>
													<li><i class="fa fa-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="fa fa-check pr-10"></i> Lorem ipsum dolor sit amet maiores</li>
												</ul>
											</div>
											<div class="col-md-6">
												<p>Dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
												<p>Expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-services.html" class="btn btn-default">Read more</a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab3">
										<h1 class="text-center title">100% Responsive</h1>
										<div class="space"></div>
										<div class="row">
											<div class="col-md-6">
												<ul class="list-icons">
													<li><i class="fa fa-check pr-10"></i> Aut earum numquam hic placeat</li>
													<li><i class="fa fa-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="fa fa-check pr-10"></i> Vitae magnam commodi repellendus</li>
													<li><i class="fa fa-check pr-10"></i> Expedita placeat omnis pariatur</li>
													<li><i class="fa fa-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="fa fa-check pr-10"></i> Lorem ipsum dolor sit amet maiores</li>
													<li><i class="fa fa-check pr-10"></i> Consectetur adipisicing elit</li>
												</ul>
											</div>
											<div class="col-md-6">
												<p>Ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
												<p>Tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-services.html" class="btn btn-default">Read more</a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab4">
										<h1 class="text-center title">Well Documented</h1>
										<div class="space"></div>
										<div class="row">
											<div class="col-md-6">
												<ul class="list-icons">
													<li><i class="fa fa-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="fa fa-check pr-10"></i> Vitae magnam commodi repellendus</li>
													<li><i class="fa fa-check pr-10"></i> Expedita placeat omnis pariatur</li>
													<li><i class="fa fa-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="fa fa-check pr-10"></i> Lorem ipsum dolor sit amet maiores</li>
													<li><i class="fa fa-check pr-10"></i> Consectetur adipisicing elit</li>
													<li><i class="fa fa-check pr-10"></i> Aut earum numquam hic placeat</li>
												</ul>
											</div>
											<div class="col-md-6">
												<p>Sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
												<p>Modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-services.html" class="btn btn-default">Read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- tabs end -->

						</div>
					</div>
				</div>
			</div>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg clearfix">
				<div class="owl-carousel content-slider owl-loaded owl-drag">



				<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-5715px, 0px, 0px); transition: all 0.7s ease 0s; width: 13335px;"><div class="owl-item cloned" style="width: 1905px;"><div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Wow amazing!</h2>
									<div class="testimonial-image">
										<img src="<?php echo RIP_PATH ?>testimonial-2.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p>Turpis arcu rutrum nunc, ac laoreet turpis augue a justo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, esse, animi maxime voluptate tempore at sunt labore incidunt nulla dignissimos iusto ad similique inventore distinctio quam repellendus itaque minus minima.</p>
										<div class="testimonial-info-1">- John Doe</div>
										<div class="testimonial-info-2">By Company</div>
									</div>
								</div>
							</div>
						</div>
					</div></div><div class="owl-item cloned" style="width: 1905px;"><div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Thanks!</h2>
									<div class="testimonial-image">
										<img src="<?php echo RIP_PATH ?>testimonial-3.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p>Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform fully tested expertise with competitive technologies ac laoreet turpis augue a justo.</p>
										<div class="testimonial-info-1">- John Doe</div>
										<div class="testimonial-info-2">By Company</div>
									</div>
								</div>
							</div>
						</div>
					</div></div><div class="owl-item" style="width: 1905px;"><div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Just Perfect!</h2>
									<div class="testimonial-image">
										<img src="<?php echo RIP_PATH ?>testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium,  totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
										<div class="testimonial-info-1">- Jane Doe</div>
										<div class="testimonial-info-2">By Company</div>
									</div>
								</div>
							</div>
						</div>
					</div></div><div class="owl-item active" style="width: 1905px;"><div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Wow amazing!</h2>
									<div class="testimonial-image">
										<img src="<?php echo RIP_PATH ?>testimonial-2.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p>Turpis arcu rutrum nunc, ac laoreet turpis augue a justo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, esse, animi maxime voluptate tempore at sunt labore incidunt nulla dignissimos iusto ad similique inventore distinctio quam repellendus itaque minus minima.</p>
										<div class="testimonial-info-1">- John Doe</div>
										<div class="testimonial-info-2">By Company</div>
									</div>
								</div>
							</div>
						</div>
					</div></div><div class="owl-item" style="width: 1905px;"><div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Thanks!</h2>
									<div class="testimonial-image">
										<img src="<?php echo RIP_PATH ?>testimonial-3.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p>Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform fully tested expertise with competitive technologies ac laoreet turpis augue a justo.</p>
										<div class="testimonial-info-1">- John Doe</div>
										<div class="testimonial-info-2">By Company</div>
									</div>
								</div>
							</div>
						</div>
					</div></div><div class="owl-item cloned" style="width: 1905px;"><div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Just Perfect!</h2>
									<div class="testimonial-image">
										<img src="<?php echo RIP_PATH ?>testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium,  totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
										<div class="testimonial-info-1">- Jane Doe</div>
										<div class="testimonial-info-2">By Company</div>
									</div>
								</div>
							</div>
						</div>
					</div></div><div class="owl-item cloned" style="width: 1905px;"><div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Wow amazing!</h2>
									<div class="testimonial-image">
										<img src="<?php echo RIP_PATH ?>testimonial-2.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p>Turpis arcu rutrum nunc, ac laoreet turpis augue a justo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, esse, animi maxime voluptate tempore at sunt labore incidunt nulla dignissimos iusto ad similique inventore distinctio quam repellendus itaque minus minima.</p>
										<div class="testimonial-info-1">- John Doe</div>
										<div class="testimonial-info-2">By Company</div>
									</div>
								</div>
							</div>
						</div>
					</div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>
			</div>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<h2>Our Work</h2>
							<div class="separator-2"></div>
							<p>Sed ut Perspiciatis Unde Omnis Iste Sed ut sit  voluptatem accusan tium </p>
							<div class="owl-carousel carousel owl-loaded owl-drag">








							<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 0s ease 0s; width: 4560px;"><div class="owl-item cloned" style="width: 285px;"><div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-5.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item cloned" style="width: 285px;"><div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-6.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item cloned" style="width: 285px;"><div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-7.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item cloned" style="width: 285px;"><div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-8.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-8.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item active" style="width: 285px;"><div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="300">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-1.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item active" style="width: 285px;"><div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="200">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-2.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item active" style="width: 285px;"><div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="100">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-3.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-3.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item active" style="width: 285px;"><div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="0">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-4.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item" style="width: 285px;"><div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-5.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item" style="width: 285px;"><div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-6.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item" style="width: 285px;"><div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-7.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item" style="width: 285px;"><div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-8.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-8.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item cloned" style="width: 285px;"><div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="300">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-1.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item cloned" style="width: 285px;"><div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="200">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-2.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item cloned" style="width: 285px;"><div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="100">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-3.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-3.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div><div class="owl-item cloned" style="width: 285px;"><div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="0">
									<div class="overlay-container">
										<img src="<?php echo RIP_PATH ?>portfolio-4.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html"><i class="fa fa-link"></i></a>
												<a href="<?php echo RIP_PATH ?>portfolio-4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html">Project Title</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
										<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="link"><span>Read More</span></a>
									</div>
								</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

						</div>
					</div>
				</div>

			</div>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg text-muted footer-top clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="owl-carousel clients owl-loaded owl-drag">








							<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-666px, 0px, 0px); transition: all 0.7s ease 0s; width: 1998px;"><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-4.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-5.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-6.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-7.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-8.png" alt=""></a>
								</div></div><div class="owl-item" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-1.png" alt=""></a>
								</div></div><div class="owl-item active" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-2.png" alt=""></a>
								</div></div><div class="owl-item active" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-3.png" alt=""></a>
								</div></div><div class="owl-item active" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-4.png" alt=""></a>
								</div></div><div class="owl-item active" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-5.png" alt=""></a>
								</div></div><div class="owl-item active" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-6.png" alt=""></a>
								</div></div><div class="owl-item" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-7.png" alt=""></a>
								</div></div><div class="owl-item" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-8.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-1.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-2.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-3.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-4.png" alt=""></a>
								</div></div><div class="owl-item cloned" style="width: 111px;"><div class="client">
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><img src="<?php echo RIP_PATH ?>client-5.png" alt=""></a>
								</div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
						</div>
						<div class="col-md-6">
							<blockquote class="inline">
								<p class="margin-clear">Duis aute irure dolor in reprehenderit in voluptate velit esse mollit anim.</p>
								<footer><cite title="Source Title">Lorem Ipsum </cite></footer>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-content">
									<div class="logo-footer"><img id="logo-footer" src="<?php echo RIP_PATH ?>logo_red_footer.png" alt=""></div>
									<div class="row">
										<div class="col-sm-6">
											<p>Lorem ipsum dolor sit amet, consect tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</p>
											<ul class="social-links circle">
												<li class="facebook"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><i class="fa fa-google-plus"></i></a></li>
												<li class="skype"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
										<div class="col-sm-6">
											<ul class="list-icons">
												<li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li>
												<li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
												<li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
												<li><i class="fa fa-envelope-o pr-10"></i> info@youremail.com</li>
											</ul>
										</div>
									</div>
									<a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-about.html" class="link"><span>Read More</span></a>
								</div>
							</div>
							<div class="space-bottom hidden-lg hidden-xs"></div>
							<div class="col-sm-6 col-md-2">
								<div class="footer-content">
									<h2>Links</h2>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index.html">Home</a></li>
											<li class="active"><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-right-sidebar.html">Blog</a></li>
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col.html">Portfolio</a></li>
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-about.html">About</a></li>
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-sm-6 col-md-3 col-md-offset-1">
								<div class="footer-content">
									<h2>Latest Projects</h2>
									<div class="gallery row">
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-1.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-2.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-3.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-4.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-5.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-6.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-7.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-8.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="<?php echo RIP_PATH ?>gallery-9.jpg" alt="">
												<a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>Copyright © 2018 IDea. All Rights Reserved</p>
							</div>
							<div class="col-md-6">
								<nav class="navbar navbar-default">
									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div class="collapse navbar-collapse" id="navbar-collapse-2">
										<ul class="nav navbar-nav">
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/index.html">Home</a></li>
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-about.html">About</a></li>
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/blog-right-sidebar.html">Blog</a></li>
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/portfolio-3col.html">Portfolio</a></li>
											<li><a href="https://htmlcoder.me/preview/idea/v.1.7/html/page-contact.html">Contact</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script src="<?php echo RIP_PATH ?>jquery.min.js"></script>
		<script src="<?php echo RIP_PATH ?>bootstrap.js"></script>

		<!-- jQuery REVOLUTION Slider  -->
		<script src="<?php echo RIP_PATH ?>jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo RIP_PATH ?>jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script src="<?php echo RIP_PATH ?>imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo RIP_PATH ?>isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script src="<?php echo RIP_PATH ?>owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script src="<?php echo RIP_PATH ?>jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script src="<?php echo RIP_PATH ?>jquery.appear.js"></script>

		<!-- Count To javascript -->
		<script src="<?php echo RIP_PATH ?>jquery.countTo.js"></script>

		<!-- Initialization of Plugins -->
		<script src="<?php echo RIP_PATH ?>template.js"></script>

		<!-- Custom Scripts -->
		<script src="<?php echo RIP_PATH ?>custom.js"></script>
		<!-- Color Switcher (Remove these lines) -->




</body></html>
