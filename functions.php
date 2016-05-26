<?php
/**
 * Functions
 *
 * Theme Functions.
 *
 * @since 	1.0.0
 * @package WPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Global Constansts for Paths.
 *
 * @since  1.0.0
 */
if ( ! defined( 'WPC_DIR' ) ) {
    define( 'WPC_DIR', get_template_directory() );
}
if ( ! defined( 'WPC_URL' ) ) {
    define( 'WPC_URL', get_template_directory_uri() );
}


if ( ! function_exists( 'wpc_theme_styles' ) ) {
	// Add Theme Stylesheet.
	add_action( 'wp_enqueue_scripts', 'wpc_theme_styles' );

	/**
	 * WPC Theme styles enqueue.
	 *
	 * @since 1.0.0
	 */
	function wpc_theme_styles() {
		// Theme Styles.
		wp_enqueue_style(
			'wpc',
			WPC_URL . '/style.css',
			array(),
			'1.0.0',
			'all'
		);
	}
}


/**
 * Customize Init.
 *
 * WP Customize related stuff.
 *
 * @since 1.0.0
 */
if ( file_exists( WPC_DIR . '/customizer/wpc-init.php' ) ) {
    require_once( WPC_DIR . '/customizer/wpc-init.php' );
}
