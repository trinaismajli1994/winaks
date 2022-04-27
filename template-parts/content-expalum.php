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
                    <svg class="animated growIn go slow" xmlns="http://www.w3.org/2000/svg" width="148.5" height="23.373" viewBox="0 0 148.5 23.373">
                        <g id="Group_644" data-name="Group 644" transform="translate(-1532.578 -351.388)">
                            <path id="Path_3692" data-name="Path 3692" d="M1639.759,374.608h-6.811c0-4.509.018-8.88-.006-13.25-.023-4.341.557-4.158-4.21-4.168-2.69,0-5.382,0-8.281,0V374.6h-6.722V351.571a11.025,11.025,0,0,1,1.328-.155c6.141-.011,12.282-.075,18.42.042a8.735,8.735,0,0,1,4.249,1.141,4.378,4.378,0,0,1,1.943,3.006C1639.848,361.891,1639.759,368.188,1639.759,374.608Z" transform="translate(41.297 0)"/>
                            <path id="Path_3693" data-name="Path 3693" d="M1612.421,351.459h6.688v23.252h-2.883c-3.671,0-7.344.041-11.013-.017-4.634-.071-6.473-1.906-6.5-6.482-.039-5.514-.009-11.029-.009-16.694h6.788v12.439c0,4.626,0,4.626,4.7,4.64.65,0,1.3,0,2.233,0V351.459Z" transform="translate(33.642 0.036)"/>
                            <path id="Path_3694" data-name="Path 3694" d="M1579.789,369.094h5.794l-6.382-17.678c2.382,0,4.52-.086,6.637.072.436.033.976.926,1.175,1.519,2.046,6.087,4.033,12.192,6.033,18.294.332,1.014.648,2.032,1.044,3.277h-22.237c1.4-4.658,2.748-9.185,4.158-13.689a1.367,1.367,0,0,1,1.029-.7c1.554-.077,3.114-.033,4.905-.033Z" transform="translate(19.987 0.002)"/>
                            <path id="Path_3695" data-name="Path 3695" d="M1565.477,374.614H1558.7V360.138c2.871,0,5.62,0,8.37,0,1.071,0,2.2-.021,2.2-1.462,0-1.4-1.07-1.512-2.176-1.5-2.754.018-5.507.006-8.384.006V351.59a6.328,6.328,0,0,1,1.177-.187c3.962.1,7.941.039,11.881.406,2.689.251,4.074,1.995,4.519,4.652.995,5.945-1.578,9.112-7.586,9.322-1.011.035-2.024,0-3.223,0Z" transform="translate(13.292 0.008)"/>
                            <path id="Path_3696" data-name="Path 3696" d="M1544.541,356.831v-4.925c4.088-.22,6.828,2.085,9.594,4.614,2.825-2.2,5.449-4.833,9.615-4.6v4.919c-4.9,1.31-6.808,2.874-6.6,5.817.279,3.971,3.209,5.13,6.639,5.59v5.026c-2.579.259-2.994.065-9.714-4.524-2.675,2.324-5.446,4.643-9.477,4.614v-4.982c5.011-1.461,6.678-2.956,6.632-5.9C1551.178,359.453,1549.466,357.99,1544.541,356.831Z" transform="translate(6.088 0.256)" fill="#0a6732"/>
                            <path id="Path_3697" data-name="Path 3697" d="M1548.419,365.728v5.907H1532.58V357.3h15.788v5.587h-8.9v2.843Z" transform="translate(0.001 3.008)"/>
                            <path id="Path_3698" data-name="Path 3698" d="M1588.021,351.451h6.689v17.331h7.209v5.82h-13.9Z" transform="translate(28.214 0.032)"/>
                            <path id="Path_3699" data-name="Path 3699" d="M1626.8,357.268v14.47c-1.993,0-3.9.048-5.806-.047a1.362,1.362,0,0,1-.886-.99c-.06-4.435-.039-8.869-.039-13.434Z" transform="translate(44.52 2.992)"/>
                            <path id="Path_3700" data-name="Path 3700" d="M1548.417,351.508v5.512h-15.839v-5.512Z" transform="translate(0 0.061)"/>
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
