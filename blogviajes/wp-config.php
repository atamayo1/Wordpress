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
define( 'AUTH_KEY',         'n_aTYLj[DKh3{]GJN5(pi8^ppt;vLGCw]F>^@wwDSe{9#goxm^9Je!MfNyu:UYHX' );
define( 'SECURE_AUTH_KEY',  '%_`H4cf<:.$@0A}{]q-hAiVhwZ5h{NLC761#cmCnc6[i[0H!f=i7m 5Q9p$,#mzC' );
define( 'LOGGED_IN_KEY',    '&n]VjIeeV~AV#*b~@%(QExvB3nduGag,aBZfdIbB?+A{,J{s.92`.m6-N:IDrViy' );
define( 'NONCE_KEY',        'MUDNp)Y8vn]%R7$q~BW!bipt.^g#]sgbAnz[Ufl_!%P5XL;V2Qj?Hg,)JQ<[z$0C' );
define( 'AUTH_SALT',        '7$iTbt<a=`JV/?=8^66n;tt+AK$|$$<vR}/I8jSWhgK!Yx$2[@tlsa.X8lM`opUA' );
define( 'SECURE_AUTH_SALT', '#Z/X=N+oKV-,V=nwA%KE(k]`?i`7Ht>$jTB-h`$Z=Wy9Uv53-Baq]TeUf$yNmv=C' );
define( 'LOGGED_IN_SALT',   'qcd4Nk%J1O~[?/i [>ZCx(0xL.!;f8$:T&3GEeOop8equYQ{0(c=nUo12ge/u3:X' );
define( 'NONCE_SALT',       'Lne6?vy+NYvY!(Q>JrAw6T2.+s}Iy=N+kU/!<rAqKqie,CkacmsV_DwW3W3sv~z}' );

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
