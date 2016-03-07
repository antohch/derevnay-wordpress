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
define('DB_NAME', 'derevnay');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '&BG,+ws[5TXU@I#P:Gw+kzbO_M);f~6[N.NFbU,4C}k$@I)BY0Y-4]B_m9Y~eKmF');
define('SECURE_AUTH_KEY',  'NV|5K#w}$),`20/O/G7FeF|(+c=)IUt$$*iO+E<eH)fTw4_UYnPW5`0EWtBVa=#]');
define('LOGGED_IN_KEY',    'kI=EBeH3:DWe58>PW^+OzpB@zWHv`@MQj?ohGnW&!J%iGEJn[ljWl#muwvRA,uO1');
define('NONCE_KEY',        'Jc5}n+-I} Yd+|8FcAVZqEN8z,1Urr+qu+e{R.8_]H28*!ABnD=-ef?amIZ=&beB');
define('AUTH_SALT',        '0+3-|&)BA=-=>Z})A.Sx]XNewQ#yj=Zdbm9Gp}{9jy4U5.5*p?D-L-.g~NA}h2}r');
define('SECURE_AUTH_SALT', '_mAgG6F]9zY~v*f6 [[dK)73}Giv;T4}jN@]kg>m hqN%MUZl}Ven}/h6jdKrm6u');
define('LOGGED_IN_SALT',   '9:p~sLWfB>=LNtl@*(?.omNQ4cGl^(Ow?rj_UnpV4&61e[GTevrx2O;`3&SZ)G}+');
define('NONCE_SALT',       'Msa2R3+UFo<mf2E}2_<ju`Fkl+FdU-&N:>kop2W)!~X|@ d?sqm_^AVD7O`,I`L&');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'de_';

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
