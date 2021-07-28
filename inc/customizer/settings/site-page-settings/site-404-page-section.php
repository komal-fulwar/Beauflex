<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : 404 Meaage
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-404message]', array(
			'default'           => iva_get_option( 'enable-404message' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-404message]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Message', 'iva'),
				'description' => esc_html__('YES! to enable not-found page message.', 'iva'),
				'section' => 'site-404-page-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Template Style
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[notfound-style]', array(
			'default'           => iva_get_option( 'notfound-style' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[notfound-style]', array(
			'type'    => 'select',
			'section' => 'site-404-page-section',
			'label'   => esc_html__( 'Template Style', 'iva' ),
			'choices' => array(
				'type1'  => esc_html__('Modern', 'iva'),
				'type2'  => esc_html__('Classic', 'iva'),
				'type4'  => esc_html__('Diamond', 'iva'),
				'type5'  => esc_html__('Shadow', 'iva'),
				'type6'  => esc_html__('Diamond Alt', 'iva'),
				'type7'  => esc_html__('Stack', 'iva'),
				'type8'  => esc_html__('Minimal', 'iva'),
			),
			'description' => esc_html__('Choose the style of not-found template page.', 'iva'),
		)
	));

/**
 * Option : Notfound Dark BG
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[notfound-darkbg]', array(
			'default'           => iva_get_option( 'notfound-darkbg' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[notfound-darkbg]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( '404 Dark BG', 'iva'),
				'description' => esc_html__('YES! to use dark bg notfound page for this site.', 'iva'),
				'section' => 'site-404-page-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Custom Page
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[notfound-pageid]', array(
			'default'           => iva_get_option( 'notfound-pageid' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[notfound-pageid]', array(
			'type'    => 'select',
			'section' => 'site-404-page-section',
			'label'   => esc_html__( 'Custom Page', 'iva' ),
			'choices' => iva_get_customizer_pages(),
			'description' => esc_html__('Choose the page for not-found content.', 'iva'),
		)
	));

/**
 * Option : 404 Background
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[notfound_background]', array(
			'default'           =>  '',
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_background_obj' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Background(
			$wp_customize, IVA_THEME_SETTINGS . '[notfound_background]', array(
				'type'    => 'dt-background',
				'section' => 'site-404-page-section',
				'label'   => esc_html__( 'Background', 'iva' ),
			)
		)		
	);

/**
 * Option : Custom Styles
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[notfound-bg-style]', array(
			'default'           => iva_get_option( 'notfound-bg-style' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_html' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[notfound-bg-style]', array(
				'type'    	  => 'textarea',
				'section'     => 'site-404-page-section',
				'label'       => esc_html__( 'Custom Inline Styles', 'iva' ),
				'description' => esc_html__('Paste custom CSS styles for not found page.', 'iva'),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'color:#ff00bb; text-align:left;', 'iva' ),
				),
			)
		)
	);