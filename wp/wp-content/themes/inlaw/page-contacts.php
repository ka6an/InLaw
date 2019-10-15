<?php get_header(); ?>
<?php get_template_part('template/modal-window'); ?>
<header id="header-common">
  <div class="header content">
    <a href="/" class="header__logo">
    </a>
    <?php get_template_part('template/nav'); ?>
  </div>
</header>
<main class="wrap">
  <div class="contact content">
    <div class="title_wrap animation-element">
      <h1 class="service__h1">контакты</h1>
    </div>
    <div class="frame">
      <p class="service__text">Уважаемые посетители, в связи с занятостью в судебных процессах прошу Вас предварительно согласовывать дату и время визита в Бюро по телефону, электронной почте или через форму обратной связи.</p>
    </div>
    <div class="block">
      <div class="offer-parent">
        <div class="offer-child">
          <img src="/wp-content/themes/inlaw/img/contact-1.svg" alt="" class="offer__img">
          <p class="offer__text"><a href="tel:+79219692523" class="offer__link link">+7 (921) 969-25-23</a></p>
        </div>
        <div class="offer-child">
          <img src="/wp-content/themes/inlaw/img/contact-2.svg" alt="" class="offer__img">
          <p class="offer__text"><a href="mailto:postmaster@inlaw.spb.ru" class="offer__link link">postmaster@inlaw.spb.ru</a>
          </p>
        </div>
        <div class="offer-child">
          <img src="/wp-content/themes/inlaw/img/contact-3.svg" alt="" class="offer__img">
          <p class="offer__text"><a href="https://yandex.ru/maps/-/CBeGN8qAoC" target="_blank" class="offer__link link">Спб, Большой пр. П.С., д. 32,<br />
          БЦ "Ината", 2-й этаж</a></p>
        </div>
      </div>
    </div>
    <div id="map" class="map">
    </div>
    <?php get_template_part('template/form'); ?>
  </div>
</main>
<?php get_footer(); ?>