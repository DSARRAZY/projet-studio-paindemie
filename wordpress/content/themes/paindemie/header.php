<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
   <meta charset="<?php get_bloginfo('charset') ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <?php
   wp_head()
   ?>
</head>

<body>

   <header class="<?php echo (is_front_page()) ? 'header-front-page' : 'header'; ?>">

      <nav>
         <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
         </div>

         <div class="logo">
            <img src="<?php echo get_theme_file_uri('assets/images/logo60.png'); ?>" alt="logo du site" />
         </div>

         <?php get_template_part('template-parts/nav/main-nav'); ?>
      </nav>

      <?php if (is_front_page()) : get_template_part('template-parts/header/header-descriptions');
      endif; ?>

   </header>
   <main>