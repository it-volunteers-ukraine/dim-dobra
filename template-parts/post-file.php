<article class="post-box">
    <?php
        $postImgUrl = get_the_post_thumbnail_url();
        $excerpt = get_the_excerpt();
        ?>
    <div class="feature-image">
        <?php if($postImgUrl) : ?>
        <a class="feature-image__link" href="<?php The_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
        <?php endif; ?>
    </div>
    <div class="description">
        <div class="entry-date"><?php the_time('d.m.Y'); ?></div>
        <h2 class="post-title" ><?php the_title(); ?></h2>
        <div class="post-content" ><?php if($excerpt) : echo $excerpt; endif; ?></div>
        <a class="details-btn" href="<?php The_permalink(); ?>"><?php the_field('learn-more_button', 'option'); ?></a>
    </div>
</article>