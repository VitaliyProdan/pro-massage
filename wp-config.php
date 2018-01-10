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

if (getenv('OPENSHIFT_APP_NAME') != "") {
	/** The name of the database for WordPress */
	define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));
	/** MySQL database username */
	define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
	/** MySQL database password */
	define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
	/** MySQL hostname */
	define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST') . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT'));
	/** These settings can be configured for your local development environment
	and will not affect your OpenShift configuration */
} else {
	define('DB_NAME', 'pro_massage');
	/** MySQL database username */
	define('DB_USER', 'root');
	/** MySQL database password */
	define('DB_PASSWORD', 'root');
	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}


/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v!,{8e+Yy:nh$Px5K2U7<1?6!T=[Oio)fnF%`dNba|]}3Y0g~(d/%k;ui)T[yV/?');
define('SECURE_AUTH_KEY',  '+c@{OzoOFaxD*51*1_D=n*id!q&,$&-:xlX))Cfol+p52[4{RQ!SKCqE1aV^7K=K');
define('LOGGED_IN_KEY',    'eO#;:XKPPuF+!j%>L`;!misNPRpB:*08|o3mH1oj/e1}rwapPC9EDe<<]@UH`d3Q');
define('NONCE_KEY',        '3VzZvhcz>SHTS5w1~),#QL9:[+U}/*:K}AyZW~%ND2$]DR`kx}o:<@TxG#N/ja/k');
define('AUTH_SALT',        'l29W6Aiu!=l]Rd7aT/*F22lDTZZ,weW|+;E<$9wi_+ BF4`tK,)dMQtjE6)6x260');
define('SECURE_AUTH_SALT', '[o#iJ@P/DE1b5]hb}o[gVREE]Tg1VzQi m[]ssojD=z2&c2$oVkBMT`Pl,LF;~$q');
define('LOGGED_IN_SALT',   ']@&0/HA<U<i{hvTHRkBD].`iPf Sf/=8Jde5}0y[T!nv[rG(^LFht$^#J&~qQ&#z');
define('NONCE_SALT',       '[&WK8r]:)@V3+$zH5@4JPFmDNSNqa;Qyif!DFoTj&V&(Vd5Y]pgF0Y}aw[Z 8;t@');

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
