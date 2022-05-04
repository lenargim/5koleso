<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main main-bg vacancies">
    <div class="container">
      <h1>Все вакансии</h1>
      <div class="vacancies__wrap">
        <form class="vacancies__side">
          <div class="vacancies__search">
            <input class="news__search-input" type="text" placeholder="Должность, профессия">
            <button type="submit" class="vacancies__search-submit pointer">
              <svg>
                <use xlink:href="img/sprite.svg#search"></use>
              </svg>
            </button>
            <svg class=" vacancies-reset close">
              <use xlink:href="img/sprite.svg#close"></use>
            </svg>
          </div>
          <h3 class="vacancies__side-title">Фильтры:</h3>
          <div class="vacancies__side-body">
            <div class="vacancies__side-subtitle">Регион</div>
            <div class="vacancies__side-list">
              <div class="checkbox-row">
                <input type="checkbox" id="vacancies-region-ru" class="checkbox-input">
                <label for="vacancies-region-ru" class="checkbox-label pointer">Россия <span>35</span></label>
              </div>
              <div class="checkbox-row">
                <input type="checkbox" id="vacancies-region-msk" class="checkbox-input">
                <label for="vacancies-region-msk" class="checkbox-label pointer">Москва <span>51</span></label>
              </div>
              <div class="checkbox-row">
                <input type="checkbox" id="vacancies-region-tat" class="checkbox-input">
                <label for="vacancies-region-tat" class="checkbox-label pointer">Республика Татарстан
                  <span>55</span></label>
              </div>
              <div class="checkbox-row">
                <input type="checkbox" id="vacancies-region-tag" class="checkbox-input">
                <label for="vacancies-region-tag" class="checkbox-label pointer">Республика Таджикистан <span>56</span></label>
              </div>
            </div>
            <div class="vacancies__side-showall">Показать все</div>
          </div>
          <div class="vacancies__side-body">
            <div class="vacancies__side-subtitle">Опыт</div>
            <div class="vacancies__side-list">
              <div class="radio-row">
                <input type="radio" name="experience" id="vacancies-exp-1" class="radio-input">
                <label for="vacancies-exp-1" class="radio-label pointer">Без опыта</label>
              </div>
              <div class="radio-row">
                <input type="radio" name="experience" id="vacancies-exp-2" class="radio-input">
                <label for="vacancies-exp-2" class="radio-label pointer">От 1 до 3 лет</label>
              </div>
              <div class="radio-row">
                <input type="radio" name="experience" id="vacancies-exp-3" class="radio-input">
                <label for="vacancies-exp-3" class="radio-label pointer">От 3 до 5 лет</label>
              </div>
            </div>
          </div>
          <div class="vacancies__side-clear pointer vacancies-reset">
            <svg class="close">
              <use xlink:href="img/sprite.svg#close"></use>
            </svg>
            <span>Сбросить все</span>
          </div>
        </form>
        <div class="vacancies__content">
          <div class="vacancies__block">
            <div class="vacancies__item">
              <div class="vacancies__item-title">Шиномонтажник</div>
              <div class="vacancies__item-salary">1000$</div>
              <div class="vacancies__item-text">Личный транспорт — спасение во время изоляции.
                Друзья, в ближайшую неделю нам всем крайне важно ограничить контакты с другими людьми. Если
                все же пришлось выйти, лучше воспользоваться личным транспортом.
              </div>
              <div class="vacancies__item-buttonrow">
                <div class="vacancies__item-button button-red fill-blank-open">Откликнуться</div>
                <a href="vacancy.php" class="vacancies__item-more">Подробнее</a>
              </div>
              <span class="vacancies__item-date">31 марта 2020</span>
            </div>
            <div class="vacancies__item">
              <div class="vacancies__item-title">Шиномонтажник</div>
              <div class="vacancies__item-salary">1000$</div>
              <div class="vacancies__item-text">Личный транспорт — спасение во время изоляции.
                Друзья, в ближайшую неделю нам всем крайне важно ограничить контакты с другими людьми. Если
                все же пришлось выйти, лучше воспользоваться личным транспортом.
              </div>
              <div class="vacancies__item-buttonrow">
                <div class="vacancies__item-button button-red fill-blank-open">Откликнуться</div>
                <a href="vacancy.php" class="vacancies__item-more">Подробнее</a>
              </div>
              <span class="vacancies__item-date">31 марта 2020</span>
            </div>
            <div class="vacancies__item">
              <div class="vacancies__item-title">Шиномонтажник</div>
              <div class="vacancies__item-salary">1000$</div>
              <div class="vacancies__item-text">Личный транспорт — спасение во время изоляции.
                Друзья, в ближайшую неделю нам всем крайне важно ограничить контакты с другими людьми. Если
                все же пришлось выйти, лучше воспользоваться личным транспортом.
              </div>
              <div class="vacancies__item-buttonrow">
                <div class="vacancies__item-button button-red fill-blank-open">Откликнуться</div>
                <a href="vacancy.php" class="vacancies__item-more">Подробнее</a>
              </div>
              <span class="vacancies__item-date">31 марта 2020</span>
            </div>
            <div class="vacancies__item">
              <div class="vacancies__item-title">Шиномонтажник</div>
              <div class="vacancies__item-salary">1000$</div>
              <div class="vacancies__item-text">Личный транспорт — спасение во время изоляции.
                Друзья, в ближайшую неделю нам всем крайне важно ограничить контакты с другими людьми. Если
                все же пришлось выйти, лучше воспользоваться личным транспортом.
              </div>
              <div class="vacancies__item-buttonrow">
                <div class="vacancies__item-button button-red fill-blank-open">Откликнуться</div>
                <a href="vacancy.php" class="vacancies__item-more">Подробнее</a>
              </div>
              <span class="vacancies__item-date">31 марта 2020</span>
            </div>
          </div>
          <?php include('partials/footer-nav.php'); ?>
        </div>
      </div>
    </div>
  </main>
<?php include('partials/vacancy-form.php'); ?>
<?php include('partials/footer.php'); ?>
<script>
  let d = new Date();

  let month = d.getMonth();
  let day = d.getDate();
  let year = d.getFullYear();

  let loc = {
    days: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
    daysShort: ['Вос', 'Пон', 'Вто', 'Сре', 'Чет', 'Пят', 'Суб'],
    daysMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    monthsShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
    today: 'Сегодня',
    clear: 'Очистить',
    dateFormat: 'dd.MM.yyyy',
    timeFormat: 'HH:mm',
    firstDay: 1
  };

  new AirDatepicker('#vacancy-date', {
    locale: loc,
    autoClose: true,
    maxDate: new Date(year, month, day),
    dateFormat(date) {
      return date.toLocaleString('ru', {
        year: 'numeric',
        day: '2-digit',
        month: '2-digit'
      });
    },
    onSelect({date, formattedDate, datepicker}) {
      $('#vacancy-date').parents('.form-row-date').addClass('checked').removeClass('alert');
      let form = $(this).parents('form');
      checkForm(form);
    }
  });
</script>
