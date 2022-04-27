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
                    <svg class="animated growIn go slow" xmlns="http://www.w3.org/2000/svg" width="131.121" height="38.123" viewBox="0 0 131.121 38.123">
                        <g id="Group_947" data-name="Group 947" transform="translate(-278.649 -599.413)">
                            <path id="Path_3691" data-name="Path 3691" d="M336.908,630.19c-.669.734-1.325,1.447-1.973,2.166-.3.332-.575.685-.874,1.016-1.195,1.319-2.39,2.637-3.6,3.942a.735.735,0,0,1-.486.2c-3.058.012-6.116.009-9.174.008-.056,0-.112-.01-.217-.02a1.082,1.082,0,0,1,.112-.188c.712-.745,1.422-1.492,2.141-2.23,1.421-1.456,2.85-2.905,4.272-4.361.812-.831,1.615-1.67,2.422-2.505.787-.815,1.568-1.634,2.362-2.442.209-.212.242-.35.03-.612-1.069-1.319-2.107-2.662-3.158-4-.463-.588-.91-1.191-1.406-1.751a.991.991,0,0,0-.66-.305q-17.715-.022-35.431-.012c-.142,0-.285.013-.512.023.145.723.259,1.41.422,2.085a13.663,13.663,0,0,0,2.311,5.053,10.237,10.237,0,0,0,6.253,4.081,19.156,19.156,0,0,0,3.956.343q5.832,0,11.665,0h.561V637.5c-.137.007-.29.021-.443.021-5.33,0-10.66.034-15.99-.018a14.487,14.487,0,0,1-4.98-1.083,17.741,17.741,0,0,1-4.339-2.375A15.9,15.9,0,0,1,286.1,629.5a21.846,21.846,0,0,1-2.745-7.6c-.134-.748-.2-1.509-.272-2.266-.035-.377-.146-.555-.577-.542-1.12.032-2.242.011-3.364.011h-.495v-7.172h5.189c.7-1.243,1.3-2.455,2.042-3.576a19.092,19.092,0,0,1,6.754-6.2,20.607,20.607,0,0,1,7.339-2.457,25.06,25.06,0,0,1,3.185-.255c4.077-.029,8.155-.012,12.232-.012h.543v6.753h-.524c-4.048,0-8.1.011-12.145,0a11.921,11.921,0,0,0-4.757,1.059,12.047,12.047,0,0,0-4.195,2.922c-.474.516-.885,1.091-1.42,1.757h.667q17.54,0,35.081-.007a1.034,1.034,0,0,1,.833.347c1.356,1.434,2.731,2.85,4.094,4.278q1.517,1.589,3.017,3.194a2.283,2.283,0,0,1,.25.415q0-.12-.006-.241c.549-.468,1.126-.907,1.639-1.412.566-.556,1.065-1.181,1.61-1.76.736-.782,1.494-1.544,2.231-2.326q1.013-1.074,2-2.175a.91.91,0,0,1,.757-.32q6.051.016,12.1.007h.607V599.46h7.451v12.424c.2.01.35.025.5.025,2.1,0,4.194-.008,6.291.01a.565.565,0,0,0,.609-.409,18.735,18.735,0,0,1,2.867-4.7,19.044,19.044,0,0,1,4.945-4.287,20.561,20.561,0,0,1,6.163-2.493,23.14,23.14,0,0,1,5.349-.619c3.946.03,7.893.009,11.839.009h.562v6.753h-.482q-6.2,0-12.407,0a11.693,11.693,0,0,0-4.335.99,12.088,12.088,0,0,0-4.547,3.229c-.391.437-.737.914-1.182,1.471H409.77v7.216h-30.5c.089.578.135,1.087.248,1.581a14.757,14.757,0,0,0,2.589,5.806,10.6,10.6,0,0,0,8.06,4.125q6.611.046,13.222.088c.317,0,.634,0,.978,0v6.84h-.484c-5.272,0-10.544.042-15.815-.031a17.521,17.521,0,0,1-3.757-.657,15.228,15.228,0,0,1-5.479-2.641,16.257,16.257,0,0,1-3.44-3.466,17.824,17.824,0,0,1-2.628-5.16,40.809,40.809,0,0,1-.984-4.173c-.153-.729-.213-1.477-.321-2.259h-6.192v18.35h-7.451v-18.36c-.182-.011-.32-.027-.458-.027-3.175,0-6.349.007-9.524-.009-.575,0-.78.456-1.091.763-.544.538-1.026,1.137-1.548,1.7-.938,1.009-1.885,2.008-2.828,3.011a1.7,1.7,0,0,0-.112.153l1.314,1.447.031.031q4.763,4.8,9.523,9.61c.529.535,1.024,1.1,1.562,1.684a2.51,2.51,0,0,1-.282.033c-3.146,0-6.291.005-9.437-.009a.9.9,0,0,1-.562-.229c-1.621-1.54-3.227-3.095-4.838-4.645q-1.083-1.042-2.17-2.078A5.893,5.893,0,0,0,336.908,630.19Z" fill="#009265"/>
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
