<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Global Sidebar Layout
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[site-global-sidebar-layout]', array(
			'default'           => iva_get_option( 'site-global-sidebar-layout' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Radio_Image(
		$wp_customize, IVA_THEME_SETTINGS . '[site-global-sidebar-layout]', array(
			'type' => 'dt-radio-image',
			'label' => esc_html__( 'Global Sidebar Layout', 'iva'),
			'section' => 'site-global-sidebar-section',
			'choices' => apply_filters( 'iva_global_sidebar_layout_options', array(
				'content-full-width' => array(
					'label' => esc_html__( 'Without Sidebar', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/without-sidebar.png'
				),
				'with-left-sidebar' => array(
					'label' => esc_html__( 'Left Sidebar', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/left-sidebar.png'
				),
				'with-right-sidebar' => array(
					'label' => esc_html__( 'Right Sidebar', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/right-sidebar.png'
				),
				'with-both-sidebar' => array(
					'label' => esc_html__( 'Both Sidebar', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/both-sidebar.png'
				),
			)),
			'description' => esc_html__('Choose sidebar layout for site wide.', 'iva')
        )
    ));