const swiper=new Swiper(".mySwiper",{slidesPerView:1,slidesPerView:"auto",spaceBetween:20,loop:!0,grabCursor:!0,autoHeight:!0,freeMode:!0,speed:800,keyboard:{enabled:!0},pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".custom-next-icon",prevEl:".custom-prev-icon"},breakpoints:{768:{pagination:{type:"fraction"}}}});jQuery.noConflict(),jQuery(document).ready((function(e){e(".tabs").lightTabs()})),function(e){jQuery.fn.lightTabs=function(n){return this.each((function(){tabs=this,i=0,showPage=function(i){e(tabs).children("div").children("div").hide(),e(tabs).children("div").children("div").eq(i).show(),e(tabs).children("ul").children("li").removeClass("active"),e(tabs).children("ul").children("li").eq(i).addClass("active")},showPage(0),e(tabs).children("ul").children("li").each((function(n,t){e(t).attr("data-page",i),i++})),e(tabs).children("ul").children("li").click((function(){showPage(parseInt(e(this).attr("data-page")))}))}))}}(jQuery),jQuery(document).ready((function(e){e(".scroll-to-bank-details").click((function(){var i=e(".bank-details").offset().top;e("html, body").animate({scrollTop:i},800)}))}));