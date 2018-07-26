<?php

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'ogonek_theme_styles' );
add_action('wp_enqueue_scripts', 'ogonek_theme_scripts');
// add_action('wp_enqueue_scripts', 'ogonek_theme_preloads');

// function ogonek_theme_preloads() {
// 	wp_enqueue_style( 'preload', get_stylesheet_uri() );
// 	wp_enqueue_style( 'ms100', get_template_directory_uri() . '/assets/fonts/MuseoSansCyrl-100/MuseoSansCyrl-100.woff2' );
// 	wp_enqueue_style( 'ms300', get_template_directory_uri() . '/assets/fonts/MuseoSansCyrl-300/MuseoSansCyrl-300.woff2' );
// 	wp_enqueue_style( 'DINBold', get_template_directory_uri() . '/assets/fonts/DINBold/DIN-Bold.woff2' );
// }

function ogonek_theme_styles() {
	wp_enqueue_style( 'slider-style', get_template_directory_uri() . '/assets/slider/dist/assets/owl.carousel.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
	wp_enqueue_style( 'popup-menu', get_template_directory_uri() . '/assets/css/popup.css');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'leclick-style', get_template_directory_uri() . '/leclick/reservation/css/style.css');
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function ogonek_theme_scripts() {
	// отменяем зарегистрированный jQuery
	wp_deregister_script( 'jquery' );
	// wp_register_script( 'jquery', 'src="js/min/util/jquery 3.3.1.min.js');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/min/util/jquery 3.3.1.min.js' );

	wp_enqueue_script( 'owlCarousel', get_template_directory_uri() . '/assets/slider/dist/owl.carousel.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/util/magnific-popup.js', array('jquery'), null, true);

	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/own/slider.js', array('jquery'), null, true);
	wp_enqueue_script( 'map', get_template_directory_uri() . '/assets/js/own/map.js', array('jquery'), null, true);

	wp_enqueue_script( 'picturefill', get_template_directory_uri() . '/assets/js/min/util/picturefill.min.js', array('jquery'), null, true);

	wp_enqueue_script( 'popup-menu', get_template_directory_uri() . '/assets/js/own/popup-menu.js', array('jquery'), null, true);

	wp_enqueue_script( 'leclick-script', get_template_directory_uri() . '/leclick/reservation/js/all.in.one.js', array('jquery'), null, true);
}

// allow SVG uploads
add_filter( 'upload_mimes', 'upload_allow_types' );
function upload_allow_types( $mimes ) {
	// разрешаем новые типы
	$mimes['svg']  = 'image/svg+xml';
	$mimes['doc']  = 'application/msword'; 
	$mimes['woff'] = 'font/woff';
	$mimes['psd']  = 'image/vnd.adobe.photoshop'; 
	$mimes['djv']  = 'image/vnd.djvu';
	$mimes['djvu'] = 'image/vnd.djvu';

	// отключаем имеющиеся
	// unset( $mimes['mp4a'] );

	return $mimes;
}

add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}

/**
 * Allow SVG files in Media Library.
 */
function extra_mime_types( $mimes ) {

	$mimes['svg'] = 'image/svg+xml';
  
	return $mimes;
  }
add_filter( 'upload_mimes', 'extra_mime_types' );

add_action('admin_head', 'fix_svg');

add_theme_support('custom-logo');
