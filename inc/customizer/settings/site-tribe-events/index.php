<?php
/**
 * Site Tribe Events Settings Main Panel
 */
$wp_customize->add_panel( 
	new IVA_WP_Customize_Panel(
		$wp_customize,
		'site-tribe-events-main-panel',
		array(
			'title'    => esc_html__('The Events Calendar', 'iva'),
			'priority' => 134
		)
	)
);

	/**
	 * Events Archive Section 
	 */
	$wp_customize->add_section(
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-tribe-events-archive-sidebar-section',
			array(
				'title'    => esc_html__('Events Archive Sidebar', 'iva'),
				'panel'    => 'site-tribe-events-main-panel',
				'priority' => 5,
			)
		)
	);

	/**
	 * Option : Archive Page Layout
	 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[tribe-events-archives-page-layout]', array(
			'default'           => iva_get_option( 'tribe-events-archives-page-layout' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Radio_Image(
		$wp_customize, IVA_THEME_SETTINGS . '[tribe-events-archives-page-layout]', array(
			'type' => 'dt-radio-image',
			'label' => esc_html__( 'Page Layout', 'iva'),
			'section' => 'site-tribe-events-archive-sidebar-section',
			'choices' => apply_filters( 'iva_tribe_events_archive_layout_options', array(
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
			))
        )
    ));

	/**
	 * Option : Show Standard Left Sidebar
	 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[show-standard-left-sidebar-for-tribe-events-archives]', array(
			'default'           => iva_get_option( 'show-standard-left-sidebar-for-tribe-events-archives' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[show-standard-left-sidebar-for-tribe-events-archives]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Show Standard Left Sidebar', 'iva'),
				'section' => 'site-tribe-events-archive-sidebar-section',
				'dependency' => array( 'tribe-events-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

	/**
	 * Option : Show Standard Right Sidebar
	 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[show-standard-right-sidebar-for-tribe-events-archives]', array(
			'default'           => iva_get_option( 'show-standard-right-sidebar-for-tribe-events-archives' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[show-standard-right-sidebar-for-tribe-events-archives]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Show Standard Right Sidebar', 'iva'),
				'section' => 'site-tribe-events-archive-sidebar-section',
				'dependency' => array( 'tribe-events-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);