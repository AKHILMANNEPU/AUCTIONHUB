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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'auctionhub db' );

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
define( 'AUTH_KEY',         '/1G>FDu ,5NvpLZ,*0i(`}qud`bDIZ!DI@ixw ccwH@xS?c#!QgZW{Em~K=7s^F_' );
define( 'SECURE_AUTH_KEY',  'z5EL5zh%_@T]t:;IX80bYyRMeCA{8~Vv[oWgeYr%$w8K52-B% l}e&|8D>rjzqNp' );
define( 'LOGGED_IN_KEY',    'D!;N~jrbEQ-mj=f7].*|w552VP]dcb|yhdXFsi>7WIl{T~tXX~hi?CUc*85W?,Oc' );
define( 'NONCE_KEY',        'y_ces)4*]*?ysg=KvrPM0!#2$V A-RO=yNJ;p,j5%`i~7Ny-1]%SJ6%4-s<q)4m|' );
define( 'AUTH_SALT',        'r7Nl?7:[M_PZ$J7A~y7l}8V[_Rb_@*pXHpU&,S@CxVcT|!od_&X6I2Qm1|16v9M]' );
define( 'SECURE_AUTH_SALT', ';Wj0{2bR$.J%a3$<k7Jb&&Z91&Mhyqj?#F$%x$&-*lk`%@cRW,Bt,TUJ.}ql(+2`' );
define( 'LOGGED_IN_SALT',   'mh0sAzS`uQ&-Jm>F)0h<4c%?4B%Sh$[`[1=zU!0v4)?Hjq92-0(B6?JrdM#6.u1~' );
define( 'NONCE_SALT',       '%AtxbDH<FUqJ$Qc([&&a8Eoi+lsI?|! fNYbG;1bNz%{TP^x,;_NiLdu/;sI<3*!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
