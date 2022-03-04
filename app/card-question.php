<?php include('partials/head.php'); ?>
  <main class="card-question">
    <form action="" class="card-question__form" autocomplete="off">
      <h1 class="card-question__title">Задать вопрос</h1>
      <div class="card-question__desc">Задайте вопрос, наши менеджеры свяжутся с вами и ответят на все</div>
      <div class="form-row form-row-name should-be-checked">
        <svg class="svg-checked svg-state hidden">
          <use xlink:href="img/sprite-form.svg#checked-green"></use>
        </svg>
        <svg class="svg-alert svg-state hidden">
          <use xlink:href="img/sprite-form.svg#alert"></use>
        </svg>
        <label for="card-name" class="form-label">
          <svg>
            <use xlink:href="img/sprite-form.svg#account"></use>
          </svg>
        </label>
        <input type="text" placeholder="Имя *" name="card-name" id="card-name" class="form-input form-name"
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
        <input type="tel" placeholder="Телефон *" name="card-phone" id="card-phone" class="form-input tel"
               autocomplete="off">
        <span class="form-hint"></span>
      </div>
      <div class="form-row">
        <select id="card-datalist" class="notification__select select">
          <option value="Выберите вариант" tabindex="-1">Выберите вариант</option>
          <option value="Не списались баллы" tabindex="-1">Не списались баллы</option>
          <option value="Не зачислены баллы" tabindex="-1">Не зачислены баллы</option>
        </select>
      </div>
      <div class="form-row form-row-left form-row-name should-be-checked">
        <svg class="svg-checked svg-state hidden">
          <use xlink:href="img/sprite-form.svg#checked-green"></use>
        </svg>
        <svg class="svg-alert svg-state hidden">
          <use xlink:href="img/sprite-form.svg#alert"></use>
        </svg>
        <input type="text" placeholder="Вопрос" name="card-question" id="card-question" class="form-input form-name"
               autocomplete="off">
        <span class="form-hint"></span>
      </div>
      <div class="checkbox-row">
        <input type="checkbox" id="card-accept" class="checkbox-input check-accept">
        <label for="card-accept" class="checkbox-label pointer">Я согласен с политикой конфиденциальности,
          пользовательским соглашением и с условиями предоставления услуги онлайн-запись</label>
      </div>
      <button type="submit" class="button-red card-question__submit disabled">Отправить</button>
    </form>
  </main>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<?php include('partials/footer.php'); ?>