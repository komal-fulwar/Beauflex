<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

	<?php if( is_sticky( $post_ID ) ) echo '<span class="sticky-post">'.esc_html__('Featured', 'iva').'</span>'; ?>
	<h1><?php echo get_the_title($post_ID);?></h1>