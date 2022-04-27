<?php 
/* Template Name: About Us */ 
get_header();
    $description = get_field('description'); 
    $image = get_field('image');
?>
<main id="primary">
    <div class="container-fluid">
        <?php
            while ( have_posts() ) :
            the_post(); ?>
            <section class="about">
                    <div class="row animatedParent animateOnce" data-sequence="500">
                        <div class="col-lg-6">
                            <h2 class="animated fadeInLeft go" data-id="1"><?php the_title(); ?></h2>
                            <h4 class="animated fadeInLeft go" data-id="2"><?php echo $description ?></h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-image animated fadeInRight go" data-id="3" style="background-image: url('<?php echo $image['url']?>" alt="<?php echo $image['alt']?>');"></div>
                        </div>
                    </div>
            </section>
        <?php
        endwhile; 
        ?>
    </div>
</main>    
<?php get_footer(); ?>