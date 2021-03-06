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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+&$En+ouRkqDr;-qfs@u(LIkaqg1rz~`&RX]CDTFAj5Ip(BmXae[FIr9>9^:p.g6');
define('SECURE_AUTH_KEY',  '1{7Syg.T+}L:fFiM$)V?f.E|w{+Q9}X38}0+[NdowR{9lnl%b@-sB|Zr0+*d= ?~');
define('LOGGED_IN_KEY',    'D-]J8z@78}vI]$:}2MOV4bL-!fB)n)o1y)3[o7Ry^LC4m!Af:p;@.,5FI.id};:-');
define('NONCE_KEY',        '-|7CFkvqlVz;MJTSeY|KYDR|*y+=Azzv Tj5d,yzE1OH_i)n;wq:!Lv%S`T0_`|;');
define('AUTH_SALT',        '#zJ~l{K+<//Um^ax_>=`&3P#zLt%@nM%g~-!+SA~r-=37|66Zl]@a}6r+qj2+X.k');
define('SECURE_AUTH_SALT', 'h/p-FS71*cosD`5qT-y0BNBcsoKh9aCtD~m;I+[68grm}tyf%T`w?>g$3{@?oE:5');
define('LOGGED_IN_SALT',   'ksf1b7-2vO.?=CtrDsu+S]Xvzw|vGf=s%iEwu2-aw@2Nn|;YX}?EGmaf3xEE4Lff');
define('NONCE_SALT',       'HDTj00xL,qf|B}@WA-fkD_]4x4@4to=7l4d[yXHB^N-T0W[_CF0}GYLL<VhkUx+.');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
