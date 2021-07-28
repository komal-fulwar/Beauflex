<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option :H5 Typo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h5-typo]', array(
			'default'           =>  iva_get_option( 'h5-typo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Typography(
			$wp_customize, IVA_THEME_SETTINGS . '[h5-typo]', array(
				'type'    => 'dt-typography',
				'section' => 'site-h5-section',
				'label'   => esc_html__( 'H5 Tag', 'iva'),
			)
		)
	);

/**
 * Option : H5 Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[h5-color]', array(
			'default'           =>  iva_get_option( 'h5-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[h5-color]', array(
				'label'   => esc_html__( 'Color', 'iva' ),
				'section' => 'site-h5-section',
			)
		)
	);	