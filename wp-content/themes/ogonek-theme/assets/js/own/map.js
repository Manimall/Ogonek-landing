(function (){
  var BGMOBILE_WIDTH = 480;
  var TABLET_WIDTH = 768;
  var SMALL_PIN = {width: 34, height: 44};
  var BIG_PIN = {width: 53, height: 72};
  // var PIN_SIZE = {width: 34, height: 44};

  function debounce(f, ms) {
    var timer = null;

    return function (cb) {
      var onComplete = function () {
        f.apply(this, cb);
        timer = null;
      };
      if (timer) {
        clearTimeout(timer);
      }
      timer = setTimeout(onComplete, ms);
    };
  }

  window.initialize = function() {
    var viewport = document.documentElement.clientWidth || window.innerWidth;
    var mapCenter = viewport < BGMOBILE_WIDTH ? {lat: 56.997321, lng: 40.9806791} : {lat: 56.997766, lng: 40.980881};
    // var pinCenter = viewport < TABLET_WIDTH ? {lat: 56.99802, lng: 40.9811243} : {lat: 56.997766, lng: 40.980881};
    var pinSize = viewport < TABLET_WIDTH ? SMALL_PIN : BIG_PIN;
    var pinPosition = new google.maps.LatLng(56.997399, 40.980868); // 56.997239, 40.980625 // 56.997457, 40.981029 //56.997510, 40.980846
    // var neededZoom = viewport < BGMOBILE_WIDTH ? (17) : viewport < TABLET_WIDTH ? (16) : (17);
    var neededZoom = 17;

    // Координаты центра на карте. Широта: 56.2928515, Долгота: 43.7866641 // 56.997543, 40.980647  ,   lat: 56.99802, lng: 40.9811243
    // var centerLatLng = new google.maps.LatLng(56.994549, 41.011763); 56.997321,40.9806791 (old - 40.9810492, 40.9806791) lat: 56.99802, lng: 40.9811243

    // Обязательные опции с которыми будет проинициализированна карта
    var mapOptions = {
      center: mapCenter, // Координаты центра мы берем из переменной centerLatLng
      zoom: neededZoom
      // zoom: neededZoom               // Зум по умолчанию. Возможные значения от 0 до 21
    };

    // Создаем карту внутри элемента #map
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    // Добавляем маркер
    var image = {
      // url: "/assets/img/others/pinBig.svg",
      url: "/ogonek/wp-content/themes/ogonek-theme/assets/img/others/pinBig.svg",
      scaledSize: pinSize
    };

    var marker = new google.maps.Marker({
      position: pinPosition,               // Координаты расположения маркера. В данном случае координаты нашего маркера совпадают с центром карты, но разумеется нам никто не мешает создать отдельную переменную и туда поместить другие координаты.
      map: map,                             // Карта на которую нужно добавить маркер
      title: "Restaurant Ogonek", // (Необязательно) Текст выводимый в момент наведения на маркер,
      animation: google.maps.Animation.DROP,
      icon: image              // (Необязательно) Путь до изображения, которое будет выводится на карте вместо стандартного маркера
    });
    marker.addListener('click', toggleBounce);
    marker.addListener('mouseover', changeMarkerColor);

    var toggleBounce = function () {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    };

    var changeMarkerColor = function (evt) {
      if (evt.target === marker) {
        marker.style.fill = "yellow";
      }
    };

  google.maps.event.addDomListener(window, 'load', initialize);
  };

  window.addEventListener("resize", debounce(initialize, 1000));
})();
