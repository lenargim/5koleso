<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main main-bg news">
    <div class="container">
      <div class="breadcrumbs">
        <a href="/">Главная</a>
        <a href="news.php">Вопросы и ответы</a>
      </div>
      <div class="news__wrap">
        <div class="news__side">
          <div class="news__list">
            <a href="news.php" class="news__link">
              <svg>
                <use xlink:href="img/sprite-news.svg#news"></use>
              </svg>
              <span>Новости</span>
            </a>
            <a href="faq.php" class="news__link active">
              <svg>
                <use xlink:href="img/sprite-news.svg#faq"></use>
              </svg>
              <span>Вопросы и ответы</span>
            </a>
          </div>
        </div>
        <div class="news__content">
          <form action="" class="news__search" autocomplete="off">
            <input class="news__search-input" type="text" placeholder="Поиск по вопросам">
            <button type="submit" class="news__search-submit pointer">
              <svg>
                <use xlink:href="img/sprite.svg#search"></use>
              </svg>
            </button>
          </form>
          <div class="news__grid news__grid_short">
            <div class="news__item news__item_short" data-faq="Какой ремонт шин вы делаете? Какой из них самый надежный?">
              <div class="actions__item-title">Какой ремонт шин вы делаете? Какой из них самый надежный?</div>
              <div class="actions__item-text">Ответ менеджера:
                Специалисты сети «5колесо» проводят все виды ремонта шин: ремонт жгутом, грибком, кордовой заплаткой.
                Оптимальный вид ремонта зависит, в первую очередь, от характера повреждений. В любом случае, вам
                понадобится консультация специалиста шиномонтажа. Что касается надежности, то на ремонт шин,
                выполненный в сети «5колесо», действует пожизненная гарантия.
              </div>
              <span class="actions__item-date">31 марта 2020</span>
            </div>
            <div class="news__item news__item_short" data-faq="Какой ремонт шин вы делаете? Какой из них самый надежный?">
              <div class="actions__item-title">Какой ремонт шин вы делаете? Какой из них самый надежный?</div>
              <div class="actions__item-text">Ответ менеджера:
                Специалисты сети «5колесо» проводят все виды ремонта шин: ремонт жгутом, грибком, кордовой заплаткой.
                Оптимальный вид ремонта зависит, в первую очередь, от характера повреждений. В любом случае, вам
                понадобится консультация специалиста шиномонтажа.
              </div>
              <span class="actions__item-date">31 марта 2020</span>
            </div>
            <div class="news__item news__item_short" data-faq="Действуют ли сейчас какие-нибудь скидки на перекидку?">
              <div class="actions__item-title">Действуют ли сейчас какие-нибудь скидки на перекидку?</div>
              <div class="actions__item-text">Ответ менеджера:<br>
                Да, до конца 2019 года перекидка стоит всего 100 рублей при покупке от 2-х шин
                или 2-х дисков любой модели в интернет-магазине “5колесо”.
              </div>
              <span class="actions__item-date">31 марта 2020</span>
            </div>
            <div class="news__item news__item_short" data-faq="Действуют ли сейчас какие-нибудь скидки на перекидку?">
              <div class="actions__item-title">Действуют ли сейчас какие-нибудь скидки на перекидку?</div>
              <div class="actions__item-text">Ответ менеджера:<br>
                Да, до конца 2019 года перекидка стоит всего 100 рублей при покупке от 2-х шин
                или 2-х дисков любой модели в интернет-магазине “5колесо”.
              </div>
              <span class="actions__item-date">31 марта 2020</span>
            </div>
          </div>
          <a href="faq-ask.php" class="news__button button-dark">Задать вопрос</a>
          <?php include('partials/footer-nav.php'); ?>
        </div>
      </div>
    </div>
  </main>
<?php include('partials/footer.php'); ?>