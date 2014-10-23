<?php get_header(); ?>

<main>
  <section>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>    
      <article>
        <header>
          <h1><?php the_title(); ?></h1>
          <time pubdate timedate="<?php get_the_time(); ?> "><?php get_the_time(); ?> </time>
        </header>
        <p><?php the_content(); ?></p>
      </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>