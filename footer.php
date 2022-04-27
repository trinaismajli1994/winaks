<footer>
	<div class="container-fluid">
        <div class="footer">
            <?php
                wp_nav_menu(array( 'menu' => 'footer',
                                    'menu_class' => 'footer-nav',
                                    'theme_location' => 'footer_menu'
                                ));
            ?>
            <p><?php _e('&copy; Winaks', 'winaks') ?> <?php echo date('Y'); ?><?php _e('. All rights reserved.', 'winaks') ?> </p>
            <?php dynamic_sidebar( 'social-media' ); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>