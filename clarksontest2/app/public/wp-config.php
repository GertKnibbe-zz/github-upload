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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

define( 'WP_DEBUG', true);

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
define('AUTH_KEY',         'JXs9dRaCjE2lpOU+ln/LgPlTObMq8KS5hAbilUl08u2S8qK2n0Xl/FUe4TLnJh+EByblrpicGCQqPhqCmQUEZw==');
define('SECURE_AUTH_KEY',  'LPZ7RxWEsL5PZWpdzMP81num0hJiK3crItyL/Npd+Xy6HN9gmLjiv8ZA9+MgJiIqsOX4xa5W09gu0nJn0vXsYQ==');
define('LOGGED_IN_KEY',    'Vse4gw4mkIJAv2cN86jlrdgZQWM95nlOYMOgMqP0832WCtFJNn4h9y46uQ4FNibm6rPtybZorvVD1W8b/1A45Q==');
define('NONCE_KEY',        '1k5W+HU2c1n0YlDNtNkegdQWOnSHLDgLPBV22QQBrGZXn8Ru7ZkO8mHKxCySMJVBWnOdSTxLfLL89TPLdcJ+2g==');
define('AUTH_SALT',        'VkcdgtyOIEjk3MVb9+djEoR5Nntq0pb7u+OFAO55W+u3fNmV92MDVCDeD52rUVTdAt+shSRQxB2qQrNXkyw4Xg==');
define('SECURE_AUTH_SALT', '08Ubwp+xOSP+ogXGgnrIaecm5r3UChTMwlFIOH6q6oPO46ihBzuRub19ExQySJFDVz7Xe+Z1lbdRQwZb3B+ZfA==');
define('LOGGED_IN_SALT',   'fcD6a1SWvoCuiwSBusm5igslWm+sQrOh60/V3A8lNnYxmec/paMjr/DYxJiDxsDEh+1CzOSsju2gXIppd2FGMw==');
define('NONCE_SALT',       'UdjwPCQooJa9uJYpBP5C1BxzWhY/NAJDgdTJnQ0sgJ2Gfle+m8QhlStkt33wO9OWds9XIRG+uZsaKXhoUODOaw==');

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
