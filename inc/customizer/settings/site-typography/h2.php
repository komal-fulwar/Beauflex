<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option :H2 Typo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h2-typo]', array(
			'default'           =>  iva_get_option( 'h2-typo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Typography(
			$wp_customize, IVA_THEME_SETTINGS . '[h2-typo]', array(
				'type'    => 'dt-typography',
				'section' => 'site-h2-section',
				'label'   => esc_html__( 'H2 Tag', 'iva'),
			)
		)
	);

/**
 * Option : H2 Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h2-color]', array(
			'default'           => iva_get_option( 'h2-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[h2-color]', array(
				'label'   => esc_html__( 'Color', 'iva' ),
				'section' => 'site-h2-section',
			)
		)
	);	