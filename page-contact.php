<?php get_header(); ?>
<main>
      <div class="page-top container">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumb">','</p>' );
          }
        ?>
        <h1 class="section__heading page__heading">お問い合わせ</h1>
        <p class="page-top__description">
          お仕事のご相談、農園体験、牧場の見学、その他ご質問など、お気軽にお問い合わせください。
        </p>
      </div>
      <section>
        <div class="contact__inner container">
          <div class="contact__container">
            <?php echo do_shortcode('[contact-form-7 id="a0cf0e0" title="入力画面"]'); ?>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>