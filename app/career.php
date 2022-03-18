<?php include('partials/head.php');
include('partials/header-career.php'); ?>
<script src="https://api-maps.yandex.ru/2.1/?apikey=2c7f86a3-03ca-400c-9256-7fb743d3aabc&lang=ru_RU"
        type="text/javascript"></script>
<main class="main career">
  <div class="career__video">
    <div class="container-md">
      <h1>Работа в Федеральной сети «5колесо»</h1>

      <iframe width="100%" height="557" src="https://www.youtube.com/embed/bUg_EoErRVM"
              title="Работа в Федеральной сети «5колесо»"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture"
              allowfullscreen></iframe>

      <div class="career__video-text hide-on-desktop">
        <h3 class="career__video-title">Присоединяйтесь к нам!</h3>
        <div class="career__video-desc">Присоединиться к нам просто: нужно выбрать интересующую вас вакансию из списка,
          заполнить форму и подождать, пока наши менеджеры свяжутся с вами.
        </div>
      </div>
    </div>
  </div>
  <div class="career__banner" id="vacancy">
    <div class="container-md">
      <div class="career__banner-content">
        <h2 class="career__banner-title">Найди вакансию <span class="nowrap">по душе</span></h2>
        <div class="career__banner-text">Воспользуйся нашим удобным поиском и подбери наиболее подходящую для тебя
          вакансию. Присоединиться к нам просто: нужно выбрать интересующую вас вакансию из списка, заполнить форму и
          подождать, пока наши менеджеры свяжутся с вами.
        </div>
        <div class="career__banner-button button-dark">Подобрать вакансию</div>
      </div>
    </div>
    <div class="career__banner-row">
      <span>Мы делаем передвижение на автомобиле безопаснее</span>
      <span>Мы делаем передвижение на автомобиле безопаснее</span>
    </div>
  </div>
  <div class="career__types">
    <div class="container-md">
      <div class="career__types-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#" class="career__types-item">
              <h3>Шиномонтажник</h3>
              <div class="career__types-more">Подробнее</div>
              <img src="img/career/types1.png" class="career__types-img" alt="Шиномонтажник">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="career__types-item">
              <h3>Менеджер по подбору персонала</h3>
              <div class="career__types-more">Подробнее</div>
              <img src="img/career/types2.png" class="career__types-img" alt="Менеджер по подбору персонала">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="career__types-item">
              <h3>Территориальный управляющий</h3>
              <div class="career__types-more">Подробнее</div>
              <img src="img/career/types3.png" class="career__types-img" alt="Территориальный управляющий">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="career__types-item">
              <h3>Техник</h3>
              <div class="career__types-more">Подробнее</div>
              <img src="img/career/types4.png" class="career__types-img" alt="Техник">
            </a>
          </div>
        </div>
        <div class="pagination"></div>
        <a href="#" class="career__types-link button-dark">Все вакансии</a>
      </div>
    </div>
  </div>
  <div class="career__join">
    <div class="container-md">
      <div class="career__join-wrap">
        <div class="career__join-img img">
          <picture>
            <source srcset="img/career/form-mobile.jpg" media="(max-width:767px)">
            <source srcset="img/career/form-tablet.jpg" media="(max-width:1279px)">
            <img src="img/career/form.jpg" alt="Присоединяйся к команде мечты!">
          </picture>
        </div>
        <form action="" class="career__join-form" autocomplete="off">
          <h2>Присоединяйся <span class="nowrap">к команде</span> мечты!</h2>
          <div class="form-row form-row-name should-be-checked">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <label for="join-name" class="form-label">
              <svg>
                <use xlink:href="img/sprite-form.svg#account"></use>
              </svg>
            </label>
            <input type="text" placeholder="Фамилия Имя Отчество *" name="join-name" id="join-name"
                   class="form-input form-name"
                   autocomplete="off">
            <span class="form-hint"></span>
          </div>
          <div class="form-row form-row-date should-be-checked">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <label for="join-date" class="form-label">
              <svg>
                <use xlink:href="img/sprite-form.svg#calendar"></use>
              </svg>
            </label>
            <input type="text" placeholder="Дата рождения *" readonly name="join-date" id="join-date"
                   class="form-input date"
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
            <input type="tel" placeholder="Телефон *" name="join-phone" id="join-phone" class="form-input tel"
                   autocomplete="off">
            <span class="form-hint">Мобильный телефон</span>
          </div>
          <div class="form-row form-row-phone">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <span class="country">+7</span>
            <input type="tel" placeholder="Телефон" name="join-phone-extra" id="join-phone-extra" class="form-input tel"
                   autocomplete="off">
            <span class="form-hint">Дополнительный мобильный телефон</span>
          </div>
          <div class="form-row form-row-name should-be-checked">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <label for="join-city" class="form-label">
              <svg>
                <use xlink:href="img/sprite-form.svg#geo"></use>
              </svg>
            </label>
            <input type="text" placeholder="Город *" name="join-city" id="join-city" class="form-input form-name"
                   autocomplete="off">
            <span class="form-hint"></span>
          </div>
          <div class="career__join-resume resume">
            <div class="resume__title">У вас уже есть резюме?</div>
            <div class="resume__box">
              <div class="resume__input">
                <input class="resume__file file" type="file" name="join-file" id="file"
                       data-multiple-caption="{count} files selected"/>
                <label for="file" class="resume__label"><span>Нажмите или перетащите сюда файл/резюме</span></label>

              </div>
            </div>
          </div>
          <button class="career__join-submit button-red disabled" type="submit">Отправить</button>
          <div class="career__join-after">
            Нажимая кнопку отрпавить вы принимаете<br>
            <a href="text-page.php" target="_blank">пользовательское соглашение</a> и
            <a href="text-page.php" target="_blank">политику конфиденциальности</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="career__why" id="why">
    <div class="container-md">
      <h2>Почему выбирают <span class="nowrap">«5 Колесо»</span>?</h2>
      <div class="career__why-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="career__why-item">
              <img src="img/career/why-logo.svg" class="career__why-item-logo">
              <div class="career__why-item-text">
                <div class="career__why-item-title">1-е место</div>
                <div class="career__why-item-desc">в категории “самые высокоразвитые HR процессы в компании 2016</div>
              </div>
              </img>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="career__why-item">
              <img src="img/career/why-logo.svg" class="career__why-item-logo">
              <div class="career__why-item-text">
                <div class="career__why-item-title">1-е место</div>
                <div class="career__why-item-desc">в категории “самые высокоразвитые HR процессы в компании 2016</div>
              </div>
              </img>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="career__why-item">
              <img src="img/career/why-logo.svg" class="career__why-item-logo">
              <div class="career__why-item-text">
                <div class="career__why-item-title">1-е место</div>
                <div class="career__why-item-desc">в категории “самые высокоразвитые HR процессы в компании 2016</div>
              </div>
              </img>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="career__why-item">
              <img src="img/career/why-logo.svg" class="career__why-item-logo">
              <div class="career__why-item-text">
                <div class="career__why-item-title">1-е место</div>
                <div class="career__why-item-desc">в категории “самые высокоразвитые HR процессы в компании 2016</div>
              </div>
              </img>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="career__why-item">
              <img src="img/career/why-logo.svg" class="career__why-item-logo">
              <div class="career__why-item-text">
                <div class="career__why-item-title">1-е место</div>
                <div class="career__why-item-desc">в категории “самые высокоразвитые HR процессы в компании 2016</div>
              </div>
              </img>
            </div>
          </div>
        </div>
        <div class="pagination"></div>
      </div>
    </div>
  </div>
  <div class="career__map" id="map"></div>
  <div class="career__info">
    <div class="container-md">
      <div class="career__info-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="career__info-item img">
              <img src="img/career/info1.jpg" alt="РАБОТАЯ С НАМИ — ПОЛУЧАЙ БОЛЬШЕ" class="career__info-img">
              <div class="career__info-text">
                <div class="career__info-title">РАБОТАЯ С НАМИ — ПОЛУЧАЙ БОЛЬШЕ</div>
                <div class="career__info-desc">Сотрудник состоит в трудовых отношениях<br>
                  У Сотрудника отсутствуют нарушения трудовой дисциплины,<br>
                  У Сотрудника отсутствуют отпуска без сохранения заработной платы и больничные более 1 месяца
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="career__info-item img">
              <img src="img/career/info2.jpg" alt="Пригласи друга, получи 2000₽" class="career__info-img">
              <div class="career__info-text">
                <div class="career__info-title">Пригласи друга, получи 2000₽</div>
                <div class="career__info-desc">Сотрудник состоит в трудовых отношениях<br>
                  У Сотрудника отсутствуют нарушения трудовой дисциплины,<br>
                  У Сотрудника отсутствуют отпуска без сохранения заработной платы и больничные более 1 месяца
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pagination"></div>
      </div>
    </div>
  </div>
  <div class="career__corp">
    <div class="container-md">
      <h2>Корпоративная культура</h2>
    </div>
    <div class="career__corp-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="img/career/corp1.jpg" alt="Корпоративная культура" class="career__corp-item swiper-lazy">
        </div>
        <div class="swiper-slide">
          <img src="img/career/corp1.jpg" alt="Корпоративная культура" class="career__corp-item swiper-lazy">
        </div>
        <div class="swiper-slide">
          <img src="img/career/corp1.jpg" alt="Корпоративная культура" class="career__corp-item swiper-lazy">
        </div>
        <div class="swiper-slide">
          <img src="img/career/corp1.jpg" alt="Корпоративная культура" class="career__corp-item swiper-lazy">
        </div>
        <div class="swiper-slide">
          <img src="img/career/corp1.jpg" alt="Корпоративная культура" class="career__corp-item swiper-lazy">
        </div>
      </div>
      <div class="career__pagination">
        <div class="career__pagination-numbers hide-on-mobile">
          <span class="career__pagination-current">01</span>
          <span class="career__pagination-total"></span>
        </div>
        <div class="pagination"></div>
      </div>
    </div>
  </div>
  <div class="career__cite">
    <div class="container-md">
      <div class="career__cite-wrap">
        <h2>«Крутая цитата, после которой хочется свернуть горы»</h2>
        <copy>&copy; Джейсон Стэтхэм</copy>
      </div>
    </div>
  </div>
