$(document).ready(function () {
  /* Preloader */

  let preloader = $('.preloader'),
    imagesCount = $('img').length,
    percent = 100 / imagesCount,
    progress = 0,
    loadedImg = 0;

  if (imagesCount > 0) {
    $('html, body').css('overflow', 'hidden');
    for (let i = 0; i < imagesCount; i++) {
      let img_copy = new Image();
      img_copy.src = document.images[i].src;
      img_copy.onload = img_load;
      img_copy.onerror = img_load;
    }

    function img_load() {
      progress += percent;
      loadedImg++;
      let progressRounded = Math.round(progress);
      $('.preloader__percent').text(`${progressRounded}%`);
      $('.preloader__filled').css('width', `${progressRounded}%`);
      if (progress >= 100 || loadedImg == imagesCount) {
        preloader.hide()
        $('html, body').css('overflow', '');
      }
    }
  } else {
    preloader.hide()
  }


  /* End Preloader */

  /* Common */
  $('.tel').mask('(Z00) 000-00-00', {translation: {'Z': {pattern: /[0-79]/}}});
  let carNumberOptions = {
    translation: {
      'Z': {pattern: /[0-79]/},
      'S': {pattern: /[А-Яа-я]/}
    },
    onKeyPress: function (cep, e, field, options) {
      field.val(field.val().toUpperCase());
    }
  };
  $('.car-number').mask('S 000 SS 000', carNumberOptions);

  $('.email').mask("A", {
    translation: {
      "A": {pattern: /[\w@\-.+A-Za-z]/, recursive: true}
    }
  });


  $('.header__is-city').on('click', '.yes', function () {
    let city = $('.header__is-city .is-current').attr('data-city');
    document.cookie = `city=${city}`;
    $('.header__is-city').removeClass('open')
  });


  $('.header__is-city').on('click', '.no', function () {
    $('.header__is-city').removeClass('open');
    $('.header__city-list').addClass('open');
  });

  $('.header__city-list').on('click', 'li', function () {
    let newCity = $(this).text();
    let newCityEn = $(this).attr('data-city');
    document.cookie = `city=${newCityEn}`;
    $('.watch-city').text(newCity);
    $('.header__city-list').removeClass('open');
    location.reload();
  });

  $('.city__current').click(function () {
    $('.header__city-list').toggleClass('open');
  });

  let isCity = (document.cookie.match(/^(?:.*;)?\s*city\s*=\s*([^;]+)(?:.*)?$/) || [, null])[1];
  if (isCity == null) {
    isCity = 'kazan';
    $('.header__is-city').addClass('open')
  }

  let isCookie = (document.cookie.match(/^(?:.*;)?\s*cookies\s*=\s*([^;]+)(?:.*)?$/) || [, null])[1];
  if (isCookie == null) {
    $('.cookie-block').addClass('open')
  }

  $('.accept-cookies').click(function () {
    document.cookie = `cookies=true`;
    $('.cookie-block').removeClass('open');
  });


  $('#get-city-data').attr("src", `cities/${isCity}.js`);

  $('.burger').on('click', function () {
    $('.menu').addClass('active');
    $('.header').addClass('header_menued');
    $('html, body').css('overflow', 'hidden');
  });

  $('.close').on('click', function () {
    $('.menu').removeClass('active');
    $('.header').removeClass('header_menued');
    $('html, body').css('overflow', '');
  });

  $('.member-card').on('click', function () {
    $(this).toggleClass('active');
    if (window.innerWidth < 768) {
      $(this).find('.member-card__links').slideToggle()
    }
  });


  class DataList {
    constructor(containerId, inputId, listId, options) {
      this.containerId = containerId;
      this.inputId = inputId;
      this.listId = listId;
      this.options = options;
    }

    create(filter = "") {
      const list = document.getElementById(this.listId);
      const filterOptions = this.options.filter(
        d => filter === "" || d.text.toUpperCase().includes(filter.toUpperCase())
      );

      if (filterOptions.length === 0) {
        list.classList.remove("active");
      } else {
        list.classList.add("active");
      }

      list.innerHTML = filterOptions
        .map(o => `<li id=${o.value} data-text="${o.text}">${o.text}<span>${o.type}</span></li>`)
        .join("");
    }

    addListeners(datalist) {
      const container = document.getElementById(this.containerId);
      const input = document.getElementById(this.inputId);
      const list = document.getElementById(this.listId);
      container.addEventListener("click", e => {
        if (e.target.id === this.inputId) {
          container.classList.toggle("active");
        } else if (e.target.id === "datalist-icon") {
          container.classList.toggle("active");
          input.focus();
        }
      });

      input.addEventListener("input", function (e) {
        if (!container.classList.contains("active")) {
          container.classList.add("active");
        }

        datalist.create(input.value);
      });

      list.addEventListener("click", function (e) {
        if (e.target.nodeName.toLocaleLowerCase() === "li") {
          input.value = e.target.getAttribute('data-text');
          container.classList.remove("active");
        }
      });
    }
  }

  $('.modal-search__close').on('click', function () {
    $(this).siblings('input').val('')
  });

  const datalist = new DataList(
    "form-modal-search",
    "search-datalist-input",
    "datalist-ul",
    dataSearch
  );
  datalist.create();
  datalist.addListeners(datalist);

  $('.header__search').on('click', function () {
    $('.menu').removeClass('active');
    $('.header').removeClass('header_menued')
    $('.overlay').addClass('active');
    $('.modal-search').addClass('active');
  });

  $('.popup-close').on('click', function () {
    $('.popup').removeClass('active');
  });

  /* End Common */

  /* Entry page */

  $('.entry__search-input').on('change input keyup', function () {
    let text = $(this).val().toUpperCase();
    $('.entry__item').each(function (i, v) {
      let address = $(this).attr('data-address').toUpperCase();
      address.includes(text) ? $(this).show() : $(this).hide()
    });
  });

  $('.entry__item').on('click', function () {
    $('.entry__search-input').val('');
    let address = $(this).attr('data-address');
    $('.entry__search-input').val(address).focus();
    $('.entry__search').submit()
  });

  $('.entry-step .close').on('click', function () {
    $(this).parents('.entry-step').addClass('hide');
  });

  $('.entry__page-back').on('click', function () {
    let page = $(this).parents('.entry__page');
    page.addClass('hide');
    page.prev().removeClass('hide');
  });

  $('select').each(function () {
    let select = $(this);
    select.wrap('<div class="select"></div>');
    numberOfOptions = select.children('option').length;
    select.after('<div class="select__selected pointer"></div>');
    let $styledSelect = select.next('div.select__selected');
    $styledSelect.text(select.children('option').eq(0).text());
    var $list = $('<ul />', {
      'class': 'options'
    }).insertAfter($styledSelect);
    for (var i = 0; i < numberOfOptions; i++) {
      $('<li />', {
        text: select.children('option').eq(i).text(),
        rel: select.children('option').eq(i).val()
      }).appendTo($list);
    }
    var $listItems = $list.children('li');
    $styledSelect.click(function (e) {
      e.stopPropagation();
      $('div.select__selected.active').each(function () {
        $(this).removeClass('active').next('ul.options').hide();
      });
      $(this).toggleClass('active').next('ul.options').toggle();
    });
    $listItems.click(function (e) {
      e.stopPropagation();
      $styledSelect.text($(this).text()).removeClass('active');
      select.val($(this).attr('rel'));
      $list.hide();
    });
    $(document).click(function () {
      $styledSelect.removeClass('active');
      $list.hide();
    });
  });

  $('#entry-storage').on('change', function () {
    let table = $('.wheel-table');
    $(this).prop('checked') ? table.show() : table.hide()
  });

  $('.table-input').on('change', function () {
    let innerRow = $(this).parents('tr');
    $(this).prop('checked') ? innerRow.addClass('active') : innerRow.removeClass('active');
  });

  $('.form-name').on('change input keyup', function () {
    let row = $(this).parents('.form-row-name');
    $(this).val().length > 1 ? row.addClass('checked').removeClass('alert') : row.addClass('alert').removeClass('checked')
    let form = $(this).parents('form');
    checkForm(form)
  });

  $('.tel').on('change input keyup', function () {
    let row = $(this).parents('.form-row-phone');
    $(this).val().length == 15 ? row.addClass('checked').removeClass('alert') : row.addClass('alert').removeClass('checked')
    let form = $(this).parents('form');
    checkForm(form)
  });


  // $('.date').on('change input keyup', function () {
  //   let row = $(this).parents('.form-row-date');
  //   $(this).val().length == 10 ? row.addClass('checked').removeClass('alert') : row.addClass('alert').removeClass('checked')
  //   let form = $(this).parents('form');
  //   checkForm(form)
  // });

  // $('.time').on('change input keyup', function () {
  //   let row = $(this).parents('.form-row-time');
  //   $(this).val().length > 3 ? row.addClass('checked').removeClass('alert') : row.addClass('alert').removeClass('checked')
  //   let form = $(this).parents('form');
  //   checkForm(form)
  // });

  $('#entry-time').on('click', function () {
    $(this).siblings('.form-row-time__list').toggleClass('open')
  });

  $('.form-row-time__list').on('change', 'input', function () {
    $('#entry-time').val($(this).val());
    $('.form-row-time__list').removeClass('open');
    let row = $(this).parents('.form-row-time');
    row.addClass('checked').removeClass('alert');
    let form = $(this).parents('form');
    checkForm(form)
  });

  $('.entry__form').on('submit', function (e) {
    let btn = $(this).find('.entry__submit');
    e.preventDefault();
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      $(this).addClass('hide');
      $(this).next().removeClass('hide');
      // Show choosen data
      let address = $('.entry-address-data').val();
      let time = $('#entry-time').val();
      $('.entry-send-address').text(address);
      $('.entry-send-time').text(time)
    }
  });


  $('.entry__thx-red').on('click', function () {
    let page = $(this).parents('.entry__page');
    page.addClass('hide');
    let form = page.prev();
    form[0].reset();
    form.find('.entry__submit').prop('disabled', 'disabled');
    $('.entry__info').removeClass('hide')
  });


  /* End Entry page */

  /* Account page */

  $('.add-car-form').on('submit', function (e) {
    let btn = $(this).find('button[type="submit"]');
    if (btn.hasClass('disabled')) {
      e.preventDefault();
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    }
  });

  $('.form-car-model').on('change input keyup', function () {
    let row = $(this).parents('.modal__form-row');
    $(this).val().length > 1 ? row.addClass('checked').removeClass('alert') : row.addClass('alert').removeClass('checked')
    let form = $(this).parents('form');
    checkForm(form)
  });

  $('.car-number').on('change input keyup', function () {
    let row = $(this).parents('.should-be-checked');
    $(this).val().length > 10 ? row.addClass('checked').removeClass('alert') : row.addClass('alert').removeClass('checked')
    let form = $(this).parents('form');
    checkForm(form)
  });

  $('.add-car').on('click', function () {
    $('.overlay').addClass('active');
    $('.modal-add-car').addClass('active')
  });

  $('.overlay__close').on('click', function () {
    closeModal()
  });

  $('.change-password').on('click', function () {
    $(this).toggleClass('hidden');
    $(this).siblings('.change-password').toggleClass('hidden');
    let input = $(this).siblings('.input')
    input.attr('type') == 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
  });

  $('.modal-car-added__button').on('click', function () {
    closeModal()
  });

  function closeModal() {
    $('.overlay').removeClass('active');
    $('.modal').removeClass('active')
  }


  $('.modal__form').on('submit', function (e) {
    let btn = $(this).find('.modal__form-button');
    e.preventDefault();
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      $('.modal-add-car').removeClass('active');
      $('.modal-car-added').addClass('active');
    }
  });

  /* End Account page */

  /* Entrance page */

  /* Account page */

  $('.entrance__form').on('submit', function (e) {
    let btn = $(this).find('button[type="submit"]');
    e.preventDefault();
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').hasClass('checked') ? true : $(this).find('.should-be-checked').addClass('alert')
    } else {
      $(this).find('.entrance__button-row').hide()
      $(this).siblings('.entrance__code').show()
    }
  });

  $('.entrance__code').on('submit', function (e) {
    e.preventDefault();
    window.location.href = 'entrance-person-thx.php';
  });

  /* End Entrance page */

  $('.add-car-form').on('submit', function (e) {
    let btn = $(this).find('button[type="submit"]');
    if (btn.hasClass('disabled')) {
      e.preventDefault();
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    }
  });


  /* Card Page*/


  $('.card__faq-item').click(function () {
    $(this).toggleClass('open').find('.card__faq-answer').slideToggle();
  })

  $('.card-question__form').on('submit', function (e) {
    e.preventDefault();
    let btn = $(this).find('.card-question__submit');
    let accept = $(this).find('.check-accept')
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else if (!accept.is(':checked')) {
      accept.siblings('label').css('color', '#E30514');
    } else {
      window.location.href = 'card-question-send.php'
    }
  });

  /* End Card Page*/

  /* Actions page */
  $('.toggle-filter').on('click', function () {
    $(this).siblings('.actions__side-body').slideToggle()
  });

  $('.actions__side').on('click', '.reset', function () {
    $('.actions__side').find('input').prop('checked', false)
  });

  /* End Actions page */


  /* Faq page  */

  $('.news__search-input').on('change input keyup', function () {
    let text = $(this).val().toUpperCase();
    $('.news__item').each(function (i, v) {
      let address = $(this).attr('data-faq').toUpperCase();
      address.includes(text) ? $(this).show() : $(this).hide()
    });
  });

  $('.faq-ask__form').on('submit', function (e) {
    let btn = $(this).find('button[type="submit"]');
    e.preventDefault();
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      window.location.href = 'faq-thx.php';
    }
  });

  /* End Faq page  */

  /* Useful page */

  $('.useful__callback-form').on('submit', function (e) {
    e.preventDefault();
    window.location.href = 'useful-thx.php';
  });

  /* End Useful page */

  /* Text page */

  $('.text-page__side').on('click', '.nav', function () {
    $(this).toggleClass('open');
    $(this).siblings('.sub').slideToggle()
  });

  $('.text-page__open').on('click', function () {
    $(this).toggleClass('open');
    $(this).siblings('.text-page__list').toggleClass('open');
  });

  /* End Text page */

  /* Resume part */

  let joinForm = $('.career__join-form');
  let resumeBox = $('.resume__box');
  var droppedFiles = false;

  resumeBox.on('drag dragstart dragend dragover dragenter dragleave drop', function (e) {
    e.preventDefault();
    e.stopPropagation();
  })
    .on('dragover dragenter', function () {
      resumeBox.addClass('is-dragover');
    })
    .on('dragleave dragend drop', function () {
      resumeBox.removeClass('is-dragover');
    })
    .on('drop', function (e) {
      droppedFiles = e.originalEvent.dataTransfer.files;
      $('.resume__label').text(`Добавлено: ${droppedFiles[0].name}`);
      resumeBox.addClass('dropped');
    });

  $('.file').on('change', function (e) {
    if ($(this).val() != '') {
      droppedFiles = $(this)[0].files;
      $('.resume__label').text(`Добавлено: ${droppedFiles[0].name}`);
      resumeBox.addClass('dropped');
    }
  });

  joinForm.on('submit', function (e) {
    let btn = $(this).find('.career__join-submit');
    if (btn.hasClass('disabled')) {
      e.preventDefault();
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      joinData = joinForm.serializeArray().map(v => [v.name, v.value]);
      console.log(joinData)
    }
  });

  /* End Resume part */

  /* Vacany page */

  let vacancyForm = $('.vacancy-form');

  $('.vacancies__side-showall').on('click', function () {
    $(this).siblings('.vacancies__side-list').find('.checkbox-row').show()
    $(this).hide()
  });
  $('.vacancies-reset').on('click', function () {
    $(this).parents('form')[0].reset()
  });

  $('.fill-blank-open').on('click', function () {
    vacancyForm.addClass('open')
  });

  $('.vacancy-form__close').on('click', function () {
    vacancyForm.removeClass('open')
  });

  vacancyForm.on('submit', function (e) {
    e.preventDefault();
    let btn = $(this).find('.career__join-submit');
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      joinData = vacancyForm.serializeArray().map(v => [v.name, v.value]);
      console.log(joinData);
      window.location.href = 'vacancy-thx.php';
    }
  });

  /* End Vacany page */

  /* Corp page */

  $('.corp-form__form').on('submit', function (e) {
    e.preventDefault();
    let btn = $(this).find('.button');
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      window.location.href = 'corp-form-2.php';
    }
  });

  $('.corp-form__form-last').on('submit', function (e) {
    e.preventDefault();
    let btn = $(this).find('.button-second');
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      window.location.href = 'corp-thx.php';
    }
  });
  /* End Corp page */

  /* Support Page */

  $('.corp-form__form-support').on('submit', function (e) {
    e.preventDefault();
    let btn = $(this).find('.button-support');
    if (btn.hasClass('disabled')) {
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      window.location.href = 'support-thx.php';
    }
  });

  /* End Support Page */
});

function checkForm(form) {
  form.find('.should-be-checked').length == form.find('.should-be-checked.checked').length ?
    form.find('button[type="submit"]').removeClass('disabled') :
    form.find('button[type="submit"]').addClass('disabled')
}

$('a[href^="#"]').on('click', function () {
  let href = $(this).attr('href');
  $('html, body').animate({
    scrollTop: $(href).offset().top - 20
  });
  return false;
});

