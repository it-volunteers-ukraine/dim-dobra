<div class="container">
    <div class="help-animals">
        <img src="<?php the_field('need-help-img', 'option'); ?>" class="help-animals__img" alt="Потрібна допомога">
        <h2 class="help-animals__title"><?php the_field('need-help__title', 'option'); ?></h2>
        <a href="<?php the_field('link_helpform', 'option'); ?>"class="help-animals__button button"aria-label="Подати заявку">
                <?php the_field('need_help_button', 'option'); ?>
        </a>
    </div>
</div>