<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php
 	if( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		if( $post_Style == 'dt-sc-simple-style' || $post_Style == 'dt-sc-simple-withbg-style' || $post_Style == 'dt-sc-overflow-style' ):
			comments_popup_link( esc_html__('Add Comment', 'iva'), esc_html__('1 Comment', 'iva'), esc_html__('% Comments', 'iva'), '', esc_html__('Comments Off', 'iva'));
		elseif( $post_Style == 'dt-sc-classic-style' ):
			comments_popup_link('<i class="pe-icon pe-chat"> </i> 0', '<i class="pe-icon pe-chat"> </i> 1', '<i class="pe-icon pe-chat"> </i> %', '', '<i class="pe-icon pe-chat"> </i> 0');
		else:
			comments_popup_link('<i class="fas fa-comment"> </i> 0', '<i class="fas fa-comment"> </i> 1', '<i class="fas fa-comment"> </i> %', '', '<i class="fas fa-comment"> </i> 0');
		endif;
	}?>