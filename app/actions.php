<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main main-bg actions">
    <div class="container">
      <div class="actions__wrap">
        <form class="actions__side">
          <div class="actions__side-title desktop">Фильтр:</div>
          <div class="actions__side-title hide-on-desktop toggle-filter">
            <svg>
              <use xlink:href="img/sprite.svg#filter"></use>
            </svg>
            <span>Фильтр</span>
          </div>
          <div class="actions__side-body">
            <div class="actions__side-list">
              <div class="checkbox-row">
                <input type="checkbox" id="actions-filter-all" class="checkbox-input">
                <label for="actions-filter-all" class="checkbox-label pointer">Все</label>
              </div>
              <div class="checkbox-row">
                <input type="checkbox" id="actions-filter-common" class="checkbox-input">
                <label for="actions-filter-common" class="checkbox-label pointer">Общие</label>
              </div>
              <div class="checkbox-row">
                <input type="checkbox" id="actions-filter-register" class="checkbox-input">
                <label for="actions-filter-register" class="checkbox-label pointer">Персональные</label>
              </div>
            </div>
            <div class="actions__side-buttonrow hide-on-desktop">
              <div class="button-dark-border button reset">Сбросить всё</div>
              <button type="submit" class="button-red button">Применить</button>
            </div>
          </div>
        </form>
        <div class="actions__content">
          <h1>Акции</h1>
          <div class="actions__block">
            <h3 class="actions__block-title">Общие акции</h3>
            <div class="actions__block-wrap">
              <a href="action.php" class="actions__item">
                <div class="actions__item-title">Работаем круглосуточно 24/7</div>
                <div class="actions__item-text">Личный транспорт — спасение во время изоляции.
                  Друзья, в ближайшую неделю нам всем крайне важно ограничить контакты с другими людьми. Если
                  все же пришлось выйти, лучше воспользоваться личным транспортом.
                  Далеко не все успели подготовить свои колеса к теплому сезону.
                </div>
                <span class="actions__item-more">Подробнее</span>
                <span class="actions__item-date">31 марта 2020</span>
              </a>
              <a href="action.php" class="actions__item">
                <div class="actions__item-title">Кредит на покупку шин и дисков от Тинькофф банк</div>
                <div class="actions__item-text">Личный транспорт — спасение во время изоляции.
                  Друзья, в ближайшую неделю нам всем крайне важно ограничить контакты с другими людьми. Если
                  все же пришлось выйти, лучше воспользоваться личным транспортом.
                </div>
                <span class="actions__item-more">Подробнее</span>
                <span class="actions__item-date">31 марта 2020</span>
              </a>
              <a href="action.php" class="actions__item">
                <div class="actions__item-title">Оплата услуг картой рассрочки «Халва»</div>
                <div class="actions__item-text">Карта рассрочки «Халва» — это возможность обслуживатся в сети
                  шиномонтажных мастерских “5колесо” в рассрочку без первоначального взноса, комиссий и переплат.
                </div>
                <span class="actions__item-more">Подробнее</span>
                <span class="actions__item-date">31 марта 2020</span>
              </a>
              <a href="action.php" class="actions__item">
                <div class="actions__item-title">Оплата услуг картой рассрочки «Халва»</div>
                <div class="actions__item-text">Карта рассрочки «Халва» — это возможность обслуживатся в сети
                  шиномонтажных мастерских “5колесо” в рассрочку без первоначального взноса, комиссий и переплат.
                </div>
                <span class="actions__item-more">Подробнее</span>
                <span class="actions__item-date">31 марта 2020</span>
              </a>
            </div>
          </div>
          <div class="actions__block">
            <h3 class="actions__block-title">Для зарегистрированных пользователей</h3>
            <div class="actions__block-desc">Персональные акции доступны только для зарегистрированных
              пользователей.<br>
              Зарегистрируйтесь, чтобы обслуживать свой автомобиль стало еще выгоднее!
            </div>
            <div class="actions__block-wrap">
              <a href="lk-sale-detailed.php" class="sale__item">
                <div class="sale__item-big">2=1</div>
                <h3 class="sale__item-title">Два колеса по цене одного</h3>
                <div class="sale__item-more">Подробнее</div>
                <img src="img/action1.png" class="sale__item-img" alt="Два колеса по цене одного">
              </a>
              <a href="lk-sale-detailed.php" class="sale__item">
                <h3 class="sale__item-title">Кредит<br>от Тинькофф банк</h3>
                <div class="sale__item-more">Подробнее</div>
                <img src="img/action2.png" class="sale__item-img" alt="Кредит от Тинькофф банк">
              </a>
              <a href="lk-sale-detailed.php" class="sale__item">
                <div class="sale__item-big">24/7</div>
                <h3 class="sale__item-title">Работаем круглосуточно</h3>
                <div class="sale__item-more">Подробнее</div>
                <img src="img/action1.png" class="sale__item-img" alt="Работаем круглосуточно">
              </a>
              <a href="lk-sale-detailed.php" class="sale__item">
                <h3 class="sale__item-title">Кредит<br>от Тинькофф банк</h3>
                <div class="sale__item-more">Подробнее</div>
                <img src="img/action2.png" class="sale__item-img" alt="Кредит от Тинькофф банк">
              </a>
            </div>
          </div>
          <?php include('partials/footer-nav.php'); ?>
        </div>
      </div>
    </div>
  </main>
<?php include('partials/footer.php'); ?>