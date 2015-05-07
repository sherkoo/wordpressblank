<?php get_header(); ?>

<main>
  <div class="container">
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
      </div> <!-- /.col-md-9 -->
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div> <!-- /.col-md-3 -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</main> <!-- /main -->

<?php get_footer(); ?>