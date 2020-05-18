<?php get_header(); ?>

<!-- CONTENT -->
  <section id="main">
    <div class="container my-5">
      <?php 
        if ( have_posts() ):
          while (have_posts()): the_post();
      ?>  
        <h2><?php the_title(); ?></h2>
        <div class="text-justify">
          <?php the_content(); ?>
        </div>

      <?php 
        endwhile; 
        endif; ?>
    </div>
  </section>

<!-- FOOTER -->
<?php get_footer(); ?>

