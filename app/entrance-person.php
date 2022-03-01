<?php include('partials/head.php'); ?>
  <main class="entrance">
    <a href="/">
      <svg class="close entrance__close pointer">
        <use xlink:href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <div class="entrance__content">
      <picture>
        <source srcset="img/entrance-logo-mobile.png" media="(max-width:767px)">
        <img src="img/entrance-logo.png" alt="5 колесо" class="entrance__logo">
      </picture>
      <form action="" class="entrance__form" autocomplete="off">
        <h3 class="entrance__title">Вход или регистрация</h3>
        <div class="form-row form-row-phone should-be-checked">
          <svg class="svg-checked svg-state hidden">
            <use xlink:href="img/sprite-form.svg#checked-green"></use>
          </svg>
          <svg class="svg-alert svg-state hidden">
            <use xlink:href="img/sprite-form.svg#alert"></use>
          </svg>
          <span class="country">+7</span>
          <input type="tel" placeholder="Телефон *" name="entrance-phone" id="entrance-phone" class="form-input tel"
                 autocomplete="off">
          <span class="form-hint">Телефон</span>
        </div>
        <span>На указанный номер придет СМС-код для подтверждения входа или регистрации</span>
        <div class="entrance__button-row">
          <button type="submit" class="button-red disabled entrance__submit entrance__button">Получить код</button>
          <a href="lk-history.php" class="button-dark-border entrance__button">Вход для юр. лиц</a>
        </div>
      </form>
      <form action="" class="entrance__code" autocomplete="off">
        <div class="form-row form-row-car-number">
          <input type="text" placeholder="Введите код из СМС" name="entrance-code" id="entrance-code" class="form-input"
                 autocomplete="off">
          <span class="form-hint">Код из СМС</span>
        </div>
        <div class="entrance__button-row">
          <a href="#" class="entrance__link entrance__button">Получить новый код</a>
          <button type="submit" class="button-red entrance__code-submit entrance__button">Войти</button>
        </div>
      </form>
    </div>
  </main>
<?php include('partials/footer.php'); ?>