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
define( 'DB_NAME', 'lapizzeria' );

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
define( 'AUTH_KEY',         'm|+0:QvS_i(2n4uwkWc]=N=(<?frU:HZ_`<YU{l,j7F!4,Cs%A{Uuf7od*[<+pz5' );
define( 'SECURE_AUTH_KEY',  'HATLGJt<pu+(}y[dvOzy_Wn;=[qK]3Wx2OlFY):7ct@&):6{f`({VC!Ci*S=i_;C' );
define( 'LOGGED_IN_KEY',    'U*ASWW|Lg$CJ>L`W.2;;H$pYH.{IH!2}4.E>x,[S+.3aZAoywzQrq~w-x(A/u(4I' );
define( 'NONCE_KEY',        'k8n[qu:dc+DOs?ph[n.FFodw`|4cgiquDVGCcYc::/Hta)+@~hYprQP0Rqw:OBO{' );
define( 'AUTH_SALT',        'sq.8Bk@Fr%z{j`C$mo}6R+qI5GvSkvua6e-OtW7c$JiY7-ASwj.-d)p<2?Y.T|{_' );
define( 'SECURE_AUTH_SALT', '--)]Su4+r4.(y)@I,O5UaM*?2T~ssc(jH|}8Qhf5q?%Xl#r:7wW^3t5z-vGD<gOz' );
define( 'LOGGED_IN_SALT',   'r}:wwp5BT?[<oQ5dBTh0mD#YwSW@3aYPT>qo0>v~aN>z)S+8{bOl.w_W})VTZ]Zy' );
define( 'NONCE_SALT',       'z;E$aBs[<u1w_J`B0uAHTI#]:hR[ln%P1 4;v]{Mm=.hJiOI_^D4.b9akq1;ynH7' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
