<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <span class="site-title"><?php bloginfo('name'); ?></span>
        </div>
        <nav class="main-nav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'fallback_cb' => '__return_false',
                ) );
            ?>
        </nav>
        <div style="text-align:center; margin:1.2rem 0;">
            <a class="btn-primary" href="https://wa.me/966555555555" style="margin-left:7px;" target="_blank">
                تواصل واتساب
            </a>
            <a class="btn-primary" href="tel:0555555555">
                اتصال مباشر
            </a>
        </div>
    </header>
