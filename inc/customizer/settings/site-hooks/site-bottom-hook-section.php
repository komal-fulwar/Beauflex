<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Enable Bottom Hook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-bottom-hook]', array(
			'default'           => iva_get_option( 'enable-bottom-hook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-bottom-hook]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Bottom Hook', 'iva'),
				'section' => 'site-bottom-hook-section',
				'description' => esc_html__('YES! to enable bottom hook.', 'iva'),
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Bottom Hook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[bottom-hook]', array(
			'default'           => iva_get_option( 'bottom-hook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_html' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[bottom-hook]', array(
				'type'    	  => 'textarea',
				'section'     => 'site-bottom-hook-section',
				'label'       => esc_html__( 'Bottom Hook', 'iva' ),
				'description' => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'iva'),
			)
		)
	);