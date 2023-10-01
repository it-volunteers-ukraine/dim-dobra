<?php
/*
Template Name: helpform
*/
get_header();
?>
<main>
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
	        {
		        bcn_display();
	        }?>
</div>
    </div>
    <div class="external__wrap">
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
    </div> 
</main>

<?php get_footer(); ?>