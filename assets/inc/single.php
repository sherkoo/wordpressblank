<header>
  <h1><?php the_title(); ?></h1>
  <?php get_template_part('assets/inc/datetime'); ?>
</header>
<?php the_content(); ?>

<?php get_sidebar(); ?>