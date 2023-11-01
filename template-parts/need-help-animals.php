<div class="container">
    <div class="help__animals">
        <img src="<?php the_field('need-help-img', 'option'); ?>" class="help-animals__img" alt="Потрібна допомога">
        <div class="help__flex">
            <h2 class="help-animals__title"><?php the_field('need-help__title', 'option'); ?></h2>
            <a href="<?php the_field('link_helpform', 'option'); ?>"class="button help-animals__button ">
                <?php the_field('need_help_button', 'option'); ?>
            </a>
        </div>
    </div>
</div>