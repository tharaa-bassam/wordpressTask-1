<?php
/**
 * BoostUp Business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage BoostUp Business
 * @since BoostUp Business 1.0
 */


if ( ! function_exists( 'boostup_business_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since BoostUp Business 1.0
	 *
	 * @return void
	 */
	function boostup_business_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'boostup_business_support' );

/**
 * Enqueue scripts and styles.
 */
function boostup_business_scripts() {

	// Main style.
	wp_enqueue_style( 'boostup-business-style', get_template_directory_uri() . '/style.css', array(), '1.0.2' );

}
add_action( 'wp_enqueue_scripts', 'boostup_business_scripts' );
