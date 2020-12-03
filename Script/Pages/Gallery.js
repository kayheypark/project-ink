function fnPageInit() {
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    centeredSlides: false,
    spaceBetween: 30,
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: true,
    },
  });
}
