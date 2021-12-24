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
define('AUTH_KEY',         '0Ngbegj3zWtBuAsvzKJYKh9wkt44x6zrZHOpLrRoa2IZqBJwKyF+Zd+BaTxApAKl2wlFyj4PXTW49F/dWGPq+w==');
define('SECURE_AUTH_KEY',  '+S7dLknHwEj8axGi2UI9umDPbUbaBp5SKBgvIXPtCjwq97p9A57Le2dVdd4derd0OaJ1wMz9iqDxZ0Sa5GT/+w==');
define('LOGGED_IN_KEY',    'KnJs18iCIK+M+h3tjQDjMZBAv7QRzcdEq+BFly6aw5r9VHUmkuhSBXTTccUeTSRbHOcFiE7PyvWUKv4i511wQw==');
define('NONCE_KEY',        'XRf0g1RkfGNZwmSLttFRfX3IuBUR1UsA+jITEnYeIO3i9Ym1n5aJzMWjCPkcCvD0nnpZW1kxlFweFTvVcVP35g==');
define('AUTH_SALT',        'x5jz/tAQ059FtE3z9kIn4wHtAZmRdEvCung74VY2oXSAC61iGSEBkRVBFDuhR2bHSpyguKNR5iWXNADSuFiVCQ==');
define('SECURE_AUTH_SALT', 'mL8ISjhUIiJuLOSL9tcVnRNCDo9G+9yTEk5nqjhRi5/QW3DuZrIZU0mAUwAO74VtswzFK7MzMkgB8IlMRUambg==');
define('LOGGED_IN_SALT',   'P0Edwm4cVqlNDLxZUClF66vJZs3uv5oQ3zRhUf25uUUvPQtx+E9Rwtxcx/aCeDXLnQHpi7oDblR5SkmRL5l/BQ==');
define('NONCE_SALT',       'MkCcVriOfROxAt8KAvaHUkzU4WDLjngIbYvmV2XLc6u1T+pGQmYQ7GU3VEJUxf7Hs1VzxveKwzATmUdwgUoKxw==');

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
