<?php get_header(); ?>

<!-- main -->
<main class="container">
  <div class="row">
    <div class="col-md-9">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <article>
          <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php get_template_part('assets/inc/datetime'); ?>
          </header>

        </article>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<!-- /main -->

<?php get_footer(); ?>