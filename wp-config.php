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
define( 'DB_NAME', 'omega' );

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
define( 'AUTH_KEY',         '#mudCa`/(jOt#B3lcd3/ aqLm&fJ0K!h$wicMJEy>zjm/jn3?2MTcNBgE Y!5V-`' );
define( 'SECURE_AUTH_KEY',  'Tj>Azom#j>LQ:s399%./BJ(* *hzPB8MtKt|hrYU.KpN=0xJ8c{7yJeJ4`uM8Qrw' );
define( 'LOGGED_IN_KEY',    'DPS&<]%lE}9o[uU8jy.CB(&#hwmSHHi@i7,EX>ti``?oBTR&d3 Ro{])F^?/rYQ$' );
define( 'NONCE_KEY',        'Jo%ru2;vN[ClI0B`AT%%|#>*s(S?0NOJ*L),O?J=l1ft~n_TR~;m*]m^~HOXX~Pc' );
define( 'AUTH_SALT',        'AJr )Y[l!TGG?$_ XHrP$?A;u6:/}:+LY,eKTjh3EnTjC*xd/fP;&EJ*Urqw8^F^' );
define( 'SECURE_AUTH_SALT', 'v;,5OxY]pFY>0i.Bk0:@aFHOs5sY^lINZ;*K7Y#Bi717fr,]Yc2uDzhpYZhqQ>PV' );
define( 'LOGGED_IN_SALT',   '2w 3q!:mX+[j3Psa%XV&OEV}/*1if0I8_>5_xgmL<bc{$.lVh T?;%VMJFx6P;DE' );
define( 'NONCE_SALT',       'N+i^l=QJS:?Oi%T95*GDB|gll2g&*3mHyQ-AZg0$C?=^9Xd<?a=7H!-Fp<#bUlW*' );

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
