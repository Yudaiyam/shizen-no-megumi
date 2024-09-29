<?php get_header(); ?>
<main>
      <div class="page-top container">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumb">','</p>' );
          }
        ?>
        <h1 class="section__heading page__heading">お知らせ一覧</h1>
      </div>
      <div class="tabs-container">
        <a href="<?php echo esc_url(home_url('/news')); ?>" class="tab">すべて</a>
        <?php  ?>
        <?php
            $cats = get_categories();
            foreach ($cats as $cat) {
                $current_cat_class = is_category($cat->term_id) ? ' selected' : '';
                $category_link = esc_url(get_category_link($cat->term_id));
                $category_name = esc_html($cat->name);
                echo '<a href="' . $category_link . '" class="tab' . $current_cat_class . '">' . $category_name . '</a>';
            }
            ?>
      </div>
      <section>
        <div class="archive__inner container">
          <ul class="archive__list">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'paged' => $paged,
                'posts_per_page' => 5,
                'post_type' => 'post',
                'cat' => get_query_var('cat'),
            );
            $query = new WP_Query($args);
            if($query->have_posts()){
              while ($query->have_posts()) {
                  $query->the_post();
                  ?>
                <li>
                  <article>
                    <a href="<?php the_permalink(); ?>" class="archive__item">
                      <?php
                        $thumbnail_id = SCF::get('thumbnail');
                        $thumbnail_data = wp_get_attachment_image_src($thumbnail_id, 'large');
                        $url = $thumbnail_data[0];
                        $alt = get_the_title();
                        if ($thumbnail_id) {
                          echo '<div class="archive__thumbnail"><img src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '"/></div>';
                        } else {
                            $no_image = get_template_directory_uri() . "/img/no-image.webp";
                            echo '<div class="archive__thumbnail"><img src="' . $no_image . '" alt="' . get_the_title() . '" /></div>';
                          }
                      ?>
                      <div class="archive__text">
                        <div class="archive__info">
                          <time datetime="<?php echo get_the_time('Y-m-d'); ?>" class="archive__time"
                            ><?php echo get_the_time('Y.m.d'); ?></time
                          >
                          <?php 
                            $cats = get_the_category();
                            echo '<div class="archive__cat-wrappe">';
                            foreach($cats as $cat){
                              echo '<p class="archive__cat-item">' . $cat->name . '</p>';
                            }
                            echo '</div>';
                          ?>
                        </div>
                        <h2 class="archive__title">
                          <?php the_title(); ?>
                        </h2>
                          <?php 
                          $sections = SCF::get('single-section');
                          foreach($sections as $section){
                            echo '<p class="archive__excerpt">' . $section['single-section__paragraph'] . '</p>';
                            break;
                          }
                          ?>
                      </div>
                    </a>
                  </article>
                </li>
                <?php 
                  }
                ?>
          </ul>
          <?php
          echo '<div class="pagination">';
            $total_pages = $query->max_num_pages;
            if ($total_pages > 1) {
              // ページネーション作成関数
              echo paginate_links(array(
                  'total' => $total_pages,
                  'current' => $paged,
                  'mid_size' => 2,
                  'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
                  'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
              ));
          }  ?>
          </div>
          <?php 
            }
            wp_reset_postdata();
          ?>
        </div>
      </section>
      <?php get_template_part('section-contact'); ?>
    </main>
<?php get_footer(); ?>