const swiper = new Swiper(".mySwiper", {
	slidesPerView: 1,
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
