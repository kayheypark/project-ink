﻿function fnPageInit(){

<!-- Initialize Swiper -->
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

};

