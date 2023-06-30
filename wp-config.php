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
define( 'DB_NAME', 'intranet' );

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
define( 'AUTH_KEY',         '8|A2.?u?*U|63rUl{hc~8/qyJayEckbx@GBkvS`:ZbQXtY[8Yg@yZzt@beMY/&{c' );
define( 'SECURE_AUTH_KEY',  '<wOY wxe3p%`Jgh6@BE b(ngeviola%,e*xsnb OE+sq+w!(E]@w{df8}:;:Z]>)' );
define( 'LOGGED_IN_KEY',    '*.cMlv!U+^N,pJxD,%[l[l6|HdN&ggHJ_mG2VnO%kqrrB(}|>k6KaT8{EQz$#gBW' );
define( 'NONCE_KEY',        'E[,N/f/}JEKcW@h?uprXy`~yS;8nIEfB=3!zrTBDQ}ZEJFKJ_4E@jw4HT]:<^5=W' );
define( 'AUTH_SALT',        'KTh6dj@c<(o5N>!=Bp1mF<1?yR7UgTzA8U p,BN+L;q?/XSnSf>s.+soN{KbPTUw' );
define( 'SECURE_AUTH_SALT', ',o0_:)@SGG]E(b?!aHUkaUsn?0Td29Z4%n=T1gsSSq^yD^dn@v>@:bZXR2l]rfYB' );
define( 'LOGGED_IN_SALT',   '*R#4GJh^HP@!$ jDt%{@xYE}$wUYY:MtayT_|hkk:Q,!es8:5sMY~Ots}}nMZ;r3' );
define( 'NONCE_SALT',       '+2szr!#gq`]I.{jl+XIUbje}qm|gt4^:YJ0<(~?;NeKI]9HH.tFzd}HJ}0$U7:w|' );

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
