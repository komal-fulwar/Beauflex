<div class="dt-no-header-builder-content dt-no-header-iva"><?php

	$site_title = iva_get_option( 'display-site-title' );
	$site_tag = iva_get_option( 'display-site-tagline' );

	if( $site_tag )  { ?>
        <div class="no-header-top">
            <span class="site-tag-line"><?php echo get_bloginfo( 'description', 'display' ); ?></span>
        </div><?php
    } ?>

    <div class="no-header">
        <div class="no-header-logo"><?php
			$logo  = iva_get_option( 'custom-logo' );
			$alogo = iva_get_option( 'custom-alternate-logo' );

			if( !empty( $logo ) ):

				$logo  = wp_get_attachment_image_url( $logo, 'full' );
				$alogo = wp_get_attachment_image_url( $alogo, 'full' );?>
				<a href="<?php echo esc_url( home_url('/') );?>" title="<?php bloginfo('title'); ?>">
					<img class="normal_logo" src="<?php echo esc_url( $logo );?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" /><?php
                    if( !empty( $alogo ) ): ?>
                    	<img class="alternate_logo" src="<?php echo esc_url( $alogo );?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" /><?php
					endif; ?>
                </a><?php

                if( !empty( $site_title ) ): ?>
                 	<h2 class="site-title"><a href="<?php  echo esc_url( get_site_url() );?>"><?php echo get_bloginfo( 'name' ); ?></a></h2><?php
				endif;

                if( !empty( $site_tag ) ): ?>
                 	<span class="site-tag-line"><?php echo get_bloginfo( 'description' ); ?></span><?php
				endif;

			elseif( $site_title || $site_tag ):
				if( !empty( $site_title ) ): ?>
					<h2 class="site-title"><a href="<?php  echo esc_url( get_site_url() );?>"><?php echo get_bloginfo( 'name' ); ?></a></h2><?php
				endif;

				if( !empty( $site_tag ) ): ?>
					<span class="site-tag-line"><?php echo get_bloginfo( 'description' ); ?></span><?php
				endif;
			else: ?>
            	 <a href="<?php echo esc_url( home_url('/') );?>" title="<?php bloginfo('title'); ?>">
                    <img class="normal_logo" src="<?php echo IVA_THEME_URI.'/images/logo.png'; ?>" alt="<?php echo esc_attr__('Logo', 'iva'); ?>" title="<?php echo esc_attr__('Logo', 'iva'); ?>">
                    <img class="alternate_logo" src="<?php echo IVA_THEME_URI.'/images/light-logo.png'; ?>" alt="<?php echo esc_attr__('Alternate Logo', 'iva'); ?>" title="<?php echo esc_attr__('Alternate Logo', 'iva'); ?>" />
                 </a><?php
			endif; ?>
        </div>

		<div class="no-header-menu dt-header-menu" data-menu="dummy-menu"><?php
			$menu = false;
        	if( has_nav_menu('main-menu') ) {
				$args = array(
					'theme_location'  => 'main-menu',
					'container_class' => 'menu-container',
					'items_wrap'      => '<ul id="%1$s" class="%2$s" data-menu="dummy-menu"> <li class="close-nav"></li> %3$s </ul> <div class="sub-menu-overlay"></div>',
					'menu_class'      => 'dt-primary-nav',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
					'walker'          => new iva_Default_Hedaer_Walker_Nav_Menu,
					'echo'            => false
				);

				$menu = wp_nav_menu( $args );
				echo apply_filters( 'iva_default_menu', $menu );
			}
			
			if( $menu ) { ?>
            	<!-- Mobile Menu -->
            	<div class="mobile-nav-container mobile-nav-offcanvas-right" data-menu="dummy-menu">
                	<div class="menu-trigger menu-trigger-icon" data-menu="dummy-menu"><i></i><span><?php esc_html_e('Menu', 'iva'); ?></span></div>
                	<div class="mobile-menu" data-menu="dummy-menu"></div>
                	<div class="overlay"></div>
            	</div><!-- Mobile Menu --><?php
        	}?>				
		</div>
    </div>
</div>