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
define('AUTH_KEY',         'qOKzyijvlikinCSzsBEDeZEnNd0sb8+5kQ/FDRHMgUl5faONWjb8IdYDeklmmAFj18Z0vgo/zZMQVqTPro5ocQ==');
define('SECURE_AUTH_KEY',  'd5fYOzj8xQuzmJRFCw2/cksGieKkuZhFrP0oIedbUGwLwEgt3QN2D61NBp+wIbRID+2Kec1SrmH9aWrxrPKedg==');
define('LOGGED_IN_KEY',    'h4dJjPKuu0JXLzWFFRuhD3/kTRvvmSLiD2YHxowVpytRlXffUlhfXLdhDeFijjzsUtQzvfjM5QvZyFv4uKn8JQ==');
define('NONCE_KEY',        'JMPJP/NnhKv1PjU/DFEgnHLc4g5fj1zPctmOUTiQW+MSEjzA62bO2N9j7YDafPOMA7DSnYkAiKG0S3NalS8+Pw==');
define('AUTH_SALT',        'ZiQ3qxcrSgMLaEZWKIhgbN+q8SIvrA1FI5gGj6yW9dkOtqfMOhRsYeNXDTUZIJIezTKL+QW1l3tUX5TyxuOo2w==');
define('SECURE_AUTH_SALT', 'G93jJVKhfk0mR02RHfn19KQ4mIUCOM6fTF3NxyLD4dT72YIhgE4YFmntf42tsTo33IgN6Nb8QufZysEXnNiY+w==');
define('LOGGED_IN_SALT',   'oYsUYrxsHc35f7ZcQdeBVWkaf3aY22gaZ6NtMYdrX44rVh1Lb52+rmHws+kYlABkzvber5N/n+fViLd4hfQHbw==');
define('NONCE_SALT',       'eFJaEJLh7AYdpXa0pZz4l5w77dE2AL2CMmoZUjEifpcanmnFdQbw0xHHnFe9/whQ5CJUdP/Alaoy0TLBCDYNRQ==');

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
