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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bemfh' );

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
define( 'AUTH_KEY',         '#P&+-2Y(&*s>51eS28EU)6JzY{H+Il|ZD9$9VX{;_Kq5 -B!aw%ots+oj>Jzx`vJ' );
define( 'SECURE_AUTH_KEY',  'pmIO(nJ+<,D54b7:9>KlSva,B[b Q7?^zSmoZQ4,&(W4@%HREwSOJ< v:Cc;U5jT' );
define( 'LOGGED_IN_KEY',    '-L)kt3umf%0~j(m?QlZRK;f+|<T9+jL6,Yf#7d=j*./]X<%vP%sFiGP=TcgTdV.:' );
define( 'NONCE_KEY',        'Cna{}6AXztJIG5_;R}q?kkyW6~(k%kX9uJ@M<X406 oBk+PxHN=51hF&|Q4&kGT{' );
define( 'AUTH_SALT',        '}i8!G:?B$;c9uF>rQ38s%!7mC&Vi{3 #9d#9sN8j?T}U,ynUGA*rL+Uu*JxcyArQ' );
define( 'SECURE_AUTH_SALT', 'zB$F]4+O?T]~{iszFysD:)(D9my]ko+/0If1,Y{Z9 `I$zlKgz+LvQRFV%?e 8n5' );
define( 'LOGGED_IN_SALT',   'rUKRXUu_{0OM#y0/y.`s^7wHRH*Y_U5S; it5Ca.rGhWvx9Ia{Gt9%nAMxD+@gcW' );
define( 'NONCE_SALT',       '3m:GOqlY*(%^UBFR9l`BCfMPXe8w0$L$3QC4IC&QnUvq^8Zp,c8m4,/v2k9`k:kM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
