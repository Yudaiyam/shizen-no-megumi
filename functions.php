<?php 
//cssとjsの読み込み
 function my_theme_enqueue_styles() {
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
    wp_enqueue_script( 'inview', get_template_directory_uri() . '/js/jquery.inview.min.js', array( 'jquery' ), '1.0.0', true );
    wp_script_add_data( 'inview', 'defer', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
    wp_script_add_data( 'script', 'defer', true );
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

  // 投稿デフォルト入力欄削除
  add_action( 'init' , 'my_remove_post_support' );
  function my_remove_post_support() {
  remove_post_type_support('post','editor');
  remove_post_type_support('salons','editor');
  }

  // お知らせ投稿のアーカイブページ有効化
  function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'news'; //任意のスラッグ名　
      $args['label'] = 'お知らせ'; //管理画面左ナビに「投稿」の代わりに表示される
    }
    return $args;
    }
    add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

     // パンくずリストの「一覧ページ」カスタマイズここから
     function override_yoast_breadcrumb($links)
     {
       if (!is_page()) {
         $news_url = home_url('/news');
         $add_link[] = array('text' => 'お知らせ一覧', 'url' => $news_url);
         array_splice($links, 1, 0, $add_link);
       }
       return $links;
     }
     add_filter('wpseo_breadcrumb_links', 'override_yoast_breadcrumb');

  // Contact Form 7で自動挿入されるPタグ、brタグを削除
  add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
  function wpcf7_autop_return_false() {
    return false;
  }

  // スラッグの日本語禁止
  function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
    $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
    }
    add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );

    //使用しない画像の自動生成解除
    add_image_size('thumbnail', 0, 0);
    add_image_size('medium', 0, 0);
    add_image_size('medium_large', 0, 0);
    add_image_size('large', 0, 0);
    add_image_size('1536x1536', 0, 0);
    add_image_size('2048x2048', 0, 0);