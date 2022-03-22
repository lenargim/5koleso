<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="mainpage">
    <div class="mainpage__slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide mainpage__slide mainpage__slide_type1 mainpage__map white-bg">
          <picture>
            <source srcset="img/fake-map-mobile.jpg" media="(max-width:767px)">
            <source srcset="img/fake-map-tablet.jpg" media="(max-width:1279px)">
            <img data-src="img/fake-map.jpg" alt="Шиномонтаж в Казани" class="mainpage__map-img swiper-lazy image">
          </picture>
          <div class="container">
            <div class="mainpage__slide-content content">
              <h2 class="mainpage__map-title title">Шиномонтаж в <span class="city">Казани</span></h2>
              <div class="mainpage__map-text text">
                <p class="mobile">Более 300 точек обслуживания<br>в 14 городах России</p>
                <p class="hide-on-mobile">Более 300 точек обслуживания в 14 городах России: Москва, Казань, Уфа, Нижний
                  Новгород, Самара,
                  Новосибирск, Саратов, Челябинск, Пермь, Воронеж, Ростов-на-Дону, Волгоград, Нижнекамск, Пенза.</p>
                <ul class="hide-on-mobile">
                  <li>Профессиональное обслуживание</li>
                  <li>Только современного оборудование</li>
                  <li>Экспертный подход и внимание к каждой проблеме клиента</li>
                  <li>Начислим кэш-бэк с каждой услуги</li>
                </ul>
              </div>
              <a href="entry.php" class="mainpage__map-button mainpage__slider-button button-red">Записаться онлайн</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide mainpage__slide mainpage__services mainpage__slide_type2">
          <div class="container">
            <div class="mainpage__slide-wrap wrap">
              <div class="mainpage__slide-content content">
                <h2 class="mainpage__services-title title">Услуги <span class="nowrap">и цены</span></h2>
                <div class="mainpage__services-text text">
                  <p class="hide-on-mobile">Любой автомобиль нуждается в шиномонтаже.<br>В том числе и корпоративный.
                    Специально<br>для юридических лиц на балансе которых есть автомобили мы разработали комплексное
                    предложение.</p>
                  <p class="mobile">Любой автомобиль нуждается<br>в шиномонтаже. В том числе<br>и корпоративный...</p>
                </div>
                <a href="services.php" class="mainpage__services-button mainpage__slider-button button-red button">Смотреть
                  все услуги</a>
              </div>
              <div class="mainpage__slide-grid">
                <div class="swiper-wrapper">
                  <a href="services.php" class="mainpage__slide-detailed swiper-slide">
                    <img data-src="img/main-service-1.jpg" alt="Шиномонтаж" class="mainpage__slide-img swiper-lazy">
                    <span class="swiper-lazy-preloader"></span>
                    <div class="mainpage__slide-detailed-info">
                      <h3>Шиномонтаж</h3>
                      <p class="hide-on-mobile">Любой автомобиль нуждается в шиномонтаже. В том числе и корпоративный.
                        Специально для юридических лиц на балансе которых есть автомобили мы разработали комплексное
                        предложение.
                      </p>
                      <span class="more hide-on-mobile">Подробнее</span>
                    </div>
                  </a>
                  <a href="services.php" class="mainpage__slide-detailed swiper-slide">
                    <img data-src="img/main-service-2.jpg" alt="" class="mainpage__slide-img swiper-lazy">
                    <span class="swiper-lazy-preloader"></span>
                  </a>
                  <a href="services.php" class="mainpage__slide-detailed swiper-slide">
                    <img data-src="img/main-service-3.jpg" alt="" class="mainpage__slide-img swiper-lazy">
                    <span class="swiper-lazy-preloader"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide mainpage__slide mainpage__slide_type1 mainpage__corp">
          <img data-src="img/main-corp.jpg" alt="Корпоративным клиентам" class="mainpage__corp-img swiper-lazy image">
          <div class="container">
            <div class="mainpage__slide-content content">
              <h2 class="mainpage__corp-title title">Корпоративным<br>клиентам</h2>
              <div class="mainpage__corp-text text">
                <p>Любой автомобиль нуждается в шиномонтаже. В том
                  числе и корпоративный.
                  Специально для юридических
                  лицна балансе которых есть автомобили мы разработали комплексное предложение.</p>
                <p class="hide-on-mobile">Узнайте что можно получить заключив договор на обслуживание автомобилей в сети
                  шиномонтажных
                  мастерских</p>

              </div>
              <a href="corp.php" class="more">Подробнее</a>
              <a href="entrance-corporate.php" class="mainpage__corp-button mainpage__slider-button button-dark-border">Вход
                для корп. клиентов</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide mainpage__slide mainpage__services mainpage__slide_type2">
          <div class="container">
            <div class="mainpage__slide-wrap wrap">
              <div class="mainpage__slide-content content">
                <h2 class="mainpage__services-title title">Акции</h2>
                <div class="mainpage__services-text text">
                  <p class="hide-on-mobile">
                    Любой автомобиль нуждается в шиномонтаже.<br>В том числе и корпоративный.
                    Специально<br>для юридических лиц на балансе которых есть автомобили мы разработали комплексное
                    предложение.
                  </p>
                  <p class="mobile">Любой автомобиль нуждается<br>в шиномонтаже. В том числе<br>и корпоративный...</p>
                </div>
                <a href="services.php" class="mainpage__services-button mainpage__slider-button button-red button">Смотреть
                  все акции</a>
              </div>
              <div class="mainpage__slide-grid">
                <div class="swiper-wrapper">
                  <a href="services.php" class="mainpage__slide-detailed swiper-slide">
                    <img data-src="img/main-action-1.jpg" alt="Работаем круглосуточно 24/7"
                         class="mainpage__slide-img swiper-lazy">
                    <span class="swiper-lazy-preloader"></span>
                    <div class="mainpage__slide-detailed-info">
                      <h3>Работаем<br>круглосуточно 24/7</h3>
                      <p class="hide-on-mobile">Любой автомобиль нуждается в шиномонтаже. В том числе и корпоративный.
                        Специально<br>для юридических.
                      </p>
                      <span class="more hide-on-mobile">Подробнее</span>
                    </div>
                  </a>
                  <a href="services.php" class="mainpage__slide-detailed swiper-slide">
                    <img data-src="img/main-action-2.jpg" alt="" class="mainpage__slide-img swiper-lazy">
                    <span class="swiper-lazy-preloader"></span>
                  </a>
                  <a href="services.php" class="mainpage__slide-detailed swiper-slide">
                    <img data-src="img/main-action-3.jpg" alt="" class="mainpage__slide-img swiper-lazy">
                    <span class="swiper-lazy-preloader"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide mainpage__slide mainpage__info mainpage__slide_type1">
          <img data-src="img/main-info.jpg" alt="Информация" class="mainpage__corp-img swiper-lazy image">
          <div class="container">
            <div class="mainpage__slide-content content">
              <h2 class="mainpage__corp-title title">Информация</h2>
              <div class="mainpage__corp-text text">
                <p>Любой автомобиль нуждается в шиномонтаже. В том
                  числе и корпоративный.
                  Специально для юридических
                  лицна балансе которых есть автомобили мы разработали комплексное предложение.
                </p>
                <p class="hide-on-mobile">Узнайте что можно получить заключив договор на обслуживание автомобилей в сети
                  шиномонтажных мастерских</p>
              </div>
              <a href="useful.php" class="more">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mainpage__bottom">
        <div class="container">
          <div class="mainpage__bottom-wrap">
            <div class="mainpage__socials">
              <a href="#" class="mainpage__socials-link" target="_blank">
                <svg>
                  <use xlink:href="img/sprite.svg#instagram"></use>
                </svg>
              </a>
              <a href="#" class="mainpage__socials-link" target="_blank">
                <svg>
                  <use xlink:href="img/sprite.svg#facebook"></use>
                </svg>
              </a>
              <a href="#" class="mainpage__socials-link" target="_blank">
                <svg>
                  <use xlink:href="img/sprite.svg#youtube"></use>
                </svg>
              </a>
              <a href="#" class="mainpage__socials-link" target="_blank">
                <svg>
                  <use xlink:href="img/sprite.svg#vk"></use>
                </svg>
              </a>
            </div>
            <div class="mainpage__pagination">
              <div class="mainpage__pagination-numbers">
                <span class="mainpage__pagination-current">01</span>
                <span class="mainpage__pagination-total"></span>
              </div>
              <div class="pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include('partials/footer-swiper.php'); ?>