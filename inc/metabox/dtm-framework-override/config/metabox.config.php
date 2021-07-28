<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// -----------------------------------------
// Detect plugin...
// -----------------------------------------
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// -----------------------------------------
// Layer Sliders
// -----------------------------------------
function dtm_framework_layersliders() {
  $layerslider = array(  esc_html__('Select a slider','iva') );

  if( class_exists('LS_Sliders') ) {

    $sliders = LS_Sliders::find(array('limit' => 50));

    if(!empty($sliders)) {
      foreach($sliders as $key => $item){
        $layerslider[ $item['id'] ] = $item['name'];
      }
    }
  }

  return $layerslider;
}

// -----------------------------------------
// Revolution Sliders
// -----------------------------------------
function dtm_framework_revolutionsliders() {
  $revolutionslider = array( '' => esc_html__('Select a slider','iva') );

  if( class_exists('RevSlider') ) {
    $sld = new RevSlider();
    $sliders = $sld->getArrSliders();
    if(!empty($sliders)){
      foreach($sliders as $key => $item) {
        $revolutionslider[$item->getAlias()] = $item->getTitle();
      }
    }
  }

  return $revolutionslider;  
}

// -----------------------------------------
// Meta Layout Section
// -----------------------------------------

$page_layout_options = array(
  'global-site-layout' 	 => DTM_URL . 'images/admin-option.png',
  'content-full-width'   => DTM_URL . 'images/without-sidebar.png',
  'with-left-sidebar'    => DTM_URL . 'images/left-sidebar.png',
  'with-right-sidebar'   => DTM_URL . 'images/right-sidebar.png',
  'with-both-sidebar'    => DTM_URL . 'images/both-sidebar.png',
);

// Custom Page Layout Options Filter
$page_layout_options = apply_filters( 'iva_custom_page_layout_options', $page_layout_options  );

