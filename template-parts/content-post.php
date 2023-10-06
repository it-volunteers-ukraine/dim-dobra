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
                        <h1 class="single-post__title"><?php if($title) : echo $title; endif; ?> від <?php the_time('d.m.Y'); ?></h1>
                        <div class="single-post__description"><?php if($content) : echo $content; endif; ?></div>
                        <?php 
                            $images = get_field('image_gallery');
                            if( $images ): ?>
                                <div class="single-post__slider swiper-container">
                                    <ul class="single-post__wrap swiper-wrapper">
                                        <?php foreach( $images as $image ): ?>
                                            <li class="swiper-slide img-slider__image">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="swiper-pagination" style="position: inherit"></div>
                                </div>
                                <ul class="single-post__flex">
                                    <?php foreach( $images as $image ): ?>
                                        <li class="single-post__item">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                    </div>	
                </section>

				<?php endif;

				wp_reset_postdata(); ?>