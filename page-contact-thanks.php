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
          <div class="contact__container contact-thanks__container">
            <p class="contact-thanks__title">
              お問い合わせ<br class="sp-only" />
              ありがとうございました。
            </p>
            <p class="contact-thanks__paragraph">
              担当者より<br class="sp-only" />
              5営業日以内に返信いたします。 <br />
              お急ぎの場合は、<br class="sp-only" />
              お電話にてお問い合わせください。
            </p>
            <div class="header__link--tel">
              お問い合わせ電話<br class="sp-only" />
              <span class="header__link--tel-large">123-4567-8910</span><br />
              【受付時間】<br class="sp-only" />
              10:00 ~ 18:00（土日祝を除く）
            </div>
            <a
              href="<?php echo esc_url(home_url('/')); ?>"
              class="btn btn-ja contact-submit contact-thanks__submit"
              >TOPに戻る</a
            >
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>