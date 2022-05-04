<?php include('partials/head.php');
include('partials/header.php'); ?>
<script src="https://api-maps.yandex.ru/2.1/?apikey=2c7f86a3-03ca-400c-9256-7fb743d3aabc&lang=ru_RU"
        type="text/javascript"></script>
<main class="main entry">
  <div id="map" class="entry__map"></div>
  <div class="entry__info entry-step">
    <svg class="close entry__close pointer">
      <use xlink:href="img/sprite.svg#close"></use>
    </svg>
    <div class="entry__text">
      <div class="entry__title">
        <h3>Выберите адрес</h3>
        <div class="entry__steps">
          <span class="current">01</span>
          <span class="all">03</span>
          <div class="entry__hightlight">
            <i class="active"></i><i></i><i></i>
          </div>
        </div>
      </div>
      <form action="" class="entry__search" autocomplete="off">
        <input class="entry__search-input" type="text" placeholder="Поиск объекта" list="entry-addresses">
        <button type="submit" class="entry__search-submit pointer">
          <svg>
            <use xlink:href="img/sprite.svg#search"></use>
          </svg>
        </button>
      </form>
      <ul class="entry__list" id="entry-addresses">
        <li class="entry__item pointer" data-address="ул. Нариманова, 15Б">
          <div class="entry__item-text">
            <div class="entry__item-address">ул. Нариманова, 15Б</div>
            <div class="entry__item-time">Круглосуточно</div>
            <div class="entry__item-workload green"><span>Свободен</span></div>
          </div>
          <div class="entry__item-img img"><img src="img/entry-address-img.jpg" alt="ул. Нариманова, 15Б"></div>
        </li>
        <li class="entry__item pointer" data-address="ул. Чистопольская, 33В">
          <div class="entry__item-text">
            <div class="entry__item-address">ул. Чистопольская, 33В</div>
            <div class="entry__item-time">Круглосуточно</div>
            <div class="entry__item-workload orange"><span>Средняя загруженность</span></div>
          </div>
          <div class="entry__item-img img"><img src="img/entry-address-img.jpg" alt="ул. Нариманова, 15В"></div>
        </li>
        <li class="entry__item pointer" data-address="ул. Мусина, 61к1">
          <div class="entry__item-text">
            <div class="entry__item-address">ул. Мусина, 61к1</div>
            <div class="entry__item-time">Круглосуточно</div>
            <div class="entry__item-workload red"><span>Сильная загруженность</span></div>
          </div>
          <div class="entry__item-img img"><img src="img/entry-address-img.jpg" alt="ул. Нариманова, 15Г"></div>
        </li>
        <li class="entry__item pointer" data-address="ул. Гаврилова, 30">
          <div class="entry__item-text">
            <div class="entry__item-address">ул. Гаврилова, 30</div>
            <div class="entry__item-time">Круглосуточно</div>
            <div class="entry__item-workload red"><span>Объект перегружен</span></div>
          </div>
          <div class="entry__item-img img"><img src="img/entry-address-img.jpg" alt="ул. Нариманова, 15Д"></div>
        </li>
        <li class="entry__item pointer" data-address="ул. Габдуллы Тукая, 115, корп. 5">
          <div class="entry__item-text">
            <div class="entry__item-address">ул. Габдуллы Тукая, 115, корп. 5</div>
            <div class="entry__item-time">Круглосуточно</div>
            <div class="entry__item-workload red"><span>Объект перегружен</span></div>
          </div>
          <div class="entry__item-img img"><img src="img/entry-address-img.jpg" alt="ул. Нариманова, 15Е"></div>
        </li>
        <li class="entry__item pointer" data-address="ул. Аделя Кутуя, 86/7">
          <div class="entry__item-text">
            <div class="entry__item-address">ул. Аделя Кутуя, 86/7</div>
            <div class="entry__item-time">Круглосуточно</div>
            <div class="entry__item-workload red"><span>Объект перегружен</span></div>
          </div>
          <div class="entry__item-img img"><img src="img/entry-address-img.jpg" alt="ул. Аделя Кутуя, 86/7"></div>
        </li>
      </ul>
    </div>
  </div>
  <form action="" class="entry__form entry__page entry-step hide" autocomplete="off">
    <div class="entry__page-top">
      <div class="entry__page-back pointer">
        <svg>
          <use xlink:href="img/sprite.svg#arrow-left"></use>
        </svg>
        <span>Назад</span>
      </div>
      <div class="close entry__page-close close pointer">
        <svg>
          <use xlink:href="img/sprite.svg#close"></use>
        </svg>
      </div>
    </div>
    <h3>Заполните контактную информацию</h3>
    <input type="text" data-coords="" class="entry-address-data hidden" name="entry-address">
    <div class="form-row form-row-name should-be-checked">
      <svg class="svg-checked svg-state hidden">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <svg class="svg-alert svg-state hidden">
        <use xlink:href="img/sprite-form.svg#alert"></use>
      </svg>
      <label for="entry-name" class="form-label">
        <svg>
          <use xlink:href="img/sprite-form.svg#account"></use>
        </svg>
      </label>
      <input type="text" placeholder="Имя *" name="entry-name" id="entry-name" class="form-input form-name"
             autocomplete="off">
      <span class="form-hint"></span>
    </div>
    <div class="form-row form-row-phone should-be-checked">
      <svg class="svg-checked svg-state hidden">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <svg class="svg-alert svg-state hidden">
        <use xlink:href="img/sprite-form.svg#alert"></use>
      </svg>
      <span class="country">+7</span>
      <input type="tel" placeholder="Телефон *" name="entry-phone" id="entry-phone" class="form-input tel"
             autocomplete="off">
      <span class="form-hint">Мобильный телефон</span>
    </div>
    <div class="form-row form-row-car-number should-be-checked">
      <svg class="svg-checked svg-state hidden">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <svg class="svg-alert svg-state hidden">
        <use xlink:href="img/sprite-form.svg#alert"></use>
      </svg>
      <input type="text" placeholder="Гос. номер авто *" name="entry-car-number" id="entry-car-number"
             class="form-input car-number"
             autocomplete="off">
      <span class="form-hint">Гос. номер авто</span>
    </div>
    <div class="form-row form-row-date should-be-checked">
      <svg class="svg-checked svg-state hidden">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <svg class="svg-alert svg-state hidden">
        <use xlink:href="img/sprite-form.svg#alert"></use>
      </svg>
      <label for="entry-date" class="form-label">
        <svg>
          <use xlink:href="img/sprite-form.svg#calendar"></use>
        </svg>
      </label>
      <input type="text" placeholder="Выберите дату *" readonly name="entry-date" id="entry-date"
             class="form-input date"
             autocomplete="off">
      <span class="form-hint"></span>
    </div>
    <div class="form-row form-row-time should-be-checked">
      <svg class="svg-checked svg-state hidden">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <svg class="svg-alert svg-state hidden">
        <use xlink:href="img/sprite-form.svg#alert"></use>
      </svg>
      <label for="entry-time" class="form-label">
        <svg>
          <use xlink:href="img/sprite-form.svg#clock"></use>
        </svg>
      </label>
      <input type="text" placeholder="Выберите время *" readonly name="entry-time" id="entry-time"
             class="form-input time"
             autocomplete="off">
      <span class="form-hint"></span>
      <ul class="form-row-time__list">
        <li>
          <input type="radio" class="checkbox" name="form-time" id="form-time-1" value="5:00">
          <label for="form-time-1">5:00</label>
        </li>
        <li>
          <input type="radio" class="checkbox" name="form-time" id="form-time-2" value="6:00">
          <label for="form-time-2">6:00</label>
        </li>
        <li>
          <input type="radio" class="checkbox" name="form-time" id="form-time-3" value="7:00">
          <label for="form-time-3">7:00</label>
        </li>
        <li>
          <input type="radio" class="checkbox" name="form-time" id="form-time-4" value="8:00">
          <label for="form-time-4">8:00</label>
        </li>
        <li>
          <input type="radio" class="checkbox" name="form-time" id="form-time-5" value="9:00">
          <label for="form-time-5">9:00</label>
        </li>
      </ul>
    </div>
    <div class="parking">
      <div class="parking__title">Выберите парковочное место</div>
      <div class="parking__wrap">
        <div class="parking__box">
          <input disabled type="radio" id="parking1"
                 name="parking" value="parking1">
          <label class="parking__label pointer" for="parking1">
            <svg>
              <use xlink:href="img/sprite-form.svg#check"></use>
            </svg>
          </label>
        </div>
        <div class="parking__box">
          <input type="radio" id="parking2"
                 name="parking" value="parking2">
          <label class="parking__label pointer" for="parking2">
            <svg>
              <use xlink:href="img/sprite-form.svg#check"></use>
            </svg>
          </label>
        </div>
        <div class="parking__box">
          <input type="radio" id="parking3"
                 name="parking" value="parking3">
          <label class="parking__label pointer" for="parking3">
            <svg>
              <use xlink:href="img/sprite-form.svg#check"></use>
            </svg>
          </label>
        </div>
      </div>
    </div>
    <div class="notification">
      <label for="notification-datalist" class="notification__span">Напомнить за</label>
      <select id="notification-datalist" class="notification__select select">
        <option value="1 час" tabindex="-1">1 час</option>
        <option value="2 часа" tabindex="-1">2 часа</option>
        <option value="3 часа" tabindex="-1">3 часа</option>
      </select>
    </div>
    <div class="checkbox-row">
      <input type="checkbox" id="entry-storage" class="checkbox-input">
      <label for="entry-storage" class="checkbox-label pointer">Я буду использовать колеса с хранения</label>
    </div>
    <table class="wheel-table">
      <tr>
        <td>
          <div class="checkbox-row">
            <input type="checkbox" id="entry-table-checkbox-1" name="entry-table-checkbox-1"
                   class="checkbox-input table-input">
            <label for="entry-table-checkbox-1" class="checkbox-label pointer"></label>
          </div>
        </td>
        <td>R16</td>
        <td>235\55</td>
        <td>2 шт.</td>
        <td>Nokian Hakka</td>
      </tr>
      <tr>
        <td>
          <div class="checkbox-row">
            <input type="checkbox" id="entry-table-checkbox-2" name="entry-table-checkbox-2"
                   class="checkbox-input table-input">
            <label for="entry-table-checkbox-2" class="checkbox-label pointer"></label>
          </div>
        </td>
        <td>R16</td>
        <td>235\55</td>
        <td>2 шт.</td>
        <td>Pirelli Nokian Hakka</td>
      </tr>
      <tr>
        <td>
          <div class="checkbox-row">
            <input type="checkbox" id="entry-table-checkbox-3" name="entry-table-checkbox-3"
                   class="checkbox-input table-input">
            <label for="entry-table-checkbox-3" class="checkbox-label pointer"></label>
          </div>
        </td>
        <td>R16</td>
        <td>235\55</td>
        <td>2 шт.</td>
        <td>Pirelli Nokian Hakka</td>
      </tr>
    </table>
    <button type="submit" class="button-red entry__submit disabled">Записаться</button>
    <div class="entry__page-back mobile">
      <svg>
        <use xlink:href="img/sprite.svg#arrow-left"></use>
      </svg>
      <span>Назад</span>
    </div>
    <p class="additional">Нажимая на кнопку «Записаться», вы соглашаетесь с политикой конфиденциальности и с условиями
      предоставления услуги онлайн-запись.</p>
  </form>
  <div class="entry__thx entry__page entry-step hide">
    <div class="entry__page-top">
      <div class="entry__page-back pointer">
        <svg>
          <use xlink:href="img/sprite.svg#arrow-left"></use>
        </svg>
        <span>Назад</span>
      </div>
      <div class="close entry__page-close pointer">
        <svg>
          <use xlink:href="img/sprite.svg#close"></use>
        </svg>
      </div>
    </div>
    <h3>Вы успешно записаны!</h3>
    <div class="entry__thx-content">
      <div class="entry__thx-info">
        Ждем вас <span class="bold entry-send-date"></span> в <span class="bold entry-send-time"></span>
        по
        адресу: <span class="bold entry-send-address"></span>
      </div>
      <div class="entry__thx-buttons">
        <div class="entry__thx-subtitle">Вы можете проложить маршрут</div>
        <a href="" target="_blank" class="button-dark entry__thx-button entry__thx-button_yandex">
          <svg class="pointer">
            <use xlink:href="img/sprite.svg#yandex"></use>
          </svg>
          <span>Яндекс Карты Маршрут</span>
        </a>
        <a href="" target="_blank" class="button-dark entry__thx-button entry__thx-button_gis">
          <svg class="pointer">
            <use xlink:href="img/sprite.svg#2gis"></use>
          </svg>
          <span>2ГИС Маршрут</span>
        </a>
        <a href="#" target="_blank" class="button-dark entry__thx-button entry__thx-button_google">
          <svg class="pointer">
            <use xlink:href="img/sprite.svg#google"></use>
          </svg>
          <span>Google Maps Маршрут</span>
        </a>
      </div>
      <div class="entry__thx-inst">
        <div class="entry__thx-subtitle">Следите за нами в соц. сетях</div>
        <a href="https://www.instagram.com/5koleso_official/" target="_blank" class="button-dark entry__thx-button">
          <img src="img/instagram.png">
          <span>Instagram</span>
        </a>
      </div>
      <div class="entry__thx-questions">
        <div class="entry__thx-subtitle">Остались вопросы?</div>
        <a href="tel:+79999999999" class="button-dark entry__thx-button">
          <svg class="pointer">
            <use xlink:href="img/sprite.svg#phone-call"></use>
          </svg>
          <span>Позвонить в точку</span>
        </a>
      </div>
      <div class="button-red entry__thx-red">Записаться ещё</div>
    </div>
  </div>
  </div>
