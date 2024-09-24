<?php 
//cssとjsの読み込み
 function my_theme_enqueue_styles() {
    wp_enqueue_preconnect( 'https://fonts.googleapis.com' );
    wp_enqueue_preconnect( 'https://fonts.gstatic.com', array(), 'crossorigin' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap', array(), '1.0.0' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '6.6.0', 'all' );
    wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(), '1.9.0', 'all'
   );
    wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

  function my_theme_enqueue_scripts() {
    wp_deregister_script( 'jquery' ); // Deregister default jQuery
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true );
    wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), '1.9.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
    wp_script_add_data( 'script', 'defer', true );
    wp_enqueue_script( 'inview', get_template_directory_uri() . '/js/jquery.inview.min.js', array( 'jquery' ), '1.0.0', true );
    wp_script_add_data( 'inview', 'defer', true );
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );