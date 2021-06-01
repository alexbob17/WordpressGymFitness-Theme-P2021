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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b+LL2w7hTmatJWTCeXLkPaDtM6PdXJ9z7PRYSja1v8LyJCRwHVuOJVy6n1C9z0oJRIef0MKdpUwzaO37+oH/vg==');
define('SECURE_AUTH_KEY',  'Vgnwtvy3C1AWqWv9/qRLskAKQ3GiBCSJLpX0mXsIeUFkqRPzmQTCu2z83ZODAgL4TJdG2qCmPSjFYSza8THUQg==');
define('LOGGED_IN_KEY',    'fE89L7DFp1PCyAGlQRRmtHATJUErOfQhbFZ44ftDZ9mZzjDz1G96ILWzCMSJDhdtr8GQKmI6g8da4d17ibmKDw==');
define('NONCE_KEY',        'CY5KIqaLtDYUsGdLcXFSslzbzwA7fZjdnNqrsiFOewmHadxFbRJE1tHD/dlLyAsng7MLFudUD3CHJD2AHb8Ieg==');
define('AUTH_SALT',        'U3YHPhfA2ZC2uHC3+SOcw+TOdawjyy5VWcWCP0qkpTt6QyZxRbP+c/jpdfv8/jPGBvEtIqviPtdTJBoGFBf1CA==');
define('SECURE_AUTH_SALT', 'sBaEGVvrEP1Zfi78ky0ArhutAO5vVfuDD4Q1DF/yFe6obHgsaGkYnDnkafKDRQfos0LkdXHRWn4re1328fuTLg==');
define('LOGGED_IN_SALT',   'ZAc6wEZQaZvxIX6ju46/L40sNNKpz3eeyA9fJrMZiq7t5w9HNWfn5O3GtnlwZT5b7slCR3fE2ll5zrDXjQRYvA==');
define('NONCE_SALT',       'qanYZ85DzLrbvzSc/YPB0/kXhLBgN75hV0+mmJUfsWqjwLSj2mombzI2F04gmxEhjgZ/94Jb8lIEcLxH5pcmBA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
