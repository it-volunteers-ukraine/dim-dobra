  <div class="container ">
    <section class="need-help">

      <style>
        .need-help {
          background-image: url('<?php the_field('need_help_sm_img', 'option') ?>');

          @media screen and (min-width: 768px) {
            background-image: url('<?php the_field('need_help_lg_img', 'option') ?>');
          }
        }
      </style>

      <h3 class="need-help__title"><?php the_field('need-help__title', 'option'); ?></h3>
      <a href="<?php the_field('link_helpform', 'option'); ?>">
        <button class="button need-help__button" type="button" aria-label="apply" aria-expanded="false" aria-controls="modal-window">
          <?php the_field('need_help_button', 'option'); ?>
        </button>
      </a>

    </section>
  </div>