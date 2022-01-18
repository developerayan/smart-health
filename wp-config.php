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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smart_health_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'nBiFNfE(t%JYJW,8eA*T7/c{Qz:{&@;&-!/Q%4r-$j&K`4FaW#[)V2nrEuY<UE*3' );
define( 'SECURE_AUTH_KEY',  ' B|)<d=v4eUi35hk1vSVT~<r3dff_jLUvlv2Q>oHoW2{9YsUg^{9g|4Ml@]j.8kZ' );
define( 'LOGGED_IN_KEY',    '5Bz$s$otJ(E>#91Ml40C8qU>Hk,N31_U>oeUEd*eg/QD{L:3ha. .WyeTmSQ}p/m' );
define( 'NONCE_KEY',        'M:~LISuR`5khu}mAa.XbejE5h8+fOSXUoQ&{OR%.8gg|bX=q}o+J;!vDP<S jhzC' );
define( 'AUTH_SALT',        'WqY5+xwjOqYb(rub<^~H1E2/ QCnkz/o+p3g]8RaXq9]-=;qE5J#8#/}rimd]<a^' );
define( 'SECURE_AUTH_SALT', 'HxIT03`[E*nX&V1!-z}a<NYNgj1zc)hIogS cCo53V&v)^SAm92VS.|i=Ss;v3dn' );
define( 'LOGGED_IN_SALT',   'E}nLQfUMlC.e{ut&`[(fa{Ktf7V6&+no8rcJ[vcWnhvpHD7bNO(]n&pm=Iu^4X!v' );
define( 'NONCE_SALT',       '`c-{`y*Yo?a-dy|$nKQl/GFA}E2n3Q2{+-Y<h[A.`F7ZEc9n;q5F]K0fdauH:o2;' );

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
