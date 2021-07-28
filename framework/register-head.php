<?php

/* ---------------------------------------------------------------------------
 * Loading Theme Scripts
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'iva_enqueue_scripts', 99 );
function iva_enqueue_scripts() {

	// comment reply script ------------------------------------------------------
	if (is_singular() AND comments_open()):
		wp_enqueue_script( 'comment-reply' );
	endif;

	// scipts variable -----------------------------------------------------------
	$loadingbar = iva_get_option( 'show-loader' );
	$loadingbar = !empty( $loadingbar ) ?  "enable" : "disable";

	if(is_rtl()) $rtl = true; else $rtl = false;

	wp_enqueue_script('jquery-ui-totop', get_theme_file_uri('/framework/js/jquery.ui.totop.min.js'), array(), false, true);
	wp_enqueue_script('jquery-easing', get_theme_file_uri('/framework/js/jquery.easing.js'), array(), false, true);
	wp_enqueue_script('jquery-debouncedresize', get_theme_file_uri('/framework/js/jquery.debouncedresize.js'), array(), false, true);	
	wp_enqueue_script('jquery-parallax', get_theme_file_uri('/framework/js/jquery.parallax.js'), array(), false, true);
	wp_enqueue_script('jquery-inview', get_theme_file_uri('/framework/js/jquery.inview.js'), array(), false, true);
	wp_enqueue_script('jquery-nicescroll', get_theme_file_uri('/framework/js/jquery.nicescroll.min.js'), array(), false, true);
	wp_enqueue_script('jquery-bxslider', get_theme_file_uri('/framework/js/jquery.bxslider.js'), array(), false, true);
	wp_enqueue_script('jquery-fitvids', get_theme_file_uri('/framework/js/jquery.fitvids.js'), array(), false, true);
	wp_enqueue_script('jquery-classie', get_theme_file_uri('/framework/js/jquery.classie.js'), array(), false, true);
	wp_enqueue_script('jquery-placeholder', get_theme_file_uri('/framework/js/jquery.placeholder.js'), array(), false, true);
	wp_enqueue_script('jquery-visualnav', get_theme_file_uri('/framework/js/jquery.visualNav.min.js'), array(), false, true);
	wp_enqueue_script('resizesensor', get_theme_file_uri('/framework/js/ResizeSensor.min.js'), array(), false, true);
	wp_enqueue_script('theia-sticky-sidebar', get_theme_file_uri('/framework/js/theia-sticky-sidebar.min.js'), array(), false, true);
	wp_register_script('particles', get_theme_file_uri('/framework/js/particles.min.js'), array(), false, true);
	wp_enqueue_script('matchheight', get_theme_file_uri('/framework/js/matchHeight.js'), array(), false, true);
	if( is_single() ) {
		wp_enqueue_script('jquery-caroufredsel', get_theme_file_uri('/framework/js/jquery.caroufredsel.js'), array(), false, true);
		wp_enqueue_script('jquery-touchswipe', get_theme_file_uri('/framework/js/jquery.touchswipe.js'), array(), false, true);
		wp_enqueue_script('jquery-waypoints', get_theme_file_uri('/framework/js/jquery.waypoints.min.js'), array(), false, true);
	}

	wp_enqueue_script('isotope-pkgd', get_theme_file_uri('/framework/js/isotope.pkgd.min.js'), array(), false, true);

	wp_enqueue_script('jquery-magnific-popup', get_theme_file_uri('/framework/js/magnific/jquery.magnific-popup.min.js'), array(), false, true);

	if( $loadingbar == 'enable' ) {
		wp_enqueue_script('pace', get_theme_file_uri('/framework/js/pace.min.js'),array(),false,true);
		wp_localize_script('pace', 'paceOptions', array(
			'restartOnRequestAfter' => 'false',
			'restartOnPushState' => 'false'
		));
	}

	wp_enqueue_script('iva-jqcustom', get_theme_file_uri('/framework/js/custom.js'), array(), false, true);

	$enable_totop = iva_get_option( 'show-to-top' );
	$enable_totop = (isset($enable_totop) && $enable_totop == '1') ? true : false;

	wp_localize_script('iva-jqcustom', 'dttheme_urls', array(
		'theme_base_url' => esc_js(IVA_THEME_URI),
		'framework_base_url' => esc_js(IVA_THEME_URI).'/framework/',
		'ajaxurl' => esc_url( admin_url('admin-ajax.php') ),
		'url' => get_site_url(),
		'isRTL' => esc_js($rtl),
		'loadingbar' => esc_js($loadingbar),
		'advOptions' => esc_html__('Show Advanced Options', 'iva'),
		'wpnonce' => wp_create_nonce('rating-nonce'),
		'enable_totop' => esc_js($enable_totop)
	));
}

/* ---------------------------------------------------------------------------
 * Scripts of Custom JS from Theme Back-End
* --------------------------------------------------------------------------- */
function iva_scripts_custom() {
	
	$enable_custom_js = (int) get_theme_mod( 'enable-custom-js', iva_defaults('enable-custom-js') );
	$custom_js = get_theme_mod( 'custom-js', '');
	
	if( !empty( $enable_custom_js ) && !empty( $custom_js ) ){
		wp_add_inline_script('iva-jqcustom', iva_wp_kses(stripslashes($custom_js)) ,'after');
	}
}
add_action('wp_enqueue_scripts', 'iva_scripts_custom', 100);

