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
define( 'DB_NAME', 'linkeadorweb_db' );

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
define( 'AUTH_KEY',         ',t`RDcu41y4=M5M-${MuO(.^+(8MfIjh_C>(j?wnonK0H@bYFS#xY{`*NYN^ xm?' );
define( 'SECURE_AUTH_KEY',  'W? ]p=sP36i`3/[<V#RGTVvpc(>b1.AFCti{M=_s5===nxw,7]Tn&+|^:=38?XR2' );
define( 'LOGGED_IN_KEY',    'X*,f=dXw`q[o:_uGQ.a_n[H/Bsf#NIoW8v@z}bcgei~&3*.c/>UtA&J]p?`8A2F>' );
define( 'NONCE_KEY',        'u(ik4Y=Hguw!(^HT8T0qsPSsZzd*4ii+1us5?`WiF:Z$xBS[7,{B:jePcPA*9+9J' );
define( 'AUTH_SALT',        'V(I,P3m,Iybf>xOe#)p5,HNJ9J}J_!0/Aj8f=&6V0#<!R?}w?{)[K3m(~J@Ok9##' );
define( 'SECURE_AUTH_SALT', 'wi}yjsPi3Trpoo?4d]KL4D8Qq{p_Tg&Xh$~ttX)|2nh)0|PYCHymXRTK5aD ~*!y' );
define( 'LOGGED_IN_SALT',   '8(k0qS6KaIom7SK9ckb[.WBQxjG_SX,(f<AO%9^qLd}wreWL&eFb^sr@mo.xY}rO' );
define( 'NONCE_SALT',       'EdsVRd`Wc$fG0MG~|o<JxNou7#]~=}QGEqwnA0X$g<[`Vu#vHE%/R3kWdM_ q2R|' );

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
