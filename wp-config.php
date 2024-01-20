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
define( 'DB_NAME', 'old' );

/** Database username */
define( 'DB_USER', 'old' );

/** Database password */
define( 'DB_PASSWORD', 'old' );

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
define( 'AUTH_KEY',         '@HzSg(uZNSeK{,sR11c3,VN[KUf%eJs`XBaak;RQ&8gy^C%IE7,:;LR)+$!2F[G[' );
define( 'SECURE_AUTH_KEY',  '$^W=8C6<VNw<MP2N(F{SzkJzu^3%~!{f}g363LWyjU$KX>!g?&ciyytk1LY+$Ue&' );
define( 'LOGGED_IN_KEY',    'Iaqd/p5V,6qFA#&62OX5TcWNOYL_S;cO^nJbqJ8pKNArh$-CZtr6yf&fgjK~x}^;' );
define( 'NONCE_KEY',        '[6L9RGDB<Gpt0G|46)+.}mHK-^b>?I#?T{|_gZMA<F?q!;u,mbh^Ix!82<kVf{{4' );
define( 'AUTH_SALT',        '-=7&!vd=C)hBGaf}|l=]ox]BCsIx^l#SZ60>i*p#MbP0OAoVos!Zb: -N:9iDNri' );
define( 'SECURE_AUTH_SALT', 'M?<fwvwPxTh#[bRbQf2_F5^A4lznaU#X(zN-Amwsk925*%-O^:g,J+VCP=;V!lk$' );
define( 'LOGGED_IN_SALT',   '^_`AfMeJp>O&B!{G4-3Q2b.7w5+)G+7|u[z;|=-z}+w4?kKo0FGE6N:Re:wD!LXq' );
define( 'NONCE_SALT',       'AOx$+%YhF[!D|zOQ4RTUFd}^V!r;~KC1l{T,Tv!/.c|RN)2x/JZaaI%#}q:~GOmS' );

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
