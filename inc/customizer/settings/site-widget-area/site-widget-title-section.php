<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Widget Title Tag
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[widget-title-tag]', array(
			'default'           => iva_get_option( 'widget-title-tag' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control(
		IVA_THEME_SETTINGS . '[widget-title-tag]', array(
			'type'    => 'select',
			'section' => 'site-widgets-title-section',
			'label'   => esc_html__( 'Title Tag', 'iva' ),
			'choices' => array(
				'h2'   => 'h2',
				'h3'   => 'h3',
				'h4'   => 'h4',
				'h5'   => 'h5',
				'h6'   => 'h6',
				'span' => 'span',
				'div'  => 'div',
				'p'    => 'p',
			)
		)
	);

	/**
	 * Divider
	 */	
	$wp_customize->add_control(
		new IVA_Customize_Control_Separator(
			$wp_customize, IVA_THEME_SETTINGS . '[widget-title-tag-bottom-separator]', array(
				'type'     => 'dt-separator',
				'section'  => 'site-widgets-title-section',
				'settings' => array(),
			)
		)
	);

	$widget_title_styles = apply_filters( 'dt_widget_title_styles', array( 'default' => esc_html__('Default', 'iva') ) );
	if( count( $widget_title_styles ) > 1 ) {
		/**
		 * Option : Widget Title Style
		 */
			$wp_customize->add_setting(
				IVA_THEME_SETTINGS . '[widget-title-style]', array(
					'default'           => iva_get_option( 'widget-title-style' ),
					'type'              => 'option',
					'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
				)
			);

			$wp_customize->add_control(
				new IVA_Customize_Control(
					$wp_customize, IVA_THEME_SETTINGS . '[widget-title-style]', array(
						'type'    => 'select',
						'section' => 'site-widgets-title-section',
						'label'   => esc_html__( 'Title Style', 'iva' ),
						'choices' => $widget_title_styles
					)	
				)
			);
	

		/**
		 * Divider
		 */	
		$wp_customize->add_control(
			new IVA_Customize_Control_Separator(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-title-style-bottom-separator]', array(
					'type'     => 'dt-separator',
					'section'  => 'site-widgets-title-section',
					'settings' => array(),
				)
			)
		);
	}

// Widget Title Color Section

	/**
	 * Option : Widget Title Color
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[widget-title-color]', array(
				'default'           => iva_get_option( 'widget-title-color' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_alpha_color' ),
			)
		);

		$wp_customize->add_control(
			new IVA_Customize_Control_Color(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-title-color]', array(
					'type'    => 'dt-color',
					'label'   => esc_html__( 'Title Color', 'iva' ),
					'section' => 'site-widgets-title-section',
				)
			)
		);

		/**
		 * Divider
		 */	
		$wp_customize->add_control(
			new IVA_Customize_Control_Separator(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-title-color-bottom-separator]', array(
					'type'     => 'dt-separator',
					'section'  => 'site-widgets-title-section',
					'settings' => array(),
				)
			)
		);

// Widget Title Border Color Section ( Widget Title Style = Double Border )

	/**
	 * Option : Widget Title Color
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[widget-title-border-color]', array(
				'default'           => iva_get_option( 'widget-title-border-color' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_alpha_color' ),
			)
		);

		$wp_customize->add_control(
			new IVA_Customize_Control_Color(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-title-border-color]', array(
					'type'    => 'dt-color',
					'label'   => esc_html__( 'Title Border Color', 'iva' ),
					'dependency' => array( 'widget-title-style', 'any', 'type1,type3,type4,type5,type6,type7,type8,type9,type13,type14,type16'),
					'section' => 'site-widgets-title-section',
				)
			)
		);

		/**
		 * Divider
		 */	
		$wp_customize->add_control(
			new IVA_Customize_Control_Separator(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-title-border-bottom-separator]', array(
					'type'     => 'dt-separator',
					'dependency' => array( 'widget-title-style', 'any', 'type1,type3,type4,type5,type6,type7,type8,type9,type10,type13,type14,type16'),
					'section'  => 'site-widgets-title-section',
					'settings' => array(),
				)
			)
		);		

	// Widget Title Background Section

	/**
	 * Option : Widget Title Background Color
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[widget-title-bg-color]', array(
				'default'           =>  iva_get_option( 'widget-title-bg-color' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_alpha_color' ),
			)
		);

		$wp_customize->add_control(
			new IVA_Customize_Control_Color(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-title-bg-color]', array(
					'type'    => 'dt-color',
					'label'   => esc_html__( 'Title Background Color', 'iva' ),
					'dependency' => array( 'widget-title-style', 'any', 'type2,type10,type12,type14,type15,type17' ),
					'section' => 'site-widgets-title-section',
				)
			)
		);

		/**
		 * Divider
		 */	
		$wp_customize->add_control(
			new IVA_Customize_Control_Separator(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-title-bg-color-bottom-separator]', array(
					'type'     => 'dt-separator',
					'dependency' => array( 'widget-title-style', 'any', 'type2,type10,type12,type14,type15,type17' ),
					'section'  => 'site-widgets-title-section',
					'settings' => array(),
				)
			)
		);

	// Widget Background Section

	/**
	 * Option : Widget Background Color
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[widget-bg-color]', array(
				'default'           =>  iva_get_option( 'widget-bg-color' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_alpha_color' ),
			)
		);

		$wp_customize->add_control(
			new IVA_Customize_Control_Color(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-bg-color]', array(
					'type'    => 'dt-color',
					'label'   => esc_html__( 'Widget Background Color', 'iva' ),
					'dependency' => array( 'widget-title-style', 'any', 'type11,type12' ),
					'section' => 'site-widgets-title-section',
				)
			)
		);

		/**
		 * Divider
		 */	
		$wp_customize->add_control(
			new IVA_Customize_Control_Separator(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-bg-bottom-separator]', array(
					'type'     => 'dt-separator',
					'dependency' => array( 'widget-title-style', 'any', 'type11,type12' ),
					'section'  => 'site-widgets-title-section',
					'settings' => array(),
				)
			)
		);
			

// Widget Title Typography Section

	/**
	 * Option : Widget Title Typography
	 */
		$wp_customize->add_setting(
			IVA_THEME_SETTINGS . '[widget-title-typo]', array(
				'default'           =>  iva_get_option( 'widget-title-typo' ),
				'type'              => 'option',
				'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
			)
		);

		$wp_customize->add_control(
			new IVA_Customize_Control_Typography(
				$wp_customize, IVA_THEME_SETTINGS . '[widget-title-typo]', array(
					'type'    => 'dt-typography',
					'section' => 'site-widgets-title-section',
					'choices' => array(
						'font_family'     => esc_html__( 'Font Family', 'iva'),
						'font_weight'     => esc_html__( 'Font Weight', 'iva'),
						'text_transform'  => esc_html__( 'Text Transform', 'iva'),
						'text_decoration' => esc_html__( 'Text Decoration', 'iva'),
						'font_style'      => esc_html__( 'Font Style', 'iva'),
						'font_size'       => esc_html__( 'Font Size', 'iva'),
						'line_height'     => esc_html__( 'Line Height', 'iva'),
						'letter_spacing'  => esc_html__( 'Letter Spacing', 'iva'),
					),
					'label'   => esc_html__( 'Title Typography', 'iva'),
				)
			)
		);