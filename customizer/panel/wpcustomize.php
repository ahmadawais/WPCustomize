<?php
/**
 * Panel: WPCustomize
 *
 * Customizer panel.
 *
 * @since 	1.0.0
 * @package WPc
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// Panel: WPCustomize.
$wp_customize->add_panel( 'wpc_panel_wpcustomize', array(
	'priority'       => 10,
	'title'          => __( 'WPCustomize Panle', 'WPC' ),
	'description'    => __( 'WPCustomize Panel Description', 'WPC' ),
	'capability'     => 'edit_theme_options'
) );
