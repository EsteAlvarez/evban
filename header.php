<?php

/**
 * @package evban
 * @version 1.0.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('body-page'); ?>>
  <?php wp_body_open(); ?>

  <!-- Custom header
  ================================================== -->
  <?php if (get_header_image()) : ?>
    <div id="custom-header">
      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
      </a>
    </div>
  <?php endif; ?>

  <!-- Root container
  ================================================== -->
  <div class="root-container">

    <!-- Header of the website
    ================================================== -->
    <header class="header">
      <?php get_template_part('template-parts/layout/header-content/desktop-header-content'); ?>
      <?php get_template_part('template-parts/layout/header-content/mobile-header-content'); ?>
    </header>