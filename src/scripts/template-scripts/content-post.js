const postSwiper = new Swiper(".single-post__slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    slideToClickedSlide: true,
  },
});

lightbox.option({
  disableScrolling: true,
  wrapAround: true,
  positionFromTop: 60,
});
