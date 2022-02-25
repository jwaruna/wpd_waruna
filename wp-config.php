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
define( 'DB_NAME', 'wpd_waruna' );

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
define( 'AUTH_KEY',         '.4K$>E0MnFg15^pJ4D2]:psl)vI$_H.!-WKJX3p64?)/|T](K66{BRiZakd=:91d' );
define( 'SECURE_AUTH_KEY',  'm@2utR^3z|aTjfVH6?l8_`B@tO8$)cxAo!C+|xkh&AC_HJra b`$vK^+O:cO>Rk8' );
define( 'LOGGED_IN_KEY',    'p%aK}/2_40y/S*R:V-?mqLAuYFutw&R1eg@i>Gk:IQWlsO._r&=VbI9XH;QZPr^]' );
define( 'NONCE_KEY',        'Oa-C)&#:_|ic^,H[&~< !8ALBZA6{aRXAYdeDPm5*q~^i-ds{jHVc!{g!Bp*8lLz' );
define( 'AUTH_SALT',        'c7H?(Jy~j!xV@ty%?tDq!oVKRex}yrN^z.(vUJF6q]2nam%<@jz@}81R* #d4G :' );
define( 'SECURE_AUTH_SALT', 'e$cw3;p<9R8!ndWezp].dyD.npn:zY,X[,8n@Xo%gCb*D.g~H+K<YWlb9sTvuV#u' );
define( 'LOGGED_IN_SALT',   '{+$nC|pe]^_;ghc<l(`ayYNOsUU%2jylQx0A-TTJ3T?o:u:/<k:}.9Rtp+K#i|/5' );
define( 'NONCE_SALT',       '6zvzC3Lw{=n(os~$):=4ZfY$T!7?HfEa[D4tv3{AWgHfQ#`!V;XZwyK;;|8U?L4S' );

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
