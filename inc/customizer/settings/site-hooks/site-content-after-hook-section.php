<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Enable Content After Hook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-content-after-hook]', array(
			'default'           => iva_get_option( 'enable-content-after-hook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-content-after-hook]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Content After Hook', 'iva'),
				'section' => 'site-content-after-hook-section',
				'description' => esc_html__('YES! to enable content after hook.', 'iva'),
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Content After Hook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[content-after-hook]', array(
			'default'           => iva_get_option( 'content-after-hook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_html' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[content-after-hook]', array(
				'type'    	  => 'textarea',
				'section'     => 'site-content-after-hook-section',
				'label'       => esc_html__( 'Content After Hook', 'iva' ),
				'description' => sprintf( esc_html__('Paste your content after hook, Executes after the closing %s tag.', 'iva'), '&lt;/#main&gt;' ),
			)
		)
	);