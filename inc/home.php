<header>
  <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
  <small><time datetime="<?php the_date('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php the_time('M j, Y') ?></time></small>
</header>
<?php the_content(); ?>