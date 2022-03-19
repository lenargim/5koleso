<form action="" class="vacancy-form">
  <svg class="vacancy-form__close pointer">
    <use xlink:href="img/sprite.svg#close"></use>
  </svg>
  <div class="vacancy-form__wrap">
    <h2>Заполни анкету</h2>
    <div class="form-row form-row-name should-be-checked">
      <svg class="svg-checked svg-state hidden">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <svg class="svg-alert svg-state hidden">
        <use xlink:href="img/sprite-form.svg#alert"></use>
      </svg>
      <label for="vacancy-name" class="form-label">
        <svg>
          <use xlink:href="img/sprite-form.svg#account"></use>
        </svg>
      </label>
      <input type="text" placeholder="Фамилия Имя Отчество *" name="vacancy-name" id="vacancy-name"
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
      <label for="vacancy-date" class="form-label">
        <svg>
          <use xlink:href="img/sprite-form.svg#calendar"></use>
        </svg>
      </label>
      <input type="text" placeholder="Дата рождения *" readonly name="vacancy-date" id="vacancy-date"
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
      <input type="tel" placeholder="Телефон *" name="vacancy-phone" id="vacancy-phone" class="form-input tel"
             autocomplete="off">
      <span class="form-hint">Мобильный телефон</span>
    </div>
    <div class="form-row form-row-name should-be-checked">
      <svg class="svg-checked svg-state hidden">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <svg class="svg-alert svg-state hidden">
        <use xlink:href="img/sprite-form.svg#alert"></use>
      </svg>
      <label for="vacancy-city" class="form-label">
        <svg>
          <use xlink:href="img/sprite-form.svg#geo"></use>
        </svg>
      </label>
      <input type="text" placeholder="Откуда вы? *" name="vacancy-city" id="vacancy-city" class="form-input form-name"
             autocomplete="off">
      <span class="form-hint"></span>
    </div>
    <div class="form-row form-row-left form-row-name should-be-checked">
      <svg class="svg-checked svg-state hidden">
        <use xlink:href="img/sprite-form.svg#checked-green"></use>
      </svg>
      <svg class="svg-alert svg-state hidden">
        <use xlink:href="img/sprite-form.svg#alert"></use>
      </svg>
      <input type="text" placeholder="Желаемая должность" name="vacancy-position" id="vacancy-position"
             class="form-input form-name"
             autocomplete="off">
      <span class="form-hint"></span>
    </div>
    <div class="career__join-resume resume">
      <div class="resume__title">У вас уже есть резюме?</div>
      <div class="resume__box">
        <div class="resume__input">
          <input class="resume__file file" type="file" name="vacancy-file" id="file"
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
  </div>
</form>