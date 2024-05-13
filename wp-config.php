<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
define( 'WP_CACHE', true ) ;

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
define( 'DB_NAME', 'witnrhzb_wp361' );

/** MySQL database username */
define( 'DB_USER', 'witnrhzb_wp361' );

/** MySQL database password */
define( 'DB_PASSWORD', '.p]l7!m)2[i25Sk3' );

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
define( 'AUTH_KEY',         'x1moipderzzx8207h3kkc0fvsnilx3exsmcmy6d0dnw26szemcwbymd1ctaerxmn' );
define( 'SECURE_AUTH_KEY',  '7atfoaabe90zuvjovhbawv6nonw9tt7tqkrsxxkpv5gfvrpcpv6fxmacyoxbtbvc' );
define( 'LOGGED_IN_KEY',    'wrcaahlld9jxi1ufkvodly3k9nphdvstur9wkl4clbp69bdzsl3vtnlipwiegtrz' );
define( 'NONCE_KEY',        'mexc4nqx0wumjc3el0bmyjf8otzgapnmmulljfogjtvin17rgpd4qafuzgil79o7' );
define( 'AUTH_SALT',        'ejgr88og3jndb34jnj2hl6tjuhokpmgccutwd0fidwjwrg7cwwylnwyvuqyik2xd' );
define( 'SECURE_AUTH_SALT', 'x6qqtz78bf8bfeefjgakttzzqtejwi8htden1rcy3xoc0wrz7xd9lf04mk8jpdb1' );
define( 'LOGGED_IN_SALT',   'ncgaxnyl3cv3nuth65vmdwk4r6nfg1ecmr2iilnwk65ojf6udjld3crbwmavgw1f' );
define( 'NONCE_SALT',       'b5csvq58fl2grlo3rejmn87j7ha3jhzkzgzqsvuegohxnwypxwgblx38ds4hcgir' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphc_';

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
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
