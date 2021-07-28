<?php
if ( ! class_exists( 'IVA_Dynamic_Skin_CSS' ) ) {

	class IVA_Dynamic_Skin_CSS {

		private static $instance;

		public $primary_color = '';
		public $secondary_color = '';
		public $tertiary_color = '';

		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}

			return self::$instance;
		}

		public function __construct() {

			$this->primary_color 	    = iva_get_option( 'primary-color' );
			$this->secondary_color    = iva_get_option( 'secondary-color' );
			$this->tertiary_color 	   = iva_get_option( 'tertiary-color' );

			// Add our CSS
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ), 999 );
		}

		public function enqueue_styles() {
			$css = '';

			$css .= $this->primary_color_style( $this->primary_color );
			$css .= $this->secondary_color_style( $this->secondary_color );
			$css .= $this->tertiary_color_style( $this->tertiary_color );

			if( !empty( $css ) ) {
				wp_register_style( 'iva-customiser-skin-inline', '', array(), IVA_THEME_VERSION, 'all' );
				wp_enqueue_style( 'iva-customiser-skin-inline' );

				wp_add_inline_style( 'iva-customiser-skin-inline', $css );
			}
		}

		public function debug( $result ) {

			echo '<pre>';
			var_dump( $result );
			echo '</pre>';
		}

		public function primary_color_style( $color ) {
			$css = '';

			if( $color != '' ) {
				# Primary Color - Base
				$css .= 'a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .breadcrumb a:hover, #footer a:hover { color:'.$color.'; }';

				# Primary Color - Header
				$css .= '.dt-header-menu ul.dt-primary-nav li > a:hover, .dt-header-menu ul.dt-primary-nav li:hover > a,
				.dt-header-menu ul.dt-primary-nav li ul.children li > a:hover, .dt-header-menu ul.dt-primary-nav li ul.children li:hover > a,
				.dt-header-menu ul.dt-primary-nav li ul.sub-menu li > a:hover, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li:hover > a,

				.dt-header-menu ul.dt-primary-nav li.current-menu-item > a, .dt-header-menu ul.dt-primary-nav li.current-page-item > a, .dt-header-menu ul.dt-primary-nav li.current-menu-ancestor > a, .dt-header-menu ul.dt-primary-nav li.current-page-ancestor > a,

				.dt-header-menu ul.dt-primary-nav li.current_menu_item > a, .dt-header-menu ul.dt-primary-nav li.current_page_item > a, .dt-header-menu ul.dt-primary-nav li.current_menu_ancestor > a, .dt-header-menu ul.dt-primary-nav li.current_page_ancestor > a,

				.dt-header-menu ul.dt-primary-nav li ul.children li.current-menu-item > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current-page-item > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current-menu-ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current-page-ancestor > a,

				.dt-header-menu ul.dt-primary-nav li ul.children li.current_menu_item > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current_page_item > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current_menu_ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current_page_ancestor > a,

				.dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-item > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-page-item > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-page-ancestor > a,

				.dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_item > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_item > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_ancestor > a,

				.mobile-menu ul.dt-primary-nav li > a:hover, .mobile-menu ul.dt-primary-nav li:hover > a, .mobile-menu ul.dt-primary-nav li ul.children li > a:hover, .mobile-menu ul.dt-primary-nav li ul.children li:hover > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li > a:hover, .mobile-menu ul.dt-primary-nav li ul.sub-menu li:hover > a,

				.mobile-menu ul.dt-primary-nav li.current-menu-item > a, .mobile-menu ul.dt-primary-nav li.current-page-item > a, .mobile-menu ul.dt-primary-nav li.current-menu-ancestor > a, .mobile-menu ul.dt-primary-nav li.current-page-ancestor > a,

				.mobile-menu ul.dt-primary-nav li.current_menu_item > a, .mobile-menu ul.dt-primary-nav li.current_page_item > a, .mobile-menu ul.dt-primary-nav li.current_menu_ancestor > a, .mobile-menu ul.dt-primary-nav li.current_page_ancestor > a,

				.mobile-menu ul.dt-primary-nav li ul.children li.current-menu-item > a, .mobile-menu ul.dt-primary-nav li ul.children li.current-page-item > a, .mobile-menu ul.dt-primary-nav li ul.children li.current-menu-ancestor > a, .mobile-menu ul.dt-primary-nav li ul.children li.current-page-ancestor > a,

				.mobile-menu ul.dt-primary-nav li ul.children li.current_menu_item > a, .mobile-menu ul.dt-primary-nav li ul.children li.current_page_item > a, .mobile-menu ul.dt-primary-nav li ul.children li.current_menu_ancestor > a, .mobile-menu ul.dt-primary-nav li ul.children li.current_page_ancestor > a,

				.mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-item > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-page-item > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-ancestor > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-page-ancestor > a,

				.mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_item > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_page_item > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_ancestor > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_page_ancestor > a,

				.menu-icons-wrapper .overlay-search #searchform:before { color:'.$color.'; }';


				# Primary Border Color - Menu
				$css .= '.no-header-menu ul li ul.children, .dt-header-menu ul.dt-primary-nav li ul.sub-menu { border-color:'.$color.'; }';

				# Primary Color - Widgets
				$css .= '.widget #wp-calendar td a:hover, .dt-sc-dark-bg .widget #wp-calendar td a:hover, .secondary-sidebar .widget ul li > a:hover, .secondary-sidebar .widget ul li > a:hover + .count, .secondary-sidebar .type15 .widget.widget_recent_reviews ul li .reviewer, .secondary-sidebar .type15 .widget.widget_top_rated_products ul li .amount.amount,

				#main-menu .menu-item-widget-area-container .widget ul li > a:hover, #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget ul li > a:hover, #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget_recent_posts .entry-title h4 a:hover, #main-menu ul li.menu-item-simple-parent.dt-sc-dark-bg ul li a:hover, #main-menu .menu-item-widget-area-container .widget li:hover:before, .widget .recent-posts-widget li .entry-meta p span { color:'.$color.'; }';

				# Primary Color - New
				$css .= '.intro-section .elementor-column-wrap.elementor-element-populated:hover .elementor-widget-button a.elementor-button, .elementor-widget-jet-map .gm-style .gm-style-iw-d span, .contact-info a:hover, /* .elementor-widget-icon-list a span.elementor-icon-list-text:hover, */

				.services-provided .elementor-column-wrap:hover .elementor-widget-heading.elementor-widget-heading h2.elementor-heading-title, #footer .footer-social .elementor-social-icon:hover i, .dt-sc-simple-style.dt-sc-post-entry .blog-entry:hover .entry-button a.dt-sc-button span, .dtportfolio-sorting a:hover, .dtportfolio-sorting a.active-sort, .post-nav-container .post-next-link a:hover, .post-nav-container .post-prev-link a:hover, .post-nav-container .post-archive-link-wrapper a:hover, article.blog-single-entry.post-overlay > .entry-categories > a:hover, .dt-elementor-ordered-list-items .dt-elementor-ordered-list-item:before, .dt-custom-iconbox-type2.elementor-widget-icon-box:hover .elementor-icon-box-icon .elementor-icon i, .dt-custom-iconbox-type2.alter.elementor-widget-icon-box .elementor-icon-box-icon .elementor-icon i, .dt-custom-iconbox-type2.elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title a:hover, .dt-custom-icon-rounded-tabs .jet-tabs__control.jet-tabs__control-icon-top.active-tab .jet-tabs__control-inner, .dt-custom-horizontal-imagebox-section .jet-button__instance:hover .jet-button__state-hover .jet-button__label { color:'.$color.'; }';

				# Primary Color fill - New
				$css .= '.test-class svg { fill:'.$color.'; }';

				# Primary Bg Color - New
				$css .= '.ico-hover-bg.elementor-widget-icon-box.elementor-view-stacked:hover .elementor-icon, .elementor-widget-icon-box.elementor-view-stacked.ico-type1.alter:hover .elementor-icon, #main .white .elementor-button:hover, .elementor-widget-image-box.ico-type1.alter:hover .elementor-image-box-img{ background-color:'.$color.'; }';

				# Primary Color - Blog
				$css .= '.dt-sc-post-entry .blog-entry a, .dt-sc-post-entry .blog-entry .entry-title h4 a:hover, .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-title h4 a:hover, .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-button a.dt-sc-button:hover, .dt-sc-post-entry.entry-cover-layout .blog-entry:after, .dt-sc-boxed-style.dt-sc-post-entry .blog-entry > div.entry-meta-group .div:not(.entry-social-share) i, .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-format a:after, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry.type-post .entry-format a:hover, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-tags a, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry > div.entry-date i, .dt-sc-post-entry.entry-cover-layout .blog-entry > div.entry-format a:hover, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-social-share .share > i, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-button a.dt-sc-button, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-format a, .dt-sc-trendy-style.dt-sc-post-entry.entry-cover-layout .blog-entry .entry-details a, .dt-sc-trendy-style.dt-sc-post-entry.entry-cover-layout .blog-entry > div a, .dt-sc-trendy-style.dt-sc-post-entry.entry-cover-layout .blog-entry > div.entry-button a:hover, .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout:hover .blog-entry .entry-title h4 a:hover, .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout:hover .blog-entry:before, .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry.sticky:before, .pagination ul li a, .dt-sc-alternate-style.dt-sc-post-entry:hover .blog-entry .entry-format a:before, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-title h4 span.sticky-post, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-title h4 span.sticky-post i, .dt-sc-classic-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry > .entry-tags > a, .dt-sc-classic-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry.sticky .entry-thumb .entry-format a:before, .dt-sc-classic-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry.has-post-thumbnail .entry-thumb:first-child + .entry-meta-group > div > a:hover, .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry.has-post-thumbnail > div.entry-thumb + div.entry-comments a:hover, .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry.has-post-thumbnail > div.entry-thumb + div.entry-likes-views a:hover, .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry:not(.has-post-thumbnail) > div.entry-comments:first-child a:hover, .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry:not(.has-post-thumbnail) > div.entry-likes-views:first-child a:hover, .commentlist li.comment .reply a,.blog-single-entry .related-article .content > span, .blog-single-entry .related-article article .entry-summary h2, .blog-single-entry.post-overlay > .entry-thumb > .entry-format > a:hover,.blog-single-entry.post-overlay > .entry-author span:hover,.blog-single-entry.post-overlay > .entry-author span:hover a,.blog-single-entry.post-overlay > .entry-title h1:hover a,.blog-single-entry.post-overlay > .entry-tags a:hover,.blog-single-entry.post-overlay > .entry-comments a:hover,.blog-single-entry.post-overlay > .entry-likes-views .dt-sc-like-views a:hover,.blog-single-entry.post-overlay > .entry-social-share .share .dt-share-list li a:hover,.blog-single-entry.post-overlay > .entry-author-bio .details h3 a:hover,.blog-single-entry.post-overlay > .entry-post-navigation .post-prev-link:hover p,.blog-single-entry.post-overlay > .entry-post-navigation .post-next-link:hover p,.blog-single-entry.post-overlay > .entry-post-navigation .post-prev-link:hover span,.blog-single-entry.post-overlay > .entry-post-navigation .post-next-link:hover span,.blog-single-entry.post-overlay > div.entry-meta-group .share .dt-share-list li a:hover,.blog-single-entry.post-overlay .entry-categories a:hover,.blog-single-entry.post-overlay .entry-tags a:hover,.blog-single-entry.post-overlay > div.entry-meta-group .entry-author span:hover, .blog-single-entry.post-overlay > div.entry-meta-group .entry-author span:hover a,.blog-single-entry.post-overlap > .entry-thumb .entry-overlap .entry-bottom-details > * a:hover,.blog-single-entry.post-overlap > .entry-author-bio > .details h3 a:hover,.blog-single-entry.post-breadcrumb-fixed > .dt-post-sticky-wrapper h4 > span,.blog-single-entry.post-overlap > .commententries #respond h3#reply-title small a:hover,.blog-single-entry.post-breadcrumb-fixed .entry-author-bio > .details h3 a:hover,.blog-single-entry.post-breadcrumb-parallax > .entry-tags a:hover, .blog-single-entry.post-breadcrumb-parallax > .entry-categories a:hover,.blog-single-entry.post-breadcrumb-parallax > .entry-comments a:hover,.blog-single-entry.post-breadcrumb-parallax > .entry-author a:hover,.blog-single-entry.post-breadcrumb-parallax > .entry-likes-views .dt-sc-like-views a:hover,.blog-single-entry.post-breadcrumb-parallax > .entry-social-share .share .dt-share-list li a:hover, .blog-single-entry.post-custom-classic div[class*="entry-format"] a:hover, .blog-single-entry.post-custom-classic div[class*="meta-elements-boxed"]:hover i, .blog-single-entry.post-custom-classic div[class*="meta-elements-boxed"] a:hover, .blog-single-entry[class*="post-custom-classic"] .entry-author-bio .details h3 span, .blog-single-entry[class*="post-custom-classic"] .entry-post-navigation > div > .nav-title-wrap h3 a:hover, div[class*="metagroup-"] div[class*="entry-"] a, div[class*="meta-elements"] a, .blog-single-entry.post-custom-classic div[class*="metagroup-"] div[class*="entry-"] a:hover, .page-link a, .page-link a > span, .blog-single-entry.post-breadcrumb-parallax > .entry-meta-group > div a:hover, .dt-sc-post-entry .blog-entry .entry-format a.ico-format:hover, .blog-single-entry.post-overlay > .entry-title h1 a, .blog-single-entry.post-overlap > .entry-thumb .entry-overlap .entry-title h1 a, .blog-single-entry.post-overlap > .entry-thumb .entry-overlap .entry-bottom-details > * i,.blog-single-entry.post-overlap > .entry-thumb .entry-overlap .entry-bottom-details > * a, .blog-single-entry.post-overlap > .entry-tags a,.blog-single-entry.post-overlap > .entry-social-share .share .dt-share-list li a,.blog-single-entry.post-overlap > .entry-likes-views .dt-sc-like-views > div > a,.blog-single-entry.post-overlap > .entry-categories a,.blog-single-entry.post-overlap .entry-author > .author-wrap > a,.blog-single-entry.post-overlap > div.entry-meta-group .entry-tags a, .blog-single-entry.post-overlap > div.entry-meta-group .share .dt-share-list li a,.blog-single-entry.post-overlap > div.entry-meta-group .entry-likes-views .dt-sc-like-views > div > a,.blog-single-entry.post-overlap > div.entry-meta-group > .entry-categories a,.blog-single-entry.post-overlap > div.entry-meta-group > .entry-author > .author-wrap > a,.blog-single-entry.post-overlap > .entry-author-bio > .details h3 > a,.blog-single-entry.post-overlap > .entry-title h1 a,.blog-single-entry.post-overlap > .commententries #respond h3#reply-title small a,.single-post-header-wrapper > .container h1, .blog-single-entry.post-breadcrumb-fixed .entry-author-bio > .details h3 a,.blog-single-entry.post-breadcrumb-fixed .entry-title h1 a,.blog-single-entry.post-breadcrumb-fixed .entry-related-posts > h4,.blog-single-entry.post-breadcrumb-fixed .commententries .comments-area > h3,.blog-single-entry.post-breadcrumb-fixed .commententries #respond h3#reply-title, .blog-single-entry.post-breadcrumb-fixed .commententries #respond h3#reply-title small a,.blog-single-entry.post-breadcrumb-fixed .entry-comments a,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-tags a:hover,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group > .entry-categories > .category-wrap > a:hover, .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .share .dt-share-list li a:hover,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-date .date-wrap i,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-author i,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-comments i, .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-likes-views .dt-sc-like-views > div > i,.blog-single-entry.post-breadcrumb-fixed .entry-tags a,.blog-single-entry.post-breadcrumb-fixed .entry-categories > .category-wrap > a, .blog-single-entry.post-breadcrumb-fixed .entry-social-share .share .dt-share-list li a,.blog-single-entry.post-breadcrumb-fixed .entry-date .date-wrap,.blog-single-entry.post-breadcrumb-fixed .entry-author > .author-wrap > a,.blog-single-entry.post-breadcrumb-fixed .entry-likes-views .dt-sc-like-views > div > a,.single-post-header-wrapper.dt-parallax-bg > .container .post-meta .post-author a:hover,.single-post-header-wrapper.dt-parallax-bg > .container .post-meta > .post-comments a:hover,.blog-single-entry.post-breadcrumb-parallax > .entry-title h1 a,.blog-single-entry.post-breadcrumb-parallax >.entry-tags a,.blog-single-entry.post-breadcrumb-parallax > .entry-categories a,.blog-single-entry.post-breadcrumb-parallax > .entry-comments a,.blog-single-entry.post-breadcrumb-parallax > .entry-author a,.blog-single-entry.post-breadcrumb-parallax > .entry-likes-views .dt-sc-like-views a,.blog-single-entry.post-breadcrumb-parallax > .entry-social-share .share .dt-share-list li a,.blog-single-entry.post-breadcrumb-parallax > [class*="entry-"] > i,.blog-single-entry.post-breadcrumb-parallax > .entry-tags a:not(:last-child):after,.blog-single-entry.post-breadcrumb-parallax > .entry-categories a:not(:last-child):after,.blog-single-entry.post-breadcrumb-parallax > .entry-author, .blog-single-entry.post-breadcrumb-parallax > .entry-date,.blog-single-entry.post-breadcrumb-parallax > .entry-author-bio .details h3 a, .blog-single-entry.post-custom-classic .entry-title h1 a, .blog-single-entry[class*="post-custom-classic"] .entry-post-navigation > div > .nav-title-wrap h3 a, .blog-single-entry.post-overlap > div.entry-meta-group .entry-date .date-wrap, .blog-single-entry.post-overlap > .entry-date .date-wrap, .blog-single-entry.post-overlap > div.entry-meta-group .entry-comments a, .blog-single-entry.post-overlap > .entry-comments a, .blog-single-entry.post-overlap > div.entry-meta-group .entry-likes-views .dt-sc-like-views > div, .single-post-header-wrapper > .container .post-meta-data .date, .blog-single-entry.post-breadcrumb-fixed > .dt-post-sticky-wrapper h4, .blog-single-entry.post-breadcrumb-fixed div[class*="metagroup-elements-boxed"].dt-sc-posts-meta-group .entry-likes-views:hover .dt-sc-like-views > div i, .blog-single-entry.post-breadcrumb-fixed div[class*="metagroup-elements-filled"].dt-sc-posts-meta-group .entry-likes-views:hover .dt-sc-like-views > div i:before, .elementor-button.dt-elementor-button.dt-bordered, .post-custom-modern .entry-post-navigation > div:hover div.nav-title-wrap h3 a, .blog-single-entry.post-breadcrumb-parallax .entry-post-navigation > .post-prev-link .nav-title-wrap h3 a:hover,

				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-author i,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-comments i,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-date i,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-categories i,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-tags i,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-likes-views i,

				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .blog-entry .entry-title h4 a:hover,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-author a:hover,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-comments a:hover,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-date a:hover,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-categories a:hover,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-tags a:hover,
				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-likes-views a:hover,

				div[class*="entry-"].dt-sc-classic-ii-style.dt-sc-post-entry .entry-button a:hover,
				.dt-sc-classic-ii-style.dt-sc-post-entry .blog-entry:hover > div.entry-button .dt-sc-button:before,
				.dt-sc-classic-ii-style.dt-sc-post-entry .blog-entry:hover > div.entry-button .dt-sc-button:after,

				.blog-single-entry.post-overlay div.entry-author i, .blog-single-entry.post-overlay div.entry-comments i, .blog-single-entry.post-overlay div.entry-date i, .blog-single-entry.post-overlay div.entry-categories i, .blog-single-entry.post-overlay div.entry-tags i, .comment-metadata a:hover, .comment-metadata a.comment-edit-link:hover { color:'.$color.'; }';

				# Primary Color - Portfolio
				$css .= '.portfolio .image-overlay .links a:hover, .portfolio.type7 .image-overlay .links a, .project-details li a:hover, .portfolio-categories a:hover, .dt-portfolio-single-slider-wrapper #bx-pager a.active:hover:before, .dt-portfolio-single-slider-wrapper #bx-pager a, .portfolio.type8 .image-overlay .links a { color:'.$color.'; }';

				# Primary Color - Miscellaneous/Shortcodes
				$css .= '.dt-skin-primary-color, ul.side-nav li a:hover, .dt-sc-events-list .dt-sc-event-title h5 a, .side-navigation.type5 ul.side-nav li.current_page_item a, .side-navigation.type5 ul.side-nav>li>a:hover, .carousel-arrows a:hover:before,

				.dt-sc-counter-wrapper.type2 .dt-sc-counter-inner .dt-sc-counter-icon-wrapper > *, .elementor-widget-tabs.elementor-tabs-view-vertical.dt-vertical-bordered .elementor-tabs-wrapper .elementor-tab-title a:hover, .elementor-widget-tabs.elementor-tabs-view-vertical.dt-vertical-bordered .elementor-tabs-wrapper .elementor-tab-title.elementor-active a, .dt-custom-floral-decor-title .jet-headline--direction-vertical .jet-headline__first span, .dt-custom-iconbox-counter-wrapper .elementor-widget-icon-box:hover .elementor-icon-box-title a:before, .dt-custom-iconbox-counter-wrapper .elementor-widget-icon-box .elementor-icon-box-title a:hover, .elementor-widget-jet-testimonials .jet-testimonials__name, .widget.woocommerce ul.product-categories li > a:hover ~ span.dt-sc-shop-toggle, .widget.woocommerce ul.product-categories li:hover > a, .widget.woocommerce ul.product-categories li:hover > a ~ span.dt-sc-shop-toggle { color:'.$color.'; }';

				# Primary Color - Vertical Tabs
				$css .= 'ul.dt-sc-tabs-vertical-frame > li > a:hover, ul.dt-sc-tabs-vertical-frame > li.current a, ul.dt-sc-tabs-vertical > li > a.current, .dt-sc-tabs-vertical-frame-container.type2 ul.dt-sc-tabs-vertical-frame > li > a.current:before, ul.dt-sc-tabs-vertical > li > a:hover, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a.current, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a:hover { color:'.$color.'; }';

				# Primary Color - Image Caption
				$css .= '.dt-sc-event-image-caption .dt-sc-image-content h3 { color:'.$color.'; }';

				# Primary BG Color - Base
				$css .= '.dt-sc-header-icons-list > div.search-item .dt-sc-search-form-container:after, .page-template-default .blog-single-entry table thead, .post-template-default .blog-single-entry table thead, table:not(.shop_attributes) > tbody:first-child > tr > th, th, .wp-block-calendar table th, .pre-loader:before, #toTop { background-color:'.$color.'; }';

				# Primary BG Color - Footer
				$css .= '#footer .wpcf7-form.bottom-bordered input[type="submit"]:hover, #footer .wpcf7-form.bottom-bordered button:hover, #footer .wpcf7-form.bottom-bordered input[type="button"]:hover, #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover { background-color:'.$color.'; }';

				# Primary BG Color - Widgets
				$css .= '.widgettitle:before, .tagcloud a:hover, .tagcloud .tag-cloud-link:hover, .dt-sc-dark-bg .tagcloud a:hover, .dt-sc-dark-bg .widget.widget_categories ul li > a:hover span, #footer .dt-sc-dark-bg .widget.widget_categories ul li > a:hover span, #footer .dt-sc-dark-bg .widget.widget_archive ul li > a:hover span, #searchform:hover:before { background-color:'.$color.'; }';

				# Primary BG Color - Blog
				$css .= '.blog-entry .entry-title h4 span.sticky-post, .dt-sc-classic-ii-style.dt-sc-post-entry .blog-entry > .entry-title h4 .sticky-post i, .blog-entry .entry-social-share .share > i, .dt-sc-post-entry .blog-entry .entry-button a.dt-sc-button, .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-social-share .share > i, .dt-sc-post-entry .blog-entry .entry-format a, .dt-sc-simple-style.dt-sc-post-entry .blog-entry .entry-format a:hover, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-categories a, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry > div.entry-tags a:hover, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry > div.entry-author > a:hover, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-comments > a:hover, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-tags a:hover, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-format a:hover, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry.sticky .entry-format a, .dt-sc-simple-withbg-style.dt-sc-post-entry.entry-grid-layout .blog-entry .entry-thumb .bx-wrapper, .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout:hover .blog-entry div.entry-format a, .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry.sticky div.entry-format a, .pagination .newer-posts a, .pagination .older-posts a, .pagination ul li span, .pagination ul li a:hover, .pagination a.loadmore-btn, .dt-sc-alternate-style.dt-sc-post-entry:hover .entry-title h4 a:before, .dt-sc-alternate-style.dt-sc-post-entry .blog-entry .entry-format a:after, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-author a:hover, .dt-sc-classic-overlay-style.dt-sc-post-entry .blog-entry > .entry-categories > a:hover, .dt-sc-overlap-style.dt-sc-post-entry .blog-entry .entry-format a:after, .dt-related-carousel div[class*="carousel-"] > div, .dt-related-carousel .carousel-pager > a.selected, .dt-related-carousel .carousel-pager > a:hover, .dt-sc-overlay-iii-style.dt-sc-post-entry.entry-list-layout .blog-entry > .entry-thumb:before, .dt-sc-modern-style.dt-sc-post-entry .blog-entry .entry-meta-group div.entry-tags a, .dt-sc-overlay-style.dt-sc-post-entry.entry-cover-layout .blog-entry .entry-details > .entry-tags, .dt-sc-minimal-style.dt-sc-post-entry.entry-grid-layout .blog-entry:after, .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry.sticky > div.entry-title:before, .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry:hover > div.entry-title:before, .post-edit-link:hover, .vc_inline-link:hover,ul.commentlist li .reply a:hover,.single-post-header-wrapper > .container .post-categories a, .blog-single-entry .related-article .arrow, .blog-single-entry.post-overlay > .entry-thumb > .entry-format > a,.blog-single-entry.post-overlay > .entry-thumb .share .dt-share-list li a:hover,.blog-single-entry.post-overlay:hover > .entry-title h1:before,.blog-single-entry.post-overlay > .entry-author span,.blog-single-entry.post-overlap > .entry-thumb > .entry-format > a,.blog-single-entry.post-overlap > .entry-comments a:hover i,.blog-single-entry.post-overlap > .entry-author > .author-wrap:hover i,.blog-single-entry.post-overlap > .entry-date > .date-wrap:hover i,.blog-single-entry.post-overlap > .entry-categories > .category-wrap:hover i,.blog-single-entry.post-overlap > .entry-likes-views .dt-sc-like-views > div:hover > i,.blog-single-entry.post-overlay > div.entry-meta-group .entry-author span,.blog-single-entry.post-overlap > div.entry-meta-group .entry-comments a:hover i,.blog-single-entry.post-overlap > div.entry-meta-group .entry-author > .author-wrap:hover i,.blog-single-entry.post-overlap > div.entry-meta-group .entry-date > .date-wrap:hover i,.blog-single-entry.post-overlap > div.entry-meta-group > .entry-categories > .category-wrap:hover i,.blog-single-entry.post-overlap > div.entry-meta-group .entry-likes-views .dt-sc-like-views > div:hover > i,.blog-single-entry.post-breadcrumb-fixed > .dt-post-sticky-wrapper .entry-social-share .share ul li:hover,.blog-single-entry.post-breadcrumb-fixed > .column .commententries #respond h3#reply-title small a:hover,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-comments a:hover i,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-author > .author-wrap:hover i,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-likes-views .dt-sc-like-views > div:hover > i,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-date .date-wrap:hover i,.blog-single-entry.post-breadcrumb-fixed .entry-comments a:hover i,.blog-single-entry.post-breadcrumb-fixed .entry-author > .author-wrap:hover i,.blog-single-entry.post-breadcrumb-fixed .entry-likes-views .dt-sc-like-views > div:hover > i,.blog-single-entry.post-breadcrumb-fixed .entry-date .date-wrap:hover i,.single-post-header-wrapper.dt-parallax-bg > .container .post-categories a:hover,.blog-single-entry.post-breadcrumb-parallax > .entry-thumb > .entry-format > a, .blog-single-entry.post-custom-classic div[class*="entry-format"] a, div[class*="metagroup-elements-filled"] div[class*="entry-"], div[class*="meta-elements-filled"], div[class*="metagroup-elements-boxed"] div[class*="entry-"]:hover, div[class*="metagroup-elements-filled"] div[class*="entry-social"]:hover .share > i, div[class*="meta-elements-boxed"]:hover, .blog-single-entry div[class*="meta-elements-filled"]:hover .share > i, .post-custom-modern div.nav-title-wrap > span, .page-link > span, .page-link > a:hover, div[class*="meta-elements"].entry-social-share .share:hover > i, .blog-single-entry .entry-format a, .blog-single-entry div[class*="meta-elements-filled"]:hover,.metagroup-dot-separator div[class*="entry-"]:not(:last-child):before,.post-default>div[class*="entry-meta-group"] div[class*=entry-]:hover,div[class*="metagroup-"] .entry-social-share .share>i,div[class*="metagroup-elements-filled"] div[class*=entry-]:hover,div[class*="metagroup-elements-filled"] div[class*=entry-social] .share>i,div[class*="meta-elements"].entry-social-share .share>i,div[class*="meta-elements-boxed"].entry-social-share .share>i,div[class*="meta-elements-filled"].entry-social-share .share>i, div[class*="meta-elements-filled"]:hover, .blog-single-entry.post-overlap > .entry-author i, .blog-single-entry.post-overlap > .entry-author-bio > .details h3:before, .blog-single-entry.post-overlap > .entry-categories > .category-wrap > i, .blog-single-entry.post-overlap > .entry-comments a i, .blog-single-entry.post-overlap > .entry-date .date-wrap i, .blog-single-entry.post-overlap > .entry-likes-views .dt-sc-like-views > div > i, .blog-single-entry.post-overlap > .entry-social-share .share .dt-share-list li a:hover, .blog-single-entry.post-overlap > .entry-tags a:hover, .blog-single-entry.post-overlap > div.entry-meta-group .entry-author i, .blog-single-entry.post-overlap > div.entry-meta-group .entry-comments a i, .blog-single-entry.post-overlap > div.entry-meta-group .entry-date .date-wrap i, .blog-single-entry.post-overlap > div.entry-meta-group .entry-likes-views .dt-sc-like-views > div > i, .blog-single-entry.post-overlap > div.entry-meta-group .entry-tags a:hover, .blog-single-entry.post-overlap > div.entry-meta-group .share .dt-share-list li a:hover, .blog-single-entry.post-overlap > div.entry-meta-group > .entry-categories > .category-wrap > i, .blog-single-entry.post-custom-classic div[class*="metagroup-"] .entry-social-share:hover .share > i, article[class*="post-custom"].blog-single-entry div.dt-sc-posts-meta-group[class*="metagroup-elements-filled"] .entry-social-share .share:hover > i, .blog-single-entry[class*="post-custom-classic"] div[class*="meta-elements-"].entry-social-share:hover .share { background-color:'.$color.'; }';

				# Primary BG Color - Portfolio
				$css .= '.dt-sc-portfolio-sorting a.active-sort, .dt-sc-portfolio-sorting a:hover, .dt-sc-portfolio-sorting a:hover:before, .dt-sc-portfolio-sorting a:hover:after, .dt-sc-portfolio-sorting a.active-sort:before, .dt-sc-portfolio-sorting a.active-sort:after, .portfolio.type2 .image-overlay-details, .portfolio.type2 .image-overlay .links a:hover, .dt-sc-portfolio-sorting.type2, .dt-sc-portfolio-sorting.type2:before, .portfolio.type6 .image-overlay .links a:hover, .portfolio.type7 .image-overlay-details .categories a:before, .portfolio.type7 .image-overlay .links a:hover:before { background-color:'.$color.'; }';

				# Primary BG Color - Miscellaneous/Shortcodes
				$css .= '.dt-skin-primary-bg, .elementor-section[class*="dt-skin-primary-bg-opaque"]:before, ul.side-nav li a:hover:before, ul.side-nav > li.current_page_item > a:before, ul.side-nav > li > ul > li.current_page_item > a:before, ul.side-nav > li > ul > li > ul > li.current_page_item > a:before, .dt-sc-skin-highlight, .two-color-section:before, .dt-sc-readmore-plus-icon:hover:before, .dt-sc-readmore-plus-icon:hover:after, .dt-sc-contact-details-on-map .map-switch-icon, .side-navigation.type2 ul.side-nav > li.current_page_item > a, .side-navigation.type3 ul.side-nav > li.current_page_item > a, .side-navigation.type3 ul.side-nav > li:hover > a, .side-navigation.type4 ul.side-nav li a:after, .side-navigation.type5 ul.side-nav li:after,

				.dt-sc-counter-wrapper.type1 .dt-sc-counter-inner .dt-sc-counter-title:after, .dt-sc-counter-wrapper.type2:hover .dt-sc-counter-inner .dt-sc-counter-icon-wrapper, .dt-sc-any-carousel-wrapper .swiper-pagination.swiper-pagination-bullets .swiper-pagination-bullet-active,
				.dt-sc-any-carousel-wrapper .swiper-pagination-progressbar .swiper-pagination-progressbar-fill, .dt-sc-any-carousel-wrapper .swiper-scrollbar .swiper-scrollbar-drag,

				.jet-carousel .jet-slick-dots li:hover span, .jet-carousel .jet-slick-dots li.slick-active span, .swiper-scrollbar .swiper-scrollbar-drag, .dt-sc-header-icons-list > div.search-item.search-overlay .dt-sc-search-form-container .dt-sc-search-overlay-form-close, .elementor-widget-jet-headline.dt-minimal-bottom-sep-title .jet-headline .jet-headline__divider, .elementor-widget-jet-headline.dt-minimal-top-sep-title .jet-headline .jet-headline__divider, .dt-contact-form-default .wpcf7 input.wpcf7-submit:hover, .dt-custom-service-imagebox-carousel .jet-carousel__item .jet-carousel__item-link:after, .dt-custom-service-imagebox-carousel.alter .jet-carousel__item .jet-carousel__content, .dt-custom-fullwidth-catelog-carousel .dt-advanced-carousel-wrapper .slick-arrow[class*="bg"]:hover { background-color:'.$color.'; }';

				# Primary BG Color - Buttons
				$css .= 'input[type="submit"], input[type="reset"], input[type="button"], button[type="button"], *[role="button"], button, .button, a.button, .dt-sc-button, .elementor-button.dt-elementor-button,

				.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit,

				.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt,

				.woocommerce a.button.disabled, .woocommerce a.button:disabled, .woocommerce a.button:disabled[disabled], .woocommerce button.button.disabled, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce input.button.disabled, .woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce #respond input#submit.disabled, .woocommerce #respond input#submit:disabled, .woocommerce #respond input#submit:disabled[disabled],

				.woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt[disabled]:disabled, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt[disabled]:disabled, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt[disabled]:disabled, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt[disabled]:disabled,

				.yith-wcwl-add-to-wishlist a, .yith-wcqv-button, .dt-wcsg-button, .woocommerce .wishlist_table .add_to_cart.button, .woocommerce .yith-wcwl-popup-button a.add_to_wishlist, .woocommerce .wishlist_table a.ask-an-estimate-button, .woocommerce .wishlist-title a.show-title-form, .woocommerce .hidden-title-form a.hide-title-form, .woocommerce .wishlist_manage_table a.create-new-wishlist, .woocommerce a.added_to_cart { background-color:'.$color.'; }';

				# Primary BG Color - Headings/Titles
				$css .= '.mz-title .mz-title-content h2, .mz-title-content h3.widgettitle, .mz-title .mz-title-content:before, .mz-blog .comments a, .mz-blog div.vc_gitem-post-category-name, .mz-blog .ico-format, .side-navigation-content .dt-sc-wings-heading:after, .animated-twin-lines:after { background-color:'.$color.'; }';

				# Primary BG Color - Vertical Tabs
				$css .= '.dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a.current:before { background-color:'.$color.'; }';

				# Primary BG Color - Add-ons/Custom Modules
				$css .= '.live-chat a, .dt-sc-menu .menu-categories a:before, .dt-sc-training-details-overlay, .custom-navigation .vc_images_carousel .vc_carousel-indicators li,  .dt-sc-procedure-item:hover, ul.dt-sc-vertical-nav > li.active > a, ul.time-table > li, ul.time-slots > li a:hover, #wpsl-search-btn, #wpsl-stores li > p span, #wpsl-stores li > p, #wpsl-stores li > p ~ .wpsl-directions, .dt-sc-toggle-advanced-options span, .slick-dots li.slick-active, .slick-dots li:hover { background-color:'.$color.'; }';

				# Primary Border Color - Footer
				$css .= '#footer .wpcf7-form.bottom-bordered input[type="submit"]:hover, #footer .wpcf7-form.bottom-bordered button:hover, #footer .wpcf7-form.bottom-bordered input[type="button"]:hover, #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover { border-color:'.$color.'; }';

				# Primary Border Color - Widgets
				$css .= '.tagcloud a:hover, .dt-sc-dark-bg .tagcloud a:hover, .secondary-sidebar .type3 .widgettitle, .secondary-sidebar .type6 .widgettitle, .secondary-sidebar .type13 .widgettitle:before, .secondary-sidebar .type14 .widgettitle, .secondary-sidebar .type16 .widgettitle { border-color:'.$color.'; }';

				# Primary Border Color - Blog
				$css .= '.pagination ul li span, .pagination ul li a:hover, .blog-entry .entry-social-share .share, .dt-sc-post-entry.entry-cover-layout .blog-entry.sticky, .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-social-share .share, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-tags a:hover, .dt-sc-classic-style.dt-sc-post-entry .blog-entry.sticky > div.entry-meta-group > div, .dt-sc-classic-overlay-style.dt-sc-post-entry .blog-entry > .entry-categories > a:hover, .dt-sc-overlay-style.dt-sc-post-entry.entry-list-layout .blog-entry .entry-thumb, .dt-sc-overlay-style.dt-sc-post-entry.entry-list-layout.entry-right-thumb .blog-entry .entry-thumb, .dt-sc-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry > div.entry-thumb, .dt-sc-minimal-style.dt-sc-post-entry.entry-list-layout .blog-entry.sticky, .dt-sc-minimal-style.dt-sc-post-entry.entry-list-layout .blog-entry.sticky > div.entry-meta-group, .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry.sticky > div.entry-title:after, .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry:hover > div.entry-title:after, .blog-single-entry.post-overlay .author span,.commentlist li.comment .reply a,.blog-single-entry.post-overlap > .entry-comments a:hover,.blog-single-entry.post-overlap > .entry-author > .author-wrap:hover,.blog-single-entry.post-overlap > .entry-date > .date-wrap:hover,.blog-single-entry.post-overlap > .entry-categories > .category-wrap:hover,.blog-single-entry.post-overlap > .entry-likes-views .dt-sc-like-views > div:hover,.blog-single-entry.post-overlap > div.entry-meta-group .entry-comments a:hover,.blog-single-entry.post-overlap > div.entry-meta-group .entry-author > .author-wrap:hover,.blog-single-entry.post-overlap > div.entry-meta-group .entry-date > .date-wrap:hover,.blog-single-entry.post-overlap > div.entry-meta-group > .entry-categories > .category-wrap:hover,.blog-single-entry.post-overlap > div.entry-meta-group .entry-likes-views .dt-sc-like-views > div:hover,.blog-single-entry.post-breadcrumb-fixed,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-comments a:hover,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-author > .author-wrap:hover,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-likes-views .dt-sc-like-views > div:hover,.blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-date .date-wrap:hover,.blog-single-entry.post-breadcrumb-fixed .entry-comments a:hover,.blog-single-entry.post-breadcrumb-fixed .entry-author > .author-wrap:hover,.blog-single-entry.post-breadcrumb-fixed .entry-likes-views .dt-sc-like-views > div:hover,.blog-single-entry.post-breadcrumb-fixed .entry-date .date-wrap:hover,.single-post-header-wrapper.dt-parallax-bg > .container .post-categories a:hover, div[class*="metagroup-elements-filled"] div[class*="entry-"], div[class*="meta-elements-filled"], div[class*="metagroup-elements-boxed"] div[class*="entry-"]:hover, div[class*="meta-elements-boxed"]:hover, .dt-related-carousel .carousel-pager > a, .page-link > span, .page-link > a:hover, .page-link a, .page-link > span, .blog-single-entry.post-overlap > .entry-tags a,.blog-single-entry.post-overlap > .entry-social-share .share .dt-share-list li a,.blog-single-entry.post-overlap > .entry-comments a,.blog-single-entry.post-overlap > .entry-likes-views .dt-sc-like-views > div,.blog-single-entry.post-overlap > .entry-tags a,.blog-single-entry.post-overlap > .entry-social-share .share .dt-share-list li a,.blog-single-entry.post-overlap > .entry-comments a,.blog-single-entry.post-overlap > .entry-likes-views .dt-sc-like-views > div,.blog-single-entry.post-overlap > div.entry-meta-group .entry-tags a,.blog-single-entry.post-overlap > div.entry-meta-group .share .dt-share-list li a,.blog-single-entry.post-overlap > div.entry-meta-group:before,.blog-single-entry.post-overlap > div.entry-meta-group:after,.blog-single-entry.post-overlap > div.entry-meta-group .entry-comments a,.blog-single-entry.post-overlap > div.entry-meta-group .entry-likes-views .dt-sc-like-views > div,.blog-single-entry.post-overlap > .entry-related-posts > h4,.blog-single-entry.post-breadcrumb-fixed .entry-comments a,.blog-single-entry.post-breadcrumb-fixed .entry-categories > .category-wrap > a,.blog-single-entry.post-breadcrumb-fixed .entry-tags a,.blog-single-entry.post-breadcrumb-fixed .entry-social-share .share .dt-share-list li a,.blog-single-entry.post-breadcrumb-parallax > .entry-meta-group,.blog-single-entry.post-breadcrumb-parallax > .entry-meta-group:before,.blog-single-entry.post-breadcrumb-parallax > .entry-meta-group:after, .post-custom-minimal.blog-single-entry .write-comment-button a, .blog-single-entry.post-overlap > div.entry-meta-group > .entry-categories > .category-wrap, .blog-single-entry.post-overlap > .entry-categories > .category-wrap, .blog-single-entry.post-overlap > div.entry-meta-group > .entry-author > .author-wrap, .blog-single-entry.post-overlap > .entry-author > .author-wrap, article[class*="post-custom-"].blog-single-entry .entry-social-share > .share { border-color:'.$color.'; }';

				# Primary Border Color - Portfolios
				$css .= '.dt-sc-portfolio-sorting a.active-sort, .dt-sc-portfolio-sorting a:hover, .portfolio.type7 .image-overlay .links a:before { border-color:'.$color.'; }';

				# Primary Border Color - Tabs
				$css .= 'ul.dt-sc-tabs-vertical > li > a.current, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a.current:before, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a.current:before { border-color:'.$color.'; }';

				# Primary Border Top Color - Misc
				$css .= '.blog-single-entry.post-breadcrumb-fixed .entry-thumb > .entry-format a:after, .elementor-widget-jet-headline.dt-minimal-top-sep-title:hover .jet-headline .jet-headline__divider:before { border-top-color:'.$color.'; }';

				# Primary Border Color - Miscellaneous/Shortcodes
				$css .= '.dt-skin-primary-border, blockquote, carousel-arrows a:hover, ul.dt-sc-vertical-nav, ul.dt-sc-vertical-nav > li:first-child > a,
				.dt-sc-loading:before, .side-navigation.type2 ul.side-nav, .side-navigation.type2 ul.side-nav li, .side-navigation.type2 ul.side-nav li ul, .dt-sc-images-carousel li,
				.dt-sc-counter-wrapper.type2 .dt-sc-counter-inner .dt-sc-counter-icon-wrapper:after, .elementor-button.dt-elementor-button.dt-bordered:hover { border-color:'.$color.'; }';

				# Primary Border Bottom Color - Miscellaneous/Shortcodes
				$css .= '.dt-sc-up-arrow:before, .elementor-widget-jet-headline.dt-minimal-bottom-sep-title:hover .jet-headline .jet-headline__divider:before { border-bottom-color:'.$color.'; }';

				# Primary Border Left Color - Miscellaneous/Shortcodes
				$css .= '.dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current:before, .dt-sc-event-image-caption:hover .dt-sc-image-content:before, .side-navigation.type2 ul.side-nav > li.current_page_item > a:after, .side-navigation.type2 ul.side-nav > li > ul > li.current_page_item > a:after { border-left-color:'.$color.'; }';

				# Primary Border Color - Add-ons/Custom Modules
				$css .= '.dt-sc-menu-sorting a.active-sort, .dt-sc-menu .image-overlay .price { border-color:'.$color.'; }';

				# Primary BG Color - 404/Not-Found
				$css .= '.error404 .type2 a.dt-sc-back, .error404 .type4 .error-box:before, .error404 .type8 .dt-go-back { background-color:'.$color.'; }';

				# Primary Color - 404/Not-Found
				$css .= '.error404 h2, .error404 .type5 h2, .error404 .type6 .error-box h2, .error404 .type2 h2, .error404 .type8 h2, .error404 .type8 .dt-go-back:hover i, .error404 .type1 .dt-sc-button:before { color:'.$color.'; }';

				# Primary BG Color - Coming Soon
				$css .= '.under-construction.type4 .dt-sc-counter-wrapper, .under-construction.type1 .dt-sc-counter-wrapper .counter-icon-wrapper:before, .under-construction.type7 .dt-sc-counter-wrapper { background-color:'.$color.'; }';

				# Primary Color - Coming Soon
				$css .= '.under-construction.type4 .wpb_wrapper > h2 span, .under-construction.type4 .read-more i, .under-construction.type4  .wpb_wrapper >  h4:after, .under-construction.type4 .wpb_wrapper > h4:before, .under-construction.type1 .read-more span.fa, .under-construction.type1 .read-more a:hover, .under-construction.type2 .counter-icon-wrapper .dt-sc-counter-number, .under-construction.type2 h2, .under-construction.type2 .dt-sc-counter-wrapper h3, .under-construction.type2 .mailchimp-newsletter h3,  .under-construction.type7 h2, .under-construction.type7 .mailchimp-newsletter h3, .under-construction.type3 p, .under-construction.type5 h2 span, .under-construction.type5 .dt-sc-counter-number, .under-construction.type5 input[type="email"], .under-construction.type7 .aligncenter .wpb_text_column h2 { color:'.$color.'; }';

				# Primary BG Color - BuddyPress
				$css .= '#buddypress div.pagination .pagination-links span, #buddypress div.pagination .pagination-links a:hover, #buddypress #group-create-body #group-creation-previous, #item-header-content #item-meta > #item-buttons .group-button, #buddypress div#subnav.item-list-tabs ul li.feed a:hover, #buddypress div.activity-meta a:hover, #buddypress div.item-list-tabs ul li.selected a span, #buddypress .activity-list li.load-more a, #buddypress .activity-list li.load-newest a { background-color:'.$color.'; }';

				# Primary Border Color - BuddyPress
				$css .= '#buddypress div.pagination .pagination-links span, #buddypress div.pagination .pagination-links a:hover, #buddypress #members-dir-list ul li:hover { border-color:'.$color.'; }';

				# Primary Color - BuddyPress
				$css .= '#members-list.item-list.single-line li h5 span.small a.button, #buddypress div.item-list-tabs ul li.current a, #buddypress #group-create-tabs ul li.current a, #buddypress a.bp-primary-action:hover span, #buddypress div.item-list-tabs ul li.selected a,
				.widget.buddypress div.item-options a:hover, .widget.buddypress div.item-options a.selected, #footer .footer-widgets.dt-sc-dark-bg .widget.buddypress div.item-options a.selected, .widget.widget_bp_core_members_widget div.item .item-title a:hover, .widget.buddypress .bp-login-widget-user-links > div.bp-login-widget-user-link a:hover { color:'.$color.'; }';

				# Primary BG Color - BbPress
				$css .= '#bbpress-forums li.bbp-header, .bbp-submit-wrapper #bbp_topic_submit, .bbp-reply-form #bbp_reply_submit, .bbp-pagination-links a:hover, .bbp-pagination-links span.current, #bbpress-forums #subscription-toggle a.subscription-toggle { background-color:'.$color.'; }';

				# Primary Border Color - BbPress
				$css .= '.bbp-pagination-links a:hover, .bbp-pagination-links span.current { border-color:'.$color.'; }';

				# Primary Color - BbPress
				$css .= '.bbp-forums .bbp-body .bbp-forum-info::before { color:'.$color.'; }';

				# Primary BG Color - Events
				$css .= '#tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option a:hover, #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active a:hover, #tribe-bar-form .tribe-bar-submit input[type="submit"], #tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a, .tribe-events-calendar thead th, #tribe-events-content .tribe-events-tooltip h4, .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"], .tribe-events-read-more, #tribe-events .tribe-events-button, .tribe-events-button, .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a, .tribe-events-back > a, #tribe_events_filters_toggle { background-color:'.$color.'; }';

				# Primary Border Color - Events
				$css .= '.tribe-events-list .tribe-events-event-cost span { border-color:'.$color.'; }';

				# Primary BG Color - Events Pro
				$css .= '.tribe-grid-header, .tribe-grid-allday .tribe-events-week-allday-single, .tribe-grid-body .tribe-events-week-hourly-single { background-color:'.$color.'; }';

				# Primary BG Color - Event Detail
				$css .= '.type1.tribe_events .event-image-wrapper .event-datetime > span, .type3.tribe_events .event-date { background-color:'.$color.'; }';

				# Primary Color - Event Detail
				$css .= '.type1 .event-schedule, .type1.tribe_events .nav-top-links a:hover, .type1.tribe_events .event-image-wrapper .event-datetime > i, .type1.tribe_events .event-image-wrapper .event-venue > i, .type1.tribe_events h4 a, .type2.tribe_events .date-wrapper p span, .type2.tribe_events h4 a, .type3.tribe_events .right-calc a:hover, .type3.tribe_events .tribe-events-sub-nav li a:hover, .type3.tribe_events .tribe-events-sub-nav li a span, .type4.tribe_events .data-wrapper p span, .type4.tribe_events .data-wrapper p i, .type4.tribe_events .event-organize h4 a, .type4.tribe_events .event-venue h4 a, .type5.tribe_events .event-details h3, .type5.tribe_events .event-organize h3, .type5.tribe_events .event-venue h3, .type5.tribe_events .data-wrapper p span, .data-wrapper p i, .type5.tribe_events .event-organize h4 a, .type5.tribe_events .event-venue h4 a { color:'.$color.'; }';

				# Primary BG Color - Event Listing Shortcode
				$css .= '.dt-sc-event.type1 .dt-sc-event-thumb p, .dt-sc-event.type1 .dt-sc-event-meta:before, .dt-sc-event.type2:hover .dt-sc-event-meta, .dt-sc-event.type3 .dt-sc-event-date, .dt-sc-event.type3:hover .dt-sc-event-meta { background-color:'.$color.'; }';

				# Primary Border Bottom Color - Event Listing Shortcode
				$css .= '.dt-sc-event.type4 .dt-sc-event-date:after { border-bottom-color:'.$color.'; }';

				# Primary Color - Event Listing Shortcode
				$css .= '.dt-sc-event.type1 .dt-sc-event-meta p span, .dt-sc-event.type1:hover h2.entry-title a, .dt-sc-event.type3:hover h2.entry-title a, .dt-sc-event.type4 .dt-sc-event-date span { color:'.$color.'; }';

				# Primary BG Color - Event Widgets
				$css .= '.widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td,

				.widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present, .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today, .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover, .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover,

				.dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today, .dt-sc-dark-bg .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover { background-color:'.$color.'; }';

				# Primary Border Color - Event Widgets
				$css .= '.widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td { border-color:'.$color.'; }';

				# Primary Color - Event Widgets
				$css .= '.widget.tribe-events-countdown-widget .tribe-countdown-text a:hover { color:'.$color.'; }';

				# Primary Color - Cookie and Privacy Settings
				$css .= '.dt-inline-modal > h4 { background-color:'.$color.'; }';
			}

			return $css;
		}

		public function secondary_color_style( $color ) {
			$css = '';

			# Secondary Color - Miscellaneous/Shortcodes
			$css .= '.dt-skin-secondary-color, .commententries ul.commentlist li .reply a.comment-reply-login:hover, .blog-single-entry ul li .comment-body .comment-author a:hover, .blog-single-entry.post-overlap > .entry-meta-group > .entry-categories > .category-wrap > a:hover, .blog-single-entry.post-overlap > .entry-categories > .category-wrap > a:hover, .blog-single-entry.post-overlap > .entry-meta-group .entry-likes-views .dt-sc-like-views > div > a:hover, .blog-single-entry.post-overlap > .entry-meta-group > .entry-author > .author-wrap > a:hover, .blog-single-entry.post-overlap > .entry-author > .author-wrap > a:hover, .blog-single-entry[class*="post-custom-classic"] .entry-post-navigation > div > .nav-title-wrap h3 a:hover, .post-custom-minimal.blog-single-entry .entry-post-navigation > .post-prev-link h3 a:hover, .dt-sc-header-icons-list > div.loginlogout-item a:hover i, .dt-sc-header-icons-list > div.wishlist-item a:hover i { color:'.$color.'; }';

			# Secondary BG Color - Miscellaneous/Shortcodes
			$css .= '.dt-skin-secondary-bg, .elementor-section[class*="dt-skin-secondary-bg-opaque"]:before, .dt-header-default .dt-sc-header-icons-list-item .dt-sc-shop-menu-icon .dt-sc-shop-menu-cart-inner .dt-sc-shop-menu-cart-number,

			.mz-blog .comments a:hover, .mz-blog div.vc_gitem-post-category-name:hover, .side-navigation.type2 ul.side-nav li a:before, .side-navigation.type2 ul.side-nav > li.current_page_item > a:before, .side-navigation.type2 ul.side-nav > li > ul > li.current_page_item > a:before, .side-navigation.type2 ul.side-nav > li > ul > li > ul > li.current_page_item > a:before, .slick-dots li, .dt-related-carousel .carousel-pager > a, .dt-related-carousel div[class*=carousel-] > div:hover, div[class*="entry-"].dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-meta-group > div:not(:last-child):before, .dt-skin-secondary-bg.dt-top-bar:before,

			.dt-sc-post-entry .blog-entry .entry-button a.dt-sc-button:hover, .dt-sc-overlap-style.dt-sc-post-entry .blog-entry .entry-format a:hover:after, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry > div.entry-author > a, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry > div.entry-likes-views .dt-sc-like-views > div, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-comments > a, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-categories a:hover, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-likes-views .dt-sc-like-views > div, .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-author a, .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-button a.dt-sc-button:hover, .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry div.entry-format a, .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry.sticky div.entry-format a, .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry .entry-button a.dt-sc-button:hover, div.dt-sc-posts-meta-group[class*="metagroup-elements-filled"] div[class*="entry-"]:hover, article[class*="post-custom"].blog-single-entry div.dt-sc-posts-meta-group[class*="metagroup-elements-filled"] .entry-social-share .share > i, .blog-single-entry.post-overlay div[class*="meta-elements-"].entry-social-share:hover .share i, .blog-single-entry.post-overlay div[class*="meta-elements-filled"].entry-social-share .share i, .blog-single-entry.post-overlap div[class*="meta-elements-"].entry-social-share:hover .share i, .blog-single-entry.post-overlap div[class*="meta-elements-filled"].entry-social-share .share i, article[class*="custom-"].blog-single-entry div[class*="meta-elements-"].entry-social-share .share i, .elementor-button.dt-elementor-button:hover, .elementor-button.dt-elementor-button.dt-bordered:hover, #toTop:hover, .dt-sc-header-icons-list > div.search-item.search-overlay .dt-sc-search-form-container .dt-sc-search-overlay-form-close:hover { background-color:'.$color.'; }';

			# Secondary BG Color - Buttons
			$css .= 'input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover, button[type="button"]:hover, *[role="button"]:hover, button:hover, .button:hover, a.button:hover, .dt-sc-button:hover, .elementor-button.dt-elementor-button:hover,

			.dt-sc-simple-style.dt-sc-post-entry .blog-entry:hover .entry-button a.dt-sc-button:hover span, .intro-section .elementor-column-wrap.elementor-element-populated .elementor-widget-button a.elementor-button:hover, .dt-sc-infinite-portfolio-load-more:hover, #wpsl-stores li > p ~ .wpsl-directions:hover,

			.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover,

			.woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover,

			.woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover,

			.woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt[disabled]:disabled:hover, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt[disabled]:disabled:hover, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt[disabled]:disabled:hover, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt[disabled]:disabled:hover,

			.yith-wcwl-add-to-wishlist a:hover, .yith-wcqv-button:hover, .dt-wcsg-button:hover, .woocommerce .wishlist_table .add_to_cart.button:hover, .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover, .woocommerce .wishlist_table a.ask-an-estimate-button:hover, .woocommerce .wishlist-title a.show-title-form:hover, .woocommerce .hidden-title-form a.hide-title-form:hover, .woocommerce .wishlist_manage_table a.create-new-wishlist:hover, .woocommerce a.added_to_cart:hover { background-color:'.$color.'; }';

			# Secondary Border Color - Miscellaneous/Shortcodes
			$css .= '.dt-skin-secondary-border, .side-navigation.type5 ul.side-nav, .side-navigation.type5 ul.side-nav li a, .side-navigation.type5 ul.side-nav li ul,

			/* New */
			.intro-section .elementor-column-wrap.elementor-element-populated:hover .elementor-widget-button a.elementor-button, .dt-sc-simple-style.dt-sc-post-entry .blog-entry:hover .entry-button a.dt-sc-button span,.active-centered .dt-sc-simple-style.dt-sc-post-entry.entry-grid-layout:nth-child(3) .blog-entry .entry-button a.dt-sc-button span, .fullwidth-icon-carousel .elementor-column-gap-extended>.elementor-row>.elementor-column>.elementor-element-populated .elementor-widget-button a.elementor-button:hover, .fullwidth-icon-carousel .elementor-column-gap-extended>.elementor-row>.elementor-column>.elementor-element-populated:hover .elementor-widget-button a.elementor-button, .elementor-button.dt-elementor-button.dt-bordered:hover { border-color:'.$color.'; }';

			# Secondary BG Color - 404/Not-Found
			$css .= '.error404 .type2 a.dt-sc-back:hover { background-color:'.$color.'; }';

			# Secondary BG Color - BuddyPress
			$css .= '#item-header-content #item-meta > #item-buttons .group-button:hover, #buddypress .activity-list li.load-more a:hover, #buddypress .activity-list li.load-newest a:hover { background-color:'.$color.'; }';

			# Secondary BG Color - BbPress
			$css .= '#bbpress-forums #subscription-toggle a.subscription-toggle:hover, .bbp-submit-wrapper #bbp_topic_submit:hover { background-color:'.$color.'; }';

			# Secondary BG Color - Events
			$css .= '#tribe-bar-form .tribe-bar-submit input[type="submit"]:hover, .tribe-events-read-more:hover, #tribe-events .tribe-events-button:hover, .tribe-events-button:hover, .tribe-events-back > a:hover, .datepicker thead tr:first-child th:hover, .datepicker tfoot tr th:hover, #tribe_events_filters_toggle:hover, .tribe-events-grid .tribe-grid-header .tribe-week-today, .tribe-grid-body div[id*="tribe-events-event-"]:hover { background-color:'.$color.'; }';

			# Secondary BG Color - Events Pro
			$css .= '.tribe-grid-header .tribe-week-today { background-color:'.$color.'; }';

			return $css;
		}

		public function tertiary_color_style( $color ) {
			$css = '';

			# Tertiary Color - Miscellaneous/Shortcodes
			$css .= '.dt-skin-tertiary-color { color:'.$color.'; }';

			# Tertiary BG Color - New
			$css .= '.dt-skin-tertiary-bg, .elementor-section[class*="dt-skin-tertiary-bg-opaque"]:before, .dt-no-footer-builder-content.footer-copyright, .side-navigation.type1 ul.side-nav > li.current_page_item > a, .side-navigation.type1 ul.side-nav > li > ul > li.current_page_item > a, .side-navigation.type1 ul.side-nav > li > ul > li > ul > li.current_page_item > a,

			.elementor-widget-icon-box.elementor-view-stacked.ico-type1.alter .elementor-icon, .side-navigation.type4 ul.side-nav li.current_page_item a, .elementor-widget-image-box.ico-type1.alter .elementor-image-box-img, .elementor-element.elementor-widget-icon-box.dt-support-info-box.elementor-view-stacked .elementor-icon { background-color:'.$color.'; }';

			# Tertiary Border Color - New
			$css .= '.dt-skin-tertiary-border, .elementor-widget-dt-counter .dt-sc-counter-wrapper.type2 .dt-sc-counter-inner { border-color:'.$color.'; }';

			return $css;
		}

	}
}

IVA_Dynamic_Skin_CSS::get_instance();