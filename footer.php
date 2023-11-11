<footer class="footer-bg">
    <div class="footer container">
        <section class="main__information">
        <div class="logo">
                <?php
                if (has_custom_logo()) {
                    echo get_custom_logo();
                }
                ?>
        </div>
        <div class="working__hours">
            <p class="working__days"><?php the_field('working-days', 'options'); ?></p>
            <p class="day__off"><?php the_field('day-off', 'options'); ?></p>
        </div>
        </section>
        <section class="nav">
        <nav class="footer__nav" id="menu">
            <?php
            wp_nav_menu([
                'theme_locatoin'      => 'footer',
                'container'           => false,
                'menu_class'          => 'footer__menu',
                'menu_id'             => false,
                'echo'                => true,
                'items_wrap'          => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ]);
            ?>
        </nav>
        </section>
        <section class="footer__contacts">
        <div class="contacts__container">
            <div class="contacts__text"><?php the_field('contacts-title', 'options'); ?></div>
            <div class="footer__address contacts__flex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/geolocation.png" alt="address" class="footer__img">
                <a class="footer__text" href="<?php echo esc_attr(get_field('address-link', 'options') ); ?>" target="_blank"><?php the_field('address', 'options'); ?></a>
            </div>
            <div class="footer__email contacts__flex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carbon_email.png" alt="email" class="footer__img">
                <a class="footer__link" href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
            </div>
            <div class="footer__phone contacts__flex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carbon_phone.png" alt="phone" class="footer__img">
                <a class="phone__link__first" href="tel:<?php the_field('first-phone'); ?>"><?php the_field('first-phone', 'options'); ?> </a>&nbsp|&nbsp
                <a class="phone__link" href="tel:<?php the_field('second-phone', 'options'); ?>"><?php the_field('second-phone', 'options'); ?></a>
            </div>
        </div>
        <ul class="mob__social">
            <li class="social__item"><a class="mob-social__link" href="<?php echo esc_attr(get_field('viber', 'options')); ?>" target="_blank" aria-label="Viber"><svg class="icon-socials" width="40px" height="40px">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
                    </svg></a></li>
            <li class="social__item"><a class="mob-social__link" href="<?php echo esc_attr(get_field('telegram', 'options')); ?>" target="_blank" aria-label="Telegram"><svg class="icon-socials" width="40px" height="40px">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#telegram"></use>
                    </svg></a></li>
            <li class="social__item"><a class="mob-social__link" href="<?php echo esc_attr(get_field('whatsapp', 'options')); ?>" target="_blank" aria-label="Whatsapp"><svg class="icon-socials" width="40px" height="40px">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#whatsapp"></use>
                    </svg></a></li>
        </ul>
        <ul class="tablet__social">
            <li class="social__item"><a class="tablet-social__link" href="<?php echo esc_attr(get_field('viber', 'options')); ?>" target="_blank"  aria-label="Viber"><svg class="icon-socials" width="32px" height="32px">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#viber"></use>
                    </svg></a></li>
            <li class="social__item"><a class="tablet-social__link" href="<?php echo esc_attr(get_field('telegram', 'options')); ?>" target="_blank"  aria-label="Telegram"><svg class="icon-socials" width="32px" height="32px">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#telegram"></use>
                    </svg></a></li>
            <li class="social__item"><a class="tablet-social__link" href="<?php echo esc_attr(get_field('whatsapp', 'options')); ?>" target="_blank"  aria-label="Whatsapp"><svg class="icon-socials" width="32px" height="32px">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite-logo.svg#whatsapp"></use>
                    </svg></a></li>
        </ul>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>