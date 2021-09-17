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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'sql11438056' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'sql11438056' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'xvAKbhQyDc' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'sql11.freemysqlhosting.net' );

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
define( 'AUTH_KEY',         'Du+*%Uu/8YaB>nMDC?>Ap#P@{q^]X)pZU,e{9IWJn[lsrDed.GjsI(q?#}M{XeK&' );
define( 'SECURE_AUTH_KEY',  'N=8M/{?!;++81x3NEX3hIKk9Q~?2rD-ctH{-9:N1c<{#I/f|M:+~c*0/^s6gA{?8' );
define( 'LOGGED_IN_KEY',    'GBBgGJKd^;3`Inkq|QSweo1ibj|1FCDWFef(Mfsjfz%($OpUC71[rTIwg#U6v-_Y' );
define( 'NONCE_KEY',        '8LDw>w/{J4LC3%iRPWBx)mUg5}/MR+Ve@1wRKS8SR*95t;xKn=00%X#Pa[&l1`uz' );
define( 'AUTH_SALT',        'WrzE04WL9?mj;-cghq^4BL<<:Sbf72[8;/I!*L~y~hn~sJcT]>m#Ir-+Ru)qfNNF' );
define( 'SECURE_AUTH_SALT', '1vV3XPpu|YL^nYVO xHJxY4gqV[aYzT64z >6*>qtr||/Q}Jm[+^ 8s*0C:Q1`p{' );
define( 'LOGGED_IN_SALT',   '$op1^L,A8-e/R2@IrbNB?q1&d;2BkaT%7r~?3sQ+MK-C/}U~77/v1j,C?pf@Z/Y@' );
define( 'NONCE_SALT',       'ZtpacU}S-gWTi5t{H<&R`u*JV1;muCz8z&mB~.o}*.?7=I)9Zk@L[Kg[iUPgcT}W' );

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
