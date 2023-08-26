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
define( 'DB_NAME', 'bh-server' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'WelcomeToMySpace' );

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
define( 'AUTH_KEY',         '!a$J_Gww[UuUjLGdhE@tk3by <&IHKL,ktRnk&]SA-1RU2x*1Q<p2fm*XX_hdaLo' );
define( 'SECURE_AUTH_KEY',  'x-V3}P<l.$R?#ZI%?iH,@9-L+e94({i8s(OuDQyZJ|MqvY^oj,+d%YE%E%R #tIE' );
define( 'LOGGED_IN_KEY',    '1NA&~F<MY>}0or/)sJ=?Dxx@AG4D7DJK6dD)M{w;L Eas,n3:zo_6?sa2h:kOd@C' );
define( 'NONCE_KEY',        'W0,D`kso[IEFSI8z,^3qKVx8gK1?xeaz}9+8-.oJ*=G4^_AM=m5Eub(V5jT=Q~9H' );
define( 'AUTH_SALT',        'iC3+>NCh5+Q]>FVOc5#@*=j8~es&,DdD_F!BS(mD9Mg+(Cj+*MC(F35*$9$y&j$p' );
define( 'SECURE_AUTH_SALT', 'QbSpMto#w+ZuSwJDKN@tXBLYi{[Q^Ac~2^GC&C[c0cak(q14Z?%.G6Ps>/-`.^n%' );
define( 'LOGGED_IN_SALT',   'MGBoaz &+bGo-,$ ;2N;IWLk2oqRdO9Ai$EQ3-fAL^40P-GQoD=xe3;iYA0=dSU%' );
define( 'NONCE_SALT',       'cV,e!v?L,L;RnkKr@L.JG~mLc9-q9&[8cH}WtfF<e!M.L=1/eB4)f<|;)chNx]O[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bh_';

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
define('WP_ALLOW_MULTISITE',true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/bh-group/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define("upload_max_filesize","64MB");

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
