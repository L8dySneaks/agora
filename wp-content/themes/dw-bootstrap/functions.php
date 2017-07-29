<?php
function dw_bootstrap_enqueue_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );

    wp_enqueue_script( 'html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js' );
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}

add_action( 'wp_enqueue_scripts', 'dw_bootstrap_enqueue_scripts' );
