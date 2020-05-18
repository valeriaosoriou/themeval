<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>style.css"> -->
    <?php wp_head(); ?>
    <title>Bee theme</title>
  </head>

  <body>

<!-- NAVBAR -->
    <div class="container-fluid bg-dark fixed-top">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark container">
        <a class="navbar-brand" href="#">
        <?php  the_custom_logo();  ?>
          <!-- <img src="<?php bloginfo('template_url'); ?>/images/logoclear.png" width="50" height="40" class="d-inline-block align-top" alt="logo"> -->
          <!-- BEE LOVE YOU -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <!-- wp_nav_menu( array $args = array() ) ; Displays a navigation menu -->
      <?php wp_nav_menu( array( 
          'theme_location' => 'header-menu',
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarSupportedContent',
          'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
          'menu_class' => 'nav-item'
        )); ?>

      </nav>
    </div>

<!-- DONATION BTN-->
    <div class="container-fluid cover d-flex flex-column justify-content-center align-items-center">
      <button href="#" class="text-center text-black bg-transparent">
        <a href="http://localhost/module4/theme_val/donate/"><h1 class="display-4">Donate</h1></a>
      </button>
    </div>

<!-- HEADER FEATURED IMG -->
    <!-- <style>
      .cover{
        background: url(<?php bloginfo('template_url'); ?>/images/bee1.jpg);
        background-size: cover;
        background-position: center;
        height: 500px;
      }
    </style> -->
    
<!-- <img alt="" src="<?php header_image(); ?>
  " width="<?php echo absint( get_custom_header()->width ); ?>
  " height="<?php echo absint( get_custom_header()->height ); ?>"> -->

  <?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>