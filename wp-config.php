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
define('AUTH_KEY',         'nJe2dooKa354M+Z8hnNioVUTTYIa3gJfriIER85Y+VWMFz+K5xdBFLx05wwqmNbiz7rVheetumf9lNeSjGm+LQ==');
define('SECURE_AUTH_KEY',  'iJ8ACu4oPRokIpuLzpBUJChZDZ25FwIHSGGIQzYDk0QeUgXNiZGFp8qBsWUK2HVtl8yNtIw8/VbvFw5ZKpTtGA==');
define('LOGGED_IN_KEY',    'Pw3MQL6aMjHWsqWThb3p2OYsNhfSHyAejFFckT0TZyTDFLYkHty9gOOZmEuYKqAfLenAItzCKqJeKGqlIrAshg==');
define('NONCE_KEY',        'iMkNAIOJDKcvtirL5kEtw/0QO9nJ2/iAP0tsI4smzuGgBiBnXn1ehXNnkrtUyXgDjQx5jK9c3zsrt50tCAmNQQ==');
define('AUTH_SALT',        '2jOa2Eln4WY9KhisOvn1WMLRP5TAdKeS9+h//R4YZz3OcBJCH0r4x5rQ1t1B036C/oRiBnhEUDr7PtDR/zAy9Q==');
define('SECURE_AUTH_SALT', 'o3jma2dM4Qih3Wzbwq/Or8IdBtD6ZmWDplwXDE6R2bgJf+CWBCLE1wGlCIQnj+hs+th+DUEB8PjinffTxodS6g==');
define('LOGGED_IN_SALT',   'n5eznDFWmEIhbdyPZyeWkvGz3F9omyvZnXaUWwc63vFHm7poHPPRaW00nziwSD4DmjfnOVdIdKPgV6+ZmKTSKw==');
define('NONCE_SALT',       'VI9qZTLjGe7sTRSn2ksTK3L/vXVwm4zqd/OtKZIJvxLN62C6AOgXuMIF+MdJuHNGHf6mLtNHHgInfCjNg//z2w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
