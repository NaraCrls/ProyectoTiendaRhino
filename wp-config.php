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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-rhino' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '232a99f498de90fe949b93884e0362228e7c1ea84265a672' );

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
define( 'AUTH_KEY',         '3U@iE)gIkSOOnCDgS*dUJ`bBu7koF:lT@.k^ZM/^%uZ}T(_}n*g`-N(oGv4:g9bB' );
define( 'SECURE_AUTH_KEY',  'TNjW|~`1/GH-Z{!|cmVxv-hq7rF3HYmrFFO-v4c7N.WMSSr|mt&&|k5P2xo#_W}~' );
define( 'LOGGED_IN_KEY',    '}S9pZ[~QC7L3L.Gc,qsXTVCRF69XxiTs[9~p&^49H7.n?>KPp[sJ*ka@+NS&m#C+' );
define( 'NONCE_KEY',        'MA:-d??5lXUJ4Ul 9F(,Le4YSw&hToq&->#EBwy6k+/.p!5KSMq<y:DH~<8pS<nH' );
define( 'AUTH_SALT',        'b:6!G D=}E,|nH3tbpUJ4W-Md,cB[>f%HaeEO+6;^Cis`bI18WkVOU#{,@Qxsy8P' );
define( 'SECURE_AUTH_SALT', '~}SG;tZNm5e[RJ7o3Tj<@<=lJ Dq{N}n5%|)yJ1tn HJo-?U|8r:i&i9uP&[2z>~' );
define( 'LOGGED_IN_SALT',   'PhP@E7Q!zFn7>a+wveke6ZsrO-nUnbA u,d^RFT4XfAsX)7}t{e%/V(8]SG3zD}o' );
define( 'NONCE_SALT',       '[v/ITh|?.n*<-.t>^pEg/.3~qgpY]@L2:pLi]blaH]d.#6KPVVh*jX%``:9$_.Ob' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');
