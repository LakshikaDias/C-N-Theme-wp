<?php
//Silence is golden
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
function ld_resources(){
    wp_register_style('bootstrap-style',
    '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_register_style('stylesheet',get_stylesheet_uri());

    wp_enqueue_style('bootstrap-style');
    wp_enqueue_style('stylesheet');

    wp_register_script('popper-js','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    wp_register_script('bootstrap-js','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'ld_resources');



//after setup theme

function ld_setup(){
     add_theme_support('title-tag');
     add_theme_support('post-thumbnails');

     //Menu
     register_nav_menus(
         array(
             'primary'     =>    __('Main Menu', 'ld'),
             'footer'      =>    __('Footer Menu', 'ld'),
         )
     );
}

add_action('after_setup_theme', 'ld_setup');