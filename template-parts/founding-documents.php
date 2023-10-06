<section class="documents">
  <h3 class="documents__title"><?php the_field('documents_title', 'option'); ?></h3>

  <ul class="documents__list">
    
    <?php if(have_rows('documents_list', 'option')) : ?>

    <?php while(have_rows('documents_list', 'option')) : the_row();          
      $img = get_sub_field('documents_img');         
    ?>

    <li>
    <a href="<?php the_sub_field('documents_link') ?>" target="_blank">
      <div class="documents__wraper">                   
        <img class="documents__img" src=<?php echo $img['url']; ?>' alt='<?php echo $img['alt']; ?>'>
        <img class="documents__img-desktop" src="<?php the_sub_field('documents_img_desktop') ?>" alt="file-icon">
        <p class="documents__subtitle"><?php the_sub_field('documents_subtitle') ?></p>
      </div>
    </a>
    </li>

    <?php endwhile; ?>
    <?php endif; ?>  
  </ul>

  <p class="documents__text"><?php the_field('documents_text', 'option'); ?></p> 
  <p class="documents__text-bottom"><?php the_field('documents_text_bottom', 'option'); ?></p>
            
</section>