<?php 
$head_title = get_field('head_title');
$description = get_field('description');
$product_images = get_field('product_images');
$subtitle = get_field('subtitle');
$button = get_field('button');
$big_image = get_field('big_image');
$slider = get_field('slider');
$info_title = get_field('info_title');
$info_detail_left = get_field('info_detail_left');
$info_detail_right = get_field('info_detail_right');
$details_main_title = get_field('details_main_title');
$technical_details = get_field('technical_details');
$technical_details_right = get_field('technical_details_right');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
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
					<svg class="animated growIn go slow" xmlns="http://www.w3.org/2000/svg" width="90" height="62.364" viewBox="0 0 90 62.364">
						<g id="Group_937" data-name="Group 937" transform="translate(641.313 -352.982)">
							<path id="Path_30" data-name="Path 30" d="M-499.534,386.828V360.689h7.084v9.668q.844,0,1.512-3.195l1.748-6.474h7.084l-1.778,6.474c-.887,3.23-1.58,5.5-2.529,5.727,2.461,1.159,5.078,4.544,5.184,7.23l.265,6.708h-6.951v-5.18c0-2.067-2.3-3.792-4.535-4.122v9.3Z" transform="translate(-73.574 -3.999)" fill="#0068aa" fill-rule="evenodd"/>
							<path id="Path_31" data-name="Path 31" d="M-532.319,372.147V360.538h6.786V386.75h-6.786l-5.527-11.893v11.893h-6.786V360.538h6.918l5.395,11.609Z" transform="translate(-50.172 -3.921)" fill="#0068aa" fill-rule="evenodd"/>
							<path id="Path_32" data-name="Path 32" d="M-632.871,360.689h7.113v17.473a2.27,2.27,0,0,0,.414,1.462,2.294,2.294,0,0,0,1.459.511,3.724,3.724,0,0,0,1.9-.511,2.229,2.229,0,0,0,.432-1.462V360.689h7.112v17.168a2.562,2.562,0,0,0,.471,1.644,3.742,3.742,0,0,0,2.034.585,2.44,2.44,0,0,0,1.516-.5,2.109,2.109,0,0,0,.438-1.422V360.689h7.112v18.339a8.063,8.063,0,0,1-.78,3.562,8.26,8.26,0,0,1-2.13,2.731,9.635,9.635,0,0,1-2.981,1.717,9.761,9.761,0,0,1-3.294.585,6.45,6.45,0,0,1-5.671-2.686,6.689,6.689,0,0,1-2.634,1.89,8.812,8.812,0,0,1-3.328.639,9.984,9.984,0,0,1-4.412-1.033,8.588,8.588,0,0,1-3.451-3.022,8.277,8.277,0,0,1-1.322-4.689V360.689Z" transform="translate(-4.381 -3.999)" fill="#0068aa" fill-rule="evenodd"/>
							<path id="Path_33" data-name="Path 33" d="M-507.653,446.437c2.389-1.931,4.032-4.216,4.3-6.678h6.329c.6,0,4.438.051,5.014-.006,2.26-.225,1.561-3.437.013-3.5l-3.78-.142c-1.738-.065-7.879-1.016-7.73-7.935s5.9-8.742,9.322-8.742h8.561v7.292h-8.92c-3.714,0-1.96,3.291-.9,3.336l4.777.2c3.594.152,7.016,2.82,6.8,8.746s-4.628,7.42-10.64,7.42Z" transform="translate(-69.361 -34.487)" fill="#0068aa" fill-rule="evenodd"/>
							<path id="Path_34" data-name="Path 34" d="M-542.7,419.439h7.025v17.482c0,3.814,5.211,3.947,5.211,0V419.439h7.025v17.472a11.942,11.942,0,0,1-.6,3.859,7.979,7.979,0,0,1-1.8,3,7.966,7.966,0,0,1-3.01,1.934,12,12,0,0,1-4.228.68,10.152,10.152,0,0,1-4.058-.783,8.816,8.816,0,0,1-3.066-2.146,9.322,9.322,0,0,1-1.877-3.047,9.951,9.951,0,0,1-.63-3.494V419.439Z" transform="translate(-51.174 -34.487)" fill="#0068aa" fill-rule="evenodd"/>
							<path id="Path_35" data-name="Path 35" d="M-633.116,445.65V419.439h6.786v9.688h6.123v-9.689h6.786V445.65h-6.786v-9.887h-6.123v9.887Z" transform="translate(-4.254 -34.487)" fill="#0068aa" fill-rule="evenodd"/>
							<path id="Path_36" data-name="Path 36" d="M-567.549,446.381h-7.025v-6.7h-5.211v6.7h-7.025V428.91a11.96,11.96,0,0,1,.6-3.859,7.983,7.983,0,0,1,1.8-3,7.976,7.976,0,0,1,3.01-1.934,12.008,12.008,0,0,1,4.227-.679,10.141,10.141,0,0,1,4.058.783,8.811,8.811,0,0,1,3.066,2.146,9.324,9.324,0,0,1,1.877,3.047,9.946,9.946,0,0,1,.63,3.494v17.472Zm-7.025-13.006V428.9c0-3.814-5.211-3.948-5.211,0v4.475Z" transform="translate(-28.284 -34.488)" fill="#0068aa" fill-rule="evenodd"/>
							<path id="Path_37" data-name="Path 37" d="M-564.648,360.491h6.846v26.234h-6.846V360.491Z" transform="translate(-39.784 -3.897)" fill="#0068aa" fill-rule="evenodd"/>
							<path id="Path_38" data-name="Path 38" d="M-641.313,352.982h90v62.364h-90V352.982Zm.923.923v60.518h88.154V353.905Z" transform="translate(0 0)" fill="#0068aa"/>
						</g>
					</svg>
					<h3><?php echo $subtitle ?></h3>
					<div class="read-more">
						<a target ="<?php echo $button ['target']?>" href="<?php echo $button ['url']?>"><?php echo $button ['title'] ?></a>
					</div>
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
		<div class="info_details">
			<h3 class="animated fadeInDownShort" data-id="1"><?php echo $info_title ?></h3>
			<ul class="details animated fadeInLeft" data-id="2">
				<?php foreach ($info_detail_left as $idl): ?>
					<?php if($idl['detail_title_left']): ?>
						<h4><?php echo $idl['detail_title_left']?></h4>
					<?php endif;?> 
					<li><?php echo $idl['detail_info_left']?></li>
				<?php endforeach;?> 
			</ul>
			<ul class="details-right animated fadeInRight" data-id="3">
				<?php foreach ($info_detail_right as $idr): ?>
					<?php if($idr['detail_title_right']): ?>
						<h4><?php echo $idr['detail_title_right']?></h4>
					<?php endif;?> 
					<li><?php echo $idr['detail_info_right']?></li>
				<?php endforeach;?> 
			</ul>
		</div>
		<?php if($technical_details): ?>
			<div class="col-md-12">
				<div class="border-bott"></div>
			</div>
			<div class="technical_details">
				<h3 class="animated fadeInDownShort" data-id="4"><?php echo $details_main_title ?></h3>
				<ul class="details animated fadeInLeft" data-id="5">
					<?php foreach ($technical_details as $td): ?>
						<?php if($td['left_detail_title']): ?>
							<h4><?php echo $td['left_detail_title']?></h4>
						<?php endif;?> 
						<li><?php echo $td['detail']?></li>
					<?php endforeach;?> 
				</ul>
				<ul class="details-right animated fadeInRight" data-id="6">
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
