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
define( 'DB_NAME', 'if0_35036614_wp430' );

/** Database username */
define( 'DB_USER', '35036614_9' );

/** Database password */
define( 'DB_PASSWORD', '-zGS18pZ8.' );

/** Database hostname */
define( 'DB_HOST', 'sql104.byetcluster.com' );

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
define( 'AUTH_KEY',         'v0tz3enemwhm8utvilafavhgyrc0pvb70txfoj2asi5we93axabm5a9pofjfrpk5' );
define( 'SECURE_AUTH_KEY',  'nb5qtulm6wjfp2w7ptsq8mf4hrn5zqdykayqojcfsyvcc1neqikrptol7lwsuwwd' );
define( 'LOGGED_IN_KEY',    '2upsi8i9tuihao8vdhaaxgsbbziggj4lklbpshyvqjna63xfnh71t053gcdiylva' );
define( 'NONCE_KEY',        'cygtwysfk4z8tkhty9m3t0og9x2gykwoeunxfwc8lvkm0rhuklhjfnpg5lhsfknu' );
define( 'AUTH_SALT',        'fmqvbhfue8b2doafnehj7grgarkchbwgrn9zucnppkfn46tdixkfewncpabigy9r' );
define( 'SECURE_AUTH_SALT', 'mjvrk4qhh2x422lfxnv3pveddtorxu2lulgxpbbhmwnmmwhohstqlh3xwbs3ewhg' );
define( 'LOGGED_IN_SALT',   '6smsufpbszhqqsxgtpkjwzixiz1d6bexcxcwvtiy3jujt4x8vgn3nimqmqzlgp7b' );
define( 'NONCE_SALT',       '3puecy6xdzuwzuq38a1bvff3yzjesivop8727fba8a99cfsmnylgopockmp3qp7m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpal_';

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