add_action( 'admin_enqueue_scripts', 'iva_jq_migration', 0 );
add_action( 'wp_enqueue_scripts', 'iva_jq_migration', 150 );
function iva_jq_migration() {
wp_enqueue_script('jquery-migrate');
}

/* ---------------------------------------------------------------------------
 * Loading Theme Styles
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'iva_enqueue_styles', 101 );
function iva_enqueue_styles() {

	// site icons ---------------------------------------------------------------
	if ( ! has_site_icon() ):
		$url = IVA_THEME_URI . "/images/favicon.ico";
		echo "<link href='$url' rel='shortcut icon' type='image/x-icon' />\n";		
	endif;

	// wp_enqueue_style ---------------------------------------------------------------
	wp_enqueue_style( 'iva', get_stylesheet_uri(), false, IVA_THEME_VERSION, 'all' );

	wp_enqueue_style( 'iva-base',		  get_theme_file_uri('/css/base.css'), false, IVA_THEME_VERSION, 'all' );
	wp_enqueue_style( 'iva-grid', 		  get_theme_file_uri('/css/grid.css'), false, IVA_THEME_VERSION, 'all' );
	wp_enqueue_style( 'iva-widget', 	  get_theme_file_uri('/css/widget.css'), false, IVA_THEME_VERSION, 'all' );
	wp_enqueue_style( 'iva-layout', 	  get_theme_file_uri('/css/layout.css'), false, IVA_THEME_VERSION, 'all' );
	wp_enqueue_style( 'iva-blog',	      get_theme_file_uri('/css/blog.css'), false, IVA_THEME_VERSION, 'all' );
	wp_enqueue_style( 'iva-custom-class', get_theme_file_uri('/css/custom-class.css'), false, IVA_THEME_VERSION, 'all' );
	wp_enqueue_style( 'iva-browsers', 	  get_theme_file_uri('/css/browsers.css'), false, IVA_THEME_VERSION, 'all' );	

	if (function_exists('bp_add_cover_image_inline_css')) {
		$inline_css = bp_add_cover_image_inline_css( true );
		wp_add_inline_style( 'bp-parent-css', strip_tags( $inline_css['css_rules'] ) );
	}

	// icon fonts ---------------------------------------------------------------------
	wp_enqueue_style ( 'custom-font-awesome',		get_theme_file_uri('/css/all.min.css'), array () );
	wp_enqueue_style ( 'pe-icon-7-stroke',			get_theme_file_uri('/css/pe-icon-7-stroke.css'), array () );
	wp_enqueue_style ( 'stroke-gap-icons-style',	get_theme_file_uri('/css/stroke-gap-icons-style.css'), array () );
	wp_enqueue_style ( 'icon-moon',					get_theme_file_uri('/css/icon-moon.css'), array () );
	wp_enqueue_style ( 'material-design-iconic',	get_theme_file_uri('/css/material-design-iconic-font.min.css'), array () );

	// notfound css
	if ( is_404() ) {
		wp_enqueue_style("iva-notfound",	get_theme_file_uri("/css/notfound.css"), false, IVA_THEME_VERSION, 'all' );
	}

	// loader css
	$loadingbar = iva_get_option( 'show-loader' );
	if( !empty( $loadingbar ) ) {
		wp_enqueue_style("iva-loader", 		get_theme_file_uri("/css/loaders.css"), false, IVA_THEME_VERSION, 'all' );
	}

	// tribe-events -------------------------------------------------------------------
	wp_enqueue_style( 'iva-customevent', 		get_theme_file_uri('/tribe-events/custom.css'), false, IVA_THEME_VERSION, 'all' );

	wp_enqueue_style( 'iva-magnific-popup', 	get_theme_file_uri('/framework/js/magnific/magnific-popup.css'), false, IVA_THEME_VERSION, 'all' );

	wp_enqueue_style( 'jquery-bxslider', 					get_theme_file_uri('/css/jquery.bxslider.min.css'), false, IVA_THEME_VERSION, 'all' );

	// blog single css -----------------------------------------------------------------
	wp_enqueue_style( 'iva-blog-single', 	get_theme_file_uri('/css/blog-single.css'), false, IVA_THEME_VERSION, 'all' );

	// jquery scripts ------------------------------------------------------------------
	wp_enqueue_script('modernizr-custom', 					get_theme_file_uri('/framework/js/modernizr.custom.js'), array('jquery'));

	// rtl -----------------------------------------------------------------------------
	if( is_rtl() ) {
		wp_enqueue_style('iva-rtl',    get_theme_file_uri('/css/rtl.css'), false, IVA_THEME_VERSION, 'all' );
	}

	// gutenberg css -------------------------------------------------------------------
	wp_enqueue_style( 'iva-gutenberg', get_theme_file_uri('/css/gutenberg.css'), false, IVA_THEME_VERSION, 'all' );

	$primary_color = iva_get_option( 'primary-color' );
	$secondary_color = iva_get_option( 'secondary-color' );
	$tertiary_color = iva_get_option( 'tertiary-color' );

	$css = '';

	if( !empty( $primary_color ) ) {
		
		$rgba = iva_hex2rgb( $primary_color );
		$rgba = implode(',', $rgba);

		# Widget Style
		$widget_style = iva_get_option( 'widget-title-style' );
		if( $widget_style == 'type5' ) {
			$css .= '.secondary-sidebar .type5 .widgettitle { border-color:rgba('.$rgba.', 0.5) }'."\n";
		} if( $widget_style == 'type12' ) {
			$css .= '.secondary-sidebar .type12 .widgettitle { background: rgba('.$rgba.', 0.2) }'."\n";
		}

		$css .= '.dt-sc-menu-sorting a { color: rgba('.$rgba.', 0.6) }'."\n";

		$css .= '.portfolio .image-overlay, .recent-portfolio-widget ul li a:before { background: rgba('.$rgba.', 0.9) }'."\n";

		# Blog
		$css .= '.dt-sc-boxed-style.dt-sc-post-entry .blog-entry.sticky, .dt-sc-post-entry.entry-cover-layout .blog-entry.sticky  { box-shadow: inset 0 0 1px 3px '.$primary_color.'}'."\n";
		$css .= '.apply-no-space .dt-sc-boxed-style.dt-sc-post-entry .blog-entry.sticky, .apply-no-space .dt-sc-post-entry.entry-cover-layout .blog-entry.sticky { box-shadow: inset 0 0 1px 3px '.$primary_color.'}'."\n";
		$css .= '.dt-related-carousel div[class*="carousel-"] > div { box-shadow: 0 0 1px 1px '.$primary_color.'}'."\n";
		$css .= '.dt-sc-content-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry.sticky .entry-thumb { box-shadow: 0 -3px 0 0 '.$primary_color.'}'."\n";
		$css .= '.dt-sc-modern-style.dt-sc-post-entry .blog-entry:hover { box-shadow: 0 5px 0 0 '.$primary_color.'}'."\n";
		$css .= '.dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry:before, .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry:before { box-shadow: inset 0 0 0 1px '.$primary_color.'}'."\n";

		# Shortcode
		$css .= '.portfolio.type4 .image-overlay, .dt-sc-event-addon > .dt-sc-event-addon-date, .dt-sc-course .dt-sc-course-overlay, .dt-sc-process-steps .dt-sc-process-thumb-overlay { background: rgba('.$rgba.',0.85) }'."\n";			
	}

	if( !empty( $secondary_color ) ) {

		$rgba = iva_hex2rgb( $secondary_color );
		$rgba = implode(',', $rgba);

		$css .= '.dt-sc-event-month-thumb .dt-sc-event-read-more, .dt-sc-training-thumb-overlay { background: rgba('.$rgba.',0.85) }'."\n";	
	}

	if( !empty( $tertiary_color ) ) {

		$rgba = iva_hex2rgb( $tertiary_color );
		$rgba = implode(',', $rgba);

		$css .= '.dt-sc-faculty .dt-sc-faculty-thumb-overlay { background: rgba('.$rgba.',0.9) }'."\n";
	}
	
	if( !empty($primary_color) && !empty($secondary_color) && !empty($tertiary_color) ) {

		$css .= '@-webkit-keyframes color-change { 0% { color:'.$primary_color.'; } 50% { color:'.$secondary_color.'; }  100% { color:'.$tertiary_color.'; } }'."\n";
		$css .= '@-moz-keyframes color-change { 0% { color:'.$primary_color.'; } 50% { color:'.$secondary_color.'; } 100% { color:'.$tertiary_color.'; } }'."\n";
		$css .= '@-ms-keyframes color-change { 0% { color:'.$primary_color.'; } 50% { color:'.$secondary_color.'; } 100% { color:'.$tertiary_color.'; }	}'."\n";
		$css .= '@-o-keyframes color-change { 0% { color:'.$primary_color.'; } 50% { color:'.$secondary_color.'; } 100% { color:'.$tertiary_color.'; }	}'."\n";
		$css .= '@keyframes color-change { 0% { color:'.$primary_color.'; } 50% { color:'.$secondary_color.'; } 100% { color:'.$tertiary_color.'; }	}'."\n";

		// For Gradient Colors
		$rgba_primary = iva_hex2rgb( $primary_color );
		$rgba_primary = implode(',', $rgba_primary);
		
		$rgba_second = iva_hex2rgb( $secondary_color );
		$rgba_second = implode(',', $rgba_second);
		
		$rgba_third = iva_hex2rgb( $tertiary_color );
		$rgba_third = implode(',', $rgba_third);
		
		$css .= '.dt-sc-destination-item .image-overlay:before { background: linear-gradient(to right,rgba('.$rgba_second.', 0.9) 0%, rgba('.$rgba_third.', 0.9) 100%); background: -webkit-linear-gradient(to right,rgba('.$rgba_second.', 0.9) 0%, rgba('.$rgba_third.', 0.9) 100%); background: -moz-linear-gradient(to right,rgba('.$rgba_second.', 0.9) 0%, rgba('.$rgba.', 0.9) 100%); background: -ms-linear-gradient(to right,rgba('.$rgba_second.', 0.9) 0%, rgba('.$rgba_third.', 0.9) 100%); }'."\n";

		$css .= '.side-navigation.type4 ul.side-nav li.current_page_item a {
				background-image: -webkit-linear-gradient(to right, '.$tertiary_color.', '.$primary_color.');
				background-image: -moz-linear-gradient(to right, '.$tertiary_color.', '.$primary_color.');
				background-image: -o-linear-gradient(to right, '.$tertiary_color.', '.$primary_color.');
				background-image: -ms-linear-gradient(to right, '.$tertiary_color.', '.$primary_color.');
				background-image: linear-gradient(to right, '.$tertiary_color.', '.$primary_color.'); 
			}'."\n";

		$css .= '.loader-text {
			background-image: linear-gradient(to right, '.$primary_color.' 10%, #232323 50%, '.$secondary_color.' 60%);
		}'."\n";				
	}

	wp_add_inline_style( 'iva-gutenberg', $css );
}

/* ---------------------------------------------------------------------------
 * Custom Inline Style
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'iva_enqueue_custom_inline', 999 );
if ( ! function_exists( 'iva_enqueue_custom_inline' ) ) {
	function iva_enqueue_custom_inline() {
		wp_register_style( 'iva-custom-inline', '', array(), IVA_THEME_VERSION, 'all' );
	}
}

/* ---------------------------------------------------------------------------
 * Site SSL Compatibility
 * --------------------------------------------------------------------------- */
