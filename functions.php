<?php 

/* ==================================================

Menus

================================================== */

function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* ==================================================

Sidebar Widgets

================================================== */

function theme_slug_widgets_init() {
  register_sidebar( array(
      'name' => __( 'Main Sidebar', 'theme-slug' ),
      'id' => 'sidebar-1',
      'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
      'before_title' => '',
      'after_title' => '',
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/* ==================================================

Meta Description

================================================== */

function meta_description() {
  echo 'yes';
}

?>