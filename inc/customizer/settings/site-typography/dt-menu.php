<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option :Menu Typo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[menu-typo]', array(
			'default'           =>  iva_get_option( 'menu-typo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Typography(
			$wp_customize, IVA_THEME_SETTINGS . '[menu-typo]', array(
				'type'    => 'dt-typography',
				'section' => 'site-menu-section',
				'label'   => esc_html__( 'Menu', 'iva'),
			)
		)
	);

/**
 * Option : Menu Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[menu-color]', array(
			'default'           => iva_get_option( 'menu-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[menu-color]', array(
				'label'   => esc_html__( 'Color', 'iva' ),
				'section' => 'site-menu-section',
			)
		)
	);