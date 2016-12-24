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

/*function change_title($content){
    $new_content = $content . ' - new addition';
    return $new_content;
}
add_filter('the_title', 'change_title');*/

/*function change_content($content){
    return $content = 'Hello world';
}
add_filter('default_content', 'change_content');*/

function author_register($name){
    return ucwords($name);
}
add_filter('the_author', 'author_register');

/**
 * Activate nav menu
 */
function register_menu(){
    register_nav_menu('primary', 'Primary navigation menu');
}
add_action( 'after_setup_theme', 'register_menu' );