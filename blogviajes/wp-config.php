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
define( 'DB_NAME', 'blogviajes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']w/#I,OCD&1?t@8_3f;3WOtv b2DS9 qc]PPvdc&Td]#K*thBGoh-3bv8f3=;s:[' );
define( 'SECURE_AUTH_KEY',  'Cyy@6~H(uq 6v(7lJm3VJ7b.k)o7X-cZ8XvVgl]A7z.M##ti9pZbe*)V$TFETLT=' );
define( 'LOGGED_IN_KEY',    ' UYK| ;( [Wl`(<rB[$vQmectBeE{IgyJl^oWsz7A8Z}H#itsFW5Z4OlKhhDrBrL' );
define( 'NONCE_KEY',        'i=/K$:Som}aL.?2c[O@ 4]6VN^7lzRsDt3X{I$,EDbvN@v5ffIU>JtYG9XZu!7zj' );
define( 'AUTH_SALT',        'tiqM?EI)_h]h]ALA]{Coc3IxIj;N(aW^y!}:FZYM:Su%L;R%1@:m{6D}x$|<#$*j' );
define( 'SECURE_AUTH_SALT', '|I<;SKRrN--(jP ,(twpEno:ye}:|Z(,!dmkGCD@;H8T|%HR}Y-^!1yUZaHi0Cj/' );
define( 'LOGGED_IN_SALT',   'p3HkzaO}&C#%MwYDCXRe,I^).(b@HHDw?Q6fsAO-L@DZe|]j||4]xFU2]!>[Xb(l' );
define( 'NONCE_SALT',       '6VPnY3pS:m~VtRKT}DsElq>$,##G,VzrNL:$_{i[@7pq(D*t~N9.ooyPJ05i$W]d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
