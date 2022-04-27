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
                    <svg class="animated growIn go slow" id="HOPPE-WBM-EN" xmlns="http://www.w3.org/2000/svg" width="147.111" height="44.016" viewBox="0 0 147.111 44.016">
                        <path id="Path_3859" data-name="Path 3859" d="M170.12,11.828V3.141h5.3l7.348,12.718L175.416,28.6h-5.289V19.926h-3.141V28.6h-5.281l-7.363-12.732,7.341-12.725h5.3v8.687h3.133ZM159.41,0l-9.15,15.859,9.15,15.851h18.279l9.158-15.851L177.682,0Z" transform="translate(-39.735)" fill="#c22821"/>
                        <path id="Path_3860" data-name="Path 3860" d="M107.622,10.475a3.037,3.037,0,0,1-3.163-3.229,3.164,3.164,0,1,1,6.326,0,3.069,3.069,0,0,1-3.163,3.229m0-6.1a2.636,2.636,0,0,0-2.707,2.869,2.714,2.714,0,1,0,5.421,0,2.645,2.645,0,0,0-2.714-2.869m.8,4.583-.942-1.4h-.265V8.916h-.794V5.334h1.228c.824,0,1.324.39,1.324,1.089a.976.976,0,0,1-.684.986l.964,1.4Zm-.831-2.979h-.375V7h.36c.375,0,.6-.169.6-.515-.007-.324-.213-.5-.588-.5M103.65,29.556V25.422H93.315v-7.01h7.819V14.2H93.315V8.232h9.967V4.1h-14.8V29.556ZM76.177,20.185H74v9.371H69.13V4.1h7.451c5.833,0,9.334,2.692,9.334,7.826,0,5.495-3.913,8.26-9.739,8.26m.147-12.173H74v8.231h2.14c3.141,0,4.98-1.295,4.98-4.207,0-2.663-1.662-4.023-4.8-4.023M56.648,20.185H54.471v9.371H49.6V4.1h7.451c5.833,0,9.334,2.692,9.334,7.826,0,5.495-3.906,8.26-9.739,8.26m.147-12.173H54.471v8.231h2.14c3.133,0,4.98-1.295,4.98-4.207,0-2.663-1.662-4.023-4.8-4.023M35.081,30.041c-7.231,0-11.916-5.311-11.916-13.174,0-7.9,4.722-13.247,11.99-13.247,7.3,0,11.916,5.311,11.916,13.174s-4.685,13.247-11.99,13.247M35.118,7.68c-4.354,0-6.973,3.582-6.973,9.15s2.619,9.15,6.973,9.15c4.391,0,7.01-3.582,7.01-9.15s-2.655-9.15-7.01-9.15M20.635,29.556V4.1H15.729v10.04H4.916V4.1H.01V29.556H4.916V18.486H15.729v11.07Z" transform="translate(-0.003 -0.957)" fill="#8dc3e7"/>
                        <g id="Group_674" data-name="Group 674" transform="translate(0 35.63)">
                            <path id="Path_3861" data-name="Path 3861" d="M0,48.57H1.089v3.509h4.3V48.57H6.466v8.15H5.377V52.983H1.089V56.72H0Z" transform="translate(0 -48.474)" fill="#8dc3e7"/>
                            <path id="Path_3862" data-name="Path 3862" d="M16.133,57.454a1.364,1.364,0,0,1-.7.162c-.5,0-.824-.272-.824-.912a2.582,2.582,0,0,1-2.074.912c-1.074,0-1.957-.471-1.957-1.655,0-1.339.993-1.633,2-1.817,1.059-.221,1.986-.125,1.986-.868,0-.861-.706-.986-1.309-.986-.824,0-1.427.25-1.471,1.118h-.971c.059-1.464,1.177-1.979,2.5-1.979,1.059,0,2.214.243,2.214,1.618v3.038c0,.456,0,.662.309.662a.872.872,0,0,0,.294-.059Zm-1.574-3.023c-.758.559-2.95.015-2.95,1.464,0,.64.552.868,1.14.868,1.28,0,1.8-.787,1.8-1.339v-.993Z" transform="translate(-2.798 -49.231)" fill="#8dc3e7"/>
                            <path id="Path_3863" data-name="Path 3863" d="M19.39,51.58H20.3v.934h.022a2.035,2.035,0,0,1,1.92-1.074c1.552,0,2.03.89,2.03,2.155v3.884H23.3V53.485a1.111,1.111,0,0,0-1.2-1.192,1.654,1.654,0,0,0-1.743,1.846v3.332H19.39V51.58Z" transform="translate(-5.128 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3864" data-name="Path 3864" d="M33.21,56.717h-.971v-.8h-.022a1.981,1.981,0,0,1-1.883.934c-1.817,0-2.714-1.442-2.714-3.1s.89-3.075,2.692-3.075a2.248,2.248,0,0,1,1.905.927h.022V48.56h.971ZM30.467,56c1.317,0,1.8-1.133,1.8-2.229,0-1.155-.522-2.236-1.861-2.236s-1.773,1.133-1.773,2.28C28.642,54.93,29.216,56,30.467,56Z" transform="translate(-7.304 -48.472)" fill="#8dc3e7"/>
                            <path id="Path_3865" data-name="Path 3865" d="M37.36,48.57h.971v8.15H37.36Z" transform="translate(-9.88 -48.474)" fill="#8dc3e7"/>
                            <path id="Path_3866" data-name="Path 3866" d="M45.675,55.611a2.364,2.364,0,0,1-2.523,2.008c-1.883,0-2.773-1.317-2.832-3.1a2.837,2.837,0,0,1,2.773-3.075c2.089,0,2.729,1.949,2.67,3.376H41.342a1.739,1.739,0,0,0,1.839,1.942,1.4,1.4,0,0,0,1.53-1.155h.964Zm-.934-1.648a1.7,1.7,0,0,0-1.7-1.67,1.673,1.673,0,0,0-1.692,1.67Z" transform="translate(-10.662 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3867" data-name="Path 3867" d="M55.9,51.44a2.8,2.8,0,0,1,2.869,3.1,2.876,2.876,0,1,1-5.737,0A2.811,2.811,0,0,1,55.9,51.44Zm0,5.325c1.015,0,1.839-.8,1.839-2.229S56.914,52.3,55.9,52.3s-1.839.809-1.839,2.236S54.884,56.765,55.9,56.765Z" transform="translate(-14.024 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3868" data-name="Path 3868" d="M62.593,51.64H61.6v-.853h.993V49.9c0-.956.574-1.464,1.633-1.464a2.26,2.26,0,0,1,.625.1v.846A1.759,1.759,0,0,0,64.3,49.3c-.471,0-.743.147-.743.662v.824H64.7v.853h-1.14v5.046h-.971V51.64Z" transform="translate(-16.29 -48.44)" fill="#8dc3e7"/>
                            <path id="Path_3869" data-name="Path 3869" d="M76.3,55.611a2.364,2.364,0,0,1-2.523,2.008c-1.883,0-2.773-1.317-2.832-3.1a2.837,2.837,0,0,1,2.773-3.075c2.089,0,2.729,1.949,2.67,3.376H71.972a1.736,1.736,0,0,0,1.839,1.942,1.4,1.4,0,0,0,1.53-1.155H76.3Zm-.934-1.648a1.7,1.7,0,0,0-1.7-1.67,1.673,1.673,0,0,0-1.692,1.67Z" transform="translate(-18.762 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3870" data-name="Path 3870" d="M81.111,54.425l-2.052-2.8H80.3L81.715,53.7l1.471-2.067h1.162l-2.03,2.714,2.288,3.185H83.362l-1.648-2.442-1.648,2.442H78.89Z" transform="translate(-20.862 -49.284)" fill="#8dc3e7"/>
                            <path id="Path_3871" data-name="Path 3871" d="M91.71,53.477A1.365,1.365,0,0,0,90.246,52.3c-1.4,0-1.839,1.118-1.839,2.31,0,1.1.493,2.155,1.721,2.155a1.509,1.509,0,0,0,1.618-1.442h.993a2.435,2.435,0,0,1-2.6,2.295c-1.8,0-2.766-1.243-2.766-3.016s.912-3.163,2.788-3.163A2.26,2.26,0,0,1,92.7,53.47H91.71Z" transform="translate(-23.105 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3872" data-name="Path 3872" d="M101.1,55.611a2.364,2.364,0,0,1-2.523,2.008c-1.883,0-2.773-1.317-2.832-3.1a2.837,2.837,0,0,1,2.773-3.075c2.089,0,2.729,1.949,2.67,3.376H96.772a1.739,1.739,0,0,0,1.839,1.942,1.4,1.4,0,0,0,1.53-1.155h.964Zm-.934-1.648a1.7,1.7,0,0,0-1.7-1.67,1.673,1.673,0,0,0-1.692,1.67Z" transform="translate(-25.321 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3873" data-name="Path 3873" d="M104.63,48.57h.971v8.15h-.971Z" transform="translate(-27.669 -48.474)" fill="#8dc3e7"/>
                            <path id="Path_3874" data-name="Path 3874" d="M108.11,48.57h.971v8.15h-.971Z" transform="translate(-28.589 -48.474)" fill="#8dc3e7"/>
                            <path id="Path_3875" data-name="Path 3875" d="M116.425,55.611a2.369,2.369,0,0,1-2.523,2.008c-1.883,0-2.773-1.317-2.832-3.1a2.837,2.837,0,0,1,2.773-3.075c2.089,0,2.729,1.949,2.67,3.376h-4.421a1.739,1.739,0,0,0,1.839,1.942,1.4,1.4,0,0,0,1.53-1.155h.964Zm-.934-1.648a1.7,1.7,0,0,0-1.7-1.67,1.673,1.673,0,0,0-1.692,1.67Z" transform="translate(-29.372 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3876" data-name="Path 3876" d="M119.87,51.58h.912v.934h.022a2.035,2.035,0,0,1,1.92-1.074c1.552,0,2.03.89,2.03,2.155v3.884h-.971V53.485a1.111,1.111,0,0,0-1.2-1.192,1.654,1.654,0,0,0-1.743,1.846v3.332h-.971Z" transform="translate(-31.699 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3877" data-name="Path 3877" d="M132.42,53.477a1.369,1.369,0,0,0-1.464-1.177c-1.4,0-1.839,1.118-1.839,2.31,0,1.1.493,2.155,1.721,2.155a1.509,1.509,0,0,0,1.618-1.442h.993a2.444,2.444,0,0,1-2.6,2.295c-1.8,0-2.766-1.243-2.766-3.016s.912-3.163,2.788-3.163a2.26,2.26,0,0,1,2.545,2.03h-.993Z" transform="translate(-33.87 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3878" data-name="Path 3878" d="M141.815,55.611a2.369,2.369,0,0,1-2.523,2.008c-1.883,0-2.773-1.317-2.832-3.1a2.837,2.837,0,0,1,2.773-3.075c2.089,0,2.729,1.949,2.67,3.376h-4.421a1.739,1.739,0,0,0,1.839,1.942,1.4,1.4,0,0,0,1.53-1.155h.964Zm-.934-1.648a1.7,1.7,0,0,0-1.7-1.67,1.673,1.673,0,0,0-1.692,1.67Z" transform="translate(-36.086 -49.233)" fill="#8dc3e7"/>
                            <path id="Path_3879" data-name="Path 3879" d="M145.56,57.93h1.265V59.2H145.56Z" transform="translate(-38.493 -50.95)" fill="#8dc3e7"/>
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
