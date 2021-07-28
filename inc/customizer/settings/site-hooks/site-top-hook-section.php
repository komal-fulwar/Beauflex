<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Enable Top Hook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-top-hook]', array(
			'default'           => iva_get_option( 'enable-top-hook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-top-hook]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Top Hook', 'iva'),
				'section' => 'site-top-hook-section',
				'description' => esc_html__('YES! to enable top hook.', 'iva'),
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Top Hook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[top-hook]', array(
			'default'           => iva_get_option( 'top-hook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_html' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[top-hook]', array(
				'type'    	  => 'textarea',
				'section'     => 'site-top-hook-section',
				'label'       => esc_html__( 'Top Hook', 'iva' ),
				'description' => sprintf( esc_html__('Paste your top hook, Executes after the opening %s tag.', 'iva'), '&lt;body&gt;')
			)
		)
	);