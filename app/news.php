<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main main-bg news">
    <div class="container">
      <div class="breadcrumbs">
        <a href="/">Главная</a>
        <a href="news.php">Новости</a>
      </div>
      <div class="news__wrap">
        <div class="news__side">
          <div class="news__list">
            <a href="news.php" class="news__link active">
              <svg>
                <use xlink:href="img/sprite-news.svg#news"></use>
              </svg>
              <span>Новости</span>
            </a>
            <a href="faq.php" class="news__link">
              <svg>
                <use xlink:href="img/sprite-news.svg#faq"></use>
              </svg>
              <span>Вопросы и ответы</span>
            </a>
          </div>
        </div>
        <div class="news__content">
          <div class="news__grid">
            <a href="news-detailed.php" class="news__item">
              <div class="actions__item-title">Работаем круглосуточно 24/7</div>
              <div class="actions__item-text">Личный транспорт — спасение во время изоляции.
                Друзья, в ближайшую неделю нам всем крайне важно ограничить контакты с другими людьми. Если
                все же пришлось выйти, лучше воспользоваться личным транспортом.
                Далеко не все успели подготовить свои колеса к теплому сезону.
              </div>
              <span class="actions__item-more">Подробнее</span>
              <span class="actions__item-date">31 марта 2020</span>
            </a>
            <a href="news-detailed.php" class="news__item">
              <div class="actions__item-title">Оплата услуг картой рассрочки «Халва»</div>
              <div class="actions__item-text">Карта рассрочки «Халва» — это возможность обслуживатся в сети
                шиномонтажных мастерских “5колесо” в рассрочку без первоначального взноса, комиссий и переплат.
              </div>
              <span class="actions__item-more">Подробнее</span>
              <span class="actions__item-date">31 марта 2020</span>
            </a>
            <a href="news-detailed.php" class="news__item">
              <div class="actions__item-title">Кредит на покупку шин и дисков от Тинькофф банк</div>
              <div class="actions__item-text">Личный транспорт — спасение во время изоляции.
                Друзья, в ближайшую неделю нам всем крайне важно ограничить контакты с другими людьми. Если
                все же пришлось выйти, лучше воспользоваться личным транспортом.
              </div>
              <span class="actions__item-more">Подробнее</span>
              <span class="actions__item-date">31 марта 2020</span>
            </a>
            <a href="news-detailed.php" class="news__item">
              <div class="actions__item-title">Стретегическая сессия 2020</div>
              <div class="actions__item-text">14 и 15 февраля в Казани проходила Стретегическая сессия с руководящим
                составом нашей компании. Это уже восьмая по счёту стратегическая сессия. Напомним, что первая сессия
                проходила также в Казани с 29-31 января 2016 года.
              </div>
              <span class="actions__item-more">Подробнее</span>
              <span class="actions__item-date">31 марта 2020</span>
            </a>
          </div>
          <?php include('partials/footer-nav.php'); ?>
        </div>
      </div>
    </div>
  </main>
<?php include('partials/footer.php'); ?>