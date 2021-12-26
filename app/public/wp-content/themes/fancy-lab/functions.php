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
	wp_enqueue_style('style', get_template_directory_uri() . '/dist/app.css', array(), '1.0', 'all');
	wp_enqueue_script('app', get_template_directory_uri() . '/dist/app.js', array(), '1.0', true);


 }
 add_action( 'wp_enqueue_scripts', 'fancyLabScripts' );

 function fancyLabConfig() {
	 register_nav_menus(array(
		'fancy_nav_primary_menu' => 'Fancy Lab Main Menu',
		'fancy_lab_footer_menu' => 'Fancy Lab Footer Menu'
	 ));
		// adding theme support for woocommerce
	 add_theme_support('woocommerce', array(
		 'thumbnail_image_width' => 255,
		 'single_image_width' => 255,
		 'product_grid' => array(
			 'default_rows' => 10,
			 'min_rows' => 5,
			 'max_rows' => 10,
			 'default_columns' => 1,
			 'min_columns' => 1, // the options set here can be changed by the user from the appearance -> customize section of the backend
			 'max_columns' => 6
		 )
	 ));
	 // theme support for product page image gallery
	 add_theme_support('wc-product-gallery-zoom');
	 add_theme_support('wc-product-gallery-lightbox');
	 add_theme_support('wc-product-gallery-slider');

	 if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}

	 // Adding logo
	 add_theme_support('custom_logo', array(
		 'height' => 200,
		 'width' => 280,
		 'flex-height' => true,
		 'flex-width' => true,
		 'unlink-homepage-logo' => false
	 ));
 }

 add_action('after_setup_theme', 'fancyLabConfig', 0);

require get_template_directory() . '/inc/wc-modifications.php';