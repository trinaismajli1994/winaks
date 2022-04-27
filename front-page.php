<?php 
/* Template Name: Front Page */ 
 get_header();
    $banner_image = get_field('banner'); 
    $banner_title = get_field('titulli');
    $company_first_row = get_field('company_first_row');
    $company_second_row = get_field('company_second_row');
    $sell_title = get_field('points');
    $locations = get_field('locations');
    $partner_first_title = get_field('partner_first_title');
    $partners = get_field('partners');
?>
<main id="primary" class="home">
    <div class="container-fluid">
        <?php
            while ( have_posts() ) :
            the_post(); ?>
            <section class="section" id="sec1">
                    <div class="row">
                        <div class="banner animatedParent animateOnce" style="background-image: url('<?php echo $banner_image['url']?>" alt="<?php echo $banner_image['alt']?>');">
                            <h2 class="animated fadeInUp go"><?php echo $banner_title ?></h2>
                        </div>
                    </div>
            </section>
            <section class="section" id="sec2">
                <div class="row">
                    <div class="circular-animation-container">
                        <div class="circular-animation-starter animation-block">
                            <div class="container-wrapper animation-items-multiplier">
                                <?php foreach ($company_first_row as $cf): ?>
                                <div class="animation-block">
                                    <a target ="<?php echo $cf['company_link']['target']?>" href="<?php echo $cf['company_link']['url']?>"><?php echo $cf['company_link']['title'] ?></a>
                                </div>
                                <?php endforeach;?>        
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="circular-animation-container1">
                        <div class="circular-animation-starter1 animation-block1">
                            <div class="container-wrapper1 animation-items-multiplier1">
                                <?php foreach ($company_second_row as $cs): ?>
                                <div class="animation-block1">
                                    <a target ="<?php echo $cs['company_second_link']['target']?>" href="<?php echo $cs['company_second_link']['url']?>"><?php echo $cs['company_second_link']['title'] ?></a>
                                </div>
                                <?php endforeach;?>        
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row relative animatedParent animateOnce" data-sequence="500" id="points">
                    <div class="points">
                        <h4 class="animated growIn slow" data-id="1"><?php echo $sell_title?></h4>
                    </div>
                    <?php foreach ($locations as $lc): ?>
                    <div class="selling-point">
                        <h2 class="animated growIn slow" data-id="2"><?php echo $lc['city']?></h2>
                        <div class="point-description hidden">
                            <div class="location">
                                <p><?php echo $lc['address']?></p>   
                            </div>
                            <div class="phone-number">
                                <a class="numb" href="tel:+<?php echo $lc['phone_number']?>"><?php echo $lc['phone_number']?></a>
                            </div>
                            <?php if($lc['mobile_number']): ?>
                            <div class="mobile-number">
                                <a class="numb" href="tel:+<?php echo $lc['mobile_number']?>"><?php echo $lc['mobile_number']?></a>
                            </div>
                            <?php endif;
                            ?> 
                        </div>
                    </div>
                    <?php endforeach;?> 
                </div>               
            </section>
            <section class="section" id="sec3">
                <div class="row animatedParent animateOnce" data-sequence="500">
                    <div class="black-bg">
                        <div class="our-partners">
                            <div class="scroll-top">
                                <a href="#top">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                                        <g id="Group_869" data-name="Group 869" transform="translate(-1714 -2239)">
                                            <g id="Rectangle_25" data-name="Rectangle 25" transform="translate(1714 2239)" fill="none" stroke="#fff" stroke-width="1.5">
                                            <rect width="44" height="44" stroke="none"/>
                                            <rect x="0.75" y="0.75" width="42.5" height="42.5" fill="none"/>
                                            </g>
                                            <g id="Layer_2" data-name="Layer 2" transform="translate(1719 2277.769) rotate(-90)">
                                            <g id="chevron-right" transform="translate(0 0)">
                                                <rect id="Rectangle_26" data-name="Rectangle 26" width="34" height="34" transform="translate(-0.231 34) rotate(-90)" fill="#fff" opacity="0"/>
                                                <path id="Path_3684" data-name="Path 3684" d="M1.438,14.317A1.429,1.429,0,0,1,.423,11.873l4.731-4.7L.609,2.438A1.43,1.43,0,1,1,2.638.423L8.156,6.141a1.429,1.429,0,0,1,0,2L2.438,13.86A1.429,1.429,0,0,1,1.438,14.317Z" transform="translate(13.474 9.83)" fill="#fff"/>
                                            </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <h3 class="animated fadeInLeft slow" data-id="1"><?php echo $partner_first_title ?></h3>
                            <ul>
                                <?php foreach ($partners as $pt): ?>
                                    <li class="animated fadeInUp slow" data-id="2">
                                        <a target ="<?php echo $pt['partner_link']['target']?>" href="<?php echo $pt['partner_link']['url']?>">
                                            <img alt="<?php echo $pt['partner_logo']['alt'] ?>" src="<?php echo $pt['partner_logo']['url'] ?>">
                                        </a>
                                    </li>
                                <?php endforeach;?>      
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        endwhile; 
        ?>
    </div>
</main>    
<?php get_footer(); ?>