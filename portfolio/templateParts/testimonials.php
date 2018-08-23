<?php

$array = $fields = array(); $i = 0;
$csvPath = LOCAL_PATH . 'inc/testimonials.csv';
$handle = @fopen($csvPath, "r");
if ($handle) {
    while (($row = fgetcsv($handle, 4096)) !== false) {
        if (empty($fields)) {
            $fields = $row;
            continue;
        }
        foreach ($row as $k=>$value) {
            $array[$i][$fields[$k]] = $value;
        }
        $i++;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
// echo "<pre>";
// var_dump($array);
// echo "</pre>";
// echo "<h1>" . count($array) . "</h1>";
?>
<!-- section start -->
<!-- ================ -->
<div class="section gray-bg clearfix anchorLinkSpacer" id="testimonials">
    <h1 style="text-align:center">Testimonials</h1>
	<div class="owl-carousel content-slider owl-loaded owl-drag">
		<div class="owl-stage-outer">
			<div class="owl-stage" style="transform: translate3d(-5715px, 0px, 0px); transition: all 0.9s ease 0s; width: 13335px;">

                <?php for($i = 0; $i < count($array); $i++) {
                ?>
                <div class="owl-item" style="width: 1905px;">
					<div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title"><?php echo $array[$i]['Highlights'] ?></h2>
									<div class="testimonial-image">
										<img src="<?php echo WEB_PATH ?>images/testimonials/<?php echo $array[$i]['Picture'] ?>.jpeg" alt="<?php echo $array[$i]['Name'] ?>" title="<?php echo $array[$i]['Name'] ?>" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p><?php echo $array[$i]['Text'] ?></p>
										<div class="testimonial-info-1">- <?php echo $array[$i]['Name'] ?></div>
										<div class="testimonial-info-2"><?php echo $array[$i]['Relationship'] ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            <?php } ?>

			</div>
		</div>
		<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div>
		<div class="owl-dots disabled"></div>
	</div>
</div>
<!-- section end -->

<!-- STAM
lass="owl-item cloned"
class="owl-item"
class="owl-item active"
class="owl-item"
class="owl-item cloned"
class="owl-item cloned"
-->
