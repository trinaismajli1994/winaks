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
                    <svg class="animated growIn go slow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="250" height="56" viewBox="0 0 250 56">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_310" data-name="Rectangle 310" width="250" height="56" transform="translate(5638 12602)" fill="#fff" stroke="#707070" stroke-width="1"/>
                            </clipPath>
                        </defs>
                        <g id="Mask_Group_22" data-name="Mask Group 22" transform="translate(-5638 -12602)" clip-path="url(#clip-path)">
                            <image id="logo_2x_" data-name="logo@2x_" width="250" height="200" transform="translate(5638 12527)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAADICAYAAADBXvybAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjJCRjhBQjVCRDg5MjExRTlBRjJFOTk1RjM3MzM3MDAxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjJCRjhBQjVDRDg5MjExRTlBRjJFOTk1RjM3MzM3MDAxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MkJGOEFCNTlEODkyMTFFOUFGMkU5OTVGMzczMzcwMDEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MkJGOEFCNUFEODkyMTFFOUFGMkU5OTVGMzczMzcwMDEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4BtJa3AAA6DUlEQVR42uxd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"/>
                        </g>
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
