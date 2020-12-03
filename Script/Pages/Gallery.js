function fnPageInit() {
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    mousewheel: true,
    centeredSlides: false,
    spaceBetween: 30,
    keyboard: {
      enabled: true,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: true,
    },
  });
}
