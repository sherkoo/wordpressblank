<?php get_header(); ?>

<!-- main -->
<main role="main" class="container">
  <section>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <article>
        <?php if(is_page()) : ?>
          <?php get_template_part('assets/inc/page'); ?>
        <?php endif; ?>

        <?php if(is_single()) : ?>
          <?php get_template_part('assets/inc/single'); ?>
        <?php endif; ?>

        <?php if(is_home()) : ?>
          <?php get_template_part('assets/inc/home'); ?>
        <?php endif; ?>
      </article>

      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>
<!-- /main -->

<?php get_footer(); ?>