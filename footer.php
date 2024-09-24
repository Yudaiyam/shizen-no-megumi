<footer class="footer">
      <div class="footer__container container">
        <div class="footer__info">
          <a href="<?php esc_url(home_url('/')); ?>" class="footer__logo">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"
              width="202"
              height="34"
              loading="lazy"
              decoding="async"
              alt="自然の恵み農園"
            />
          </a>
          <address class="footer__info-text">
            〒123-4567<br />
            千葉県〇〇市××町1丁目23-45
          </address>
          <address class="footer__info-text">
            tel:123-4567-8910<br />
            fax:12-345-6789
          </address>
        </div>
        <div class="footer__link">
          <nav class="footer__menu">
            <ul>
              <li>
                <a href="<?php esc_url(home_url('/')); ?>" class="footer__link-item">ホーム</a>
              </li>
              <li>
                <a href="<?php esc_url(home_url('/')); ?>#about" class="footer__link-item"
                  >私たちについて</a
                >
              </li>
              <li>
                <a href="<?php esc_url(home_url('/')); ?>#introduction" class="footer__link-item"
                  >活動紹介</a
                >
              </li>
              <li>
                <a href="<?php esc_url(home_url('/')); ?>#faq" class="footer__link-item"
                  >よくあるご質問</a
                >
              </li>
              <li>
                <a href="<?php esc_url(home_url('/news')); ?>" class="footer__link-item">お知らせ</a>
              </li>
              <li>
                <a href="<?php esc_url(home_url('/')); ?>#access" class="footer__link-item"
                  >アクセス</a
                >
              </li>
            </ul>
          </nav>
          <ul class="footer__sns">
            <li>
              <a
                href="https://x.com/home"
                target="_blank"
                class="footer__sns-item"
                ><i class="icon fa-brands fa-x-twitter"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.instagram.com/"
                target="_blank"
                class="footer__sns-item"
                ><i class="icon fa-brands fa-instagram"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.youtube.com/"
                target="_blank"
                class="footer__sns-item"
                ><i class="icon fa-brands fa-youtube"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
      <p class="footer__copyright">©︎ shizen-no-megumi-nouen Inc .2023</p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>