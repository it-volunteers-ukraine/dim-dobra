<?php
/*
Template Name: helpform
*/
get_header();
?>
<main>
    <div class="container back-page__wrap">
        <p class="back-page__btn">Повернутись назад</p>
    </div>
    <div class="external__wrap">
        <div class="container">
            <div class="internal__wrap">
                <h1 class="helpform__title">Форма подачі заявки на допомогу</h1>
                <div class="helpform">
                    <?php echo do_shortcode('[contact-form-7 id="71b2894" title="help-form"]')?>
                </div>
            </div>
        </div>
    </div> 
</main>

<?php get_footer(); ?>