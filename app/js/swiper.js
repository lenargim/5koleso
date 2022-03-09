const cardSlider = new Swiper('.card__slider', {
  slidesPerView: 1,
  spaceBetween: 150,
  pagination: {
    el: '.swiper-pagination',
    type: 'custom',
    clickable: true,
    currentClass: 'active',
  },
  breakpoints: {
    320: {
      navigation: false,
    },
    1280: {
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
    }
  }
});

cardSlider.on('slideChange', function () {
  let pagItem = $('.card__slider-pagination .pag');
  pagItem.removeClass('active');
  pagItem.eq(cardSlider.activeIndex).addClass('active')
});

const mainSlider = new Swiper('.mainpage__slider', {
  slidesPerView: 1,
  draggable: true,
  preloadImages: false,
  lazy: true,
  pagination: {
    el: '.pagination',
    type: 'bullets',
    currentClass: 'active',
  },
  on: {
    init: function () {
      let mainSliderTotal = this.slides.length;
      let mainSliderTotalSpan = $('.mainpage__pagination-total');
      mainSliderTotal < 10 ? mainSliderTotalSpan.text(`0${mainSliderTotal}`) : mainSliderTotalSpan.text(mainSliderTotal);
      checkSlideBg(1)
    }
  }
});

mainSlider.on('slideChange', function () {
  let mainSliderCurrent = ++mainSlider.realIndex;
  let mainSliderCurrentSpan = $('.mainpage__pagination-current');
  mainSliderCurrent < 10 ? mainSliderCurrentSpan.text(`0${mainSliderCurrent}`) : mainSliderCurrentSpan.text(mainSliderCurrent);
  checkSlideBg(mainSliderCurrent)
});

function checkSlideBg(index) {
  $('.mainpage__slide').eq(--index).hasClass('white-bg') ?
    $('.mainpage__pagination').addClass('black') : $('.mainpage__pagination').removeClass('black')
}


const gridSlider = new Swiper('.mainpage__slide-grid', {
  init: false,
  spaceBetween: 200,
  center: true,
  loop: true,
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-120%", 0, -300],
    },
    next: {
      shadow: true,
      translate: ["120%", 0, -300],
    },
  },
});

$(document).ready(function () {
  let windowWidth = window.innerWidth;
  if (windowWidth < 1280) {
    for (let i = 0; i < gridSlider.length; i++)
      gridSlider[i].init();
  }
});

$(window).resize(function () {
  let windowWidth = window.innerWidth;
  if (windowWidth < 1280) {
    for (let i = 0; i < gridSlider.length; i++)
      gridSlider[i].init();
  } else {
    for (let i = 0; i < gridSlider.length; i++)
      gridSlider[i].destroy();
  }
})