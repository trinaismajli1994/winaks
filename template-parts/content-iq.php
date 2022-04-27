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
                    <svg class="animated growIn go slow" xmlns="http://www.w3.org/2000/svg" width="109.873" height="62.598" viewBox="0 0 109.873 62.598">
                        <g id="Group_956" data-name="Group 956" transform="translate(-3989.831 -147.443)">
                            <path id="Rectangle_41" data-name="Rectangle 41" d="M0,0H109.873a0,0,0,0,1,0,0V25.219A14.136,14.136,0,0,1,95.736,39.355h-81.6A14.136,14.136,0,0,1,0,25.219V0A0,0,0,0,1,0,0Z" transform="translate(3989.831 170.687)" fill="#e87717"/>
                            <path id="Path_3701" data-name="Path 3701" d="M4070,171.035h-16.674a20.763,20.763,0,0,1,2.552,12.188,21.642,21.642,0,0,1-4.788,11.442c1.648,1.892,3.268,3.724,4.849,5.589a10,10,0,0,1,.864,1.437,8.692,8.692,0,0,1-1.49.309c-1.812.064-3.631.013-5.439.12a3.539,3.539,0,0,1-3.421-1.511c-.722-1.044-1.45-1.166-2.737-.625a19.805,19.805,0,0,1-18.556-1.136,20.017,20.017,0,0,1-9.949-15.162,19.374,19.374,0,0,1,1.762-11.144c.209-.443.405-.893.664-1.466-2.11,0-4.083-.04-6.05.048-.259.011-.681.663-.7,1.035-.078,1.586-.034,3.179-.034,4.769q0,10.768,0,21.536c0,2.871-.754,3.609-3.642,3.638-1.181.012-2.363.02-3.544,0-2.259-.04-3.227-.977-3.245-3.264-.037-4.589-.024-9.178-.027-13.767,0-4.225-.024-8.451.012-12.676.008-1.025-.25-1.429-1.386-1.4-2.632.069-5.267-.047-7.9-.054-1.012,0-1.3-.476-1.292-1.438.035-5.406-.011-10.814.035-16.22a5.633,5.633,0,0,1,5.375-5.78c.767-.073,1.543-.051,2.315-.051q47.846,0,95.693-.011a6.091,6.091,0,0,1,5.365,2.381,5.012,5.012,0,0,1,1.037,2.6c.087,5.95.042,11.9.032,17.854,0,.216,0,.474-.013.783-6.064,0-12.23-.059-18.446-.059a37.361,37.361,0,0,0,.055,3.835c.031.3.739.729,1.146.742,2.451.077,4.906.046,7.359.058,2.654.013,3.367.735,3.382,3.405.01,1.681.047,3.363.02,5.043-.029,1.76-.761,2.479-2.51,2.5-2.59.024-5.182.076-7.769,0-1.281-.039-1.778.329-1.739,1.671.078,2.678.023,5.361-.014,8.041-.022,1.6-.723,2.31-2.347,2.345-1.953.042-3.908.032-5.861.007-1.894-.024-2.662-.743-2.7-2.643-.052-2.634-.058-5.271,0-7.905.024-1.121-.364-1.535-1.494-1.511-2.635.055-5.271.034-7.906.007-1.828-.018-2.55-.745-2.583-2.578-.031-1.726-.019-3.453-.01-5.18.011-2.344.847-3.172,3.233-3.187,2.317-.014,4.635,0,6.952,0,1.786,0,1.791,0,1.79-1.834,0-.772-.021-1.544-.048-2.315A1.815,1.815,0,0,0,4070,171.035Zm-37.444,13.717.23-.425a13.455,13.455,0,0,1,1.559-.194c1.77-.022,3.544.069,5.31-.024a3.485,3.485,0,0,1,3.376,1.485c.741,1.034,1.156.915,1.636-.318,1.462-3.754,1.173-7.323-1.443-10.478a9.543,9.543,0,0,0-10.281-3.272c-4.215,1.044-7.712,4.815-7.372,10.682.236,4.063,4.031,8.252,8.317,8.885a5.753,5.753,0,0,0,3.753-.353ZM4021.3,167.6h28.5C4043.237,159.51,4028.539,158.925,4021.3,167.6Zm-15.666-6.322a4.7,4.7,0,1,0-.131,9.408,4.844,4.844,0,0,0,4.942-4.75A5.024,5.024,0,0,0,4005.629,161.278Zm70.217,8.931v.016c.364,0,.727,0,1.09,0,4.021-.027,4.009-.027,3.71-4.108a1.676,1.676,0,0,0-1.8-1.785c-1.271-.029-2.543.008-3.814-.016-4.22-.079-4.219-.075-4.124,4.525,0,.091.014.181.02.272a1.054,1.054,0,0,0,1.237,1.1C4073.394,170.186,4074.621,170.209,4075.846,170.209Z" transform="translate(0)" fill="#fff"/>
                            <path id="Path_3702" data-name="Path 3702" d="M4127.843,248.014l5.085,5.989a5.752,5.752,0,0,1-3.752.353c-4.287-.633-8.082-4.822-8.318-8.885-.34-5.867,3.157-9.638,7.372-10.682a9.543,9.543,0,0,1,10.281,3.272c2.617,3.155,2.906,6.724,1.443,10.478-.48,1.234-.9,1.352-1.636.318a3.485,3.485,0,0,0-3.376-1.485c-1.765.093-3.54,0-5.31.024a13.435,13.435,0,0,0-1.559.194Z" transform="translate(-95.284 -63.262)" fill="#e87717"/>
                            <path id="Path_3703" data-name="Path 3703" d="M4105.227,204.595c7.243-8.675,21.942-8.09,28.5,0Z" transform="translate(-83.932 -36.994)" fill="#e87717"/>
                            <path id="Path_3704" data-name="Path 3704" d="M4034.969,198.184a5.024,5.024,0,0,1,4.811,4.658,4.844,4.844,0,0,1-4.942,4.75,4.7,4.7,0,1,1,.131-9.408Z" transform="translate(-29.34 -36.905)" fill="#e87717"/>
                            <path id="Rectangle_42" data-name="Rectangle 42" d="M5.589,0h0a5.589,5.589,0,0,1,5.589,5.589v1.9a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0v-1.9A5.589,5.589,0,0,1,5.589,0Z" transform="translate(4070.029 163.67)" fill="#e87717"/>
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