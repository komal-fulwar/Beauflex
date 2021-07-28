<?php
$sidebars = array();
if( ( is_archive() || is_search() || is_home() ) && !is_post_type_archive( 'tribe_events' )  ):

	if( is_active_sidebar('post-archives-sidebar-right') ):
		array_push($sidebars, 'post-archives-sidebar-right' );
	endif;
	
	$enable = iva_get_option( 'show-standard-right-sidebar-for-post-archives' );
	if( !empty( $enable )):
		if( is_active_sidebar('standard-sidebar-right') ):
			array_push($sidebars, 'standard-sidebar-right' );
		endif;
	endif;
elseif( is_post_type_archive( 'tribe_events' ) ):

	$enable = iva_get_option( 'show-standard-right-sidebar-for-tribe-events-archives' );
	if( !empty( $enable )):
		if( is_active_sidebar('standard-sidebar-right') ):
			array_push($sidebars, 'standard-sidebar-right' );
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