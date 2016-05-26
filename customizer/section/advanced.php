<?php
/**
 * Section: Advanced
 *
 * Advanced Customizer section with default advanced controls.
 *
 * @since 	1.0.0
 * @package WPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Customize function.
if ( ! function_exists( 'wpc_section_advanced' ) ) {
	// Customize Register action.
	add_action( 'customize_register', 'wpc_section_advanced' );

	/**
	 * Customize Panel.
	 *
	 * Adds a Panel, Section with basic controls.
	 *
	 * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
	 * @since  1.0.0
	 */
	function wpc_section_advanced( $wp_customize ) {
		// Section: Advanced.
		$wp_customize->add_section( 'wpc_section_advanced', array(
			'priority'       => 20,
			'panel'          => 'wpc_panel_wpcustomize',
			'title'          => __( 'Advance Section Title', 'WPC' ),
			'description'    => __( 'Section Description.', 'WPC' ),
			'capability'     => 'edit_theme_options'
		) );

		// Setting: Image.
		$wp_customize->add_setting( 'wpc_image', array(
			'type'                 => 'theme_mod',
			'default'              => '/',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'wpc_sanitize_image' // Custom function in customizer-sanitization.php file.
		) );

		// Control: Image.
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'wpc_image',
			array(
				'label'      => __( 'Upload an image', 'WPC' ),
				'section'    => 'wpc_section_advanced'
			)
		) );

		// Setting: Upload.
		$wp_customize->add_setting( 'wpc_upload', array(
			'type'                 => 'theme_mod',
			'default'              => '/',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'wpc_sanitize_image' // Custom function in customizer-sanitization.php file.
		) );

		// Control: Upload.
		$wp_customize->add_control( new WP_Customize_Upload_Control(
			$wp_customize,
			'wpc_upload',
			array(
				'label'      => __( 'Upload!', 'WPC' ),
				'section'    => 'wpc_section_advanced'
			)
		) );

		// Setting: Color.
		$wp_customize->add_setting( 'wpc_color', array(
			'type'                 => 'theme_mod',
			'default'              => '#dedede',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'sanitize_hex_color'
		) );

		// Control: Color.
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'wpc_color',
			array(
				'label'      => __( 'Color Picker!', 'WPC' ),
				'section'    => 'wpc_section_advanced'
			)
		) );
	}
}
