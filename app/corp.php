<?php include('partials/head.php');
include('partials/header-registered.php'); ?>
  <main class="main main-bg corp">
    <div class="container">
      <div class="breadcrumbs">
        <a href="/">Главная</a>
        <a href="corp.php">Корпоративным клиентам</a>
      </div>
      <h1>Корпоративным клиентам</h1>
      <div class="corp__wrap">
        <picture class="corp__img img">
          <source srcset="img/corp-mobile.jpg" media="(max-width:767px)">
          <source srcset="img/corp-tablet.jpg" media="(max-width:1023px)">
          <img src="img/corp.jpg" alt="Корпоративным клиентам">
        </picture>
        <div class="corp__info">
          <h2 class="corp__subtitle">Профессиональное обслуживание корпоративного транспорта</h2>
          <div class="corp__text">
            <p>Любой автомобиль нуждается в шиномонтаже. В том числе и корпоративный.</p>

            <p>Специально для юридических лиц на балансе которых есть автомобили мы разработали комплексное предложение.</p>

            <p>Заключив договор на обслуживание автомобилей в сети шиномонтажных мастерских Вы получаете:</p>

            <ul>
              <li>Отсрочку платежа</li>
              <li>Полный комплект бухгалтерских документов</li>
              <li>Индивидуальные программы скидок</li>
              <li>Специальные акции для сотрудников Вашей компании</li>
              <li>Экономия на шиномонтажном обслуживании автомобиля.</li>
              <li>Заполните форму, и отправьте нам на почту <a href="mailto:office@5krf.ru">office@5krf.ru</a> скан подписанного договора. С типовой формой договора Вы можете ознакомиться по ссылке.</li>
            </ul>
          </div>
          <a href="corp-form.php" class="corp__button button-red">Оставить заявку</a>
        </div>
      </div>
      <?php include('partials/footer-nav.php'); ?>
    </div>
  </main>
<?php include('partials/footer.php'); ?>