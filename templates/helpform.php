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
</main>

<?php get_footer(); ?>