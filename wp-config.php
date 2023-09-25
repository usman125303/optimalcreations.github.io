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
define( 'DB_NAME', 'optimalcreations' );

/** Database username */
define( 'DB_USER', 'admin2' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'EWp#rK|kaB%vti&[%o5{vRAKN.&t_ew5Yqy:u 4/XLlEONw:&F]kw*a>(^+FK6_s' );
define( 'SECURE_AUTH_KEY',  'hypidcL,alMsP$dhaf!@Q+|28QjWhUkJ/<s{12.C4;b^INi%9UG!!Bv,qZ4msupw' );
define( 'LOGGED_IN_KEY',    '4z|erAep- b|qf<R<Y_ftQ@t>wBtb+JqFkdGBLdV<!F0Darec!vrr.$0Zf ,;I_:' );
define( 'NONCE_KEY',        'w!#H#{kysw-3-/lS._ 4-*$+^z}VEc#YFj`Y9rIx+gu{mdF;P3$W3)yZ>~m2Nv(i' );
define( 'AUTH_SALT',        'e7)>,{21bvWkk[+1^9Xj>56MR(7e?{>F,dB^{VCt6rf{Lga/Rtx~+_xFbhy3(+@U' );
define( 'SECURE_AUTH_SALT', 'Dbmvxyj -uAKAmjYpW:5uNq x{1Ji:B3OizD|ev/jMeIh6jAR9x7sW2!Kf]g^NL}' );
define( 'LOGGED_IN_SALT',   '/i3?P0DN*k~+erC-o)@FJtbgpx@sHt?&#<ZY<%RiKB>&=F<YnkJg]M<vL0{jfM#%' );
define( 'NONCE_SALT',       ':5Ea7((S%Funy~7I1OZe^rh?*v=G7^7:y*2(;GL{DP[X[H(Hi<<8g_9)].}~wJ-7' );

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
