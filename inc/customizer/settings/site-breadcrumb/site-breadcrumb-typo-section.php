<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Breadcrumb Title Typo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-title-typo]', array(
			'default'           =>  iva_get_option( 'breadcrumb-title-typo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Typography(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-title-typo]', array(
				'type'    => 'dt-typography',
				'section' => 'site-breadcrumb-typography-section',
				'label'   => esc_html__( 'Title', 'iva'),
			)
		)
	);

	/**
	 * Divider : Breadcrumb Title Typo Bottom
	 */
	$wp_customize->add_control(
		new IVA_Customize_Control_Separator(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-title-typo-bottom-separator]', array(
				'type'     => 'dt-separator',
				'section'  => 'site-breadcrumb-typography-section',
				'settings' => array(),
			)
		)
	);		

/**
 * Option : Breadcrumb Typo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-typo]', array(
			'default'   =>  iva_get_option( 'breadcrumb-typo' ),
			'type'      => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),			
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Typography(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-typo]', array(
				'type'    => 'dt-typography',
				'section' => 'site-breadcrumb-typography-section',
				'label'   => esc_html__( 'Breadcrumb', 'iva'),
			)
		)
	);