<div class="help-animals">
        <img src="<?php the_field('need-help-img'); ?>" class="help-animals__img" alt="Потрібна допомога">
        <h3 class="help-animals__title"><?php the_field('need-help-title'); ?></h3>  
        <a href="<?php the_field('button-link'); ?>">
            <button class="button help-animals__button" type="button" aria-label="apply" aria-expanded="false" aria-controls="modal-window">
              <?php the_field('button-text'); ?>
            </button>
        </a>
</div>
