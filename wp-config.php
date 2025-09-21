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
define( 'DB_NAME', 'sai' );

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
define( 'AUTH_KEY',         'le0)ed?)d)J7[z8SrM95&lN8[bfqC5K/78HBY~>rMOma{5aqBBTqW/8*W56VL,9b' );
define( 'SECURE_AUTH_KEY',  '1;j(-79Sx:BN%Cj?{_@mk_6T~X#HxE+n:}0gaN}:fS4G<:+yG+[?f$VD?%RRNX!~' );
define( 'LOGGED_IN_KEY',    '!;w//5Uu/2N4U//7[F7|6>*^yNk]j?5CY8YqGxl6]FEJQNtsQ:V:Eq:Xa0u}^1yv' );
define( 'NONCE_KEY',        'A8NmJL_$>+=n%<7NMv.jDYj)Vt%-PdcxD,G0*,DxYI@G/FO,pU&0:tjLAoW4![x2' );
define( 'AUTH_SALT',        'qSSc!CO^Om!zJ jl:H,%6B/Uc%M%KOAGaBn$/|JN]eq@lb?ZFr7}J+Wa3--h s*`' );
define( 'SECURE_AUTH_SALT', 'P4 [Tz+x%7It0^P*JL6!nda%Rf%t3 7L;=U[f%B|!3,(Qf>KI]u+PPu>7%Qj16 z' );
define( 'LOGGED_IN_SALT',   'SVRJt>oYzv;81MWgBNruDu]{Bn6=WYi=3^$r(E?DDKrNQyC)]fmQhnslHn-LqqHh' );
define( 'NONCE_SALT',       'F(j1J1q6DM;j|Dhn2pa!T@ #;}1e#3_zg:K=z{!K_29nN>XDW$M+OMXHJ[^O90<w' );

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
define('FS_METHOD', 'direct');
