<?php
/*
Template Name: home
*/
get_header();
?>

  <div class="container ">
    <section class="house">
      <h1 class="house__title">Дім Добра: рука допомоги для тих, хто потребує - від людей до тварин</h1> 
      <button class="button" type="button" aria-label="support"   aria-expanded="false"
      aria-controls="modal-window">ПІДТРИМАТИ</button>
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
  
      <div class="swiper-container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" style="margin-bottom: 32px">
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/01-2-1024x790.jpg' alt=''/></div>
            <div class="swiper-slide">  <img src='http://dim-dobra/wp-content/uploads/2023/09/02-2-1024x790.jpg' alt=''/></div>
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/03-2-1024x790.jpg' alt=''/></div>
            <div class="swiper-slide">  <img src='http://dim-dobra/wp-content/uploads/2023/09/04-1-1024x790.jpg' alt=''/></div>
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/05-2-1024x790.jpg' alt=''/></div>
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/06-2-1024x790.jpg' alt=''/></div>
          </div>
            <div class="swiper-pagination" style="position: inherit"></div>
        </div>       
      </div>

        <p class="about__text">Двічі на місяць ми виїжджаємо до Херсонської області та годуємо людей гарячими обідами, роздаємо хліб, продуктові набори, допомогаємо по побуту літнім людям. Крім того, ми не залишаємо без уваги тварин - евакуюємо собак з зони бойових дій та шукаємо для них нові домівки. <br> <br> Наш фонд щиро вірить у потужну силу добра та прагне змінювати життя до кращого для тих, хто опинився у складних життєвих обставинах.
        </p>    
    </section>

    <?php get_template_part( 'template-parts/founding-documents'); ?>

    <section class="news">
      <h3 class="news__title">Новини та події</h3> 
  
      <div class="swiper-container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/img-news-1-1024x1015.jpg' alt=''/>
            <div class="news__wraper">
              <p class="news__text">м. Херсон</p>
              <p class="news__text">23.07.2023</p>
            </div>
              <h4 class="news__subTitle">Допомога Херсонцям. Видача гуманітарної допомоги</h4>
          </div>
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/img-news-2-1024x1015.jpg' alt=''/>
            <div class="news__wraper">
              <p class="news__text">Гарячі напрямки</p>
              <p class="news__text">20.07.2023</p>
            </div>
              <h4 class="news__subTitle">Допомога ЗСУ. Закупівля продуктів для ії потреб</h4>
          </div>
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/img-news-3-1024x1015.jpg' alt=''/>
            <div class="news__wraper">
              <p class="news__text">м. Кривий Ріг</p>
              <p class="news__text">15.07.2023</p>
            </div>
              <h4 class="news__subTitle">Зібрали гуманітарну допомогу для пунктів незламності</h4>
          </div>
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/img-news-4-1024x1015.jpg' alt=''/>
            <div class="news__wraper">
              <p class="news__text">м. Кривий Ріг</p>
              <p class="news__text">21.07.2023</p>
            </div>
              <h4 class="news__subTitle">Врятований лабрадор. Лікування у клініці.</h4>
          </div>
            <div class="swiper-slide"> <img src='http://dim-dobra/wp-content/uploads/2023/09/img-news-5-1024x1015.jpg' alt=''/>
            <div class="news__wraper">
              <p class="news__text">В дорозі</p>
              <p class="news__text">05.07.2023</p>
            </div>
              <h4 class="news__subTitle">Екскурсія для дітей</h4>
          </div>         
          
          </div>
            <div class="swiper-pagination" style="position: inherit"></div>
        </div>       
      </div>
    </section>

    <section class="bank-details">
      <h3 class="bank-details__title">Наші реквізити</h3>
      
      <div class="tabs">
        <ul>
          <li>UAH</li>
          <li>USD</li>
          <li>EUR</li>
        </ul>
        <div>
          <div class="tabs__wraper"> 
            <p class="bank-details__text-first" style="margin-top: -20px">Отримувач:</p>     
            <p class="bank-details__text-second">ЗУБЕНКО ОЛЕНА ВОЛОДИМИРІВНА</p>     
            <p class="bank-details__text-first">ЄДРПОУ:</p>     
            <p class="bank-details__text-second">3192013863</p>     
            <p class="bank-details__text-first">Банк:</p>     
            <p class="bank-details__text-second">АТ КБ «ПРИВАТБАНК»</p>     
            <p class="bank-details__text-first">IBAN:</p>     
            <p class="bank-details__text-second">UA683052990000026207742096747</p>   
              <div class="tabs__wraper-img"> 
                <img src='http://dim-dobra/wp-content/uploads/2023/09/qr-code.jpg' alt=''/>
              </div> 
            <button class="button" type="button" aria-label="support the fund"   aria-expanded="false"
            aria-controls="modal-window">ПІДТРИМАТИ ФОНД</button>
          </div>
          <div class="tabs__wraper">
            <p class="bank-details__text-first" style="margin-top: -20px">Отримувач:</p>     
            <p class="bank-details__text-second">ZUBENKO OLENA VOLODYMYRIVNA</p>     
            <p class="bank-details__text-first">ЄДРПОУ:</p>     
            <p class="bank-details__text-second">3192013863</p>     
            <p class="bank-details__text-first">Банк:</p>     
            <p class="bank-details__text-second">АТ КБ «ПРИВАТБАНК»</p>     
            <p class="bank-details__text-first">IBAN:</p>     
            <p class="bank-details__text-second">UA683052990000026207742096747</p>  
              <div class="tabs__wraper-img"> 
                <img src='http://dim-dobra/wp-content/uploads/2023/09/qr-code.jpg' alt=''/>
              </div>          
            <button class="button" type="button" aria-label="support the fund"   aria-expanded="false"
            aria-controls="modal-window">ПІДТРИМАТИ ФОНД</button>
          </div>
          <div class="tabs__wraper"> 
            <p class="bank-details__text-first" style="margin-top: -20px">Отримувач:</p>     
            <p class="bank-details__text-second">ZUBENKO ELENA WOLODYMYRIWNA</p>     
            <p class="bank-details__text-first">ЄДРПОУ:</p>     
            <p class="bank-details__text-second">3192013863</p>     
            <p class="bank-details__text-first">Банк:</p>     
            <p class="bank-details__text-second">АТ КБ «ПРИВАТБАНК»</p>     
            <p class="bank-details__text-first">IBAN:</p>     
            <p class="bank-details__text-second">UA683052990000026207742096747</p>   
              <div class="tabs__wraper-img"> 
                <img src='http://dim-dobra/wp-content/uploads/2023/09/qr-code.jpg' alt=''/>
              </div>        
            <button class="button" type="button" aria-label="support the fund"   aria-expanded="false"
            aria-controls="modal-window">ПІДТРИМАТИ ФОНД</button>
          </div>
        </div>            
      </div>
    </section>

    <?php get_template_part( 'template-parts/need-help'); ?>

  </div>

<?php get_footer(); ?>