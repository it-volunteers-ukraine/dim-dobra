<?php
/*
Template Name: About
*/
get_header();
?>

<div class="container">
    <div class="return">
        <a href=" http://wp.vp/home" class="return__text">< повернутись назад</a>
    </div>

    <section class="about">
        <h1 class="about__title">Про “Дім Добра”</h1>
        <p class="about__description description__main">Благодійний фонд "Дім Добра" заснований 21 листопада 2021 року у місті Кривий Ріг, Україна. 
            З моменту нашого заснування, ми надаємо допомогу та підтримку тим, хто став жертвами війни, тимчасово або 
            назавжди втратив домівку, постраждав внаслідок підриву Каховської ГЕС. </p>
        <div class="command__img"></div>
        <!-- <img class="about__img" src="<?php echo get_template_directory_uri();?> ../src/images/about_mobile.png" alt="about"> -->
        <p class="about__description description__command">Наша команда волонтерів регулярно віддає свої зусилля, щоб допомогти тим,хто потребує допомоги найбільше.
            Двічі на місяць ми організовуємо безкоштовне харчування для переселенців у нашому місті,надаючи продукти харчування, засоби гігієни та одяг. </p>
        <p class="about__description description__other">Не обмежуючись лише нашим містом, наші волонтери також виїжджають двічі на місяць до Херсонської області, де годують 
            людей гарячими обідами, роздають хліб та продуктові набори. Ми не залишаємо поза увагою літніх людей і стараємося забезпечити їм підтримку та допомогу 
            у побутових потребах. </p>
        <div class="about__contact">
            <div class="email">
                <img src="<?php echo get_template_directory_uri();?> ../src/images/carbon_email.png" alt="email" class="email__img">
                <a class="email__link" href="mailto:dimdobra.kr@gmail.com">dimdobra.kr@gmail.com</a>
            </div>
            <div class="phone">
                <img src="<?php echo get_template_directory_uri();?> ../src/images/carbon_phone.png" alt="email" class="phone__img">
                <a class="phone__link__first" href="tel:+380960292222">+380960292222 </a>&nbsp|&nbsp <a class="phone__link" href="tel:+380680292222"> +380680292222</a> 
            </div>
        </div>
        <div class="work__img"></div>
        <p class="about__description description__animals ">Поза тим, наш фонд активно займається порятунком та захистом тварин. Ми евакуюємо чотирилапих із зони бойових дій, дбаючи про
            їх безпеку та добробут. Коли ми рятуємо тваринок, ми стежимо за тим, щоб знайти їм нові люблячі родини, де вони зможуть отримати дім та безмежну любов. </p>
        <p class="about__description description__morehelp">Завдяки вашій щедрості ми зможемо допомогти ще більше тим, хто страждає та потребує нашої допомоги. Разом ми змінюємо життя на краще та 
            даруємо надію тим, хто майже її втратив.</p>
        <button class="support__btn button">ПІДТРИМАТИ ФОНД</button>
    </section>
    <!-- documents -->
    <?php get_template_part('template-parts/founding-documents'); ?>
    <!-- help-->
    <?php get_template_part('template-parts/need-help-animals'); ?>
   </div>
    <?php get_footer(); ?>