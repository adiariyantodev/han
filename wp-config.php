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
define( 'DB_NAME', 'hanid_wp486' );

/** Database username */
define( 'DB_USER', 'hanid_wp486' );

/** Database password */
define( 'DB_PASSWORD', '.J(p3G5.Gj4-w1]S' );

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
define( 'AUTH_KEY',         'jv22ldytxy3dor8mnfpjj7zpovpr3vj3n0bk1n9tjugtzidarlaulhki3ptv5wgs' );
define( 'SECURE_AUTH_KEY',  'vldarqj4libye51d3aqkypidqtpsougsj9anrlb6zrhfdbarhsopujw1ppowymkq' );
define( 'LOGGED_IN_KEY',    'xmkxuuyluuc7zazkhkbwx09moygbwsi6xm8jz1koqzlaqtc5bejicswesbm5ehgb' );
define( 'NONCE_KEY',        'ksg1angska4hd7mfnyrcycxzquk0unj4pvsehk27icwj1pavvzmavu1hhiqjmqvm' );
define( 'AUTH_SALT',        'dmglcwvauumcqsyaygaup4sdanngdsdcbjwnw21rbi0j6qqkxnomciger1pydxru' );
define( 'SECURE_AUTH_SALT', 'h3kl4lpgi3z9gpix2hjtbit0inugpsmqroigeip1alfc2w2zkppzgqch2fkofs6x' );
define( 'LOGGED_IN_SALT',   'xy8lt1wvrapcblrhbqn1pt1nexoeggrnco2izlinhscorquhlltlhj08vxlnl4ma' );
define( 'NONCE_SALT',       'xqobdplhlmkb02wnupuv2ulc8ouklmipwgzjj2dbrurjhkyzmmmty2vyemummfs1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wplk_';

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
