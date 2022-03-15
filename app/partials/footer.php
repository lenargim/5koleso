<div class="overlay">
  <svg class="overlay__close pointer">
    <use xlink:href="img/sprite.svg#close"></use>
  </svg>
  <div class="modal modal-add-car">
    <h2 class="modal__title">Добавьте авто</h2>
    <div class="modal__desc">Заполните форму чтобы добавить авто.<br>
      Необходимо указать марку автомобиля и гос. номер.
    </div>
    <form action="" class="modal__form add-car-form" autocomplete="off">
      <div class="modal__form-row should-be-checked">
        <svg class="svg-checked svg-state hidden">
          <use xlink:href="img/sprite-form.svg#checked-green"></use>
        </svg>
        <svg class="svg-alert svg-state hidden">
          <use xlink:href="img/sprite-form.svg#alert"></use>
        </svg>
        <input type="text" placeholder="Марка автомобиля" name="add-car-model" id="add-car-model"
               class="modal__form-input form-car-model"
               autocomplete="off">
        <span class="form-hint">Марка автомобиля</span>
      </div>
      <div class="modal__form-row should-be-checked">
        <svg class="svg-checked svg-state hidden">
          <use xlink:href="img/sprite-form.svg#checked-green"></use>
        </svg>
        <svg class="svg-alert svg-state hidden">
          <use xlink:href="img/sprite-form.svg#alert"></use>
        </svg>
        <input type="text" placeholder="Гос. номер авто" name="add-car-number" id="add-car-number"
               class="modal__form-input car-number"
               autocomplete="off">
        <span class="form-hint">Гос. номер авто</span>
      </div>
      <div class="modal__form-row has-icon">
        <label for="add-car-date" class="modal__form-label">
          <svg>
            <use xlink:href="img/sprite-form.svg#calendar"></use>
          </svg>
        </label>
        <input type="text" readonly value="15.01. 2012" name="add-car-date" id="add-car-date" class="modal__form-input"
               autocomplete="off">
        <span class="form-hint">Дата последнего обращения</span>
      </div>
      <div class="modal__form-row has-icon">
        <label for="add-car-servise" class="modal__form-label">
          <svg>
            <use xlink:href="img/sprite-lk.svg#form-servise"></use>
          </svg>
        </label>
        <input type="text" readonly value="Сезонная смена шин" name="add-car-servise" id="add-car-servise"
               class="modal__form-input"
               autocomplete="off">
        <span class="form-hint">Услуга</span>
      </div>
      <div class="modal__form-row has-icon">
        <label for="add-car-address" class="modal__form-label">
          <svg>
            <use xlink:href="img/sprite-lk.svg#geo"></use>
          </svg>
        </label>
        <input type="text" readonly value="Проспект Ямашева 28а, к1" name="add-car-address" id="add-car-address"
               class="modal__form-input"
               autocomplete="off">
        <span class="form-hint">Адресс обсуживания</span>
      </div>
      <div class="modal__form-row has-icon">
        <label for="add-car-price" class="modal__form-label">
          <svg>
            <use xlink:href="img/sprite-lk.svg#rouble"></use>
          </svg>
        </label>
        <input type="text" readonly value="3650 руб." name="add-car-price" id="add-car-price" class="modal__form-input"
               autocomplete="off">
        <span class="form-hint">Стоимость</span>
      </div>
      <button type="submit" class="button-red modal__form-button disabled">Добавить</button>
    </form>
  </div>
  <div class="modal modal-car-added">
    <div class="modal-car-added__top">
      <svg class="modal-car-added__svg">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <h3>Автомобиль добавлен</h3>
    </div>
    <div class="modal-car-added__text">Авто успешно добавлено. Теперь вы можете просматривать подробную информацию<br>
      по вашему автомобилю
    </div>
    <div class="modal-car-added__button button-red">Хорошо</div>
  </div>
  <div class="modal modal-search">
    <form class="modal-search__form" autocomplete="off" id="form-modal-search">
      <input type="text" list="form-search-list" class="modal-search__input" id="search-datalist-input"
             placeholder="Поиск..">
      <ul id="datalist-ul" class="modal-search__list"></ul>
      <svg class="modal-search__close pointer">
        <use xlink:href="img/sprite.svg#close"></use>
      </svg>
      <button type="submit" class="modal-search__submit pointer">
        <svg>
          <use xlink:href="img/sprite.svg#search"></use>
        </svg>
      </button>
      <script>
        const dataSearch = [
          { value: "1", text: "Шиномонтаж", type: "Услуга" },
          { value: "2", text: "Шиномонтаж литых дисков", type: "Услуга" },
          { value: "3", text: "Шиномонтаж 24/7", type: "Акция" },
          { value: "4", text: "Шиномонтаж без границ", type: "Услуга" },
          { value: "5", text: "Еще", type: "Услуга" }
        ];
      </script>
    </form>
  </div>
</div>
<div class="menu">
  <div class="container">
    <div class="menu__wrap">
      <a href="about.php" class="menu__item">
        <h2>О компании</h2>
        <span>Узнайте больше о компании «5 Колесо»</span>
        <img src="img/menu1.png" alt="О компании">
      </a>
      <a href="services.php" class="menu__item">
        <h2>Услуги<br>и цены</h2>
        <img src="img/menu2.png" alt="Услуги и цены">
      </a>
      <a href="vacancy.php" class="menu__item">
        <h2>Вакансии</h2>
        <img src="img/menu3.png" alt="Вакансии">
      </a>
      <a href="#" class="menu__item">
        <h2>Полезная<br>информация</h2>
        <img src="img/menu4.png" alt="Полезная информация">
      </a>
      <a href="#" class="menu__item">
        <h2>Корпоративным<br>клиентам</h2>
        <img src="img/menu5.png" alt="Корпоративным клиентам">
      </a>
    </div>
  </div>
  <div class="menu__footer">
    <div class="container">
      <div class="menu__footer-wrap">
        <div class="menu__left">
          <nav class="hidden">
            <a href="#">Правовые документы</a>
            <a href="#">Служба поддержки</a>
            <a href="#">Новости</a>
          </nav>
          <a href="#" class="link">Рассылка акций и новостей</a>
        </div>
        <div class="menu__socials">
          <a href="#" class="menu__socials-link" target="_blank">
            <svg>
              <use xlink:href="img/sprite.svg#instagram"></use>
            </svg>
          </a>
          <a href="#" class="menu__socials-link" target="_blank">
            <svg>
              <use xlink:href="img/sprite.svg#facebook"></use>
            </svg>
          </a>
          <a href="#" class="menu__socials-link" target="_blank">
            <svg>
              <use xlink:href="img/sprite.svg#youtube"></use>
            </svg>
          </a>
          <a href="#" class="menu__socials-link" target="_blank">
            <svg>
              <use xlink:href="img/sprite.svg#vk"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script id="get-city-data"></script>
<script src="js/scripts.js"></script>
</body>
</html>