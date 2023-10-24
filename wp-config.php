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
define( 'DB_NAME', 'pag-web' );

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
define( 'AUTH_KEY',         'ppH#}>f+8HEmZ:J44^{sY1Ja)S|L}qlH[<&+,qb]hu354G5#mH[#`KE0(s9cgq-9' );
define( 'SECURE_AUTH_KEY',  '4s#0Sm0!]^ixY2hBoqg2CV^Bny*/ls|j:{V^^U@^TVwZB-n;70BmDPEZ&3`z]lwj' );
define( 'LOGGED_IN_KEY',    'A{FIGf5z)v)x^/H8L9cd~[_%/u<j^6nIbU&^ZO A[Q?:8#:sp`(`ZZB[IE.YM9|j' );
define( 'NONCE_KEY',        '})X=7)j`u84Yb~w1j%L[0h`lAipxtF%92`P JF56_EJqecQ+h5.Zl-wb5RKUWQXq' );
define( 'AUTH_SALT',        '!+BIXjgxfiY?Z]o~|-t7o9E]]RQ]=:^4k%5wYI^E&;{~&ixe{:|X.`0qx[1Go4:&' );
define( 'SECURE_AUTH_SALT', 'Fr}1+AF&&d.0sx80~O#xNr$e15@6xIWcry}~Ouk>cCj{),?^rxl5xmmC[{3r?yiY' );
define( 'LOGGED_IN_SALT',   ' |Gk`F=tFJbf*)J2N}Wd%-(J+a<=PZ:8t9?,e=I^EV31!!p`^u7Dkb4fi3Hx[-lj' );
define( 'NONCE_SALT',       'W.uAS&]Z2O</lnpW5hHil/gc*k_])-n:<RlxGhg>D$7c*pU$#C|Cpt5LuA5]EAL.' );

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
