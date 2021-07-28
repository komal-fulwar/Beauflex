<?php
/**
 * THEMENAME Theme Customizer
 */
if( !class_exists('IVA_Customizer') ) {

	class IVA_Customizer {

		private static $instance;

		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {

				self::$instance = new self;
			}

			return self::$instance;
		}

		public function __construct() {
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_controls_scripts') );

			add_filter( 'customize_previewable_devices', array( $this, 'register_previewable_devices' ) );

			add_action( 'customize_register', array( $this, 'extend_customizer_panel' ), 5 );
			add_action( 'customize_register', array( $this, 'extend_customizer_controls' ), 10 );
			add_action( 'customize_register', array( $this, 'register_theme_panels' ), 15);
		}

		function enqueue_controls_scripts() {

			wp_enqueue_script( 'iva-extend-customizer-js', IVA_THEME_URI . '/inc/customizer/assets/js/customizer.js', array(), IVA_THEME_VERSION, true );
			wp_enqueue_style( 'iva-extend-customizer-css', IVA_THEME_URI . '/inc/customizer/assets/css/customizer.css', null, IVA_THEME_VERSION );
			
			wp_enqueue_script( 'iva-color-alpha-js', IVA_THEME_URI . '/inc/customizer/assets/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), IVA_THEME_VERSION, true );

			wp_register_script( 'jquery-interdependencies', IVA_THEME_URI . '/inc/customizer/assets/js/jquery.interdependencies.js', array( 'jquery' ), IVA_THEME_VERSION, true );
			wp_enqueue_script( 'dttheme-customizer-settings-dependency-js', IVA_THEME_URI . '/inc/customizer/assets/js/jquery.dependencies.js', array( 'jquery-interdependencies' ), IVA_THEME_VERSION, true );			
		}

		function register_previewable_devices( $devices ) {
			$devices = array(
				'desktop' => array(
					'label' => esc_html__( 'Enter desktop preview mode', 'iva'),
					'default' => true,
				),
				'tablet-landscape' => array(
					'label' => esc_html__( 'Enter tablet landscape preview mode', 'iva'),
				),
				'tablet' => array(
					'label' => esc_html__( 'Enter tablet preview mode', 'iva'),
				),
				'mobile' => array(
					'label' => esc_html__( 'Enter mobile preview mode', 'iva'),
				),
			);

			return $devices;
		}

		/**
		 * Nested panels & sections
		 */
		function extend_customizer_panel( $wp_customize ) {
			$wp_customize->register_panel_type( 'IVA_WP_Customize_Panel' );
			$wp_customize->register_section_type( 'IVA_WP_Customize_Section' );

			require_once IVA_THEME_DIR . '/inc/customizer/lib/class-custom-wp-customize-panel.php';
			require_once IVA_THEME_DIR . '/inc/customizer/lib/class-custom-wp-customize-section.php';
		}

		function extend_customizer_controls( $wp_customize ) {

			/**
			 * Register Controls
			 */
			$wp_customize->register_control_type('IVA_Customize_Control');
			require IVA_THEME_DIR . '/inc/customizer/controls/class-base-control.php';
						
			$wp_customize->register_control_type('IVA_Customize_Control_Separator');
			require IVA_THEME_DIR . '/inc/customizer/controls/separator/class-control-separator.php';
			
			$wp_customize->register_control_type('IVA_Customize_Control_Description');
			require IVA_THEME_DIR . '/inc/customizer/controls/description/class-control-description.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Radio_Image');
			require IVA_THEME_DIR . '/inc/customizer/controls/radio-image/class-control-radio-image.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Sortable');
			require IVA_THEME_DIR . '/inc/customizer/controls/sortable/class-control-sortable.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Slider');
			require IVA_THEME_DIR . '/inc/customizer/controls/slider/class-control-slider.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Responsive_Slider');
			require IVA_THEME_DIR . '/inc/customizer/controls/responsive-slider/class-control-responsive-slider.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Responsive_Number');
			require IVA_THEME_DIR . '/inc/customizer/controls/responsive-number/class-control-responsive-number.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Responsive_Spacing');
			require IVA_THEME_DIR . '/inc/customizer/controls/responsive-spacing/class-control-responsive-spacing.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Spacing');
			require IVA_THEME_DIR . '/inc/customizer/controls/spacing/class-control-spacing.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Color');
			require IVA_THEME_DIR . '/inc/customizer/controls/color/class-control-color.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Background');
			require IVA_THEME_DIR . '/inc/customizer/controls/background/class-control-background.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Typography');
			require IVA_THEME_DIR . '/inc/customizer/controls/typography/class-control-typography.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Fontawesome');
			require IVA_THEME_DIR . '/inc/customizer/controls/fontawesome/class-control-fontawesome.php';

			$wp_customize->register_control_type('IVA_Customize_Control_Switch');
			require IVA_THEME_DIR . '/inc/customizer/controls/switch/class-control-switch.php';
			
			$wp_customize->register_control_type('IVA_Customize_Control_Upload');
			require IVA_THEME_DIR . '/inc/customizer/controls/upload/class-control-upload.php';
		}

		function register_theme_panels( $wp_customize ) {

			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-general/index.php';
			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-identity/index.php';
			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-breadcrumb/index.php';
			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-layout/index.php';
			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-widget-area/index.php';
			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-typography/index.php';			

			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-page-settings/index.php';
			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-sociable/index.php';
			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-hooks/index.php';
			require_once IVA_THEME_DIR . '/inc/customizer/settings/site-skin/index.php';

			if( class_exists( 'Tribe__Events__Main' ) ) {
				require_once IVA_THEME_DIR . '/inc/customizer/settings/site-tribe-events/index.php';
			}

			require_once IVA_THEME_DIR . '/inc/customizer/settings/additional-js/index.php';

			/**
			 * Alter default settings position
			 */
			$wp_customize->get_control('custom_logo')->section  = 'site-identity-logo-section';
			$wp_customize->get_control('custom_logo')->priority = 5;

			$wp_customize->get_control('blogname')->section  = 'site-identity-logo-section';
			$wp_customize->get_control('blogname')->priority = 25;

			$wp_customize->get_control('blogdescription')->section  = 'site-identity-logo-section';
			$wp_customize->get_control('blogdescription')->priority = 35;

			$wp_customize->get_control('site_icon')->section  = 'site-identity-logo-section';
			$wp_customize->get_control('site_icon')->priority = 100;			
		}
	}
}

/**
 *  Kicking this off by calling 'get_instance()' method
 */
IVA_Customizer::get_instance();