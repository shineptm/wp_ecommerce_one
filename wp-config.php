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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ZF}<xKFl~ m&6YiVP?4Zxjeut<u^Q6e W6N70%Qt6`t~Lxxy-}6ay.%[YFL4,cRB' );
define( 'SECURE_AUTH_KEY',  '5BpGUCu$D`4$5PTXP(ob+AWMI,V>Cm>mPEAaJ2cs(<xaW!|%h /(mVWz&rM$2B)C' );
define( 'LOGGED_IN_KEY',    '@99h=sFW.[kif?:-B&=M]zGgH>:384J1;r}?{peQ9O!4AiqcVhNvfXy!9VkiY2LV' );
define( 'NONCE_KEY',        '3!_DNDM{<Wx;[@}a39P21SYL S>9=ncS4p[z Q|M]Pv9,Z-)]bEjpVO`S=.Vx>Ot' );
define( 'AUTH_SALT',        '$9iz*?NLvzF`rSwik%J~X@n#Re4Eh1[/MC>7Wgao>=7S@H^zBIu!^V],8h|6%<ZG' );
define( 'SECURE_AUTH_SALT', 'vc8HhB}?8Ie,?EB?6G~JTG^PSH-bHL`KzstN$pqp1fL[`WKw;D8gb`>14_iQr.3N' );
define( 'LOGGED_IN_SALT',   'JL(c,G&x) bY*#@%y[1h[@i:Bq&gS]Fw(1%Lgh<nIx`P%,e?2~a2;w*T1[Mt ;J[' );
define( 'NONCE_SALT',       ')dFC6G<bK^f4Acj+9Eu,&|9MC1?2f: b~W^}@X Gj:yc&uGCZwII:/5pY?2dp? R' );

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
