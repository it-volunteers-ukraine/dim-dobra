<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/breadcrumbs');
			
			get_template_part( 'template-parts/content', get_post_type() );

			get_template_part( 'template-parts/navigation' );
		endwhile; 
		
     get_template_part( 'template-parts/need-help');?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();