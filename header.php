<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>> <!-- se volessi aggiungere una mia classe basta mettere tra apici le classi che mi interessano separate da uno spazio es classe1 classe2 ecc -->

      <header>
        <div class="container">
          <div class="header-left">
            <img src="http://boolean.careers/images/common/logo.png" alt="">
          </div>
          <div class="header-right">
            <?php wp_nav_menu(array(
              'depth' => 2,
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'nav_item'
            )) ?>
          </div>
            </div>
      </header>
