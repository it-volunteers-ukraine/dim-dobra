	<?php 
    $content = get_the_content();
	$title = get_the_title(); ?>
    
    <section>
		<div class="container">
			<h1 class="single-post__title"><?php if($title) : echo $title; endif; ?> від <?php the_time('d.m.Y'); ?></h1>
			<div class="single-post__description"><?php if($content) : echo $content; endif; ?></div>
			<div class="single-post__image">
                <?php 
                    $images = get_field('image_gallery');
                    if( $images ): ?>
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <?php foreach( $images as $image ): ?>
                                    <li>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p><?php echo esc_html($image['caption']); ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
			</div>
		</div>	
	</section>