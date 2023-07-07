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
define( 'DB_NAME', 'nextjs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'f(y$|X:>^M8*+<PE>>N38sYzmqiEoZqPbddl/-i_b$S{l;E9*SLh:,dEE0Ua#D^1' );
define( 'SECURE_AUTH_KEY',  '0a l~dJ0T#`:#8l<ua9o: -krH[q6jKNm3`&Aom3pa*}C>c0EwZ}r!yi)>PrKQn,' );
define( 'LOGGED_IN_KEY',    '+aq8?cg%2?5SDIL/U[,,$1p}*OhEEE5AN-o0[S8W SH:gjv?If7}K1b) 2a]mfTl' );
define( 'NONCE_KEY',        'F}<0*,LO8>V6uw%/5E~vvA+}3Ex#q=@X/pa;&RA(0Z%R_)4Y5]PMW-5Q-3:ZEWsy' );
define( 'AUTH_SALT',        '91nlKF_OY^030R=h_+ kE$v7)G6,5HpEk?Bv#H&~@rk=-<{qH5^ZmL=1SUSKu_o^' );
define( 'SECURE_AUTH_SALT', '.**-UvLWhBN(,@Wo(I)];~:6Fi-/en&!rtC^48RjJhuYTSqT#}aaEjj+kU:EXBJh' );
define( 'LOGGED_IN_SALT',   's(6]cJ),rPx~`H7_(n5Rf4`xlECT9+`P:Su/]zk84_bVRE]&t)U4z5vZBxJ7efH:' );
define( 'NONCE_SALT',       '0f/Fg:=#E[Q+R6Y9|%I/^3cDZMCeG#D<n;g)gM95n|Z.xdFA(IL]ad1VH8:q-5]o' );

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
