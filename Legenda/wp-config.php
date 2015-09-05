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
define('DB_NAME', 'legenda');

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
define('AUTH_KEY',         'N~S)T@P6n?bNbSG:qr#/.1K)sY&JsXK&QH,5nRr/i0%lQuBHPrp&IsX7AZxcS%$7');
define('SECURE_AUTH_KEY',  'f!B0f.J*R7dS~Bl?/>PaGqVBgf5}V+uWC{N*8|xB!~=Gl+@G|LZ+/$OLVwl6J2:W');
define('LOGGED_IN_KEY',    '#D;(E7?Bp>BR?{tGpV,{mZ>}ciu;y?0pqM>3pvYJlM>K:VMt{ DY{Sm_tDjr#$%@');
define('NONCE_KEY',        'ssn>AL9:S{i1B!lk^@=UP-QMY>^9(Uw7%/2EfKDlY6lAO4.g721A[t!d2V!1:DHK');
define('AUTH_SALT',        'dmnUDT8H^&Fjr{Dq2nr>ui+Gp!<JIRn[k9}~/.Szu5xf2 5U9n*xTHG K#]z9pa`');
define('SECURE_AUTH_SALT', '%zGT2!L?}A3)z:k*xh$)E],q+y5@@8H=GtvpTMIJ(/@k<c4wl7^i/E}HB(Uo;C%1');
define('LOGGED_IN_SALT',   'cEfvvFvb.(Mn*asTkUedSmp!6 H%,J[WlnOHy.;<Iz!V^n>}@gF(zjCUwDfelg2Z');
define('NONCE_SALT',       'E?agom!3?Q/i7#}G/$7fVCjf8WAMNvKjv#eUi;bKwxs]SBUH;+4166]`EcT5/bDX');

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
