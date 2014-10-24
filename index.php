<?php get_header(); ?>

<!-- main -->
<main role="main">
  <section>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <article>
        <?php if(is_page()) : ?>
          <?php get_template_part('inc/page'); ?>
        <?php endif; ?>

        <?php if(is_single()) : ?>
          <?php get_template_part('inc/single'); ?>
        <?php endif; ?>

        <?php if(is_home()) : ?>
          <?php get_template_part('inc/home'); ?>
        <?php endif; ?>
      </article>

      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>
<!-- /main -->

<?php get_footer(); ?>