</main>
<?php include('partials/footer-career.php'); ?>
<?php include('partials/footer-swiper.php'); ?>
<script>
  let d = new Date();

  let month = d.getMonth();
  let day = d.getDate();
  let year = d.getFullYear();


  const joinPicker = datepicker('#join-date', {
    showOn: "focus",
    showAllDates: true,
    hideIfNoPrevNext: true,
    //minDate: new Date(year, month, day),
    startDay: 1,
    maxDate: new Date(year, month, day),
    customDays: ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'],
    customMonths: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    formatter: (input, date, instance) => {
      const options = {year: 'numeric', month: 'numeric', day: 'numeric'};
      const value = date.toLocaleDateString('ru-RU', options);
      input.value = value
    },
    onSelect: (instance, date) => {
      $('#join-date').parents('.form-row-date').addClass('checked').removeClass('alert');
      let form = $(this).parents('form');
      checkForm(form);
    },
  });


  ymaps.ready(init);


  function init() {
    var myMap = new ymaps.Map("map", {
        center: [55.79, 49.11],
        zoom: 12,
        controls: []
      }),

      ListOpenLayout = ymaps.templateLayoutFactory.createClass(["<div class='list-layout'></div>"].join());
    buttonListOpen = new ymaps.control.Button({
      options: {
        layout: ListOpenLayout,
      }
    });

    for (var i = 0; i < cityData.length; i++) {
      let item = cityData[i];
      let address = item.address;
      ymaps.geocode(address, {results: 1}).then(function (res) {
        let iconSrc = item.iconSrc;
        let coords = item.coords

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
        myMap.geoObjects.add(myPlacemark);
        myMap.setBounds(myMap.geoObjects.getBounds(), {
          checkZoomRange: true,
        });
      });
      myMap.behaviors.disable('scrollZoom');


      myMap.geoObjects.events.add('click', function (e) {
        // Получим ссылку на геообъект, по которому кликнул пользователь.
        var target = e.get('target');
        let coords = target.geometry.getCoordinates();
        myMap.panTo(coords, {useMapMargin: true});
      });


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
    }
  }
</script>
