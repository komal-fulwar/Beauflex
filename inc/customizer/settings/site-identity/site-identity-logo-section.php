<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Site Logo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[custom-logo]', array(
			'default'           => iva_get_option( 'custom-logo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[custom-logo]', array(
				'label'         => esc_html__( 'Logo', 'iva' ),
				'section'       => 'site-identity-logo-section',
				'priority'      => 5,
				'height' 		=> 100,
				'width' 		=> 400,
				'flex_height' 	=> true,
				'flex_width' 	=> true,
				'button_labels' => array(
					'select'       => esc_html__( 'Select logo', 'iva' ),
					'change'       => esc_html__( 'Change logo', 'iva' ),
					'remove'       => esc_html__( 'Remove', 'iva' ),
					'placeholder'  => esc_html__( 'No logo selected', 'iva' ),
					'frame_title'  => esc_html__( 'Select logo', 'iva' ),
					'frame_button' => esc_html__( 'Choose logo', 'iva' ),
				),
			)
		)			
	);

/**
 * Option : Site Alternate Logo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[custom-alternate-logo]', array(
			'default'           => iva_get_option( 'custom-alternate-logo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[custom-alternate-logo]', array(
				'label'         => esc_html__( 'Alternate Logo', 'iva' ),
				'section'       => 'site-identity-logo-section',
				'priority'      => 10,
				'height' 		=> 100,
				'width' 		=> 400,
				'flex_height' 	=> true,
				'flex_width' 	=> true,
				'button_labels' => array(
					'select'       => esc_html__( 'Select logo', 'iva' ),
					'change'       => esc_html__( 'Change logo', 'iva' ),
					'remove'       => esc_html__( 'Remove', 'iva' ),
					'placeholder'  => esc_html__( 'No logo selected', 'iva' ),
					'frame_title'  => esc_html__( 'Select logo', 'iva' ),
					'frame_button' => esc_html__( 'Choose logo', 'iva' ),
				),
			)
		)			
	);

	/**
	 * Divider : Site Alternate Logo Bottom
	 */
	$wp_customize->add_control(
		new IVA_Customize_Control_Separator(
			$wp_customize, IVA_THEME_SETTINGS . '[site-alternate-logo-spacing-bottom-separator]', array(
				'type'     => 'dt-separator',
				'section'  => 'site-identity-logo-section',
				'settings' => array(),
				'priority' => 15,
			)
		)
	);	

/**
 * Option: Display Title
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[display-site-title]', array(
			'default'           => iva_get_option( 'display-site-title' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_checkbox' ),
		)
	);

	$wp_customize->add_control(
		IVA_THEME_SETTINGS . '[display-site-title]', array(
			'type'     => 'checkbox',
			'section'  => 'site-identity-logo-section',
			'label'    => esc_html__( 'Display Site Title', 'iva' ),
			'priority' => 30,
		)
	);

/**
 * Option: Display Tagline
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[display-site-tagline]', array(
			'default'           => iva_get_option( 'display-site-tagline' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_checkbox' ),
		)
	);

	$wp_customize->add_control(
		IVA_THEME_SETTINGS . '[display-site-tagline]', array(
			'type'     => 'checkbox',
			'section'  => 'site-identity-logo-section',
			'label'    => esc_html__( 'Display Site Tagline', 'iva' ),
			'priority' => 40,
		)
	);

	/**
	 * Divider : Logo Spacing Bottom
	 */
	$wp_customize->add_control(
		new IVA_Customize_Control_Separator(
			$wp_customize, IVA_THEME_SETTINGS . '[display-site-tagline-spacing-bottom-separator]', array(
				'type'     => 'dt-separator',
				'section'  => 'site-identity-logo-section',
				'settings' => array(),
				'priority' => 45,
			)
		)
	);