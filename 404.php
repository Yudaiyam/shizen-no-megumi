<?php get_header(); ?>
<main>
      <div class="page-top container">
        <h1 class="section__heading page__heading">
            ページが存在しません。
        </h1>
      </div>
      <section>
        <div class="contact__inner container">
          <div class="contact__container contact-thanks__container">
            <p class="contact-thanks__title">
              申し訳ございません。<br>
              お探しのページは存在しないか、削除された可能性があります。
            </p>
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