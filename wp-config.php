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
define( 'DB_NAME', 'cq52950_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cq52950_wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '05030211' );

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
define( 'AUTH_KEY',         ',&PLj(wI#4Byz,(mjeBCv*Zb(.yf=x!3T)S+eB6d_{KfYzH #*|`]4}T$28^(xeG' );
define( 'SECURE_AUTH_KEY',  '5bzG/>r^UJ7_^AneWfCxKRXBSGyn(c->uK}SdTpao/!<2}az5.xuJow@ca),hG@T' );
define( 'LOGGED_IN_KEY',    'lmi+:Y2>%eP)jFgA>e<[XeaMK3(O|u402Jm;CT@6=24c|>PqMW <<Ldyk!h,&*w}' );
define( 'NONCE_KEY',        '0b}#[Lb`1-l7H d]mk6ul<*}R+s#lg^Ia(rD:>v8YMA*N`ck=bC@P7Eg3J+g01iV' );
define( 'AUTH_SALT',        '%/]eq`uU^[a?n!Lx&9xWVjnNa/}<;~7AwSIS,JCNBavgMr*10T)-9QKSkTf85@S5' );
define( 'SECURE_AUTH_SALT', 'PBd#XNg-|`5`&$i!My,6aO5-pdx|/<~s((l-?`W06Q-k)c|D]a ljG`e0RV1Ae~)' );
define( 'LOGGED_IN_SALT',   'P0;Fr;%`F.p:idhuTi7.n-!;%e /Mp<66x;4$dJlEu^t>sE4gg^O:J (4tmiX3;8' );
define( 'NONCE_SALT',       '3K>!$n q%:4jv[zd=W%a[}j282Oh+gvtSJz_YynjbS<n(VHvk{2N6>5MUqi9s9.3' );

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

