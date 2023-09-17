<?php
/*
Template Name: home
*/
get_header();
?>

  <div class="container ">
    <section class="house">
      <h1 class="house__title">Дім Добра: рука допомоги для тих, хто потребує - від людей до тварин</h1> 
      <button class="button" type="button" aria-label="support the fund"   aria-expanded="false"
      aria-controls="modal-window">ПІДТРИМАТИ ФОНД</button>
    </section>

    <section class="support">
      <h2 class="support__title">Кожен місяць завдяки нашій організації:</h2>    
      <ul class="support__list">
        <li>
          <p class="support__count">50</p>
          <p class="support__text">сімей отримують разову допомогу</p>
        </li>
        <li>
          <p class="support__count">3000</p>
          <p class="support__text">людей отримують різного роду допомогу: харчі, одяг, гігієна, тощо.</p>
        </li>
        <li>
          <p class="support__count">100</p>
          <p class="support__text">котиків ЗСУ на різних напрямках отримують бокси з гігієною, їжею, солодощами, медициною, тощо.</p>
        </li>
        <li>
          <p class="support__count">50</p>
          <p class="support__text">тварин проживають у нашому притулку і постійно працюють з зоо-психологами та кінологами</p>
        </li>
        <li>
          <p class="support__count">200</p>
          <p class="support__text">тварин отримують корма від нашого фонду</p>
        </li>
        <li>
          <p class="support__count">100</p>
          <p class="support__text">врятованих тварин знаходять новий дім</p>
        </li>
      </ul>
    </section>

     <section class="about">
        <h3 class="about__title">Про “Дім Добра”</h3> 
        <p class="about__text">З початку повномаштабного вторгнення наша організація систематично допомогає та забезпечує усім необхідним людей та тварин, що постраждали під час війни, тимчасово або назавжди залишились без домівки. <br> <br> Наші волонтери регулярно безкоштовно годують переселенців в Кривому Розі, видають продукти харчування, хімію, гігієну, одяг, надають житло та прихисток.
        </p>  
      <div class="about__img-wrap">
        <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-home/01.jpg" alt="">  
      </div>
        <p class="about__text">Двічі на місяць ми виїжджаємо до Херсонської області та годуємо людей гарячими обідами, роздаємо хліб, продуктові набори, допомогаємо по побуту літнім людям. Крім того, ми не залишаємо без уваги тварин - евакуюємо собак з зони бойових дій та шукаємо для них нові домівки. <br> <br> Наш фонд щиро вірить у потужну силу добра та прагне змінювати життя до кращого для тих, хто опинився у складних життєвих обставинах.
        </p>    
    </section>
  </div>

<?php get_footer(); ?>