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
      <button class="button house__button" type="button" aria-label="support"   aria-expanded="false"
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

          <?php if(have_rows('news_slider')) : ?>

          <?php while(have_rows('news_slider')) : the_row();          
          $img = get_sub_field('news_img'); ?>

            <div class="swiper-slide"> 
              <img src='<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>'/>
              <div class="news__wraper">
                <p class="news__text"><?php the_sub_field('news_text_left') ?></p>
                <p class="news__text"><?php the_sub_field('news_text_right') ?></p>
              </div>
              <h4 class="news__subTitle"><?php the_sub_field('news_slider_subtitle') ?></h4>
            </div>  

          <?php endwhile; ?> 
          <?php endif; ?>

          </div>
            <div class="swiper-pagination" style="position: inherit"></div>
        </div>  
      </div>

      
      <div class="news__gallery">
        <div class="news__flexWraper" >

        <?php
        global $post;

        $myposts = get_posts([ 
	      'numberposts' => -1,
        ]);

        if( $myposts ){
	        foreach( $myposts as $post ){
		      setup_postdata( $post );

          $title = get_the_title();
          $content = get_the_content();
		    ?>

          <div class="news__wraper"> 
           <?php the_post_thumbnail(); ?>
        
          <?php 
            if ($content) : ?>
            <div class="news__text">
              <?php echo $content; ?>
            </div>

          <?php endif; ?>         
         
            <h4 class="news__subTitle"><?php echo $title; ?></h4>
          </div>

          <?php 
	    }
    } 
    wp_reset_postdata(); ?>

        </div>
      </div>
    </section>

    <section class="bank-details">
      <h3 class="bank-details__title">Наші реквізити</h3>
      
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

          <div class="tabs__wraper">
            <div class="tabs__flexWraper">
              <div style="padding-top: 0">
                <div class="tabs__textWraper" style="padding-top: 0">
                  <p class="bank-details__text-first">Отримувач:</p>     
                  <p class="bank-details__text-second">ЗУБЕНКО ОЛЕНА ВОЛОДИМИРІВНА</p>     
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">
                  <p class="bank-details__text-first">ЄДРПОУ:</p>     
                  <p class="bank-details__text-second">3192013863</p> 
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">    
                  <p class="bank-details__text-first">Банк:</p>     
                  <p class="bank-details__text-second">АТ КБ «ПРИВАТБАНК»</p>
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">      
                  <p class="bank-details__text-first">IBAN:</p>     
                  <p class="bank-details__text-second">UA683052990000026207742096747</p>
                </div>   
              </div>
              <div class="tabs__wraper-img"> 
                <img class="tabs-img" src='http://dim-dobra/wp-content/uploads/2023/09/qr-code.jpg' alt=''/>
              </div>  
            </div>        
            <div style="	display: flex; justify-content: center; padding-top: 0">
              <button class="button tabs-button" type="button" aria-label="support the fund"   aria-expanded="false"
              aria-controls="modal-window">ПІДТРИМАТИ ФОНД</button>
            </div>
          </div>

          <div class="tabs__wraper">
            <div class="tabs__flexWraper">
              <div style="padding-top: 0">
                <div class="tabs__textWraper" style="padding-top: 0">
                  <p class="bank-details__text-first">Отримувач:</p>     
                  <p class="bank-details__text-second">ZUBENKO OLENA VOLODYMYRIVNA</p>     
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">
                  <p class="bank-details__text-first">ЄДРПОУ:</p>     
                  <p class="bank-details__text-second">3192013863</p> 
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">    
                  <p class="bank-details__text-first">Банк:</p>     
                  <p class="bank-details__text-second">АТ КБ «ПРИВАТБАНК»</p>
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">      
                  <p class="bank-details__text-first">IBAN:</p>     
                  <p class="bank-details__text-second">UA683052990000026207742096747</p>
                </div>   
              </div>
              <div class="tabs__wraper-img"> 
                <img class="tabs-img" src='http://dim-dobra/wp-content/uploads/2023/09/qr-code.jpg' alt=''/>
              </div>  
            </div>        
            <div style="	display: flex; justify-content: center; padding-top: 0">
              <button class="button tabs-button" type="button" aria-label="support the fund"   aria-expanded="false"
              aria-controls="modal-window">ПІДТРИМАТИ ФОНД</button>
            </div>
          </div>

          <div class="tabs__wraper">
            <div class="tabs__flexWraper">
              <div style="padding-top: 0">
                <div class="tabs__textWraper" style="padding-top: 0">
                  <p class="bank-details__text-first">Отримувач:</p>     
                  <p class="bank-details__text-second">ZUBENKO ELENA WOLODYMYRIWNA</p>     
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">
                  <p class="bank-details__text-first">ЄДРПОУ:</p>     
                  <p class="bank-details__text-second">3192013863</p> 
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">    
                  <p class="bank-details__text-first">Банк:</p>     
                  <p class="bank-details__text-second">АТ КБ «ПРИВАТБАНК»</p>
                </div>
                <div class="tabs__textWraper" style="padding-top: 0">      
                  <p class="bank-details__text-first">IBAN:</p>     
                  <p class="bank-details__text-second">UA683052990000026207742096747</p>
                </div>   
              </div>
              <div class="tabs__wraper-img"> 
                <img class="tabs-img" src='http://dim-dobra/wp-content/uploads/2023/09/qr-code.jpg' alt=''/>
              </div>  
            </div>        
            <div style="	display: flex; justify-content: center; padding-top: 0">
              <button class="button tabs-button" type="button" aria-label="support the fund"   aria-expanded="false"
              aria-controls="modal-window">ПІДТРИМАТИ ФОНД</button>
            </div>
          </div>
                
      </div>
    </section>

    <?php get_template_part( 'template-parts/need-help'); ?>

  </div>

<?php get_footer(); ?>