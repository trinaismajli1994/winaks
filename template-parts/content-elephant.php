<?php 
$head_title = get_field('head_title');
$description = get_field('description');
$product_images = get_field('product_images');
$subtitle = get_field('subtitle');
$button = get_field('button');
$big_image = get_field('big_image');
$slider = get_field('slider');
$details_main_title = get_field('details_main_title');
$technical_details = get_field('technical_details');
$technical_details_right = get_field('technical_details_right');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<div class="row border-full animatedParent animateOnce" data-sequence="500">
		<div class="col-lg-6">
			<div class="left-side">
				<div class="additional-info">
					<?php the_content();?>
				</div>
				<h2><?php echo $head_title ?></h2>
				<p><?php echo $description ?></p>
				<div class="product-outer animated fadeInLeft go">
					<?php foreach ($product_images as $pi): ?>
						<div class="product-image">
							<a target ="<?php echo $pi['link_of_product']['target']?>" href="<?php echo $pi['link_of_product']['url']?>">
								<img src="<?php echo $pi['image_product']['url']?>" alt="<?php echo $pi['image_product']['alt']?>">
								<h5><?php echo $pi['link_of_product']['title'] ?></h5>
							</a>
						</div>
					<?php endforeach;?> 
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="right-side">
				<div class="right-side-left">
                    <svg class="animated growIn go slow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="101" height="60" viewBox="0 0 101 60">
                        <defs>
                            <pattern id="pattern" width="1" height="1" viewBox="1.96 0.582 91.227 54.194">
                            <image preserveAspectRatio="none" width="101" height="60" xlink:href="data:image/png;base64,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"/>
                            </pattern>
                        </defs>
                        <rect id="Asset_1" data-name="Asset 1" width="101" height="60" fill="url(#pattern)"/>
                    </svg>
                    <?php if($subtitle): ?>
					    <h3><?php echo $subtitle ?></h3>
                    <?php endif;?> 
                    <?php if($button): ?>
                        <div class="read-more">
                            <a target ="<?php echo $button ['target']?>" href="<?php echo $button ['url']?>"><?php echo $button ['title'] ?></a>
                        </div>
                    <?php endif;?> 
				</div>
				<!-- Slider -->
				<div class="gallery js-gallery animated fadeInRightShort go">
					<div class="gallery__bigImage" id="js-bigImage">
						<img src="<?php echo ($big_image['url']); ?>" alt="<?php echo ($big_image['alt']); ?>" />
					</div>
					<?php if($slider): ?>
						<ul class="gallery__list" id="js-list">
							<?php foreach ($slider as $sl): ?>
								<li class="gallery__item">
									<a class="gallery__link" href="<?php echo $sl['small_images']['url']?>">
										<img class="gallery__smallImage" src="<?php echo $sl['small_images']['url']?>" alt="<?php echo $sl['small_images']['alt']?>">
									</a>
								</li>
							<?php endforeach;?>
						</ul>
					<?php endif;?> 
				</div>
			</div>
		</div>
	</div>

	<!-- Start of details -->
	<div class="row dark-bg border-full animatedParent animateOnce" data-sequence="500" id="characteristic">
		<?php if($technical_details): ?>
			<div class="technical_details">
				<h3 class="animated fadeInDownShort" data-id="1"><?php echo $details_main_title ?></h3>
				<ul class="details animated fadeInLeft" data-id="2">
					<?php foreach ($technical_details as $td): ?>
						<?php if($td['left_detail_title']): ?>
							<h4><?php echo $td['left_detail_title']?></h4>
						<?php endif;?> 
						<li><?php echo $td['detail']?></li>
					<?php endforeach;?> 
				</ul>
				<ul class="details-right animated fadeInRight" data-id="3">
					<?php if($technical_details_right): ?>
						<?php foreach ($technical_details_right as $tdr): ?>
							<?php if($tdr['right_detail_title']): ?>
								<h4><?php echo $tdr['right_detail_title']?></h4>
							<?php endif;?> 
							<li><?php echo $tdr['detail_right']?></li>
						<?php endforeach;?> 
					<?php endif;?> 
				</ul>
			</div>  
		</div>
	<?php endif;?> 
	<!-- End of details -->
</article><!-- #post-<?php the_ID(); ?> -->
