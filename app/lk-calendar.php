<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
<main class="main lk">
  <div class="container">
    <div class="lk__grid">
      <span></span>
      <h1>Личный кабинет</h1>
      <nav class="lk__sidebar">
        <li>
          <a href="lk-calendar.php" class="lk__sidebar-button active">
            <svg>
              <use xlink:href="img/sprite-lk.svg#calendar-lk"></use>
            </svg>
            <span>Календарь скидок</span>
          </a>
        </li>
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
          <a href="lk-settings.php" class="lk__sidebar-button">
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
        <div id="calendar" class="calendar"></div>
        <?php include('partials/footer-nav.php'); ?>
      </div>
    </div>
</main>
<?php include('partials/footer.php'); ?>
<script>
  const calendarData = [
    {
      date: '01.09.2022',
      sales: [
        {
          title: '-50%',
          description: 'На замену колес',
        }
      ]
    },
    {
      date: '02.09.2022',
      sales: [
        {
          title: '-50%',
          description: 'На замену колес',
        },
        {
          title: '-51%',
          description: 'На замену колес',
        }
      ]
    },
    {
      date: '29.10.2022',
      sales: [
        {
          title: '-52%',
          description: 'На замену колес',
        },
        {
          title: '-53%',
          description: 'На замену колес',
        }
      ]
    },
  ];

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
    firstDay: 1
  };

  new AirDatepicker('#calendar', {
    inline: true,
    keyboardNav: false,
    visible: true,
    locale: loc,
    selectOtherMonths: false,
    minView: 'days',
    autoClose: true,
    minDate: new Date(year, month, day - 30),
    maxDate: new Date(year, month, day + 365),
    prevHtml: '<svg viewBox="0 0 24 29" xmlns="http://www.w3.org/2000/svg"><path d="M11.2898 14.424L14.8298 10.284C15.0161 10.0649 15.1206 9.76845 15.1206 9.45949C15.1206 9.15052 15.0161 8.85411 14.8298 8.635C14.7369 8.52538 14.6263 8.43838 14.5044 8.379C14.3825 8.31963 14.2518 8.28906 14.1198 8.28906C13.9878 8.28906 13.8571 8.31963 13.7352 8.379C13.6134 8.43838 13.5028 8.52538 13.4098 8.635L9.16982 13.5936C9.07609 13.7024 9.0017 13.8317 8.95093 13.9742C8.90016 14.1167 8.87402 14.2696 8.87402 14.424C8.87402 14.5784 8.90016 14.7312 8.95093 14.8737C9.0017 15.0163 9.07609 15.1456 9.16982 15.2543L13.4098 20.2714C13.5033 20.3798 13.6141 20.4656 13.7359 20.5238C13.8578 20.582 13.9882 20.6115 14.1198 20.6106C14.2514 20.6115 14.3819 20.582 14.5037 20.5238C14.6256 20.4656 14.7364 20.3798 14.8298 20.2714C15.0161 20.0523 15.1206 19.7559 15.1206 19.4469C15.1206 19.138 15.0161 18.8416 14.8298 18.6225L11.2898 14.424Z"/></svg>',
    nextHtml: '<svg viewBox="0 0 24 29" xmlns="http://www.w3.org/2000/svg"><path d="M15.5397 13.2543L9.87974 6.64671C9.78677 6.5371 9.67617 6.4501 9.55431 6.39072C9.43246 6.33135 9.30175 6.30078 9.16974 6.30078C9.03773 6.30078 8.90702 6.33135 8.78516 6.39072C8.6633 6.4501 8.5527 6.5371 8.45974 6.64671C8.27349 6.86583 8.16895 7.16224 8.16895 7.47121C8.16895 7.78017 8.27349 8.07658 8.45974 8.2957L13.4097 14.1432L8.45974 19.9321C8.27349 20.1513 8.16895 20.4477 8.16895 20.7566C8.16895 21.0656 8.27349 21.362 8.45974 21.5811C8.55235 21.6916 8.6628 21.7795 8.78467 21.8398C8.90655 21.9 9.03743 21.9313 9.16974 21.932C9.30204 21.9313 9.43293 21.9 9.5548 21.8398C9.67668 21.7795 9.78712 21.6916 9.87974 21.5811L15.5397 14.9735C15.6412 14.864 15.7223 14.7311 15.7777 14.5831C15.8331 14.4352 15.8617 14.2754 15.8617 14.1139C15.8617 13.9524 15.8331 13.7927 15.7777 13.6447C15.7223 13.4968 15.6412 13.3639 15.5397 13.2543Z"/></svg>',
    navTitles: {days: 'MMMM yyyy'},
    onRenderCell({date, cellType}) {
      if (cellType === 'day') {
        let html = $((document.createElement('div')));
        const elDate = date.toLocaleString('ru', {
          year: 'numeric',
          day: '2-digit',
          month: '2-digit'
        });

        html.append(`<div class="date">${elDate}</div>`);

        let data = calendarData.find(el => el.date === elDate) || '';
        if (data.sales) {
          data.sales.map(sale => {
            html.append(`<div class="calendar-sale"><span class="title">${sale.title}</span><span class="desc">${sale.description}</span></div>`)
          })
        } else {
          html.append('<div class="error">Выгодные предложения отсутствуют</div>')
        }
        return {
          html: html.html()
        }
      }
    }
  });
</script>
