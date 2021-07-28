<?php
/**
 * Add style to customiser : widget-title-style
 */
add_filter( 'dt_widget_title_styles', 'tooltip_border_add_style', 10 );
function tooltip_border_add_style( $default ) {
	$default['type6'] = esc_html__('Tooltip Border', 'iva');
	return $default;
}

/**
 * Customise Before Title : used in register_sidebar 
 */
add_filter( 'dt_widget_before_title_tag', 'tooltip_border_before_title_tag', 10, 3 );
function tooltip_border_before_title_tag( $before_title, $style = '', $tag ) {

	if( $style == 'type6' ) {

		$before_title = '<'.$tag.' class="widgettitle">';
	}

	return $before_title;
}

/**
 * Customise After Title : used in register_sidebar 
 */
add_filter( 'dt_widget_after_title_tag', 'tooltip_border_after_title_tag', 10, 3 );
function tooltip_border_after_title_tag( $after_title, $style = '', $tag ) {

	if( $style == 'type6' ) {

		$after_title = '</'.$tag.'>';
	}

	return $after_title;
}

/**
 * Enqueue "Tooltip Border" Widget Style
 */
add_action( 'wp_enqueue_scripts', 'tooltip_border_enqueue_styles', 101 );
function tooltip_border_enqueue_styles() {

	wp_enqueue_style( 'widget-style-tooltip-border', get_theme_file_uri('/css/widget.css'), array( 'iva-widget' ), '1.0', 'all'  );
}