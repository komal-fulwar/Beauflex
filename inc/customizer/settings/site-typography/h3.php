<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option :H3 Typo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h3-typo]', array(
			'default'           =>  iva_get_option( 'h3-typo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Typography(
			$wp_customize, IVA_THEME_SETTINGS . '[h3-typo]', array(
				'type'    => 'dt-typography',
				'section' => 'site-h3-section',
				'label'   => esc_html__( 'H3 Tag', 'iva'),
			)
		)
	);

/**
 * Option : H3 Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h3-color]', array(
			'default'           => iva_get_option( 'h3-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[h3-color]', array(
				'label'   => esc_html__( 'Color', 'iva' ),
				'section' => 'site-h3-section',
			)
		)
	);	