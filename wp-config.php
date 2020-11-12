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
define( 'DB_NAME', 'wp_local' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp_user' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FTKg$MkG_FVb?FVVI_0dp76:#S?yPxAKGJy(a&EVq<v=>p{5+WM_K4n/1%{kp|gZ' );
define( 'SECURE_AUTH_KEY',  '&jHXa2nXk#ra^kq04DMykdeCD5_~OnrvvNJ=?ORT7{Z`)(;dK}I^e*gOm.889}24' );
define( 'LOGGED_IN_KEY',    'S|?kip;,iMN{a[}r/ .kk41(OyyY):^T0 B1FP!a<d)zZ=5#Rev=-mD2aptX#$_J' );
define( 'NONCE_KEY',        'mWnvGh~U-ckwW^rdI9W38+6|-ohspo/``gNAiREKE-r@@!4[LmWOI&9|su~mFC7W' );
define( 'AUTH_SALT',        'pU`f=V=RHVUpb@a:5.:Fyfhht=Jxn;B!Ful{{3 @5$i&Y>=E);_:`Jurk$gq]0mx' );
define( 'SECURE_AUTH_SALT', '&s9;xP%PE>>/(u1pPkRzNSvg4H]s=|TwueazUH yQP!!lYxBglRI>pp%3h!8tbjn' );
define( 'LOGGED_IN_SALT',   '.GJis$(0^0f$IoFmCd#Gz kP)N$@U2R[%o8RY*i?jBMGz=M(h-(m20/C+3q@~K`J' );
define( 'NONCE_SALT',       'u{O}C% /v9#EN[v98q8o3;zaKY4rQ-[OgMVt-1(xbs?Fn,6_w?@l9@<R:_`:pe,V' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
