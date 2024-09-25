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
    </main>
<?php get_footer(); ?>