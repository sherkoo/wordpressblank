<!DOCTYPE html>
<html>
<head>
  <title><?php the_title(); ?> - <?php echo get_bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- meta -->
  <meta name="description" content="<?php meta_description(); ?>" />
  
</head>
<body>

  <header role="banner">
    <h1 id="logo"><a href="<?php echo get_bloginfo('home'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
    <nav role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary-menu') ); ?>
    </nav>
  </header>