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
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         ',]P;H+wThRL1Hf$Xle+^2=#HI@$9KYn+~L,#nWUS2)H/~pnW_x&4w+S1)szJ$(2x' );
define( 'SECURE_AUTH_KEY',  'V5pq)UkoWJ^w|P(b<{P:&j7PmJRJ{:e~domj]ztsDXs^IL#;mp] m/r3@qu/PME~' );
define( 'LOGGED_IN_KEY',    'j75w,O7|GsL(rM_JqC%U: Sy&&b S0!|-ruy|bG81mgynf4q@6{5_d[Kv YjOSYm' );
define( 'NONCE_KEY',        '1P}`/cq.-|=9p`AV)#T^@tmf*ua,&n,i:V$v*=3R9I7:G^*QaBB0qIc]=qM{A6eX' );
define( 'AUTH_SALT',        '}y{1eKABiYv{Dk~sPWi][< U0QOL#Gchi@d?dP@0qnxj1$o:Kox9q4~XAuXlHtk|' );
define( 'SECURE_AUTH_SALT', ':5uGh:$;Nt$1:|cPs8>g5}xo4|!{k%0z6xD4^@=9cs;5hx$]~L.WN-r4&lf>!,f`' );
define( 'LOGGED_IN_SALT',   '}b arcm<{d 9Oo6i)(qpY4R_r&3N7sj-evjFN1FA1<W>5/|0H-11+G*6V.WA[=!5' );
define( 'NONCE_SALT',       'N]=B7QRm[R:~+IWn8Na_*,]L&C]<E;SRk?u1R?}sR:hck/ $xL(LaQ.`3h@dc`2c' );

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
