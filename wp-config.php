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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word5' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',rJ$z0N(l60/[!%}[JSc/r*9V;hZ;J,TGll?;c.JfXX^5@FpItJ?[*WI&$|&lyG!' );
define( 'SECURE_AUTH_KEY',  ';s$Z+}H3)e4*zf5=P i2lL!{0*:HnCU*b:A`{BefE*;QicIYT{M<uVGMlA3YZS4g' );
define( 'LOGGED_IN_KEY',    '7w~rR9JRs#^hEQiAeN4xWuUT;&gw{YcT,<a L$rG|8Jj@E(:+vjAF?T(*z?7Cu!|' );
define( 'NONCE_KEY',        '3i8_eJB)7zz1R7,+&5r9Vw6F,4`nc{0NTyt: %@VC)B>]]tMd-Q)!~Qzrc`ZNMb.' );
define( 'AUTH_SALT',        'V* Ue:qcY&z^h419VW}jW`q+0(3+ cC(m|3w|,e`C@-C`mY_pd<XLFsI6iT3u|1Q' );
define( 'SECURE_AUTH_SALT', '8.hc&))9jK/^^VF[U*i{E8JSo$9L3LC/-%eUKJ I/R}|H4hkCP*6!Eg[w[O!lh2+' );
define( 'LOGGED_IN_SALT',   'o*pF$969+3#qy%>sqf`_mc%K%xK)LzsF_`:m~w)I Mf]R[VvNiI%0/V]| [(l#Ag' );
define( 'NONCE_SALT',       'P6&?5+*BXi[Uaw>&2h_hEfP]@_G&/ktM}`XFSe:NU`FS@%#A;jr<(wJ5GFHVEZ:x' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
