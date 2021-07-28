<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Breadcrumb Title Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-title-color]', array(
			'default'           => iva_get_option( 'breadcrumb-title-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-title-color]', array(
				'label'   => esc_html__( 'Title Color', 'iva' ),
				'section' => 'site-breadcrumb-color-section',
			)
		)
	);

/**
 * Option : Breadcrumb Text Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-text-color]', array(
			'default'           => iva_get_option( 'breadcrumb-text-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-text-color]', array(
				'label'   => esc_html__( 'Text Color', 'iva' ),
				'section' => 'site-breadcrumb-color-section',
			)
		)
	);

/**
 * Option : Breadcrumb Link Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-link-color]', array(
			'default'           => iva_get_option( 'breadcrumb-link-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-link-color]', array(
				'label'   => esc_html__( 'Link Color', 'iva' ),
				'section' => 'site-breadcrumb-color-section',
			)
		)
	);

/**
 * Option : Breadcrumb Link Hover Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-link-h-color]', array(
			'default'           => iva_get_option( 'breadcrumb-link-h-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-link-h-color]', array(
				'label'   => esc_html__( 'Link Hover Color', 'iva' ),
				'section' => 'site-breadcrumb-color-section',
			)
		)
	);

	/**
	 * Divider
	 */	
	$wp_customize->add_control(
		new IVA_Customize_Control_Separator(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-link-h-color-bottom-separator]', array(
				'type'     => 'dt-separator',
				'section'  => 'site-breadcrumb-color-section',
				'settings' => array(),
			)
		)
	);

/**
 * Option : Breadcrumb Background
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-bg]', array(
			'default'           => iva_get_option( 'breadcrumb-bg' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_background_obj' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Background(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-bg]', array(
				'type'    => 'dt-background',
				'section' => 'site-breadcrumb-color-section',
				'description' => esc_html__('"Background Position" option won\'t work for "Parallax".', 'iva'),
				'label'   => esc_html__( 'Background', 'iva' ),
			)
		)		
	);

/**
 * Option : Overlay Breadcrumb Background Color
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-overlay-bg-color]', array(
			'default'           => iva_get_option( 'breadcrumb-overlay-bg-color' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_checkbox' ),
		)
	);

	$wp_customize->add_control(
		IVA_THEME_SETTINGS . '[breadcrumb-overlay-bg-color]', array(
			'section' => 'site-breadcrumb-color-section',
			'label'   => esc_html__( 'Overlay Background Color', 'iva' ),
			'type'    => 'checkbox',
		)
	);

/**
 * Option : Parallax Breadcrumb Background
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-parallax-bg]', array(
			'default'           => iva_get_option( 'breadcrumb-parallax-bg' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_checkbox' ),
		)
	);

	$wp_customize->add_control(
		IVA_THEME_SETTINGS . '[breadcrumb-parallax-bg]', array(
			'section' => 'site-breadcrumb-color-section',
			'label'   => esc_html__( 'Parallax Background', 'iva' ),
			'type'    => 'checkbox',
		)
	);