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
define( 'DB_NAME', 'brazilsinghrittik_db' );

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
define( 'AUTH_KEY',         '.OZKM_qM+=ihTmVC$%tn[0A$-}MfKPrgrh%cci(,4]uajgYlSd-!9Cvww6 DZV%M' );
define( 'SECURE_AUTH_KEY',  '&sKlNY9&q)@AN8I9T}vDrMkSpz>A00s<&06$mh7RR{0ar1#MPE_Ad;E5TT-j=d&P' );
define( 'LOGGED_IN_KEY',    ';vNhDCh;rA0nt@KGD%$rCTk_E|Mfpsl@Icj5D9(#U>)jh,)m> zDg87XU?n L{$O' );
define( 'NONCE_KEY',        '55=ePg~tYWV/Wg$ |JBl6(wC3/ABG8Hf6.8!rg*Xi9fu?&9[!D&28k@?6^j0V]8I' );
define( 'AUTH_SALT',        '!r5tYO?*JUJRPS5OE6Or/~nT1E*P.v^2,i{O:A3HusP*_/2An,2ejJhi!`mSk{&I' );
define( 'SECURE_AUTH_SALT', 'fak8Il):U9,6$QneAt1[q@ *G[8_aiHqqvty[g02}8D?)aU1aM]l/mc?Wfd(fg!t' );
define( 'LOGGED_IN_SALT',   'g2?S%~Wv!mCE{vfy]t2HzfgJXpbqNdCPWKV>=IWY4D-z}rU>Agi88qo# Io|*^N:' );
define( 'NONCE_SALT',       '&z25Z_MJ5BVw[s)KADBJjC&AREXWeB vF!fcAj*);)|Q1InIk`;xh0~!<(.qU@cN' );

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
