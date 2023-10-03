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

            <h1 class="help-people__title"><?php echo get_the_title(); ?></h1>

            <?php 
            $postID = $post->ID;
            $category = ($postID === 95) ? 3 : 4;

            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => get_option('posts_per_page'),
                'paged'          => $current_page,
                'tax_query'      => array(
                    array(
                        'taxonomy'=> 'category',
                        'terms' => $category
                    )
                )
            );
            query_posts( $args );
            
            $wp_query->is_archive = true;
            $wp_query->is_home = false; ?>

            <div class="posts-list">
            <?php while(have_posts()): the_post(); 
                get_template_part( 'template-parts/post-file');
            endwhile; ?>
            </div>
                
    </section>
    <?php get_template_part( 'template-parts/need-help'); ?>
</main>

<?php get_footer(); ?>