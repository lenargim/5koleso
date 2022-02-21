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
          <span>Казань</span>
          <svg>
            <use xlink:href="img/sprite.svg#arrow-down"></use>
          </svg>
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