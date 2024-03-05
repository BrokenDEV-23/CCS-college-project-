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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'GDY7GEK|D]eN2<K:}1z)%EG8/^R~dQz6F7<O~LO BP#$Ch+6_a$/Uop5&dyvU2{j' );
define( 'SECURE_AUTH_KEY',  'dm?&l*+CAhlL:=O>WWSC..^Wv&zZ$NuUUw G5(|J:,NsEGivsVQLj@a4fj+j}E,,' );
define( 'LOGGED_IN_KEY',    '5SzZ__bOE7lvW-.Wvgo)7ZyId^;y[/0#N+=G7`RTwYYwlqjF$Nd1Fj<+6P7kh?ZS' );
define( 'NONCE_KEY',        ';uqH[zNI3beV,OWb)oE<~H:4s(){!gx?E&2nnj4-ce`b>.NF4scX]@L,f-lf[G~|' );
define( 'AUTH_SALT',        'keurUA|6{s?58,e4}:#J>X:wsm&X}S/ P/cF]SvN*@.Yd?.S~LSYdHr38`F{C6/x' );
define( 'SECURE_AUTH_SALT', '*e bokR(tTf)TpBm2c^k;@Ea:#C>i=#U{(023:7k)&+lQkyz47|Xv, D15{xilNo' );
define( 'LOGGED_IN_SALT',   ':Um|jQ8y-n3g!DE&W3|E9)%C!dnJN4;7DP5Iz-y`LF{g2^:YVf@?EX*XJ]D!Sk3~' );
define( 'NONCE_SALT',       '8mk<.Cf *C+3TIJ*A`+sg?9FmEX3 ]mp2nUgu[NkActii<i+.i%XrLv9hI 3t}G ' );

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
