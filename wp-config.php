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
define( 'DB_NAME', 'wp57' );

/** MySQL database username */
define( 'DB_USER', 'wp57' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XS7(p(9p02' );

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
define( 'AUTH_KEY',         'widcjqcgo802jpf3ae3himb8fteznlhenkg8mpp9av6puvpjnvqmfjahebu6uhnf' );
define( 'SECURE_AUTH_KEY',  'v70h5wgr6pzxubrd0winkeb8ewwxbloq5ixbjgxzcy6ueiqivaadgdxbe1jznig5' );
define( 'LOGGED_IN_KEY',    'xraxsixw9ukg9sq2ujmxfdxfr3hdpwemzqeajtfbzxxdyt3mrhupkwa4ydmj8lfo' );
define( 'NONCE_KEY',        'qkybic3orpmlh7co1cg4kfvrrlgl6escdn5gxp8fssv6tl3jsf85bkjff4gfyiow' );
define( 'AUTH_SALT',        'fowfzsywwfkyovvhkgpghazv1c5t3zx97jnxufr2b3iueowbggedcjoz20cg1kot' );
define( 'SECURE_AUTH_SALT', 'tspicjbpqgs1calu3wpxmigfpjkfevrckemre6uqjtdn6awikv9wdrcr3oieyg6l' );
define( 'LOGGED_IN_SALT',   's0vg3eksd00pblhfcoo034untfx2cooauebjq9xqc7g0zmoa8tnlxe3uk1sc7ptu' );
define( 'NONCE_SALT',       've2jzr43sudzkt91i0zta7yigmfzimgqc3udeebdr7mp216zttndmstrxmiurrzs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbi_';

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
