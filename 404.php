<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <?php wp_head(); ?>
    <title>Dim Dobra</title>
</head>
<main id="primary" class="main-404">
    <div class="background-404">
    <img class="img-404" src="<?php the_field('error-image', 'option')?>" alt=""></div>
	<section class="error-404 not-found">
		<h2 class="error-text"><?php echo esc_attr(get_field('error-text', 'option')); ?></h2>
		<h1 class="error-oops"><?php echo esc_attr(get_field('error-oops', 'option')); ?></h1>
		<a class="error-button" href="<?php echo get_home_url(); ?>"><?php echo esc_attr(get_field('error-button', 'option')); ?></a>
	</section>

</main>
