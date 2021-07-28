<?php
/**
 * Site Skin Main Section
 */
$wp_customize->add_section( 
	new IVA_WP_Customize_Section(
		$wp_customize,
		'site-skin-main-section',
		array(
			'title'    => esc_html__('Site Skin', 'iva'),
			'priority' => 10
		)
	)
);


/**
 * Option : Primary Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[primary-color]', array(
			'default'           => iva_get_option( 'primary-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control_Color(
		$wp_customize, IVA_THEME_SETTINGS . '[primary-color]', array(
			'label'   => esc_html__( 'Primary Color', 'iva' ),
			'section' => 'site-skin-main-section',
		)
	));

/**
 * Option : Secondary Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[secondary-color]', array(
			'default'           => iva_get_option( 'secondary-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control_Color(
		$wp_customize, IVA_THEME_SETTINGS . '[secondary-color]', array(
			'label'   => esc_html__( 'Secondary Color', 'iva' ),
			'section' => 'site-skin-main-section',
		)
	));

/**
 * Option : Tertiary Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[tertiary-color]', array(
			'default'           => iva_get_option( 'tertiary-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control_Color(
		$wp_customize, IVA_THEME_SETTINGS . '[tertiary-color]', array(
			'label'   => esc_html__( 'Tertiary Color', 'iva' ),
			'section' => 'site-skin-main-section',
		)
	));
	
/**
 * Option :  Body BG Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[body-bg-color]', array(
			'default'           => iva_get_option( 'body-bg-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control_Color(
		$wp_customize, IVA_THEME_SETTINGS . '[body-bg-color]', array(
			'label'   => esc_html__( 'Site BG Color', 'iva' ),
			'section' => 'site-skin-main-section',
		)
	));