<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option :H6 Typo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h6-typo]', array(
			'default'           =>  iva_get_option( 'h6-typo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' )
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Typography(
			$wp_customize, IVA_THEME_SETTINGS . '[h6-typo]', array(
				'type'    => 'dt-typography',
				'section' => 'site-h6-section',
				'label'   => esc_html__( 'H6 Tag', 'iva'),
			)
		)
	);

/**
 * Option : H6 Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h6-color]', array(
			'default'           => iva_get_option( 'h6-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[h6-color]', array(
				'label'   => esc_html__( 'Color', 'iva' ),
				'section' => 'site-h6-section',
			)
		)
	);	