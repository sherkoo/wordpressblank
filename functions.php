<?php

/**
 * Theme Support
 */

add_theme_support('post-formats', array('aside', 'gallery'),'menus');

// Thumbnails
add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, 200, true); // Custom Thumbnail

/**
 * Menus
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu'  => __('Primary Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * Sidebar Widgets
 */

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

/**
 * Custom Post Type
 */

// Register Custom Post Type
function music_post_type() {

  $labels = array(
    'name'                => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Post Type', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Post Type', 'text_domain' ),
    'name_admin_bar'      => __( 'Post Type', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( 'All Items', 'text_domain' ),
    'add_new_item'        => __( 'Add New Item', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'new_item'            => __( 'New Item', 'text_domain' ),
    'edit_item'           => __( 'Edit Item', 'text_domain' ),
    'update_item'         => __( 'Update Item', 'text_domain' ),
    'view_item'           => __( 'View Item', 'text_domain' ),
    'search_items'        => __( 'Search Item', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'post_type', 'text_domain' ),
    'description'         => __( 'Post Type Description', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( ),
    'taxonomies'          => array( 'category', 'post_tag' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'post_type', $args );

}

// Hook into the 'init' action
add_action( 'init', 'music_post_type', 0 );

/**
 * Meta Description
 */

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