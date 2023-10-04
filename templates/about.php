<?php
/*
Template Name: About
*/
get_header();
?>

<div class="container">
    <?php get_template_part( 'template-parts/breadcrumbs'); ?>
    <section class="about">
        <h1 class="about__title"><?php the_field('about-title'); ?></h1>
        <p class="about__description description__main"><?php the_field('description-main'); ?></p>
        <div class="about__img">
            <img class="image" src="<?php the_field('about-img'); ?>" alt="about">
        </div>
        <p class="about__description description__command"><?php the_field('description-command'); ?></p>
        <p class="about__description description__other"><?php the_field('description-other'); ?></p>
        <div class="about__contact">
            <div class="email">
                <img src="<?php echo get_template_directory_uri();?> ../src/images/carbon_email.png" alt="email" class="email__img">
                <a class="email__link" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
            </div>
            <div class="phone">
                <img src="<?php echo get_template_directory_uri();?> ../src/images/carbon_phone.png" alt="email" class="phone__img">
                <a class="phone__link__first" href="tel:+<?php the_field('first-phone'); ?>"><?php the_field('first-phone'); ?> </a>&nbsp|&nbsp <a class="phone__link" href="tel:<?php the_field('second-phone'); ?>"> <?php the_field('second-phone'); ?></a> 
            </div>
        </div>
        <div class="work__img">
            <img class="image" src="<?php the_field('work-img'); ?>" alt="work">
        </div>
        <p class="about__description description__animals"><?php the_field('animals'); ?></p>
        <p class="about__description description__morehelp"><?php the_field('more-help'); ?></p>
        <button class="support__btn button">ПІДТРИМАТИ ФОНД</button>
    </section>
    <!-- documents -->
    <?php get_template_part('template-parts/founding-documents'); ?>
    <!-- help-->
    <?php get_template_part('template-parts/need-help-animals'); ?>
   </div>
    <?php get_footer(); ?>