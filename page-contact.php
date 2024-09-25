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
            <form action="">
              <div class="contact-item">
                <label for="your-option" class="contact-label">
                  お問い合わせ種別<span class="required">必須</span>
                </label>
                <div class="contact-option contact-input">
                  <span>選択してください</span>
                </div>
                <div class="contact-select">
                  <span> 農園見学・体験について </span>
                  <span> オンライン販売について </span>
                  <span>その他</span>
                </div>
              </div>
              <div class="contact-item">
                <label for="your-name" class="contact-label">
                  お名前<span class="required">必須</span>
                </label>
                <input type="text" class="contact-input" required />
              </div>
              <div class="contact-item">
                <label for="your-email" class="contact-label">
                  メールアドレス
                  <span class="required">必須</span>
                </label>
                <input type="text" class="contact-input" required />
              </div>
              <div class="contact-item">
                <label for="your-tel" class="contact-label"> 電話番号 </label>
                <input type="text" class="contact-input" />
              </div>
              <div class="contact-item">
                <label for="your-message" class="contact-label">
                  お問い合わせ内容<span class="required">必須</span></label
                >
                <textarea
                  name="your-message"
                  id=""
                  row="5"
                  class="contact-message contact-input"
                ></textarea>
              </div>
              <button
                type="submit"
                class="contact-submit btn btn-ja"
                value="確認する"
              >
                確認する
              </button>
            </form>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>