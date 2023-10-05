 <?php get_header(); ?>

 <main>
    <?php get_template_part( 'template-parts/breadcrumbs');

 		$postID = $post->ID;
 		$category = get_the_category($postID);
		$catID = get_cat_ID($category[0]->cat_name);

			$q = new WP_Query( 'cat=$catID&p=$postID' );	

				if( $q->have_posts() ) :
				
					get_template_part( 'template-parts/content', get_post_type() );

					get_template_part( 'template-parts/navigation' );
						
				endif;

				wp_reset_postdata();
	
     get_template_part( 'template-parts/need-help'); ?>
</main>

<?php get_footer();
