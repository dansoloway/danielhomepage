<?php

require_once('../config.php');
// https://htmlcoder.me/preview/idea/v.1.7/html/


?>

	<!-- require htmlHead-->
	<?php require_once LOCAL_PATH . 'templateParts/' . 'header.php'; ?>

	<!-- body classes:
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
	-->

	<body class="front wide" style="">


		<!-- require modalPopUp-->
		<?php require_once LOCAL_PATH . 'templateParts/' . 'modalPopUp.php'; ?>

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
			<header class="header fixed clearfix navbar-fixed-top"><!-- navbar-fixed-top -->
				<div class="container">

					<!-- require modalPopUp-->
					<?php require_once LOCAL_PATH . 'templateParts/' . 'topLogoRow.php'; ?>
				</div>
			</header>
			<!-- header end -->


			<!-- require bannerNew-->
			<?php require_once LOCAL_PATH . 'templateParts/' . 'bannerContactSuccess.php'; ?>

			<!-- require sliderOrig-->
			<?php // require_once LOCAL_PATH . 'templateParts/' . 'sliderOrig.php'; ?>
			<!-- banner end -->


			<!-- require footer -->
			<?php require_once LOCAL_PATH . 'templateParts/footer.php'?>




		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script src="<?php echo RIP_PATH ?>jquery.min.js"></script>
		<script src="<?php echo RIP_PATH ?>bootstrap.js"></script>

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




</body></html>
