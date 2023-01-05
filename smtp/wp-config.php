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
define( 'DB_NAME', 'ulinnuha_wp673' );

/** MySQL database username */
define( 'DB_USER', 'ulinnuha_wp673' );

/** MySQL database password */
define( 'DB_PASSWORD', '2SQ6K8p!x@' );

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
define( 'AUTH_KEY',         'o3yovkjrola81gyihbtgvm6dswuodfdwmutpkw7ih1prs2fwr5oitgxvh2fau50b' );
define( 'SECURE_AUTH_KEY',  'cslztlpm7xifklatvj1xulsutwyoykf8zxzqnlvkqxhlpcd3cbd3rvkqgyjphxoz' );
define( 'LOGGED_IN_KEY',    'lvau0btrj00qlrfhxz868x0zi4dllrvkffuywbzpwqvyjbqzon6wj0w9xva33c4d' );
define( 'NONCE_KEY',        'h6ygsehlhrjaupgcu9fr6hr7j0i9nhobmlrh60hs3yqvhxsk5mypuy8kymfgustt' );
define( 'AUTH_SALT',        'ugb0hrju7rusewjc0ztp6ogsonyazw2vzb7ssv0quukb0smwzzoag33f2nu007r2' );
define( 'SECURE_AUTH_SALT', 'wh18fnj0bkpnqxexgowncgs3rqlvn5w7rgacratsfysq51x8lftcgxhpjfzovx95' );
define( 'LOGGED_IN_SALT',   'f2ojtatttzoffxzv3fl7thuh6exiuura90xnjz4ud5347lijdaaq6jshkvi0ed14' );
define( 'NONCE_SALT',       'uvl3ipv2j8ezcm4kjxuoroxdpnasn583mjvxeld4kvan23mnncrcghqld0kp7jmr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjt_';

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
