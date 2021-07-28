<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Enable Tracking Code
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-analytics-code]', array(
			'default'           => iva_get_option( 'enable-analytics-code' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-analytics-code]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Tracking Code', 'iva'),
				'section' => 'site-tracking-code-section',
				'description' => esc_html__('YES! to enable site tracking code.', 'iva'),
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Tracking Code
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[analytics-code]', array(
			'default'           => iva_get_option( 'analytics-code' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_html' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[analytics-code]', array(
				'type'    	  => 'textarea',
				'section'     => 'site-tracking-code-section',
				'label'       => esc_html__( 'Google Analytics Tracking Code', 'iva' ),
				'description' => esc_html__('Either enter your Google tracking id (UA-XXXXX-X) here. If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'iva'),
			)
		)
	);