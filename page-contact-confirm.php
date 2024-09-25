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
            <form action="">
              <div class="contact-item">
                <label for="your-option" class="contact-label">
                  お問い合わせ種別<span class="required">必須</span>
                </label>
                <div class="">その他</div>
              </div>
              <div class="contact-item">
                <label for="your-name" class="contact-label">
                  お名前<span class="required">必須</span>
                </label>
                山田太郎
              </div>
              <div class="contact-item">
                <label for="your-email" class="contact-label">
                  メールアドレス
                  <span class="required">必須</span>
                </label>
                Tarou.yamada@gmail.com
              </div>
              <div class="contact-item">
                <label for="your-tel" class="contact-label"> 電話番号 </label>
                080-1234-5678
              </div>
              <div class="contact-item">
                <label for="your-message" class="contact-label">
                  お問い合わせ内容<span class="required">必須</span></label
                >
                お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。
              </div>
              <button
                type="submit"
                class="contact-submit btn btn-ja"
                value="送信"
              >
                送信
              </button>
            </form>
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