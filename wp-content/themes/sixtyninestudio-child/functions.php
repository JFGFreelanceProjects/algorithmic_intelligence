<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'custom_js');
function custom_js() {
    wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/js/al.js', array( 'jquery' ), '1.0', true ); //circle animations
}

add_action('wp_enqueue_scripts', 'custom_css');
function custom_css() {
    wp_enqueue_style( 'al', get_stylesheet_directory_uri() . '/css/al.css' ); //circle animations
}