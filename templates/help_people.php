<?php
/*
Template Name: help_people
*/
get_header();
?>
<main>
    <?php get_template_part( 'template-parts/breadcrumbs'); ?>
    <section class="help-people__section">
        <div class="container">
            <h1 class="help-people__title" >Фотозвіти допомоги людям</h1>

                <div class="posts-list">

                    <article class="post-box">
                        <div class="feature-image">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-home/slider-news/img-news-1.jpg" alt="helping people"></a>
                        </div>
                        <div class="description">
                            <div class="entry-date">20.07.2023</div>
                            <h2 class="post-title" >Допомога Херсонщині</h2>
                            <p class="post-text" >Наші волонтери в котрий раз доставили гуманітарну допомогу на Херсонщину: продукти харчування, питну воду...</p>
                            <button class="details-btn">ДЕТАЛЬНІШЕ</button>
                        </div>
                    </article>
                    <article class="post-box">
                        <div class="feature-image">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-home/slider-news/img-news-1.jpg" alt="helping people"></a>
                        </div>
                        <div class="description">
                            <div class="entry-date">20.07.2023</div>
                            <h2 class="post-title" >Допомога Херсонщині</h2>
                            <p class="post-text" >Наші волонтери в котрий раз доставили гуманітарну допомогу на Херсонщину: продукти харчування, питну воду...</p>
                            <button class="details-btn">ДЕТАЛЬНІШЕ</button>
                        </div>
                    </article>
                    <article class="post-box">
                        <div class="feature-image">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-home/slider-news/img-news-1.jpg" alt="helping people"></a>
                        </div>
                        <div class="description">
                            <div class="entry-date">20.07.2023</div>
                            <h2 class="post-title" >Допомога Херсонщині</h2>
                            <p class="post-text" >Наші волонтери в котрий раз доставили гуманітарну допомогу на Херсонщину: продукти харчування, питну воду...</p>
                            <button class="details-btn">ДЕТАЛЬНІШЕ</button>
                        </div>
                    </article>
        </div>
    </section>
    <?php get_template_part( 'template-parts/need-help'); ?>
</main>

<?php get_footer(); ?>