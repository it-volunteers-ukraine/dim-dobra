const postSwiper = new Swiper(".single-post__slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    slideToClickedSlide: true,
  },
});

lightbox.option({
  alwaysShowNavOnTouchDevices: true,
  disableScrolling: true,
  wrapAround: true,
});
