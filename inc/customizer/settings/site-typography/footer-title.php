<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	/**
	 * Footer Title Section 
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-footer-title-section',
			array(
				'title'    => esc_html__('Title', 'iva'),
				'panel'    => 'site-footer-main-panel',
			)
		)
	);
	
	/**
	 * Option :Footer Title Typo
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[footer-title-typo]', array(
				'default'           =>  iva_get_option( 'footer-title-typo' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
			)
		);

		$wp_customize->add_control(
			new IVA_Customize_Control_Typography(
				$wp_customize, IVA_THEME_SETTINGS . '[footer-title-typo]', array(
					'type'    => 'dt-typography',
					'section' => 'site-footer-title-section',
					'label'   => esc_html__( 'Typography', 'iva'),
				)
			)
		);

	/**
	 * Option : Footer Title Color
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[footer-title-color]', array(
				'default'           => iva_get_option( 'footer-title-color' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, IVA_THEME_SETTINGS . '[footer-title-color]', array(
					'label'   => esc_html__( 'Color', 'iva' ),
					'section' => 'site-footer-title-section',
				)
			)
		);