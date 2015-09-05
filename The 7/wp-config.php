<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'the7');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*+&_BJ%ZH9X:uQff0^PW+^<PQ|tr|I7TG i| Mi,WHjG=;~9~[z>Y|Ee9h[M/-$Z');
define('SECURE_AUTH_KEY',  '!MS`h->:*Bd[N+QTFwf$o!Y6+fNz8$;N,+@iz(e+>(1y@K-,xmzfs-wZ(5SqjKKS');
define('LOGGED_IN_KEY',    '-@CDaZjcKL.|K1d2rGT+b|qni|8)S+.9-~J91-kX/2<RfV1@WsmX+udyLW<I;w i');
define('NONCE_KEY',        'X~B8g??xlkw}/>3QgixMx1f8~p{+(;d|RN$c65<f$^(]_*X;)`k$(^}Cv5#,JUH-');
define('AUTH_SALT',        ';:Rw(G5,x5`H#[R1ZlcWUW{i%$ZYf@Mw`hit31Yr&)LZO+$YEcN_t!r&VA</9K}m');
define('SECURE_AUTH_SALT', 'tku!mM@+fOQ`UJ;5}#Tm}(+ekr(wcNlc,aYez@G-2{-rC|HZXTQen4osr92oO%Je');
define('LOGGED_IN_SALT',   'lQc|E5_|U-(]Y`^nktD*elh@i/`^F|s{quOH!6QS X1/RM,)x^?CYRxw}1e^XJ?&');
define('NONCE_SALT',       '@KkVwJ~kO}N#-E+3CU&)y%=f$%bpPa]ts4xvs?0EMyI#kENA7;Bx1ttqT?k4n/H(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
