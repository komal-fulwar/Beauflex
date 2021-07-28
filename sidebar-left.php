<?php
$sidebars = array();
if( ( is_archive() || is_search() || is_home() ) && !is_post_type_archive( 'tribe_events' )  ):

	if( is_active_sidebar('post-archives-sidebar-left') ):
		array_push($sidebars, 'post-archives-sidebar-left' );
	endif;
	
	$enable = iva_get_option( 'show-standard-left-sidebar-for-post-archives' );
	if( !empty( $enable )):
		if( is_active_sidebar('standard-sidebar-left') ):
			array_push($sidebars, 'standard-sidebar-left' );
		endif;
	endif;
elseif( is_post_type_archive( 'tribe_events' ) ):

	$enable = iva_get_option( 'show-standard-left-sidebar-for-tribe-events-archives' );
	if( !empty( $enable )):
		if( is_active_sidebar('standard-sidebar-left') ):
			array_push($sidebars, 'standard-sidebar-left' );
		endif;
	endif;
endif;

if( $sidebars ) {

	$wtstyle = iva_get_option( 'widget-title-style' );
	
	if(!empty($wtstyle)):
		echo "<div class='{$wtstyle}'>";
	endif;
	
	foreach( $sidebars as $sidebar ){
		dynamic_sidebar( $sidebar );
	}
	
	if(!empty($wtstyle)):	
		echo "</div>";
	endif;
}