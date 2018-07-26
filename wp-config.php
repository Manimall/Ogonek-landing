<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'all-site-2_ogonek');

/** Имя пользователя MySQL */
define('DB_USER', 'all-site-2_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'jDxm3H_U');

/** Имя сервера MySQL */
define('DB_HOST', 'all-site-2.mysql');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/@Yi5ddcnR~3Q(0Wr}#q6VbK!TXl|qN{J#4q2_bVD}|6emD@yR{WHI&}Li$oQR]C');
define('SECURE_AUTH_KEY',  'm[V!eId|!]-mHjZF6 O5G.{G`E+?Qg^^CBVXt*4er|M^6r7|xzJ7M^($N|es}r(P');
define('LOGGED_IN_KEY',    '2SNiBr+IB#N#)iB->)6*8]?9.+rM(}fuO%n%w*yG`w <6~rS-92H4xL}2g[yLc8{');
define('NONCE_KEY',        'V,[Q;m(TkFl-9bN$grLFex>V+I54O6;*4)KLyXhEEn;;!C xK+9+rvlO_]1oC/+]');
define('AUTH_SALT',        'K|~g`F.O&lkUkUVNFVrH>Y3yL qn/I{+8yp[CD;xbq [nI)iBd1wc%4=aWc~_6D=');
define('SECURE_AUTH_SALT', 'H<h0[pBW[G-z.R X8~6#p].#~_v?qNId!rfT234ZVq@q$L4*5OavQmUab[q@ +dD');
define('LOGGED_IN_SALT',   'Wmxe+MJ{5=&phG,:/4Hvu-aekG~(D{8}wEqcqx=4%k~n8{y}B-2h8Y?vv86J-gQv');
define('NONCE_SALT',       'KlAp%d(lrb~Y<+-=tHrCS+`I!dM7%*9!*c}sD0;=v]-WKXI-L|`(%a+ KAI^w:.L');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
