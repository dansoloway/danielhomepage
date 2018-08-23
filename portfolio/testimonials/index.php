<?php

require_once('../config.php');
require_once(LOCAL_PATH . 'fetchTestimonials.php');

?>

	<!-- require htmlHead-->
	<?php require_once LOCAL_PATH . 'templateParts/' . 'header.php'; ?>

	<!-- body classes:
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
	-->

	<body class="front wide" style="">




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

            <div class="section gray-bg clearfix anchorLinkSpacer" style="margin-top:0px" id="testimonials">
                <h1 style="text-align:center">All Testimonials</h1>


                        <?php for($i = 0; $i < count($array); $i++) {
                        ?>
        					<div class="testimonial">
        						<div class="container">
        							<div class="row">
        								<div class="col-md-12">
        									<h2 class="title"><?php echo $array[$i]['Highlights'] ?></h2>
        									<div class="testimonial-image">
        										<img src="<?php echo WEB_PATH ?>images/testimonials/<?php echo $array[$i]['Picture'] ?>.jpeg" alt="<?php echo $array[$i]['Name'] ?>" title="<?php echo $array[$i]['Name'] ?>" class="img-circle">
        									</div>
        									<div class="testimonial-body">
        										<p><?php echo $array[$i]['Text'] ?></p>
        										<div class="testimonial-info-1">- <?php echo $array[$i]['Name'] ?></div>
        										<div class="testimonial-info-2"><?php echo $array[$i]['Relationship'] ?></div>
        									</div>
                                            <br><br>
        								</div>
        							</div>
        						</div>
        					</div>
                    <?php } ?>
        		</div>

            <!-- section end -->

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


		<!-- Initialization of Plugins -->
		<script src="<?php echo RIP_PATH ?>template.js"></script>



</body></html>
