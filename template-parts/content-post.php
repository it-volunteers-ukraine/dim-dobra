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
                        <?php if(have_rows('images-gallery')):?>
                             <div class="single-post__slider swiper-container">

                                <ul class="single-post__wrap swiper-wrapper" id="lightgallery">
                                <?php while(have_rows('images-gallery')): the_row();
                                $alt = get_sub_field('alt');
                                $link = get_sub_field('link');

                                $arr = explode("/", $link);
                                if (in_array("d", $arr)) {
                                $index = array_search("d", $arr) + 1;
                                $id = $arr[$index];
                                $link = "https://drive.google.com/uc?id=" . $id;}; ?>

                                 <li class="swiper-slide img-slider__image">
                                    <a class="one-image__wrap" href="<?php echo esc_url($link); ?>" data-lightbox="swiper-images" aria-label="Подивитись фото у повному розмірі">
                                        <img id="image-link" src="<?php echo esc_url($link); ?>" alt="<?php if($alt): echo $alt; endif; ?>">
                                    </a>
                                </li>
                                <?php endwhile;?>
                                </ul>

                                <div class="swiper-pagination" style="position: inherit"></div>
                            </div>

                            <ul id="lightgallery" class="single-post__flex">
                                <?php while(have_rows('images-gallery')): the_row();
                                 $link = get_sub_field('link');

                                $arr = explode("/", $link);
                                if (in_array("d", $arr)) {
                                $index = array_search("d", $arr) + 1;
                                $id = $arr[$index];
                                $link = "https://drive.google.com/uc?id=" . $id;}; ?>

                                    <li class="single-post__item">
                                        <a class="single-post__link" href="<?php echo esc_url($link); ?>" data-lightbox="images" aria-label="Подивитись фото у повному розмірі">
                                            <img src="<?php echo esc_url($link); ?>" alt="<?php if($alt): echo $alt; endif; ?>">
                                        </a>
                                    </li>
                                <?php endwhile;?>
                            </ul>

                        <?php endif; ?>
                    </div>	
                </section>

				<?php endif;

				wp_reset_postdata(); ?>