</main>
<?php include('partials/footer.php'); ?>
<script type="text/javascript">
  ymaps.ready(init);


  function init() {
    var myMap = new ymaps.Map("map", {
        center: [55.79, 49.11],
        zoom: 12,
        controls: []
      }),

      ListOpenLayout = ymaps.templateLayoutFactory.createClass(["<div class='list-layout'></div>"].join());
    buttonListOpen = new ymaps.control.Button({
      data: {
        content: "Жмак-жмак-жмак",
        image: 'images/pen.png',
        title: "Жмак-жмак-жмак"
      },
      options: {
        layout: ListOpenLayout,
      }
    });

    myMap.controls.add(buttonListOpen);
    buttonListOpen.events.add('click', function () {
      $('.entry__info').removeClass('hide');
    })
    ZoomLayout = ymaps.templateLayoutFactory.createClass("<div class='map-layout'>" +
      "<div id='zoom-in' class='btn'><svg class='icon-plus' width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
      "<path d=\"M15 7H9V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V7H1C0.734784 7 0.48043 7.10536 0.292893 7.29289C0.105357 7.48043 0 7.73478 0 8C0 8.26522 0.105357 8.51957 0.292893 8.70711C0.48043 8.89464 0.734784 9 1 9H7V15C7 15.2652 7.10536 15.5196 7.29289 15.7071C7.48043 15.8946 7.73478 16 8 16C8.26522 16 8.51957 15.8946 8.70711 15.7071C8.89464 15.5196 9 15.2652 9 15V9H15C15.2652 9 15.5196 8.89464 15.7071 8.70711C15.8946 8.51957 16 8.26522 16 8C16 7.73478 15.8946 7.48043 15.7071 7.29289C15.5196 7.10536 15.2652 7 15 7Z\" fill=\"white\"/>\n" +
      "</svg>\n</div>" +
      "<div id='zoom-out' class='btn'><svg class='icon-minus' width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
      "<path d=\"M19 11H5C4.73478 11 4.48043 11.1054 4.29289 11.2929C4.10536 11.4804 4 11.7348 4 12C4 12.2652 4.10536 12.5196 4.29289 12.7071C4.48043 12.8946 4.73478 13 5 13H19C19.2652 13 19.5196 12.8946 19.7071 12.7071C19.8946 12.5196 20 12.2652 20 12C20 11.7348 19.8946 11.4804 19.7071 11.2929C19.5196 11.1054 19.2652 11 19 11Z\" fill=\"white\"/>\n" +
      "</svg>\n</div>\n</div>", {

      // Переопределяем методы макета, чтобы выполнять дополнительные действия
      // при построении и очистке макета.
      build: function () {
        // Вызываем родительский метод build.
        ZoomLayout.superclass.build.call(this);

        // Привязываем функции-обработчики к контексту и сохраняем ссылки
        // на них, чтобы потом отписаться от событий.
        this.zoomInCallback = ymaps.util.bind(this.zoomIn, this);
        this.zoomOutCallback = ymaps.util.bind(this.zoomOut, this);
        //this.geolocationCallback = ymaps.util.bind(this.doGeolocation, this);

        // Начинаем слушать клики на кнопках макета.
        $('#zoom-in').bind('click', this.zoomInCallback);
        $('#zoom-out').bind('click', this.zoomOutCallback);
        //$('#geo-location').bind('click', this.doGeolocation);
      },

      clear: function () {
        // Снимаем обработчики кликов.
        $('#zoom-in').unbind('click', this.zoomInCallback);
        $('#zoom-out').unbind('click', this.zoomOutCallback);

        // Вызываем родительский метод clear.
        ZoomLayout.superclass.clear.call(this);
      },

      zoomIn: function () {
        var map = this.getData().control.getMap();
        map.setZoom(map.getZoom() + 1, {checkZoomRange: true});
      },

      zoomOut: function () {
        var map = this.getData().control.getMap();
        map.setZoom(map.getZoom() - 1, {checkZoomRange: true});
      },

      // doGeolocation: function () {
      //   //var map = this.getData().control.getMap();
      //   var location = ymaps.geolocation.get();
      //   location.then(
      //     function (result) {
      //       // Добавление местоположения на карту.
      //       myMap.geoObjects.add(result.geoObjects);
      //       // Перемещение к местоположению
      //       myMap.panTo(result.geoObjects.position)
      //     },
      //     function (err) {
      //       console.log('Ошибка: ' + err)
      //     }
      //   );
      // }
    });
    zoomControl = new ymaps.control.ZoomControl({options: {layout: ZoomLayout}});
    myMap.controls.add(zoomControl, {
      position: {}
    });
    // var searchControl = new ymaps.control.SearchControl({
    //   options: {
    //     noSelect: true,
    //     noPlacemark: true,
    //     placeholderContent: 'Выберите адрес',
    //     //provider: 'yandex#search',
    //     noSuggestPanel: true,
    //     noPopup: true,
    //     position: {
    //       top: -100,
    //     }
    //   },
    // });

    // searchControl.events.add('load', function (event) {
    //   // Проверяет, что это событие не "дозагрузка" результатов и
    //   // по запросу найден хотя бы один результат.
    //    if (!event.get('skip') && searchControl.getResultsCount()) {
    //      //searchControl.showResult(0);
    //    }
    // });
    // myMap.controls.add(searchControl);

    for (var i = 0; i < cityData.length; i++) {
      let item = cityData[i];
      let iconSrc = item.iconSrc;
      let coords = item.coords;

      BalloonContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div class="balloon-root ">' +
        '<a class="balloon-close" href="#">&times;</a>' +
        '<div class="arrow balloon-pin"></div>' +
        '<div class="balloon">$[properties.balloonContent]</div>' +
        '</div>', {
          //Формирование макета
          build: function () {
            this.constructor.superclass.build.call(this);
            this._$element = $('.balloon-root', this.getParentElement());
            this.applyElementOffset();
            this._$element.find('.balloon-close')
              .on('click', $.proxy(this.onCloseClick, this));
          },
          //удаление макета из DOM
          clear: function () {
            this._$element.find('.balloon-close')
              .off('click');
            this.constructor.superclass.clear.call(this);
          },
          onCloseClick: function (e) {
            e.preventDefault();
            this.events.fire('userclose');
          },

          //Сдвигаем балун, чтобы "хвостик" указывал на точку привязки.
          applyElementOffset: function () {
            this._$element.css({
              left: -(this._$element[0].offsetWidth / 2),
              top: -(this._$element[0].offsetHeight + 40),
            });
          },
        });

      var myPlacemark = new ymaps.Placemark(coords, {
        id: item.id,
        address: item.address,
        balloonContent:
          `<div class='balloon-content'>
              <div class='balloon-content__text'>
                <div class='balloon-content__address'>${item.address}</div>
                <div class='balloon-content__workhour'>Время работы: ${item.workhour}</div>
                <div class='balloon-content__workload ${item.baloonColor}'>${item.workload}</div>
              </div>
            <div class="balloon-content__img img"><img src="${item.imgSrc}"></div>
            </div>`
      }, {
        hideIconOnBalloonOpen: false,
        balloonCloseButton: false,
        balloonLayout: BalloonContentLayout,
        iconLayout: 'default#image',
        // Своё изображение иконки метки.
        iconImageHref: iconSrc,
        // Размеры метки.
        iconImageSize: [27, 27],
      });
      let margin = [];
      if (window.innerWidth > 1279) {
        margin = [0, 250, 0, 0]
      } else {
        margin = [0, 0, 100, 0]
      }
      myMap.geoObjects.add(myPlacemark);
      myMap.setBounds(myMap.geoObjects.getBounds(), {
        checkZoomRange: true,
        zoomMargin: margin
      });


      myMap.geoObjects.events.add('click', function (e) {
        // Получим ссылку на геообъект, по которому кликнул пользователь.
        var target = e.get('target');
        let address = target.properties.get('address');
        $('.entry__search-input').val(address);
        $('.entry__search').submit();
        // Переместим центр карты по координатам метки с учётом заданных отступов.
        let coords = target.geometry.getCoordinates();
        let newCoords = [];
        if (window.innerWidth > 1279) {
          newCoords = [
            coords[0],
            coords[1] + 0.05
          ];
        } else {
          newCoords = [
            coords[0] - 0.02,
            coords[1]
          ]
        }
        myMap.panTo(newCoords, {useMapMargin: true});
      });
    }
    $(".entry__search").on('submit', function (e) {
      e.preventDefault();
      let input = $(this).find('.entry__search-input').val();
      cityData.forEach(el => {
        if (el.address == input) {
          // searchControl.search(input).then(function () {
          myMap.geoObjects.each(function (geoObject) {
            if (geoObject.properties.get('id') == el.id) {
              geoObject.balloon.open();
              $('.entry__info').addClass('hide');
              $('.entry__form').removeClass('hide');
              $('.entry-address-data').val(el.address);
              let choosenCoords = geoObject.geometry.getCoordinates()[0] + ',' + geoObject.geometry.getCoordinates()[1];
              let choosenCoords1 = geoObject.geometry.getCoordinates()[1] + ',' + geoObject.geometry.getCoordinates()[0];
              $('.entry-address-data').attr('data-coords', choosenCoords);
              let yandexLink = `https://yandex.ru/maps/?rtext=~${choosenCoords}`;
              let gisLink = `dgis://2gis.ru/routeSearch/rsType/car/to/${choosenCoords1}`;
              let googleLink = `https://www.google.com/maps/dir//${choosenCoords}/@${choosenCoords},18z`;
              $('.entry__thx-button_yandex').attr('href', yandexLink);
              $('.entry__thx-button_gis').attr('href', gisLink);
              $('.entry__thx-button_google').attr('href', googleLink);
              return false;
            }
          });
          // });
        }
      })
    });
  }

  let d = new Date();

  let month = d.getMonth();
  let day = d.getDate();
  let year = d.getFullYear();

  let loc = {
    days: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
    daysShort: ['Вос', 'Пон', 'Вто', 'Сре', 'Чет', 'Пят', 'Суб'],
    daysMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    monthsShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
    today: 'Сегодня',
    clear: 'Очистить',
    dateFormat: 'dd.MM.yyyy',
    timeFormat: 'HH:mm',
    firstDay: 1
  };

  new AirDatepicker('#entry-date', {
    locale: loc,
    autoClose: true,
    minDate: new Date(year, month, day),
    maxDate: new Date(year, month, day+30),
    dateFormat(date) {
      return date.toLocaleString('ru', {
        year: 'numeric',
        day: '2-digit',
        month: '2-digit'
      });
    },
    onSelect({date, formattedDate, datepicker}) {
      $('#entry-date').parents('.form-row-date').addClass('checked').removeClass('alert');
      let form = $(this).parents('form');
      checkForm(form);
      const options1 = {month: 'long', day: 'numeric'};
      let value1 = date.toLocaleDateString('ru-RU', options1);
      $('.entry-send-date').text(value1);
    }
  });
</script>
