<header>
  <h1><?php the_title(); ?></h1>
  <small><time pubdate timedate="<?php the_date('Y-m-d'); ?>"><?php echo the_date('Y-m-d'); ?></time></small>
</header>
<p><?php the_content(); ?></p>