<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/bootstrap.css', false,'1.1','all');
   wp_enqueue_style( 'first');

   wp_register_style('second', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false,'1.1','all');
   wp_enqueue_style( 'second');

   wp_register_style('second', get_template_directory_uri() . '/assets/css/animate.css', false,'1.1','all');
   wp_enqueue_style( 'second');

   wp_register_style('third', get_template_directory_uri() . '/assets/style.css', false,'1.1','all');
   wp_enqueue_style( 'third');

   wp_register_style('fourth', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
   wp_enqueue_style( 'fourth');

   wp_register_style('fifth', get_template_directory_uri() . '/assets/css/colors.css', false,'1.1','all');
   wp_enqueue_style( 'fifth');

   wp_register_style('sixth', get_template_directory_uri() . '/assets/css/ekko-lightbox.css', false,'1.1','all');
   wp_enqueue_style( 'sixth');
  
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/tether.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/parallax.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/animate.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/ekko-lightbox.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
}
add_action('wp_enqueue_scripts', 'add_script');