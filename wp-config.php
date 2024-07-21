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
 * * Настройки базы данных
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
define( 'DB_NAME', 'username' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'username' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'cDO-Hr?n(T!0$N6tECkY..e6koG&zbHSv[kBN|o5I,+`YV_-ZJxz4EYMi}r#$<?j' );
define( 'SECURE_AUTH_KEY',  'z.ysKYX[m8q,]<wgA{d]sgo^iFwaO^_&]d+]aVyWE^8_.@ty?_Uf7;4T<QHa.6cw' );
define( 'LOGGED_IN_KEY',    '4fvxEi^2@z+tgGXKGP_pxh]!`$S*Z-Fl6=a0,#Y._CZ,X,f|G&F!DmIE9~M $qr}' );
define( 'NONCE_KEY',        'dHfr[HKEIUnw%{+3SPUD0Bh*-G@$C1UCwm7 y&uiR:vkK*+p2G{#Ex2qJ9v+2ex}' );
define( 'AUTH_SALT',        'eHW6>UBAqP_uO5J4_B{o7Px1eH0Xl;H.^%CoWBL5.,WZN[x!c+9WvgqZ-4g27%~@' );
define( 'SECURE_AUTH_SALT', 'Dzf|M$zD 7LK^Jks0e<*@TtTCB6deT$U2$IzU&sf=thaUVBbd-=LEG*)#q0Mai/q' );
define( 'LOGGED_IN_SALT',   'Vv){ouUrxG0#eEY]BkZb@E!:+SERUI*Z9hFF`2,s1o)RHqgl.I;N(cwu&$Zxd]Mv' );
define( 'NONCE_SALT',       '!I{v=Y-U&q8j_;&5kbDC JS|41rRY7DZ0E.Mb8)h^iH] u^iJGMY6YiC.rVmgC,i' );

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
