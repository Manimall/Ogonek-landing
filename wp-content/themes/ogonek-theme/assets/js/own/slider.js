$(document).ready(function() {
$('#carouselOne').owlCarousel({
  loop:true, //Зацикливаем слайдер
  margin:10, //Отступ от картинок если выводите больше 1
  nav:false, //Отключил навигацию
  autoplay:true, //Автозапуск слайдера
  smartSpeed:2500, //Время движения слайда
  touchDrag: true, //this one for mobile and planshets
  lazyLoad:true, //Smooth-scroll
  autoplayTimeout:3500, //Интервалы между пролистыванием элементов
  autoplayHoverPause: false, //Останавливает автопроигрывание если навести мышкой (hover) на элемент
  responsive:{ //Адаптация в зависимости от разрешения экрана
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:1
    }
  }
  });
});

$(document).ready(function() {
  $('#carouselTwo').owlCarousel({
    loop:true, //Зацикливаем слайдер
    margin:10, //Отступ от картинок если выводите больше 1
    nav:true, //Отключил навигацию
    autoplay:true, //Автозапуск слайдера
    smartSpeed:3000, //Время движения слайда
    touchDrag: true, //this one for mobile and planshets
    lazyLoad:true, //Smooth-scroll
    autoplayTimeout:6000, //Интервалы между пролистыванием элементов
    autoplayHoverPause: false, //Останавливает автопроигрывание если навести мышкой (hover) на элемент,
    navText: ['<i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>',
              '<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>'],
    responsive:{ //Адаптация в зависимости от разрешения экрана
      0:{
        items:1
      },
      768:{
        items:0
      }
    }
    });
  });

$(document).ready(function() {
  $('#carouselThird').owlCarousel({
    loop:true, //Зацикливаем слайдер
    touchDrag: true, //this one for mobile and planshets
    margin:50, //Отступ от картинок если выводите больше 1
    nav:true, //Отключил навигацию
    autoplay:true, //Автозапуск слайдера
    smartSpeed:3000, //Время движения слайда
    lazyLoad:true, //Smooth-scroll
    autoplayHoverPause: false, //Останавливает автопроигрывание если навести мышкой (hover) на элемент
    autoplayTimeout:5800, //Интервалы между пролистыванием элементов
    navText: ['<i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>',
              '<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>'],
    responsive:{
      0:{
          items:1
      },
      1220:{
        items: 1,
        margin: 90
      }
    }
    });
  });
