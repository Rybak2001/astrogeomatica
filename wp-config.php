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
define('WP_CACHE', true);

define( 'WPCACHEHOME', '/home/sites/16b/6/64f3a78feb/public_html/wp-content/plugins/wp-super-cache/' );

define( 'DB_NAME', 'wp-285-3139363e4e' );
/** MySQL database username */
define( 'DB_USER', 'wp-285-3139363e4e' );
/** MySQL database password */
define( 'DB_PASSWORD', 'b93c319a19c05af5e2835ac68953c4ed' );
/** MySQL hostname */
define( 'DB_HOST', 'sdb-n.hosting.stackcp.net' );
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
define( 'AUTH_KEY',         'f9lhdqhvrufzbcqolpffxiavyu7dx3hbwrrpekiphucevvbnrbdxp0mdiarytt2g' );
define( 'SECURE_AUTH_KEY',  '5bgjfpmo7ws5t5wtzsylgxfblufgxkkuquhl8isyvgrn4njws779t4ls6rb8l2g6' );
define( 'LOGGED_IN_KEY',    'zwjedmahjnmeeqqgzmifa2oz1uhnc3mfqnnckc0a5sn4g83swjp6qzjtzh2ro6tz' );
define( 'NONCE_KEY',        'kmfpot6zpkunwekfyruirnjltqgzthr9rirvykoscv97eolxlz5mpncp1j2fhzzz' );
define( 'AUTH_SALT',        'j4mbxpuaxagxdmh6tnfrmsialnbvtbnhqsxraoys8r2vx5gus6hkvpywkmpzzec0' );
define( 'SECURE_AUTH_SALT', 'rexg53cgcol8wgmnazu3zsowx4tgejra9ohic4qyu6mltrnzs38dg0jgulpmk0ld' );
define( 'LOGGED_IN_SALT',   'gcksfum7uoolpt8bpy8qat7syepoamggq710cvvjdcfrrv3ulvxfad5otrbjfh8d' );
define( 'NONCE_SALT',       'b4egc9bpjrdydlqajm0alshau3gese79erzz6tepfygicvy36kcxsocu0dbjhdhn' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wps7_';
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
define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );