<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Enable Content Before Hook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-content-before-hook]', array(
			'default'           => iva_get_option( 'enable-content-before-hook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-content-before-hook]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Content Before Hook', 'iva'),
				'section' => 'site-content-before-hook-section',
				'description' => esc_html__('YES! to enable content before hook.', 'iva'),
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Content Before Hook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[content-before-hook]', array(
			'default'           => iva_get_option( 'content-before-hook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_html' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[content-before-hook]', array(
				'type'    	  => 'textarea',
				'section'     => 'site-content-before-hook-section',
				'label'       => esc_html__( 'Content Before Hook', 'iva' ),
				'description' => sprintf( esc_html__('Paste your content before hook, Executes before the opening %s tag.', 'iva'), '&lt;#primary&gt;' )
			)
		)
	);