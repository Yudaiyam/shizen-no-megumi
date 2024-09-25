<?php get_header(); ?>
    <main>
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>
      <article>
        <div class="page-top container">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumb">','</p>' );
          }
        ?>
          <h1 class="single__heading">
            <?php the_title(); ?>
          </h1>
          <div class="single__info">
            <time class="single__date" datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
            <?php
                $cats = get_the_category();
                foreach($cats as $cat){
                    echo '<div class="single__cats-wrapper">';
                    echo '<p class="single__cats-item">' . $cat->name .'</p>';
                    echo '</div>';
                }
             ?>
          </div>
        </div>
        <div class="single__container container container-white">
          <div class="container-second">
            <div class="single__thumbnail">
                <?php 
                    $thumbnail_id = SCF::get('thumbnail');
                    $thumbnail_data = wp_get_attachment_image_src($thumbnail_id, 'large');
                    $url = $thumbnail_data[0];
                    $alt = get_the_title();
                    if($thumbnail_id){
                        echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '"/>';
                    }else{
                        $no_image = get_template_directory_uri() . "/img/no-image.webp";
                        echo '<img src="' . $no_image . '" alt="' . get_the_title() . '" />';
                    }
                ?>
            </div>
            <?php 
            $single_sections = SCF::get('single-section');
                foreach($single_sections as $single_section){
                    if($single_section['single-section__subheading']){ ?>
                        <div class="toc">
                            <p class="toc__heading">目次</p>
                            <ol class="toc__inner"></ol>
                        </div>
                    <?php
                    }
                    ?>
                    <section>
                        <div class="single-section">
                            <?php 
                                $subheading = $single_section['single-section__subheading'];
                                if($subheading){
                                    echo '<h2 class="single-section__subheading">' . $subheading . '</h2>';
                                }
                            ?>
                            <?php
                                $img =  $single_section['single-section__img'];
                                if($img){
                                    echo '<div class="single-section__img">' . wp_get_attachment_image($img,'thumbnail') . '</div>';
                                }
                            ?>
                            <?php 
                                $paragraph = $single_section['single-section__paragraph'];
                                if($paragraph){
                                    echo '<p class="single-section__paragraph">' . $paragraph . '</p>';
                                }
                            ?>
                            <?php 
                                $subsubheading = $single_section['single-section__subsubheading'];
                                if($subsubheading){
                                    echo '<h3 class="single-section__subsubheading">' . $subsubheading . '</h3>';
                                }
                            ?>
                            <?php 
                                $paragraph2 = $single_section['single-section__paragraph02'];
                                if($paragraph2){
                                    echo '<p class="single-section__paragraph">' . $paragraph2 . '</p>';
                                }
                            ?>
                        </div>
                    </section>
                    <?php
                }
            ?>
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="single-btn btn btn-ja">一覧に戻る</a>
          </div>
        </div>
      </article>
      <?php
        }
        wp_reset_postdata();
    } ?>
       <?php get_template_part('template-parts/section-contact'); ?>
    </main>
<?php get_footer(); ?>