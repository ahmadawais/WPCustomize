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
