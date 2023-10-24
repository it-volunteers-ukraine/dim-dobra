<?php
/*
Template Name: helpform
*/
get_header();
?>
<main>
    <?php get_template_part( 'template-parts/breadcrumbs'); ?>
    <section class="helpform__section">
        <div class="container">
            <div class="internal__wrap">
                <h1 class="helpform__title"><?php the_field('form_title'); ?></h1>
                <?php 
                $form = get_field('form');
                if($form) : ?>
                <div class="helpform">
                    <?php echo $form?>
                </div>
                <?php endif; ?>
                
            </div>
        </div>
    </section> 
    <div class="notification" id="notification">
        <div class="notification__image">
        <img src="<?php the_field('notification_image', 'option'); ?>" alt="Логотип сайту">
        </div>
        <p class="notification__text">
            <?php the_field('notification_text', 'option'); ?></p>
        <button class="notification__btn" id="js-close-notification" type="button" aria-label="Закрити повідомлення про успішну відправку заявки">
            <svg class="menu-icon" width="24px" height="24px">
                <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#close"></use>
            </svg>
        </button>
    </div>
</main>

<?php get_footer(); ?>