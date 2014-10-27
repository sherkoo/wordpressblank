<header>
  <h1><?php the_title(); ?></h1>
  <?php get_template_part('assets/inc/time'); ?>
</header>
<?php the_content(); ?>

<?php edit_post_link(); ?>

<?php get_sidebar(); ?>