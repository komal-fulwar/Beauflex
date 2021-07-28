<?php
	$format = !empty( $Post_Meta['post-format-type'] ) ? $Post_Meta['post-format-type'] : 'standard';

	$template_args['post_ID'] = $ID;
	$template_args['meta'] = $Post_Meta;
	$template_args['post_Style'] = $Post_Style; ?>
	
    <?php
	$template = 'framework/templates/single/entry-image.php'; ?>
    <!-- Featured Image -->
    <div class="entry-thumb single-preview-img">
        <div class="blog-image">
			<?php iva_get_template( $template, $template_args ); ?>
        </div>

        <!-- Post Format -->
        <div class="entry-format">
            <a class="ico-format" href="<?php echo esc_url(get_post_format_link( $format ));?>"></a>
        </div><!-- Post Format -->
    </div><!-- Featured Image -->

    <div class="entry-bottom-details">
    	<div class="column dt-sc-one-half first">
    		<!-- Entry Date -->
    		<div class="entry-date"><?php
    			iva_get_template( 'framework/templates/single/entry-date.php', $template_args );
    		?></div><!-- Entry Date -->
    	</div>
    	<div class="column dt-sc-one-half">
	        <!-- Entry Author -->
	        <div class="entry-author"><?php
				iva_get_template( 'framework/templates/single/entry-author.php', $template_args );
			?></div><!-- Entry Author -->
			<!-- Entry Comment -->
			<div class="entry-comments"><?php
				iva_get_template( 'framework/templates/single/entry-comment.php', $template_args );
			?></div><!-- Entry Comment -->			
    	</div>        
    </div>
    <?php
	// Getting values from theme options...
	$template = 'framework/templates/single/entry-elements-loop.php';
	$template_args['ID'] = $ID;
	$template_args['Post_Style'] = $Post_Style;
	$template_args['Post_Meta'] = $Post_Meta;

	iva_get_template( $template, $template_args ); ?>