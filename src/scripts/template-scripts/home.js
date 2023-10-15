const swiper = new Swiper(".mySwiper", {
	slidesPerView: 1,
	slidesPerView: "auto",
	spaceBetween: 20,
	loop: true,
	keyboard: {
		enabled: true,
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});

jQuery.noConflict();

jQuery(document).ready(function ($) {
	$(".tabs").lightTabs();
});

(function ($) {
	jQuery.fn.lightTabs = function (options) {
		var createTabs = function () {
			tabs = this;
			i = 0;
			showPage = function (i) {
				$(tabs).children("div").children("div").hide();
				$(tabs).children("div").children("div").eq(i).show();
				$(tabs).children("ul").children("li").removeClass("active");
				$(tabs).children("ul").children("li").eq(i).addClass("active");
			};
			showPage(0);
			$(tabs)
				.children("ul")
				.children("li")
				.each(function (index, element) {
					$(element).attr("data-page", i);
					i++;
				});
			$(tabs)
				.children("ul")
				.children("li")
				.click(function () {
					showPage(parseInt($(this).attr("data-page")));
				});
		};
		return this.each(createTabs);
	};
})(jQuery);

// Додаємо обробник кліку для кнопок із класом scroll-to-bank-details
jQuery(document).ready(function ($) {
	$(".scroll-to-bank-details").click(function () {
		var offsetTop = $(".bank-details").offset().top;

		// Анімовано прокручуємо до секції банківських даних
		$("html, body").animate(
			{
				scrollTop: offsetTop,
			},
			800,
		);
	});
});
