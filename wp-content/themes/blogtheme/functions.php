<?php
function wp_template_path(){
	echo get_template_directory_uri();
}

function add_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

    wp_enqueue_style( 'modern-business', get_template_directory_uri() . '/css/modern-business.css' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );