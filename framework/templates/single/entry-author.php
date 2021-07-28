<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php
	if( $post_Style == 'breadcrumb-parallax' ): ?>
		<span><?php esc_html_e('By', 'iva'); ?></span>
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php esc_attr_e('View all posts by ', 'iva'); echo get_the_author();?>">
			<?php echo get_the_author();?>
        </a><?php
	elseif($post_Style == 'overlay' || $post_Style == 'overlap' ): ?>
    	<div class="author-wrap">
            <i class="fas fa-user"> </i>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php esc_attr_e('View all posts by ', 'iva'); echo get_the_author();?>">
                <?php echo get_the_author();?>
            </a>
		</div><?php
	elseif( $post_Style == 'breadcrumb-fixed' ): ?>
    	<div class="author-wrap">
            <i class="fas fa-user"> </i>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php esc_attr_e('View all posts by ', 'iva'); echo get_the_author();?>">
                <?php echo get_the_author();?>
            </a>
		</div><?php
	else: ?>
		<i class="fas fa-user"> </i>
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php esc_attr_e('View all posts by ', 'iva'); echo get_the_author();?>">
			<?php echo get_the_author();?>
        </a><?php
	endif; ?>