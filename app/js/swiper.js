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
  lazy: {
    loadOnTransitionStart: true,
  },
  mousewheelControl: true,
  speed: 600,
  mousewheel: true,
  pagination: {
    el: '.pagination',
    type: 'bullets',
    currentClass: 'active',
    mousewheelControl: true,
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
  lazy: {
    loadOnTransitionStart: true,
  },
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


const usefulNews = new Swiper('.useful__block-slider', {
  init: false,
  slidesPerView: 'auto',
  spaceBetween: 20,
});

const usefulSlider = new Swiper('.useful__slider', {
  slidesPerView: 'auto',
  loop: true,
  spaceBetween: 20,
  centeredSlides: true,
  initialSlide: 2,
  pagination: {
    el: '.pagination',
    type: 'bullets',
    currentClass: 'active',
    clickable: true,
  },
});

const careerTypesSlider = new Swiper('.career__types-slider', {
  spaceBetween: 20,
  pagination: {
    el: '.pagination',
    type: 'bullets',
    currentClass: 'active',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    767: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 4,
    },
  }
});

const careerWhySlider = new Swiper('.career__why-slider', {
  pagination: {
    el: '.pagination',
    type: 'bullets',
    currentClass: 'active',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    767: {
      slidesPerView: 2,
      spaceBetween: 43,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 43,
    }
  }
});

const careerInfoSlider = new Swiper('.career__info-slider', {
  spaceBetween: 20,
  pagination: {
    el: '.pagination',
    type: 'bullets',
    currentClass: 'active',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 'auto',
    },
    1280: {
      slidesPerView: 2,
    }
  }
});


const careerCorpSlider = new Swiper('.career__corp-slider', {
  slidesPerView: 1,
  spaceBetween: 20,
  preloadImages: false,
  lazy: {
    loadOnTransitionStart: true,
  },
  pagination: {
    el: '.pagination',
    type: 'bullets',
    currentClass: 'active',
  },
  on: {
    init: function () {
      let corpSliderTotal = this.slides.length;
      let corpSliderTotalSpan = $('.career__pagination-total');
      corpSliderTotal < 10 ? corpSliderTotalSpan.text(`0${corpSliderTotal}`) : corpSliderTotalSpan.text(corpSliderTotal);
    }
  }
});

careerCorpSlider.on('slideChange', function () {
  let mainSliderCurrent = ++careerCorpSlider.realIndex;
  let mainSliderCurrentSpan = $('.career__pagination-current');
  mainSliderCurrent < 10 ? mainSliderCurrentSpan.text(`0${mainSliderCurrent}`) : mainSliderCurrentSpan.text(mainSliderCurrent);
});

const vacancySlider = new Swiper('.vacancy__faq-slider', {
  spaceBetween: 20,
  pagination: {
    el: '.pagination',
    type: 'bullets',
    currentClass: 'active',
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    1280: {
      slidesPerView: 2,
    }
  }
});

$(document).ready(function () {
  let windowWidth = window.innerWidth;
  if (windowWidth < 1280) {
    for (let i = 0; i < gridSlider.length; i++)
      gridSlider[i].init();
  } else {
    usefulNews.init()
  }
});

$(window).resize(function () {
  let windowWidth = window.innerWidth;
  if (windowWidth < 1280) {
    usefulNews.destroy()
    for (let i = 0; i < gridSlider.length; i++)
      gridSlider[i].init();
  } else {
    usefulNews.init()
    for (let i = 0; i < gridSlider.length; i++)
      gridSlider[i].destroy();
  }
})