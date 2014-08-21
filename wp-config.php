<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`8eKS^+-|Tb{cW?92n3JACG[bi5k4WIl[2(e4yu9&MlO]I8?ZRt&Mb%Icf-NW[0#');
define('SECURE_AUTH_KEY',  ' n3-^!G~]nPf4-pqw.rW{T[z|8Vpi@#jj?)-y+1O]4-,!_yrZ#)aslW$(V5K4y9?');
define('LOGGED_IN_KEY',    'sVpeZf-pj6)|6M2m:$5#s^_4$Ge$P:eO3WJWHZGcK9I3+PXA$<uVX&c-7U1c+yg}');
define('NONCE_KEY',        '}@u_IOEE{{Qi4^?u[*BJ*1k1[dd$;Wmh{fsyQ)_;XaM|=6P||*-UMxX{glWBfKst');
define('AUTH_SALT',        'kx(%9;Zf2EQH|BPIZT. C4jLiEtvbM]*Im>JWB4y`i8es8eHzr>=QnvOAeg3Ex-[');
define('SECURE_AUTH_SALT', 'UN`ZHT{$TEyNsTkxP~Qr_g$M@AEM^MI{SIR}f`Hwrws<S{:#:mTV)Tq7*DGog_Lk');
define('LOGGED_IN_SALT',   '${Y#IXUo3+E`-,E[5h|2y&n*ers.X`~$+72$O7hci!)Z/6y)+6yE:79:5~)4u+|`');
define('NONCE_SALT',       'YG1n|B-uFVo|2rDgQ-3l.S{*V!`1UMO>=`lR)hSg/-T<11~V~,T/-d-<mF1R$tEQ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
