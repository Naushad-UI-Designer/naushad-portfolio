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
define( 'DB_NAME', 'naushadportfolio' );

/** Database username */
define( 'DB_USER', 'naushad' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'k[(7I+;&*q?7qMfLyA?UP~ V>D_cqKx=.}G$+wkiNX5n~4#5)wr Z+~0$cf*:=x5' );
define( 'SECURE_AUTH_KEY',  '011.14/jBsB$y=FXrLH4yRcw+NHQ|9B9MYWEBl&% u8b!)dtL)DpqU:A*%nBi.|K' );
define( 'LOGGED_IN_KEY',    'x>lL!.nsKi4Z@J0:9lw-&!jWloX4}5;z`);GBv$1)jT+zcx#$8hFi|me[#8<ecK+' );
define( 'NONCE_KEY',        '$-kH&`0F%V9#0?$1ymLdF-68$&au1v_eXlIeq#;^Kli*` x(LT|x~C%!Mcdx(_PZ' );
define( 'AUTH_SALT',        'SIkcvgxj@BWX<i-*F+qG4EEj:#D$jduq@:GW#oZLA/9r!veL>?h`0Tz156)=0LXd' );
define( 'SECURE_AUTH_SALT', '6MT>kJdGQ~w4&8+Ijv=plAv!Q@J@yPC$l|t5z9J#7g>Kq:Z;|0r)uF|WYDq2U&<V' );
define( 'LOGGED_IN_SALT',   'dhwJ+(VXZKU~?5~k%=r=5F@zjNOHPX#@BH<hJ(8k$lN``)9g.z%BeIlgl9&`[LGi' );
define( 'NONCE_SALT',       'FdHNTa;RGU1U|&`n$NcLC~0|!}?N7iiZ?Sxx<d3q#)&YU1X/;h4.p`us-aT4>Y%_' );

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
define('FS_METHOD', 'direct');
