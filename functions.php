<?php
/**
 * Aqwind functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aqwind
 */

function aqwind_theme_scripts() {

	//Aqwind style register
    wp_register_style( 'aqwind_style', get_stylesheet_uri(), array(), filemtime(get_template_directory_uri() . '/style.css') );
    wp_register_style( 'bootstrap_style', get_template_directory_uri() .'/assets/library/css/bootstrap.min.css', array(), false ); 

    //Aqwind script register
    wp_register_script( 'aqwind_script', get_template_directory_uri() . '/assets/js/script.js', array(), filemtime(get_template_directory_uri() . '/assets/js/script.js'), true );
    wp_register_script( 'bootstrap_script', get_template_directory_uri() . '/assets/library/css/bootstrap.min.js', array('jquery'), filemtime(get_template_directory_uri() . '/assets/js/script.js'), false, true );

    //Aqwind style enqueue
    wp_enqueue_style('aqwind_style');
    wp_enqueue_style('bootstrap_style');

    //Aqwind script enqueue
    wp_enqueue_script('aqwind_script');
    wp_enqueue_script('bootstrap_script');
}
add_action( 'wp_enqueue_scripts', 'aqwind_theme_scripts' );