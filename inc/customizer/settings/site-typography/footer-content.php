<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Footer Content Section 
 */
$wp_customize->add_section( 
	new IVA_WP_Customize_Section(
		$wp_customize,
		'site-footer-content-section',
		array(
			'title'    => esc_html__('Content', 'iva'),
			'panel'    => 'site-footer-main-panel',
		)
	)
);

	/**
	 * Option :Footer Content Typo
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[footer-content-typo]', array(
				'default'           =>  iva_get_option( 'footer-content-typo' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),				
			)
		);

		$wp_customize->add_control(
			new IVA_Customize_Control_Typography(
				$wp_customize, IVA_THEME_SETTINGS . '[footer-content-typo]', array(
					'type'    => 'dt-typography',
					'section' => 'site-footer-content-section',
					'label'   => esc_html__( 'Typography', 'iva'),
				)
			)
		);

	/**
	 * Option : Footer Content Color
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[footer-content-color]', array(
				'default'           => iva_get_option( 'footer-content-color' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, IVA_THEME_SETTINGS . '[footer-content-color]', array(
					'label'   => esc_html__( 'Color', 'iva' ),
					'section' => 'site-footer-content-section',
				)
			)
		);

	/**
	 * Option : Footer Content Anchor Color
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[footer-content-a-color]', array(
				'default'           => iva_get_option( 'footer-content-a-color' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, IVA_THEME_SETTINGS . '[footer-content-a-color]', array(
					'label'   => esc_html__( 'Anchor Color', 'iva' ),
					'section' => 'site-footer-content-section',
				)
			)
		);

	/**
	 * Option : Footer Content Anchor hover Color
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[footer-content-a-hover-color]', array(
				'default'           => iva_get_option( 'footer-content-a-hover-color' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_hex_color' ),
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, IVA_THEME_SETTINGS . '[footer-content-a-hover-color]', array(
					'label'   => esc_html__( 'Anchor Hover Color', 'iva' ),
					'section' => 'site-footer-content-section',
				)
			)
		);