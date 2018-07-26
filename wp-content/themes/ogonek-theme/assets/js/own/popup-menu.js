var modalMenu = document.querySelector('.modal-popup');
var menuBtn = document.querySelector('.menu__btn-view');

$(document).ready(function(){
	//Скрыть PopUp при загрузке страницы    
	PopUpHide();
});
//Функция отображения PopUp
function PopUpShow(){
	$('.modal-popup').show();
}
//Функция скрытия PopUp
function PopUpHide(){
	$('.modal-popup').hide();
}

$('.menu__btn-view').on('click', PopUpShow);

// галерея картинок
$('.popup-gallery').magnificPopup({
	delegate: 'a',
	type: 'image',
	tLoading: 'Загрузка изображения #%curr%...',
	gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
	}
});

$('#image-popups').magnificPopup({
	delegate: 'a',
	type: 'image',
	removalDelay: 500, //delay removal by X to allow out-animation
	zoom: {
		enabled: true,
		duration: 300 // animation-duration
	},
	callbacks: {
		beforeOpen: function() {
		// just a hack that adds mfp-anim class to markup 
			this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
			this.st.mainClass = this.st.el.attr('data-effect');
		}
	},
	closeOnContentClick: true,
	gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
	},
	midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  });

  $('#banquet-hall__popup').magnificPopup({
	delegate: 'a',
	type: 'image',
	removalDelay: 500, //delay removal by X to allow out-animation
	zoom: {
		enabled: true,
		duration: 300 // animation-duration
	},
	callbacks: {
		beforeOpen: function() {
		// just a hack that adds mfp-anim class to markup 
			this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
			this.st.mainClass = this.st.el.attr('data-effect');
		}
	},
	closeOnContentClick: true,
	gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
	},
	midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  });
