<?php include('partials/head.php'); ?>
  <main class="faq-ask">
    <a href="faq.php">
      <svg class="close entrance__close pointer">
        <use xlink:href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <div class="faq-ask__content">
      <h2 class="faq-ask__title">Задайте вопрос</h2>
      <div class="faq-ask__desc">
        Заполните форму и наши менеджеры ответят вам в самое ближайшее время. Не бойтесь указывать телефон и
        эл.почту,<br>это нужно, чтобы мы уведомили вас об ответе.
      </div>
      <form action="" class="faq-ask__form" autocomplete="off">
        <div class="form-row form-row-left">
          <svg class="svg-checked svg-state hidden">
            <use xlink:href="img/sprite-form.svg#checked-green"></use>
          </svg>
          <svg class="svg-alert svg-state hidden">
            <use xlink:href="img/sprite-form.svg#alert"></use>
          </svg>
          <input type="email" class="input email form-input" value="123@e-mail.com" name="faq-mail"
                 placeholder="Введите email"
                 autocomplete="off">
          <span class="form-hint">Электронная почта</span>
        </div>
        <div class="form-row form-row-phone should-be-checked">
          <svg class="svg-checked svg-state hidden">
            <use xlink:href="img/sprite-form.svg#checked-green"></use>
          </svg>
          <svg class="svg-alert svg-state hidden">
            <use xlink:href="img/sprite-form.svg#alert"></use>
          </svg>
          <span class="country">+7</span>
          <input type="tel" placeholder="Телефон *" name="faq-phone" id="faq-phone" class="form-input tel"
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
          <input type="text" placeholder="Ваш вопрос *" name="faq-question" id="faq-question" class="form-input form-name"
                 autocomplete="off">
          <span class="form-hint"></span>
        </div>
        <button type="submit" class="button-red faq-ask__button disabled">Отправить</button>
      </form>
    </div>
  </main>
<?php include('partials/footer.php'); ?>