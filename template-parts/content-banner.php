<!-- DONATION BTN-->
<div class="container-fluid cover d-flex flex-column justify-content-center align-items-center card-img-overlay">
      <button href="#" class="text-center text-black bg-transparent">
        <a href="http://localhost/module4/theme_val/donate/"><h1 class="display-4">Donate</h1></a>
      </button>
    </div>

<!-- HEADER FEATURED IMG -->
    
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