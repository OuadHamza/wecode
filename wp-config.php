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
define( 'DB_NAME', 'testpp' );

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
define( 'AUTH_KEY',         'M&ubQuEbY%Y)Vo= y.OKN,qML2(l:F)gbw?|5OQR4!M^Iw0IztUm:y_+#*Y116*.' );
define( 'SECURE_AUTH_KEY',  '.E5Dh64K|Uzo,J8QBY0KLc:i1>X%>j&iq;W%(hRJPz<}kz,agy2|4xyhO7$U5Aqs' );
define( 'LOGGED_IN_KEY',    'TzF=_M:uf$5W=lh%Pc&[h+r] `tYGj*>>H-JWQujIr.wNH|,KXN*?7ftFH<WZovS' );
define( 'NONCE_KEY',        'eLToH+9@:(.kI7pA&0iPeT^Nr,~N;Z?H,_~fdvL{^/4$wUcyYJ4e[y&VXmZn8(*4' );
define( 'AUTH_SALT',        ';(*7rd]xHt#xlu%r`T8]<lFu8a&v)qD&-%DH2F6khWm8@, }gw%HwE/Oz1t(:Zxa' );
define( 'SECURE_AUTH_SALT', 'ZG-nykS10-AaV.;Qbu$-$*l,_!f*?*4jzy6a0aI>9WM~j1a1VL-zh.z7 5&Ss0Ua' );
define( 'LOGGED_IN_SALT',   'R#iK1sThByt%Y6o1_Sz<~1)9XSo*cWu5Oi34G+C-<wWCU@%c8EE*Fu^EeD<?e;!&' );
define( 'NONCE_SALT',       'VNVVnZ*H2JaYToEr{x&jKgXjM@8p7(}bMd`TO.a4&QU`%3IFMwUP4[o!v8qNhkt3' );

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
