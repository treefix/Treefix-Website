<?php

function treefix_setup() {
	/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on treefix, use a find and replace
		 * to change 'treefix' to the name of your theme in all the template files.
		 */
	load_theme_textdomain('treefix', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');


	//Let wordpress manage document title
	add_theme_support('title-tag');

	//enable support for post thumbnails
	add_theme_support('post-thumbnails');

	//Register Menus
	register_nav_menus(array(
		'Primary' => esc_html__('Primary', 'treefix'),
	));

	/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
	add_theme_support('html5', array(
		'search form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action('after_setup_theme', 'treefix_setup');



add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );



wp_enqueue_script('bootstrap-slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
wp_enqueue_script('bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('custom-scripts', get_template_directory_uri() .'/js/custom-scripts.js');

}
?>