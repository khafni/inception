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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv(DB_NAME));

/** MySQL database username */
define( 'DB_USER', getenv(DB_USER));

/** MySQL database password */
define( 'DB_PASSWORD', getenv(DB_PASSWORD));

/** MySQL hostname */
define( 'DB_HOST', getenv(DB_HOST));

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '`?{N}xY&;M[p_jB}.MAcIR?6LaL0x~? Ds$?+#No+BPmJ_h3V v$bZe!YXTa5|nK');
define('SECURE_AUTH_KEY',  'Nxm3i6}&1+)E^A5WG|Kdrz5D6%0|Hegw*-+7`|w7;o|8tDY4^2|6`v+H-K7 EvF@');
define('LOGGED_IN_KEY',    ':})+xF7_>R8@VOm{Ht8LU0c,X?MePl+MJ{?udaNpb5NnZ^{amL2Bb+:`3<*@l.dB');
define('NONCE_KEY',        'YM/B59+;KH%48L?VRcQCwS.kfh|yR|kEr+)?mN^+)pzXseFvX$8q|jK={|Jn*KQv');
define('AUTH_SALT',        '@Yo=&R PM6>Yv?g[U}5ipijj4q-=Xo.Z=F4p@V10+pE.j`K@hxW+okx ^xh92U0-');
define('SECURE_AUTH_SALT', 'xe8oPc<j]ni[b?4-o(8f[^f8}6zFXJ_ Ltso7e{.4kISi!8Ud`W!1Lvw9-7FN|]I');
define('LOGGED_IN_SALT',   '(#bA81+eYFm HZ4*#Y`Pn%=m$Rn: 7m%I?BV+%?0[xJ~-JY<o/>(ewQp%Pe@A^#q');
define('NONCE_SALT',       'pn/8#mQBl|zBos8[F:H3gC&(X%&%I|;eWi&!z1Y}Q,<i59h|l%(~3|A0W%hFs*S^');
/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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