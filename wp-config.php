<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'webdevine' );

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
define( 'AUTH_KEY',         'KA5Gd?y,h(3~L1E6Z5Yley&_7F_%Z~Z}][PywtQw~c{ltzy)KV>Q%_f<hbtf]vrZ' );
define( 'SECURE_AUTH_KEY',  ',4IO_@JMC?z&}>/Vnd|6vjL/jH>tN@5S$YO qjcvCCJqXNp7mVl%o=xlcE3QEX2.' );
define( 'LOGGED_IN_KEY',    '+,@~,a&&+d5Dvj%%3~Oz:l5 *S6]qMW<Z%9?GMkVs&K+`m9E(Uy%WZKF^3>LziX3' );
define( 'NONCE_KEY',        '$!</N0]/nh`^HSJU%27nWT9]|=)n?cjd6kq/mV`(~<-n+>j4R|cv;&%y/M>rM=W/' );
define( 'AUTH_SALT',        ':+Ic)3n=cnvTgf-JuVkbR#fARa)h[A0jVjo6]jEE1S37TeBu!tP_6uNG3/Y&:{e$' );
define( 'SECURE_AUTH_SALT', 'seR`:Uc(yzX?:G<WWXq-i4qt`&>v(@X0FM!_Q9x8XEg=rk5.Y+y,/@y/nP[bfQsz' );
define( 'LOGGED_IN_SALT',   's$qxtC)bx3,YFS.2U.4J9s~p@i?}wL}[;vy|U)m=E>9s.@SY~du$jRDd`MM-i$6a' );
define( 'NONCE_SALT',       'V<W;xDxB+@HvPmg{8z%R;7q#@dX%jSOs6zIU`wT|,-K{8N?>G-P,kw%  gYq)Ia[' );

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
