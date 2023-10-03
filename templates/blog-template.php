<?php
/*
Template Name: blog
*/
get_header();
?>
<main>
    <?php get_template_part( 'template-parts/breadcrumbs'); ?>
    <section class="help__section">
        <div class="container">

            <?php 
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => get_option('posts_per_page'),
                'paged'          => $current_page 
            );
            query_posts( $args );
            
            $wp_query->is_archive = true;
            $wp_query->is_home = false; ?>

            <h1 class="help-people__title"><?php the_title(); ?></h1>

            <div class="posts-list">
            <?php while(have_posts()): the_post(); 
                get_template_part( 'template-parts/post-file');
            endwhile; ?>
            </div>
                
    </section>
    <?php get_template_part( 'template-parts/need-help'); ?>
</main>

<?php get_footer(); ?>