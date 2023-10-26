<div class="container">
    <div class="help-animals">
        <img src="<?php the_field('need-help-img', 'option'); ?>" class="help-animals__img" alt="Потрібна допомога">
        <h2 class="help-animals__title"><?php the_field('need-help__title', 'option'); ?></h2>
        <button class="help-animals__button button" type="button" aria-label="Подати заявку" aria-expanded="false" aria-controls="modal-window">
                <?php the_field('need_help_button', 'option'); ?>
            <a href="<?php the_field('link_helpform', 'option'); ?>">
            </a>
        </button>
       
    </div>
</div>