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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'f4oiM}`tz|WxJZMVpDkPlhWmCnWi0~Syb~e-:fFCUe}Ha<@#{RnAi]~LJ6Gga+b}' );
define( 'SECURE_AUTH_KEY',  'u99SZ2M0_D.O?lPgs%,n+45<x+P8.b<]SFu+Y%t{>)E=+E4bE^6UB(,]LvW;aMqy' );
define( 'LOGGED_IN_KEY',    '=pp,J|[nR~[Q!0$m_|972N5PdSg_dY647?mSU~}HDAp3H ]n]=__WieAc!y#gKe`' );
define( 'NONCE_KEY',        ')[9,kKVC}&cSSLa24?zWGkIwx&7=F,noeV:OE<^%f%V*)WBQ=d!4/q 6J:eInC1;' );
define( 'AUTH_SALT',        '*7`q%m<Iv%&Ff_X54EE-Iwimh`wSrQ:5q)L=O$EE*Iz?u_YwSra384!W(VREb3om' );
define( 'SECURE_AUTH_SALT', 'IZBUSHt>X<I0pWy$I#qcir):2Dz&~egj#Fou{b8?TSw09LJ$CHSs$txX]]s>*Ic/' );
define( 'LOGGED_IN_SALT',   'ocY$g%zKN&l[l@xN$|<Z3DO?gqWE.$62PF}u)1+THkv&G`auhjh$ZzurV>74*-B=' );
define( 'NONCE_SALT',       '7KH$F9Qnix0RTW2,~-@ayPxi[+f?O&J|bqf`vaVj*?/=yIC`-4FDfjlC)I#^flzr' );

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
