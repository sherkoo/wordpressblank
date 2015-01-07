<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
  <!-- Title -->
  <title><?php the_title(); ?> - <?php echo get_bloginfo('name'); ?></title>

  <!-- Meta -->
  <meta name="description" content="<?php meta_description(); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="<?php bloginfo('charset'); ?>">

  <!-- Mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link href="<?php echo get_template_directory_uri(); ?>assets/img/icons/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>assets/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- header -->
<header role="banner" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="row">
      <a href="<?php echo get_bloginfo('home'); ?>" class="navbar-brand"><?php echo get_bloginfo('name'); ?></a>

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


      <nav role="navigation" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
          $args = array(
            'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
            'theme_location' => 'primary-menu'
          );
        ?>
        <?php wp_nav_menu($args); ?>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->