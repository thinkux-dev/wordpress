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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@Bob09099427146' );

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
define( 'AUTH_KEY',         'snUPP!U&VI`.Lyiu%,^Z`E=Z;(${lA8=OWo0gi|36t`$(+_}fd+kCQI=l]l`Uf5P' );
define( 'SECURE_AUTH_KEY',  'G_E#q/LXx!G2u-P(v]aDzww@uM+~~Va?._%(#_qMH$iCFcaqkf~<dQxzW~ez|u@$' );
define( 'LOGGED_IN_KEY',    'WkVcWz4JW|@c2!!s2D@YT}m7AN?`1?Am@-93HW-FlF]@DY{2;PU{%L`<20[`$E?Y' );
define( 'NONCE_KEY',        'Oo|HoA;g9e<dyIN;6OFU~ >%H;+Ji[b>E}>Nkrb#oY Or:xY@Gz9EcbxQ94|,2^D' );
define( 'AUTH_SALT',        '3Ma~$$~BA*MZkoU9]v6219G<:f5L2!k$yJjpLRg<kL%b&Owb?In<*W[=;{fBF,RO' );
define( 'SECURE_AUTH_SALT', '*fcKq?@k|%T8RU TrBTQc8/<}0BX||xJ$YL_b6x,B_vdtC#gn!4Fk#*v7J`g.Y[w' );
define( 'LOGGED_IN_SALT',   '(pf2pm<zd~-L*QeFLog7DLqthk2VLot=A/l<!G$Z%+IMHt8%N>WSEH_uGX;@[8;l' );
define( 'NONCE_SALT',       '*o5O.AM7>;zVYt@{Xo~D|oFqV+zq_;Mii3Kd1+(3B{Mc22C9E$>kH tSI 6YU>x>' );

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
