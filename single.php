<?php get_header(); ?>

<!-- main -->
<main role="main">
  <section>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>    
        <article>
          <header>
            <h1><?php the_title(); ?></h1>
            <small><time pubdate timedate="<?php the_date('Y-m-d'); ?>"><?php echo the_date('Y-m-d'); ?></time></small>
          </header>
          <p><?php the_content(); ?></p>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>
<!-- /main -->

<?php get_footer(); ?>