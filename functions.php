<?php
/**
 * Created by IntelliJ IDEA.
 * User: goja288
 * Date: 11/06/18
 * Time: 07:30 PM
 */


function magnesium_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'magnesium-style', get_stylesheet_uri(), $dependencies );
}
add_action( 'wp_enqueue_scripts', 'magnesium_enqueue_styles' );

function magnesium_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '4.1.1', true );
}
add_action( 'wp_enqueue_scripts', 'magnesium_enqueue_scripts' );


function magnesium_wp_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'magnesium_wp_setup' );



?>