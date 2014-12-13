<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** �?мя базы данных для WordPress */
define('DB_NAME', 'wp_clean');

/** �?мя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '07021987');

/** �?мя сервера MySQL */
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
define('AUTH_KEY',         '^qoiydXS58VnSd|sB3 WJe5;R%.|v/#-PR$TeCA_zH|{`h_dI#@=U+=8!95UXPdi');
define('SECURE_AUTH_KEY',  '+h-.W~b=Va2iPMRxE]@m.2#@9>bX9Kt|T>|Sfw_=rAAPb{o5Q&FGa=!dZ|X8d@>5');
define('LOGGED_IN_KEY',    'u5((]y9QD)$.,k Zdo%;0ZaefuC9|T^a+#I+];`Vj3cg6#CQn/[Nl!t^MF@~S&Df');
define('NONCE_KEY',        '3#;|sM0i`szHe7_Z}$r-rnEx:t2@7o+Yl+QaON)Q74l#qtu&2}H5* i)x-N8g>K#');
define('AUTH_SALT',        'D[F/7$`5*2SLtIHSeU>`QA!o{vTTAgn%|2~0sYXBE=^mxJ:s7+Zs)Y)_CK7[ZgDB');
define('SECURE_AUTH_SALT', 'I oP;{[:/vog+4; |/@QRs^+q$Sf(0t rk4DJij#u5 E+$3+3K@72|mBd.D]@1S=');
define('LOGGED_IN_SALT',   'OrSSqjZ5kq>2#^l?[R>f$b0LIF=YO2=eZK(.1 Z)GMh+KGB!q7YueT$0HM0(Nuw#');
define('NONCE_SALT',       '&;USCb=/)P63?<|zJ=5=r&sQ-` [=G1{[)T,*rwvSCM/`f_o#%hm4lP0^:zTlDaO');

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
 * �?змените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** �?нициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
