<header>
  <h1><?php the_title(); ?></h1>
  <small><time timedate="<?php the_date('Y-m-d'); ?>"><?php the_time('M j, Y') ?></time></small>
</header>
<?php the_content(); ?>