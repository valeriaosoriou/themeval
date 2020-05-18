<?php get_header(); ?>

<!-- POST CONTENT -->
    <div class="container">
      <div class="row">
        <!-- Post -->
        <div class="col-12 col-md-9 my-5">
        <?php 
          if ( have_posts() ):
            while (have_posts()): the_post();
        ?>  
        <!-- Image -->
          <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnails', array(
                  'class' => 'img-fluid'));
          } ?>
        <!-- Title, date, content -->
          <h2 class="my-3"><?php the_title(); ?></h2>
          <p class="lead"><?php echo get_the_date(); ?></p>
          <div class="text-justify">
            <?php the_content(); ?>
          </div>
        </div><!-- end post -->
        <?php 
          endwhile; 
          endif; ?>


        <!-- ASIDE -->
        <div class="col-12 col-md-3">
          <?php get_sidebar(); ?>
        </div><!-- end aside -->
      </div>
    </div>
 
<?php get_footer(); ?>