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
define('DB_NAME', 'dhustlerz');

/** MySQL database username */
define('DB_USER', 'dhustlerz');

/** MySQL database password */
define('DB_PASSWORD', 'dhustlerz');

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
define('AUTH_KEY',         '~U/B`tSssK#tgZk_p)Z/cg[XX]Og<F<NyXm<C88R}Mshij[0d00dP)-8&*wqA-k6');
define('SECURE_AUTH_KEY',  '~-`f.SDVgJmCSbJBvTi{bByes*SG[<RttS*2Sk5I/N7[;NuWmjh~sr}r?0s~S:Z@');
define('LOGGED_IN_KEY',    'gFIOhSNtYLTnf:{AnmK`{Zkt!SJ[[wGE#q4CpY.B_!MT14swS6}gct6S7{%.mLj ');
define('NONCE_KEY',        '!HR:?r/F#j]p;Xx/~3jWqdu>a^+7M{@v(w1tb]o.6Wmy$PHss{Kkx9`e6D.J/*j4');
define('AUTH_SALT',        'QK[So93HRJrvq`>OL&4k4{G2T;+h@uTcdp8+6L#{%H~L?q+uJ!g8]7]57a O)Z_%');
define('SECURE_AUTH_SALT', 'tb:W3:PU?6cX}IMpWj? c?98_t=9olLe7O1svWX&4c1g%3na]5JhJs:w~=,O#6h|');
define('LOGGED_IN_SALT',   '/Gw8zXGnxqbp(QNFaN^z+4 w>u~#7NkJu|Vh$eo0:4HK5xY/gkC3U+;W[J7^!`fr');
define('NONCE_SALT',       '2AwZGIp oPiWE_2g,8W{jdX4%pTs|Vx]2*blO5![16~DB8O2.9jHYo,E.Mtfl;ah');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dhustswk_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
