<?php
/*
Template Name: home
*/
get_header();
?>

<main>
    <section class="house">
        <img class="img-hero" src="<?php the_field('hero_img_background') ?>" alt="">
        <div class="house__title-wraper">
          <h1 class="house__title"><?php the_field('hero_title'); ?></h1>
        <a href="#bank-details" class="button house__button">
          <?php the_field('hero_btn_text'); ?>
        </a>
        </div>
    </section>

  <section class="support">
    <div class="container ">
      <h2 class="support__title"><?php the_field('support__title'); ?></h2>
      <ul class="support__list">

        <?php
        $support__list = get_field("support__list");

        if ($support__list) : ?>
          <?php foreach ($support__list as $support) :
            $count = $support['support__count'];
            $text = $support['support__text'];
          ?>
            <li class="support__item">
              <p class="support__count"><?php echo $count; ?></p>
              <p class="support__text"><?php echo $text; ?></p>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>

  <section class="about">
    <div class="container ">
      <h3 class="about__title"><?php the_field('about__title'); ?></h3>

      <div class="about__wraper">
        <p class="about__text">
          <?php the_field('about_text_first'); ?>
          <br> <br>
          <?php the_field('about_text_second'); ?>
        </p>

        <p class="about__text-tablet">
          <?php the_field('about_text_first'); ?>
          <?php the_field('about_text_second'); ?>
          <br><br>
          <?php the_field('about_text_thirdth'); ?>
          <?php the_field('about_text_fourth'); ?>
        </p>

        <?php if (have_rows('about_slider')) : ?>
          <div class="swiper-container">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper swiper_custom-wrap">

                <?php while (have_rows('about_slider')) : the_row();
                  $img = get_sub_field('about_slider_img'); ?>
                  <div class="swiper-slide about__img-wrap">
                    <img src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>' />
                  </div>
                <?php endwhile; ?>
              </div>
              <div class="swiper-pagination swiper-bullets" style="position: inherit"></div>
          </div>
          <div class="swiper_pagination custom-pagination"></div>
              <div class="pagination-wrap">
                <div class="custom-prev-icon"></div>
                <div class="custom-next-icon"></div>
              </div>
          </div>
        <?php endif; ?>
      </div>

      <p class="about__text">
        <?php the_field('about_text_thirdth'); ?>
        <br> <br>
        <?php the_field('about_text_fourth'); ?>
      </p>
    </div>
  </section>

  <?php get_template_part('template-parts/founding-documents'); ?>

  <!-- section news  -->
  <section class="news">
    <div class="container ">
      <h3 class="news__title"><?php the_field('news__title'); ?></h3>

      <div class="swiper-container news__hide">
        <div class="swiper myPostSwiper">
          <div class="swiper-wrapper">

            <?php
            // Запит для категорії "help-people"
            $args_help_people = array(
              'posts_per_page' => 3,
              'category_name' => 'help-people',
              'orderby' => 'date',
              'order' => 'DESC',
            );

            $query_help_people = new WP_Query($args_help_people);

            // Запит для категорії "help-animals"
            $args_help_animals = array(
              'posts_per_page' => 3,
              'category_name' => 'help-animals',
              'orderby' => 'date',
              'order' => 'DESC',
            );

            $query_help_animals = new WP_Query($args_help_animals);

            // Об'єднання результатів запитів, спочатку help-people, потім help-animals
            $merged_posts = array_merge($query_help_people->posts, $query_help_animals->posts);

            // Вивід постів
            foreach ($merged_posts as $post) {
              setup_postdata($post);
              $title = get_the_title();
            ?>

              <div class="swiper-slide swiper-hover">
                <a href="<?php the_permalink(); ?>" aria-label="link to a separate post">
                  <div class="news__wraper-img">
                    <div class="one-news__wrap">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  </div>
                  <div class="news__wraper">
                    <p class="news__text"><?php the_field('subtext_posts'); ?></p>
                    <p class="news__text"><?php the_time('d.m.Y'); ?></p>
                  </div>
                  <h4 class="news__subTitle"><?php echo $title; ?></h4>
                </a>
              </div>

            <?php
            }
            wp_reset_postdata();
            ?>

          </div>
          <div class="swiper-pagination" style="position: inherit"></div>
        </div>
      </div>

        <div class="news__flexWraper">

          <?php
          // Запит для категорії "help-people"
          $args_help_people = array(
            'posts_per_page' => 2,
            'category_name' => 'help-people',
            'orderby' => 'date',
            'order' => 'DESC',
          );

          $query_help_people = new WP_Query($args_help_people);

          // Запит для категорії "help-animals"
          $args_help_animals = array(
            'posts_per_page' => 2,
            'category_name' => 'help-animals',
            'orderby' => 'date',
            'order' => 'DESC',
          );

          $query_help_animals = new WP_Query($args_help_animals);

          // Об'єднання результатів запитів, спочатку help-people, потім help-animals
          $merged_posts = array_merge($query_help_people->posts, $query_help_animals->posts);

          // Вивід постів
          foreach ($merged_posts as $post) {
            setup_postdata($post);
            $title = get_the_title();
          ?>

            <div class="news__wraper">
              <a href="<?php the_permalink(); ?>" aria-label="link to a separate post">
                <div class="news__wraper-img">
                  <div class="one-news__wrap">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>

                <div class="news__text">
                  <p><?php the_field('subtext_posts'); ?></p>
                  <p><?php the_time('d.m.Y'); ?></p>
                </div>
                <h4 class="news__subTitle"><?php echo $title; ?></h4>
              </a>
            </div>

          <?php
          }

          wp_reset_postdata();
          ?>

        </div>
    </div>
  </section>

  <!-- section bank-details  -->
  <section id="bank-details">
    <div class="container ">
      <h3 class="bank-details__title"><?php the_field('bank_details_title'); ?></h3>

      <?php if (have_rows('bank_details_tabs')) : ?>
        <div class="tabs">
          <ul>
            <li>
              <span class="tabs-span1"><?php the_field('tab_name_uah'); ?></span>
              <span class="tabs-span2">UAH</span>
            </li>
            <li>
              <span class="tabs-span1"><?php the_field('tab_name_usd'); ?></span>
              <span class="tabs-span2">USD</span>
            </li>
            <li>
              <span class="tabs-span1"><?php the_field('tab_name_eur'); ?></span>
              <span class="tabs-span2">EUR</span>
            </li>
          </ul>

          <div>
            <?php while (have_rows('bank_details_tabs')) : the_row();
              $img = get_sub_field('qr-code'); ?>

              <div class="tabs__wraper">
                <div class="tabs__flexWraper">
                  <div style="padding-top: 0">
                    <div class="tabs__textWraper" style="padding-top: 0">
                      <p class="bank-details__text-first"><?php the_sub_field('recipient_first') ?></p>
                      <p class="bank-details__text-second"><?php the_sub_field('recipient_second') ?></p>
                    </div>
                    <div class="tabs__textWraper" style="padding-top: 0">
                      <p class="bank-details__text-first"><?php the_sub_field('edrpou_first') ?></p>
                      <p class="bank-details__text-second"><?php the_sub_field('edrpou_second') ?></p>
                    </div>
                    <div class="tabs__textWraper" style="padding-top: 0">
                      <p class="bank-details__text-first"><?php the_sub_field('bank_first') ?></p>
                      <p class="bank-details__text-second"><?php the_sub_field('bank_second') ?></p>
                    </div>
                    <div class="tabs__textWraper" style="padding-top: 0">
                      <p class="bank-details__text-first"><?php the_sub_field('iban_first') ?></p>
                      <p class="bank-details__text-second"><?php the_sub_field('iban_second') ?></p>
                    </div>
                  </div>
                  <div class="tabs__wraper-img">
                    <img class="tabs-img" src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>' />
                  </div>
                </div>
                <div class="tabs__wraper-btn" style="padding-top: 0">
                  <a class="button tabs-button" href="<?php the_sub_field('bank_link') ?>" target="_blank">
                    <?php the_sub_field('tabs_button') ?>
                  </a>
                </div>
              </div>

            <?php endwhile; ?>
          </div>
        </div>

      <?php endif; ?>
    </div>
  </section>

  <?php get_template_part('template-parts/need-help'); ?>

</main>

<?php get_footer(); ?>