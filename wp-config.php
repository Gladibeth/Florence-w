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
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_florence' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qv#rY6kbo5!UE|aDy+6j4nIEwE]6Bv!<GpbQ7?_|co@>}pEjC&O7~bW3S)[H0UZd' );
define( 'SECURE_AUTH_KEY',  'FvRy@jbZo|V!r;UzGm()HTOq+Q5Pl^k-_]XcTY|8<yM!eiqfvj93wL|74(Udl h~' );
define( 'LOGGED_IN_KEY',    ',D4wsX^WjPT i3s[!<g}}4`%j=%<,{XCiG@mYjur~qc[tQgJ~ypOf?M5?TZ#GdYJ' );
define( 'NONCE_KEY',        ',2`4tC:VqxDtNM#J]*M+zW:1],ljHK%s-9^Gf=M%J<w&IzV-8EibrHxOKA62G4*t' );
define( 'AUTH_SALT',        '^]8Q tdLRV.]A+M/wKPuct~P|jIj&rGw2oNGy@I*LlPeYvaV#9Sp}7TFPVj{~I%{' );
define( 'SECURE_AUTH_SALT', 'cV#edwM3MB`?EDFJ0tIFG$]<_dAL}}U40aqw)2HC:0=.0H^6ojH9zZ2AdMRF[#Cy' );
define( 'LOGGED_IN_SALT',   'dac>h8`!52mR1N]Z>Jpxq?eptsim18W;ZSIV3Wf@W]8Fq}1[zm*BKNGe6H,g=ehg' );
define( 'NONCE_SALT',       'PM{`Zlq[>JMmDRv*,WjMx:]l+;AAbslW:oWpP7x9O[ l_C~DRVKe 7K|5}Ic+Q/`' );

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

