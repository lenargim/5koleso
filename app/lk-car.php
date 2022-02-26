<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main lk">
    <div class="container">
      <div class="lk__grid">
        <span></span>
        <h1>Личный кабинет</h1>
        <nav class="lk__sidebar">
          <li>
            <a href="lk-history.php" class="lk__sidebar-button">
              <svg>
                <use xlink:href="img/sprite-lk.svg#history"></use>
              </svg>
              <span>История посещений</span>
            </a>
          </li>
          <li>
            <a href="lk-car.php" class="lk__sidebar-button active">
              <svg>
                <use xlink:href="img/sprite-lk.svg#car"></use>
              </svg>
              <span>Список автомобилей</span>
            </a>
          </li>
          <li>
            <a href="lk-sale.php" class="lk__sidebar-button">
              <svg>
                <use xlink:href="img/sprite-lk.svg#award"></use>
              </svg>
              <span>Акции</span>
            </a>
          </li>
          <li>
            <a href="lk-settings.php" class="lk__sidebar-button">
              <svg>
                <use xlink:href="img/sprite-lk.svg#settings"></use>
              </svg>
              <span>Настройки</span>
            </a>
          </li>
          <li>
            <a href="lk-favorite.php" class="lk__sidebar-button">
              <svg>
                <use xlink:href="img/sprite-lk.svg#heart"></use>
              </svg>
              <span>Избранное</span>
            </a>
          </li>
        </nav>
        <div class="lk__content">
          <div class="lk__person">
            <div class="lk__person-top">
              <h3 class="lk__person-name">Александралександр</h3>
              <a href="#" class="lk__person-settings">
                <svg>
                  <use xlink:href="img/sprite-lk.svg#settings"></use>
                </svg>
              </a>
            </div>
            <div class="lk__person-info">
              <div class="lk__person-box">
                <div class="lk__person-hight">782 ₽</div>
                <div class="lk__person-low">Накопленно кэшбэка</div>
              </div>
              <div class="lk__person-box">
                <div class="lk__person-hight">4</div>
                <div class="lk__person-low">Автомобиля</div>
              </div>
              <div class="lk__person-box">
                <div class="lk__person-hight">4</div>
                <div class="lk__person-low">Акций</div>
              </div>
              <div class="lk__person-box">
                <div class="lk__person-hight">0</div>
                <div class="lk__person-low">Избранное</div>
              </div>
            </div>
            <div class="lk__person-button button-red sign-online">Записаться онлайн</div>
          </div>
          <div class="lk__page car">
            <h3>Список автомобилей</h3>
            <div class="car__table lk__table">
              <div class="thead">
                <div>Марка автомобиля</div>
                <div>Гос. номер</div>
                <div>Дата последнего посещения</div>
                <div>Услуга</div>
                <div>Адрес обсуживания</div>
                <div>Стоимость</div>
              </div>
              <div class="tbody">
                <div class="row">
                  <div>AUDI A4</div>
                  <div>А 001 РТ 716</div>
                  <div>15.01. 2012</div>
                  <div>Сезонная смена шин</div>
                  <div>Проспект Ямашева 28а, к1</div>
                  <div>3650 руб.</div>
                </div>
                <div class="row">
                  <div>AUDI A4</div>
                  <div>А 001 РТ 716</div>
                  <div>15.01. 2012</div>
                  <div>Сезонная смена шин</div>
                  <div>Проспект Ямашева 28а, к1</div>
                  <div>3650 руб.</div>
                </div>
              </div>
            </div>
            <div class="car__button button-dark add-car">
              <span>Добавить авто</span>
            </div>
          </div>
          <?php include('partials/footer-nav.php'); ?>
        </div>
      </div>
  </main>
<?php include('partials/footer.php'); ?>