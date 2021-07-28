    <?php
        /**
         * iva_hook_content_after hook.
         * 
         */
        do_action( 'iva_hook_content_after' );
    ?>

        <!-- **Footer** -->
        <footer id="footer">
            <div class="container">
            <?php
                /**
                 * iva_footer hook.
                 * 
                 * @hooked iva_ele_footer_template - 10
                 *
                 */
                do_action( 'iva_footer' );
            ?>
            </div>
        </footer><!-- **Footer - End** -->

    </div><!-- **Inner Wrapper - End** -->
        
</div><!-- **Wrapper - End** -->
<?php
    
    do_action( 'iva_hook_bottom' );

    wp_footer();
?>
</body>
</html>