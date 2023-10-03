<article class="post-box">
    <div class="feature-image">
        <a class="feature-image__link" href="<?php The_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
    </div>
    <div class="description">
        <div class="entry-date"><?php the_time('d, M, Y'); ?></div>
        <h2 class="post-title" ><?php the_title(); ?></h2>
        <div class="post-content" ><?php the_excerpt(); ?></div>
        <a class="details-btn" href="<?php The_permalink(); ?>">ДЕТАЛЬНІШЕ</a>
    </div>
</article>