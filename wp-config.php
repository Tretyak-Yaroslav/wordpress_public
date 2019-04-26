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
define('DB_NAME', 'ik240062_wptest');

/** Имя пользователя MySQL */
define('DB_USER', 'ik240062_wptest');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'R3_g2#nyF3');

/** Имя сервера MySQL */
define('DB_HOST', 'ik240062.mysql.tools');

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
define('AUTH_KEY',         '!r1pfPth=$^5)WG/9Curx%L*qQUrZcAlD(+O?LVrMN) TQ_>c7}qIL87*|7kP3j>');
define('SECURE_AUTH_KEY',  '/_gI)K|MBfdnqfC=noRV4J1;|djo|o;Q8#Jm`Vn4}Wpdoj_S:C?4/|nb|IMJ;FT&');
define('LOGGED_IN_KEY',    'SjK&FE5<GLDak$g~yPy`+/tJbNykXxmzsF{#RK7athqT;@-odKC$Q{S+R,5R4wLG');
define('NONCE_KEY',        'bHsV<xiAAtfuKspjsUoCZitz?C<n]B.oE}%[n>aVxz<d^a[Y9e7}y):CdJ}f|M8C');
define('AUTH_SALT',        '`tYf**Z?pr:z9C9.1uNg:O;Z6,(MOxYZF|&H+3Q.&%x#hF(BP uISjCAhXBV:OSd');
define('SECURE_AUTH_SALT', '#8CIAdYw!Wtd#+3uR%HXgVo)>2u=j58|nObYdX{xILy.c#x/RP=UB=-tdLFqVPo=');
define('LOGGED_IN_SALT',   'Q90X(.C 1:ZJ4#_H`Tl#]m;zt# GM9Y..B=uSwjtPs~c!q*NE3si}WJutA8xxU`^');
define('NONCE_SALT',       'GP/$ B-I{U<x/N Ihcw(md_AVTn2(?6X1Yub)([ccI`<)ZM9cnr*;=fQnAPS}~[U');

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
