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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-test' );

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
define( 'AUTH_KEY',         '*%8S<9PIq8wX&bXa013,pbg6(5<R^T{N{I3.8$wyzZpy2]mLlmAX6u6v]wLKpObm' );
define( 'SECURE_AUTH_KEY',  't2p?NE^1Xe-)1We/=|4R%bcQ3t&uzT{3g3P~SEW_!e^f{*Qj!nXi=EZLh^#@12A$' );
define( 'LOGGED_IN_KEY',    '}f wgFC]3X[sP3HL~mSTbI=EDbxG|IsQ0@>Ja![q)Y]Y)2NI!(1k;xr6v+pyU1Z}' );
define( 'NONCE_KEY',        '11>Tu!=4he9a-h~@+@7Or^4OMEid`(&~]-JH^%rm~e[EE>VatZ}?l8~SsSoYnls0' );
define( 'AUTH_SALT',        'N^{a9^]:jsIl61H#t1?%MeOlk;YAtqtqA4%H3U-*^))A[665~=9gmONzwes(>dGn' );
define( 'SECURE_AUTH_SALT', '8KyhIER.TfQo>@~DO`HY]c6BEos=-UBj8UbwQbS_OUoMHLa1P37S`Acbsi I}{G<' );
define( 'LOGGED_IN_SALT',   '200_efLojJ[2A|RH%7&|uK<v-;jc1-<DlMG5rUo#Bkt[i0DqkoE>-1~A2a?sWuw6' );
define( 'NONCE_SALT',       'WLy0<)5I9TR ZP$y^r1@h^J,[{XHYO52Y8%e9B%v8Hu9lS)-*G.B0Mx{kXi5BTm3' );

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
