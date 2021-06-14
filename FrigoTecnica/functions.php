<?php

function enableCSS(){
		
	//inserisce css
	wp_enqueue_style('styleCSS', get_template_directory_uri() . '/style.css');
		
	}
add_action('wp_enqueue_scripts', 'enableCSS');


function enableImage(){
	add_theme_support("title-tag");
	
		// enable automatic feed links
		add_theme_support("automatic-feed-links");
	
		// enable featured image
		add_theme_support("post-thumbnails");
}
add_action('after_setup_theme', 'enableImage');


//delete margin top page (for admin topbar)
add_filter('show_admin_bar', '__return_false');


// add widget named Home right sidebar
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );





/**
 * Disable jQuery Migrate in WordPress.
 *
 * @author Guy Dumais.
 * @link https://en.guydumais.digital/disable-jquery-migrate-in-wordpress/
 */
add_filter( 'wp_default_scripts', $af = static function( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }    
}, PHP_INT_MAX );
unset( $af );





?>