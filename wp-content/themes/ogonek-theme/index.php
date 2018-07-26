<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php bloginfo('description'); ?></title>

  <!-- <link rel="preload" href="<?php echo bloginfo('template_url'); ?>/assets/css/style.min.css" as="style">
  <link rel="preload" href="<?php echo bloginfo('template_url'); ?>/assets/fonts/MuseoSansCyrl-100/MuseoSansCyrl-100.woff2" as="font">
  <link rel="preload" href="<?php echo bloginfo('template_url'); ?>/assets/fonts/MuseoSansCyrl-300/MuseoSansCyrl-300.woff2" as="font">
  <link rel="preload" href="<?php echo bloginfo('template_url'); ?>/assets/fonts/DINBold/DIN-Bold.woff2" as="font">

  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/style.min.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/slider/dist/assets/owl.carousel.min.css" /> -->

  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/fontawesome.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <?php wp_head(); ?>

</head>
<body>

  <div class="hidden" hidden>
    <?php get_template_part('/assets/img/sprite/sprite.svg'); ?>
  </div>

  <?php get_header(); ?>

  <main class="main">
    <section class="banquet-hall">
      <div class="banquet-hall__inner container">

        <div class="banquet-hall__img-wrapper" id="banquet-hall__popup">

          <div id="carouselThird" class="owl-carousel owl-theme">
            <a href="<?php the_field('banquet-hall__img'); ?>"><img class="banquet-hall__img" src="<?php the_field('banquet-hall__img'); ?>" alt="Банкетный холл ресторана Огонек"></a>
            <a href="<?php the_field('banquet-hall__img2'); ?>"><img class="banquet-hall__img" src="<?php the_field('banquet-hall__img2'); ?>" alt="Банкетный холл ресторана Огонек"></a>
            <a href="<?php the_field('banquet-hall__img3'); ?>"><img class="banquet-hall__img" src="<?php the_field('banquet-hall__img3'); ?>" alt="Банкетный холл ресторана Огонек"></a>
            <a href="<?php the_field('banquet-hall__img4'); ?>"><img class="banquet-hall__img" src="<?php the_field('banquet-hall__img4'); ?>" alt="Банкетный холл ресторана Огонек"></a>
            <a href="<?php the_field('banquet-hall__img5'); ?>"><img class="banquet-hall__img" src="<?php the_field('banquet-hall__img5'); ?>" alt="Банкетный холл ресторана Огонек"></a>
            <a href="<?php the_field('banquet-hall__img6'); ?>"><img class="banquet-hall__img" src="<?php the_field('banquet-hall__img6'); ?>" alt="Банкетный холл ресторана Огонек"></a>
          </div>

        </div>

        <div class="banquet-hall__content">
          <div class="banquet-hall__content-wrapper">
            <h2 class="banquet-hall__title"><?php the_field('banquet-hall__title'); ?></h2>
            <p class="banquet-hall__description"><?php the_field('banquet-hall__description'); ?></p>
          </div>
        </div>

      </div>
    </section>

    <section class="menu">
      <div class="container">
        <div class="menu__inner">
          <div class="menu__img-wrapper">
            <img class="menu__img-main" src="<?php the_field('menu__img-main'); ?>" alt="Меню ресторана Огонек">
          </div>

          <div class="menu__info">

            <div class="menu__content">
              <h2 class="menu__title"><?php the_field('menu__title'); ?></h2>
              <p class="menu__description"><?php the_field('menu__description'); ?></p>
            </div>

            <div class="menu__btn">
              <h2 class="visually-hidden">Смотреть меню</h2>
              <a class="menu__btn-view btn" href="<?php echo bloginfo('template_url'); ?>/menu/menu.pdf" target="_blank" data-type="document" id="open-popup">
                <!-- <ul class="popup-gallery">
                  <li><a href="<?php the_field('menu__first'); ?>" rel="alternate"><img class="img-gallery" src="<?php the_field('menu__first'); ?>" alt="" id="menu__first"></a></li>
                  <li><a href="<?php the_field('menu__second'); ?>" rel="alternate"><img class="img-gallery" src="<?php the_field('menu__second'); ?>" alt="" id="menu__second"></a></li>
                  <li><a href="<?php the_field('menu__third'); ?>" rel="alternate"><img class="img-gallery" src="<?php the_field('menu__third'); ?>" alt="" id="menu__third"></a></li>
                  <li><a href="<?php the_field('menu__fourth'); ?>" rel="alternate"><img class="img-gallery" src="<?php the_field('menu__fourth'); ?>" alt="" id="menu__fourth"></a></li>
                </ul> -->
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="dishes">
      <div class="container dishes__wrapper">
        <div class="dishes__info">
          <div class="dishes__inner">
            <h2 class="dishes__title"><?php the_field('dishes__title'); ?></h2>
            <p class="dishes__description"><?php the_field('dishes__description'); ?></p>
          </div>
        </div>
        <div class="dishes__slider">
          <div class="owl-carousel" id="carouselTwo">
            <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel2__img--first'); ?>" alt="Изображение № 1"></div>
            <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel2__img--second'); ?>" alt="Изображение № 2"></div>
            <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel2__img--third'); ?>" alt="Изображение № 3"></div>
            <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel2__img--fourth'); ?>" alt="Изображение № 4"></div>
            <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel2__img--fifth'); ?>" alt="Изображение № 5"></div>
            <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel2__img--sixth'); ?>" alt="Изображение № 6"></div>
            <div><img class="owl-carousel__img" src="<?php the_field('owl-carousel2__img--seventh'); ?>" alt="Изображение № 7"></div>
          </div>
        </div>
        <div class="dishes__img-wrapper" id="image-popups">
          <a class="grid-item" style="background-image: url('<?php the_field('owl-carousel2__img--first'); ?>')" href="<?php the_field('owl-carousel2__img--first'); ?>" data-effect="mfp-zoom-in">
            <img src="<?php the_field('owl-carousel2__img--first'); ?>')" alt="">
          </a>
          
          <a class="grid-item" href="<?php the_field('owl-carousel2__img--second'); ?>" data-effect="mfp-zoom-in" style="background-image: url('<?php the_field('owl-carousel2__img--second'); ?>')">
            <img src="<?php the_field('owl-carousel2__img--second'); ?>')" alt="">
          </a>

          <a class="grid-item" href="<?php the_field('owl-carousel2__img--third'); ?>" data-effect="mfp-zoom-in" style="background-image: url('<?php the_field('owl-carousel2__img--third'); ?>')">
            <img src="<?php the_field('owl-carousel2__img--third'); ?>')" alt="">
          </a>

          <a class="grid-item" href="<?php the_field('owl-carousel2__img--fourth'); ?>" data-effect="mfp-zoom-in" style="background-image: url('<?php the_field('owl-carousel2__img--fourth'); ?>')">
            <img src="<?php the_field('owl-carousel2__img--fourth'); ?>')" alt="">
          </a>

          <a class="grid-item" href="<?php the_field('owl-carousel2__img--fifth'); ?>" data-effect="mfp-zoom-in" style="background-image: url('<?php the_field('owl-carousel2__img--fifth'); ?>')">
            <img src="<?php the_field('owl-carousel2__img--fifth'); ?>')" alt="">
          </a>

          <a class="grid-item" href="<?php the_field('owl-carousel2__img--sixth'); ?>" data-effect="mfp-zoom-in" style="background-image: url('<?php the_field('owl-carousel2__img--sixth'); ?>')">
            <img src="<?php the_field('owl-carousel2__img--sixth'); ?>')" alt="">
          </a>

          <a class="grid-item" href="<?php the_field('owl-carousel2__img--seventh'); ?>" data-effect="mfp-zoom-in" style="background-image: url('<?php the_field('owl-carousel2__img--seventh'); ?>')">
            <img src="<?php the_field('owl-carousel2__img--seventh'); ?>')" alt="">
          </a>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
  <?php wp_footer(); ?>

  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCEuw1cIU15r_up6WgEidIGH2qUuuNuBI&callback=initialize"></script>


</body>
</html>
