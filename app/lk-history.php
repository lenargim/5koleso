<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main lk">
    <div class="container">
      <div class="lk__grid">
        <span></span>
        <h1>Личный кабинет</h1>
        <nav class="lk__sidebar">
          <li>
            <a href="lk-history.php" class="lk__sidebar-button active">
              <svg>
                <use xlink:href="img/sprite-lk.svg#history"></use>
              </svg>
              <span>История посещений</span>
            </a>
          </li>
          <li>
            <a href="lk-car.php" class="lk__sidebar-button">
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
          <div class="lk__page history">
            <h3>История посещений</h3>
            <div class="history__table lk__table">
              <div class="thead">
                <div>Дата</div>
                <div>Объект</div>
                <div>Стоимость</div>
                <div>Кэшбэк</div>
              </div>
              <div class="tbody">
                <div class="row">
                  <div>15 дек. 2021</div>
                  <div>ул. Нариманова, 15Б</div>
                  <div>6580 ₽</div>
                  <div>658 ₽</div>
                </div>
                <div class="row">
                  <div>11 сен. 2021</div>
                  <div>ул. Нариманова, 15Б</div>
                  <div>1245 ₽</div>
                  <div>124</div>
                </div>
              </div>
            </div>
          </div>
          <?php include('partials/footer-nav.php'); ?>
        </div>
      </div>
  </main>
<?php include('partials/footer.php'); ?>