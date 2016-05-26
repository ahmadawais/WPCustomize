<?php
/**
 * Panel: WPCustomize
 *
 * Basic Customizer panel with basic controls.
 *
 * @since 	1.0.0
 * @package WPc
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Customize function.
if ( ! function_exists( 'wpc_panel_wpcustomize' ) ) {
	// Customize Register action.
	add_action( 'customize_register', 'wpc_panel_wpcustomize' );

	/**
	 * Customize Panel.
	 *
	 * Adds a Panel, Section with basic controls.
	 *
	 * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
	 * @since  1.0.0
	 */
	function wpc_panel_wpcustomize( $wp_customize ) {
		// Panel: Basic.
		$wp_customize->add_panel( 'wpc_panel_wpcustomize', array(
			'priority'       => 10,
			'title'          => __( 'WPCustomize Panel Title', 'WPC' ),
			'description'    => __( 'Panel Description', 'WPC' ),
			'capability'     => 'edit_theme_options'
		) );
	}
}
