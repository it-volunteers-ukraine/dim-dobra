<?php
/*
Template Name: home
*/
get_header();
?>

  <div class="container ">
    <section class="house">
      <div class="house__title-wraper">
        <h1 class="house__title"><?php the_field('hero_title'); ?></h1>
      </div> 
      <button class="button house__button scroll-to-bank-details" type="button" aria-label="support"   aria-expanded="false"
      aria-controls="modal-window"><?php the_field('hero_btn_text'); ?></button>
    </section>

    <section class="support">
      <h2 class="support__title"><?php the_field('support__title'); ?></h2>    
      <ul class="support__list">

      <?php
      $support__list = get_field("support__list");

      if($support__list) : ?>
        <?php foreach($support__list as $support) : 
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
    </section>

    <section class="about">
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
              <div class="swiper-wrapper" style="margin-bottom: 32px">      

            <?php while(have_rows('about_slider')) : the_row(); 
            $img = get_sub_field('about_slider_img'); ?>
              <div class="swiper-slide"> 
                <img src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>'/>
              </div>
            <?php endwhile; ?>      

              </div>
                <div class="swiper-pagination" style="position: inherit"></div>
            </div>       
          </div>
        <?php endif; ?>

      </div>

        <p class="about__text">
            <?php the_field('about_text_thirdth'); ?> 
          <br> <br> 
            <?php the_field('about_text_fourth'); ?>
        </p>    
    </section>

    <?php get_template_part( 'template-parts/founding-documents'); ?>

    <section class="news">
      <h3 class="news__title"><?php the_field('news__title'); ?></h3>

      <div class="swiper-container news__hide">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

          <?php
            $args = array(
            'posts_per_page' => 6,
            'category_name' => 'help-people, help-animals',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                  $query->the_post();
                  $title = get_the_title();
          ?>

            <div class="swiper-slide">
              <div class="image-container">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="news__wraper">
                <p class="news__text"><?php the_time('d.m.Y'); ?></p>
                <p class="news__text"><?php the_time('d.m.Y'); ?></p>
              </div>
                <h4 class="news__subTitle"><?php echo $title; ?></h4>
            </div>

          <?php
              }
              wp_reset_postdata();
            }
          ?>

          </div>
            <div class="swiper-pagination" style="position: inherit"></div>
        </div>
      </div>
      
      <div class="news__gallery">
        <div class="news__flexWraper" >

        <?php
        $args = array(
            'posts_per_page' => 4,
            'category_name' => 'help-people, help-animals',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $title = get_the_title();
        ?>

          <div class="news__wraper">
            <?php the_post_thumbnail(); ?>
                  
            <div class="news__text">
              <?php the_time('d.m.Y'); ?>
            </div>
              <h4 class="news__subTitle"><?php echo $title; ?></h4>
          </div>

        <?php
          }
            wp_reset_postdata();
        }
        ?>

        </div>
      </div>
    </section>

    <section class="bank-details">
      <h3 class="bank-details__title"><?php the_field('bank_details_title'); ?></h3>
      
      <?php if (have_rows('bank_details_tabs')) : ?>
      <div class="tabs">
        <ul>
          <li> 
            <span class="tabs-span1">Для переказу у гривнях</span> 
            <span class="tabs-span2">UAH</span> 
          </li>
          <li>          
            <span class="tabs-span1">Для переказу у доларах</span> 
            <span class="tabs-span2">USD</span> 
          </li>
          <li>          
            <span class="tabs-span1">Для переказу у євро</span> 
            <span class="tabs-span2">EUR</span> 
          </li>      
        </ul>

        <div>
          <?php while(have_rows('bank_details_tabs')) : the_row(); 
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
                <img class="tabs-img" src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>'/>
              </div>  
            </div>        
            <div style="display: flex; justify-content: center; padding-top: 0">
              <a href="<?php the_sub_field('bank_link') ?>" target="_blank">
                <button class="button tabs-button" type="button" aria-label="support the fund"   aria-expanded="false"
                aria-controls="modal-window"><?php the_sub_field('tabs_button') ?></button>
              </a>
            </div>
          </div> 

          <?php endwhile; ?>
        </div>                
      </div>

      <?php endif; ?>
    </section>

    <?php get_template_part( 'template-parts/need-help'); ?>

  </div>

<?php get_footer(); ?>