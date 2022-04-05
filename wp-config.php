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
define( 'DB_NAME', 'airpollution_db' );

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
define( 'AUTH_KEY',         '01<r{ j~RQ{X.%6(w;!|T!UGs/UFd(zZMB!^AKG4|6{6~s>H$;Kz2H=J-i>>mn8_' );
define( 'SECURE_AUTH_KEY',  'U5aoeC&M&+!!c|nW:ggKIJRU{v9KfN2NHx<3t.8yVy}W:;f;mFhN>)k=_T.G~mG5' );
define( 'LOGGED_IN_KEY',    'Ll3kxthCAGP~{AZ:FVK!b<s4GZ7lby}liFu Ip`3tHZ 7yIcgD;7 S_6X]RfnCl%' );
define( 'NONCE_KEY',        'kCnw?p$yn+y6=W!T9065qu|/_cQ?tl`tGpQTB:K`o78d$OYyC+,L9~Hdl!T*@{)L' );
define( 'AUTH_SALT',        '-}O%kh=3vT,x(NSY3Kmpr$A.LxM[*ap+l,_:g:IMYObh;0w4wlBl=>JSr2Kd2s-*' );
define( 'SECURE_AUTH_SALT', '[0t22(:pRRS0NC<gE#qmk]/Pslbj:<l_;E27nU&0:+(E*LFKR.GE+L55/[VzcxG-' );
define( 'LOGGED_IN_SALT',   'aB!~I$jVG#.l$6N6KG_CEY>@6vR`fOq};<)n/+/[7>Xri| DLS:?a&iOXg%l Xg@' );
define( 'NONCE_SALT',       'bYREr(Q)Jm5#&z##yn.B M$dMa!N{0oMjW.Q8kFLzR:]4u=w>?:4.o[zPHh:HT `' );

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
