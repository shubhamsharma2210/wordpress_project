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
define( 'DB_NAME', 'wscubetech' );

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
define( 'AUTH_KEY',         'Cue5,28T~YG e(d$HlWwcZ;@howHB[ 6:Uaw^<{3U#`~3tJm+{+uu8/?jb{j6@L9' );
define( 'SECURE_AUTH_KEY',  's!dwD3 e-:8QvK(/~FHdM<Z~[?IH&ayG:5v1M^b10Ljve:/kSe)5O}]>y1VUPxX]' );
define( 'LOGGED_IN_KEY',    'vZ;c}>x}{x3$1:oYyE2#kB|Y(A8DA}^a pf{?9-IqC9KOc<Jt|}-WYQ>lHkR`x(/' );
define( 'NONCE_KEY',        'u!_k-=DZz$|@NjHpNRdPRL6u|r|<K4v[S8YFjjh :Z#a2/,lHtHNOz%#(mt&nI3i' );
define( 'AUTH_SALT',        'rH.cu|O[VZbc=~Q48=&hnhhbi^MvE4Lk?b!gZTh$A$?l]Wc5J1gfNC$|W,z1STyo' );
define( 'SECURE_AUTH_SALT', '^3^Az),p`.=Z/kPKaL~4k#8bdab=1K4EA5|`Cw>jCn$zS;WTs9$92cOP#t5Fa4pg' );
define( 'LOGGED_IN_SALT',   '~xj^URy,wF21eA+I.uz{9+Nrwr5ZTC49;xZ+u[Zqe?JQD,Y?r4Y} $A<,),37{Z6' );
define( 'NONCE_SALT',       'TV{?i]5+g!VL5M+87kgf6Tb@#0Q3v9#H224]/ <d7:AYAz@W$ |+RBio,O:PgVT-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
