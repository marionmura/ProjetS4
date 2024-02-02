<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="wrap">
        <div class="navigation">
            <header class="header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo wp_get_attachment_image(64, 'full'); ?></a>
                
                <div class="header">
                  <?php
                      wp_nav_menu ( array (
                      'theme_location' => 'header-menu' 
                      ) ); ?>
                </div>
            </header>
        </div>