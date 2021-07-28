<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'IVA_THEME_DIR', get_template_directory() );
define( 'IVA_THEME_URI', get_template_directory_uri() );
define( 'IVA_THEME_SETTINGS', 'iva-settings' );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'IVA_THEME_NAME', $themeData->get('Name'));
	define( 'IVA_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Load default theme options
 * ---------------------------------------------------------------------------*/
require_once IVA_THEME_DIR .'/inc/class-theme-options.php';

/* ---------------------------------------------------------------------------
 * Loads Customizer
 * ---------------------------------------------------------------------------*/
require_once( IVA_THEME_DIR .'/inc/customizer/lib/class-fontawesome.php' );
require_once( IVA_THEME_DIR .'/inc/customizer/lib/class-font-families.php' );
require_once( IVA_THEME_DIR .'/inc/customizer/lib/class-customizer-sanitizes.php' );
require_once( IVA_THEME_DIR .'/inc/customizer/index.php' );
require_once( IVA_THEME_DIR .'/inc/metabox/index.php' );
function iva_defaults() {}

/* ---------------------------------------------------------------------------
 * Widget Area
 * ---------------------------------------------------------------------------*/
require_once IVA_THEME_DIR .'/inc/widget-area/class-widget-area.php';

/* ---------------------------------------------------------------------------
 * Dynamic CSS
 * ---------------------------------------------------------------------------*/
require_once IVA_THEME_DIR .'/inc/class-theme-dynamic-css.php';
require_once IVA_THEME_DIR .'/inc/class-theme-dynamic-skin-css.php';

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'IVA_LANG_DIR', IVA_THEME_DIR. '/languages' );
load_theme_textdomain( 'iva', IVA_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( IVA_THEME_DIR .'/framework/register-functions.php' );

// Header -----------------------------------------------------------------------
require_once( IVA_THEME_DIR .'/framework/register-head.php' );

// Hooks ------------------------------------------------------------------------
require_once( IVA_THEME_DIR .'/framework/register-hooks.php' );

// Backend Menu Walker
require_once( IVA_THEME_DIR .'/framework/register-frontend-menu-walker.php' );

// Post Functions ---------------------------------------------------------------
require_once( IVA_THEME_DIR .'/framework/register-post-functions.php' );
new iva_post_functions;

// Plugins ---------------------------------------------------------------------- 
require_once( IVA_THEME_DIR .'/framework/register-plugins.php' );

// Register Templates -----------------------------------------------------------
require_once( IVA_THEME_DIR .'/framework/register-templates.php' );

// Register Gutenberg -----------------------------------------------------------
require_once( IVA_THEME_DIR .'/framework/register-gutenberg-editor.php' );