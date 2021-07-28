<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option :H1 Typo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h1-typo]', array(
			'default'           =>  iva_get_option( 'h1-typo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Typography(
			$wp_customize, IVA_THEME_SETTINGS . '[h1-typo]', array(
				'type'    => 'dt-typography',
				'section' => 'site-h1-section',
				'label'   => esc_html__( 'H1 Tag', 'iva'),
			)
		)
	);

/**
 * Option : H1 Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h1-color]', array(
			'default'           => iva_get_option( 'h1-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[h1-color]', array(
				'label'   => esc_html__( 'Color', 'iva' ),
				'section' => 'site-h1-section',
			)
		)
	);	