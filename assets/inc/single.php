<header>
  <h1><?php the_title(); ?></h1>
  <?php get_template_part('assets/inc/datetime'); ?>
</header>
<?php the_content(); ?>

<footer>
  <?php comments_template(); ?>
</footer>

<?php get_sidebar(); ?>