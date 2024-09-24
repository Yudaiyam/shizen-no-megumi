<?php get_header(); ?>
<main>
      <div class="fv">
        <div class="fv__content">
          <div class="fv__logo">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/logo-2.svg"
              width="204"
              height="158"
              alt="自然の恵み農園"
            />
          </div>
          <h1 class="fv__catch">
            自然の恵みを感じ、<br class="fv__catch-break" />豊かな未来を。
          </h1>
        </div>
        <a href="#about" class="fv__scroll"> scroll</a>
        <article>
          <a href="./single.html" class="fv__news">
            <div class="fv__news-info">
              <h2 class="fv__news-heading">news</h2>
              <time class="fv__news-date" datetime="YYYY-MM-DD"
                >YYYY.MM.DD</time
              >
            </div>
            <h3 class="fv__news-title">
              タイトルが入ります。タイトルが入ります。
            </h3>
          </a>
        </article>
      </div>
      <section>
        <div class="about container" id="about">
          <div class="about__img fade-up">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/about-image01.webp"
              width="200"
              height="252"
              loading="lazy"
              decoding="async"
              alt="山羊の写真"
            />
          </div>
          <div class="about__img fade-up delay-500ms">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/about-image02.webp"
              width="181"
              height="217"
              loading="lazy"
              decoding="async"
              alt="トマトの写真"
            />
          </div>
          <div class="about__img fade-up delay-500ms">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/about-image03.webp"
              width="200"
              height="200"
              loading="lazy"
              decoding="async"
              alt="笑う職員の写真"
            />
          </div>
          <div class="about__img fade-up delay-1000ms">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/about-image04.webp"
              width="235"
              height="269"
              loading="lazy"
              decoding="async"
              alt="牛の写真"
            />
          </div>
          <h2 class="about__heading">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"
              width="304"
              height="54"
              loading="lazy"
              decoding="async"
              alt="自然の恵み農園"
            />
          </h2>
          <p class="about__text">
            自然の恵み農園は、<br />
            自然の恵みと動物の尊さが調和する<br class="sp-only" />
            特別な場所です。<br />
            新鮮で美味しい農産物を栽培し、<br class="sp-only" />
            心温まる動物たちと触れ合える場所<br class="sp-only" />
            でもあります。
          </p>
          <p class="about__text">
            自然の恵みを受け、<br class="sp-only" />
            動物たちとの特別なひとときを<br class="sp-only" />
            楽しんでいただける場所として、<br />
            私たちは誇りを持って活動をしています。<br />
            一緒に自然と動物の美しさを共有しましょう。
          </p>
        </div>
      </section>
      <section>
        <div class="introduction" id="introduction">
          <div class="introduction__inner">
            <h2 class="introduction__heading section__heading">活動紹介</h2>
            <div class="introduction__tabs-wrapper">
              <a href="#farm" class="introduction__tab selected">
                <h3>農園</h3>
              </a>
              <a href="#pasture" class="introduction__tab">
                <h3>牧場</h3>
              </a>
              <a href="#ec" class="introduction__tab">
                <h3>オンライン販売</h3>
              </a>
            </div>
            <div class="introduction__area show" id="farm">
              <p class="introduction__paragraph">
                私たちは、「持続可能な農業」を掲げて、自然の恵みに感謝しながら、農作物を育てています。<br />
                無農薬で、体にも環境にも優しく、季節ごとに異なる品種を育て、提供しています。<br />
                ぜひ一度、農園にお越し頂き、自分の手で収穫した新鮮な野菜、果物をお召し上がりください。
              </p>
              <div class="introduction__slider">
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-nouen01.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="笑顔でガッツポーズする職員たちの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-nouen02.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="バスケットに詰まった苺の写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-nouen03.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="作業中の職員の写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-nouen04.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="作物が均等に栽培されている畑の写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-nouen01.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="笑顔でガッツポーズする職員たちの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-nouen02.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="バスケットに詰まった苺の写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-nouen03.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="作業中の職員の写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-nouen04.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="作物が均等に栽培されている畑の写真"
                  />
                </div>
              </div>
            </div>
            <div class="introduction__area" id="pasture">
              <p class="introduction__paragraph">
                私たちの牧場は、自然と動物との共存を尊重し、持続可能な農業の原則に基づいて運営されています。
                <br />
                広々とした環境で、動物たちとのふれ合いを通じて、自然の恵みと動物の尊さを感じ、
                <br class="pc-only" />
                心温まるひとときを過ごしていただけます。
              </p>
              <div class="introduction__slider">
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo01.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="牧場で飼育されている牛たちの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo02.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="牧場で飼育されている馬たちの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo03.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="牧場で飼育されている豚たちの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo04.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="牧場で飼育されている山羊の写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo01.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="牧場で飼育されている牛たちの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo02.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="牧場で飼育されている馬たちの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo03.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="牧場で飼育されている豚たちの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-bokujo04.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="牧場で飼育されている山羊の写真"
                  />
                </div>
              </div>
            </div>
            <div class="introduction__area" id="ec">
              <p class="introduction__paragraph">
                自然の恵み農園から直接お届けする、新鮮で美味しい農産物と<br
                  class="pc-only"
                />
                手作りのジャムやバターなどの加工品を提供しています。 <br />
                自然の恩恵をご自宅でお楽しみいただけます。
              </p>
              <div class="introduction__slider">
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-ec01.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="自然の恵み農園で販売されているアイスの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-ec02.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="自然の恵み農園で販売されているバターの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-ec03.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="自然の恵み農園で販売されているジャムの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-ec04.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="自然の恵み農園で販売されている野菜の写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-ec01.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="自然の恵み農園で販売されているアイスの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-ec02.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="自然の恵み農園で販売されているバターの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-ec03.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="自然の恵み農園で販売されているジャムの写真"
                  />
                </div>
                <div class="introduction__slide">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/work-ec04.webp"
                    width="300"
                    height="250"
                    loading="lazy"
                    decoding="async"
                    alt="自然の恵み農園で販売されている野菜の写真"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="faq container" id="faq">
          <h2 class="faq__heading section__heading">よくあるご質問</h2>
          <div class="faq__item">
            <button type="button" class="faq__question">
              <span>Q</span>
              <h3>農園の野菜や果物は有機栽培ですか？</h3>
            </button>
            <div class="faq__answer">
              <span>A</span>
              <p>
                はい、私たちの農園では有機栽培の原則に従って野菜と果物を栽培しています。<br />
                化学肥料や農薬を極力使用せず、土壌と作物の健康を第一に考えております。
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button type="button" class="faq__question">
              <span>Q</span>
              <h3>農園での見学や体験ツアーは行っていますか？</h3>
            </button>
            <div class="faq__answer">
              <span>A</span>
              <p>
                はい、農園での見学や体験ツアーを随時開催しています。<br />
                農場の日常や農作業を親しみやすく説明し、実際に農園での体験を楽しむことができます。
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button type="button" class="faq__question">
              <span>Q</span>
              <h3>農園での見学や体験ツアーは行っていますか？</h3>
            </button>
            <div class="faq__answer">
              <span>A</span>
              <p>
                はい、農園での見学や体験ツアーを随時開催しています。<br />
                農場の日常や農作業を親しみやすく説明し、実際に農園での体験を楽しむことができます。
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button type="button" class="faq__question">
              <span>Q</span>
              <h3>オンラインで注文した農産物はどのように配送されますか？</h3>
            </button>
            <div class="faq__answer">
              <span>A</span>
              <p>
                オンラインで注文いただいた農産物は、専用の梱包で新鮮さを保ったまま、<br />
                指定された配送先にお届けします。
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button type="button" class="faq__question">
              <span>Q</span>
              <h3>農園で提供される季節ごとの野菜や果物の品種は何ですか？</h3>
            </button>
            <div class="faq__answer">
              <span>A</span>
              <p>
                春にはイチゴ、夏にはトマトや茄子、秋にはカボチャやリンゴ、冬にはブロッコリーやみかん<br />
                など、季節に応じた野菜、果物を提供、収穫体験することができます。
              </p>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="top-news container">
          <div class="top-news__intro">
            <h2 class="top-news__heading section__heading">お知らせ</h2>
            <p class="top-news__description">
              季節の農作物のお知らせ、見学ツアーのご案内、<br class="pc-only" />
              オンライン販売セールのお知らせなど、自然の恵み農園の最新情報をお届けします。
            </p>
            <a href="<?php esc_url(home_url('/news')); ?>" class="top-news__btn btn pc-only"
              >view more</a
            >
          </div>
          <div class="top-news__inner">
            <ul>
              <li>
                <article>
                  <a href="./single.html" class="top-news__article">
                    <div class="top-news__article-info">
                      <time class="top-news__article-date" datetime="YYYY-MM-DD"
                        >YYYY.MM.DD</time
                      >
                      <div class="top-new__article-cats">
                        <p class="top-news__article-cat">カテゴリー</p>
                      </div>
                    </div>
                    <h3 class="top-news__article-title">
                      タイトルが入ります。タイトルが入ります。タイトルが入ります。
                    </h3>
                  </a>
                </article>
              </li>
              <li>
                <article>
                  <a href="./single.html" class="top-news__article">
                    <div class="top-news__article-info">
                      <time class="top-news__article-date" datetime="YYYY-MM-DD"
                        >YYYY.MM.DD</time
                      >
                      <div class="top-new__article-cats">
                        <p class="top-news__article-cat">カテゴリー</p>
                      </div>
                    </div>
                    <h3 class="top-news__article-title">
                      タイトルが入ります。タイトルが入ります。タイトルが入ります。
                    </h3>
                  </a>
                </article>
              </li>
              <li>
                <article>
                  <a href="./single.html" class="top-news__article">
                    <div class="top-news__article-info">
                      <time class="top-news__article-date" datetime="YYYY-MM-DD"
                        >YYYY.MM.DD</time
                      >
                      <div class="top-new__article-cats">
                        <p class="top-news__article-cat">カテゴリー</p>
                      </div>
                    </div>
                    <h3 class="top-news__article-title">
                      タイトルが入ります。タイトルが入ります。タイトルが入ります。
                    </h3>
                  </a>
                </article>
              </li>
            </ul>
          </div>
          <a href="<?php esc_url(home_url('/news')); ?>" class="top-news__btn btn sp-only"
            >view more</a
          >
        </div>
      </section>
      <section>
        <div class="access container" id="access">
          <h2 class="access__heading section__heading">アクセス</h2>
          <div class="access__table-wrapper">
            <table class="access__table">
              <tr>
                <th>会社名</th>
                <td>株式会社自然の恵み農園</td>
              </tr>
              <tr>
                <th>所在地</th>
                <td>
                  <address>
                    〒123-456<br class="sp-only" />千葉県〇〇市××町<br
                      class="sp-only"
                    />
                    1丁目23-45
                  </address>
                </td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td>012-3456-7890</td>
              </tr>
              <tr>
                <th>営業時間</th>
                <td>
                  10:00〜18:00<br class="sp-only" />
                  （土日祝を除く）
                </td>
              </tr>
              <tr>
                <th>
                  Googleマップ<br /><a
                    href="https://maps.app.goo.gl/aVniWrrEDngQ47Sr6"
                    target="_blank"
                    >拡大地図を表示</a
                  >
                </th>
                <td>
                  <div class="access__gmap-wrapper pc-only">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.6072102590215!2d140.0589632757913!3d35.760457972561824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60227e5329d23245%3A0xd4cde63c28d3f984!2sFunabashi%20Andersen%20Park!5e0!3m2!1sen!2sjp!4v1721538976820!5m2!1sen!2sjp"
                      width="100%"
                      height="100%"
                      style="border: 0"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                  </div>
                </td>
              </tr>
            </table>
            <div class="access__gmap-wrapper sp-only">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.6072102590215!2d140.0589632757913!3d35.760457972561824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60227e5329d23245%3A0xd4cde63c28d3f984!2sFunabashi%20Andersen%20Park!5e0!3m2!1sen!2sjp!4v1721538976820!5m2!1sen!2sjp"
                width="100%"
                height="100%"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
      <?php get_template_part('template-parts/section-contact') ?>
    </main>
<?php get_footer(); ?>