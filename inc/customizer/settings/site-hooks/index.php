<?php
/**
 * Site Hooks Main Panel
 */
$wp_customize->add_panel( 
	new IVA_WP_Customize_Panel(
		$wp_customize,
		'site-hooks-main-panel',
		array(
			'title'    => esc_html__('Hooks', 'iva'),
			'priority' => 10
		)
	)
);

	/**
	 * Top Hook Section 
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-top-hook-section',
			array(
				'title'    => esc_html__('Top Hook', 'iva'),
				'panel'    => 'site-hooks-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-top-hook-section.php';

	/**
	 * Content Before Hook Section 
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-content-before-hook-section',
			array(
				'title'    => esc_html__('Content Before Hook', 'iva'),
				'panel'    => 'site-hooks-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-content-before-hook-section.php';

	/**
	 * Content After Hook Section 
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-content-after-hook-section',
			array(
				'title'    => esc_html__('Content After Hook', 'iva'),
				'panel'    => 'site-hooks-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-content-after-hook-section.php';

	/**
	 * Bottom Hook Section 
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-bottom-hook-section',
			array(
				'title'    => esc_html__('Bottom Hook', 'iva'),
				'panel'    => 'site-hooks-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-bottom-hook-section.php';

	/**
	 * Tracking Code Section 
	 */
	$wp_customize->add_section( 
		new IVA_WP_Customize_Section(
			$wp_customize,
			'site-tracking-code-section',
			array(
				'title'    => esc_html__('Tracking Code', 'iva'),
				'panel'    => 'site-hooks-main-panel',
				'priority' => 5,
			)
		)
	);

	require_once 'site-tracking-code-section.php';