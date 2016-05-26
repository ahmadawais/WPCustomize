<?php
/**
 * Panel: Basic
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
if ( ! function_exists( 'wpc_customize_panel_basic' ) ) {
	// Customize Register action.
	add_action( 'customize_register', 'wpc_customize_panel_basic' );

	/**
	 * Customize Panel.
	 *
	 * Adds a Panel, Section with basic controls.
	 *
	 * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
	 * @since  1.0.0
	 */
	function wpc_customize_panel_basic( $wp_customize ) {
		// Panel: Basic.
		$wp_customize->add_panel( 'wpc_panel_basic', array(
			'priority'       => 10,
			'title'          => __( 'Panel Title', 'WPC' ),
			'description'    => __( 'Panel Description', 'WPC' ),
			'capability'     => 'edit_theme_options'
		) );

		// Section: Basic.
		$wp_customize->add_section( 'wpc_section_basic', array(
			'priority'       => 10,
			'panel'          => 'wpc_panel_basic',
			'title'          => __( 'Section Title', 'WPC' ),
			'description'    => __( 'Section Description.', 'WPC' ),
			'capability'     => 'edit_theme_options'
		) );

		// Setting: Text.
		$wp_customize->add_setting( 'wpc_text', array(
			'type'                 => 'theme_mod',
			'default'              => 'Placeholder.',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'esc_attr'
		) );

		// Control: Text.
		$wp_customize->add_control( 'wpc_text', array(
			'label'       => __( 'Text', 'WPC' ),
			'description' => __( 'Description', 'WPC' ),
			'section'     => 'wpc_section_basic',
			'type'        => 'text',
		) );
	}
}
