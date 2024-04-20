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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bbejzwmy_WPZ1A');

/** Database username */
define('DB_USER', 'bbejzwmy_WPZ1A');

/** Database password */
define('DB_PASSWORD', '=Ur49sBnW}]4q?3kU');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '3825a7b9c571f66f1566ce2264af0f5591f08a5120545725101017441b219630');
define('SECURE_AUTH_KEY', 'c28eeb3ff970c3b7b247fc6b7ed8ce5b93b01a08866d2ab26e887acf331073d0');
define('LOGGED_IN_KEY', 'e5241c2372f972100855f265df8a7d40ccb249c0ac900fd8acad2abd6614d1ce');
define('NONCE_KEY', '0ce56ae1cef5244c55ac089674c404447c4c3f0bcde037f42d0b0a0b7c226208');
define('AUTH_SALT', '3e1adc6b727d07318d9b0a9f077023c6325a1e5a9659baf7ce981cab162e87a5');
define('SECURE_AUTH_SALT', '3f50236cda357993e222e45332cacbef9671ad739ec527e811c0f43aa7be9435');
define('LOGGED_IN_SALT', '618f550badcacd715bd18e26feff6397bffab2c37622793680c744a3e5e869be');
define('NONCE_SALT', 'fc9f167c6267318a298b439596277d968a77d7ad0bac6414b585f8a74ea65d01');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyQ_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
