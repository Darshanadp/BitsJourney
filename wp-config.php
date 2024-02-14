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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bitsjourney_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',Ia^Q94eU/tZGa(s$;pq=u%07m*rjwJwvP]*z2<f&(U%9s+FB3wIFwxMp>EFN/r0' );
define( 'SECURE_AUTH_KEY',  '*lbP;e})N_Wnrq,FfU^Q-O${8)X#vYX]i;ZnqV(2UruL;k2JtH_W$]Xk-%YQ|>ht' );
define( 'LOGGED_IN_KEY',    'Lz;0n,:ma~rrq+t4`zZ5X?:^X&b8@I[911W8C[!/R,=og9oAE-}Qi.[/o(hepFJs' );
define( 'NONCE_KEY',        'CCD?O(kaAvuqW9^`x1m=33HjB5#c)$M]LWVe^EYY>(3Z8f({;=5@4hl5(&w#:P(J' );
define( 'AUTH_SALT',        'jF[~ sb2PFJ]1HWzf%u|dtC>fWYJz8pkqIDWIK:^4k@M2R,7HNQSf1L.[DSU]+C^' );
define( 'SECURE_AUTH_SALT', '^G;v52}UWh9[0S/@|`x/B^]jr%%yn$N/gTdbgRK:YP=G?/3}NPZJVA3+#h_a=zgH' );
define( 'LOGGED_IN_SALT',   '6Kg]H=>xg`lF$xts`+Vrz6Od:ph;e(S)+&}}+_KIidmj%^N.0TN-gke33WCm)1J1' );
define( 'NONCE_SALT',       '3?b)-?EI7U1@ kzr{)R~oavkb#.LhtNj5L8`C2C$sy}M1-jOa,;EHPF7zv_GPh%;' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