$meta_layout_section =array(
  'name'  => 'layout_section',
  'title' => esc_html__('Layout', 'iva'),
  'icon'  => 'fa fa-columns',
  'fields' =>  array(
    array(
      'id'  => 'layout',
      'type' => 'image_select',
      'title' => esc_html__('Page Layout', 'iva' ),
      'options'      => $page_layout_options,
      'default'      => 'global-site-layout',
      'attributes'   => array( 'data-depend-id' => 'page-layout' )
    ),
    array(
      'id'        => 'show-standard-sidebar-left',
      'type'      => 'switcher',
      'title'     => esc_html__('Show Standard Left Sidebar', 'iva' ),
      'dependency'=> array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
	  'default'	  => true,
    ),
    array(
      'id'        => 'widget-area-left',
      'type'      => 'select',
      'title'     => esc_html__('Choose Left Widget Areas', 'iva' ),
      'class'     => 'chosen',
      'options'   => iva_customizer_custom_widgets(),
      'attributes'  => array( 
        'multiple'  => 'multiple',
        'data-placeholder' => esc_html__('Select Left Widget Areas','iva'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'          => 'show-standard-sidebar-right',
      'type'        => 'switcher',
      'title'       => esc_html__('Show Standard Right Sidebar', 'iva' ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
	  'default'	  	=> true,
    ),
    array(
      'id'        => 'widget-area-right',
      'type'      => 'select',
      'title'     => esc_html__('Choose Right Widget Areas', 'iva' ),
      'class'     => 'chosen',
      'options'   => iva_customizer_custom_widgets(),
      'attributes'    => array( 
        'multiple' => 'multiple',
        'data-placeholder' => esc_html__('Select Right Widget Areas','iva'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    )
  )
);

// -----------------------------------------
// Meta Breadcrumb Section
// -----------------------------------------
$meta_breadcrumb_section = array(
  'name'  => 'breadcrumb_section',
  'title' => esc_html__('Breadcrumb', 'iva'),
  'icon'  => 'fa fa-sitemap',
  'fields' =>  array(

    array(
      'id'  => 'breadcrumb-option',
      'type' => 'image_select',
      'title' => esc_html__('Breadcrumb Option', 'iva' ),
      'options'      => array(
        'global-option'   => DTM_URL . 'images/admin-option.png',
		    'individual-option' => DTM_URL . 'images/individual-option.png',
      ),
      'default'      => 'global-option',
      'attributes'   => array( 'data-depend-id' => 'breadcrumb-option' )
    ),
    array(
      'id'         => 'enable-sub-title',
      'type'       => 'switcher',
      'title'      => esc_html__('Show Breadcrumb', 'iva' ),
      'default'    => true,
      'dependency' => array( 'breadcrumb-option', 'any', 'individual-option' ),
    ),
    array(
      'id'         => 'enable-dark-bg',
      'type'       => 'switcher',
      'title'      => esc_html__('Dark BG?', 'iva' ),
      'default'    => true,
      'dependency' => array( 'breadcrumb-option', 'any', 'individual-option' ),
    ),    
    array(
    	'id'                 => 'breadcrumb_position',
	    'type'               => 'select',
      'title'              => esc_html__('Position', 'iva' ),
      'options'            => array(
        'header-top-absolute' => esc_html__('Behind the Header','iva'),
        'header-top-relative' => esc_html__('Default','iva'),
	  	),
		  'default'            => 'header-top-relative',	
      'dependency'         => array( 'enable-sub-title|breadcrumb-option', '==|any', 'true|individual-option' ),
    ),    
    array(
      'id'         => 'breadcrumb_background',
      'type'       => 'background',
      'title'      => esc_html__('Background', 'iva' ),
      'dependency' => array( 'enable-sub-title|breadcrumb-option', '==|any', 'true|individual-option' ),
    )
    
  )
);

// -----------------------------------------
// Meta Slider Section
// -----------------------------------------
$meta_slider_section = array(
  'name'  => 'slider_section',
  'title' => esc_html__('Slider', 'iva'),
  'icon'  => 'fa fa-slideshare',
  'fields' =>  array(
    array(
      'id'           => 'slider-notice',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => esc_html__('Slider tab works only if breadcrumb disabled.','iva'),
      'class'        => 'margin-30 cs-danger'
    ),

    array(
      'id'           => 'show_slider',
      'type'         => 'switcher',
      'title'        => esc_html__('Show Slider', 'iva' ),
    ),
    array(
    	'id'                 => 'slider_position',
      'type'               => 'select',
      'title'              => esc_html__('Position', 'iva' ),
      'options'            => array(
        'header-top-relative'     => esc_html__('Top Header Relative','iva'),
        'header-top-absolute'    => esc_html__('Top Header Absolute','iva'),
        'bottom-header' 	   => esc_html__('Bottom Header','iva'),
      ),
      'default'            => 'bottom-header',
      'dependency'         => array( 'show_slider', '==', 'true' ),
   ),
   array(
      'id'                 => 'slider_type',
      'type'               => 'select',
      'title'              => esc_html__('Slider', 'iva' ),
      'options'            => array(
        ''                 => esc_html__('Select a slider','iva'),
        'layerslider'      => esc_html__('Layer slider','iva'),
        'revolutionslider' => esc_html__('Revolution slider','iva'),
        'customslider'     => esc_html__('Custom Slider Shortcode','iva'),
      ),
      'validate' => 'required',
      'dependency'         => array( 'show_slider', '==', 'true' ),
    ),

    array(
      'id'          => 'layerslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Layer Slider', 'iva' ),
      'options'     => dtm_framework_layersliders(),
      'validate'    => 'required',
      'dependency'         => array( 'show_slider|slider_type', '==|==', 'true|layerslider' ),
    ),

    array(
      'id'          => 'revolutionslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Revolution Slider', 'iva' ),
      'options'     => dtm_framework_revolutionsliders(),
      'validate'    => 'required',
      'dependency'         => array( 'show_slider|slider_type', '==|==', 'true|revolutionslider' ),
    ),

    array(
      'id'          => 'customslider_sc',
      'type'        => 'textarea',
      'title'       => esc_html__('Custom Slider Code', 'iva' ),
      'validate'    => 'required',
      'dependency'         => array( 'show_slider|slider_type', '==|==', 'true|customslider' ),
    ),
  )  
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
array_push( $meta_layout_section['fields'], array(
  'id'        => 'enable-sticky-sidebar',
  'type'      => 'switcher',
  'title'     => esc_html__('Enable Sticky Sidebar', 'iva' ),
  'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar,with-both-sidebar' )
) );

$page_settings = array(
  $meta_layout_section,
  $meta_breadcrumb_section,
  $meta_slider_section,
  array(
    'name'   => 'sidenav_template_section',
    'title'  => esc_html__('Side Navigation Template', 'iva'),
    'icon'   => 'fa fa-th-list',
    'fields' =>  array(
      array(
        'id'      => 'sidenav-tpl-notice',
        'type'    => 'notice',
        'class'   => 'success',
        'content' => esc_html__('Side Navigation Tab Works only if page template set to Side Navigation Template in Page Attributes','iva'),
        'class'   => 'margin-30 cs-success',      
      ),
      array(
        'id'      => 'sidenav-style',
        'type'    => 'select',
        'title'   => esc_html__('Side Navigation Style', 'iva' ),
        'options' => array(
          'type1'  => esc_html__('Type1','iva'),
          'type2'  => esc_html__('Type2','iva'),
          'type3'  => esc_html__('Type3','iva'),
          'type4'  => esc_html__('Type4','iva'),
          'type5'  => esc_html__('Type5','iva')
        ),
      ),
      array(
        'id'    => 'sidenav-align',
        'type'  => 'switcher',
        'title' => esc_html__('Align Right', 'iva' ),
        'info'  => esc_html__('YES! to align right of side navigation.','iva')
      ),
      array(
        'id'    => 'sidenav-sticky',
        'type'  => 'switcher',
        'title' => esc_html__('Sticky Side Navigation', 'iva' ),
        'info'  => esc_html__('YES! to sticky side navigation content.','iva')
      ),
      array(
        'id'    => 'enable-sidenav-content',
        'type'  => 'switcher',
        'title' => esc_html__('Show Content', 'iva' ),
        'info'  => esc_html__('YES! to show content in below side navigation.','iva')
      ),
      array(
        'id'      => 'sidenav-content',
        'type'    => 'select',
        'title'   => esc_html__('Side Navigation Content', 'iva' ),
        'info'    => esc_html__('Select any section here.','iva'),
		'options' => iva_get_elementor_page_list(),
		'default' => '0'
      ),
    )
  ),
);


$page_settings_cpt = apply_filters( 'iva_page_settings_cpt', true  );
if( $page_settings_cpt || !isset( $_GET['post'] )  ) {	

  $options[] = array(
    'id'        => '_tpl_default_settings',
    'title'     => esc_html__('Page Settings','iva'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => $page_settings
  );

}

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$post_meta_layout_section = $meta_layout_section;
$fields = $post_meta_layout_section['fields'];

	$fields[0]['title'] =  esc_html__('Post Layout', 'iva' );
	unset( $fields[5] );
	unset( $post_meta_layout_section['fields'] );
	$post_meta_layout_section['fields']  = $fields;  

	$post_format_section = array(
		'name'  => 'post_format_data_section',
		'title' => esc_html__('Post Format', 'iva'),
		'icon'  => 'fa fa-cog',
		'fields' =>  array(

			array(
				'id'           => 'single-post-style',
				'type'         => 'select',
				'title'        => esc_html__('Post Style', 'iva'),
				'options'      => array(
          'breadcrumb-fixed'    => esc_html__('Breadcrumb Fixed', 'iva'),
          'breadcrumb-parallax' => esc_html__('Breadcrumb Parallax', 'iva'),
          'overlay'             => esc_html__('Overlay', 'iva'),
          'overlap'             => esc_html__('Overlap', 'iva'),          
          'custom-classic'      => esc_html__('Classic', 'iva'),
          'custom-modern'       => esc_html__('Modern', 'iva'), 
          'custom'              => esc_html__('Custom', 'iva'),
				),
				'class'        => 'chosen',
				'default'      => 'overlay',
				'attributes'   => array(
				  'style'    => 'width: 50%;'
				),
				'info'         => esc_html__('Choose post style to display single post. If post style is "Custom", display based on Editor content.', 'iva')
			),

			array(
			    'id'           => 'view_count',
			    'type'         => 'number',
			    'title'        => esc_html__('Views', 'iva' ),
				  'info'         => esc_html__('No.of views of this post.', 'iva'),
          'attributes' => array(
            'style'    => 'width: 15%;'
        	),
			),

			array(
			    'id'           => 'like_count',
			    'type'         => 'number',
			    'title'        => esc_html__('Likes', 'iva' ),
				'info'         => esc_html__('No.of likes of this post.', 'iva'),
	          	'attributes' => array(
		           'style'    => 'width: 15%;'
        	    ),
			),

			array(
				'id' => 'post-format-type',
				'title'   => esc_html__('Type', 'iva' ),
				'type' => 'select',
				'default' => 'standard',
				'options' => array(
					'standard'  => esc_html__('Standard', 'iva'),
					'status'	=> esc_html__('Status','iva'),
					'quote'		=> esc_html__('Quote','iva'),
					'gallery'	=> esc_html__('Gallery','iva'),
					'image'		=> esc_html__('Image','iva'),
					'video'		=> esc_html__('Video','iva'),
					'audio'		=> esc_html__('Audio','iva'),
					'link'		=> esc_html__('Link','iva'),
					'aside'		=> esc_html__('Aside','iva'),
					'chat'		=> esc_html__('Chat','iva')
				),
				'info'         => esc_html__('Post Format & Type should be Same. Check the Post Format from the "Format" Tab, which comes in the Right Side Section', 'iva'),
			),

			array(
				'id' 	  => 'post-gallery-items',
				'type'	  => 'gallery',
				'title'   => esc_html__('Add Images', 'iva' ),
				'add_title'   => esc_html__('Add Images', 'iva' ),
				'edit_title'  => esc_html__('Edit Images', 'iva' ),
				'clear_title' => esc_html__('Remove Images', 'iva' ),
				'dependency' => array( 'post-format-type', '==', 'gallery' ),
			),

			array(
				'id' 	  => 'media-type',
				'type'	  => 'select',
				'title'   => esc_html__('Select Type', 'iva' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
		      	'options'	=> array(
					'oembed' => esc_html__('Oembed','iva'),
					'self' => esc_html__('Self Hosted','iva'),
				)
			),

			array(
				'id' 	  => 'media-url',
				'type'	  => 'textarea',
				'title'   => esc_html__('Media URL', 'iva' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
			),
		)
	);

	$options[] = array(
		'id'        => '_dt_post_settings',
		'title'     => esc_html__('Post Settings','iva'),
		'post_type' => 'post',
		'context'   => 'normal',
		'priority'  => 'high',
		'sections'  => array(
			$post_meta_layout_section,
			$meta_breadcrumb_section,
			$post_format_section			
		)
	);

// -----------------------------------------
// Tribe Events Post Metabox Options
// -----------------------------------------
  array_push( $post_meta_layout_section['fields'], array(
    'id' => 'event-post-style',
    'title'   => esc_html__('Post Style', 'iva' ),
    'type' => 'select',
    'default' => 'type1',
    'options' => array(
      'type1'  => esc_html__('Classic', 'iva'),
      'type2'  => esc_html__('Full Width','iva'),
      'type3'  => esc_html__('Minimal Tab','iva'),
      'type4'  => esc_html__('Clean','iva'),
      'type5'  => esc_html__('Modern','iva'),
    ),
	'class'    => 'chosen',
	'info'     => esc_html__('Your event post page show at most selected style.', 'iva')
  ) );

  $options[] = array(
    'id'        => '_custom_settings',
    'title'     => esc_html__('Settings','iva'),
    'post_type' => 'tribe_events',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
      $post_meta_layout_section,
      $meta_breadcrumb_section
    )
  );


// -----------------------------------------
// Header And Footer Options Metabox
// -----------------------------------------
$post_types = apply_filters( 'iva_header_footer_default_cpt' , array ( 'post', 'page' )  );
$options[] = array(
	'id'	=> '_dt_custom_settings',
	'title'	=> esc_html__('Header & Footer','iva'),
	'post_type' => $post_types,
	'priority'  => 'high',
	'context'   => 'side', 
	'sections'  => array(

		# Header Settings
		array(
			'name'  => 'header_section',
			'title' => esc_html__('Header', 'iva'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(

				# Header Show / Hide
				array(
					'id'		=> 'show-header',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Header', 'iva'),
					'default'	=>  true,
				),

				# Header
				array(
					'id'  		 => 'header',
					'type'  	 => 'select',
					'title' 	 => esc_html__('Choose Header', 'iva'),
					'class'		 => 'chosen',
					'options'	 => 'posts',
					'query_args' => array(
						'post_type'	 => 'dt_headers',
						'orderby'	 => 'ID',
						'order'		 => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Header', 'iva'),
					'attributes' => array( 'style'	=> 'width:50%' ),
					'info'		 => esc_html__('Select custom header for this page.','iva'),
					'dependency'	=> array( 'show-header', '==', 'true' )
				),							
			)			
		), # Header Settings

		# Footer Settings
		array(
			'name'  => 'footer_settings',
			'title' => esc_html__('Footer', 'iva'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Footer Show / Hide
				array(
					'id'		=> 'show-footer',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Footer', 'iva'),
					'default'	=>  true,
				),
				
				# Footer
		        array(
					'id'         => 'footer',
					'type'       => 'select',
					'title'      => esc_html__('Choose Footer', 'iva'),
					'class'      => 'chosen',
					'options'    => 'posts',
					'query_args' => array(
						'post_type'  => 'dt_footers',
						'orderby'    => 'ID',
						'order'      => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Footer', 'iva'),
					'attributes' => array( 'style'  => 'width:50%' ),
					'info'       => esc_html__('Select custom footer for this page.','iva'),
					'dependency'    => array( 'show-footer', '==', 'true' )
				),			
			)			
		), # Footer Settings
	)	
);

DTMFramework_Metabox::instance( $options );