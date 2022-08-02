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
define( 'DB_NAME', 'liya' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'RzyiiygmdnKj8D' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'Vj-+ckbM}7${t$1Sr?uN$gozFRt1v*b}pBZH@xKd853t@sCj%OFT55aR<<l}q^1o' );
define( 'SECURE_AUTH_KEY',  '{6vT5W:%b?5<SE>s1T&$52TMF{/oG!~zPnu])0@ezmeCY5WcZR;W|,C0)CuxSOab' );
define( 'LOGGED_IN_KEY',    'BvOobK$-1TiCI)@vtK?#^Qs-^:%@!Br(GVY9WVC!89v b7Z|Eb[?=p*+Zy437,nZ' );
define( 'NONCE_KEY',        'yD**Z#b@n#h<{6jR0m6!gMpBOsTO|8e9)1@qEPJ Q%Q&:Sy[bvMcnHvV[H?Zl*F8' );
define( 'AUTH_SALT',        'UMX.dsn+R|{DKHl~QJzQUWkOMMa5eWmq~zI:>$v8zycb&^.EL=0BwFidtDjLJ4El' );
define( 'SECURE_AUTH_SALT', 'u~;{7l~;$(0]u-sK-[`U&W~Bn)*<0$]fzBq%fFeE!,y2!vhPY^bs};(5 )tM#LC.' );
define( 'LOGGED_IN_SALT',   'jjf_tvqHD$5EY2_i~;`B*=FVtOK(H-%z7?Rpjx,oAh/lfCWz<?3bL{rzSn+{Fzax' );
define( 'NONCE_SALT',       '<#w}huT,[-02K-(3=`4eDHkLE|sD7GRO9qXw,^JOa9W.z=VYA,YE5oH|<EDXBc >' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
