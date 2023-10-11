<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
		<p class="error-text">сталася помилка....</p>
		<p class="error-oops">oops</p>
		<a class="error-button" href="<?php echo get_home_url(); ?>">Повернутися на головну</a>
	</section><!-- .error-404 -->

</main><!-- #main -->
