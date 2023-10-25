<div class="container">
    <div class="help-animals">
        <img src="<?php the_field('need-help-img', 'option'); ?>" class="help-animals__img" alt="Потрібна допомога">
        <h2 class="help-animals__title"><?php the_field('need-help-title', 'option'); ?></h2>
        <a href="<?php the_field('link_helpform', 'option'); ?>">
            <button class="help-animals__button button" type="button" aria-label="Подати заявку" aria-expanded="false" aria-controls="modal-window">
                <?php the_field('need-help_button', 'option'); ?>
            </button>
        </a>
    </div>
</div>