<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main main-bg corp-form">
    <img src="img/corp-bg.jpg" class="corp-form__img" alt="Профессиональное обслуживание корпоративного транспорта">
    <div class="container">
      <div class="corp-form__wrap">
        <h2>Осталость совсем чуть-чуть</h2>
        <div class="corp-form__desc">
          Заполните форму, и отправьте нам на почту <a href="mailto:office@5krf.ru">office@5krf.ru</a> скан подписанного
          договора. С типовой формой договора
          Вы можете ознакомиться по ссылке.
        </div>
      </div>
    </div>
    <div class="corp-form__block">
      <div class="corp-form__block-wrap">
        <div class="breadcrumbs desktop">
          <a href="/">Главная</a>
          <a href="corp.php">Корпоративным клиентам</a>
          <a href="corp-form.php">Заявка</a>
        </div>
        <a href="corp-form.php" class="corp-form__back pointer hide-on-mobile">
          <svg>
            <use xlink:href="img/sprite.svg#arrow-left"></use>
          </svg>
          <span>Назад</span>
        </a>
        <div class="corp-form__pagination">
          <div class="corp-form__pagination-numbers">
            <span class="corp-form__pagination-current">02</span>
            <span class="corp-form__pagination-total">02</span>
          </div>
          <div class="pagination">
            <div></div>
            <div class="active"></div>
          </div>
        </div>
        <form action="" class="corp-form__form-last autocomplete="off">
          <div class="form-row form-row-left form-row-name should-be-checked">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <input type="text" placeholder="Марка авто *" name="corp-car-type" id="corp-car-type"
                   class="form-input form-name">
          </div>
          <div class="form-row form-row-left form-row-name should-be-checked">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <input type="text" placeholder="Гос. номер *" name="corp-car-number" id="corp-car-number"
                   class="form-input car-number form-name">
          </div>
          <div class="corp-form__buttonrow">
            <div class="button-add-car pointer">
              <span>Добавить авто</span>
            </div>
            <button type="submit" class="button-second disabled button-red">Далее</button>
          </div>
        </form>
        <a href="corp-form.php" class="corp-form__back pointer mobile">
          <svg>
            <use xlink:href="img/sprite.svg#arrow-left"></use>
          </svg>
          <span>Назад</span>
        </a>
        <div class="career__join-after">
          Нажимая кнопку отрпавить вы принимаете<br>
          <a href="text-page.php" target="_blank">пользовательское соглашение</a> и
          <a href="text-page.php" target="_blank">политику конфиденциальности</a>
        </div>
      </div>
    </div>
  </main>
<?php include('partials/footer.php'); ?>