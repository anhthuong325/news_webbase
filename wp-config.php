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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         ' e/;=)SL0Mz:Tg1# &< DP?^-U%`cRpBuTc3caC`au!yMlVfa*OTEI0IJ/ Y]t58' );
define( 'SECURE_AUTH_KEY',  't/@p:::N_J,}9L3u3YZ>3X_eTozfH|ZWLxH)/FR^=w!Et<q h~k$^V3@F1xe5tsy' );
define( 'LOGGED_IN_KEY',    '{;Wd~yDyh|r2%w&,df{dIIFj^Q0:!B&Hcorn&@.Gi@1+&P7C.ZC-Cz>STeY;s[+H' );
define( 'NONCE_KEY',        'PebFDqb j/L H)3&6BFsSw,*5oh<:>SYzP_pf,X;x$CL iH1bG3J2&|2VHTDyd7u' );
define( 'AUTH_SALT',        'x$zlZI,w4.vb e!=yZPQvBP#|e?[k53ZoX&i.}d:ixNil3%Xyq_lu.q]LXY;hc;~' );
define( 'SECURE_AUTH_SALT', 'P,V5%CzvAD$8yK[X:_vPPJ<3+E?X$U_Rk5 g u?(8CV4(&cC`(]S5wErFPaBEaOR' );
define( 'LOGGED_IN_SALT',   'URV^#he1Vt)8krFG-3(O7a3:Mqze9JM57eg+q1fo|7`rs}}|LdF!!3i6wbQZaXa-' );
define( 'NONCE_SALT',       '!=:(dbb$KLY`@/MfV,aA#v73uK;B)e,?-FO_a`$ndYF<}{T~o?;rMP$_m!vqC;3{' );

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
