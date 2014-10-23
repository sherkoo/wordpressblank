<!DOCTYPE html>
<html>
<head>
  <title><?php echo get_bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>

  <header role="banner">
    <h1 id="logo"><a href="<?php echo get_bloginfo('home'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
    <nav role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary-menu') ); ?>
      <ul>
        <li><a href="#">link</a></li>
        <li><a href="#">link</a></li>
        <li><a href="#">link</a></li>
        <li><a href="#">link</a></li>
      </ul>
    </nav>
  </header>