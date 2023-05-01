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
define( 'DB_NAME', 'testos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'At8COTcAmYUKmUKesW4xMCzKj9h2kfdt9RF9XkLFN1lYLyO497amTlrVWZtMXgip' );
define( 'SECURE_AUTH_KEY',  'aaU9N5g3SOPNsRkiFlxlR0m72re62k2yEgV1lw90eC5FWGMn2iBVbT2ZCXKr9X5f' );
define( 'LOGGED_IN_KEY',    '7qwboED6gQukoeZgqcooRlMvdSNZcaOpuuU2q1q8CIQlnLlbeEpvkO9C0Q1uUsKT' );
define( 'NONCE_KEY',        'M3pFO5greE17aQNfzOPuGxu35d7gKmfs2PgUkYc7ZWsssJT3Wd3ibQJpIgjebbjv' );
define( 'AUTH_SALT',        'tuEdC8I1f7VtIFPQ0POXFCMr7Hc8KMmeXDPkER0dlxA0Ysj2ADkyWe2yx8fL0ChK' );
define( 'SECURE_AUTH_SALT', 'x5DxOisTQLaoJUriHjTufiyfYGSlKqOYrNCpj7dFK5r84AnjxnJ3KCTB3KZZF2uT' );
define( 'LOGGED_IN_SALT',   'Os1mNZ7fP30t9GG9pEQBR7s41C2CUtWNPmQ8JUEX07W756Ar46GQVxz9gn5JZtps' );
define( 'NONCE_SALT',       '1bH3Zp4bHZmn11rIdaGYb0a0IhCJa9JanWEMnQG1zppVf32kH6lHhISW10UUWuyK' );

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
