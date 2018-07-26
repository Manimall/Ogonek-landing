<header class="page-header page-header--index">
  <div class="page-header__wrapper">
    <section class="page-header__info info">
      <div class="info__wrapper">
        <h1 class="visually-hidden"><?php the_field('main_title') ?></h1>

        <div class="info__logo">
          <a class="info__logo" href="#">
            <?php the_custom_logo( $blog_id ); ?>
            <!-- <picture>
              <source media="(min-width: 1440px)" srcset="<?php echo bloginfo('template_url'); ?>/assets/img/others/logo@2x.png">
              <source media="(min-width: 768px)" srcset="<?php echo bloginfo('template_url'); ?>/assets/img/others/logo@3x.png">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/others/logo.png" alt="Логотип ресторана Огонек" width="231" height="88">
            </picture> -->
            <!-- <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#search-icon">"></use> -->
          </a>
        </div>

        <div class="info__contacts">
          <h2 class="visually-hidden">Наши контакты</h2>
          <p class="info__tel">
            <a class="info__tel-link" href="tel:+7 (4932) 39-29-29" rel="nofollow"><?php the_field('info__tel-link'); ?></a>
          </p>
          <p class="info__working-time"><?php the_field('info__working-time'); ?></p>
        </div>

        <div class="info__btn">
          <h2 class="visually-hidden">Забронировать столик</h2>
          <a class="info__btn-book btn leclick-reservation leclick-reservation-btn leclick-lite-green-btn leclick-medium-btn"
           data-lang="ru" data-params="{&quot;showRestaurantInfo&quot;:true,&quot;showBookingInfo&quot;:true,&quot;hideFooter&quot;:true,&quot;hideAppLinks&quot;:true}"
           href="http://leclick.ru/restaurant/russia/ivanovo/ogonek-rest" data-restaurant-id="10709">Забронировать</a>
        </div>

        <div class="info__social social">
          <h2 class="visually-hidden">Мы в социальных сетях</h2>
          <ul class="social__list social__list--header">

            <li class="social__item social__item--header">
              <a class="social__link social__link--fb" href="<?php the_field('social__link--fb'); ?>" target="_blank" aria-label="Переход на наш аккаунт в Фейсбуке">Facebook
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" role="img">
                  <use xlink:href="#icon-fb"></use>
                </svg>
              </a>
            </li>

            <li class="social__item social__item--header">
              <a class="social__link social__link--insta" href="<?php the_field('social__link--insta'); ?>" target="_blank" aria-label="Переход на наш аккаунт в Интаграмме">Instagram
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" role="img">
                  <use xlink:href="#icon-insta"></use>
                </svg>
              </a>
            </li>

            <li class="social__item social__item--header">
              <a class="social__link social__link--vk" href="<?php the_field('social__link--vk'); ?>" target="_blank" aria-label="Переход на наш аккаунт в Вконтакте">Вконтакте
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" role="img">
                  <use xlink:href="#icon-vk"></use>
                </svg>
              </a>
            </li>

          </ul>
        </div>

        <div class="recommendation">
          <p class="recommendation__text">Нас рекомендуют на</p>
          <a class="recommendation__link" href="<?php the_field('recommendation__link'); ?>" target="_blank">
            <img class="recommendation__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/others/trip-advisor.jpg" alt="trip-advisor">
          </a>
        </div>
      </div>
    </section>

    <section class="page-header__promo">
      <div class="owl-carousel" id="carouselOne">
        <!-- <div><img class="owl-carousel__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/content-img/1.jpg" alt="Изображение № 1"></div>
        <div><img class="owl-carousel__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/content-img/2.jpg" alt="Изображение № 2"></div>
        <div><img class="owl-carousel__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/content-img/3.jpg" alt="Изображение № 3"></div>
        <div><img class="owl-carousel__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/content-img/4.jpg" alt="Изображение № 4"></div>
        <div><img class="owl-carousel__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/content-img/5.jpg" alt="Изображение № 5"></div>
        <div><img class="owl-carousel__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/content-img/6.jpg" alt="Изображение № 6"></div> -->

        <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel__img--first'); ?>" alt="Изображение № 1"></div>
        <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel__img--second'); ?>" alt="Изображение № 2"></div>
        <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel__img--third'); ?>" alt="Изображение № 3"></div>
        <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel__img--fourth'); ?>" alt="Изображение № 4"></div>
        <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel__img--fifth'); ?>" alt="Изображение № 5"></div>
        <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel__img--sixth'); ?>" alt="Изображение № 6"></div>
        <!-- <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel__img--seventh'); ?>" alt="Изображение № 7"></div>
        <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel__img--eight'); ?>" alt="Изображение № 8"></div> -->
      </div>
    </section>
  </div>
</header>
  