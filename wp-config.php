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
define('DB_NAME', 'undercover');

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
define('AUTH_KEY',         'dI0)I_g|m-)I/f%56ukHCXiL/5Cp^ZjD6Le^~?1uwc/n`./z5Lu/*lbVlsN0g3[U');
define('SECURE_AUTH_KEY',  'Epq=+4/#Zt5{ahsRNK.~GiQ1q7-FLfx0vUw}KSX(*s>WeeJ9m1;4gX|!12G<kjC`');
define('LOGGED_IN_KEY',    ':3AlDa/AF:<@j;#zUB[Bq8ZpNX[j%,LHfNILtDNgg46<fx9O.xct0TFLbn)GvjaV');
define('NONCE_KEY',        'Yw_~YXC3>j5#,uY|RdEibXeJ01J}sZ%g [+vt}+@3%DAXvtdKHg])u{}l<M=tA 9');
define('AUTH_SALT',        '`=R/]FFzVH4A4B^C8vzXX8Ls_}hT<$,}y11Oaapxd<3i*pR|p%y[z)^O+ ,zf{Bn');
define('SECURE_AUTH_SALT', 'uYqB=cdUsQNx+*adL5LL;%k}PSV3,ST#VbMJ+;W3B,AFdqARxoqP1-&mbt(x;A}(');
define('LOGGED_IN_SALT',   '0J/P6KhttUz^k?||z0XGY%$ef*RC$m}2}AvXDi7}I(>hFY6mkd,,h*Z}41Tm=pdR');
define('NONCE_SALT',       'pg)@ib:&w,xn)C%f/u*(O6H$%v<v[fq9e0TM}*Tf!,&D] `geI#uWaqA:f1y]6l]');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
