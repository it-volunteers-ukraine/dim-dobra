<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <?php wp_head(); ?>
    <title>Dim Dobra</title>
</head>
<body>  
    <header class="header">
        <div class="container">
            <div class="header__content _container">
                 <div class="menu__nav">  
                        <?php 
                            if ( has_custom_logo() ) {
                                echo get_custom_logo();
                            }
                        ?>
                        <button class="menu-open__btn" id="js-open-menu" type="button">
                            <svg class="menu-icon" width="24px" height="24px">
                                <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#menu"></use>
                            </svg>
                        </button>
                        <div class="menu__container" id="js-menu">
                            <div class="menu__wrapper">
                                <button class="menu-close__btn" id="js-close-menu" type="button">
                                    <svg class="menu-icon" width="40px" height="40px">
                                        <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#close"></use>
                                    </svg>
                                </button>             
                                <nav class="menu__body"> 
                                    <?php wp_nav_menu( [
                                        'theme_location'       => 'header',                          
                                        'container'            => false,                           
                                        'menu_class'           => 'menu__list',
                                        'menu_id'              => false,    
                                        'echo'                 => true,                            
                                        'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',  
                                        ] ); 
                                    ?>   
                                </nav> 
                                <div class="buttons__wrap">
                                    <ul class="lang__list list">
                                        <li class="lang__item">
                                            <button type="button" class="lang__btn active">UA</button>
                                        </li>
                                        <li class="lang__item">
                                            <button type="button" class="lang__btn ">EN</button>
                                        </li>
                                    </ul>
                                    <ul class="mob-menu__social">
                                        <li class="social__item"><a class="mob-social__link" href="<?php echo esc_attr(get_field('viber', 2) ); ?>"><svg class="icon-socials"
                                            width="40px" height="40px">
                                                <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#viber"></use>
                                            </svg></a></li>
                                        <li class="social__item"><a class="mob-social__link" href="<?php echo esc_attr(get_field('telegram', 2) ); ?>"><svg class="icon-socials"
                                            width="40px" height="40px">
                                                <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#telegram"></use>
                                            </svg></a></li>
                                        <li class="social__item"><a class="mob-social__link" href="<?php echo esc_attr(get_field('whatsapp', 2) ); ?>"><svg class="icon-socials"
                                            width="40px" height="40px">
                                                <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite-logo.svg#whatsapp"></use>
                                            </svg></a></li>
                                    </ul>
                                </div>
                                <a class="menu__btn" href="<?php echo get_permalink('12'); ?>"><?php the_field('need-help_button', 2) ?></a>
                            </div>
                        </div> 
                </div>  
            </div>                    
        </div>
    </header>