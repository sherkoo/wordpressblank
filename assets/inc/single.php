<header>
  <h1><?php the_title(); ?></h1>
  <?php get_template_part('assets/inc/datetime'); ?>
</header>

<?php the_content(); ?>

<div>
  <?php previous_post(); ?>
  <?php next_post(); ?>
</div>

<footer>
  <?php comments_template(); ?>
</footer>

<?php edit_post_link(); ?>

<?php get_sidebar(); ?>