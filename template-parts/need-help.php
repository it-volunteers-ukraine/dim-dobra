<section class="need-help">
  <h3 class="need-help__title"><?php the_field('need-help__title', 'option'); ?></h3>  
  <a href="<?php echo get_permalink('12'); ?>">  
    <button class="button need-help__button" type="button" aria-label="apply" aria-expanded="false" aria-controls="modal-window">
    <?php the_field('need_help_button', 'option'); ?>
    </button>  
  </a>     
</section>
