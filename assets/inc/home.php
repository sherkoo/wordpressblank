<header>
  <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php get_template_part('inc/datetime'); ?>
</header>

<!-- post thumbnail -->
<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <?php the_post_thumbnail(array(200,200)); ?>
  </a>
<?php endif; ?>
<!-- /post thumbnail -->

<?php the_content(); ?>

<?php edit_post_link(); ?>