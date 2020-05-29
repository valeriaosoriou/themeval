<?php get_header(); ?>
<!------------------------------ POST CONTENT ------------------------------>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-9 my-5">
      <?php if ( have_posts() ): while (have_posts()): the_post(); ?>  
      <!-- Image -->
      <div class="card-body text-justify">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('post-thumbnails', array(
            'class' => 'img-fluid'));
          } 
        ?>
        <!-- Title, date, content -->
        <h2 class="my-3"><?php the_title(); ?></h2>
        <p class="lead"><?php the_time('F j Y'); ?></p>
        <?php the_content(); ?>
        <small>Author: <?php the_author(); ?> / Category: <?php the_category(', '); ?> / Tags: <?php the_tags(', '); ?></small>      
<!------------------------------ COMMENTS  ------------------------------>      
        <!-- If comments exist -->
        <?php 
          if (comments_open() || get_comments_number()):
            comments_template();
          endif;
        ?> 
      </div><!-- end card-body -->
      <?php endwhile; endif; ?>
    </div><!-- end col -->

<!--------------------------- ASIDE ----------------------------------->
    <div class="col-12 col-md-3">
      <?php get_sidebar(); ?>
    </div><!-- end col aside -->  
  </div><!-- end row --> 
</div><!-- end container --> 
    
<?php get_footer(); ?>