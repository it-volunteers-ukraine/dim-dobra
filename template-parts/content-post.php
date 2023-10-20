<?php 

    $postID = $post->ID;
    $category = get_the_category($postID);
    $catID = get_cat_ID($category[0]->cat_name);

        $q = new WP_Query( 'cat=$catID&p=$postID' );	

            if( $q->have_posts() ) :
                
                $content = get_the_content();
                $title = get_the_title(); ?>
                
                <section>
                    <div class="container">
                        <h1 class="single-post__title"><?php if($title) : echo $title; endif;?> 
                        <span> 
                            <?php { if(function_exists('pll_e'))
                            pll_e('від');
                        } ?> 
                        </span>
                        <?php the_time('d.m.Y'); ?></h1>
                        <div class="single-post__description"><?php if($content) : echo $content; endif; ?></div>
                        <?php if(have_rows('images')):?>
                             <div class="single-post__slider swiper-container">

                                <ul class="single-post__wrap swiper-wrapper">
                                <?php while(have_rows('images')): the_row();
                                $link = get_sub_field('link'); 
                                print_r($link); ?>
                                 <li class="swiper-slide img-slider__image">
                                    <img src="<?php echo esc_url($link); ?>" alt="">
                                    </li>
                                <?php endwhile;?>
                                </ul>

                                <div class="swiper-pagination" style="position: inherit"></div>
                            </div>

                            <ul class="single-post__flex">
                                <?php while(have_rows('images')): the_row();?>
                                    <li class="single-post__item">
                                        <img src="<?php echo get_sub_field('link') ?>" alt="">
                                    </li>
                                <?php endwhile;?>
                            </ul>

                        <?php endif; ?>
                    </div>	
                </section>

				<?php endif;

				wp_reset_postdata(); ?>