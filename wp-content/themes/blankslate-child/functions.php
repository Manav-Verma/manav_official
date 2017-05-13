<?php

add_action( 'wp_enqueue_scripts', 'my_custom_styles' );
add_filter('show_admin_bar', '__return_false');
function my_custom_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri().'/style.css' );
    
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'meanmenu', get_stylesheet_directory_uri().'/css/meanmenu.min.css');
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery.js');
    wp_enqueue_script( 'meanmenu-js', get_stylesheet_directory_uri().'/js/jquery.meanmenu.min.js');
    wp_enqueue_script( 'countdown-js', get_stylesheet_directory_uri().'/js/jquery.countdown.min.js');    
    wp_enqueue_script( 'jquery-custom', get_stylesheet_directory_uri().'/js/custom.js');
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/css/style.css',
        array( $parent_style ),wp_get_theme()->get('Version')   );
}






?>



