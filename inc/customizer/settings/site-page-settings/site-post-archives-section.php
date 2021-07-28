<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option : Archive Page Layout
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-archives-page-layout]', array(
			'default'           => iva_get_option( 'blog-archives-page-layout' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Radio_Image(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-archives-page-layout]', array(
			'type' => 'dt-radio-image',
			'label' => esc_html__( 'Page Layout', 'iva'),
			'section' => 'site-post-archives-section',
			'choices' => apply_filters( 'iva_archive_page_layout_options', array(
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
		IVA_THEME_SETTINGS . '[show-standard-left-sidebar-for-post-archives]', array(
			'default'           => iva_get_option( 'show-standard-left-sidebar-for-post-archives' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[show-standard-left-sidebar-for-post-archives]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Show Standard Left Sidebar', 'iva'),
				'section' => 'site-post-archives-section',
				'dependency' => array( 'blog-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
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
		IVA_THEME_SETTINGS . '[show-standard-right-sidebar-for-post-archives]', array(
			'default'           => iva_get_option( 'show-standard-right-sidebar-for-post-archives' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[show-standard-right-sidebar-for-post-archives]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Show Standard Right Sidebar', 'iva'),
				'section' => 'site-post-archives-section',
				'dependency' => array( 'blog-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Archive Post Layout
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-post-layout]', array(
			'default'           => iva_get_option( 'blog-post-layout' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Radio_Image(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-post-layout]', array(
			'type' => 'dt-radio-image',
			'label' => esc_html__( 'Post Layout', 'iva'),
			'section' => 'site-post-archives-section',
			'choices' => apply_filters( 'iva_archive_post_layout_options', array(
				'entry-grid' => array(
					'label' => esc_html__( 'Grid', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/entry-grid.png'
				),
				'entry-list' => array(
					'label' => esc_html__( 'List', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/entry-list.png'
				),
				'entry-cover' => array(
					'label' => esc_html__( 'Cover', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/entry-cover.png'
				),
			))
        )
    ));

/**
 * Option : Post Grid, List Style
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-post-grid-list-style]', array(
			'default'           => iva_get_option( 'blog-post-grid-list-style' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-post-grid-list-style]', array(
			'type'    => 'select',
			'section' => 'site-post-archives-section',
			'label'   => esc_html__( 'Post Style', 'iva' ),
			'choices' => array(
				'dt-sc-boxed' 			=> esc_html__('Boxed', 'iva'),
				'dt-sc-simple'      	=> esc_html__('Simple', 'iva'),
				'dt-sc-overlap'      	=> esc_html__('Overlap', 'iva'),
				'dt-sc-content-overlay' => esc_html__('Content Overlay', 'iva'),
				'dt-sc-simple-withbg'	=> esc_html__('Simple with Background', 'iva'),
				'dt-sc-overlay'   	    => esc_html__('Overlay', 'iva'),
				'dt-sc-overlay-ii'      => esc_html__('Overlay II', 'iva'),			  
				'dt-sc-overlay-iii'     => esc_html__('Overlay III', 'iva'),			  
				'dt-sc-alternate'	 	=> esc_html__('Alternate', 'iva'),
				'dt-sc-minimal'       	=> esc_html__('Minimal', 'iva'),
				'dt-sc-modern' 	      	=> esc_html__('Modern', 'iva'),
				'dt-sc-classic'	 		=> esc_html__('Classic', 'iva'),
				'dt-sc-classic-ii'	 	=> esc_html__('Classic II', 'iva'),
				'dt-sc-classic-overlay' => esc_html__('Classic Overlay', 'iva'),
				'dt-sc-grungy-boxed' 	=> esc_html__('Grungy Boxed', 'iva'),
				'dt-sc-title-overlap'	=> esc_html__('Title Overlap', 'iva'),
			),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' )
		)
	));

/**
 * Option : Post Cover Style
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-post-cover-style]', array(
			'default'           => iva_get_option( 'blog-post-cover-style' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-post-cover-style]', array(
			'type'    => 'select',
			'section' => 'site-post-archives-section',
			'label'   => esc_html__( 'Post Style', 'iva' ),
			'choices' => array(
				'dt-sc-boxed' 			=> esc_html__('Boxed', 'iva'),
				'dt-sc-canvas'      	=> esc_html__('Canvas', 'iva'),
				'dt-sc-content-overlay' => esc_html__('Content Overlay', 'iva'),
				'dt-sc-overlay'   	    => esc_html__('Overlay', 'iva'),
				'dt-sc-overlay-ii'      => esc_html__('Overlay II', 'iva'),
				'dt-sc-overlay-iii'     => esc_html__('Overlay III', 'iva'),
				'dt-sc-trendy' 			=> esc_html__('Trendy', 'iva'),
				'dt-sc-mobilephone' 	=> esc_html__('Mobile Phone', 'iva'),
			),
			'dependency'   => array( 'blog-post-layout', '==', 'entry-cover' )
		)
	));

/**
 * Option : Post Columns
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-post-columns]', array(
			'default'           => iva_get_option( 'blog-post-columns' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Radio_Image(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-post-columns]', array(
			'type' => 'dt-radio-image',
			'label' => esc_html__( 'Columns', 'iva'),
			'section' => 'site-post-archives-section',
			'choices' => apply_filters( 'iva_archive_post_columns_options', array(
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
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
        )
    ));

/**
 * Option : List Thumb
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-list-thumb]', array(
			'default'           => iva_get_option( 'blog-list-thumb' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Radio_Image(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-list-thumb]', array(
			'type' => 'dt-radio-image',
			'label' => esc_html__( 'List Type', 'iva'),
			'section' => 'site-post-archives-section',
			'choices' => apply_filters( 'iva_archive_list_thumb_options', array(
				'entry-left-thumb' => array(
					'label' => esc_html__( 'Left Thumb', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/entry-left-thumb.png'
				),
				'entry-right-thumb' => array(
					'label' => esc_html__( 'Right Thumb', 'iva' ),
					'path' => IVA_THEME_URI . '/inc/customizer/assets/images/entry-right-thumb.png'
				),
			)),
			'dependency' => array( 'blog-post-layout', '==', 'entry-list' ),
        )
    ));

/**
 * Option : Post Alignment
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-alignment]', array(
			'default'           => iva_get_option( 'blog-alignment' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-alignment]', array(
			'type'    => 'select',
			'section' => 'site-post-archives-section',
			'label'   => esc_html__( 'Elements Alignment', 'iva' ),
			'choices' => array(
			  'alignnone'	=> esc_html__('None', 'iva'),
			  'alignleft' 	=> esc_html__('Align Left', 'iva'),
			  'aligncenter' => esc_html__('Align Center', 'iva'),
			  'alignright'  => esc_html__('Align Right', 'iva'),
			),
			'dependency'   => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		)
	));

/**
 * Option : Equal Height
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-equal-height]', array(
			'default'           => iva_get_option( 'enable-equal-height' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-equal-height]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Equal Height', 'iva'),
				'section' => 'site-post-archives-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				),
				'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
			)
		)
	);

/**
 * Option : No Space
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-no-space]', array(
			'default'           => iva_get_option( 'enable-no-space' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-no-space]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable No Space', 'iva'),
				'section' => 'site-post-archives-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				),
				'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
			)
		)
	);

/**
 * Option : Gallery Slider
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-gallery-slider]', array(
			'default'           => iva_get_option( 'enable-gallery-slider' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-gallery-slider]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Display Gallery Slider', 'iva'),
				'section' => 'site-post-archives-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				),
				'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
			)
		)
	);

/**
 * Divider : Blog Gallery Slider Bottom
 */
	$wp_customize->add_control(
		new IVA_Customize_Control_Separator(
			$wp_customize, IVA_THEME_SETTINGS . '[blog-gallery-slider-bottom-separator]', array(
				'type'     => 'dt-separator',
				'section'  => 'site-post-archives-section',
				'settings' => array(),
			)
		)
	);

/**
 * Option : Blog Elements
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-elements-position]', array(
			'default'           => iva_get_option( 'blog-elements-position' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_multi_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Sortable(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-elements-position]', array(
			'type' => 'dt-sortable',
			'label' => esc_html__( 'Elements Positioning', 'iva'),
			'section' => 'site-post-archives-section',
			'choices' => apply_filters( 'iva_archive_post_elements_options', array(
				'feature_image'	=> esc_html__('Feature Image', 'iva'),
				'title'      	=> esc_html__('Title', 'iva'),
				'content'    	=> esc_html__('Content', 'iva'),
				'read_more'  	=> esc_html__('Read More', 'iva'),
				'meta_group' 	=> esc_html__('Meta Group', 'iva'),
				'author'		=> esc_html__('Author', 'iva'),
				'date'     		=> esc_html__('Date', 'iva'),
				'comments' 		=> esc_html__('Comments', 'iva'),
				'categories'    => esc_html__('Categories', 'iva'),
				'tags'  		=> esc_html__('Tags', 'iva'),
				'social_share'  => esc_html__('Social Share', 'iva'),
				'likes_views'   => esc_html__('Likes & Views', 'iva'),
			)),
        )
    ));

/**
 * Option : Blog Meta Elements
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-meta-position]', array(
			'default'           => iva_get_option( 'blog-meta-position' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_multi_choices' ),
		)
	);

    $wp_customize->add_control( new IVA_Customize_Control_Sortable(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-meta-position]', array(
			'type' => 'dt-sortable',
			'label' => esc_html__( 'Meta Group Positioning', 'iva'),
			'section' => 'site-post-archives-section',
			'choices' => apply_filters( 'iva_archive_post_meta_elements_options', array(
				'author'		=> esc_html__('Author', 'iva'),
				'date'     		=> esc_html__('Date', 'iva'),
				'comments' 		=> esc_html__('Comments', 'iva'),
				'categories'    => esc_html__('Categories', 'iva'),
				'tags'  		=> esc_html__('Tags', 'iva'),
				'social_share'  => esc_html__('Social Share', 'iva'),
				'likes_views'   => esc_html__('Likes & Views', 'iva'),
			)),
			'description' => esc_html__('Note: Use max 3 items for better results.', 'iva'),
        )
    ));

/**
 * Divider : Blog Meta Elements Bottom
 */
	$wp_customize->add_control(
		new IVA_Customize_Control_Separator(
			$wp_customize, IVA_THEME_SETTINGS . '[blog-meta-elements-bottom-separator]', array(
				'type'     => 'dt-separator',
				'section'  => 'site-post-archives-section',
				'settings' => array(),
			)
		)
	);

/**
 * Option : Post Format
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-post-format]', array(
			'default'           => iva_get_option( 'enable-post-format' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-post-format]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Post Format', 'iva'),
				'section' => 'site-post-archives-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				)
			)
		)
	);

/**
 * Option : Enable Excerpt
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-excerpt-text]', array(
			'default'           => iva_get_option( 'enable-excerpt-text' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-excerpt-text]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Enable Excerpt Text', 'iva'),
				'section' => 'site-post-archives-section',
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
		IVA_THEME_SETTINGS . '[blog-excerpt-length]', array(
			'default'           => iva_get_option( 'blog-excerpt-length' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_number' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[blog-excerpt-length]', array(
				'type'    	  => 'text',
				'section'     => 'site-post-archives-section',
				'label'       => esc_html__( 'Excerpt Length', 'iva' ),
				'description' => esc_html__('Put Excerpt Length', 'iva'),
				'input_attrs' => array(
					'value'	=> 25,
				),
				'dependency'  => array( 'enable-excerpt-text', '==', 'true' ),
			)
		)
	);

/**
 * Option : Enable Video Audio
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[enable-video-audio]', array(
			'default'           => iva_get_option( 'enable-video-audio' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control_Switch(
			$wp_customize, IVA_THEME_SETTINGS . '[enable-video-audio]', array(
				'type'    => 'dt-switch',
				'label'   => esc_html__( 'Display Video & Audio for Posts', 'iva'),
				'description' => esc_html__('YES! to display video & audio, instead of feature image for posts', 'iva'),
				'section' => 'site-post-archives-section',
				'choices' => array(
					'on'  => esc_attr__( 'Yes', 'iva' ),
					'off' => esc_attr__( 'No', 'iva' )
				),
				'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
			)
		)
	);

/**
 * Option : Readmore Text
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-readmore-text]', array(
			'default'           => iva_get_option( 'blog-readmore-text' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_html' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[blog-readmore-text]', array(
				'type'    	  => 'text',
				'section'     => 'site-post-archives-section',
				'label'       => esc_html__( 'Read More Text', 'iva' ),
				'description' => esc_html__('Put the read more text here', 'iva'),
				'input_attrs' => array(
					'value'	=> esc_html__('Read More', 'iva'),
				)
			)
		)
	);

/**
 * Option : Image Hover Style
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-image-hover-style]', array(
			'default'           => iva_get_option( 'blog-image-hover-style' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-image-hover-style]', array(
			'type'    => 'select',
			'section' => 'site-post-archives-section',
			'label'   => esc_html__( 'Image Hover Style', 'iva' ),
			'choices' => array(
			  'dt-sc-default' 	  => esc_html__('Default', 'iva'),
			  'dt-sc-blur'        => esc_html__('Blur', 'iva'),
			  'dt-sc-bw'   		  => esc_html__('Black and White', 'iva'),
			  'dt-sc-brightness'  => esc_html__('Brightness', 'iva'),
			  'dt-sc-fadeinleft'  => esc_html__('Fade InLeft', 'iva'),
			  'dt-sc-fadeinright' => esc_html__('Fade InRight', 'iva'),
			  'dt-sc-hue-rotate'  => esc_html__('Hue-Rotate', 'iva'),
			  'dt-sc-invert'	  => esc_html__('Invert', 'iva'),
			  'dt-sc-opacity'     => esc_html__('Opacity', 'iva'),
			  'dt-sc-rotate'	  => esc_html__('Rotate', 'iva'),
			  'dt-sc-rotate-alt'  => esc_html__('Rotate Alt', 'iva'),
			  'dt-sc-scalein'     => esc_html__('Scale In', 'iva'),
			  'dt-sc-scaleout' 	  => esc_html__('Scale Out', 'iva'),
			  'dt-sc-sepia'	   	  => esc_html__('Sepia', 'iva'),
			  'dt-sc-tint'		  => esc_html__('Tint', 'iva'),
			),
			'description' => esc_html__('Choose image hover style to display archives pages.', 'iva'),
		)
	));

/**
 * Option : Image Hover Style
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-image-overlay-style]', array(
			'default'           => iva_get_option( 'blog-image-overlay-style' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-image-overlay-style]', array(
			'type'    => 'select',
			'section' => 'site-post-archives-section',
			'label'   => esc_html__( 'Image Overlay Style', 'iva' ),
			'choices' => array(
			  'dt-sc-default' 			=> esc_html__('None', 'iva'),
			  'dt-sc-fixed' 			=> esc_html__('Fixed', 'iva'),
			  'dt-sc-tb' 				=> esc_html__('Top to Bottom', 'iva'),
			  'dt-sc-bt'   				=> esc_html__('Bottom to Top', 'iva'),
			  'dt-sc-rl'   				=> esc_html__('Right to Left', 'iva'),
			  'dt-sc-lr'				=> esc_html__('Left to Right', 'iva'),
			  'dt-sc-middle'			=> esc_html__('Middle', 'iva'),
			  'dt-sc-middle-radial'		=> esc_html__('Middle Radial', 'iva'),
			  'dt-sc-tb-gradient' 		=> esc_html__('Gradient - Top to Bottom', 'iva'),
			  'dt-sc-bt-gradient'   	=> esc_html__('Gradient - Bottom to Top', 'iva'),
			  'dt-sc-rl-gradient'   	=> esc_html__('Gradient - Right to Left', 'iva'),
			  'dt-sc-lr-gradient'		=> esc_html__('Gradient - Left to Right', 'iva'),
			  'dt-sc-radial-gradient'	=> esc_html__('Gradient - Radial', 'iva'),
			  'dt-sc-flash' 			=> esc_html__('Flash', 'iva'),
			  'dt-sc-circle' 			=> esc_html__('Circle', 'iva'),
			  'dt-sc-hm-elastic'		=> esc_html__('Horizontal Elastic', 'iva'),
			  'dt-sc-vm-elastic'		=> esc_html__('Vertical Elastic', 'iva'),
			),
			'description' => esc_html__('Choose image overlay style to display archives pages.', 'iva'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		)
	));

/**
 * Option : Pagination
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[blog-pagination]', array(
			'default'           => iva_get_option( 'blog-pagination' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);

	$wp_customize->add_control( new IVA_Customize_Control(
		$wp_customize, IVA_THEME_SETTINGS . '[blog-pagination]', array(
			'type'    => 'select',
			'section' => 'site-post-archives-section',
			'label'   => esc_html__( 'Pagination Style', 'iva' ),
			'choices' => array(
			  'older_newer' 	=> esc_html__('Older & Newer', 'iva'),
			  'numbered'      	=> esc_html__('Numbered', 'iva'),
			  'load_more'      	=> esc_html__('Load More', 'iva'),
			  'infinite_scroll'	=> esc_html__('Infinite Scroll', 'iva'),
			),
			'description' => esc_html__('Choose pagination style to display archives pages.', 'iva')
		)
	));