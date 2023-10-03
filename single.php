 <?php get_header(); ?>

 <main>
    <?php get_template_part( 'template-parts/breadcrumbs'); ?>
	<section>
		<div class="container">
			<h1>Допомога Херсонщині від 23.07.2023</h1>
			<p>Наші волонтери в котрий раз доставили гуманітарну допомогу на Херсонщину: продукти харчування, питну воду, медикаменти, одяг та інші необхідні речі для людей, які потерпіли від кризових ситуацій. Ця місія виявилася особливо важливою, оскільки обстановка на Херсонщині залишається надзвичайно складною через наслідки підриву Каховської ГЕС. Ми вивчаємо потреби місцевого населення та докладаємо всіх можливих зусиль, щоб забезпечити їх допомогою та підтримкою. Крім матеріальної допомоги, наші волонтери також надають психологічну підтримку та спілкуються з людьми, які пережили складні події.</p>
		</div>
		<img src="<?php echo get_template_directory_uri()?>/assets/images/command-HD.jpg ?>" alt="">
	</section>
    <?php get_template_part( 'template-parts/need-help'); ?>
</main>

		<!-- <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wp-it-volunteers' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wp-it-volunteers' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?> -->

<?php

get_footer();
