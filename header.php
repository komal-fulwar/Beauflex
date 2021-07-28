<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php

        /**
         * iva_hook_top hook.
         *      iva_hook_top - 10
         *      iva_page_loader - 20
         */
         do_action( 'iva_hook_top' );
    ?>

    <!-- **Wrapper** -->
    <div class="wrapper">

        <!-- ** Inner Wrapper ** -->
        <div class="inner-wrapper">

            <?php
                /**
                 * iva_hook_content_before hook.
                 *
                 */
                do_action( 'iva_hook_content_before' );
            ?>