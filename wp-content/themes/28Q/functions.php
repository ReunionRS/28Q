<?php
/*
 * 28Q functions
 */

//style connect
function asset_connect() {
	wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('media_style', get_template_directory_uri() . '/assets/css/media.css');
	wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/script.js');
	wp_register_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
	wp_enqueue_style('font_awesome');
}

add_action('wp_enqueue_scripts', 'asset_connect');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>