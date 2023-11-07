const postSwiper = new Swiper(".single-post__slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    slideToClickedSlide: true,
  },
  spaceBetween: 20,
  touchAngle: 30,
  preloadImages: false,
  lazy: {
    loadOnTransitionStart: true,
    loadPrevNext: true,
  },
  lazyPreloadPrevNext: 2,
});

lightbox.option({
  disableScrolling: true,
  wrapAround: true,
  positionFromTop: 60,
});
