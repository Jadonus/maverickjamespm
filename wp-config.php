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
define( 'DB_NAME', 'maverickjamesdb' );

/** Database username */
define( 'DB_USER', 'jadong' );

/** Database password */
define( 'DB_PASSWORD', 'psalm231' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:8889' );

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
define( 'AUTH_KEY',         ')!U:1xu6#0EW3(OgB5mpdYZhte0^(n]9,1M@GQ=cgj[<{2e=1i<v=t#7^/J#pG7l' );
define( 'SECURE_AUTH_KEY',  '(!hFn@[|yT >1F ^<PgWCRLE3L5Tkt:7_#jh% PPr6~!:%}#u}S3[`R-++/T=+Vp' );
define( 'LOGGED_IN_KEY',    'A_s[!KM[A9HsjT4j~zGp12/1[O%J)Fx4S%je=I]RR{*qnhD3*^,AZ86zZp[;[N|U' );
define( 'NONCE_KEY',        '4zRX|L@<GWeeB{SPv!:*W|Sb]O&--@;ojz}{&1B-;C2&AXv@=qhtICkIGZ|,5XS-' );
define( 'AUTH_SALT',        'wG46bOWtHWI%q7:<IOTrj-e/#MG/U>rj7ojpa}>_}IPQEnKdI)o6XlJc/.]9uTq{' );
define( 'SECURE_AUTH_SALT', 'N.AtDyVGygcamzB>>+.c-f8bn6!wlZE^3vp-6E8EA9ZHi<@w?p>(s~b?;gZ9c{?C' );
define( 'LOGGED_IN_SALT',   '{ Y]t5+F}t&KoSX:wDZ}#ZN]0Dxnk7][I+Ly?lUsch9+bf/4B[gSzl.8@%>xvA=a' );
define( 'NONCE_SALT',       'ElAXn$RMww`(SehDP^F(!bz([g~NQy ~,Gs/Nd)!R$2HSX[w@)UYW`[2^@a_Nwf=' );

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
