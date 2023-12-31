<?php
/*
Template Name: Abouti
*/
get_header();
?>
<?php get_template_part('template-parts/breadcrumbs'); ?>

<main>
    <section class="container about-section">
        <h1 class="about__title"><?php the_field('about-title'); ?></h1>
        <div class="first-part_descr">
            <div class="">
                <h2 class="about__big-title"><?php the_field('about-title'); ?></h2>
                <p class="about__description description__main"><?php the_field('description-main'); ?></p>
            </div>
            <div class="about__img">
                <div class="about-image__wrap">
                    <img class="image" src="<?php the_field('about-img'); ?>" alt="about">
                </div>
            </div>
            <div class="first-descr_wrap">
                <p class="about__description description__command"><?php the_field('description-command'); ?></p>
                <div class="about__contact">
                    <div class="email">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carbon_email.png" alt="email" class="email__img">
                        <a class="email__link" href="mailto:<?php the_field('email'); ?>"><?php the_field('email', 'options'); ?></a>
                    </div>
                    <div class="phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carbon_phone.png" alt="email" class="phone__img">
                        <a class="phone__link__first" href="tel:+<?php the_field('first-phone'); ?>"><?php the_field('first-phone', 'options'); ?></a>&nbsp|&nbsp
                        <a class="phone__link" href="tel:<?php the_field('second-phone'); ?>"><?php the_field('second-phone', 'options'); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-part_descr">
            <div class="work__img">
                <div class="work-image__wrap">
                    <img class="image" src="<?php the_field('work-img'); ?>" alt="work">
                </div>
            </div>
            <div class="second-descr_wrap">
                <p class="about__description description__other"><?php the_field('description-other'); ?></p>
                <p class="about__description description__animals"><?php the_field('animals'); ?></p>
                <p class="about__description description__morehelp"><?php the_field('more-help'); ?></p>
                <a href="<?php the_field('button-link-support'); ?>" class="button support__btn">
                        <?php the_field('button-text-support'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- documents -->
    <?php get_template_part('template-parts/founding-documents'); ?>

    <!-- help-->
    <?php get_template_part('template-parts/need-help-animals'); ?>
</main>
<?php get_footer(); ?>
