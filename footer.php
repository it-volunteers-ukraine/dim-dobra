<footer class="footer">
    <section class="main__information">
        <div class="logo">
        <a href="#">
                <?php 
                    if ( has_custom_logo() ) {
                        echo get_custom_logo();
                    }
                ?>                
            </a>         
        </div>
        <div class="working-hours">
            <p class="working__days">Пн-Пт 10:00 - 15:00</p>
            <p class="day__off">Сб., Нед., - вихідні</p>
        </div>
    </section>
    <section class="nav">
        <nav class="footer__nav" id="menu">
            <?php 
            wp_nav_menu ( [
                'theme_locatoin'      => 'footer',
                'container'           => false,
                'menu_class'          => 'footer__menu',
                'menu_id'             => false,
                'echo'                => true,
                'items_wrap'          => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              ] );
             ?> 
			<!-- <ul class="footer__menu">
				<li><a href="home.html"><span>Головна</span></a></li>
				<li><a href="about.html"><span>Про нас</span></a></li>
				<li><a href="#"><span>Допомога людям</span></a></li>
                <li><a href="#"><span>Допомога тваринам</span></a></li>
				<li><a href="#"><span>Реквізити</span></a></li>
			</ul> -->
        </nav>
    </section>
    <section class="footer__contacts">
        <div class="contacts__container">
            <div class="contacts__text" >Контакти</div>
            <div class="footer__address contacts__flex">
                <img src="<?php echo get_template_directory_uri();?> /assets/images/geolocation.png" alt="address" class="footer__img">
                <p class="footer__text">Кривий Ріг, Україна</p>
            </div>
            <div class="footer__email contacts__flex">
                <img src="<?php echo get_template_directory_uri();?> /assets/images/carbon_email.png" alt="email" class="footer__img">
                <a class="footer__link" href="mailto:dimdobra.kr@gmail.com">dimdobra.kr@gmail.com</a>
            </div>
            <div class="footer__phone contacts__flex">
                <img src="<?php echo get_template_directory_uri();?> /assets/images/carbon_phone.png" alt="email" class="footer__img">
                <a class="phone__link__first" href="tel:+380960292222">+380960292222 </a>&nbsp|&nbsp <a class="phone__link" href="tel:+380680292222"> +380680292222</a> 
            </div>
        </div>
            <div class="mob__social">
                <li class="social__item"><a class="mob-social__link" href=""><svg class="icon-socials"
                         width="40px" height="40px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#viber"></use>
                 </svg></a></li>
                <li class="social__item"><a class="mob-social__link" href=""><svg class="icon-socials"
                                                width="40px" height="40px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#telegram"></use>
                </svg></a></li>
                <li class="social__item"><a class="mob-social__link" href=""><svg class="icon-socials"
                                                width="40px" height="40px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#whatsapp"></use>
                </svg></a></li>
            </div> 
            <div class="tablet__social">   
                <li class="social__item"><a class="tablet-social__link" href=""><svg class="icon-socials"
                         width="32px" height="32px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#viber"></use>
                 </svg></a></li>
                <li class="social__item"><a class="tablet-social__link" href=""><svg class="icon-socials"
                                                width="32px" height="32px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#telegram"></use>
                </svg></a></li>
                <li class="social__item"><a class="tablet-social__link" href=""><svg class="icon-socials"
                                                width="32px" height="32px">
                    <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#whatsapp"></use>
                </svg></a></li>
            </div>
        </section>
</footer>
<?php wp_footer(); ?>  

</body>
</html>
