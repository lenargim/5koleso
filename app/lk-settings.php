<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
<main class="main lk">
  <div class="container">
    <div class="lk__grid">
      <span></span>
      <h1>Настройки</h1>
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
          <a href="lk-sale.php" class="lk__sidebar-button">
            <svg>
              <use xlink:href="img/sprite-lk.svg#award"></use>
            </svg>
            <span>Акции</span>
          </a>
        </li>
        <li>
          <a href="lk-settings.php" class="lk__sidebar-button active">
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
        <form action="" class="settings" autocomplete="off">
          <div class="settings__block">
            <h3>Личные данные</h3>
            <div class="settings__input-wrap">
              <div class="settings__row">
                <input type="text" class="input" name="settings-name" placeholder="Введите имя"
                       value="Александралександр">
                <div class="form-hint">Имя</div>
              </div>
              <div class="settings__row">
                <input type="text" class="input" name="settings-secondname" placeholder="Введите фамилию">
                <div class="form-hint">Фамилия</div>
              </div>
              <div class="settings__row">
                <input type="text" class="input" name="settings-thirdname" placeholder="Введите отчество">
                <div class="form-hint">Отчество</div>
              </div>
              <div class="settings__row">
                <select id="settings-sex" class="settings__select select">
                  <option value="Мужской" tabindex="-1">Мужской</option>
                  <option value="Женский" tabindex="-1">Женский</option>
                </select>
                <div class="form-hint form-hint_top">Пол</div>
              </div>
              <div class="settings__row">
                <label for="date-of-birth" class="settings__label">
                  <svg>
                    <use xlink:href="img/sprite-form.svg#calendar"></use>
                  </svg>
                </label>
                <input type="text" placeholder="Выберите дату" readonly name="date-of-birth" id="date-of-birth"
                       class="input date"
                       autocomplete="off">
                <div class="form-hint form-hint_top">Дата рождения</div>
              </div>
              <div class="settings__row"></div>
            </div>
          </div>
          <div class="settings__block">
            <h3>Контактные данные</h3>
            <div class="settings__input-wrap">
              <div class="settings__row">
                <span class="country">+7</span>
                <input type="tel" class="input tel" name="settings-phone" placeholder="Введите телефон"
                       autocomplete="off">
                <div class="form-hint form-hint_green hidden">Подтверждено</div>
                <a href="#" class="send-sms">Отправить SMS с кодом</a>
                <a href="#" class="send-sms hidden">Изменить</a>
              </div>
              <div class="settings__row">
                <input type="email" class="input email" value="Igorek1337@gmail.com" name="settings-mail" placeholder="Введите email"
                       autocomplete="off">
                <div class="form-hint form-hint_green">Подтверждено</div>
                <a href="#" class="send-sms hidden">Отправить SMS с кодом</a>
                <a href="#" class="send-sms">Изменить</a>
              </div>
            </div>
          </div>
          <div class="settings__block">
            <h3>Оповещения</h3>
            <div class="settings__notification-block">
              <div class="settings__row checkbox-row">
                <input type="checkbox" checked class="checkbox-input" id="settings-notification-1"
                       name="settings-notification-1">
                <div></div>
                <label for="settings-notification-1" class="checkbox-label">Предложение оценить сервисы «5
                  колесо»</label>
              </div>
              <div class="settings__row checkbox-row">
                <input type="checkbox" checked class="checkbox-input" id="settings-notification-2"
                       name="settings-notification-2">
                <div></div>
                <label for="settings-notification-2" class="checkbox-label">Напоминание о товарах в корзине</label>
              </div>
              <div class="settings__row checkbox-row">
                <input type="checkbox" class="checkbox-input" id="settings-notification-3"
                       name="settings-notification-3">
                <div></div>
                <label for="settings-notification-3" class="checkbox-label">Специальные предложения от «5
                  колесо»</label>
              </div>
              <div class="settings__row checkbox-row">
                <input type="checkbox" class="checkbox-input" id="settings-notification-4"
                       name="settings-notification-4">
                <div></div>
                <label for="settings-notification-4" class="checkbox-label">Персональные рекомендации и
                  уведомления</label>
              </div>
              <div class="settings__row checkbox-row">
                <input type="checkbox" checked class="checkbox-input" id="settings-notification-5"
                       name="settings-notification-5">
                <div></div>
                <label for="settings-notification-5" class="checkbox-label">Получать уведомления о личных
                  сообщениях</label>
              </div>
              <div class="settings__row checkbox-row">
                <input type="checkbox" checked class="checkbox-input" id="settings-notification-6"
                       name="settings-notification-6">
                <div></div>
                <label for="settings-notification-6" class="checkbox-label">При регистрации вы согласились с условиями
                  политики конфиденциальности</label>
              </div>
            </div>
          </div>
          <div class="settings__block">
            <h3>Изменение пароля</h3>
            <div class="settings__input-wrap">
              <div class="settings__row settings__password">
                <input type="password" class="input" name="settings-password-old" placeholder="Введите старый пароль">
                <div class="form-hint form-hint_top">Старый пароль</div>
                <svg class="pointer change-password">
                  <use xlink:href="img/sprite-lk.svg#password-close"></use>
                </svg>
                <svg class="pointer hidden change-password">
                  <use xlink:href="img/sprite-lk.svg#password-open"></use>
                </svg>
              </div>
              <div class="settings__row settings__password">
                <input type="password" class="input" name="settings-password-new" placeholder="Введите новый пароль">
                <div class="form-hint form-hint_top">Новый пароль</div>
                <svg class="pointer change-password">
                  <use xlink:href="img/sprite-lk.svg#password-close"></use>
                </svg>
                <svg class="pointer hidden change-password">
                  <use xlink:href="img/sprite-lk.svg#password-open"></use>
                </svg>
              </div>
              <div class="settings__row settings__password">
                <input type="password" class="input" name="settings-password-repeat" placeholder="Введите новый пароль">
                <div class="form-hint form-hint_top">Подтвердите новый пароль</div>
                <svg class="pointer change-password">
                  <use xlink:href="img/sprite-lk.svg#password-close"></use>
                </svg>
                <svg class="pointer hidden change-password">
                  <use xlink:href="img/sprite-lk.svg#password-open"></use>
                </svg>
              </div>
            </div>
          </div>
          <button type="submit" class="settings__submit button-red">Сохранить настройки</button>
        </form>
        <?php include('partials/footer-nav.php'); ?>
      </div>
    </div>
</main>

<?php include('partials/footer.php'); ?>
<script>
  let d = new Date();
  let month = d.getMonth();
  let day = d.getDate();
  let year = d.getFullYear();
  const birthDate = datepicker('#date-of-birth', {
    showOn: "focus",
    showAllDates: true,
    overlayPlaceholder: 'Введите год',
    overlayButton: 'Подтвердить',
    startDay: 1,
    hideIfNoPrevNext: true,
    maxDate: new Date(year, month, day),
    customDays: ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'],
    customMonths: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    formatter: (input, date) => {
      const options = {year: 'numeric', month: 'long', day: 'numeric'};
      const value = date.toLocaleDateString('ru-RU', options);
      input.value = value
    },
  });
</script>
