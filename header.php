<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php get_template_part('template-parts/meta-data'); ?>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.webp" sizes="180x180">
    <link rel="icon" type="image/webp" href="<?php echo get_template_directory_uri(); ?>/img/android-touch-icon.webp" sizes="192x192">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfiOlAqAAAAAFPGA8pLdB3g7TM9DDPh2WbuRI-O"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"
          width="170"
          height="29"
          alt="自然の恵み農園"
        />
      </a>
      <button class="header__btn" type="button">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__menu">
        <ul>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header__link"
              >トップ<span class="sp-only">top</span></a
            >
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>#about" class="header__link"
              >私たちについて<span class="sp-only">about</span></a
            >
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>#introduction" class="header__link"
              >活動紹介<span class="sp-only">works</span></a
            >
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>#faq" class="header__link"
              >よくあるご質問<span class="sp-only">faq</span></a
            >
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="header__link"
              >お知らせ<span class="sp-only">news</span></a
            >
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>#access" class="header__link"
              >アクセス<span class="sp-only">access</span></a
            >
          </li>
          <li class="sp-only">
            <div class="header__link--tel">
              お問い合わせ電話<br />
              <span class="header__link--tel-large">123-4567-8910</span><br />
              【受付時間】<br />
              10:00 ~ 18:00（土日祝を除く）
            </div>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__link--contact"
              >お問い合わせ</a
            >
          </li>
        </ul>
      </nav>
    </header>