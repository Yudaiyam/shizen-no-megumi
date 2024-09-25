<?php get_header(); ?>
<main>
      <div class="page-top container">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumb">','</p>' );
          }
        ?>
        <h1 class="section__heading page__heading">お問い合わせ</h1>
      </div>
      <section>
        <div class="contact__inner container">
          <div class="contact__container">
            <?php echo do_shortcode('[contact-form-7 id="cb64fc2" title="確認画面"]'); ?>
          </div>
        </div>
      </section>
      <section>
        <div class="section-contact container">
          <h2 class="section-contact__heading">お問い合わせ</h2>
          <p class="section-contact__text">
            お仕事のご相談、農園体験、牧場の見学、その他ご質問<br />
            お気軽にお問い合わせください。
          </p>
          <a href="#" class="section-contact__btn btn btn-ja">お問い合わせ</a>
          <p class="section-contact__bottom">
            問い合わせ電話：<br class="sp-only" />
            <span class="section-contact__bottom--large">123-4567-8910</span>
          </p>
          <p class="section-contact__bottom">
            【受付時間】<br class="sp-only" />
            10:00 ~ 18:00（土日祝を除く）
          </p>
        </div>
      </section>
    </main>
<?php get_footer(); ?>