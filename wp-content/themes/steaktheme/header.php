<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrap">
        <div class="navigation">
            <header class="header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo wp_get_attachment_image(64, 'full'); ?></a>
                
                <div class="">
                  <?php
                      wp_nav_menu ( array (
                      'theme_location' => 'header-menu' 
                      ) ); ?>
                  <div class="">
                    <?php echo wp_get_attachment_image(68, 'full'); ?>
                    <?php get_search_form(); ?>
                  </div>
                </div>
            </header>
        </div>