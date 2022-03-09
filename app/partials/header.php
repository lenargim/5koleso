<header class="header">
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
          <li data-city="kazan">Казань</li>
          <li data-city="moscow">Москва</li>
          <li data-city="volgograd">Волгоград</li>
          <li data-city="voronezh">Воронеж</li>
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
          <span class="city-text">Ваш город <span class="is-current watch-city" data-city="kazan">Казань</span>, верно?</span>
          <span class="no">Нет</span>
          <div class="yes button-red">Да</div>
        </div>
      </div>
      <div class="header__search pointer">
        <input type="search" class="hidden">
        <svg>
          <use xlink:href="img/sprite.svg#search"></use>
        </svg>
      </div>
      <div class="header__exit pointer">
        <div class="guest account-state">
          <svg>
            <use xlink:href="img/sprite.svg#entrance"></use>
          </svg>
          <span>Вход<span class="desktop">/Регистрация</span></span>
        </div>
      </div>
      <svg class="burger pointer">
        <use xlink:href="img/sprite.svg#burger"></use>
      </svg>
    </div>
  </div>
</header>