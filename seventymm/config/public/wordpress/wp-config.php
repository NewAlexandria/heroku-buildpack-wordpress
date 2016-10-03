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
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

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
define('AUTH_KEY',         'Tb>Qk/jwmig*w:D$?+u|+FNqAzxfc2sUD&-Jm~_f{*um`GH|(!U7f+$5ZbScR|*;');
define('SECURE_AUTH_KEY',  '>*Ed<}t>ddr*43cT:f[|2aza)GFqId:3,x;1X1bJ+e)vGJLO 6%d2VX% .OF4*(#');
define('LOGGED_IN_KEY',    'sqZ7rbd#A9><A!eY?y(t?Jy,Nhi(IhO+Q.;(|A*-wv,uAvKoXP:l]3Bes#-ui!J=');
define('NONCE_KEY',        'qM%Y|Zx;X}@H2-9FnNvh%G5WC-X4]kI%xH}vq+SW:[ia(|&uD+:SX(O]Q%y1-,A=');
define('AUTH_SALT',        'hX*-||Op)VZUl$53Q2+[@)NvF&Mk4iQojd2>MbJXKSHxY,xaMRX6N;)G7+m!jo{:');
define('SECURE_AUTH_SALT', 'x`jm1yu,(mZz]<Wn7;Y&I8aQX>k3GqW&UG&rF4mv Zy&X|CF:JH6]My$+;4hV5[8');
define('LOGGED_IN_SALT',   'xKbnc8W51jT6,}a@8>@|GobDjqIU[O{1T|7(6xA2>O@?@~`H)bD822)S{DLZZ+O,');
define('NONCE_SALT',       '9do#MT!?%Rvxx},| Rcy7T{gF2bDZ90S!cBs2|YqS)w0ShFmTOK$&7_!BWc!;sA@');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
