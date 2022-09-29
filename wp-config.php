<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'business-consulting-company-wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zVo6y&u|7O5>@:BiBBJ.LXFFr@yQmZ~7v]ywH&5Yg2b/F%AnI=+coaXbR mjJ]b]' );
define( 'SECURE_AUTH_KEY',  'X@5%4s7M5NI;?$~(5qUVX0{1>--4U{Kl[Q^n}BW-io;G7Of`V5~[CyFv[{T<9,Xp' );
define( 'LOGGED_IN_KEY',    'sJ~k2fb:#R:ZL6AWf(c73Z0Y5K^h^B|4vk9Z9z#+veH?gXPF%OOkv}Z1a@,r0NHd' );
define( 'NONCE_KEY',        'C4rBEj81hKOLNRsI3mzoofStvT5gt1xFcrB5~B_6Jp6,{L&*.kc{pRun -gg~.h]' );
define( 'AUTH_SALT',        'oonmY}6dbC[`R-dH6I9]NF17E*FvV[jKe/d-b %&{3qu6~Qa~vGz89J2@3sGtM`M' );
define( 'SECURE_AUTH_SALT', 'xmDF<uV98k7|i8C+QAne~~ZDvBF8R+1$}B%9z>{LOvTeOW;( cqjFcNp*YXfA1y:' );
define( 'LOGGED_IN_SALT',   'J^N%Ie#Gx0Gc0bgN>K0QBz{NU!_gQ%Vrx[qv!sM(IXa.a5Y hI W;Ft<q_C{)XVm' );
define( 'NONCE_SALT',       'R!9?IL@v^fv!QNj]j*Y5;_A`wC92~?6+o3s-p>4/L&|1j#~+DC.iyF(dKJ&#cXOm' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
