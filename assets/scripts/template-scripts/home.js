const homeSlyder=new Swiper(".mySwiper",{slidesPerView:"auto",spaceBetween:20,loop:!0,grabCursor:!0,autoHeight:!0,speed:600,keyboard:{enabled:!0},pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{768:{navigation:{nextEl:".custom-next-icon",prevEl:".custom-prev-icon"},pagination:{el:".swiper_pagination",clickable:!0,type:"fraction"}}}}),myPostSwiper=new Swiper(".myPostSwiper",{pagination:{el:".swiper-pagination",clickable:!0,slideToClickedSlide:!0}});jQuery.noConflict(),jQuery(document).ready((function(e){e(".tabs").lightTabs()})),function(e){jQuery.fn.lightTabs=function(t){return this.each((function(){tabs=this,i=0,showPage=function(i){e(tabs).children("div").children("div").hide(),e(tabs).children("div").children("div").eq(i).show(),e(tabs).children("ul").children("li").removeClass("active"),e(tabs).children("ul").children("li").eq(i).addClass("active")},showPage(0),e(tabs).children("ul").children("li").each((function(t,n){e(n).attr("data-page",i),i++})),e(tabs).children("ul").children("li").click((function(){showPage(parseInt(e(this).attr("data-page")))}))}))}}(jQuery),document.querySelectorAll('a[href^="#"]').forEach((e=>{e.addEventListener("click",(function(e){e.preventDefault();const i=this.getAttribute("href").substring(1),t=document.getElementById(i);if(t){const e=t.offsetTop;setTimeout((()=>{window.scrollTo({top:e,behavior:"smooth"})}),300)}}))}));