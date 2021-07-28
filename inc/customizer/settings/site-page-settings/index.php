<?php
/**
 * Site Page Settings Main Panel
 */
$wp_customize->add_panel( 
	new IVA_WP_Customize_Panel(
		$wp_customize,
		'site-page-settings-main-panel',
		array(
			'title'    => esc_html__('All Page Settings', 'iva'),
			'priority' => 10
		)
	)
);

	/**
	 * Global Sidebar Section 
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-global-sidebar-section',
			array(
				'title'    => esc_html__('Global Sidebar', 'iva'),
				'panel'    => 'site-page-settings-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-global-sidebar-section.php';

	/**
	 * Post Archives Section 
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-post-archives-section',
			array(
				'title'    => esc_html__('Post Archives', 'iva'),
				'panel'    => 'site-page-settings-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-post-archives-section.php';

	/**
	 * Post Single Section
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-post-single-section',
			array(
				'title'    => esc_html__('Post Single', 'iva'),
				'panel'    => 'site-page-settings-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-post-single-section.php';

	/**
	 * 404 Page Section
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-404-page-section',
			array(
				'title'    => esc_html__('404 Page', 'iva'),
				'panel'    => 'site-page-settings-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-404-page-section.php';