<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>
    <title>Bee theme</title>
  </head>

  <body <?php body_class(); ?> >

<!-- NAVBAR -->
    <div class="container-fluid bg-dark sticky-top">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark container">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <?php  the_custom_logo();  ?>
          
          <!-- BEE LOVE YOU -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <!-- wp_nav_menu( array $args = array() ) ; Displays a navigation menu -->
      <?php wp_nav_menu( array( 
          'theme_location' => 'header-menu',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarSupportedContent',
          'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
          'menu_class' => 'nav-item'
        )); ?>

      </nav>
    </div>