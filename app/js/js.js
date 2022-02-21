$(document).ready(function () {
  $('.tel').mask('(Z00) 000-00-00', {translation: {'Z': {pattern: /[0-79]/}}});
  //$('.date').mask('00/00/0000', {translation: {'Z': {pattern: /[0-79]/}}});
  //$('.time').mask('00:00', {translation: {'Z': {pattern: /[0-79]/}}});

  let d = new Date();

  let month = d.getMonth();
  let day = d.getDate();
  let year = d.getFullYear();


  const picker = datepicker('#entry-date', {
    showOn: "focus",
    showAllDates: true,
    hideIfNoPrevNext: true,
    minDate: new Date(year, month, day),
    maxDate: new Date(year, month, day+30),
    customDays: ['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'],
    customMonths: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    formatter: (input, date, instance) => {
      const options = {year: 'numeric', month: 'numeric', day: 'numeric'};
      const value = date.toLocaleDateString('ru-RU', options);
      input.value = value
    },
    onSelect: (instance, date) => {
      $('#entry-date').parents('.form-row-date').addClass('checked').removeClass('alert');
      let form = $(this).parents('form');
      checkForm(form);
      const options1 = { month: 'long', day: 'numeric'};
      let value1 = date.toLocaleDateString('ru-RU', options1);
      $('.entry-send-date').text(value1);
      //const options2 = {weekday: 'long'};
      //let dayOfWeek = new Intl.DateTimeFormat('ru-RU', options2).format(date);
      //let value2 = dayOfWeek[0].toUpperCase() + dayOfWeek.slice(1);
    },
  });



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
  })

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
    $('#entry-time').val( $(this).val());
    $('.form-row-time__list').removeClass('open');
    let row = $(this).parents('.form-row-time');
    row.addClass('checked').removeClass('alert');
    let form = $(this).parents('form');
    checkForm(form)
  });

  function checkForm (form) {
    form.find('.should-be-checked').length == form.find('.should-be-checked.checked').length ?
      form.find('button[type="submit"]').removeClass('disabled') :
      form.find('button[type="submit"]').addClass('disabled')
  }

  $('.entry__form').on('submit', function (e) {
    let btn = $(this).find('.entry__submit');
    if (btn.hasClass('disabled')) {
      e.preventDefault();
      $(this).find('.should-be-checked').each( function(){
        $(this).hasClass('checked') ? true : $(this).addClass('alert')
      })
    } else  {
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
});
