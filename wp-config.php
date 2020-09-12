<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wperfume' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rDe0FPW*h3JC{x,Q7 FaVJW6Vkd6a%,pe;:33mL5-K9fd:V*WC],qu0_lmyGDqeH' );
define( 'SECURE_AUTH_KEY',  '@8&RfI+A$8FNNHNQ-2`z9c3I<)rIK.E|k,}&B!_2XQ#{dx.48WV}h%qgUc=`zI?H' );
define( 'LOGGED_IN_KEY',    'U=dBE=kuzxEk>N$I6Ea(6GRNkaW`0.K_s,cUA7U05X,_PErL<MEfxE;4|O)dCsZe' );
define( 'NONCE_KEY',        ';O|j~`yIO8Gg(qvur{iB@I!-})67||yO[>>)m0w*FZ]IsQwQ~v/E =_U{J ^)-7E' );
define( 'AUTH_SALT',        'X;jV<~k33&W0DF>akfB%M^0a? >RoP7d%w70$sU<+`AF,xq$./or9Dl5*p}Fs!#p' );
define( 'SECURE_AUTH_SALT', '^wwK+Lz4?ZoA:BWExHRJmJVC}!<Tf&Gj~Sq>P||7d:&5t[T@5wLQos-uz.g32aZ2' );
define( 'LOGGED_IN_SALT',   'Yc$26hPud+$0K%^qktaaRWoR=`+q=1:>J%)<@+f7=B+4(T_O4..gCS?Esd R<Ez>' );
define( 'NONCE_SALT',       'OXZ)2VK`i]I0D{L&$%b$!@3jBg]7X/qk*Vsx>K<@th!V-BKhsg5wQty(ziR;67jl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
