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

