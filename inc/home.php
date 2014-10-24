<header>
  <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
  <small><time pubdate timedate="<?php the_date('Y-m-d'); ?>"><?php echo the_date('Y-m-d'); ?></time></small>
</header>
<p><?php the_content(); ?></p>