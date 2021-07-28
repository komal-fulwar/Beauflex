<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Site Title Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[site-title-color]', array(
			'default'           => iva_get_option( 'site-title-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[site-title-color]', array(
				'label'   => esc_html__( 'Site Title Color', 'iva' ),
				'section' => 'site-identity-color-section',
			)
		)
	);

/**
 * Option : Site Title Hover Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[site-title-h-color]', array(
			'default'           => iva_get_option( 'site-title-h-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[site-title-h-color]', array(
				'label'   => esc_html__( 'Site Title Hover Color', 'iva' ),
				'section' => 'site-identity-color-section',
			)
		)
	);

/**
 * Option : Site Tagline Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[site-tagline-color]', array(
			'default'           => iva_get_option( 'site-tagline-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[site-tagline-color]', array(
				'label'   => esc_html__( 'Site Tagline Color', 'iva' ),
				'section' => 'site-identity-color-section',
			)
		)
	);