function iva_ssl(){
	$ssl = '';
	if( is_ssl() ) $ssl = 's';
	return $ssl;
}

/* ---------------------------------------------------------------------------
 * Body Class Filter for layout changes
 * --------------------------------------------------------------------------- */
function iva_body_classes( $classes ) {
	
	// layout
	$classes[] = 'layout-'.  iva_get_option( 'site-layout' );
	
	if( is_page() ) {
		global $post;
		$page_meta = get_post_meta( $post->ID, '_tpl_default_settings', true );
		$page_meta = is_array( $page_meta ) ? $page_meta : array();

		if( array_key_exists( 'show_slider', $page_meta ) && $page_meta['show_slider'] ) {
			$classes[] = "page-with-slider";
		}

		if( array_key_exists( 'breadcrumb-option', $page_meta ) && $page_meta['breadcrumb-option'] == 'global-option' ) {
			$show_breadcrump = iva_get_option('show-breadcrumb');
			if( is_null( $show_breadcrump ) ) {
				$classes[] = "no-breadcrumb";
			}
		} elseif ( array_key_exists( 'enable-sub-title', $page_meta ) && !($page_meta['enable-sub-title']) ) {
			$classes[] = "no-breadcrumb";
		}
	} elseif( is_singular('post') ) {
		global $post;
		$post_meta = get_post_meta( $post->ID, '_dt_post_settings', true );
		$post_meta = is_array( $post_meta ) ? $post_meta : array();

		if( array_key_exists( 'breadcrumb-option', $post_meta ) && $post_meta['breadcrumb-option'] == 'global-option' ) {
			$show_breadcrump = iva_get_option('show-breadcrumb');
			if( is_null( $show_breadcrump ) ) {
				$classes[] = "no-breadcrumb";
			}
		} elseif( array_key_exists( 'enable-sub-title', $post_meta ) && !($post_meta['enable-sub-title']) ) {
			$classes[] = "no-breadcrumb";
		}
	} elseif( is_home() ) {
		$pageid = get_option('page_for_posts');
		$page_meta = get_post_meta( $pageid, '_tpl_default_settings', true );
		$page_meta = is_array( $page_meta ) ? $page_meta : array();

		if( array_key_exists( 'show_slider', $page_meta ) && $page_meta['show_slider'] ) {
			$classes[] = "page-with-slider";
		}
	} else {
		$show_breadcrump = iva_get_option('show-breadcrumb');
		if( is_null( $show_breadcrump ) ) {
			$classes[] = "no-breadcrumb";
		}
	}

	# Gutenberg Class
	if ( is_singular() && function_exists('has_blocks') && has_blocks() ) {
		$classes[] = 'has-gutenberg-blocks';
	}

	return $classes;
}
add_filter( 'body_class', 'iva_body_classes' );?>