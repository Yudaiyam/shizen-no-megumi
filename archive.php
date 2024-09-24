<?php get_header(); ?>
<main>
      <div class="page-top container">
        <p class="breadcrumb">
          ホーム<i class="breadcrumb-arrow fa-solid fa-chevron-right"></i
          >お知らせ一覧
        </p>
        <h1 class="section__heading page__heading">お知らせ一覧</h1>
      </div>
      <div class="tabs-container container">
        <a href="#" class="tab selected">すべて</a>
        <a href="#" class="tab">カテゴリー1</a>
        <a href="#" class="tab">カテゴリー2</a>
        <a href="#" class="tab">カテゴリー3</a>
      </div>
      <section>
        <div class="archive__inner container">
          <ul class="archive__list">
            <li>
              <article>
                <a href="./single.html" class="archive__item">
                  <div class="archive__thumbnail">
                    <img
                      src="./img/no-image.webp"
                      width="230"
                      height="150"
                      loading="lazy"
                      alt="タイトルが入ります。タイトルが入ります。"
                    />
                  </div>
                  <div class="archive__text">
                    <div class="archive__info">
                      <time datetime="YYYY-MM-DD" class="archive__time"
                        >YYYY.MM.DD</time
                      >
                      <div class="archive__cat-wrapper">
                        <p class="archive__cat-item">カテゴリ</p>
                      </div>
                    </div>
                    <h2 class="archive__title">
                      タイトルが入ります。タイトルが入ります。タイトルが入ります。
                    </h2>
                    <p class="archive__excerpt">
                      本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
                    </p>
                  </div>
                </a>
              </article>
            </li>
            <li>
              <article>
                <a href="./single.html" class="archive__item">
                  <div class="archive__thumbnail">
                    <img
                      src="./thumbnail/AdobeStock_105054722.jpeg"
                      width="230"
                      height="150"
                      loading="lazy"
                      alt="タイトルが入ります。タイトルが入ります。"
                    />
                  </div>
                  <div class="archive__text">
                    <div class="archive__info">
                      <time datetime="YYYY-MM-DD" class="archive__time"
                        >YYYY.MM.DD</time
                      >
                      <div class="archive__cat-wrapper">
                        <p class="archive__cat-item">カテゴリ</p>
                      </div>
                    </div>
                    <h2 class="archive__title">
                      タイトルが入ります。タイトルが入ります。タイトルが入ります。
                    </h2>
                    <p class="archive__excerpt">
                      本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
                    </p>
                  </div>
                </a>
              </article>
            </li>
            <li>
              <article>
                <a href="./single.html" class="archive__item">
                  <div class="archive__thumbnail">
                    <img
                      src="./thumbnail/AdobeStock_233137379.jpeg"
                      width="230"
                      height="150"
                      loading="lazy"
                      alt="タイトルが入ります。タイトルが入ります。"
                    />
                  </div>
                  <div class="archive__text">
                    <div class="archive__info">
                      <time datetime="YYYY-MM-DD" class="archive__time"
                        >YYYY.MM.DD</time
                      >
                      <div class="archive__cat-wrapper">
                        <p class="archive__cat-item">カテゴリ</p>
                      </div>
                    </div>
                    <h2 class="archive__title">
                      タイトルが入ります。タイトルが入ります。タイトルが入ります。
                    </h2>
                    <p class="archive__excerpt">
                      本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
                    </p>
                  </div>
                </a>
              </article>
            </li>
          </ul>
          <div class="pagination">
            <a href="#" class="pagination-number">
              <i class="arrow fa-solid fa-chevron-left"></i>
            </a>
            <a href="#" class="pagination-number"> 1 </a>
            <a href="#" class="pagination-number"> 2 </a>
            <a href="#" class="pagination-number">
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </section>
      <?php get_template_part('section-contact'); ?>
    </main>
<?php get_footer(); ?>