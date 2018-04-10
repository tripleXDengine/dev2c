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
define('DB_NAME', '2cdb');

/** Имя пользователя MySQL */
define('DB_USER', 'Vladislav');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Bogorogo1');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ' ws)Sr|Fz94(8R;EVr,abU7g99+$>[0[4ZP{XpzE P Egp7PfsKMbz%@ck7OxT:u');
define('SECURE_AUTH_KEY',  '*lZaaIZF2{htc7VBa9G$YY3:GK)_b 2oxcCY^t:!fFMeK_@3:Iz8SiV7;N6R-%nB');
define('LOGGED_IN_KEY',    'v;&#iZQ? PR] EBxpf?aztCP{vkL8|?>s>T:-|Foh-MJ6-Sb+  w0pJFl}@t?0N5');
define('NONCE_KEY',        '$l=[M2C_k-80/EE`%::aOi=J;YOGe3YL>Q?E&;yIi)@Ts$P%E,N~4Z`dQr*{J^8x');
define('AUTH_SALT',        'LB8t7J%H]&*Gj:Bo7x6O*~_els;58}JPB[..jS5<D+uK}NdfnTt&z.e_=Ep8pNeh');
define('SECURE_AUTH_SALT', 'Z`63j0])UB/_pn{D]ihHXkf(FdIpS9yOgZq@%#7Er~]IC~-/EK=7[nE{_`RN+hvU');
define('LOGGED_IN_SALT',   'N6<X#B]c%FE$G3tF2EZPiMxXRI{X{^dK9^qe-FgN8/#:.4REi8gz{iXtpd4L7Nfa');
define('NONCE_SALT',       '_?El&l>z^4kiWEut^p6R!&`lr`y~P4eqfy;n3V(~H:3K>i4P`iEFK*m=Z:Efx3.%');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'xdeng_';

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
