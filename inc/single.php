<header>
  <h1><?php the_title(); ?></h1>
  <small><time datetime="<?php the_date('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php the_time('M j, Y') ?></time></small>
</header>
<?php the_content(); ?>

<?php get_sidebar(); ?>