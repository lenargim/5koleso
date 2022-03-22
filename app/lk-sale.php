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
            <a href="lk-car.php" class="lk__sidebar-button">
              <svg>
                <use xlink:href="img/sprite-lk.svg#car"></use>
              </svg>
              <span>Список автомобилей</span>
            </a>
          </li>
          <li>
            <a href="lk-sale.php" class="lk__sidebar-button active">
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
              <a href="lk-settings.php" class="lk__person-settings">
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
            <a href="entry.php" class="lk__person-button button-red sign-online">Записаться онлайн</a>
          </div>
          <div class="lk__page sale">
            <h3>Акции</h3>
            <div class="sale__wrap">
              <a href="lk-sale-detailed.php" class="sale__item">
                <div class="sale__item-big">2=1</div>
                <h3 class="sale__item-title">Два колеса по цене одного</h3>
                <div class="sale__item-more">Подробнее</div>
                <img src="img/action1.png" class="sale__item-img" alt="Два колеса по цене одного">
              </a>
              <a href="lk-sale-detailed.php" class="sale__item">
                <h3 class="sale__item-title">Кредит<br>от Тинькофф банк</h3>
                <div class="sale__item-more">Подробнее</div>
                <img src="img/action2.png" class="sale__item-img" alt="Кредит от Тинькофф банк">
              </a>
              <a href="lk-sale-detailed.php" class="sale__item">
                <div class="sale__item-big">24/7</div>
                <h3 class="sale__item-title">Работаем круглосуточно</h3>
                <div class="sale__item-more">Подробнее</div>
                <img src="img/action1.png" class="sale__item-img" alt="Работаем круглосуточно">
              </a>
              <a href="lk-sale-detailed.php" class="sale__item">
                <h3 class="sale__item-title">Кредит<br>от Тинькофф банк</h3>
                <div class="sale__item-more">Подробнее</div>
                <img src="img/action2.png" class="sale__item-img" alt="Кредит от Тинькофф банк">
              </a>
            </div>
          </div>
          <?php include('partials/footer-nav.php'); ?>
        </div>
      </div>
  </main>
<?php include('partials/footer.php'); ?>