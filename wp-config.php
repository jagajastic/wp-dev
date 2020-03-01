<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'udemy');

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
define('AUTH_KEY', 'OGp&5OJAzy3EtS:qpp4tvT3|)R,ec^yu,;:LZeUR@f#t_iX !N :`m=p7WwjP7~4');
define('SECURE_AUTH_KEY', 'O@mcF9%S<U53*Gg;|p.Q*:uUL(J*[P]#[)adT^]ygT]mG*YssYTx1Je&y%5V~hmb');
define('LOGGED_IN_KEY', '@YQK&){:?6oXs/RipRk^{]xs^nSjT0(F]UWNo%@A8!]}uN?uqFIp0lee0hvh68j4');
define('NONCE_KEY', 'H~-K5S5$BuhCR 0AT=x18W}em_:3#!1,S_|q1>PHk=QCYL:Dag+bm%m!sSJLAg<t');
define('AUTH_SALT', '^3+JU2)a` onM189NHdb:nk8.zdV&,?^MLf38gWG*&CloH8duiUXZ_^D@][t/;/x');
define('SECURE_AUTH_SALT', 'F?_+U3}&Mb!$:X ?#?olye9*3J)F-n9k&v%c+,tB!Y!8;?7zu){a3&RGB`4Yy&It');
define('LOGGED_IN_SALT', 'F!PR0z$8=noeN#J2T;t PIR(>2*`!3.4zO?$~33*E,Pb$28OwOmhjoTI=z>{z8`@');
define('NONCE_SALT', 'Pf%r%$bv];6[wUMrg%2wkNBNl:KQOerTg=zHk}4I-fkLLf^wd]c?`|pEW2j|frJ}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
// define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';