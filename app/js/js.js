$(document).ready(function () {

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
  } else {

  }
  $('#get-city-data').attr("src", `cities/${isCity}.js`);


  /* End Common */

  /* Entry page */

  $('.entry__item').on('click', function () {
    $('.entry__search-input').val('');
    let field = $(this).find('.entry__item-address');
    let address = field.text();
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
    if (btn.hasClass('disabled')) {
      e.preventDefault();
      $(this).find('.should-be-checked').each(function () {
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else {
      e.preventDefault();
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

});

function checkForm(form) {
  form.find('.should-be-checked').length == form.find('.should-be-checked.checked').length ?
    form.find('button[type="submit"]').removeClass('disabled') :
    form.find('button[type="submit"]').addClass('disabled')
}