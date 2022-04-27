<?php get_header();?>
<div class="clearfix height50"></div>
<section class="fullwidth">
    <div class="container animated fadeInUp go">
        <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); 
                    the_content();
                } 
            } 
        ?>
    </div>
</section>
<div class="clearfix height50"></div>
<?php get_footer(); ?>