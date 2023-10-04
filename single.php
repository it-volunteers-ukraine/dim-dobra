 <?php get_header(); ?>

 <main>
    <?php get_template_part( 'template-parts/breadcrumbs');

 		$category = get_the_category($post->ID);
		$catID = get_cat_ID($category[0]->cat_name);
		print_r($catID);

		    $args = array(
				'post_type'      => 'post',
                'posts_per_page' => 1,
                'tax_query'      => array(
                    array(
                        'taxonomy'=> 'category',
                        'terms' => $catID
                    )
                )
            );

			$q = new WP_Query( $args );	

				if( $q->have_posts() ) :

					while( $q->have_posts() ) : $q->the_post();
				
						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation(
							array(
								'prev_text' => '</span> <span class="nav-title">%title</span>',	
								'next_text' => '</span> <span class="nav-title">%title</span>',
								)
						);
					endwhile;
				endif;

				wp_reset_postdata();
	
     get_template_part( 'template-parts/need-help'); ?>
</main>

<?php get_footer();
