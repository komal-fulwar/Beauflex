<?php
/**
 * Additional JS Section
 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'additionaljs-section',
			array(
				'title'    => esc_html__('Additional JS', 'iva'),
				'priority' => 135
			)
		)
	);

		/**
		 * Option : Additional JS
		 */
			$wp_customize->add_setting(
				IVA_THEME_SETTINGS . '[additional-js]', array (
					'default'           => iva_get_option( 'additional-js' ),
					'type'              => 'option',
					'sanitize_callback' => 'wp_filter_nohtml_kses',
				)
			);

			$wp_customize->add_control(
				new IVA_Customize_Control(
					$wp_customize, IVA_THEME_SETTINGS . '[additional-js]', array (
						'type'    => 'textarea',
						'label'   => esc_html__( 'Additional JS', 'iva'),
						'description'   => esc_html__( 'Add your own JS code here to customize your theme.', 'iva'),
						'section' => 'additionaljs-section',
					)
				)
			);