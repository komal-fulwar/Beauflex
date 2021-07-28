<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Breadcrumb Show
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[show-breadcrumb]', array(
			'default'           => iva_get_option( 'show-breadcrumb' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[show-breadcrumb]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Show Breadcrumb', 'iva'),
				'section' => 'site-breadcrumb-container-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Apply Dark Background for Breadcrumb
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[apply-dark-bg-breadcrumb]', array(
			'default'           => iva_get_option( 'apply-dark-bg-breadcrumb' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[apply-dark-bg-breadcrumb]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Dark BG?', 'iva'),
				'description'   => esc_html__( 'Apply dark background class for your bredcrumb.', 'iva'),
				'section' => 'site-breadcrumb-container-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);	

/**
 * Option : Breadcrumb Style
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-style]', array(
			'default'           => iva_get_option( 'breadcrumb-style' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control(
		IVA_THEME_SETTINGS . '[breadcrumb-style]', array(
			'type'    => 'select',
			'section' => 'site-breadcrumb-container-section',
			'label'   => esc_html__( 'Style', 'iva' ),
			'choices' => array(
				'default'                           => esc_html__('Default', 'iva'),
				'aligncenter'                       => esc_html__('Align Center', 'iva'),
				'alignright'                        => esc_html__('Align Right', 'iva'),
				'breadcrumb-left'                   => esc_html__('Left Side Breadcrumb', 'iva'),
				'breadcrumb-right'                  => esc_html__('Right Side Breadcrumb', 'iva'),
				'breadcrumb-top-right-title-center' => esc_html__('Top Right Title Center', 'iva'),
				'breadcrumb-top-left-title-center'  => esc_html__('Top Left Title Center', 'iva'),
			)
		)
	);

/**
 * Option : Breadcrumb Position
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-position]', array(
			'default'           => iva_get_option( 'breadcrumb-position' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control(
		IVA_THEME_SETTINGS . '[breadcrumb-position]', array(
			'type'    => 'select',
			'section' => 'site-breadcrumb-container-section',
			'label'   => esc_html__( 'Position', 'iva' ),
			'choices' => array(
				'header-top-absolute' => esc_html__('Behind the Header','iva'),
				'header-top-relative' => esc_html__('Default','iva'),
			)
		)
	);

/**
 *  Option : Change Breadcrumb Delimiter
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[change-breadcrumb-delimiter]', array (
			'default'           => iva_get_option( 'change-breadcrumb-delimiter' ),
			'type'              => 'option',
			'sanitize_callback' => array ( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[change-breadcrumb-delimiter]', array (
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Change Breadcrumb Delimiter', 'iva'),
				'description'   => esc_html__( 'If you wish you can enable to change the delimiter for your bredcrumb.', 'iva'),
				'section' => 'site-breadcrumb-container-section',
				'choices' => array (
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Breadcrumb Delimiter
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[breadcrumb-delimiter]', array(
			'default'   => iva_get_option( 'breadcrumb-delimiter' ),
			'type'      => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),			
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Fontawesome(
			$wp_customize, IVA_THEME_SETTINGS . '[breadcrumb-delimiter]', array(
				'type'    => 'dt-fontawesome',
				'section' => 'site-breadcrumb-container-section',
				'label'   => esc_html__( 'Breadcrumb Delimiter', 'iva'),
				'dependency' => array ( 'change-breadcrumb-delimiter', '==', '1' )				
			)
		)
	);