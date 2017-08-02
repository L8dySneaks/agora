<?php
function dw_bootstrap_child_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' , array( 'bootstrap' ) );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style, 'bootstrap' ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/responsive.css' );
}

add_action( 'wp_enqueue_scripts', 'dw_bootstrap_child_enqueue_styles' );

register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'footer_menu' => 'Footer Menu',
) );


# Enqueue Custom Scripts
wp_enqueue_script('readmore', get_bloginfo('stylesheet_directory') . '/js/readmore.min.js', array('jquery'));
wp_enqueue_script('jquery-functions', get_bloginfo('stylesheet_directory') . '/js/functions.js', array('jquery'), '1.0.4');
wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
