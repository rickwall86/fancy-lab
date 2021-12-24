<?php

/**
 * Fancy Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */

 function fancyLabScripts(){
 	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
 	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all' );
 	wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
 }
 add_action( 'wp_enqueue_scripts', 'fancyLabScripts' );

 function fancyLabConfig() {
	 register_nav_menus(array(
		'fancy_nav_primary_menu' => 'Fancy Lab Main Menu',
		'fancy_lab_secondary_menu' => 'Fancy Lab Secondary Menu'
	 ));
 }

 add_action('after_setup_theme', 'fancyLabConfig');