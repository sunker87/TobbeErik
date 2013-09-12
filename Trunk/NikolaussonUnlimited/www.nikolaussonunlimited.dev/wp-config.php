<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

//ugly
if  (gethostname() == "Erik-Sundells-MacBook-Pro.local")  {
    define('WP_SITEURL', 'http://www.nikolaussonunlimited.dev/');
    define('WP_HOME', 'http://www.nikolaussonunlimited.dev/');

    define('DB_NAME', 'db1177629_nikolausson_dev');
    define('DB_USER', 'u1177629_pw1');
    define('DB_PASSWORD', 'lilalah123');
    define('DB_HOST', '83.168.226.176');
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');

    define('WP_SITEURL', 'http://www.nikolaussonunlimited.dev/');
    define('WP_HOME', 'http://www.nikolaussonunlimited.dev/');
}
//Prod
else {
    define('DB_NAME', 'db1177629_nikolausson_dev');
    define('DB_USER', 'u1177629_pw1');
    define('DB_PASSWORD', 'lilalah123');
    define('DB_HOST', '83.168.227.176'); 
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');                       
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3jyETMQf{ALa#6.2ixq*.PeXq6LHW_5;Dpt_+]apixDHOd:C59O-:#5WletDSZds8');
define('SECURE_AUTH_KEY',  'l~KZSh:C9O-~w#Sls!|Rgds8C4Kz[!|4h-^0QgYo7NFJY,80Fgv${brjz$IYUj3}');
define('LOGGED_IN_KEY',    '*q2IOi;D59P+;#6WmexDTWdt9SKO-]#5hl-t#Shos8NKZ|[81Kw|s_Odo@JNcVo4J');
define('NONCE_KEY',        '}nzr^Ngn$IMEX,<7Iu,r^Mf@}0cro@JNFY,480Jv|^fvnr^MWhap9OVZ|51Gsw|');
define('AUTH_SALT',        'c[J0Gs|@:Zdsz}YnUk4JBFV,4}0cv$}bvn$7MFY,370Jvz^fjyq,QfMb<73IMy>');
define('SECURE_AUTH_SALT', 'Uu.PeXi;E62Iq*y<fu+#SieWm;D6W.2<62etw#Shl-HSLaW_1#5t_[8hwoRgZok0G');
define('LOGGED_IN_SALT',   '$ry<TifXm3E7X.3<7jfux<Tim+HTLIX*;<6u.]5hxpl+HSLa2HALxt.[9lwp~Wlet');
define('NONCE_SALT',       '1N:C81Co~w1dohws9ORg8NGR@}|!0cog!NdgvB7NBR@70Bn@zr!JYf^MbQf{>7By');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
