<?php get_header(); ?>

<!-- main -->
<main role="main" class="container">
  <div class="row">
    <div class="col-md-9">
      <header>
        <h1><?php the_title(); ?></h1>
        <?php get_template_part('assets/inc/time'); ?>
      </header>

      <?php the_content(); ?>

      <?php edit_post_link(); ?>
    </div>

    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<!-- /main -->

<?php get_footer(); ?>