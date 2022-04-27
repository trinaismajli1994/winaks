<?php

function scripts() {
    wp_register_style('style', get_template_directory_uri() . '/dist/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');
    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
}
add_theme_support('post-thumbnails');
register_nav_menus( array(
	'main_menu' => 'Navigation Menu',
    'footer_menu' => 'Footer Menu',
) );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function winaks_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'winaks' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'winaks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'winaks' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'winaks' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'winaks' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'winaks' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
        'name'          => esc_html__( 'Social Media Footer', 'winaks' ),
        'id'            => 'social-media',
        'description'   => esc_html__( 'Add widgets here.', 'winaks' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<p class="widget-title">',
        'after_title'   => '</p>',
	) );

}
add_action( 'widgets_init', 'winaks_widgets_init' );

function theme_prefix_setup() {	
	add_theme_support( 'custom-logo', array(
		'height'      => 35,
		'width'       => 190,
		'flex-width' => true,
	) );
	add_theme_support( 'product-thumb', array(
		'height'      => 160,
		'width'       => 255,
		'flex-width' => true,
	) );
    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

define( 'LIBS_DIR', THEME_DIR);
define( 'LIBS_URI', THEME_URI);

add_action('wp_enqueue_scripts', 'scripts');