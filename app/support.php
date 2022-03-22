<?php include('partials/head.php');
include('partials/header-registered.php');
?>
  <main class="main main-bg corp-form">
    <img src="img/corp-bg.jpg" class="corp-form__img" alt="Профессиональное обслуживание корпоративного транспорта">
    <div class="container">
      <div class="corp-form__wrap">
        <h2>
          Служба поддержки<br>
          <a href="tel:79509999999">+7(950) 999-99-99</a>
        </h2>
        <div class="corp-form__desc">
          Горячая линия службы поддержки. По любым вопросам обращаться сюда
        </div>
      </div>
    </div>
    <div class="corp-form__block">
      <div class="corp-form__block-wrap">
        <a href="/" class="corp-form__close">
          <svg class="close">
            <use xlink:href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <div class="breadcrumbs desktop">
          <a href="/">Главная</a>
          <a href="support.php">Служба поддержки</a>
        </div>
        <h3>Заполните контактную информацию</h3>
        <div class="corp-form__block-desc">Любой автомобиль нуждается в шиномонтаже. В том числе и корпоративный.
          Специально для юридических лиц
          на балансе которых есть автомобили мы разработали комплексное предложение.
          Заключив договор на обслуживание автомобилей в сети шиномонтажных мастерских.
        </div>
        <form action="" class="corp-form__form-support">
          <div class="form-row form-row-left form-row-name should-be-checked" autocomplete="off">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <input type="text" placeholder="Фамилия Имя Отчество *" name="support-name" id="support-name"
                   class="form-input form-name" autocomplete="off">
          </div>
          <div class="form-row form-row-phone should-be-checked">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <span class="country">+7</span>
            <input type="tel" placeholder="Телефон *" name="support-phone" id="support-phone" class="form-input tel"
                   autocomplete="off">
            <span class="form-hint">Мобильный телефон</span>
          </div>
          <div class="form-row form-row-left form-row-name should-be-checked">
            <svg class="svg-checked svg-state hidden">
              <use xlink:href="img/sprite-form.svg#checked-green"></use>
            </svg>
            <svg class="svg-alert svg-state hidden">
              <use xlink:href="img/sprite-form.svg#alert"></use>
            </svg>
            <input type="text" placeholder="Ваше сообщение *" name="support-message" id="support-message"
                   class="form-input form-name" autocomplete="off">
          </div>
          <button type="submit" class="button-support disabled button-red">Отправить</button>
        </form>
        <div class="career__join-after">
          Нажимая кнопку отрпавить вы принимаете<br>
          <a href="text-page.php" target="_blank">пользовательское соглашение</a> и
          <a href="text-page.php" target="_blank">политику конфиденциальности</a>
        </div>
      </div>
    </div>
  </main>
<?php include('partials/footer.php'); ?>