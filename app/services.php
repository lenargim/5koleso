<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main main-bg services">
    <div class="container">
      <div class="breadcrumbs">
        <a href="/">Главная</a>
        <a href="services.php">Наши услуги</a>
      </div>
      <div class="services__wrap">
        <div class="services__side">
          <div class="services__nav">
            <a href="#service1" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services1"></use>
              </svg>
              <div class="services__nav-text">
                <span>Шиномонтаж</span>
                <span>130 - 230 руб</span>
              </div>
            </a>
            <a href="#service2" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services2"></use>
              </svg>
              <div class="services__nav-text">
                <span>Съем, установка колеса</span>
                <span>120 - 200 руб</span>
              </div>
            </a>
            <a href="#service3" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services3"></use>
              </svg>
              <div class="services__nav-text">
                <span>Балансировка колес</span>
                <span>140 - 230 руб</span>
              </div>
            </a>
            <a href="#service4" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services4"></use>
              </svg>
              <div class="services__nav-text">
                <span>Технологическая мойка колес</span>
                <span>50 руб</span>
              </div>
            </a>
            <a href="#service5" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services5"></use>
              </svg>
              <div class="services__nav-text">
                <span>Накачка азотом</span>
                <span>50 руб</span>
              </div>
            </a>
            <a href="#service6" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services6"></use>
              </svg>
              <div class="services__nav-text">
                <span>Ремонт шины</span>
                <span>500 - 3000 руб</span>
              </div>
            </a>
            <a href="#service7" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services7"></use>
              </svg>
              <div class="services__nav-text">
                <span>Правка диска</span>
                <span>300—4000 руб</span>
              </div>
            </a>
            <a href="#service8" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services8"></use>
              </svg>
              <div class="services__nav-text">
                <span>Сезонное хранение</span>
                <span>300—4000 руб</span>
              </div>
            </a>
            <a href="#service9" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services9"></use>
              </svg>
              <div class="services__nav-text">
                <span>Сезонная смена шин (перекидка)</span>
                <span>300—4000 руб</span>
              </div>
            </a>
            <a href="#service10" class="services__nav-item">
              <svg>
                <use xlink:href="img/sprite-services.svg#services10"></use>
              </svg>
              <div class="services__nav-text">
                <span>Дошиповка зимней шины</span>
                <span>300—4000 руб</span>
              </div>
            </a>
          </div>
        </div>
        <div class="services__content">
          <div class="services__item" id="service1">
            <h2>Шиномонтаж</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R12 — R14</td>
                      <td>130 руб</td>
                    </tr>
                    <tr>
                      <td>R15 — R16</td>
                      <td>140 руб</td>
                    </tr>
                    <tr>
                      <td>R17 — R19</td>
                      <td>180 руб</td>
                    </tr>
                    <tr>
                      <td>R20 и более</td>
                      <td>230 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Кроссоверы и минивэны</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R13 – R17</td>
                      <td>180 руб</td>
                    </tr>
                    <tr>
                      <td>R18 и более</td>
                      <td>230 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, Соболь, УАЗ</td>
                      <td>200 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <ul class="services__item-extra">
                  <li>Цены на объектах в Москве и МО могут отличаться</li>
                </ul>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services1-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services1-tablet.jpg">
                  <img src="img/services/services1.jpg" alt="Шиномонтаж">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services1-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services1-tablet.jpg">
                  <img src="img/services/services1.jpg" alt="Шиномонтаж">
                </picture>
                <div class="services__item-text">
                  <p>Шиномонтаж — основа для большинства услуг, связанных с сезонной сменой (перекидкой), ремонтом,
                    и диагностикой колес. В определение «шиномонтаж» входят сборка — разборка колеса, то и есть
                    установка
                    и снятие шины на диск.</p>
                  <p>Обращаясь к нам, вы можете быть уверены, что колеса на ваш автомобиль будут установлены
                    с соблюдением всех технологических требований.
                    Мы также рекомендуем следующие дополнительные услуги:
                  <ul>
                    <li>— промазка дисков (устранение негерметичности по ободу диска)</li>
                    <li>— накачка колеса азотом</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service2">
            <h2>Съем, установка колеса</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R12 — R13</td>
                      <td>120 руб</td>
                    </tr>
                    <tr>
                      <td>R14</td>
                      <td>130 руб</td>
                    </tr>
                    <tr>
                      <td>R15</td>
                      <td>140 руб</td>
                    </tr>
                    <tr>
                      <td>R16</td>
                      <td>150 руб</td>
                    </tr>
                    <tr>
                      <td>R17 – R19</td>
                      <td>180 руб</td>
                    </tr>
                    <tr>
                      <td>R20 – R21</td>
                      <td>190 руб</td>
                    </tr>
                    <tr>
                      <td>R22 и более</td>
                      <td>200 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Кроссоверы и минивэны</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R13 – R17</td>
                      <td>180 руб</td>
                    </tr>
                    <tr>
                      <td>R18 – R21</td>
                      <td>190 руб</td>
                    </tr>
                    <tr>
                      <td>R22 и более</td>
                      <td>200 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, Соболь, УАЗ</td>
                      <td>200 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, снятие внутреннего колеса</td>
                      <td>200 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services2-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services2-tablet.jpg">
                  <img src="img/services/services2.jpg" alt="Съем, установка колеса">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services2-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services2-tablet.jpg">
                  <img src="img/services/services2.jpg" alt="Съем, установка колеса">
                </picture>
                <div class="services__item-text">
                  <p>Каждое резьбовое соединение требует строго определенного момента затяжки, рекомендуемого заводом
                    изготовителя для каждой модели автомобиля. Контролировать его можно только с помощью специального
                    динамометрического ключа.Традиционно эту операцию считают очень простой, не требующей каких-либо
                    специальных навыков. Однако все не так просто, как кажется.</p>
                  <p>В нашей сети контрольное докручивание болтов обязательно производится таким ключом — это
                    обеспечивает идеальный уровень затяжки, который не вредит резьбе и при этом надежно фиксирует колесо
                    автомобиля.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service3">
            <h2>Балансировка колес</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R12 — R14</td>
                      <td>140 руб</td>
                    </tr>
                    <tr>
                      <td>R15 — R16</td>
                      <td>170 руб</td>
                    </tr>
                    <tr>
                      <td>R17 — R19</td>
                      <td>180 руб</td>
                    </tr>
                    <tr>
                      <td>R20 и более</td>
                      <td>230 руб</td>
                    </tr>
                    <tr>
                      <td>Оптимизация балансировки</td>
                      <td>+100 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Кроссоверы и минивэны</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R13 – R17</td>
                      <td>180 руб</td>
                    </tr>
                    <tr>
                      <td>R18 и более</td>
                      <td>230 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, Соболь, УАЗ</td>
                      <td>200 руб</td>
                    </tr>
                    <tr>
                      <td>Оптимизация балансировки</td>
                      <td>+100 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services3-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services3-tablet.jpg">
                  <img src="img/services/services3.jpg" alt="Балансировка колес">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services3-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services3-tablet.jpg">
                  <img src="img/services/services3.jpg" alt="Балансировка колес">
                </picture>
                <div class="services__item-text">
                  <p>При движении автомобиля балансировка колес напрямую влияет на работу подвески и трансмиссии.
                    Дисбаланс колес приводит не только к дополнительным тратам на техническое обслуживание ТС, но и на
                    комфорт при езде. Биение колеса — это ударная нагрузка на ступицу и подшипники, на все трущиеся и
                    катящиеся детали.</p>
                  <p>Правильная балансировка колес — одна из основ безопасности, длительности срока службы ходовой части
                    вашего автомобиля и комфорта при езде.
                    Бесплатная проверка на балансировку
                    (со съемом/установкой)
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service4">
            <h2>Технологическая мойка колес</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Услуга</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Технологическая мойка колес</td>
                      <td>50 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services4-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services4-tablet.jpg">
                  <img src="img/services/services4.jpg" alt="Технологическая мойка колес">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services4-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services4-tablet.jpg">
                  <img src="img/services/services4.jpg" alt="Технологическая мойка колес">
                </picture>
                <div class="services__item-text">
                  <p>Мойка колеса — необходимый этап для проведения любого типа шиномонтажных работ. Отсутствие грязи
                    на колесе позволяет сразу верно определить серьезность повреждений и создает условия для точной
                    балансировки. Особенно важно проводить мойку колес перед шиномонтажем в зимний период, когда
                    на внутренней части диска образуются большие наросты из смеси грязи и снега.</p>
                  <p>Чистые колеса — залог максимально высокого качества всех последующих шиномонтажных работ,
                    а в период сезонной смены щин еще и чистоты багажника вашего автомобиля.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service5">
            <h2>Накачка азотом</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Услуга</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Накачка колеса азотом</td>
                      <td>50 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services5-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services5-tablet.jpg">
                  <img src="img/services/services5.jpg" alt="Накачка азотом">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services5-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services5-tablet.jpg">
                  <img src="img/services/services5.jpg" alt="Накачка азотом">
                </picture>
                <div class="services__item-text">
                  <p>Накачка колес азотом — правильное решение для тех, кто заботится о своей безопасности на дороге.
                    Основное преимущество азота в том, что он не содержит частиц, которые снижают долговечность колеса:
                    влага, пыль, масло.</p>
                  <p>Есть несколько причин:
                  <ul>
                    <li>— стабильнее давление в шинах, меньше утечек;</li>
                    <li>— уменьшается шум колес при езде;</li>
                    <li>— шины изнашиваются медленнее и более равномерно;</li>
                  </ul>
                  Бесплатная подкачка или проверка давления колеса (воздух, азот) по карте клиента «5 Колесо»
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service6">
            <h2>Ремонт шины</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R12 — R13</td>
                      <td>120 руб</td>
                    </tr>
                    <tr>
                      <td>R14</td>
                      <td>130 руб</td>
                    </tr>
                    <tr>
                      <td>R15</td>
                      <td>140 руб</td>
                    </tr>
                    <tr>
                      <td>R16</td>
                      <td>150 руб</td>
                    </tr>
                    <tr>
                      <td>R17 – R19</td>
                      <td>180 руб</td>
                    </tr>
                    <tr>
                      <td>R20 – R21</td>
                      <td>190 руб</td>
                    </tr>
                    <tr>
                      <td>R22 и более</td>
                      <td>200 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Кроссоверы и минивэны</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R13 – R17</td>
                      <td>180 руб</td>
                    </tr>
                    <tr>
                      <td>R18 – R21</td>
                      <td>190 руб</td>
                    </tr>
                    <tr>
                      <td>R22 и более</td>
                      <td>200 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, Соболь, УАЗ</td>
                      <td>200 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, снятие внутреннего колеса</td>
                      <td>200 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services6-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services6-tablet.jpg">
                  <img src="img/services/services6.jpg" alt="Ремонт шины">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services6-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services6-tablet.jpg">
                  <img src="img/services/services6.jpg" alt="Ремонт шины">
                </picture>
                <div class="services__item-text">
                  <p>Каждое резьбовое соединение требует строго определенного момента затяжки, рекомендуемого заводом
                    изготовителя для каждой модели автомобиля. Контролировать его можно только с помощью специального
                    динамометрического ключа.Традиционно эту операцию считают очень простой, не требующей каких-либо
                    специальных навыков. Однако все не так просто, как кажется.</p>
                  <p>В нашей сети контрольное докручивание болтов обязательно производится таким ключом — это
                    обеспечивает идеальный уровень затяжки, который не вредит резьбе и при этом надежно фиксирует колесо
                    автомобиля.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service7">
            <h2>Правка диска</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R12 — R13</td>
                      <td>800 руб</td>
                    </tr>
                    <tr>
                      <td>R14</td>
                      <td>1000 руб</td>
                    </tr>
                    <tr>
                      <td>R15</td>
                      <td>1400 руб</td>
                    </tr>
                    <tr>
                      <td>R16</td>
                      <td>1600 руб</td>
                    </tr>
                    <tr>
                      <td>R17</td>
                      <td>1800 руб</td>
                    </tr>
                    <tr>
                      <td>R18</td>
                      <td>2100 руб</td>
                    </tr>
                    <tr>
                      <td>R19</td>
                      <td>2500 руб</td>
                    </tr>
                    <tr>
                      <td>R20</td>
                      <td>2700 руб</td>
                    </tr>
                    <tr>
                      <td>R21</td>
                      <td>3200 руб</td>
                    </tr>
                    <tr>
                      <td>R22 и более</td>
                      <td>3800 руб</td>
                    </tr>

                    </tbody>
                  </table>
                </div>
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Кроссоверы и минивэны</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R13 — R14</td>
                      <td>1000 руб</td>
                    </tr>
                    <tr>
                      <td>R15</td>
                      <td>1400 руб</td>
                    </tr>
                    <tr>
                      <td>R16</td>
                      <td>1700 руб</td>
                    </tr>
                    <tr>
                      <td>R17</td>
                      <td>2000 руб</td>
                    </tr>
                    <tr>
                      <td>R18</td>
                      <td>2300 руб</td>
                    </tr>
                    <tr>
                      <td>R19</td>
                      <td>2700 руб</td>
                    </tr>
                    <tr>
                      <td>R20</td>
                      <td>2900 руб</td>
                    </tr>
                    <tr>
                      <td>R21</td>
                      <td>3400 руб</td>
                    </tr>
                    <tr>
                      <td>R22 и более</td>
                      <td>4000 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, УАЗ</td>
                      <td>1900 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Правка стального диска</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R13 — R14</td>
                      <td>300 руб</td>
                    </tr>
                    <tr>
                      <td>R15 – R17</td>
                      <td>400 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, Соболь, УАЗ</td>
                      <td>500 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services7-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services7-tablet.jpg">
                  <img src="img/services/services7.jpg" alt="Правка диска">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services7-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services7-tablet.jpg">
                  <img src="img/services/services7.jpg" alt="Правка диска">
                </picture>
                <div class="services__item-text">
                  <p>Правка литых дисков достаточно сложна и требует наличия специального оборудования.
                    Мы производим локальный ремонт поврежденного участка литого диска на современном стенде, что
                    позволяет устранить радиальное и боковое биение диска. Длительность реставрации литых дисков
                    напрямую зависит от его сложности, поэтому определяется только после диагностики диска.</p>
                  <p>Правка литого диска начинается с точного определения мест повреждения. Мастер отмечает его мелом и
                    затем фиксирует диск на специальном стенде. Правка производится с помощью гидравлического пресса, а
                    точность работы постоянно контролируется с помощью специальной линейки для выявления геометрии
                    диска.
                    Большинство повреждений дисков поддается полному исправлению, а значит, вы сможете существенно
                    сэкономить на покупке нового.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service8">
            <h2>Сезонное хранение</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R13-15</td>
                      <td>1400 руб</td>
                    </tr>
                    <tr>
                      <td>R16-17</td>
                      <td>1700 руб</td>
                    </tr>
                    <tr>
                      <td>R18-19</td>
                      <td>2000 руб</td>
                    </tr>
                    <tr>
                      <td>R20 и выше</td>
                      <td>2400 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services8-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services8-tablet.jpg">
                  <img src="img/services/services8.jpg" alt="Сезонное хранение">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services8-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services8-tablet.jpg">
                  <img src="img/services/services8.jpg" alt="Сезонное хранение">
                </picture>
                <div class="services__item-text">
                  <p>Мы обеспечиваем надежное хранение зимних и летних шин: на специально оборудованном складе, при
                    оптимальной температуре, влажности и освещенности, в правильном положении.
                    Чтобы получить оставленные на хранение колеса, позвоните нам заранее.
                    К нужному времени колеса доставят со склада на ближайший к вам пункт шиномонтажа.
                    Доверьте хранение шин профессионалам!</p>
                  <p>Бесплатно:
                  <ol>
                    <li>Мойка</li>
                    <li>Упаковка</li>
                    <li>Доставка по требованию клиента в течение 24 часов</li>
                  </ol>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service9">
            <h2>Сезонная смена шин</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R12-R13</td>
                      <td>1560 руб</td>
                    </tr>
                    <tr>
                      <td>R14</td>
                      <td>1600 руб</td>
                    </tr>
                    <tr>
                      <td>R15</td>
                      <td>1800 руб</td>
                    </tr>
                    <tr>
                      <td>R16</td>
                      <td>1840 руб</td>
                    </tr>
                    <tr>
                      <td>R17-19</td>
                      <td>2200 руб</td>
                    </tr>
                    <tr>
                      <td>R20-21</td>
                      <td>2600 руб</td>
                    </tr>
                    <tr>
                      <td>R22 и более</td>
                      <td>2640 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Кроссоверы и минивэны</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>R13-17 (минивен, кроссовер)</td>
                      <td>2200 руб</td>
                    </tr>
                    <tr>
                      <td>R18 – R21 (минивен, кроссовер)</td>
                      <td>2600 руб</td>
                    </tr>
                    <tr>
                      <td>R22 и более</td>
                      <td>2640 руб</td>
                    </tr>
                    <tr>
                      <td>Газель, Соболь, УАЗ</td>
                      <td>2480 руб</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services9-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services9-tablet.jpg">
                  <img src="img/services/services9.jpg" alt="Сезонная смена шин">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services9-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services9-tablet.jpg">
                  <img src="img/services/services9.jpg" alt="Сезонная смена шин">
                </picture>
                <div class="services__item-text">
                  <p>Вы можете заранее записаться на перекидку колес на нашем сайте, и сменить резину без очередей.
                    В сезонную смену шин входят следующие услуги:
                  <ol>
                    <li>Съем/установка 4-х колес</li>
                    <li>Шиномонтаж 4-х колес</li>
                    <li>Лазерная балансировка 4-х колес</li>
                    <li>Цены указаны без учета самоклеящихся грузов, которые используются для балансировки литых
                      дисков.
                    </li>
                  </ol>
                  </p>
                  <p>Сезонная перекидка колес — одно из основных наших услуг. Важно своевременно переходить на зимние
                    шины осенью, и летние шины весной. Если температура 0 градусов и ниже, то самое время переходить на
                    зимние колеса. Когда средняя температура за день больше 5 градусов — то пора ставить летнюю
                    резину.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="services__item" id="service10">
            <h2>Дошиповка зимней шины</h2>
            <div class="services__item-box">
              <div class="services__item-leftside">
                <div class="services__item-leftside-part">
                  <div class="services__item-subtitle">Легковые автомобили</div>
                  <table class="services__item-table">
                    <thead>
                    <tr>
                      <th>Диаметр</th>
                      <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Дошиповка зимней шины</td>
                      <td>20 руб. шип</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <button class="button-red services__item-button">Рассчитать стоимость</button>
                <picture class="services__item-imgtouch">
                  <source media="(max-width:767px)" srcset="img/services/services10-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services10-tablet.jpg">
                  <img src="img/services/services10.jpg" alt="Дошиповка зимней шины">
                </picture>
              </div>
              <div class="services__item-info">
                <picture class="services__item-img img">
                  <source media="(max-width:767px)" srcset="img/services/services10-mobile.jpg">
                  <source media="(max-width:1279px)" srcset="img/services/services10-tablet.jpg">
                  <img src="img/services/services10.jpg" alt="Дошиповка зимней шины">
                </picture>
                <div class="services__item-text">
                  <p>Шипы обязательный атрибут зимней шины. Для суровых зим и ледяных дорог. И наличие шипов на зимней
                    резине залог безопасной езды. Шиномонтаж 5колесо предлагает установить ремонтные шипы, на место
                    вылетевших или обломанных шипов. Ремонтные шипы имеют увеличенную посадочную площадку. Центральный
                    стержень из твердосплавного металла. Современные технологии ремонта, позволят увеличить срок
                    безопасной эксплуатации зимних шин.</p>
                </div>
              </div>
            </div>
          </div>
          <?php include('partials/footer-nav.php'); ?>
        </div>
      </div>
    </div>
  </main>
<?php include('partials/footer.php'); ?>