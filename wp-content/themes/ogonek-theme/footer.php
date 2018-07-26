<footer class="page-footer">
    <section class="page-footer__about-us about-us">
      <section class="about-us__team team container">
        <div class="team__wrapper">
          <div class="team__outline"></div>
          <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/img/content-img/team-1.jpg" alt="Наша Команда"> -->
          <img src="<?php the_field('team__wrapper--img'); ?>" alt="Наша Команда">
          <h3 class="team__title">Наша команда</h3>
        </div>
      </section>
      <section class="about-us__contacts contacts">
        <div class="contacts__wrapper container">
          <h2 class="contacts__title">Наши Контакты</h2>
          <div class="contacts__address">
            <p class="contacts__address-key">Адрес</p>
            <p class="contacts__address-text"><?php the_field('contacts__address-text'); ?></p>
          </div>

          <div class="contacts__phone">
            <p class="contacts__phone-key">Телефон</p>
            <p class="contacts__phone-value">
              <a class="contacts__phone-link" href="tel:+7 (4932) 39-29-29" rel="nofollow"><?php the_field('info__tel-link'); ?></a>
            </p>
          </div>

          <div class="contacts__social social">
            <p class="contacts__social-key">Соц. сети</p>
            <ul class="social__list social__list--footer">

              <li class="social__item social__item--footer">
                <a class="social__link social__link--fb" href="<?php the_field('social__link--fb'); ?>" target="_blank" aria-label="Переход на наш аккаунт в Фейсбуке">Facebook
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="22" role="img">
                    <use xlink:href="#icon-fb"></use>
                  </svg>
                </a>
              </li>

              <li class="social__item social__item--footer">
                <a class="social__link social__link--insta" href="<?php the_field('social__link--insta'); ?>" target="_blank" aria-label="Переход на наш аккаунт в Интаграмме">Instagram
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" role="img">
                    <use xlink:href="#icon-insta"></use>
                  </svg>
                </a>
              </li>

              <li class="social__item social__item--footer">
                <a class="social__link social__link--vk" href="<?php the_field('social__link--vk'); ?>" target="_blank" aria-label="Переход на наш аккаунт в Вконтакте">Вконтакте
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" role="img">
                    <use xlink:href="#icon-vk"></use>
                  </svg>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </section>
    </section>

    <section class="page-footer__map" id="map" aria-label="map">
      <!-- <?php echo do_shortcode('[wpgmza id="1"]') ?> -->
    </section>
    <section class="page-footer__copyright copyright container">
      <p class="copyright__text">© 2018, Ресторан ОГОНЁК. <br> Все права защищены</p>
    </section>
  </footer>
  