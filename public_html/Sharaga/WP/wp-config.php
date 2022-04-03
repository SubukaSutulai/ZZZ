<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'x90218fj_vova' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'x90218fj_vova' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '35hyR97&' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ac#!KkU=eC-j+T}}/=4]ws,o;.JI[9JjHp vu3:-#nSS+oaG[I$=/0!+dF,GfD*v' );
define( 'SECURE_AUTH_KEY',  ']PJ]FTS</TqmsfK7&+vny%)deK%LcxZ{.HgQ+ed}`dZ<(_yt~f$$<NdE:MdB#<fg' );
define( 'LOGGED_IN_KEY',    '&yTkD-DOH`lrKqH9zj8HU^-y~dimC7,y7kB?(K<%0=I D;8|H[<^tLDZ/bbLCZtb' );
define( 'NONCE_KEY',        '5AUVOm*QO??*vP4?7osdPtF(4sQTIE SNR+6P_d `TqHSeZ2EkqV7mFoP^%G:o!;' );
define( 'AUTH_SALT',        'p0m!Q4Q-|V>x`>xs>q~R:sb(]`VH;jan()Xz#}{ifhTL[Mo+F)B^MnC$D*5yWjnG' );
define( 'SECURE_AUTH_SALT', 'f%k!WVSn9}XhCM<|e{wKi6%g2/wY{ymI@3fIvqZ,<7CnJo+!GSa]`X.{Lfe/4@RS' );
define( 'LOGGED_IN_SALT',   'OUiyF :eaX3yS=Vk#lrI2S!>Sc~)~i+DNxdO&+!1[]sS}@Ba?W9_`iG+Cbv6|Ejk' );
define( 'NONCE_SALT',       ']J.[-pMRcf;^oI%V+7$BV33dj`^bTM4Fbn/:$;2z|1J{n2~m4fr ARQdV-rkuuR~' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
