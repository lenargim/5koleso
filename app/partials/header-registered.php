<header class="header header_transparent header_absolute">
  <div class="container">
    <div class="header__wrap">
      <a href="/" class="header__logo">
        <picture>
          <source srcset="img/logo-mobile.png" media="(max-width:1279px)">
          <img src="img/logo.png" alt="logo">
        </picture>
      </a>
      <div class="header__city city pointer">
        <div class="city__current">
          <span class="watch-city">Казань</span>
          <svg>
            <use xlink:href="img/sprite.svg#arrow-down"></use>
          </svg>
        </div>
        <ul class="header__city-list header__city-modal">
          <li data-city="kazan" class="hidden">Казань</li>
          <li data-city="volgograd">Волгоград</li>
          <li data-city="voronezh">Воронеж</li>
          <li data-city="moscow">Москва</li>
          <li>Нижнекамск</li>
          <li>Нижний Новгород</li>
          <li>Новосибирск</li>
          <li>Пенза</li>
          <li>Пермь</li>
          <li>Ростов-на-Дону</li>
          <li>Самара</li>
          <li>Саратов</li>
          <li>Уфа</li>
          <li>Челябинск</li>
        </ul>
        <div class="header__is-city header__city-modal">
          <span>Ваш город <span class="is-current watch-city" data-city="kazan">Казань</span>, верно?</span>
          <span class="no">Нет</span>
          <div class="yes button-red">Да</div>
        </div>
      </div>
      <div class="header__button button-red sign-online">Записаться онлайн</div>
      <div class="header__search pointer">
        <input type="search" class="hidden">
        <svg>
          <use xlink:href="img/sprite.svg#search"></use>
        </svg>
      </div>
      <div class="header__exit pointer">
        <div class="member account-state">
          <svg>
            <use xlink:href="img/sprite.svg#lk"></use>
          </svg>
          <span>Мой профиль</span>
        </div>
        <div class="member-card">
          <div class="member-card__top">
            <div class="member-card__img img"><img src="img/member.jpg" alt="Габдрахманов И.И."></div>
            <div class="member-card__name">Здравствуйте,<br>
              <span>Габдрахманов И.И.</span></div>
          </div>
          <div class="member-card__links">
            <div class="member-card__part">
              <a href="lk-history.php" class="member-card__link">
                <svg>
                  <use xlink:href="img/sprite-lk.svg#history"></use>
                </svg>
                <span>История посещений</span>
              </a>
              <a href="lk-car.php" class="member-card__link">
                <svg>
                  <use xlink:href="img/sprite-lk.svg#car"></use>
                </svg>
                <span>Список автомобилей</span>
              </a>
            </div>
            <div class="member-card__part">
              <a href="lk-sale.php" class="member-card__link">
                <svg>
                  <use xlink:href="img/sprite-lk.svg#award"></use>
                </svg>
                <span>Акции</span>
              </a>
            </div>
            <div class="member-card__part">
              <a href="lk-settings.php" class="member-card__link">
                <svg>
                  <use xlink:href="img/sprite-lk.svg#settings"></use>
                </svg>
                <span>Настройки</span>
              </a>
            </div>
            <div class="member-card__part">
              <a href="lk-favorites.php" class="member-card__link">
                <svg>
                  <use xlink:href="img/sprite-lk.svg#heart"></use>
                </svg>
                <span>Избранное</span>
              </a>
              <a href="#" class="member-card__link">
                <svg>
                  <use xlink:href="img/sprite.svg#entrance"></use>
                </svg>
                <span>Выйти</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <svg class="burger pointer">
        <use xlink:href="img/sprite.svg#burger"></use>
      </svg>
    </div>
  </div>
</header>