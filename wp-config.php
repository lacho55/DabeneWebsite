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
define( 'DB_NAME', 'dabenene_wp639' );

/** MySQL database username */
define( 'DB_USER', 'dabenene_wp639' );

/** MySQL database password */
define( 'DB_PASSWORD', '3(1SF0a)Cp' );

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
define( 'AUTH_KEY',         'jdmgsrscsaq9bemf0cxkc16stl2rhbkk0gsrq8lbq1nlo6aun7y3yhycxt94r9el' );
define( 'SECURE_AUTH_KEY',  'eosglomb4djk0xs8lv6ddch4afiieyzna83ccupl2gjvpmzwktryrteomm6ticab' );
define( 'LOGGED_IN_KEY',    'yckrzatsy2d70ikfpabvjqwvouho8vyf6yucwfjwh83n6fpil5djm0vxquvlcfze' );
define( 'NONCE_KEY',        'qo9htf2kasgfyaec0muufjuhotjzyjxwhtfhzlkmy2jrgo2mww4poxldcdmbut5b' );
define( 'AUTH_SALT',        'deriu7acq4apjvxihk6rlzbakneijf3ekx1p5syyqte6z18qteqeetbvfcl1y8zc' );
define( 'SECURE_AUTH_SALT', 'phcugzx3swnl6kxoeb1w9ycfzspy37bprzsbogkfmxktagbqkkqbqrplcdyczeij' );
define( 'LOGGED_IN_SALT',   'nrjdjet4ikw4wdxdhj7szlhaxob4fop4onwp2f1gcjkxuq59blrlfojjpg7shrrt' );
define( 'NONCE_SALT',       'nswifcec5w55vflto4wbwc8ishnrsrlyou9ilua5u2mtscwinpm4ayes23rot2n8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6x_';

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
