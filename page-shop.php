<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-9">
      <?php woocommerce_content(); ?>
    </div>
    <!--------------------------- ASIDE ----------------------------------->
    <div class="col-12 col-md-3">
      <?php get_sidebar(); ?>
    </div><!-- end col aside --> 
  </div>
</div>
 

<?php get_footer(); ?>