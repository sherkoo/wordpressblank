<?php

/* ==================================================

Theme Support

================================================== */

add_theme_support('menus');

// Thumbnails
add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, 200, true); // Custom Thumbnail

/* ==================================================

Menus

================================================== */

function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu'  => __('Primary Menu'),
      'footer-menu' => __('Footer Menu')
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
      'before_title' => '<h4>',
      'after_title' => '</h4>',
      'before_widget' => '',
      'after_widget' => '',
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/* ==================================================

Meta Description

================================================== */

function meta_description() {
  if(is_home()){
    bloginfo('description');
  } else {
    if(have_posts()) :
      while(have_posts()) :
        the_post();
        $content = get_the_content();
        echo wp_filter_nohtml_kses($content);
      endwhile; // end while
    endif; // end if
  }
}

?>