<?php get_header(); ?>

<main role="main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <article class="panel panel-default">
              <div class="panel-body">
                <header class="panel-header">
                  <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <?php get_template_part('assets/inc/datetime'); ?>
                </header>

                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(array(200,200)); ?>
                  </a>
                <?php endif; ?>
                <!-- /post thumbnail -->

                <?php the_content(); ?>
                <?php edit_post_link(); ?>
              </div> <!-- /.panel-body -->

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