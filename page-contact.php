<?php get_header(); ?>

<!-- CONTENT -->
<div class="container my-5">
  <h1><?php the_title(); ?></h1>
  <div class="row pt-5 text-justify">
    <?php if ( have_posts() ): while (have_posts()): the_post(); ?>  
    <div class="col-12 col-sm-6 mb-3">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('post-thumbnails', array(
          'class' => 'img-fluid'));
        } 
      ?>
    </div>
    <div class="col-12 col-sm-6 mb-3">
      <p>
        <?php the_content(); ?>
      </p>
    </div>
    <?php endwhile; endif; ?>
  </div><!-- end row -->
</div><!-- end container -->


<!-- FOOTER -->
<?php get_footer(); ?>