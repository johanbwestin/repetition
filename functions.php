<?php
include('custom-shortcodes.php');

add_theme_support( 'post-thumbnails' );

function wpdocs_theme_name_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
  register_nav_menus( array(
    'main_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu',
  ) );
}
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}