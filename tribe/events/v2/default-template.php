<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header();

$global_breadcrumb = iva_get_option( 'show-breadcrumb' );
$header_class	   = iva_get_option( 'breadcrumb-position' );?>

<!-- ** Header Wrapper ** -->
<div id="header-wrapper" class="<?php echo esc_attr($header_class); ?>">  
	<!-- **Header** -->
	<header id="header">
		<div class="container"><?php
	        /**
	         * iva_header hook.
	         * 
	         * @hooked iva_ele_header_template - 10
	         *
	         */
	        do_action( 'iva_header' ); ?>
	    </div>
	</header><!-- **Header - End ** -->

	<!-- ** Breadcrumb ** -->
    <?php
        if( !empty( $global_breadcrumb ) ) {

            $darkbg = iva_get_option( 'apply-dark-bg-breadcrumb' );
            $darkbg = $darkbg ? "dark-bg-breadcrumb" : "";

        	$bstyle = iva_get_option( 'breadcrumb-style' );
        	$style  = iva_breadcrumb_css();

        	$title  = tribe_get_events_title();
        	$breadcrumbs[] = '<a href="'.tribe_get_events_link().'">' . esc_html__('Events', 'iva') . '</a>';

            if ( is_tax('tribe_events_cat') ) {
            	$title 		   = esc_html__('Events Category: ', 'iva') . single_cat_title('', false);
                $breadcrumbs[] = '<a href="'. get_category_link( get_query_var('cat') ) .'">' . single_cat_title('', false) . '</a>';
            } elseif ( is_singular( 'tribe_venue' ) ) {
            	global $post;
            	$title 		   = esc_html__('Events Venue: ', 'iva') . get_the_title( $post->ID );
                $breadcrumbs[] = '<a href="'. get_permalink( $post->ID ) .'">' . get_the_title( $post->ID ) . '</a>';
            } elseif ( is_singular( 'tribe_organizer' ) ) {
            	global $post;
            	$title 		   = esc_html__('Events Organizer: ', 'iva') . get_the_title( $post->ID );
                $breadcrumbs[] = '<a href="'. get_permalink( $post->ID ) .'">' . get_the_title( $post->ID ) . '</a>';
            }

            iva_breadcrumb_output ( '<h1>'.$title.'</h1>', $breadcrumbs, 'dt-breadcrumb-for-tribe-events-archive '.$bstyle . ' '.$darkbg, $style );
        }
    ?>
    <!-- ** Breadcrumb End ** -->
</div><!-- ** Header Wrapper - End ** -->

<!-- **Main** -->
<div id="main">
    <!-- ** Container ** -->
    <div class="container"><?php
    	$page_layout  = iva_get_option( 'tribe-events-archives-page-layout' );
    	$page_layout  = !empty( $page_layout ) ? $page_layout : "content-full-width";

    	$layout = iva_page_layout( $page_layout );
    	extract( $layout );?>

    	<!-- Primary -->
        <section id="primary" class="<?php echo esc_attr( $page_layout );?>">
        	<?php echo tribe( Template_Bootstrap::class )->get_view_html(); ?>
        </section><!-- Primary End --><?php

        if ( $show_sidebar ) {
            if ( $show_left_sidebar ) {?>
                <!-- Secondary Left -->
                <section id="secondary-left" class="secondary-sidebar <?php echo esc_attr( $sidebar_class );?>"><?php
                    get_sidebar('left');?></section><!-- Secondary Left End --><?php
            }
        }

    	if ( $show_sidebar ) {
    		if ( $show_right_sidebar ) {?>
    		 	<!-- Secondary Right -->
    			<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr( $sidebar_class );?>"><?php
    				get_sidebar('right');?></section><!-- Secondary Right End --><?php
    		}
    	}?>
    </div>
    <!-- ** Container End ** -->
</div><!-- **Main - End ** -->    

<?php get_footer(); ?>