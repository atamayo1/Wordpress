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
define( 'DB_NAME', 'plantillas' );

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
define( 'AUTH_KEY',         'e$N-bdh[S/FJu=+wZC$<z_g{3Ka-%q2Z5XoU^lxlMImm4}Mz1 t1/]z=kP;b0zF<' );
define( 'SECURE_AUTH_KEY',  'pjE)f!z8,mFPh|gf/4JCOR@Kkyya]W(&3wg3yE>(D@`QH7qG%wLQSJ-n*GStit;?' );
define( 'LOGGED_IN_KEY',    'r0BrER|kn.,ujJ[^]!)WbxbAgBMAXB`ge<$:TPz&}((jjI] o%V8jPA}[@6{<+Rp' );
define( 'NONCE_KEY',        'm>~&j}H=;*buOIs7$E6U6eY0 73h$e2=Ed.gm!UE;}G6I4FFx~K<T7`X[z7~Sj*J' );
define( 'AUTH_SALT',        '3 oc|Pu vL9hl7Yi07t.Wpd8r|-vo}<@x;Sq{&KeO~rHi<69Z~u6w=45gWKvCUUm' );
define( 'SECURE_AUTH_SALT', '%|(kl?M^4]f}=~ImtxI+so?>6r`b9twJUFE>8lT6@O7<v4(<Y0[d(n*50-,rOg$,' );
define( 'LOGGED_IN_SALT',   '@4rK,VyIQ,*AB89fliuzR?L?oXEVa}w.C8SlOY0,9%=R_Bd!~jSB_Z:w.Eg!p3sz' );
define( 'NONCE_SALT',       'wy|<t*s3K_TWV7OIh;UF$,O#*[NIU83Yp[)P}VP/OYWj8Gb*ww21DcuYcG>Qb{:V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'planti_';

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
