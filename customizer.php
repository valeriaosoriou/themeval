<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function beetheme_customize_register($wp_customize){
  //All our sections, settings, and controls will be added here
  
  // Background Colour
  $wp_customize->add_setting( 'beetheme_backgroundColor' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'beetheme_backgroundColor', array(
    'label'      => __( 'Background Colour', 'beetheme' ),
    'description' => 'Change the background Colour',
    'section'    => 'colors',
    'settings'   => 'beetheme_backgroundColor',
  ) ) );


}//end function

add_action('customize_register', 'beetheme_customize_register');


//hook2: wp_head to output custom-generated CSS
function beetheme_customize_css()
{
  ?>
  <style type="text/css">
    body {
      background-color: <?php echo get_theme_mod('beetheme_backgroundColor','#ffffff'); ?>!important;
    }
  </style>
<?php
}
add_action( 'wp_head', 'beetheme_customize_css'); ?>