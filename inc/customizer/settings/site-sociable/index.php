<?php
/**
 * Site Sociable Main Section
 */
$wp_customize->add_section( 
	new IVA_WP_Customize_Section(
		$wp_customize,
		'site-sociable-main-section',
		array(
			'title'    => esc_html__('Sociable', 'iva'),
			'priority' => 10
		)
	)
);

/**
 * Option : Delicious
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-delicious]', array(
			'default'           => iva_get_option( 'sociable-delicious' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-delicious]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Delicious', 'iva' ),
				'description' => esc_html__('Put sociable url, wants to show on front-end.', 'iva'),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Delicious', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Deviantart
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-deviantart]', array(
			'default'           => iva_get_option( 'sociable-deviantart' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-deviantart]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Deviantart', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Deviantart', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Digg
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-digg]', array(
			'default'           => iva_get_option( 'sociable-digg' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-digg]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Digg', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Digg', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Dribbble
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-dribbble]', array(
			'default'           => iva_get_option( 'sociable-dribbble' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-dribbble]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Dribbble', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Dribbble', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Envelope
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-envelope]', array(
			'default'           => iva_get_option( 'sociable-envelope' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-envelope]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Envelope', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Envelope', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Facebook
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-facebook]', array(
			'default'           => iva_get_option( 'sociable-facebook' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-facebook]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Facebook', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Facebook', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Flickr
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-flickr]', array(
			'default'           => iva_get_option( 'sociable-flickr' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-flickr]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Flickr', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Flickr', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Google Plus
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-google-plus]', array(
			'default'           => iva_get_option( 'sociable-google-plus' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-google-plus]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Google Plus', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Google Plus', 'iva' ),
				),
			)
		)
	);

/**
 * Option : GTalk
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-gtalk]', array(
			'default'           => iva_get_option( 'sociable-gtalk' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-gtalk]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'GTalk', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'GTalk', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Instagram
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-instagram]', array(
			'default'           => iva_get_option( 'sociable-instagram' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-instagram]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Instagram', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Instagram', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Lastfm
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-lastfm]', array(
			'default'           => iva_get_option( 'sociable-lastfm' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-lastfm]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Lastfm', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Lastfm', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Linkedin
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-linkedin]', array(
			'default'           => iva_get_option( 'sociable-linkedin' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-linkedin]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Linkedin', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Linkedin', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Pinterest
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-pinterest]', array(
			'default'           => iva_get_option( 'sociable-pinterest' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-pinterest]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Pinterest', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Pinterest', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Reddit
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-reddit]', array(
			'default'           => iva_get_option( 'sociable-reddit' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-reddit]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Reddit', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Reddit', 'iva' ),
				),
			)
		)
	);

/**
 * Option : RSS
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-rss]', array(
			'default'           => iva_get_option( 'sociable-rss' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-rss]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'RSS', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'RSS', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Skype
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-skype]', array(
			'default'           => iva_get_option( 'sociable-skype' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-skype]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Skype', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Skype', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Stumbleupon
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-stumbleupon]', array(
			'default'           => iva_get_option( 'sociable-stumbleupon' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-stumbleupon]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Stumbleupon', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Stumbleupon', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Tumblr
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-tumblr]', array(
			'default'           => iva_get_option( 'sociable-tumblr' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-tumblr]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Tumblr', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Tumblr', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Twitter
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-twitter]', array(
			'default'           => iva_get_option( 'sociable-twitter' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-twitter]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Twitter', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Twitter', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Viadeo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-viadeo]', array(
			'default'           => iva_get_option( 'sociable-viadeo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-viadeo]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Viadeo', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Viadeo', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Vimeo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-vimeo]', array(
			'default'           => iva_get_option( 'sociable-vimeo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-vimeo]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Vimeo', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Vimeo', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Yahoo
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-yahoo]', array(
			'default'           => iva_get_option( 'sociable-yahoo' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-yahoo]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Yahoo', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Yahoo', 'iva' ),
				),
			)
		)
	);

/**
 * Option : Youtube
 */
	$wp_customize->add_setting(
		IVA_THEME_SETTINGS . '[sociable-youtube]', array(
			'default'           => iva_get_option( 'sociable-youtube' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'IVA_Customizer_Sanitizes', 'sanitize_tweek' ),
		)
	);

	$wp_customize->add_control(
		new IVA_Customize_Control(
			$wp_customize, IVA_THEME_SETTINGS . '[sociable-youtube]', array(
				'type'    	  => 'text',
				'section'     => 'site-sociable-main-section',
//				'label'       => esc_html__( 'Youtube', 'iva' ),
				'input_attrs' => array(
					'placeholder' => esc_html__( 'Youtube', 'iva' ),
				),
			)
		)
	);