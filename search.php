<?php get_header(); ?>

<div class="container my-5">
  <div class="row">
    <!-- POSTS -->
    
      <div class="col-12 col-sm-3 col-md-9">
        <h3 class="py-3 mb-5">Search results...</h3>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="card my-3">
          <!-------- Thumbnail post -->
          <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnails', array(
              'class' => 'card-img-top img-fluid'));
            } ?>
          </a>
          <div class="card-body">
            <a href="<?php the_permalink(); ?>">
              <h5 class="card-title"><?php the_title(); ?>
              </h5>
            </a>
            <p class="card-text"><?php the_excerpt(); ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><?php the_time('F j, Y'); ?> / <?php the_category(', '); ?> / <?php the_author(); ?> </small>
          </div>
        </div>
        <!------------- Error --------->
        <?php
          endwhile;
          else:
            _e('Sorry, no posts matched your criteria', 'textdomain');
          endif;
        ?>
      </div><!-- end col cards --> 
      
<!--------------------------- ASIDE ----------------------------------->   
    <div class="col-12 col-sm-3 col-md-3">
      <?php get_sidebar(); ?>
    </div><!-- end col aside -->
  </div><!-- end row -->
<!-------------------- PAGINATION ------------------------>
  <div>
    <?php get_template_part('template-parts/content', 'pagination'); ?>
  </div>
</div><!-- end container -->

<?php get_footer(); ?>