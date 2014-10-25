<header>
  <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php get_template_part('inc/datetime'); ?>
</header>
<?php the_content(); ?>