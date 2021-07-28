<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Post Elements
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[post-elements-position]', array(
			'default'           => iva_get_option( 'post-elements-position' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_multi_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Sortable(
		$wp_customize, IVA_THEME_SETTINGS . '[post-elements-position]', array(
			'type' => 'dt-sortable',
			'label' => esc_html__( 'Post Elements Positioning', 'iva'),
			'section' => 'site-post-single-section',
			'choices' => apply_filters( 'iva_single_post_elements_options', array(
				'feature_image'	=> esc_html__('Feature Image', 'iva'),
				'title'      	=> esc_html__('Title', 'iva'),
				'content'    	=> esc_html__('Content', 'iva'),
				'meta_group' 	=> esc_html__('Meta Group', 'iva'),
				'navigation'    => esc_html__('Navigation', 'iva'),
				'author_bio' 	=> esc_html__('Author Bio', 'iva'),
				'comment_box' 	=> esc_html__('Comment Box', 'iva'),
				'related_posts' => esc_html__('Related Posts', 'iva'),
				'author'		=> esc_html__('Author', 'iva'),
				'date'     		=> esc_html__('Date', 'iva'),
				'comments' 		=> esc_html__('Comments', 'iva'),
				'categories'    => esc_html__('Categories', 'iva'),
				'tags'  		=> esc_html__('Tags', 'iva'),
				'social_share'  => esc_html__('Social Share', 'iva'),
				'likes_views'   => esc_html__('Likes & Views', 'iva'),
				'related_article' 	=> esc_html__('Related Article( Only Fixed )', 'iva'),
			)),
        )
    ));

/**
 * Option : Meta Elements
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[post-meta-position]', array(
			'default'           => iva_get_option( 'post-meta-position' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_multi_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Sortable(
		$wp_customize, IVA_THEME_SETTINGS . '[post-meta-position]', array(
			'type' => 'dt-sortable',
			'label' => esc_html__( 'Meta Group Positioning', 'iva'),
			'section' => 'site-post-single-section',
			'choices' => apply_filters( 'iva_single_post_meta_elements_options', array(
				'author'		=> esc_html__('Author', 'iva'),
				'date'     		=> esc_html__('Date', 'iva'),
				'comments' 		=> esc_html__('Comments', 'iva'),
				'categories'    => esc_html__('Categories', 'iva'),
				'tags'  		=> esc_html__('Tags', 'iva'),
				'social_share'  => esc_html__('Social Share', 'iva'),
				'likes_views'   => esc_html__('Likes & Views', 'iva'),
			))
        )
    ));

/**
 * Option : Post Related Title
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[post-related-title]', array(
			'default'           => iva_get_option( 'post-related-title' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_html' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[post-related-title]', array(
				'type'    	  => 'text',
				'section'     => 'site-post-single-section',
				'label'       => esc_html__( 'Related Posts Section Title', 'iva' ),
				'description' => esc_html__('Put the related posts section title here', 'iva'),
				'input_attrs' => array(
					'value'	=> esc_html__('Related Posts', 'iva'),
				)
			)
		)
	);

/**
 * Option : Related Columns
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[post-related-columns]', array(
			'default'           => iva_get_option( 'post-related-columns' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Radio_Image(
		$wp_customize, IVA_THEME_SETTINGS . '[post-related-columns]', array(
			'type' => 'dt-radio-image',
			'label' => esc_html__( 'Columns', 'iva'),
			'section' => 'site-post-single-section',
			'choices' => apply_filters( 'iva_single_related_columns_options', array(
				'one-column' => array(
					'label' => esc_html__( 'One Column', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/one-column.png'
				),
				'one-half-column' => array(
					'label' => esc_html__( 'One Half Column', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/one-half-column.png'
				),
				'one-third-column' => array(
					'label' => esc_html__( 'One Third Column', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/one-third-column.png'
				),
			)),
        )
    ));

/**
 * Option : Related Count
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[post-related-count]', array(
			'default'           => iva_get_option( 'post-related-count' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_number' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[post-related-count]', array(
				'type'    	  => 'text',
				'section'     => 'site-post-single-section',
				'label'       => esc_html__( 'No.of Posts to Show', 'iva' ),
				'description' => esc_html__('Put the no.of related posts to show', 'iva'),
				'input_attrs' => array(
					'value'	=> 3,
				),
			)
		)
	);

/**
 * Option : Enable Excerpt
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-related-excerpt]', array(
			'default'           => iva_get_option( 'enable-related-excerpt' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-related-excerpt]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Excerpt Text', 'iva'),
				'section' => 'site-post-single-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Excerpt Text
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[post-related-excerpt]', array(
			'default'           => iva_get_option( 'post-related-excerpt' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_number' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[post-related-excerpt]', array(
				'type'    	  => 'text',
				'section'     => 'site-post-single-section',
				'label'       => esc_html__( 'Excerpt Length', 'iva' ),
				'description' => esc_html__('Put Excerpt Length', 'iva'),
				'input_attrs' => array(
					'value'	=> 25,
				),
				'dependency' => array( 'enable-related-excerpt', '==', 'true' ),
			)
		)
	);

/**
 * Option : Related Carousel
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-related-carousel]', array(
			'default'           => iva_get_option( 'enable-related-carousel' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-related-carousel]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Carousel', 'iva'),
				'description' => esc_html__('YES! to enable carousel related posts', 'iva'),
				'section' => 'site-post-single-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Related Carousel Nav
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[related-carousel-nav]', array(
			'default'           => iva_get_option( 'related-carousel-nav' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[related-carousel-nav]', array(
			'type'    => 'select',
			'section' => 'site-post-single-section',
			'label'   => esc_html__( 'Navigation Style', 'iva' ),
			'choices' => array(
				'' 			 => esc_html__('None', 'iva'),
				'navigation' => esc_html__('Navigations', 'iva'),
				'pager'   	 => esc_html__('Pager', 'iva'),
			),
			'description' => esc_html__('Choose navigation style to display related post carousel.', 'iva'),
			'dependency' => array( 'enable-related-carousel', '==', 'true' ),
		)
	));

/**
 * Option : Image Lightbox
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-image-lightbox]', array(
			'default'           => iva_get_option( 'enable-image-lightbox' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-image-lightbox]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Feature Image Lightbox', 'iva'),
				'description' => esc_html__('YES! to enable lightbox for feature image. Will not work in "Overlay" style.', 'iva'),
				'section' => 'site-post-single-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Comment List Style
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[post-comments-list-style]', array(
			'default'           => iva_get_option( 'post-comments-list-style' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[post-comments-list-style]', array(
			'type'    => 'select',
			'section' => 'site-post-single-section',
			'label'   => esc_html__( 'Comments List Style', 'iva' ),
			'choices' => array(
			  'rounded' 	=> esc_html__('Rounded', 'iva'),
			  'square'   	=> esc_html__('Square', 'iva'),
			),
			'description' => esc_html__('Choose comments list style to display single post.', 'iva'),
		)
	));